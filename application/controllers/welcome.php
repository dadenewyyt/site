<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller {


    public function __construct() {

       parent::__construct() ;
       $this->load->model('product_model','products');
       $this->load->model('media_model','media');

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
          //TODO:save the subscribed on database

        echo json_encode($message);
     }
}

    public function home() {

        //fetch categories from config
        //and construct an array of [ STRING,STRING ]
        $categories_all = $this->config->item('categories_all');

        foreach($categories_all as  $cat=>$val){
            $categories_all[$val] = $val;
        }
       
        $data['categories_all'] = $categories_all;
        $data['footer_page'] = 'include/footer_page';
        $data['product_listing'] = 'product/product_listing';
        $data['catagories_all'] = $categories_all;

      
     
        $products = $this->products->display_all_product();

        //var_dump($all_products);
        //var_dump($all_products[0]->medias);
        //exit;

        $data['data']['products'] = $products;

        $this->load->view('home/home',$data);
    }

    public function shop() {

        $data['footer_page'] = 'include/footer_page';
        $this->load->view('shop/shop',$data);
    }
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */