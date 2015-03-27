<?php
/**
 * Created by PhpStorm.
 * User: DEVELOPER4
 * Date: 12/26/14
 * Time: 1:14 PM
 */

class Product_model extends MY_Model {

    public $belongs_to = array( 'profile' => array( 'model' => 'profile_model' ));


    public $has_many = array(
                              'comments' => array( 'primary_key' => 'parent_post_id' ),
                              'categories' => array( 'primary_key' => 'catag' ),
                              'medias' => array( 'model' => 'media_model' )

    );

    public $primary_key = 'id';


    public $validate = array(

    );

    /**
     * @param $post
     * @param $profile_id
     * @return bool
     */
    public function add_lisiting($post,$profile_id)
    {
        $product_name = $post['product_name'];
        $product_description = $post['product_descritpion'];
        $category = $post['categories'];
        $variation = $post['variation'];
        $sub_variation = $post['sub_variation'];
        $quantity = $post['quantity'];
        $price = $post['price'];
        $sprice = $post['sprice'];


        $insert_data = array(
                      'name' =>$product_name ,
                      'desc' =>$product_description ,
                      'price' =>$price ,
                      'sprice' =>$sprice ,
                      'category'=>$category,
                      'variation'=>$variation,
                      'sub_variation'=>$sub_variation,
                      'profile_id' => $profile_id,
                      'quantity'=>$quantity );

        $product_id = $this->insert($insert_data);

        return $product_id;

    }



} 