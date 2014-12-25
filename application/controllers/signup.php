<?php
/**
 * Created by PhpStorm.
 * User: DEVELOPER4
 * Date: 12/25/14
 * Time: 9:32 AM
 */

class SignUp extends MY_Controller {

  public function __construct() {
      parent::__construct();
  }


  public function index() {

      $data['footer_privacy'] = 'include/footer_privacy';
      $data['footer_subscribe'] = 'include/footer_subscribe';
      $this->load->view('layout/signup',$data);
  }

}