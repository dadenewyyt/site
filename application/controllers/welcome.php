<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Welcome extends CI_Controller {


    public function __construct() {

       parent::__construct() ;

      if ($this->ion_auth->logged_in() == false) {

         redirect('user/login');

      }



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
<<<<<<< HEAD

        //$this->output->cache(1);
        //load template engine
       // $this->output->enable_profiler(TRUE);
       // $this->load->library('parser');
       log_message('error','Hmm no migration this time , are u nutts ? ');
        $data = array(
                      'title'=>'Layout',
                      'header'=>'Header'
                     );


      //	$this->load->view('header');
        $data['site_url'] = site_url('user/login');
       // $this->parser->parse('layout/layout',$data);
		$this->load->view('layout/grid');
=======
		$this->load->view('include/header');
		$this->load->view('welcome_message');
		$this->load->view('include/footer');
>>>>>>> ebb787394f01020834415874e692202a74d1c0de
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */