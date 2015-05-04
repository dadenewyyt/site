<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * created by danie adenew
 */

$config['public_urls'] = array (
'/',
'users/signin',
'users/logout',
'users/login',
'users/forgot_password',
'users/reset_password',
'welcome/index',
'welcome/subscribe',
'welcome/home',
'signup/index',
'signup/register',
'signup/',
'signup/activate',
'signup/resend_activation',
'buy/',
'sell/',
'sell/become_seller',
'sell/sell',
'sell/sellers',
'sell/index',
'bid/',
'bid/index',
'buy/index',
'buy/buy',
'product/detail',

);

$config['upload_config_profile_edit'] = array (
        'upload_path' => '',
        'file_name'=>'',
        'allowed_types' => "gif|jpeg|jpg|png|mp4|3gp|flv",
        'overwrite' => TRUE,
        'max_size' => "5120", // Can be set to particular file size , here it is 5 MB( 5,120 KB)
        'max_height' => "2068",
        'max_width' => "4024"
    );

$config['fee_setting'] = array (
    'create_store'=>'1.00',
);

$config['account_types'] =
    array("Checking"=>"Checking", "Saving"=>"Saving");
?>

