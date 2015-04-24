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

    public $belongs_to = array (
                             'product' => array( 'primary_key' => 'product_id' ,'model'=>"product_model"),
                             'profile' => array( 'primary_key' => 'profile_id' ,'model'=>"profile_model"),
                             'store'=>array('primary_key'=>'store_id','model'=>'store_model'),
                           );

    /**
     * @param $profile_id
     * @param $upload_config
     * @param $file_post_name
     * @return bool|int
     */
    public function save_or_update($profile_id,$upload_config,$file_post_name)
    {

        $upload_data = $this->upload_media($upload_config,$file_post_name);

        if (isset($upload_data['file_name'])) {
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

    /**
     * @param $profile_id
     * @param $store_id
     * @param $upload_data
     * @return bool|int
     */
     public function save_or_update_store($profile_id,$store_id,$upload_data) {


        if (isset($upload_data['file_name'])) {

            $file_name = $upload_data['file_name'];
            $file_path = $upload_data['file_path'];
           

              $store_image_id = $this->insert(array(
                    'type' => 'store_image',
                    'file_name' => $file_name,
                    'full_path' => $file_path,
                    'profile_id' => $profile_id,
                    'store_id'=> $store_id
                ));
           
             return $store_image_id;
         }
         return -1;
        
    }

    /**
     * @param $profile_id
     * @param $product_id
     * @param $upload_data
     * @return bool|int
     */
    public function save_or_update_product($profile_id,$product_id,$upload_data) {


        if (isset($upload_data['file_name'])) {

            $file_name = $upload_data['file_name'];
            $file_path = $upload_data['file_path'];

            $insert_data =  array(
                'type' => 'product_image',
                'file_name' => $file_name,
                'full_path' => $file_path,
                'profile_id' => $profile_id,
                'product_id'=> $product_id,
            );

            $product_image_id = $this->insert($insert_data);

            return $product_image_id;
        }

        return -1;

    }


    /**
     * @param $upload_config
     * @param $file_post_name
     * @return array
     */
    public function upload_media($upload_config,$file_post_name){

        $this->load->library('upload', $upload_config);

        if (!is_dir($upload_config['upload_path']))
            mkdir($upload_config['upload_path'], 0777, TRUE);
          
        //rename files first      
        $temp = explode(".",$_FILES[$file_post_name]["name"]);
        $newfilename = 'profile_image'.rand(1,99999) . '.' .end($temp);
        $upload_config['file_name'] = $newfilename;

        $this->upload->initialize($upload_config);

        if (!$this->upload->do_upload($file_post_name)) {
            //upload failed
            //TODO:throw exception
            return array('error' => $this->upload->display_errors('<span>', '</span>'));

        } else {
            // upload success
            $upload_data = $this->upload->data();
        }

        return $upload_data;
    }

    /**
     * @param $profile_id
     * @param $file_post_name
     * @return array
     */
    public function upload_media_store_and_products($profile_id,$file_post_name) {

         $this->load->library('upload');
         //get the image file name for the store
         $upload_data_store = array();

         //get the image file name for the products
         $upload_data_products = array();

         $files = $_FILES;

         $total_count_of_files = count($_FILES[$file_post_name]['name']);

        //count FILES only who have a value / filename;

              for($i=0; $i < $total_count_of_files; $i++) {

                  //chop out the empty files
                  if(!empty($files[$file_post_name]['name'][$i])) {

                      $_FILES[$file_post_name]['name'] = $files[$file_post_name]['name'][$i];
                      $_FILES[$file_post_name]['type'] = $files[$file_post_name]['type'][$i];
                      $_FILES[$file_post_name]['tmp_name'] = $files[$file_post_name]['tmp_name'][$i];
                      $_FILES[$file_post_name]['error'] = $files[$file_post_name]['error'][$i];
                      $_FILES[$file_post_name]['size'] = $files[$file_post_name]['size'][$i];

                      //TODO :Resize IMAGES

                      //store image first
                      if ($i == 0) {

                          $pathToUpload = "./uploads/profile/" . $profile_id . "/store/";
                          //load the configuration
                          $upload_config = $this->config->item('upload_config_profile_edit');

                          $upload_config['upload_path'] = $pathToUpload;

                          //rename files first
                          $temp = explode(".", $_FILES[$file_post_name]["name"]);
                          $newfilename = 'store_image' . rand(1, 99999) . '.' . end($temp);
                          $upload_config['file_name'] = $newfilename;

                          if (!is_dir($upload_config['upload_path']))
                              mkdir($upload_config['upload_path'], 0777, TRUE);

                          $this->upload->initialize($upload_config);


                          if (!$this->upload->do_upload()) {
                              //upload failed
                              //TODO:throw th
                              return (array('error' => $this->upload->display_errors('<span>', '</span>')));

                          } else {
                              // upload success
                              $upload_data_store[] = $this->upload->data();
                          }


                      } else {

                          //chop out the empty files

                          $_FILES[$file_post_name]['name'] = $files[$file_post_name]['name'][$i];
                          $_FILES[$file_post_name]['type'] = $files[$file_post_name]['type'][$i];
                          $_FILES[$file_post_name]['tmp_name'] = $files[$file_post_name]['tmp_name'][$i];
                          $_FILES[$file_post_name]['error'] = $files[$file_post_name]['error'][$i];
                          $_FILES[$file_post_name]['size'] = $files[$file_post_name]['size'][$i];

                          $pathToUpload = "./uploads/profile/" . $profile_id . "/products/";
                          //load the configuration
                          $upload_config = $this->config->item('upload_config_profile_edit');

                          $upload_config['upload_path'] = $pathToUpload;

                          //rename files first
                          $temp = explode(".", $_FILES[$file_post_name]["name"]);
                          $newfilename = 'product_image' . rand(1, 99999) . '.' . end($temp);
                          $upload_config['file_name'] = $newfilename;

                          if (!is_dir($upload_config['upload_path']))
                              mkdir($upload_config['upload_path'], 0777, TRUE);

                          $this->upload->initialize($upload_config);

                          if (!$this->upload->do_upload()) {
                              //upload failed
                              //TODO:throw th
                              return (array('error' => $this->upload->display_errors('<span>', '</span>')));

                          } else {
                              // upload success
                              $upload_data_products[] = $this->upload->data();
                          }

                      }
                  }

           }
           //this data is need for later database save on media to store relationships
           $upload_result = array_merge($upload_data_store,$upload_data_products);
           
          // var_dump($upload_result);
           
            return $upload_result ;

     }

}









