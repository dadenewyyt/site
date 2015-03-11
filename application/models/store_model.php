<?php
/**
 * Created by PhpStorm.
 * User: DEVELOPER4
 * Date: 12/26/14
 * Time: 1:14 PM
 */

class Store_model extends MY_Model {

    public function __construct() {
        parent::__construct() ;
        $this->_database = $this->db;
    }

    protected function timestamps($table)
    {
        //$table['created_date'] = $table['updated_date'] = date('Y-m-d H:i:s');
        $table['created_date'] = date('Y-m-d H:i:s');
        return $table;
    }

    /**
     * Define relationship a memeber
     * have One to One , One to Many ,
     * Many to Many if any
     */


    public $has_many = array('products' => array( 'primary_key' => 'product_id' ,'model'=>"product_model"),
                             'medias' => array( 'primary_key' => 'media_id' ,'model'=>"media_model") );

    public $belongs_to = array('profile' => array( 'primary_key' => 'owner_profile_id' ,'model'=>"profile_model") );

    /**
     * @param $post
     * @param $profile_id
     * @return bool
     */
    public function save_store($post,$profile_id)
    {


        $storename = $post['storename'];
        $store_descritpion = $post['store_description'];

      
        $insert_data = array(
               'store_name' =>$storename ,
               'desc' =>$store_descritpion ,
               'owner_profile_id'=>$profile_id,
               'is_launched' =>1,
               'is_paid'=>1
         );

        $store_id = $this->insert($insert_data) ;  
        return $store_id;

    }

}









