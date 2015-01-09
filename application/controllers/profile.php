<?php
/**
 * Created by .
 * User: DEVELOPER4
 * Date: 12/31/2014
 * Time: 10:11 AM
 */

class Profile extends  MY_Controller {

    public function __construct() {

        parent::__construct();
    }

    public function index(){

    	
      redirect('profile/edit/1');

    }

    public function edit($id){
      $data['footer_privacy'] = 'include/footer_privacy';
      $data['footer_subscribe'] = 'include/footer_subscribe';
      $data['signin_form'] = 'include/signin_form';
      $data['new_to_madeby'] = 'include/new_to_madeby';
     $data['navigation_top'] = 'include/navigation_top'; 
           $this->load->model('state_model','state');
      $states = $this->state->populate_state_dropdown();
     $data['states'] = $states;
      $this->load->view('profile/edit',$data);

    }
}