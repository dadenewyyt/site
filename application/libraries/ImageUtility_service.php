<?php
/**
 * Created by Daniel Adenew.
 * Date: 3/27/2015
 * Time: 12:48 PM
 * This a wrapper library class for
 * image resize and other processing utility
 *
 */

class ImageUtility_service {

    private $CI;

    public function __construct() {

        $this->CI =& get_instance();

    }

    public function resize_upload_images($srcImagePath,$config){

        $srcImagePath = './uploads/profile/1/store/store_image36261.jpg';
        $config = $this->CI->load->config('image_lib');
        $config = $this->CI->config->item('image_resize_config');
        $config['source_image'] = $srcImagePath;

        $this->CI->load->library('image_lib',$config);

        $this->CI->image_lib->resize();

        echo $this->CI->image_lib->display_errors();
    }

} 