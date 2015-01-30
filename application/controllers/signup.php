<?php

class SignUp extends MY_Controller {




  public function __construct() {
      parent::__construct();
      $this->load->helper('form');
      $this->load->model('state_model','state');
      $this->load->library('form_validation');
      $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
      $this->lang->load('users');

  }


  public function index() {

      $states = $this->state->populate_state_dropdown();
      $categories_all = $this->config->item('categories_all');
      $data['categories_all'] = $categories_all;
      $data['notification_bar'] = 'include/notification_bar';
      $data['header_black_menu'] = 'include/header_black_menu';
      $data['header_logo_white'] = 'include/header_logo_white';
      $data['footer_privacy'] = 'include/footer_privacy';
      $data['footer_subscribe'] = 'include/footer_subscribe';
      $data['signup_form'] = 'include/signup_form';

      $data['states'] = $states;
      $data['data']['message'] = $this->message;
      $this->load->view('signup/signup',$data);
  }

  public function register() {

      $tables = $this->config->item('tables','ion_auth');

      //validate form input
      $this->form_validation->set_rules('firstname', $this->lang->line('create_user_validation_fname_label'), 'required|xss_clean');
      $this->form_validation->set_rules('lastname', $this->lang->line('create_user_validation_lname_label'), 'required|xss_clean');
      $this->form_validation->set_rules('username', $this->lang->line('create_user_validation_username_label'), 'required|xss_clean|is_unique['.$tables['users'].'.username]');
      $this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'required|valid_email|is_unique['.$tables['users'].'.email]');
      $this->form_validation->set_rules('password', $this->lang->line('create_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[confirm]');
      $this->form_validation->set_rules('confirm', $this->lang->line('create_user_validation_password_confirm_label'), 'required');

      if ($this->form_validation->run() == true)
      {

          $this->load->model('user_model','users');
          $email_result = $this->users->get_by('email',strtolower($this->input->post('email')),TRUE);

          //check if email is already existing or not
          if( count($email_result) > 0 ) {

              $this->message = array('type' => 'error', 'message' => "Unable to register ,email is already in use!");
              $this->session->set_flashdata('message', $this->message['message']);
          }
          //check to see if we are creating the users

          $this->load->model('profile_model','profile');
          $post = $this->input->post(); //get post data
          $result = $this->profile->register($post);

         //show error if a result of the 
         //registartion process failed

         if(!$result) {

              $this->message = array('type' => 'error', 'message' => "Unable to save new user account!");
              $this->session->set_flashdata('message', $this->message['message']);
           
         } else {

               //redirect to success page we are successfully done with registration

                $user_id =  $this->session->userdata('user_id');
                $activation_code = $this->session->userdata('activation_code');
                $data['header_black_menu'] = 'include/header_black_menu';
                $data['header_logo_white'] = 'include/header_logo_white';
                $data['notification_bar'] = 'include/notification_bar';
                $data['data']['message_page_header'] = "Thankyou for Registration!" ;
                $data['data']['message_page_title'] = "Your SignUp </small> was <span style=color:'#2770a2'>Successful!</span>";
                $data['data']['message_page_message'] = "A message has been sent to your email.Please use the link provided in your email to activate your account.<p>Please check your spam folder.<P>If you dont please use below link to resend activation code to your email account.</p> " ;
                $data['data']['message_page_message'].= "<strong>Resend Activation code</srong> <a href=". base_url('signup/resend_activation/') .'/'. $user_id.'/'. $activation_code . ">Resend Activation </a>";
                 // var_dump($_POST);die;
                $data['message_page'] = 'message_page';
                $data['success_page'] = 'success';
                $data['footer_page'] = 'include/footer_page';
                $this->load->view('signup/success',$data);
       }
       
       //if validation has errors     
          
      } else {

          $this->message['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
          $this->message = array('type' => 'error', 'message' =>  $this->message['message'] );
          $this->session->set_flashdata('message',  $this->message['message']);
          $data['data']['message'] = $this->message;

          $states = $this->state->populate_state_dropdown();
          $data['header_black_menu'] = 'include/header_black_menu';
          $data['header_logo_white'] = 'include/header_logo_white';
          $data['notification_bar'] = 'include/notification_bar';
          $data['footer_privacy'] = 'include/footer_privacy';
          $data['footer_subscribe'] = 'include/footer_subscribe';
          $data['signup_form'] = 'include/signup_form';
          $data['states'] = $states;
          $this->load->view('signup/signup',$data);
      }

          

      
  }

    public function activate($user_id = null ,$activation_code = null) {

        if(null === $user_id || null === $activation_code)
            redirect('welcome/home');

            //check database
            $this->load->model('ion_auth_model', 'users');

            $result = $this->users->get_by(array('id' => $user_id, 'activation_code' => $activation_code));

            //if found show successful activated page and activate user
            if ($result) {


                $activate_user_data = array(
                    'active' => 1
                );

                $update_result = $this->users->update($user_id, $activate_user_data);
                $data['header_black_menu'] = 'include/header_black_menu';
                $data['header_logo_white'] = 'include/header_logo_white';
                $data['notification_bar'] = 'include/notification_bar';
                $data['data']['message_page_header'] = "Account activated!";
                $data['data']['message_page_header'] = "Thankyou for Registration!";
                $data['data']['message_page_title'] = "Your account is now <span style=color:'#2770a2'>Activated!</span>";
                $data['data']['message_page_message'] = "<a class='btn btn-default btn-primary' href=" . base_url('welcome/home/') . ">Back To Home</a>";
                // var_dump($_POST);die;
                $data['message_page'] = 'message_page';
                $data['success_page'] = 'success';
                $data['footer_page'] = 'include/footer_page';

                $this->load->view('signup/success', $data);

            } else {
                redirect("welcome/home");
            }



      }


    public function resend_activation($user_id = null ,$activation_code = null) {

        if(null === $user_id || null === $activation_code)
            redirect('welcome/home');

            $this->load->helper('general');
            //check database
            $this->load->model('ion_auth_model','users');

            $result = $this->users->get_by(  array( 'activation_code' => $activation_code, 'id' => $user_id ));

            $user_id =  $this->session->userdata('user_id');
            $activation_code = $this->session->userdata('activation_code');
            $email = $this->session->userdata('email');
            $firstname = $this->session->userdata('firstname');

            $email_result = send_activation_email($firstname,$user_id,$activation_code,$email);

            if($result) {
             
                $data['data']['message_page_header'] = "Resend Activation" ;
                $data['data']['message_page_title'] = "Your resend activation email sent and </small> was <span style=color:'#2770a2'>Successful!</span>";
                $data['data']['message_page_message'] = "A message has been sent to your email &nbsp;<strong>". $email . "</strong>&nbsp; Please use the link provided in your email to activate your account.<p>Please check your spam folder.<P>If you dont please use below link to resend activation code to your email account.</p> " ;
                $data['data']['message_page_message'].= "<strong>Resend Activation code</srong> <a href=". base_url('signup/resend_activation/') .'/'. $user_id.'/'. $activation_code . ">Resend Activation </a>";
                // var_dump($_POST);die;

            }
             else {

                 $data['data']['message_page_header'] = "Resend Activation" ;
                 $data['data']['message_page_title'] = "Your resend activation email not sent and </small> was <span style=color:'red'>Un Successful!</span>";
                 $data['data']['message_page_message'] = "<p>Error:</p><p>Please use the link provided in your email to activate your account.<p>Please check your spam folder.<P>If you dont please use below link to resend activation code to your email account.</p> " ;
                 $data['data']['message_page_message'].= "<strong>Resend Activation code</srong> <a href=". base_url('signup/resend_activation/') .'/'. $user_id.'/'. $activation_code . ">Resend Activation </a>";
                 // var_dump($_POST);die;


             }
            $data['header_black_menu'] = 'include/header_black_menu';
            $data['header_logo_white'] = 'include/header_logo_white';
            $data['notification_bar'] = 'include/notification_bar';
            $data['message_page'] = 'message_page';
            $data['success_page'] = 'success';
            $data['footer_page'] = 'include/footer_page';

            $this->load->view('signup/success',$data);


    }

}