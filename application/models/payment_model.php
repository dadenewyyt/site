<?php
/**
 * Created by Daniel Adenew.
 *
 * Date: 12/26/14
 * Time: 1:14 PM
 */

class Payment_model extends MY_Model {

    public function __construct() {
        parent::__construct() ;
        $this->_database = $this->db;
    }

    public $before_create = array( 'timestamps' );

    protected function timestamps($payments_row)
    {
        $payments_row['created_date'] = $payments_row['updated_date'] = date('Y-m-d H:i:s');
        $payments_row['created_by'] ='system';
        return $payments_row;
    }

    /**
     * Define relationship a member
     * have One to One , One to Many ,
     * Many to Many if any
     */

    public $belongs_to = array( 'profile' => array( 'primary_key' => 'profile_id' ,'model'=>"profile_model") );



}









