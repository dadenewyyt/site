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
        $this->load->model('profile_model', 'profile');
        $this->load->model('ion_auth_model', 'users');
        $this->load->model('media_model', 'media');

    }

    public function index(){


    }

    public function edit($id) {

      //$this->output->enable_profiler(TRUE);

      $profile = $this->profile->with('media')->get($id);
      $profile_image = '';

        if(count($profile->media) > 0)  {
          $profile_image = "/uploads/profile/" . $profile->id . "/avatar/" . $profile->media->file_name;
         } else {
           $profile_image = "/uploads/profile/no-photo.jpg";
         }

      $data['header_black_menu'] = 'include/header_black_menu';
      $data['header_logo_white'] = 'include/header_logo_white';
      $data['show_error_page'] = 'include/show_error_page';
      $data['footer_privacy'] = 'include/footer_privacy';
      $data['footer_subscribe'] = 'include/footer_subscribe';
      $data['signin_form'] = 'include/signin_form';
      $data['new_to_madeby'] = 'include/new_to_madeby';
      
      /**
       * Taken our old main menu
       * 
      $data['navigation_top'] = 'include/navigation_top';
      **/
      $data['notification_bar'] = 'include/notification_bar';
      $data['main_menu'] = 'include/main_menu';

      $this->load->model('state_model','state');
      $states = $this->state->populate_state_dropdown();
      $data['states'] = $states;
      $data['profile'] = $profile;
      $data['profile_image']= $profile_image;
       $data['data']['message'] = $this->message;         
      $this->load->view('profile/edit',$data);

    }

    public function save_profile(){

      //$this->output->enable_profiler(TRUE);
      //validation
      $tables = $this->config->item('tables','ion_auth');
      //validate form input
      $this->form_validation->set_rules('bioinfo', 'Bio information', 'required|xss_clean');
      $this->form_validation->set_rules('website', 'Website address', 'required|xss_clean');
      $this->form_validation->set_rules('imgfile','Please upload your profile image', 'xss_clean');
      $this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'valid_email|is_unique['.$tables['users'].'.email]|matches[confirm_email]');
      //$this->form_validation->set_rules('confirm_email', 'confirm email', 'required');
      $this->form_validation->set_rules('password', $this->lang->line('create_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[confirm_password]');
      $this->form_validation->set_rules('confirm_password', $this->lang->line('create_user_validation_password_confirm_label'), 'required');
      $this->form_validation->set_rules('job_title', 'Job title', 'trim|required|xss_clean');    
      $this->form_validation->set_rules('company_name', 'Company name', 'trim|required|xss_clean');

      if( $this->form_validation->run() == true ) {
       
            //path should be profile/profileid/avatar , profile/profileid/video , profile/profileid/products
            $pathToUpload = "./uploads/profile/". $this->profile_id ."/avatar/";
           
            //load the configuration
            $upload_config = $this->config->item('upload_config_profile_edit');

            //replace the upload path based to be based on profile id

            $upload_config['upload_path'] = $pathToUpload;

            $file_post_name = 'imgfile';

            $profile_image_id = $this->media->save_or_update($this->profile_id ,$upload_config,$file_post_name);

           //receive the post available after validate and update profile
            $password = $this->input->post('password');
            $new_email = $this->input->post('new_email');
            $bioinfo = $this->input->post('bioinfo');
            $job_title = $this->input->post('job_title');
            $company_name = $this->input->post('company_name');
            $website = $this->input->post('website');


            //update user account details
            // $updated_password = $this->users->hash_password($password,''); //can pass salt value here

          /**
           * check if email is empty or not then update
           */
          if(!empty($new_email)) {
              $this->users->update($this->user_id, array('password' => $password, 'email' => $new_email));
          }

          $this->users->update($this->user_id, array('password' => $password));

          if ( $profile_image_id != -1 ) {
              //update profile information details
              $this->profile->update($this->profile_id,
                  array(
                      'bioinfo' => $bioinfo,
                       'job_title'=>$job_title,
                       'company_name'=>$company_name,
                       'website'=>$website,
                       'profile_image_id' =>$profile_image_id
                  )
              );
          }
          //i guess this is for profile image is not changed ,:) me
            $result = $this->profile->update(
                           $this->profile_id , 
                            array (
                            'bioinfo' =>$bioinfo,
                            'job_title'=>$job_title,
                            'website'=>$website,
                            'company_name'=>$company_name
                             )
                        );

            //TODO:success page must be displayed
            //TODO:link must be provide to visit home, account
            //TODO:controller and self refreshing page
            //goto home


             redirect('sell/seller/'.$this->profile_id,'refresh');

            } else {
                
            //TODO:add message and validation error here
            // throw new Exception('error'.$e);
             $this->message['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
             $this->message = array('type' => 'error', 'message' =>  $this->message['message'] );
           }

            //reload the newly uploaded or image profile
            $profile = $this->profile->with('media')->get($this->profile_id);

            if( count($profile->media) > 0 ) {

                $profile_image = "/uploads/profile/" . $profile->id . "/avatar/" . $profile->media->file_name;
            }

            $data['header_black_menu'] = 'include/header_black_menu';
            $data['header_logo_white'] = 'include/header_logo_white';
            $data['main_menu'] = 'include/main_menu';
            $data['show_error_page'] = 'include/show_error_page';
            $data['footer_privacy'] = 'include/footer_privacy';
            $data['footer_subscribe'] = 'include/footer_subscribe';
            $data['signin_form'] = 'include/signin_form';
            $data['new_to_madeby'] = 'include/new_to_madeby';
            $data['navigation_top'] = 'include/navigation_top';
            $data['notification_bar'] = 'include/notification_bar';

            $data['data']['message'] = $this->message;
            $this->session->set_flashdata('message',$this->message['message']);
            $data['profile'] = $profile;
            $data['profile_image']= $profile_image;
            $this->load->view('profile/edit',$data);
                  


      }
    
}