<?php
/**
 * Created by Daniel Adenew.
 * User: DEVELOPER4
 * Date: 12/11/14
 * Time: 2:19 PM
 */

class MY_Controller extends CI_Controller {

    public $message = array('type'=>'','message'=>'');
    public $user_id ;
    public $profile_id;
    public $error = array();
    public $data = array();
    public $is_logged_in;

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
     
        $is_logged_in = (bool) $this->session->userdata('logged_in');
        

    }

    function _render_page($view, $data=null, $render=false)
    {

        $tweets_page = 'include/tweets';
        $video_page = 'include/video_page';
        $paginate_page = 'include/paginate_page';
        $notification_bar = 'include/notification_bar';
        $header_logo_white = 'include/header_logo_white';
        $main_menu = 'include/main_menu';

        $paginate_page = 'include/paginate_page';
        $notification_bar = 'include/notification_bar';

        $data['footer_privacy'] = 'include/footer_privacy';
        $data['footer_subscribe'] = 'include/footer_subscribe';
        $data['header_black_menu'] = 'include/header_black_menu';
        $data['paginate_page'] = $paginate_page;
        $data['notification_bar'] = $notification_bar;

        $data['header_black_menu'] = 'include/header_black_menu';
        $data['header_logo_white'] = 'include/header_logo_white';
        $data['show_error_page'] = 'include/show_error_page';
        $data['footer_privacy'] = 'include/footer_privacy';
        $data['footer_subscribe'] = 'include/footer_subscribe';
        $data['signin_form'] = 'include/signin_form';
        $data['new_to_madeby'] = 'include/new_to_madeby';
        $data['navigation_top'] = 'include/navigation_top';
        $data['notification_bar'] = 'include/notification_bar';

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

    /**
     * Sanitize function for input post variables
     * @param $value
     * @return string
     */
    function sanitize($value) {
        return trim(strip_tags($value));
    }

   public function load_profile($value='')
    {
         $this->load->model('profile_model','profile');

         $profile = $this->profile->with('media')->get($this->profile_id);

         if(count($profile->media) > 0)  {
          $profile_image = "/uploads/profile/" . $profile->id . "/avatar/" . $profile->media->file_name;
         } else {
          $profile_image = "/uploads/profile/no-photo.jpg";
         }

        $this->data['profile']  = $profile ;
        $this->data['profile_image']  = $profile_image ;
    }

}