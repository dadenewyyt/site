<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by Daniel Adenew.
 * User: Daniel Adenew
 * Date: 12/31/2014
 * Time: 10:11 AM
 * Craig Robinson
 * www.cytekservices.com
 */

class Users extends MY_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
        //add captcha control
        $this->load->helper('captcha');

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('users');
	}

	//redirect if needed, otherwise display the users list
	function index()
	{

	}

	//log the users in
	/**
	 * Login / Sigin User ,Recives POST
	 @var email/username
	 @var password
	 */

	function login()
	{

         $data['header_black_menu'] = 'include/header_black_menu';
		 $data['header_logo_white'] = 'include/header_logo_white';
		 $data['footer_privacy'] = 'include/footer_privacy';
		 $data['footer_subscribe'] = 'include/footer_subscribe';
		 $data['signin_form'] = 'include/signin_form';
		 $data['new_to_madeby'] = 'include/new_to_madeby';
         $data['data']['message'] =  $this->message;
		 $this->_render_page('users/login', $data);

	}

	/**completed user authentication implementation **/
	public function signin() {

        $data['header_logo_white'] = 'include/header_logo_white';
        $data['header_black_menu'] = 'include/header_black_menu';
        $data['footer_privacy'] = 'include/footer_privacy';
        $data['footer_subscribe'] = 'include/footer_subscribe';
        $data['signin_form'] = 'include/signin_form';
        $data['new_to_madeby'] = 'include/new_to_madeby';
        //recived post variables


        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $this->form_validation->set_rules('identity', 'Identity', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

      if ($this->form_validation->run() == true) {
          //check to see if the users is logging in
          //check for "remember me"
          $remember = (bool)$this->input->post('remember');
          //fetch exact identity based on email or username

          $this->load->model('ion_auth_model', 'users');
          $email_or_user_name = $this->input->post('identity');

          //login by user name / email
          if(isset($email_or_user_name)){

              $user = $this->users->get_by('username', $email_or_user_name);

              if(!count($user)){
                  //check by email
                  $user = $this->users->get_by('email', $email_or_user_name);
              } //at least username/email will going to be used
          }


          if (count($user) > 0) {

              $identity = $user->email;

              if ($this->ion_auth->login($identity, $this->input->post('password'), $remember)) {
                  //if the login is successful
                  //redirect them back to the home page

                  $this->load->model('profile_model', 'profile');
                  $user_data = $this->session->all_userdata();

                  $profile = $this->profile->get_by('user_id', $user_data['user_id']);
                  $this->profile_id = $profile->id;

                  $this->session->set_userdata(
                      array(
                          'logged_in' => TRUE,
                          'profile_id' => $this->profile_id,
                          'profile_fname'=>$profile->fname,
                      ));



                  /**check for previous login **/
                  $current_user = $this->users->get(intval($user_data['user_id']));

                  $profile_url = site_url('sell/seller/' . $this->profile_id);

                 // $current_time = str
                 if(count($current_user) > 0) {

                   //redirect user to edit profile page if one this fields are empty .
                  if ( empty($profile->bioinfo) || empty($profile->job_title) || empty($profile->company_name)) {
                      //$this->session->set_userdata('current_profile', $current_profile);
                      $profile_url = site_url('profile/edit/' . $this->profile_id);
                  }
              }
                  redirect($profile_url, 'refresh', $data);

              } else {
                  //if the login was un-successful
                  //redirect them back to the login page
                  $this->message = array('type' => 'error', 'message' => $this->ion_auth->errors());
              }
          } else {

              $this->message = array('type' => 'error', 'message' => 'Login account is invalid. Please ,try again!');
          }
      }
      else {
              //the users is not logging in so display the login page
              //set the flash data error message if there is one

              $this->message = array('type' => 'error', 'message' => (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message'))));

              $data['identity'] = array('name' => 'identity',
                  'id' => 'identity',
                  'type' => 'text',
                  'value' => $this->form_validation->set_value('identity'),
              );
              $data['password'] = array('name' => 'password',
                  'id' => 'password',
                  'type' => 'password',
              );



          }


        }
        $this->session->set_flashdata('message', $this->message['message']);
        $data['data']['message'] = $this->message;
        $this->load->view('users/login', $data); //use redirects instead of loading views for compatibility with MY_Controller libraries

	}

	//log the users out
	function logout()
	{
		//log the users out
		$logout = $this->ion_auth->logout();
		redirect('welcome/home', 'refresh');
	}

	//change password
	function change_password()
	{
		$this->form_validation->set_rules('old', $this->lang->line('change_password_validation_old_password_label'), 'required');
		$this->form_validation->set_rules('new', $this->lang->line('change_password_validation_new_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[new_confirm]');
		$this->form_validation->set_rules('new_confirm', $this->lang->line('change_password_validation_new_password_confirm_label'), 'required');

		if (!$this->ion_auth->logged_in())
		{
			redirect('users/login', 'refresh');
		}

		$user = $this->ion_auth->user()->row();

		if ($this->form_validation->run() == false)
		{
			//display the form
			//set the flash data error message if there is one
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			$this->data['min_password_length'] = $this->config->item('min_password_length', 'ion_auth');
			$this->data['old_password'] = array(
				'name' => 'old',
				'id'   => 'old',
				'type' => 'password',
			);
			$this->data['new_password'] = array(
				'name' => 'new',
				'id'   => 'new',
				'type' => 'password',
				'pattern' => '^.{'.$this->data['min_password_length'].'}.*$',
			);
			$this->data['new_password_confirm'] = array(
				'name' => 'new_confirm',
				'id'   => 'new_confirm',
				'type' => 'password',
				'pattern' => '^.{'.$this->data['min_password_length'].'}.*$',
			);
			$this->data['user_id'] = array(
				'name'  => 'user_id',
				'id'    => 'user_id',
				'type'  => 'hidden',
				'value' => $user->id,
			);

			//render
			$this->_render_page('users/change_password', $this->data);
		}
		else
		{
			$identity = $this->session->userdata('identity');

			$change = $this->ion_auth->change_password($identity, $this->input->post('old'), $this->input->post('new'));

			if ($change)
			{
				//if the password was successfully changed
				$this->session->set_flashdata('message', $this->ion_auth->messages());
				$this->logout();
			}
			else
			{
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect('users/change_password', 'refresh');
			}
		}
	}

	//forgot password
	function forgot_password()
	{
        $this->data['header_black_menu'] = 'include/header_black_menu';
        $this->data['header_logo_white_template'] = 'include/header_logo_white_template';
        $this->data['footer_privacy'] = 'include/footer_privacy';
        $this->data['footer_subscribe'] = 'include/footer_subscribe';
        $this->data['signin_form'] = 'include/signin_form';
        $this->data['show_error_page'] = 'include/show_error_page';

        /* Get the user's entered captcha value from the form */
        $userCaptcha = $this->input->post('captcha');

        /* Get the actual captcha value that we stored in the session (see below) */
        $word = $this->session-> userdata('captchaWord');

        $this->form_validation->set_rules('captcha', "Captcha", 'required');

        //setting validation rules by checking whether identity is username or email
        if($this->config->item('identity', 'ion_auth') == 'username' )
        {
            $this->form_validation->set_rules('email', $this->lang->line('forgot_password_username_identity_label'), 'required');
        }
        else
        {
            $this->form_validation->set_rules('email', $this->lang->line('forgot_password_validation_email_label'), 'required|valid_email');
        }

        //add captcha validation as well to the normal form validations
        if ($this->form_validation->run() == true && strcmp(strtoupper($userCaptcha), strtoupper($word)) == 0 ) {

            // get identity from username or email
            if ($this->config->item('identity', 'ion_auth') == 'username') {
                $identity = $this->ion_auth->where('username', strtolower($this->input->post('email')))->users()->row();
            } else {
                $identity = $this->ion_auth->where('email', strtolower($this->input->post('email')))->users()->row();
            }
            //run the forgotten password method to email an activation code to the users
            $forgotten = $this->ion_auth->forgotten_password($identity->{$this->config->item('identity', 'ion_auth')});

            if ($forgotten) {

                /* Clear the session variable */
                $this->session->unset_userdata('captchaWord');
                //if there were no errors
                $this->session->set_flashdata('message', $this->ion_auth->messages());
                //set any errors and display the form

                $this->message['message'] = 'sent email to your inbox';
                $this->message = array('type' => 'success', 'message' => $this->message['message']);
                $this->data['header_black_menu'] = 'include/header_black_menu';
                $this->data['header_logo_white'] = 'include/header_logo_white';
                $this->data['header_logo_white_template'] = 'include/header_logo_white_template';
                $this->data['footer_privacy'] = 'include/footer_privacy';
                $this->data['footer_subscribe'] = 'include/footer_subscribe';
                $this->data['signin_form'] = 'include/signin_form';
                $this->data['show_error_page'] = 'include/show_error_page';
                $this->data['footer_page'] = 'include/footer_page';
                $this->data['notification_bar'] = 'include/notification_bar';
                $this->data['data']['message_page_header'] = "Success! We sent email to your inbox!";
                $this->data['data']['message_page_title'] = "ForgotPassword ";
                $this->data['data']['message_page_message'] = "Success! Please check you email ,Thankyou!";

                // var_dump($_POST);die;
                $this->data['message_page'] = 'message_page';
                $this->data['success_page'] = 'success';

                /* Clear the session variable */
                $this->session->unset_userdata('captchaWord');

                //we should display a confirmation page here instead of the login page ;
                $this->load->view('signup/success', $this->data);

            }
            else {

                /* Clear the session variable */
                $this->session->unset_userdata('captchaWord');

                /* Setup vals to pass into the create_captcha function */
                $capache_config = array(
                    'img_path' => 'captcha/',
                    'img_url' => base_url() . 'captcha/',
                    'img_width' => '150',
                    'font_path' => base_url() . 'captcha/font/captcha4.ttf',
                    'img_height' => 40,
                    'expiration' => 7200
                );

                /* Generate the captcha */
                $captcha = create_captcha($capache_config);

                /* Store the captcha value (or 'word') in a session to retrieve later */
                $this->session->set_userdata('captchaWord', $captcha['word']);
                $this->data = array('email' => $this->input->post('email'));
                //setup the input
                $this->data['email'] = array('name' => 'email',
                    'id' => 'email', 'class' => 'form-control',
                );

                if ($this->config->item('identity', 'ion_auth') == 'username') {
                    $this->data['identity_label'] = $this->lang->line('forgot_password_username_identity_label');
                } else {
                    $this->data['identity_label'] = $this->lang->line('forgot_password_email_identity_label');
                }

                if (empty($identity)) {

                    if ($this->config->item('identity', 'ion_auth') == 'username') {
                        // $this->ion_auth->set_message('forgot_password_username_not_found');
                        $this->message['message'] .= '<p>forgot_password_username_not_found!</p>';

                    } else {
                        $this->message['message'] .= '<p>forgot_password_email_not_found!</p>';
                        //$this->ion_auth->set_message('forgot_password_email_not_found');
                    }
                    //set any errors and display the form
                    //set any errors and display the form
                    $this->message['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));


                    if ($this->message['message'] != false) {
                        $this->message = array('type' => 'error', 'message' => $this->message['message']);
                    } else {
                        $this->message = array('type' => '', 'message' => '');
                    }
                }

                if (strcmp(strtoupper($userCaptcha), strtoupper($word)) != 0 && $userCaptcha!="") {

                    if ((empty($this->message['type'])) && (empty($this->message['message']))) {
                        $this->message = array('type' => 'error', 'message' => 'The entered verification code did not match! Please try agian!');
                    } else {
                        $this->message['message'] .= '<p>The entered verification code did not match! Please try agian!</p>';
                    }
                }

                $this->data['data']['message'] = $this->message;
                $this->data['captcha'] = $captcha;
                $this->data['header_black_menu'] = 'include/header_black_menu';
                $this->data['header_logo_white_template'] = 'include/header_logo_white_template';
                $this->data['header_logo_white_template'] = 'include/header_logo_white_template';
                $this->data['footer_privacy'] = 'include/footer_privacy';
                $this->data['footer_subscribe'] = 'include/footer_subscribe';
                $this->data['signin_form'] = 'include/signin_form';
                $this->data['show_error_page'] = 'include/show_error_page';
                $this->data['footer_page'] = 'include/footer_page';
                $this->_render_page('users/forgot_password', $this->data);
          }
        } else {

            /* Clear the session variable */
            $this->session->unset_userdata('captchaWord');

            /* Setup vals to pass into the create_captcha function */
            $capache_config = array(
                'img_path' => 'captcha/',
                'img_url' => base_url() . 'captcha/',
                'img_width' => '150',
                'font_path' => base_url() . 'captcha/font/captcha4.ttf',
                'img_height' => 40,
                'expiration' => 7200
            );

            /* Generate the captcha */
            $captcha = create_captcha($capache_config);

            /* Store the captcha value (or 'word') in a session to retrieve later */
            $this->session->set_userdata('captchaWord', $captcha['word']);
            $this->data = array('email' => $this->input->post('email'));
            //setup the input
            $this->data['email'] = array('name' => 'email',
                'id' => 'email', 'class' => 'form-control',
            );

            if ($this->config->item('identity', 'ion_auth') == 'username') {
                $this->data['identity_label'] = $this->lang->line('forgot_password_username_identity_label');
            } else {
                $this->data['identity_label'] = $this->lang->line('forgot_password_email_identity_label');
            }
            // get identity from username or email
            if ($this->config->item('identity', 'ion_auth') == 'username') {
                $identity = $this->ion_auth->where('username', strtolower($this->input->post('email')))->users()->row();
            } else {
                $identity = $this->ion_auth->where('email', strtolower($this->input->post('email')))->users()->row();
            }
            if (empty($identity)) {

                if ($this->config->item('identity', 'ion_auth') == 'username') {
                    // $this->ion_auth->set_message('forgot_password_username_not_found');
                    $this->message['message'] .= '<p>forgot_password_username_not_found!</p>';

                } else {
                    $this->message['message'] .= '<p>forgot_password_email_not_found!</p>';
                    //$this->ion_auth->set_message('forgot_password_email_not_found');
                }
                //set any errors and display the form
                //set any errors and display the form
                $this->message['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));


                if ($this->message['message'] != false) {
                    $this->message = array('type' => 'error', 'message' => $this->message['message']);
                } else {
                    $this->message = array('type' => '', 'message' => '');
                }
            }

            if (strcmp(strtoupper($userCaptcha), strtoupper($word)) != 0 && $userCaptcha!="") {

                if ((empty($this->message['type'])) && (empty($this->message['message']))) {
                    $this->message = array('type' => 'error', 'message' => 'The entered verification code did not match! Please try agian!');
                } else {
                    $this->message['message'] .= '<p>The entered verification code did not match! Please try agian!</p>';
                }
            }


            $this->data['data']['message'] = $this->message;
            $this->data['captcha'] = $captcha;
            $this->data['header_black_menu'] = 'include/header_black_menu';
            $this->data['header_logo_white'] = 'include/header_logo_white';
            $this->data['header_logo_white_template'] = 'include/header_logo_white_template';

            $this->data['footer_privacy'] = 'include/footer_privacy';
            $this->data['footer_subscribe'] = 'include/footer_subscribe';
            $this->data['signin_form'] = 'include/signin_form';
            $this->data['show_error_page'] = 'include/show_error_page';
            $this->data['footer_page'] = 'include/footer_page';

            $this->_render_page('users/forgot_password', $this->data);

        }






	}

	//reset password - final step for forgotten password
	public function reset_password($code = NULL)
	{
        $this->data['header_black_menu'] = 'include/header_black_menu';
        $this->data['header_logo_white'] = 'include/header_logo_white';
        $this->data['header_logo_white_template'] = 'include/header_logo_white_template';

        $this->data['footer_privacy'] = 'include/footer_privacy';
        $this->data['footer_subscribe'] = 'include/footer_subscribe';
        $this->data['signin_form'] = 'include/signin_form';
        $this->data['show_error_page'] = 'include/show_error_page';
        $this->data['footer_page'] = 'include/footer_page';
		if (!$code)
		{
			show_404();
		}

		$user = $this->ion_auth->forgotten_password_check($code);

		if ($user)
		{
			//if the code is valid then display the password reset form

			$this->form_validation->set_rules('new', $this->lang->line('reset_password_validation_new_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[new_confirm]');
			$this->form_validation->set_rules('new_confirm', $this->lang->line('reset_password_validation_new_password_confirm_label'), 'required');

			if ($this->form_validation->run() == false)
			{
				//display the form

				//set the flash data error message if there is one
				$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

				$this->data['min_password_length'] = $this->config->item('min_password_length', 'ion_auth');
				$this->data['new_password'] = array(
					'name' => 'new',
					'id'   => 'new',
				    'type' => 'password',
                    'class'=>'form-control',
					'pattern' => '^.{'.$this->data['min_password_length'].'}.*$',
				);
				$this->data['new_password_confirm'] = array(
					'name' => 'new_confirm',
					'id'   => 'new_confirm',
					'type' => 'password',
                    'class'=>'form-control',
					'pattern' => '^.{'.$this->data['min_password_length'].'}.*$',
				);
				$this->data['user_id'] = array(
					'name'  => 'user_id',
					'id'    => 'user_id',
					'type'  => 'hidden',
					'value' => $user->id,
				);
				$this->data['csrf'] = $this->_get_csrf_nonce();
				$this->data['code'] = $code;

				//render
				$this->_render_page('users/reset_password', $this->data);
			}
			else
			{
				// do we have a valid request?
				if ($this->_valid_csrf_nonce() === FALSE || $user->id != $this->input->post('user_id'))
				{

					//something fishy might be up
					$this->ion_auth->clear_forgotten_password_code($code);

					show_error($this->lang->line('error_csrf'));

				}
				else
				{
					// finally change the password
					$identity = $user->{$this->config->item('identity', 'ion_auth')};

					$change = $this->ion_auth->reset_password($identity, $this->input->post('new'));

					if ($change)
					{
						//if the password was successfully changed
						$this->session->set_flashdata('message', $this->ion_auth->messages());
						$this->logout();
					}
					else
					{
						$this->session->set_flashdata('message', $this->ion_auth->errors());
						redirect('users/reset_password/' . $code, 'refresh');
					}
				}
			}
		}
		else
		{
			//if the code is invalid then send them back to the forgot password page
			$this->session->set_flashdata('message', $this->ion_auth->errors());
			redirect("users/forgot_password", 'refresh');
		}
	}


	//activate the users
	function activate($id, $code=false)
	{
		if ($code !== false)
		{
			$activation = $this->ion_auth->activate($id, $code);
		}
		else if ($this->ion_auth->is_admin())
		{
			$activation = $this->ion_auth->activate($id);
		}

		if ($activation)
		{
			//redirect them to the users page
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			redirect("users", 'refresh');
		}
		else
		{
			//redirect them to the forgot password page
			$this->session->set_flashdata('message', $this->ion_auth->errors());
			redirect("users/forgot_password", 'refresh');
		}
	}

	//deactivate the users
	function deactivate($id = NULL)
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
		{
			//redirect them to the home page because they must be an administrator to view this
			return show_error('You must be an administrator to view this page.');
		}

		$id = (int) $id;

		$this->load->library('form_validation');
		$this->form_validation->set_rules('confirm', $this->lang->line('deactivate_validation_confirm_label'), 'required');
		$this->form_validation->set_rules('id', $this->lang->line('deactivate_validation_user_id_label'), 'required|alpha_numeric');

		if ($this->form_validation->run() == FALSE)
		{
			// insert csrf check
			$this->data['csrf'] = $this->_get_csrf_nonce();
			$this->data['user'] = $this->ion_auth->user($id)->row();

			$this->_render_page('user/deactivate_user', $this->data);
		}
		else
		{
			// do we really want to deactivate?
			if ($this->input->post('confirm') == 'yes')
			{
				// do we have a valid request?
				if ($this->_valid_csrf_nonce() === FALSE || $id != $this->input->post('id'))
				{
					show_error($this->lang->line('error_csrf'));
				}

				// do we have the right userlevel?
				if ($this->ion_auth->logged_in() && $this->ion_auth->is_admin())
				{
					$this->ion_auth->deactivate($id);
				}
			}

			//redirect them back to the users page
			redirect('users', 'refresh');
		}
	}

	//create a new users
	function create_user()
	{
		$this->data['title'] = "Create User";

		if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
		{
			redirect('users', 'refresh');
		}

		$tables = $this->config->item('tables','ion_auth');

		//validate form input
		$this->form_validation->set_rules('first_name', $this->lang->line('create_user_validation_fname_label'), 'required|xss_clean');
		$this->form_validation->set_rules('last_name', $this->lang->line('create_user_validation_lname_label'), 'required|xss_clean');
		$this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'required|valid_email|is_unique['.$tables['users'].'.email]');
		$this->form_validation->set_rules('phone', $this->lang->line('create_user_validation_phone_label'), 'required|xss_clean');
		$this->form_validation->set_rules('company', $this->lang->line('create_user_validation_company_label'), 'required|xss_clean');
		$this->form_validation->set_rules('password', $this->lang->line('create_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
		$this->form_validation->set_rules('password_confirm', $this->lang->line('create_user_validation_password_confirm_label'), 'required');

		if ($this->form_validation->run() == true)
		{
			$username = strtolower($this->input->post('first_name')) . ' ' . strtolower($this->input->post('last_name'));
			$email    = strtolower($this->input->post('email'));
			$password = $this->input->post('password');

			$additional_data = array(
				'first_name' => $this->input->post('first_name'),
				'last_name'  => $this->input->post('last_name'),
				'company'    => $this->input->post('company'),
				'phone'      => $this->input->post('phone'),
			);
		}
		if ($this->form_validation->run() == true && $this->ion_auth->register($username, $password, $email, $additional_data))
		{
			//check to see if we are creating the users
			//redirect them back to the admin page
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			redirect("users", 'refresh');
		}
		else
		{
			//display the create users form
			//set the flash data error message if there is one
			$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

			$this->data['first_name'] = array(
				'name'  => 'first_name',
				'id'    => 'first_name',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('first_name'),
			);
			$this->data['last_name'] = array(
				'name'  => 'last_name',
				'id'    => 'last_name',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('last_name'),
			);
			$this->data['email'] = array(
				'name'  => 'email',
				'id'    => 'email',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('email'),
			);
			$this->data['company'] = array(
				'name'  => 'company',
				'id'    => 'company',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('company'),
			);
			$this->data['phone'] = array(
				'name'  => 'phone',
				'id'    => 'phone',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('phone'),
			);
			$this->data['password'] = array(
				'name'  => 'password',
				'id'    => 'password',
				'type'  => 'password',
				'value' => $this->form_validation->set_value('password'),
			);
			$this->data['password_confirm'] = array(
				'name'  => 'password_confirm',
				'id'    => 'password_confirm',
				'type'  => 'password',
				'value' => $this->form_validation->set_value('password_confirm'),
			);

			$this->_render_page('users/create_user', $this->data);
		}
	}

	//edit a users
	function edit_user($id)
	{
		$this->data['title'] = "Edit User";

		if (!$this->ion_auth->logged_in() || (!$this->ion_auth->is_admin() && !($this->ion_auth->user()->row()->id == $id)))
		{
			redirect('users', 'refresh');
		}

		$user = $this->ion_auth->user($id)->row();
		$groups=$this->ion_auth->groups()->result_array();
		$currentGroups = $this->ion_auth->get_users_groups($id)->result();

		//validate form input
		$this->form_validation->set_rules('first_name', $this->lang->line('edit_user_validation_fname_label'), 'required|xss_clean');
		$this->form_validation->set_rules('last_name', $this->lang->line('edit_user_validation_lname_label'), 'required|xss_clean');
		$this->form_validation->set_rules('phone', $this->lang->line('edit_user_validation_phone_label'), 'required|xss_clean');
		$this->form_validation->set_rules('company', $this->lang->line('edit_user_validation_company_label'), 'required|xss_clean');
		$this->form_validation->set_rules('groups', $this->lang->line('edit_user_validation_groups_label'), 'xss_clean');

		if (isset($_POST) && !empty($_POST))
		{
			// do we have a valid request?
			if ($this->_valid_csrf_nonce() === FALSE || $id != $this->input->post('id'))
			{
				show_error($this->lang->line('error_csrf'));
			}

			//update the password if it was posted
			if ($this->input->post('password'))
			{
				$this->form_validation->set_rules('password', $this->lang->line('edit_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
				$this->form_validation->set_rules('password_confirm', $this->lang->line('edit_user_validation_password_confirm_label'), 'required');
			}

			if ($this->form_validation->run() === TRUE)
			{
				$data = array(
					'first_name' => $this->input->post('first_name'),
					'last_name'  => $this->input->post('last_name'),
					'company'    => $this->input->post('company'),
					'phone'      => $this->input->post('phone'),
				);

				//update the password if it was posted
				if ($this->input->post('password'))
				{
					$data['password'] = $this->input->post('password');
				}



				// Only allow updating groups if users is admin
				if ($this->ion_auth->is_admin())
				{
					//Update the groups users belongs to
					$groupData = $this->input->post('groups');

					if (isset($groupData) && !empty($groupData)) {

						$this->ion_auth->remove_from_group('', $id);

						foreach ($groupData as $grp) {
							$this->ion_auth->add_to_group($grp, $id);
						}

					}
				}

			//check to see if we are updating the users
			   if($this->ion_auth->update($user->id, $data))
			    {
			    	//redirect them back to the admin page if admin, or to the base url if non admin
				    $this->session->set_flashdata('message', $this->ion_auth->messages() );
				    if ($this->ion_auth->is_admin())
					{
						redirect('users', 'refresh');
					}
					else
					{
						redirect('/', 'refresh');
					}

			    }
			    else
			    {
			    	//redirect them back to the admin page if admin, or to the base url if non admin
				    $this->session->set_flashdata('message', $this->ion_auth->errors() );
				    if ($this->ion_auth->is_admin())
					{
						redirect('users', 'refresh');
					}
					else
					{
						redirect('/', 'refresh');
					}

			    }

			}
		}

		//display the edit users form
		$this->data['csrf'] = $this->_get_csrf_nonce();

		//set the flash data error message if there is one
		$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

		//pass the users to the view
		$this->data['user'] = $user;
		$this->data['groups'] = $groups;
		$this->data['currentGroups'] = $currentGroups;

		$this->data['first_name'] = array(
			'name'  => 'first_name',
			'id'    => 'first_name',
			'type'  => 'text',
			'value' => $this->form_validation->set_value('first_name', $user->first_name),
		);
		$this->data['last_name'] = array(
			'name'  => 'last_name',
			'id'    => 'last_name',
			'type'  => 'text',
			'value' => $this->form_validation->set_value('last_name', $user->last_name),
		);
		$this->data['company'] = array(
			'name'  => 'company',
			'id'    => 'company',
			'type'  => 'text',
			'value' => $this->form_validation->set_value('company', $user->company),
		);
		$this->data['phone'] = array(
			'name'  => 'phone',
			'id'    => 'phone',
			'type'  => 'text',
			'value' => $this->form_validation->set_value('phone', $user->phone),
		);
		$this->data['password'] = array(
			'name' => 'password',
			'id'   => 'password',
			'type' => 'password'
		);
		$this->data['password_confirm'] = array(
			'name' => 'password_confirm',
			'id'   => 'password_confirm',
			'type' => 'password'
		);

		$this->_render_page('users/edit_user', $this->data);
	}

	// create a new group
	function create_group()
	{
		$this->data['title'] = $this->lang->line('create_group_title');

		if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
		{
			redirect('users', 'refresh');
		}

		//validate form input
		$this->form_validation->set_rules('group_name', $this->lang->line('create_group_validation_name_label'), 'required|alpha_dash|xss_clean');
		$this->form_validation->set_rules('description', $this->lang->line('create_group_validation_desc_label'), 'xss_clean');

		if ($this->form_validation->run() == TRUE)
		{
			$new_group_id = $this->ion_auth->create_group($this->input->post('group_name'), $this->input->post('description'));
			if($new_group_id)
			{
				// check to see if we are creating the group
				// redirect them back to the admin page
				$this->session->set_flashdata('message', $this->ion_auth->messages());
				redirect("users", 'refresh');
			}
		}
		else
		{
			//display the create group form
			//set the flash data error message if there is one
			$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

			$this->data['group_name'] = array(
				'name'  => 'group_name',
				'id'    => 'group_name',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('group_name'),
			);
			$this->data['description'] = array(
				'name'  => 'description',
				'id'    => 'description',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('description'),
			);

			$this->_render_page('users/create_group', $this->data);
		}
	}

	//edit a group
	function edit_group($id)
	{
		// bail if no group id given
		if(!$id || empty($id))
		{
			redirect('users', 'refresh');
		}

		$this->data['title'] = $this->lang->line('edit_group_title');

		if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
		{
			redirect('users', 'refresh');
		}

		$group = $this->ion_auth->group($id)->row();

		//validate form input
		$this->form_validation->set_rules('group_name', $this->lang->line('edit_group_validation_name_label'), 'required|alpha_dash|xss_clean');
		$this->form_validation->set_rules('group_description', $this->lang->line('edit_group_validation_desc_label'), 'xss_clean');

		if (isset($_POST) && !empty($_POST))
		{
			if ($this->form_validation->run() === TRUE)
			{
				$group_update = $this->ion_auth->update_group($id, $_POST['group_name'], $_POST['group_description']);

				if($group_update)
				{
					$this->session->set_flashdata('message', $this->lang->line('edit_group_saved'));
				}
				else
				{
					$this->session->set_flashdata('message', $this->ion_auth->errors());
				}
				redirect("users", 'refresh');
			}
		}

		//set the flash data error message if there is one
		$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

		//pass the users to the view
		$this->data['group'] = $group;

		$this->data['group_name'] = array(
			'name'  => 'group_name',
			'id'    => 'group_name',
			'type'  => 'text',
			'value' => $this->form_validation->set_value('group_name', $group->name),
		);
		$this->data['group_description'] = array(
			'name'  => 'group_description',
			'id'    => 'group_description',
			'type'  => 'text',
			'value' => $this->form_validation->set_value('group_description', $group->description),
		);

		$this->_render_page('users/edit_group', $this->data);
	}


	function _get_csrf_nonce()
	{
		$this->load->helper('string');
		$key   = random_string('alnum', 8);
		$value = random_string('alnum', 20);
		$this->session->set_flashdata('csrfkey', $key);
		$this->session->set_flashdata('csrfvalue', $value);

		return array($key => $value);
	}

	function _valid_csrf_nonce()
	{
		if ($this->input->post($this->session->flashdata('csrfkey')) !== FALSE &&
			$this->input->post($this->session->flashdata('csrfkey')) == $this->session->flashdata('csrfvalue'))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	function _render_page($view, $data=null, $render=false)
	{

		$this->viewdata = (empty($data)) ? $this->data: $data;

		$view_html = $this->load->view($view, $this->viewdata, $render);

		if (!$render) return $view_html;
	}

}
