<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by Daniel Adenew.
 * Date: 2/11/2015
 * Time: 12:16 PM
 * This a wrapper library class for
 * payment related task and
 * Authorize.net API functionality
 */

class Payment_service {

    private $CI;

    public function __construct() {

        $this->CI =& get_instance();

    }

    public function processPayment() {


        //load helper and libraries for validating the input from the form

        $this->CI->load->library('form_validation');

        //load payment for store
        $store_creation_fee = $this->CI->config->item('fee_setting');

        $post = $this->CI->input->post();
        //retrieve form data and sanitize
        $card_number = $this->CI->sanitize($post['x_card_num']);
        $ccv_code = $this->CI->sanitize($post['x_card_code']);

        $phone_no =$this->CI->sanitize($post['x_phone']);
        $country = $this->CI->sanitize($post['x_country']);
        $state = $this->CI->sanitize($post['x_state']);
        $city = $this->CI->sanitize($post['x_city']);
        $address_line_1 = $this->CI->sanitize($post['x_address_1']);
        $address_line_2 = $this->CI->sanitize($post['x_address_2']);


        $expiration_month = $this->CI->sanitize($post['x_exp_month']);
        $expiration_year = $this->CI->sanitize($post['x_exp_year']);
        $expiration_date = $this->CI->sanitize($expiration_month) .'/'. $this->CI->sanitize($expiration_year);

        //get current user full name and zip to match with the data entered on the form
        $this->CI->load->model('profile_model','profile');
        $profile = $this->CI->profile->get($this->CI->profile_id);
        $user_full_name= $profile->fname." ".$profile->lname ;
        $user_zip = $profile->zipcode;
        $zip = $user_zip;
        $name_on_card = $user_full_name;

        // set validation rules message to be displayed and functions to be called to validate data
        //notice the callback_function name and see how function name is used in the function to set message that appear on the form
        // $this->CI->form_validation->set_message('required', 'Enter a valid value'); // relace the required builtin message to * (red by a stylesheet)
         $this->CI->form_validation->set_rules('x_card_num', 'Credit Card Number ', 'required|callback_validateCreditcard_number');
         $this->CI->form_validation->set_rules('x_card_code', 'CCV / Security Code Verification ', 'required|callback_validateCCV[' . $card_number . ' ]');
         $this->CI->form_validation->set_rules('x_exp_month', 'Expiration_month ', 'required|callback_validateCreditCardExpirationDate[' . $expiration_year . ']');
         $this->CI->form_validation->set_rules('fullname', 'Name on card ', 'required|callback_validateName[' . $user_full_name . ']');
         $this->CI->form_validation->set_rules('x_zip', 'Zip', 'required|callback_validateZip[' . $user_zip . ']');
         $this->CI->form_validation->set_rules('x_state', 'State', 'required');
         $this->CI->form_validation->set_rules('x_city', 'City', 'required');
         $this->CI->form_validation->set_rules('x_country', 'Country', 'required');
         $this->CI->form_validation->set_rules('x_phone', 'Phone Number', 'required');
         $this->CI->form_validation->set_rules('x_address_1', 'Address Line 1', 'required');
         //$this->CI->form_validation->set_error_delimiters('<div class="error">', '</div>');


        //run the validation logic, if the form has an error,   load back the form and show the user the errors
        if ( $this->CI->form_validation->run() == TRUE) {

            //do your API thing
            //TODO:access API here

            // Authorize.net lib
            $this->CI->load->library('authorize_net');
            //get api _email
            $api_email = $this->CI->config->item('authorize_net')['api_email'];
            $auth_net = array(
                'x_card_num'			=> $card_number, // Visa
                'x_exp_date'			=> $expiration_date,
                'x_card_code'			=> $ccv_code,
                'x_description'			=> 'Madebyus4u.com Account verification',
                'x_amount'				=> $store_creation_fee['create_store'],
                'x_first_name'			=> explode(" ",$user_full_name)[0],
                'x_last_name'			=> explode(" ",$user_full_name)[1],
                'x_address_1'			=> $address_line_1,
                'x_address_2'			=> $address_line_2,
                'x_city'				=> $city,
                'x_state'				=> $state,
                'x_zip'					=> $user_zip,
                'x_country'				=> $country,
                'x_phone'				=> $phone_no,
                'x_email'				=> $api_email,
                'x_customer_ip'			=> $this->CI->input->ip_address(),
            );

            $this->CI->authorize_net->setData($auth_net);

            // Try to AUTH_CAPTURE
            if( $this->CI->authorize_net->authorizeAndCapture() )
            {
               /* echo '<h2>Success!</h2>';
                echo '<p>Transaction ID: ' . $this->CI->authorize_net->getTransactionId() . '</p>';
                echo '<p>Approval Code: ' . $this->CI->authorize_net->getApprovalCode() . '</p>';
                */

                //TODO:update profile verify to true
                //TODO:save_payment information
                //TODO:SHOW success message to user alert success
                //TODO:Enable the rest of the tabs
            }

            else
            {

               // Show debug data
               // $this->CI->authorize_net->debug();

                $this->CI->message = array('type' => 'error', 'message' => '<h2>Fail!</h2>
                                                                            <p>'.$this->CI->authorize_net->getError().'</p>');

                return FALSE;
            }

            return TRUE;



            } else {

                    //TODO:collect error and validation message
                    $this->CI->message = array('type' => 'error', 'message' => validation_errors());
                    return FALSE;
                }

                   /* $this->verify();
                } else {
            $total = 1.00;
            $this->load->library('anet_php_sdk/AuthorizeNet');
            $this->load->config('credentials');
            $transaction = new AuthorizeNetAIM;
            $transaction->setSandbox(AUTHORIZENET_SANDBOX);
            $transaction->setFields(
            array(
            'amount' => $total,
            'card_num' => $card_number,
            'exp_date' => $expiration_date,
            'card_code' => $ccv_code,
            'first_name' => $name_on_card,
            'last_name' => $last_name,
            'address' => $address_line_1,
            'city' => $city,
            'state' => $state,
            'country' => $country,
            'zip' => $zip,
            'email' => 'vegascraig11@gmail.com',
            )
            );
            $response = $transaction->authorizeAndCapture();
            if ($response->approved) {
                //todo:SUCCESS PAGE AND OTHER LOGIC AFTER PAYEMNT
            $post['userType'] = 1;
            $post['isVerifiedSeller'] = 1;
            if ($this->db_helper->update($post, 'profile', array('id' => $this->profile->id))) {
            $data['profile_id'] = $this->profile->id;
            $data['page'] = 'store/store_name';
            $this->load->view('index_view', $data);
            $this->message = array('type' => 'info', 'message' => 'You are successfully validated');
                //$this->index(true);
            } else {
                if ($this->db_helper->error_no == 1062) {
                    $this->message = array('type' => 'info', 'message' => 'You Alrady Signup if you forget your password reset your account click <a href="' . base_url('signup/forget_password') . '">here</a>');
                }
            }
            //echo "<p> Success " . $response->transaction_id . "</p>";
            //header('Location: thank_you_page.php?transaction_id=' . $response->transaction_id);
            } elseif ($response->declined()) {
                // echo "<p> declined because of </p>".$response->error;
            } else {
                //echo "<p> ccv code is : >This transaction is not approved error or any thing else</p>";

                $data['profile_id'] = $this->profile->id;
                $data['page'] = 'card/validate_identity';
                $this->load->view('index_view', $data);
            }
                    }*/
    }

       function validateCreditcard_number($credit_card_number) {


        $firstnumber = substr($credit_card_number, 0, 1);

        switch ($firstnumber) {
            case 3:
                if (!preg_match('/^3\d{3}[ \-]?\d{6}[ \-]?\d{5}$/', $credit_card_number)) {
                     $this->CI->form_validation->set_message('validateCreditcard_number', 'Please enter a valid credit card number');
                    return false;
                }
                break;
            case 4:
                if (!preg_match('/^4\d{3}[ \-]?\d{4}[ \-]?\d{4}[ \-]?\d{4}$/', $credit_card_number)) {
                    return false;
                }
                break;
            case 5:
                if (!preg_match('/^5\d{3}[ \-]?\d{4}[ \-]?\d{4}[ \-]?\d{4}$/', $credit_card_number)) {
                     $this->CI->form_validation->set_message('validateCreditcard_number', 'Please enter a valid credit card number');
                    return false;
                }
                break;
            case 6:
                if (!preg_match('/^6011[ \-]?\d{4}[ \-]?\d{4}[ \-]?\d{4}$/', $credit_card_number)) {
                     $this->CI->form_validation->set_message('validateCreditcard_number', 'Please enter a valid credit card number');
                    return false;
                }
                break;
            default: {
            return false;
            }
        }

        $credit_card_number = str_replace('-', '', $credit_card_number);
        $map = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, 2, 4, 6, 8, 1, 3, 5, 7, 9);
        $sum = 0;
        $last = strlen($credit_card_number) - 1;
        for ($i = 0; $i <= $last; $i++) {
            $sum += $map[$credit_card_number[$last - $i] + ($i & 1) * 10];
        }
        if ($sum % 10 != 0) {
             $this->CI->form_validation->set_message('validateCreditcard_number', 'Please enter a valid credit card number');
            return false;
        }
        return true;
    }

