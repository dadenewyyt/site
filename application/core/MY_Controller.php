<?php
/**
 * Created by Daniel Adenew.
 * User: DEVELOPER4
 * Date: 12/11/14
 * Time: 2:19 PM
 */

class MY_Controller extends CI_Controller {

    public $message;
    public $user_id ;
    public $profile_id;
    public $error = array();

    public function __construct()
    {
        parent::__construct();

        /***
         * DO this thing we you want to secure
         * evey resource
         */
       $this->logged_in();

    }

    /***
     * check if resource requires login or not
     * only listed url are accessible without login
     */

    public function logged_in(){

        $this->load->library('ion_auth');
        $public_allowed_urls = $this->config->item('public_urls');

        //get the current URL
        $controller= $this->uri->segment(1); // controller
        $action = $this->uri->segment(2); // action
        $url = $controller . '/' . $action;

        if(  ($this->ion_auth->logged_in()== false ) && !( in_array($url,$public_allowed_urls) ) ) {
              redirect('users/login');
        }
    }

    function _render_page($view, $data=null, $render=false)
    {

        $this->viewdata = (empty($data)) ? $this->data: $data;

        $view_html = $this->load->view($view, $this->viewdata, $render);

        if (!$render) return $view_html;
    }

}