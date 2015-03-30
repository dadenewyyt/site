<?php defined('BASEPATH') OR exit('No direct successfully allowed');
/**
 * Created by Daniel Adenew.
 * User: Daniel Adenew
 * Date: 12/31/2014
 * Time: 10:11 AM
 * Craig Robinson 
 * www.cytekservices.com 
 */


class Store extends  MY_Controller {

    var  $load_all_catagories ;
    public function __construct() {

        parent::__construct();
        $this->load->model('profile_model','profile');
        $this->load->model('store_model','store');
        $this->load_all_catagories = $this->load_catagories();
        $this->load->library('form_validation');

    }

    public function load_catagories() {

        $this->load_all_catagories = array_keys($this->config->item('categories'));
        $category_string_string = array();
        foreach ($this->load_all_catagories as $key => $value) {
          if($value == 'HL'){
            $value = "Home & Living";
          }
          if($value == 'MA'){
            $value = "Mobile Accessories";
          }

         array_push($category_string_string, ucfirst(strtolower($value)));
        }
        return $category_string_string;
    }

    public function get_categories_variation_ajax() {
           
         if(!$this->input->is_ajax_request()) {

            exit('Not allowed!');

         } 

         $categories_selected = $this->input->post('category');  
         $load_all_catagories = $this->config->item('categories');

        
         $result = array_values($load_all_catagories[strtoupper($categories_selected)]);
         $subcategories = array();
         foreach($result as $key => $value) {
        
           if(is_array($value)){
           continue;
           }
           $subcategories[$key] = $value;
          
         }
         
         
        if(!empty($subcategories))   
        $subcategories =  array('#'=>'Please Select Variation')+$subcategories;
            
        header('Content-Type: application/x-json; charset=utf-8'); 
        echo ( json_encode( $subcategories )  );

         
       }

    public function get_sub_variation_ajax() {
           

        if(!$this->input->is_ajax_request()) {

            exit('Not allowed!');

         } 
           
         $categories_selected = $this->input->post('category');  
         $variation_selected = $this->input->post('variation'); 
         $load_all_catagories = $this->config->item('categories');

        
         $result = $load_all_catagories[strtoupper($categories_selected)][$variation_selected];
         $subcategories = array();
         
                
          if(!empty($result))  
          $result =  array('#'=>'Please Select Variation')+$result;
            
          header('Content-Type: application/x-json; charset=utf-8'); 
          echo ( json_encode( $result  )  );

         

    }

    public function load_country_state(){

         /** read from
          configuration file
          and construct
          STRING,STRING Array list
         **/
        $country_list = $this->config->item('country');
        $country = array();

        foreach ($country_list as $key => $value) {
           $country[$value] = $value;
        }


        $states = $this->config->item('state');

        return array('state'=>$states,'country'=>$country);
 }

   /**
   * load items for sell by
   * all active
   * seller / members
   *
   */

