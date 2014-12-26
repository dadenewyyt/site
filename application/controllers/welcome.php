<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Welcome extends MY_Controller {


    public function __construct() {

       parent::__construct() ;
    }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $data['email_form'] = 'include/email_form';
        $this->load->view('coming_soon',$data);

	}

    /**
     * subscribe function that recives email address
     * register it on to database for future notifications
     * @post email_address
     */
    public function subscribe()
    {
 

     $email = $this->input->post('email_address',TRUE);


     if ( $email ) {

         $this->load->helper('general'); //load email library

         $from ='support@madebyus4u.com';
         $to = $email ;
         $subject = 'MadeByus4u.com subscription successful!';
         $content = 'Thankyou for subscribing at madebyus4u.com!';

         if (send_email_new('',$from,$to,$subject,$content)) {

             //show_error($this->email->print_debugger());
             $content = $this->email->print_debugger();

           } else {

             $content = 'Thankyou for subscription using '. $email .'</b> please check your email!';
             //send email json message for the view

          }

          $message = array (
             "message" => $content,
          );

        echo json_encode($message);
     }
}

    public function home() {

    $data['footer_page'] = 'include/footer_page';
    $this->load->view('home/home',$data);
    }

    public function shop() {

        $data['footer_page'] = 'include/footer_page';
        $this->load->view('shop/shop',$data);
    }
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */