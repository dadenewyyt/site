<?php
/**
 * Created by Daniel Adenew.
 * User: Craig Robinson
 * Date: 12/31/2014
 * Time: 10:11 AM
 */

class Product extends  MY_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('product_model','products');
    }

    public function index(){   
       
        $paginate_page = 'include/paginate_page';
        $notification_bar = 'include/notification_bar';

        $data['footer_privacy'] = 'include/footer_privacy';
        $data['footer_subscribe'] = 'include/footer_subscribe';
        $data['header_black_menu'] = 'include/header_black_menu';
        $data['paginate_page'] = $paginate_page;
        $data['notification_bar'] = $notification_bar;

        redirect('sell/sell',$data);

    }

    public function products(){   
       
        $paginate_page = 'include/paginate_page';
        $notification_bar = 'include/notification_bar';

        $data['footer_privacy'] = 'include/footer_privacy';
        $data['footer_subscribe'] = 'include/footer_subscribe';
        $data['header_black_menu'] = 'include/header_black_menu';
        $data['paginate_page'] = $paginate_page;
        $data['notification_bar'] = $notification_bar;

        redirect('product/products',$data);

    }

    /**
     * @param $id
     */
    public function detail($id){
            
        $product = array();

        $product= $this->products->get($id);
        if( !empty($product)){
        $product = $this->products->get_single_product_detail($id);
        }


        $paginate_page = 'include/paginate_page';
        $notification_bar = 'include/notification_bar';
        $header_logo_white = 'include/header_logo_white';
        $product_user_details = 'product/product_user_detail';
        $product_other_details = 'product/product_other_listing';
        $comment_view = 'comment/comment_view';
        $main_menu = 'include/main_menu';

        $data['main_menu'] = $main_menu;
        $data['header_logo_white'] = $header_logo_white;
        $data['footer_privacy'] = 'include/footer_privacy';
        $data['footer_subscribe'] = 'include/footer_subscribe';
        $data['header_black_menu'] = 'include/header_black_menu';
        $data['social_sharing_button'] = 'include/social_sharing_buttons';

  
        $data['product_user_details']= $product_user_details;
        $data['product_other_details']= $product_other_details;
        $data['paginate_page'] = $paginate_page;
        $data['notification_bar'] = $notification_bar;
        $data['comment_view'] = $comment_view;

        $data['product'] = $product;


        $this->load->view('product/product_detail',$data);

    }
}