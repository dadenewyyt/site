<?php
/**
 * Created by PhpStorm.
 * User: DEVELOPER4
 * Date: 12/26/14
 * Time: 6:52 PM
 */

class Account_model extends My_Model {

    public function __construct() {
        parent::__construct() ;
        $this->_database = $this->db;
    }

   // protected $return_type = 'array';
    public $belongs_to = array( 'profile' => array( 'primary_key' => 'profile' ,'model'=>'profile_model'));

    /**
     * @param $profile_id
     * @param $post
     */
    public function save_account_profile($profile_id,$post){

        $account_type = $post['account_type'];
        $bank_branch = $post['bankbranch'];
        $route_number= $post['routenumber'];
        $account_number = $post['accountnumber'];
        $account_owner = $post['account_owner'];

        $insert_data = array(
            'account_type'=>$account_type,
            'account_owner'=>$account_owner,
            'account_number'=>$account_number,
            'routing_number'=>$route_number,
            'account_owner'=>$account_owner,
            'bank_branch'=>$bank_branch,
            'profile_id'=>$profile_id,
        );

        $account_id = $this->insert($insert_data);

        return $account_id ;

    }
  
} 