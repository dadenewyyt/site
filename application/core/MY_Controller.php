<?php
/**
 * Created by Daniel Adenew.
 * User: DEVELOPER4
 * Date: 12/11/14
 * Time: 2:19 PM
 */

class MY_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $public_allowed_urls = array('welcome/index');

        if( $this->ion_auth->logged_in()== false && in_array(uri_string(),$public_allowed_urls) == true ) {

            redirect('users/login');
        }
    }


}