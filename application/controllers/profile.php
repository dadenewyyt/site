<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by Daniel Adenew.
 * User: Daniel Adenew
 * Date: 12/31/2014
 * Time: 10:11 AM
 * Craig Robinson 
 * www.cytekservices.com 
 */


class Profile extends  MY_Controller {

    public function __construct() {

        parent::__construct();

        $this->load->library('form_validation');
    }

    public function index(){

    	
      redirect('profile/edit/1');

    }

    public function edit($id) {


      $this->load->model('profile_model', 'profile');
      $profile = $this->profile->with('media')->get($id);
      $profile_image = '';

      if(!empty($profile->media)) {
          $profile_image = "/uploads/profile/" . $profile->id . "/avatar/" . $profile->media->file_name;
      }

      $data['header_black_menu'] = 'include/header_black_menu';
      $data['header_logo_white'] = 'include/header_logo_white';
      $data['show_error_page'] = 'include/show_error_page';
      $data['footer_privacy'] = 'include/footer_privacy';
      $data['footer_subscribe'] = 'include/footer_subscribe';
      $data['signin_form'] = 'include/signin_form';
      $data['new_to_madeby'] = 'include/new_to_madeby';
      $data['navigation_top'] = 'include/navigation_top';
      $data['notification_bar'] = 'include/notification_bar';

      $this->load->model('state_model','state');
      $states = $this->state->populate_state_dropdown();
      $data['states'] = $states;
      $data['profile'] = $profile;
      $data['profile_image']= $profile_image;
       $data['data']['message'] = $this->message;         
      $this->load->view('profile/edit',$data);

    }

    public function save_profile(){

      $this->load->model('profile_model', 'profile');
      $profile = $this->profile->with('media')->get($this->profile_id);
      $profile_image = '';

      if(!empty($profile->media)) {
          $profile_image = "/uploads/profile/" . $profile->id . "/avatar/" . $profile->media->file_name;
      }

      //validation
      $tables = $this->config->item('tables','ion_auth');
      //validate form input
      $this->form_validation->set_rules('bioinfo', 'This field can\'t be empty', 'required|xss_clean');
      $this->form_validation->set_rules('imgfile','Please upload your profile image', 'required|xss_clean');
      $this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'required|valid_email|is_unique['.$tables['users'].'.email]|matches[confirm_email]');
      $this->form_validation->set_rules('confirm_email', 'required', 'required');
      $this->form_validation->set_rules('password', $this->lang->line('create_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[confirm_password]');
      $this->form_validation->set_rules('confirm_password', $this->lang->line('create_user_validation_password_confirm_label'), 'required');
 

      if( $this->form_validation->run() == true ) {
       
            //path should be profile/profileid/avatar , profile/profileid/video , profile/profileid/products
            $pathToUpload = "./uploads/profile/". $this->profile_id ."/avatar/";
            //load the configuration
            $upload_config = $this->config->item('upload_config_profile_edit');

            //replace the upload path based to be based on profile id

            $upload_config['upload_path'] = $pathToUpload;

            $this->load->model('ion_auth_model', 'users');
            $this->load->model('media_model', 'media');

            $profile_image_id = $this->media->save_or_update($this->profile_id,$upload_config);

            //TODO:need validation here
            $password = $this->input->post('password');
            $cpassword = $this->input->post('confirm_password');
            $city = $this->input->post('city');
            $state = $this->input->post('state_id');
            $city = $this->input->post('city');
            $zip = $this->input->post('zip');
            $job_title = $this->input->post('job_title');
            $company_name = $this->input->post('company_name');

            //update user account details

            $updated_password = $this->users->hash_password($password,''); //can pass salt value here

            $this->users->update($this->user_id, array('password' => $password));

            //update profile information details
            $this->profile->update($this->profile_id,
                array('city' => $city,
                    'state' => $state,
                    'zipcode' => $zip,
                    'job_title' => $job_title,
                    'company_name' => $company_name,
                    'profile_image_id' => $profile_image_id
                )
            );

            //TODO:success page must be displayed
            //TODO:link must be provide to visit home, account
            //TODO:controller and self refreshing page
            //goto home
            
             redirect('payment/payment','refresh');

            }

           else {   

                
                //TODO:add message and validation error here
                // throw new Exception('error'.$e);
                  $this->message['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
                  $this->message = array('type' => 'error', 'message' =>  $this->message['message'] );
                  
            }

                $data['header_black_menu'] = 'include/header_black_menu';
                $data['header_logo_white'] = 'include/header_logo_white';
                $data['show_error_page'] = 'include/show_error_page';
                $data['footer_privacy'] = 'include/footer_privacy';
                $data['footer_subscribe'] = 'include/footer_subscribe';
                $data['signin_form'] = 'include/signin_form';
                $data['new_to_madeby'] = 'include/new_to_madeby';
                $data['navigation_top'] = 'include/navigation_top';
                $data['notification_bar'] = 'include/notification_bar';     
                $this->session->set_flashdata('message',  $this->message['message']);
                $data['data']['message'] = $this->message;                         
                $this->session->set_flashdata('message',$this->message['message']);
                $data['profile'] = $profile;
                $data['profile_image']= $profile_image;
                $this->load->view('profile/edit',$data);         
                  


      }
    
}