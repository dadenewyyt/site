<?php
/**
 * Created by PhpStorm.
 * User: DEVELOPER4
 * Date: 12/26/14
 * Time: 1:14 PM
 */

class Product_model extends MY_Model {

    public $belongs_to = array( 'profile' => array( 'model' => 'profile_model' ) ,
                                'media' => array( 'model' => 'media_model' ));


    public $has_many = array(
                              'comments' => array( 'primary_key' => 'parent_post_id' ),
                              'category' => array( 'primary_key' => 'parent_post_id' )

    );

    public $primary_key = 'id';


    public $validate = array(
        array( 'field' => 'fname',
            'label' => 'firstname',
            'rules' => 'required' ),
        array( 'field' => 'lname',
            'label' => 'lastname',
            'rules' => 'required' ),
    );




} 