<?php defined('BASEPATH') OR exit('No direct script access allowed');
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
        $this->load->model('state_model','state');  
    }

   /**
   * load items for sell by
   * all active
   * seller / members
   *
   */

    public function index(){   

       $states = $this->state->populate_state_dropdown();

        $paginate_page = 'include/paginate_page';
        $notification_bar = 'include/notification_bar';
        $header_logo_white = 'include/header_logo_white';
        $product_listing = 'product/product_listing_pages';
        /**tabs***/
        $identity_validation_page = 'storesetup/identity_validation_page';
        $store_page = 'storesetup/store_page';
        $addproduct_page = 'storesetup/addproduct';
        $getpaid_page = 'storesetup/getpaid';
        $openstore_page = 'storesetup/openstore';
        $launchstore_page = 'storesetup/launchstore';
        $data['identity_validation_page'] = $identity_validation_page;
        $data['store_page'] = $store_page;
        $data['addproduct_page'] = $addproduct_page;
        $data['getpaid_page'] = $getpaid_page;
        $data['openstore_page'] = $openstore_page;
        $data['launchstore_page'] = $launchstore_page;
        //*end**tab*/
        $main_menu = 'include/main_menu';
        $data['footer_privacy'] = 'include/footer_privacy';
        $data['footer_subscribe'] = 'include/footer_subscribe';
        $data['header_black_menu'] = 'include/header_black_menu';


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

      

        $data['country'] = $country;
        $data['states'] = $states;

        $data['product_listing'] = $product_listing;
        $data['paginate_page'] = $paginate_page;
        $data['notification_bar'] = $notification_bar;
        $data['header_logo_white'] = $header_logo_white;
        $data['main_menu'] = $main_menu;

        $this->load->view('storesetup/store',$data);

    }
   
   /**
   * static page on how to become seller
   *
   */
    public function become_seller(){   
       
        $paginate_page = 'include/paginate_page';
        $notification_bar = 'include/notification_bar';
        $header_logo_white = 'include/header_logo_white';
        $main_menu = 'include/main_menu';

        $data['footer_privacy'] = 'include/footer_privacy';
        $data['footer_subscribe'] = 'include/footer_subscribe';
        $data['header_black_menu'] = 'include/header_black_menu';
        $data['paginate_page'] = $paginate_page;
        $data['notification_bar'] = $notification_bar;
        $data['header_logo_white'] = $header_logo_white;
        $data['main_menu'] = $main_menu;
        $data['store_page'] = $store_page;
        $data['addproduct_page'] = $addproduct_page;
        $data['getpaid_page'] = $getpaid_page;
        $data['openstore_page'] = $openstore_page;
        $data['launchstore_page'] = $launchstore_page;
        //*end**tab*/
        $main_menu = 'include/main_menu';
        $data['footer_privacy'] = 'include/footer_privacy';
        $data['footer_subscribe'] = 'include/footer_subscribe';
        $data['header_black_menu'] = 'include/header_black_menu';

        $data['product_listing'] = $product_listing;
        $data['paginate_page'] = $paginate_page;
        $data['notification_bar'] = $notification_bar;
        $data['header_logo_white'] = $header_logo_white;
        $data['main_menu'] = $main_menu;
       
        $this->load->view('sell/become_seller',$data);

    }

   /**
   * Seller Page when clicked on Sell page detail of seller will be shown 
   * @var id . recived Id of selected seller 
   */

    public function seller($id) {

        $paginate_page = 'include/paginate_page';
        $notification_bar = 'include/notification_bar';
        $header_logo_white = 'include/header_logo_white';
        $product_listing = 'product/product_listing_pages';
        /**tabs***/
        $store_page = 'storesetup/store_page';
        $addproduct_page = 'storesetup/addproduct';
        $getpaid_page = 'storesetup/getpaid';
        $openstore_page = 'storesetup/openstore';
        $launchstore_page = 'storesetup/launchstore';
        $data['store_page'] = $store_page;
        $data['addproduct_page'] = $addproduct_page;
        $data['getpaid_page'] = $getpaid_page;
        $data['openstore_page'] = $openstore_page;
        $data['launchstore_page'] = $launchstore_page;
        //*end**tab*/
        $main_menu = 'include/main_menu';
        $data['footer_privacy'] = 'include/footer_privacy';
        $data['footer_subscribe'] = 'include/footer_subscribe';
        $data['header_black_menu'] = 'include/header_black_menu';

        $data['product_listing'] = $product_listing;
        $data['paginate_page'] = $paginate_page;
        $data['notification_bar'] = $notification_bar;
        $data['header_logo_white'] = $header_logo_white;
        $data['main_menu'] = $main_menu;
       

        $this->load->model('profile_model','profile');

        $profile = $this->profile->with('media')->get($this->profile_id);

         if(count($profile->media) > 0)  {
          $profile_image = "/uploads/profile/" . $profile->id . "/avatar/" . $profile->media->file_name;
         } else {
          $profile_image = "/uploads/profile/no-photo.jpg";
         }

        $data['profile']  = $profile ;
        $data['profile_image']  = $profile_image ;




        $this->load->view('sell/seller',$data);

    }
}