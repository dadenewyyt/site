<?php
/**
 * Created by PhpStorm.
 * User: DEVELOPER4
 * Date: 12/26/14
 * Time: 1:14 PM
 */

class Profile_model extends MY_Model {

    public function __construct() {
        parent::__construct() ;
        $this->_database = $this->db;
    }

    protected function timestamps($table)
    {
        //$table['created_date'] = $table['updated_date'] = date('Y-m-d H:i:s');
        $table['created_date'] = date('Y-m-d H:i:s');
        return $table;
    }

    /**
     * Define relationship a memeber
     * have One to One , One to Many ,
     * Many to Many if any
     */

    public $belongs_to = array( 'media' => array( 'primary_key' => 'profile_image_id' ,'model'=>"media_model"),'user' => array( 'primary_key' => 'user_id' ,'model'=>'ion_auth_mode'),'state' => array( 'primary_key' => 'state' ,'model'=>'state_model'));
    public $has_many = array('store' => array( 'primary_key' => 'profile_id' ,'model'=>"store_model") );


    public function register($post)
    {


        $firstname = $post['firstname'];
        $lastname = $post['lastname'];
        $city = $post['city'];
        $state = $post['state'];
        $email = $post['email'];

        //check if user has been saved
        $this->load->model('ion_auth_model', 'users');
        $user_id = $this->users->register($post['username'], $post['password'], $post['email']);


        if ($this->ion_auth->errors()) {
            $this->set_error_handler($this->ion_auth->errors());
        }

        if ($user_id) {

            $member_insert_data = array(
                'fname' => ucfirst($firstname),
                'lname' => $post['lastname'],
                'zipcode' => $post['zipcode'],
                'state' => $post['state'],
                'city' => $post['city'],
                'user_id' => $user_id,
            );

            $member_id = $this->insert($member_insert_data);

            if (!$member_id) {
                return FALSE;
            } else {

                /*
                * send email about
                 * registration success and activation code link
                */
                $this->load->helper('general');
                //generate activation code
                $activation_code = sha1(md5(microtime()));
                $new_activation_data = array(
                    'activation_code' => $activation_code,
                    'active' => 0
                );

                $update_result = $this->users->update($user_id, $new_activation_data);

                //store user data and activation
                $this->session->set_userdata('user_id', $user_id);
                $this->session->set_userdata('activation_code', $activation_code);
                $this->session->set_userdata('email', $email);
                $this->session->set_userdata('firstname',ucfirst($firstname));

                send_activation_email($firstname,$user_id,$activation_code,$email);
                return TRUE;
            }
        }

    }

}









