<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Welcome to MadebyUs4u.com | Seller Details</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Le styles -->
        <link href=<?php echo base_url()."assets/plugins/bootstrap/css/bootstrap.min.css";?> rel="stylesheet">
        <link href=<?php echo base_url()."assets/css/common.css";?> rel="stylesheet">
        <link href=<?php echo base_url()."assets/css/collective_common.css";?> rel="stylesheet">
        <link href=<?php echo base_url()."assets/css/store_tabs.css";?> rel="stylesheet">
    </head>
    <body>
        <?php $this->load->view($notification_bar); ?>
        <header>
            <?php $this->load->view($header_black_menu); ?>
            <?php $this->load->view($header_logo_white); ?>
        </header>
        <!-- Responsive design
        ================================================== -->
        <section id="responsive" style="background-color:#f5f5f5;">
            <!--load menu here -->
            <?php $this->load->view($main_menu); ?>
            <div class="container container-listing">
                <!--store setup-->
                <div role="tabpanel" class="tab-pane active" id="store">
                    <!--start of row-->
                    <div class="row-storesetup row" >
                        <div id="divsetup-content" name="divsetup-content" class="divsetup-content col-md-12" style="display:block;">
                            <h2 style="font-size: 26px;font-weight: 600;">Store <span style='font-weight: 400;'>Setup</span>
                            <sup style='font-weight:400;top:-3.79px;font-size:13px;'>- Step 1. Validate Identity</sup>
                            <small class='pull-right' style='color:rgb(216, 62, 62);margin-top: 8px;font-size: small;'>* ( Mandatory filed )</small>  </h3>
                            <hr>
                            <div role="tabpanel" class="tabpane-storesetup">
                                <!-- Nav tabs -->
                                <ul class="nav nav-pills" role="tablist">
                                    <li role="presentation" class="active" ><a href="#verify-tab" aria-controls="verify-tab" role="tab" data-toggle="tab" ><!--validate page-->1. Validate Identity</a></li>
                                   
                                    <li role="presentation" ><a href="#store-tab" aria-controls="store-tab" role="tab" data-toggle="tab" ><!--store page--> 2. Store Name</a></li>
                                    <li role="presentation"><a href="#product-tab" aria-controls="product-tab" role="tab" data-toggle="tab">3. Add Listing</a></li>
                                    <li role="presentation"><a href="#getpaid-tab" aria-controls="getpaid-tab" role="tab" data-toggle="tab" >4. Get Paid</a></li>
                                    <li role="presentation"><a href="#openstore-tab" aria-controls="openstore-tab" role="tab" data-toggle="tab" >5. Preview Store</a></li>
                                    <li role="presentation"><a href="#launchstore-tab" aria-controls="launchstore-tab" role="tab" data-toggle="tab" >6. Launch Store</a></li>
                                     
                                 </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    
                                    <div role="tabpanel" class="fade in tab-pane active " id="verify-tab"><?php $this->load->view($identity_validation_page);?></div>
                                  
                                   <!--DISABLE TAB -->
                                   <?php if ($tab_status): ?>

                                    <div role="tabpanel" class="fade tab-pane  " id="store-tab"><?php $this->load->view($store_page);?></div>
                                    <div role="tabpanel" class="fade tab-pane" id="product-tab"><?php $this->load->view($addproduct_page);?></div>
                                    <div role="tabpanel" class="fade tab-pane" id="getpaid-tab"><?php $this->load->view($getpaid_page);?></div>
                                    <div role="tabpanel" class="fade tab-pane" id="openstore-tab"><?php $this->load->view($previewstore_page);?></div>
                                    <div role="tabpanel" class="fade tab-pane" id="launchstore-tab"><?php $this->load->view($launchstore_page);?></div>
                                
                                 <?php endif;  ?>  
                                </div>
                            </div>
                        </div>
                        </div><!--end of row-->
                        </div><!--end of store setup-->
                    </div>
                </section>
                <footer class="footer">
                    <?php
                                                $this->load->view($footer_subscribe);
                                                $this->load->view($footer_privacy);
                    ?>
                </footer>
                <!-- Bootstrap core JavaScript
                ================================================== -->
                <!-- Placed at the end of the document so the pages load faster -->
                <script src="<?php echo base_url()."assets/plugins/jquery/jquery.min.js";?>"></script>
                <!-- Latest compiled and minified JavaScript -->
                <script src="<?php echo base_url()."assets/plugins/bootstrap/js/tooltip.js";?>"></script>
                <script src="<?php echo base_url()."assets/plugins/bootstrap/js/bootstrap.min.js";?>"></script>
                <script src="<?php echo base_url()."assets/js/subscribe_ajax.js";?>"></script>
                <script type="text/javascript">
                   
                    /***
                    * Created by Daniel Adenew
                    * Submit email subscription using ajax
                    * Send email address
                    * Send controller
                    * Receive response
                    */

                    $( document ).ready(function() {

                       
                      $('#btn_next_page').click( function() {
                        $('.nav-pills > .active').next('li').find('a').trigger('click');
                      });
                        

                        $('[data-toggle="popover"]').popover();
                        // Enabling Popover  (hidden content and title capturing)
                        $("#popup_upload").popover({
                            html : true,
                            content: function() {
                            return $('#popup_upload_html').html();
                            },
                            title: function() {
                            return $('#popup_upload_html_title').html();
                            }
                            
                        });
            
                });
            
                var url =  "<?php echo site_url('welcome/subscribe');?>";
                subscribe_using_ajax(url);

                /*
                *  prepare store  image to be previewd before actual upload
                *  this will be called on change even of the file / upload component
                *
                */
                $("#imgfile_store" ).change(function(event) {
                alert('ello store');
                var output = document.getElementById('preview_store_image');
                output.src = URL.createObjectURL(event.target.files[0]);
                $( "#store_image_file_path").val('file selected');
                });

                $('#btnstoresetup').click( function() {
                $('#divstoresetup').hide("400",function(){
                // alert( "Animation complete." );
                // $('#divsetup-content').css('display','block');
                window.location="<?php echo base_url('store');?>";
                });
                }) ;
                </script>
            </body>
        </html>