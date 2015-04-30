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
        $this->load->model('profile_model','profile');
        $this->load->model('media_model','media');
        $this->load->model('store_model','store');
        $this->load->library('pagination');
       
    }

   /**
   * load items for sell by
   * all active
   * seller / members
   *
   */

    public function index(){   

      

       $total_rows = $this->profile->count_by('is_profile_verified',1);
    

        $config = array();

        $config["base_url"] = base_url() . "sell/index";
        $config["total_rows"] = $total_rows;
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $profiles = $this->profile->get_Verfied_Profiles($config["per_page"], $page);

        $data["profiles"] = $profiles;

       $data['is_store_created'] = !empty($this->is_store_created) ? $this->is_store_created : false;


       $data["links"] = $this->pagination->create_links();

       
       
       $paginate_page = 'include/paginate_page';
       $notification_bar = 'include/notification_bar';
       $header_logo_white = 'include/header_logo_white';
       $seller_lisiting_page = 'sell/seller_listing_page';
       $main_menu = 'include/main_menu';

       $data['footer_privacy'] = 'include/footer_privacy';
       $data['footer_subscribe'] = 'include/footer_subscribe';
       $data['header_black_menu'] = 'include/header_black_menu';

       $data['seller_lisiting_page'] = $seller_lisiting_page;
       $data['paginate_page'] = $paginate_page;
       $data['notification_bar'] = $notification_bar;
       $data['header_logo_white'] = $header_logo_white;
       $data['main_menu'] = $main_menu;

        //TODO: load memeber /profile model
        //TODO:get_all who isVerfied
        //TODO:



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
        $store_listing_tab = 'include/store_lisiting_tab';
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

        $data['is_store_created'] = $this->is_store_created;
        $data['store_listing_tab'] = $store_listing_tab;
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

        $all_store_data = $this->store->get_store_lisiting($id,10,10);
       

        $data['data']['message'] = null;

        $data = array_merge($data,$this->data);

       $data['all_store_data'] = $all_store_data;
       //var_dump($all_store_data);exit;

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
        $store_listing_tab = 'include/store_lisiting_tab';
        $store_page = 'storesetup/store_page';
        $addproduct_page = 'storesetup/addproduct';
        $getpaid_page = 'storesetup/getpaid';
        $openstore_page = 'storesetup/openstore';
        $launchstore_page = 'storesetup/launchstore';
         $data['store_listing_tab'] = $store_listing_tab;
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

        $data['is_store_created'] = !empty($this->is_store_created) ? $this->is_store_created : 0;
       

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

    

      
       $data['is_store_created'] = !empty($this->is_store_created) ? $this->is_store_created : false;


       
        
       

        $data['data']['message'] = null;

        $data = array_merge($data,$this->data);
        
        //do pagination for store

        $total_rows = $this->store->count_by('is_launched',1);
    
        $config = array();

        $config["base_url"] = base_url() . "sell/seller";
        $config["total_rows"] = $total_rows;
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $all_store_data = $this->store->get_store_lisiting($this->profile_id,$config["per_page"], $page);
        $data["store_links"] = $this->pagination->create_links();

        $data['all_store_data'] = $all_store_data;
       //var_dump($all_store_data);exit;
        
        $data = array_merge($data,$this->data);
        //var_dump($data);exit;
        $this->load->view('sell/seller',$data);

    }
}