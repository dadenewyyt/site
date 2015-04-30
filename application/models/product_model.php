<?php
/**
 * Created by PhpStorm.
 * User: DEVELOPER4
 * Date: 12/26/14
 * Time: 1:14 PM
 */

class Product_model extends MY_Model {

    public $belongs_to = array( 'profile' => array('primary_key' => 'profile_id', 'model' => 'profile_model' ),
                                'store' => array('primary_key' => 'store_id', 'model' => 'store_model'));


    public $has_many = array(
                              'comments' => array( 'primary_key' => 'parent_post_id' ),
                              'categories' => array( 'primary_key' => 'catag' ),
                              'medias' => array( 'primary_key' => 'product_id','model'=>"media_model")

    );

    public $primary_key = 'id';


    public $validate = array(

    );

    /**
     * @param $post
     * @param $profile_id
     * @return bool
     */
    public function add_lisiting($post,$profile_id,$store_id)
    {
        $product_name = $post['product_name'];
        $product_description = $post['product_descritpion'];
        $category = $post['categories'];
        $variation = isset( $post['variation'])? $post['variation'] : '';
        $sub_variation = isset( $post['sub_variation'] )? $post['sub_variation'] : '';
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
                      'quantity'=>$quantity,
                      'store_id'=>intval($store_id),
                      );

        $product_id = $this->insert($insert_data);

        return $product_id;

    }

    public function display_all_product($per_page, $page) {

      $all_products = $this->limit($per_page, $page)->with('medias')->with('profile')->get_all();
     //var_dump($all_products);exit;

      //ToDO:Construct arrray of products with media and p
      //profile details as array of objects and pass to the view simpley

      $product_details = array();      
    
      foreach ($all_products as $key => $value) {

        $product_details[$key]['product_id'] = $value->id;
        $product_details[$key]['name'] = $value->name;
        $product_details[$key]['desc'] = $value->desc;
        $product_details[$key]['price'] = $value->price;

      //TODO:When there are many products on the database this code need to be fixed or properly adujsted
      if(!empty($value->medias)) {
        $product_details[$key]['image'] = base_url().'/uploads/profile/'.$value->profile->id.'/products/'.$value->medias[$key]->file_name ; //get only the first product image
       }

       else  {$product_details[$key]['image'] ='';} 

        $product_details[$key]['seller_name'] = (ucfirst($value->profile->fname));
      }
      //var_dump($product_details);exit;

      return ((array)$product_details);

    }

    public function get_single_product_detail($id) {

        $product_detail = $this->with('medias')
                                ->with('profile')
                                ->get($id);

       

        $product = array();
        
          $product['product_id'] = $product_detail->id;
          $product['product_name'] = $product_detail->name;
          $product['desc'] = $product_detail->desc;
          $product['price'] = $product_detail->price;
          //ask for profile data associated with this product
          $product_profile_data = $this->with('profile')->get($id);
          $product['profile_id'] = $product_profile_data->profile->id;
        
          $medias = (array) $product_detail->medias;
          
          if(is_array($medias)){
            $i =0;
               foreach ( $medias as $values) {
                 $product['image'][$i] = base_url().'uploads/profile/'.$product['profile_id'].'/products/'.$values->file_name ; //get only the first product image
                $i++;
                } 
          }
           else {
             $product['image'][0] = base_url().'uploads/profile/'.$value->profile->id.'/products/'.$value->medias[0]->file_name ; //get only the first product image
           }

          //combine array result data

          $profile_details = $this->get_profile_details($product['profile_id']);

         
           //var_dump(array_merge($product,$profile_details));exit;
           return array_merge($product,$profile_details);
    }
    
    /**
     * load single profile of the associated product owner with his profile
     * image and retrun collection of data on array 
     * 
     * */

    public function get_profile_details($profile_id) {

           $this->load->model('profile_model','profile');
           
           $profile= $this->profile->with('user')->get($profile_id);
           $profile_user_name = $profile->user->username;
           $profile_joined = $profile->created_date;
           $profile_name =  (ucfirst($profile->fname));

            //TODO:replace with_media method
              $profile = $this->profile->with('media')->get($profile_id);
              //var_dump($profile);

               if(!empty($profile) && count($profile->media) > 0)  {

                $profile_image = "uploads/profile/" . $profile->id . "/avatar/" . $profile->media->file_name;
              
               
               } else {

                $profile_image = "uploads/no-photo.jpg";
               
               }

                $profile_details['username'] =  $profile_user_name ;   
                $profile_details['profile_image'] = base_url().$profile_image;
                $profile_details['joined_date'] = $profile_joined;
                $profile_details['seller_name'] = $profile_name;
                
         
           return $profile_details;


    }


} 