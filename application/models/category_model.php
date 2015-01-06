<?php
/**
 * Created by PhpStorm.
 * User: DEVELOPER4
 * Date: 12/26/14
 * Time: 6:52 PM
 */

class Category_model extends My_Model {

    public function __construct() {
        parent::__construct() ;
        $this->_database = $this->db;
    }

   // protected $return_type = 'array';
    public $belongs_to = array( 'produts' => array( 'primary_key' => 'state' ,'model'=>'state_model'));

    public function populate_state_dropdown(){

        $populated_states =  $this->as_array()->get_all();

        $states = array();

        foreach($populated_states as $populated_state){
            $states[$populated_state['state']] = $populated_state['state'];
        }

        return $states;
    }
} 