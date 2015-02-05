<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * created by danie adenew
 */

$config['public_urls'] = array (
'/',
'users/signin',
'users/logout',
'users/login',
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
'sell/seller',
'sell/become_seller',
'sell/sell',
'sell/index',
'bid/',
'bid/index',
'buy/index',
'buy/buy',

);

$config['upload_config_profile_edit'] = array (
        'upload_path' => '',
        'allowed_types' => "gif|jpg|png|mp4|3gp|flv",
        'overwrite' => TRUE,
        'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
        'max_height' => "768",
        'max_width' => "1024"
    );
