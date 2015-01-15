<?php
/**
 * Created by PhpStorm.
 * User: DEVELOPER4
 * Date: 12/31/2014
 * Time: 10:11 AM
 */

class Buy extends  MY_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->helper('general');
    }

    public function index(){
      
   
       $tweets_page = 'include/tweets';
       $paginate_page = 'include/paginate_page';
       $notification_bar = 'include/notification_bar';
       $header_logo_white = 'include/header_logo_white';
       $main_menu = 'include/main_menu';
      
       $twee_texts = twitter_helper(4,10);
       $tweetes_content = $twee_texts;

        $data['footer_privacy'] = 'include/footer_privacy';
        $data['footer_subscribe'] = 'include/footer_subscribe';
        $data['header_black_menu'] = 'include/header_black_menu';
        $data['header_logo_white'] = $header_logo_white;

        $data['main_menu'] = $main_menu;
        $data['tweets_page'] = $tweets_page;
        $data['paginate_page'] = $paginate_page;
        $data['notification_bar'] = $notification_bar;
        $data['data']['tweetes_content'] = $tweetes_content;
        $this->load->view('buy/buy',$data);

    }
}