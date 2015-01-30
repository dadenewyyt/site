<?php
/**
 * Created by Daniel Adenew.
 * User: DEVELOPER4
 * Date: 12/11/14
 * Time: 2:19 PM
 */

class MY_Controller extends CI_Controller {

    protected $message = array('type'=>'','message'=>'');
    protected $user_id ;
    protected $profile_id;
    protected $error = array();

    public function __construct()
    {
        parent::__construct();

        /***
         * DO this thing we you want to secure
         * evey resource
         */
       $this->logged_in();

        //make available useful variables
        $this->get_session_variables();


    }

    /***
     * check if resource requires login or not
     * only listed url are accessible without login
     */

    public function logged_in(){

        $this->load->library('ion_auth');
        $public_allowed_urls = $this->config->item('public_urls');

        /*** this works but better below code
        //get the current URL
        $controller= $this->uri->segment(1); // controller
        $action = $this->uri->segment(2); // action
        $url = $controller . '/' . $action;
       **/

        $controller= $this->router->class ; //controller
        $action =$this->router->method; // action
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

    public function get_session_variables(){

        $profile_id = $this->session->userdata('profile_id');
        $user_id = $this->session->userdata('user_id');

        //get the current user profile id to upload / create a folder by its id
        $this->profile_id =  isset($profile_id) ? $profile_id : null ;
        //user_id
        $this->user_id =  isset($user_id) ? $user_id : null ;


    }

}