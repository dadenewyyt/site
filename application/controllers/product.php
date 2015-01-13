<?php
/**
 * Created by PhpStorm.
 * User: DEVELOPER4
 * Date: 12/31/2014
 * Time: 10:11 AM
 */

class Product extends  MY_Controller {

    public function __construct() {

        parent::__construct();
    }

    public function index(){   
       
        $paginate_page = 'include/paginate_page';
        $notification_bar = 'include/notification_bar';

        $data['footer_privacy'] = 'include/footer_privacy';
        $data['footer_subscribe'] = 'include/footer_subscribe';
        $data['header_black_menu'] = 'include/header_black_menu';
        $data['paginate_page'] = $paginate_page;
        $data['notification_bar'] = $notification_bar;

        $this->load->view('sell/sell',$data);

    }

    public function detail(){   
       
        $paginate_page = 'include/paginate_page';
        $notification_bar = 'include/notification_bar';
        $product_user_details = 'product/product_user_detail';
        $product_other_details = 'product/product_other_listing';
        $data['footer_privacy'] = 'include/footer_privacy';
        $data['footer_subscribe'] = 'include/footer_subscribe';
        $data['header_black_menu'] = 'include/header_black_menu';
        $data['product_user_details']= $product_user_details;
        $data['product_other_details']= $product_other_details;
        $data['paginate_page'] = $paginate_page;
        $data['notification_bar'] = $notification_bar;

        $this->load->view('product/product_detail',$data);

    }
}