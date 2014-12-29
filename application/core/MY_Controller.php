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

    public function __construct()
    {
        parent::__construct();

        $public_allowed_urls = array('users/login','welcome/index','welcome/subscribe','welcome/home','singup/index','signup/register');

      /* if(  ($this->ion_auth->logged_in()== false )&& !( in_array(uri_string(),$public_allowed_urls) ) ) {

           redirect('users/login');
       }*/
    }

    function _render_page($view, $data=null, $render=false)
    {

        $this->viewdata = (empty($data)) ? $this->data: $data;

        $view_html = $this->load->view($view, $this->viewdata, $render);

        if (!$render) return $view_html;
    }

}