    public function setup($profile_id){

        //$this->load->library('imageutility_service');
        //$result = $this->imageutility_service->resize_upload_images('','');
        $tab_status = false ;
        $store_setup_completed = FALSE;
        if( empty($post)&&($profile_id!=$this->profile_id) ) {
            redirect('sell/seller/'.$this->profile_id);
        }
        //check if user has validated or not and hide verification tab
        if( $this->profile->check_verfication($this->profile_id) ) {
             
              $tab_status = true ;
              $store_setup_completed = false ;
              $data['tab_status'] = $tab_status;
              $this->message = array('type' => 'success','message' =>"Since you have verified your account successfully !! <small> Now can continue creating your store. Please, press to <strong>'Continue'</strong> </small>");
              $data['data']['message'] = $this->message;
         }

        $list_of_country_state_data = $this->load_country_state();
        $states = $list_of_country_state_data['state'];
        $country = $list_of_country_state_data['country'];

        $paginate_page = 'include/paginate_page';
        $notification_bar = 'include/notification_bar';
        $header_logo_white = 'include/header_logo_white';
        $product_listing = 'product/product_listing_pages';
        /**tabs***/
        $identity_validation_page = 'storesetup/identity_validation_page';
        $store_page = 'storesetup/store_page';
        $addproduct_page = 'storesetup/addproduct';
        $getpaid_page = 'storesetup/getpaid';
        $previewstore_page = 'storesetup/previewstore';
        $launchstore_page = 'storesetup/launchstore';
        $data['identity_validation_page'] = $identity_validation_page;
        $data['store_page'] = $store_page;
        $data['addproduct_page'] = $addproduct_page;
        $data['getpaid_page'] = $getpaid_page;
        $data['previewstore_page'] = $previewstore_page;
        $data['launchstore_page'] = $launchstore_page;
        //*end**tab*/
        //get the current profile of the user
        $profile_data = $this->profile->get($this->profile_id);
        $data['fname'] = $profile_data->fname;
        $data['lname'] = $profile_data->lname;
        $data['zipcode'] = $profile_data->zipcode;

        $account_types = $this->config->item('account_types');


        $main_menu = 'include/main_menu';
        $data['footer_privacy'] = 'include/footer_privacy';
        $data['footer_subscribe'] = 'include/footer_subscribe';
        $data['header_black_menu'] = 'include/header_black_menu';

        $data['country'] = $country;
        $data['states'] = $states;
        $data['account_types'] = $account_types;

        $data['product_listing'] = $product_listing;
        $data['paginate_page'] = $paginate_page;
        $data['notification_bar'] = $notification_bar;
        $data['header_logo_white'] = $header_logo_white;
        $data['main_menu'] = $main_menu;

        $data['show_error_page'] = 'include/show_error_page';
        $data['data']['message'] = $this->message;

        //disable other tabs except verification tab
        $data['store_setup_completed'] = $store_setup_completed; //
        $data['tab_status'] = $tab_status;

        $data['profile_id'] = $this->profile_id ;// :)

        $this->load_profile();
        $data = array_merge($data,$this->data);

        $data['catagories'] = $this->load_all_catagories;

        $this->load->view('storesetup/store',$data);

    }

    public function process_payment($profile_id){

        // var_dump($post);
        //TODOD:Server Side Validation here
        $tab_status = TRUE ;

        if( empty($post)&&($profile_id!=$this->profile_id) ) {
            redirect('sell/seller/'.$this->profile_id);
        }

       $data['store_setup_completed'] = FALSE; //
       $data['profile_id'] = $this->profile_id ;// :)

       if( !$this->profile->check_verfication($this->profile_id) ) {
       
               $this->load->library('payment_service');
               $result = $this->payment_service->processPayment();

           if(!$result){
                        $data['data']['message'] = $this->message;
                        //$this->session->set_flashdata($data['data']['message']);
                        //disable other tabs except verification tab
                        $data['tab_status'] = FALSE; // :(

           }

       else {

             $this->message = array('type' => 'success','message' =>"You have verified your account successfully! ! <small>Now can continue creating your store by using the TAB menus.</small>");
             $data['data']['message'] = $this->message;
             $data['tab_status'] = TRUE; // :)
   
        }

        } else {

             $this->message = array('type' => 'success','message' =>"You have verified your account successfully! ! <small>Now can continue creating your store by using the TAB menus.</small>");
             $data['data']['message'] = $this->message;
             $data['tab_status'] = TRUE; // :)
   
        }

        $list_of_country_state_data = $this->load_country_state();
        $states = $list_of_country_state_data['state'];
        $country = $list_of_country_state_data['country'];

        $account_types = $this->config->item('account_types');

        $paginate_page = 'include/paginate_page';
        $notification_bar = 'include/notification_bar';
        $header_logo_white = 'include/header_logo_white';
        $product_listing = 'product/product_listing_pages';

        /**Tabs***/
        $identity_validation_page = 'storesetup/identity_validation_page';
        $store_page = 'storesetup/store_page';
        $addproduct_page = 'storesetup/addproduct';
        $getpaid_page = 'storesetup/getpaid';
        $previewstore_page = 'storesetup/previewstore';
        $launchstore_page = 'storesetup/launchstore';
        $data['identity_validation_page'] = $identity_validation_page;
        $data['store_page'] = $store_page;
        $data['addproduct_page'] = $addproduct_page;
        $data['getpaid_page'] = $getpaid_page;
        $data['previewstore_page'] = $previewstore_page;
        $data['launchstore_page'] = $launchstore_page;
        //*end**tab*/
        //get the current profile of the user
        $profile_data = $this->profile->get($this->profile_id);
        $data['fname'] = $profile_data->fname;
        $data['lname'] = $profile_data->lname;
        $data['zipcode'] = $profile_data->zipcode;
        $data['account_types'] = $account_types;

        $main_menu = 'include/main_menu';
        $data['footer_privacy'] = 'include/footer_privacy';
        $data['footer_subscribe'] = 'include/footer_subscribe';
        $data['header_black_menu'] = 'include/header_black_menu';
        $data['show_error_page'] = 'include/show_error_page';

        $data['country'] = $country;
        $data['states'] = $states;

        $data['product_listing'] = $product_listing;
        $data['paginate_page'] = $paginate_page;
        $data['notification_bar'] = $notification_bar;
        $data['header_logo_white'] = $header_logo_white;
        $data['main_menu'] = $main_menu;
        
        $this->load_profile();
        $data = array_merge($data,$this->data);
        $data['catagories'] = $this->load_all_catagories;

        $this->load->view('storesetup/store',$data);
    }