    function validateCreditCardExpirationDate($month, $year) {

        if (!preg_match('/^\d{1,2}$/', $month)) {
             $this->CI->form_validation->set_message('validateCreditCardExpirationDate', 'Please enter a valid month');
            return false;
        } else if (!preg_match('/^\d{4}$/', $year)) {
             $this->CI->form_validation->set_message('validateCreditCardExpirationDate', 'Please enter a valid Month');
            return false;
        } else if ($year < date("Y")) {
             $this->CI->form_validation->set_message('validateCreditCardExpirationDate', 'Please enter a future  year');
            return false;
        } else if ($month < date("m") && $year == date("Y")) {
             $this->CI->form_validation->set_message('validateCreditCardExpirationDate', 'Please enter a future Month');
            return false;
        }
        return true;
    }

    function validateCCV($ccv, $cardNumber) {

        $firstnumber = (int) substr($cardNumber, 0, 1);
        if ($firstnumber === 3) {
            if (!preg_match("/^\d{4}$/", $ccv)) {
                 $this->CI->form_validation->set_message('validateCCV', 'Please enter a valid cvv_code');
                return false;
            }
        } else if (!preg_match("/^\d{3}$/", $ccv)) {
             $this->CI->form_validation->set_message('validateCCV', 'Please enter a valid  cvv_code');
            return false;
        }
        return true;
    }

    function validateName($name_on_card, $user_full_name) {
        $names=  explode(" ", $user_full_name);
        $reverse_name=$names[1]. " ".$names[0];
        if (!($name_on_card == $user_full_name || $name_on_card==$reverse_name)) {
             $this->CI->form_validation->set_message('validateName', 'The value does not match your profile name');
            return false;
        }
        return true;
    }

    function validateZip($zip, $user_zip) {

        if (!($zip == $user_zip)) {
             $this->CI->form_validation->set_message('validateZip', 'The value does not match your profile zip code');
            return false;
        }
        return true;
    }

} 