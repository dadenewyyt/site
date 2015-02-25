<?php
/**
 * Created by PhpStorm.
 * User: DEVELOPER4
 * Date: 12/26/14
 * Time: 1:14 PM
 */

class Payment_model extends MY_Model {

    public function __construct() {
        parent::__construct() ;
        $this->_database = $this->db;
    }

    protected function timestamps($table)
    {
        $table['created_date'] = $table['updated_date'] = date('Y-m-d H:i:s');
        return $table;
    }

    /**
     * Define relationship a memeber
     * have One to One , One to Many ,
     * Many to Many if any
     */

    public $belongs_to = array( 'profile' => array( 'primary_key' => 'profile_id' ,'model'=>"profile_model") );


    public function register_payment($data ,$profile_id)
    {
        $city = $this->sanitize( $data['post']['x_city'] );
        $state = $this->sanitize( $data['post']['x_state'] );
        $address1 =$this->sanitize( $data['post']['x_address_1'] );
        $address2 = $this->sanitize($data['post']['x_address_2'] );
        $zip_code = $this->sanitize($data['post']['x_zipcode'] );
        $country =$this->sanitize( $data['post']['x_country'] );
        $phone_number = $this->sanitize($data['post']['x_phone'] );
        $email = $this->sanitize( $data['current']['email'] );
        $payment_type = $this->sanitize( $data['current']['ptype'] );
        $payment_is_successful = $this->sanitize( $data['current']['is_sucess'] );
        $payment_created_by =$this->sanitize( $data['current']['profile_id'] );
        $pamount = $this->sanitize( $data['current']['pamount'] );

      $insert_payment_data = array(
          'city'=>$city,
          'state'=>$state,
          'address1'=>$address1,
          'address2'=>$address2,
          'zipcode'=>$zip_code,
          'country'=>$country,
          'phone'=>$phone_number,
          'ptype'=>$payment_type,
          'pmount'=>$pamount,
          'ptype'=>$payment_type,
      );

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









