<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by Daniel Adenew.
 * User: Daniel Adenew
 * Date: 12/31/2014
 * Time: 10:11 AM
 * Craig Robinson 
 * www.cytekservices.com 
 */


class Sell extends  MY_Controller {

    public function __construct() {

        parent::__construct();
    }

   /**
   * load items for sell by
   * all active
   * seller / members
   *
   */

    public function index(){   
       
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

       $this->load->view('sell/sell',$data);

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
        $this->load->view('sell/become_seller',$data);

    }

    /**
   * Seller Page when clicked on Sell page detail of seller will be shown 
   * @var id . recived Id of selected seller 
   */

    public function sellers($id) {

        
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
        $data['show_error_page'] = 'include/show_error_page';
       
        //becuse it non logged in session we need to pass profile_id
        $this->load_profile(intval($id));
        
         if( empty($this->data['profile']) || null == $this->data['profile'] ) {
             $this->message = array('type'=>'error','message'=>"<strong>Unable to find the selected profile. Please , try to select again.&nbsp;&nbsp;<a class='btn btn-sm btn-info' href=".base_url('sell')." >Back to Sell Page</a></strong>");
             $data['data']['message'] = $this->message;
             $this->load->view('sell/sellers',$data);
             return ;
        }
 

        $data['data']['message'] = null;

        $data = array_merge($data,$this->data);

       

        $this->load->view('sell/sellers',$data);

    }

   /**
   * Seller Page when clicked on Sell page detail of seller will be shown 
   * @var id . recived Id of selected seller 
   * secured methods
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
       

        //becuse it non logged in session we need to pass profile_id
        $this->load_profile(intval($this->profile_id));

        //TODO:add error message view if nessary
        /**
         if( empty($this->data['profile']) || null == $this->data['profile'] ) {
             $this->message = array('type'=>'error','message'=>"<strong>Unable to find the selected profile. Please , try to select again.&nbsp;&nbsp;<a class='btn btn-sm btn-info' href=".base_url('sell')." >Back to Sell Page</a></strong>");
             $data['data']['message'] = $this->message;
             $this->load->view('sell/sellers',$data);
             return ;
        }
       

        $data['data']['message'] = null;
        */
        
        $data = array_merge($data,$this->data);

        $this->load->view('sell/seller',$data);

    }
}