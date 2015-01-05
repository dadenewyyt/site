<?php
/**
 * Created by PhpStorm.
 * User: DEVELOPER4
 * Date: 12/31/2014
 * Time: 10:11 AM
 */

class Buy extends  MY_Controller {

    public function __construct() {

        parent::__construct();
    }

    public function index(){

    	$this->load->library('twitterfetcher');

		$tweets = $this->twitterfetcher->getTweets(array(
		    'consumerKey'       => 'FeVmw5zMQSLFH0dBO6TdGIBJh',
		    'consumerSecret'    => '49GuUWsqQADVWfEX9IFfrw0Uh6sWJPM8cW25HFtkIZ8ggqA3GF',
		    'accessToken'       => '2371707444-fq8K4Rhnk82qg3jtirWytcyMFR9WBunzlm43GEq',
		    'accessTokenSecret' => 'zD7Zmxs2uQqP344OEgwJ63rOStEKFOkwEJdtkJhQMNysb',
		    'usecache'          => true,
		    'count'             => 2,
		    'numdays'           => 30
		));

        //var_dump($tweets);die;
       
		$twee_texts = array(); 

 		foreach($tweets as $value)  {
            
            array_push($twee_texts,$value->text);

        }
        

       $tweets_page = 'include/tweets';
       $paginate_page = 'include/paginate_page';
       $tweetes_content = $twee_texts;

        $data['footer_privacy'] = 'include/footer_privacy';
        $data['footer_subscribe'] = 'include/footer_subscribe';
        $data['header_black_menu'] = 'include/header_black_menu';
        $data['tweets_page'] = $tweets_page;
        $data['paginate_page'] = $paginate_page;
        $data['data']['tweetes_content'] = $tweetes_content;
        $this->load->view('buy/buy',$data);

    }
}