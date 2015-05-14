<?php
/**
 * Created by Daniel Adenew.
 * User: Daniel Adenew
 * Date: 12/26/14
 * Time: 1:14 PM
 * Craig Robinson : One World Solutions LLC
 */

class Product_model extends MY_Model {

    public $belongs_to = array( 'profile' => array('primary_key' => 'profile_id', 'model' => 'profile_model' ),
                                'store' => array('primary_key' => 'store_id', 'model' => 'store_model'));


    public $has_many = array(
                              'comments' => array( 'primary_key' => 'parent_post_id' ),
                              'categories' => array( 'primary_key' => 'catag' ),
                              'medias' => array( 'primary_key' => 'product_id','model'=>"media_model")

    );


    public function _order_by_created_date() {

        $this->db->order_by('created_date', 'desc');
        return $this;
    }

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
        $product_details=$post['product_details'];

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
                      'product_details'=>$product_details,
                      );

        $product_id = $this->insert($insert_data);

        return $product_id;

    }

    public function display_all_product($per_page, $page) {

      $all_products = $this->limit($per_page, $page)->with('medias')->with('profile')->get_all();
     
     
      //ToDO:Construct array of products with media and p
      //profile details as array of objects and pass to the view simpley

      $product_details = array();      
    
       //var_dump($all_products);
       // var_dump($value);;
      foreach ($all_products as $key => $product_object) {

        $product_details[$key]['product_id'] = $product_object->id;
        $product_details[$key]['name'] = $product_object->name;
        $product_details[$key]['desc'] = $product_object->desc;
        $product_details[$key]['price'] = $product_object->price;
        $product_details[$key]['product_details'] = $product_object->product_details;
        $product_details[$key]['profile_id'] = $product_object->profile->id;
      //TODO:When there are many products on the database this code need to be fixed or properly adjusted
      if(!empty($product_object->medias)) {
        $product_details[$key]['image'] = base_url().'/uploads/profile/'.$product_object->profile->id.'/products/'.$product_object->medias[0]->file_name ; //get only the first product image
       }

       else  {$product_details[$key]['image'] ='';} 

        $product_details[$key]['seller_name'] = (ucfirst($product_object->profile->fname));
      }
      //exit;
     
      return ((array)$product_details);

    }

   public function get_new_arrival_products($per_page, $page) {

       $all_new_arrival_products = $this->limit($per_page, $page)->with('medias')->with('profile')->_order_by_created_date()->get_all();
     //var_dump($all_products);exit;

      //ToDO:Construct arrray of products with media and p
      //profile details as array of objects and pass to the view simpley

      $new_arrival_product_details = array();      
    
      foreach ($all_new_arrival_products as $key => $product_object) {

        $new_arrival_product_details[$key]['product_id'] = $product_object->id;
        $new_arrival_product_details[$key]['name'] = $product_object->name;
        $new_arrival_product_details[$key]['desc'] = $product_object->desc;
        $new_arrival_product_details[$key]['price'] = $product_object->price;
        $new_arrival_product_details[$key]['product_details'] = $product_object->product_details;
        $new_arrival_product_details[$key]['profile_id'] = $product_object->profile->id;
      //TODO:When there are many products on the database this code need to be fixed or properly adujsted
      if(!empty($product_object->medias)) {
        $new_arrival_product_details[$key]['image'] = base_url().'/uploads/profile/'.$product_object->profile->id.'/products/'.$product_object->medias[$key]->file_name ; //get only the first product image
       }

       else  {$new_arrival_product_details[$key]['image'] ='';} 

        $new_arrival_product_details[$key]['seller_name'] = (ucfirst($product_object->profile->fname));
      }
     
      return ((array)$new_arrival_product_details);

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
          $product['product_details'] = $product_detail->product_details;

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
             $product['image'][0] = base_url().'uploads/profile/'.$product->profile->id.'/products/'.$product->medias[0]->file_name ; //get only the first product image
           }

          //combine array result data

          $profile_details = $this->get_profile_details($product['profile_id']);

         
           //var_dump(array_merge($product,$profile_details));exit;
           return array_merge($product,$profile_details);
    }
    
    /**
     * load single profile of the associated product owner with his profile
     * image and return collection of data on array
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