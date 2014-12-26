<?php
/**
 * Created by PhpStorm.
 * User: DEVELOPER4
 * Date: 12/26/14
 * Time: 1:14 PM
 */

class Memeber_model extends MY_Model {

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

    public $belongs_to = array( 'user' => array( 'primary_key' => 'user_id' ,'model'=>'user_model'));
    public $has_many = array('products' => array( 'primary_key' => 'memeber_id' ,'model'=>"product_model") );







} 