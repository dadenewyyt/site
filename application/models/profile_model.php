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

    public $belongs_to = array( 'media' => array( 'primary_key' => 'profile_image_id' ,'model'=>"media_model"),
                                'user' => array( 'primary_key' => 'user_id' ,'model'=>'ion_auth_model'),
                                'state' => array( 'primary_key' => 'state' ,'model'=>'state_model'),
                                'account' => array( 'primary_key' => 'account' ,'model'=>'account_model')

                                );
    public $has_many = array(   'stores' => array( 'primary_key' => 'owner_profile_id' ,'model'=>"store_model") ,
                                'payments' => array( 'primary_key' => 'profile_id' ,'model'=>"payment_model"),
                                'products' => array( 'primary_key' => 'product_id' ,'model'=>"product_model"),);


    public function register($post)
    {


        $firstname = $post['firstname'];
        $lastname = $post['lastname'];
        $city = $post['city'];
        $state = $post['state'];
        $email = $post['email'];

        //check if user has been saved
        $this->load->model('ion_auth_model', 'users_profile');
        $user_id = $this->users_profile->register($post['username'], $post['password'], $post['email']);


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

                //from general helpr class
                send_activation_email($firstname,$user_id,$activation_code,$email);
                return TRUE;
            }
        }

    }

    /**
    **/
    function check_verfication($profile_id) {

        return $this->get($profile_id)->is_profile_verified ;
    }

    function with_media($type='profile_image') {
        $this->_database->join('medias',$this->_table.'.'.$this->primary_key.' = medias.profile_id')->where('medias.type', $type);
   }

   function get_Verfied_Profiles($per_page,$page) {

     $verified_profiles = $this->with('media')->limit($per_page,$page)->get_many_by('is_profile_verified','1');


     //var_dump($verified_profiles);exit;

     if(count($verified_profiles)>0) {

      
             foreach ($verified_profiles as $value) {

                  if(!empty($value->media)) {

                     $value->media->file_name = '/uploads/profile/'.$value->id .'/avatar/'. $value->media->file_name;
                  } 
                  else {

                    $value->media = new stdClass();
                     $value->media->file_name = '/uploads/no-photo.jpg';
                  }
                   
             }
                
    }

     return $verified_profiles;
   }

}









