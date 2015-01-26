<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by Daniel Adenew.
 * User: Daniel Adenew
 * Date: 12/31/2014
 * Time: 10:11 AM
 * Craig Robinson 
 * www.cytekservices.com 
 */


class Payment extends  MY_Controller {

    public function __construct() {

        parent::__construct();
    }

   /**
   * load items for sell by all active seller/memebers
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

        $this->load->view('payment/payment',$data);

    }

    /**
     * Dashboard action
     */

    public function dashboard() {

    

    }

 /**
   * Orders
   * @var id . recived Id of selected memeber 
   */

    public function orders($id) {

        $paginate_page = 'include/paginate_page';
        $notification_bar = 'include/notification_bar';
        $header_logo_white = 'include/header_logo_white';
        $product_listing = 'product/product_listing_pages';
        $main_menu = 'include/main_menu';
        $data['footer_privacy'] = 'include/footer_privacy';
        $data['footer_subscribe'] = 'include/footer_subscribe';
        $data['header_black_menu'] = 'include/header_black_menu';

        $data['product_listing'] = $product_listing;
        $data['paginate_page'] = $paginate_page;
        $data['notification_bar'] = $notification_bar;
        $data['header_logo_white'] = $header_logo_white;
        $data['main_menu'] = $main_menu;
        $this->load->view('sell/seller',$data);

    }
   /**
   * static page on how to become memeber
   *
   */
    public function purchases(){   
       
       

    }

  


}