  public function save($profile_id) {

      // var_dump($post);
      //TODOD:Server Side Validation here
      $tab_status = TRUE ;

      if( empty($post)&&($profile_id!=$this->profile_id) ) {
          redirect('sell/seller/'.$this->profile_id);
      }

      //capture post data
      $post = $this->input->post();
     
      $this->form_validation->set_rules('storename', 'StoreName', 'trim|required|min_length[2]|max_length[45]|xss_clean');
      $this->form_validation->set_rules('store_description', 'store_description', 'trim|required|xss_clean');
      $this->form_validation->set_rules('product_name', 'Product Name', 'trim|required|min_length[2]|max_length[30]|xss_clean');
      $this->form_validation->set_rules('product_descritpion', 'Product Description', 'trim|required|xss_clean');
      $this->form_validation->set_rules('categories', 'Categories', 'trim|required|callback_check_default|xss_clean');
      $this->form_validation->set_message('check_default','For categories please ,select something other than the default');
      $this->form_validation->set_rules('quantity', 'Quantity', 'trim|required|xss_clean|numeric');
      $this->form_validation->set_rules('price', 'Product Name', 'trim|required|xss_clean|numeric');
      $this->form_validation->set_rules('sprice', 'Special Price', 'trim|required|xss_clean|numeric');
      $this->form_validation->set_rules('account_type', 'Account Type', 'trim|required|xss_clean');
      $this->form_validation->set_rules('bankbranch', 'Bank Branch', 'trim|required|min_length[2]|max_length[45]|xss_clean|');
      $this->form_validation->set_rules('account_owner', 'Account_owner', 'trim|required|min_length[2]|max_length[45]|xss_clean|numeric');
      $this->form_validation->set_rules('routenumber', 'Route Number', 'trim|required|min_length[5]|max_length[45]|xss_clean|numeric');
      $this->form_validation->set_rules('account_type', 'Categories', 'trim|required|callback_check_default_account|xss_clean');
      $this->form_validation->set_message('check_default_account','For account type please ,select something other than the default');
      $this->form_validation->set_rules('accountnumber', 'Account Number', 'trim|required|xss_clean|matchs[reaccountnumber]');
      $this->form_validation->set_rules('reaccountnumber', 'Re-Enter Account number', 'trim|required|xss_clean|');
      $this->form_validation->set_rules('account_owner', 'Account_owner', 'trim|required|min_length[2]|max_length[45]|xss_clean');


      if ($this->form_validation->run() == TRUE) {

          $this->load->model('media_model','media');

          $file_post_name = 'userfile';

          $upload_result =  $this->media->upload_media_store_and_products($this->profile_id,$file_post_name);


         if( !empty($upload_result['error']) ) {
         
                //TODO:SHOW ERROR MESSAGE
                echo $upload_result['error'];
                $this->message = $this->message+array('type' => 'error','message' =>$upload_result['error']);
                $data['data']['message'] =  $this->message;
               //disable other tabs except verification tab
                $tab_status = TRUE ;
                $data['store_setup_completed'] = FALSE; //
                $data['tab_status'] = $tab_status; //
           }

         else {


         //TODO:SUCCESS DO THE SAVING of STORE WITH MEDIA DATA / UPLOAD DATA
        //save store
        $store_id = $this->store->save_store($post,$this->profile_id);

        //STORE MEDIA INFO
         $upload_result_store = array();
         $upload_result_store['file_name'] = $upload_result[0]['file_name'];
         $upload_result_store['file_path'] = $upload_result[0]['file_path'];

         $store_image_id = $this->media->save_or_update_store($this->profile_id,$store_id,$upload_result_store);

         //save products and its media
        $this->load->model('product_model','product');
        $product_id = $this->product->add_lisiting($post,$this->profile_id);

        array_shift($upload_result); // remove store image upload result from products

         //to be inserted
         $array_of_product_image_ids = array();

         //insert the five product image into media table and collect inserted id
        foreach($upload_result as $upload_result_product){
            $array_of_product_image_ids[] = $this->media->save_or_update_product($this->profile_id,$product_id,$upload_result_product);
         }

         //NOW SAVE ACCOUNT INFORMATION

         $this->load->model('account_model','account');

         $account_id = $this->account->save_account_profile($this->profile_id,$post);
        
        //disable other tabs except verification tab
 
         $data['store_setup_completed'] = TRUE; //
         $data['tab_status'] = TRUE; //

         $this->message = array('type' => 'success','message' =>"You have setup you store succesfully!! <small>Now can continue viewing your store.</small>");
         $data['data']['message'] = $this->message;

        }

      } else {

          $data['store_setup_completed'] = FALSE; //
          $data['tab_status'] = TRUE; //
          $this->message = array('type' => 'error', 'message' => validation_errors() );
          $data['data']['message'] = $this->message;
      }

        $data['profile_id'] = $this->profile_id ;// :)
        $list_of_country_state_data = $this->load_country_state();
        $states = $list_of_country_state_data['state'];
        $country = $list_of_country_state_data['country'];

        $paginate_page = 'include/paginate_page';
        $notification_bar = 'include/notification_bar';
        $header_logo_white = 'include/header_logo_white';
        $product_listing = 'product/product_listing_pages';
        /**tabs***/
        $identity_validation_page = 'storesetup/identity_validation_page';
        $store_page = 'storesetup/store_page';
        $addproduct_page = 'storesetup/addproduct';
        $getpaid_page = 'storesetup/getpaid';
        $previewstore_page = 'storesetup/previewstore';
        $launchstore_page = 'storesetup/launchstore';
        $data['identity_validation_page'] = $identity_validation_page;
        $data['store_page'] = $store_page;
        $data['addproduct_page'] = $addproduct_page;
        $data['getpaid_page'] = $getpaid_page;
        $data['previewstore_page'] = $previewstore_page;
        $data['launchstore_page'] = $launchstore_page;
        //*end**tab*/
        //get the current profile of the user
        $profile_data = $this->profile->get($this->profile_id);
        $data['fname'] = $profile_data->fname;
        $data['lname'] = $profile_data->lname;
        $data['zipcode'] = $profile_data->zipcode;

        $account_types = $this->config->item('account_types');


        $main_menu = 'include/main_menu';
        $data['footer_privacy'] = 'include/footer_privacy';
        $data['footer_subscribe'] = 'include/footer_subscribe';
        $data['header_black_menu'] = 'include/header_black_menu';

        $data['country'] = $country;
        $data['states'] = $states;
        $data['account_types'] = $account_types;

        $data['product_listing'] = $product_listing;
        $data['paginate_page'] = $paginate_page;
        $data['notification_bar'] = $notification_bar;
        $data['header_logo_white'] = $header_logo_white;
        $data['main_menu'] = $main_menu;

        $data['show_error_page'] = 'include/show_error_page';
        $data['data']['message'] = $this->message;

     
       
        $this->load_profile();
        $data = array_merge($data,$this->data);
        $data['catagories'] = $this->load_all_catagories;

        $this->load->view('storesetup/store',$data);

       


  }

    function check_default($value) {
        if($value!='#'){
            return true;
        }
        return false;
    }

    function check_default_account($value) {
        if($value!='#'){
            return true;
        }
        return false;
    }

}