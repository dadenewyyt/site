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

    public function __construct() {

        parent::__construct();
        $this->load->model('profile_model','profile');


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

    public function index(){


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


        $main_menu = 'include/main_menu';
        $data['footer_privacy'] = 'include/footer_privacy';
        $data['footer_subscribe'] = 'include/footer_subscribe';
        $data['header_black_menu'] = 'include/header_black_menu';

        $data['country'] = $country;
        $data['states'] = $states;

        $data['product_listing'] = $product_listing;
        $data['paginate_page'] = $paginate_page;
        $data['notification_bar'] = $notification_bar;
        $data['header_logo_white'] = $header_logo_white;
        $data['main_menu'] = $main_menu;

        $data['show_error_page'] = 'include/show_error_page';
        $data['data']['message'] = $this->message;

        //disable other tabs except verification tab
        $tab_status = FALSE ;
        $data['tab_status'] = $tab_status;

        $this->load->view('storesetup/store',$data);

    }

    public function process_payment(){

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

        $this->load->view('storesetup/store',$data);
    }

}