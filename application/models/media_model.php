<?php
/**
 * Created by PhpStorm.
 * User: DEVELOPER4
 * Date: 12/26/14
 * Time: 1:14 PM
 */

class Media_model extends MY_Model {

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

    public $belongs_to = array( 'product' => array( 'primary_key' => 'product_id' ,'model'=>"product_model"),
                             'profile' => array( 'primary_key' => 'profile_id' ,'model'=>"profile_model"));


    public function save_or_update($profile_id,$upload_config)
    {

        $upload_data = $this->upload_media($upload_config);

        if (isset($upload_data)) {
            $file_name = $upload_data['file_name'];
            $file_path = $upload_data['file_path'];
            //update profile image details
            $check_media_id = $this->get_by('profile_id', intval($profile_id),TRUE);

            if ( count($check_media_id) > 0) {
                $profile_image_id = $this->update($check_media_id->id,
                    array(
                        'type' => 'profile_image',
                        'file_name' => $file_name,
                        'full_path' => $file_path,
                        'profile_id' => $profile_id
                    ));

                if ($profile_image_id) {
                    $profile_image_id = $check_media_id->id ;
                }

            } else {
                $profile_image_id = $this->insert(array(
                    'type' => 'profile_image',
                    'file_name' => $file_name,
                    'full_path' => $file_path,
                    'profile_id' => $profile_id
                ));

            }

            return $profile_image_id;
        }
        return -1 ;
    }

    public function upload_media($upload_config){

        $this->load->library('upload', $upload_config);

        if (!is_dir($upload_config['upload_path']))
            mkdir($upload_config['upload_path'], 0777, TRUE);

        $this->upload->initialize($upload_config);

        if (!$this->upload->do_upload('imgfile')) {
            // upload failed
            //TODO:throw th
            return array('error' => $this->upload->display_errors('<span>', '</span>'));

        } else {
            // upload success
            $upload_data = $this->upload->data();
        }

        return $upload_data;
    }
}









