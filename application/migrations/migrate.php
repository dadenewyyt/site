<?php defined("BASEPATH") or exit("No direct script access allowed");

  class Migrate extends CI_Controller {

    public function __construct() {

         parent::__construct();
         $this->load->library('Migration');
      }
    public function start_migration() {

        /**
        * make sure migration command is issued
        * from command line not controller or something
        **/

        if( $this->input->is_cli_request() == true ) {

            if (ENVIRONMENT == 'development') {

                if ( ! $this->migration->current()) {

                  show_error($this->migration->error_string());
                  log_message('error',$this->migration->error_string());

                } else {

                    echo ('cool! , migration was successful');
                    log_message('info','cool , migration was successful');
                }

           } else {

                echo ('cool! , Hmm unable to migration at this time , are u nutts ? :( ');
                log_message('info','Hmm no migration this time , are u nutts ? ');
           }
     }
   }
  }
?>
