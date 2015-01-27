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
      $data['notification_bar'] = 'include/notification_bar';

      $this->load->model('state_model','state');
      $states = $this->state->populate_state_dropdown();
      $data['states'] = $states;
      $this->load->view('profile/edit',$data);

    }

    public function save_profile(){


        try {
            //get the current user profile id to upload / create a folder by its id
            $profile_id = $this->session->userdata('profile_id');
            $this->profile_id = $profile_id;

            //path should be profile/profileid/avatar , profile/profileid/video , profile/profileid/products
            $pathToUpload = "./uploads/profile/. $this->profile_id .'/avatar/";

            $config = array(
                'upload_path' => $pathToUpload,
                'allowed_types' => "gif|jpg|png|mp4|3gp|flv",
                'overwrite' => TRUE,
                'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                'max_height' => "768",
                'max_width' => "1024"
            );

            $this->load->library('upload', $config);
            $pathToUpload = $config['upload_path'];

            if (!is_dir($config['upload_path']))
                mkdir($config['upload_path'], 0777, TRUE);

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('imgfile')) {
                // upload failedreturn array('error' => $this->upload->display_errors('<span>', '</span>'));
            } else {
                // upload success
                $upload_data = $this->upload->data();

            }
            $file_name = $upload_data['file_name'];
            $file_path = $upload_data['file_path'];


            $password = $this->input->post('password');
            $cpassword = $this->input->post('confirm_password');
            $city = $this->input->post('city');
            $state = $this->input->post('state_id');
            $city = $this->input->post('city');
            $zip = $this->input->post('zip');
            $job_title = $this->input->post('job_title');
            $company_name = $this->input->post('company_name');

            $this->load->model('profile_model', 'profile');
            $this->load->model('ion_auth_model', 'users');
            $this->load->model('media_model', 'media');


            //update priofile image details

            $profile_image_id = $this->media->insert(array(
                'type' => 'profile_image',
                'file_name' => $file_name,
                'full_path' => $file_path,
                'profile_id' => $profile_id
            ));

            //update user accout details
            $salt = $this->users->store_salt ? $this->users->salt() : FALSE;
            $updated_password = $this->users->hash_password($password, $salt);
            $user_id = $this->session->userdata('user_id');


            $this->users->update($user_id, array('password' => $updated_password));

            //update profile information details
            $this->profile->update($profile_id,
                array('city' => $city,
                    'state' => $state,
                    'zipcode' => $zip,
                    'job_title' => $job_title,
                    'company_name' => $company_name,
                    'profile_image_id' => $profile_image_id
                )
            );

            //TODO:success page must be displayed
            //TODO:link must be provide to visit home, accout
           //TODO:controller and self refreshing page
            //goto home
            redirect('payment/payment','refresh');

            }
            catch (Exception $e) {

               //TODO:add message and validation error here
                //throw new Exception('error'.$e);
                $this->message['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
                $this->message = array('type' => 'error', 'message' =>  $this->message['message'].$e );
                $this->session->set_flashdata('message',  $this->message['message']);
            }



    }
}