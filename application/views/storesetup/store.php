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
                    <div class="row-storesetup row">
                        <div id="divsetup-content" name="divsetup-content" class="divsetup-content col-md-12" style="display:block;">
                            <h2 style="font-size: 26px;font-weight: 600;">Store <span style='font-weight: 400;'>Setup</span>
                            <sup style='font-weight:400;top:-3.79px;font-size:13px;'>- Step 1. Validate Identity</sup>
                            <small class='pull-right' style='color:rgb(216, 62, 62);margin-top: 8px;font-size: small;'>* ( Mandatory filed )</small>  </h3>
                            <hr>
                            <div role="tabpanel" class="tabpane-storesetup">
                                <!-- Nav tabs -->
                                  
                              
                                <ul class="nav nav-pills" role="tablist" id='createNotTab'>
                                    <li role="presentation" class="active" ><a href="#verify-tab" aria-controls="verify-tab" role="tab" data-toggle="tab" ><!--validate page-->1. Validate Identity</a></li>
                                   <!--this is a form for all tab submission after verfiication-->
                              

                                    <li role="presentation" ><a href="#store-tab" aria-controls="store-tab" role="tab" data-toggle="tab" ><!--store page--> 2. Store Name</a></li>
                                    <li role="presentation"><a href="#product-tab" aria-controls="product-tab" role="tab" data-toggle="tab">3. Add Listing</a></li>
                                    <li role="presentation"><a href="#getpaid-tab" aria-controls="getpaid-tab" role="tab" data-toggle="tab" >4. Get Paid</a></li>
                                    <li role="presentation"><a href="#openstore-tab" aria-controls="openstore-tab" role="tab" data-toggle="tab" >5. Preview Store</a></li>
                                    <li role="presentation"><a href="#launchstore-tab" aria-controls="launchstore-tab" role="tab" data-toggle="tab" >6. Launch Store</a></li>
                                  
                                 </ul>
                                                         
                                   <form id='myForm' novalidate name='myForm' method="post" action="<?= base_url('store/save');?>">
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
                                 </form>                                                         
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
                <script src="<?php echo base_url()."assets/js/multiple_image_uploads.js";?>"></script>
                <script src="<?php echo base_url()."assets/js/bootstrapValidator.js";?>"></script>
                <script src="<?php echo base_url()."assets/js/validate_store_setup.js";?>"></script>
                <script type="text/javascript">
                   
                    /***
                    * Created by Daniel Adenew
                    * Submit email subscription using ajax
                    * Send email address
                    * Send controller
                    * Receive response
                    */
        

                    $( document ).ready(function() {

          
                     //disable tabs not active so that enable them when validated
                     //$('.nav li').not('.active').find('a').removeAttr("data-toggle");

                    
                       /**
                       this a continue button after successfull identity verfication
                       **/

                       $('#btn_next_page').click( function() {
                        $('.nav-pills > .active').next('li').find('a').trigger('click');
                      });

                      //next page for store
                       $('#btn_store_next_page').click( function() {

                         validate1();
                         //$('.nav-pills > .active').next('li').find('a').trigger('click');
                      });
                       

                    //next page for product
                        $('#btn_product_next_page').click( function() {
                       
                         validate1();

                         /*enable next tab*/
                         // $('.nav li.active').next('li').removeClass('disabled');
                         // $('.nav li.active').next('li').find('a').attr("data-toggle","tab")
                    
                         /* if(validation_add_products()) {
 
                         $('.nav-pills > .active').next('li').find('a').trigger('click');
                        }*/
                       

                      });
                    
                      //next page for store
                       $('#btn_next_page_getpaid').click( function() {

                         validate1();
                       
                      });

                    //next page for store
                       $('#btn_save').click( function() {

                         validate1();
                         
                      });
                      
                        //call function for image upload
                       multiple_image_upload();
                       

                                   
                });
            
        
                var url =  "<?php echo site_url('welcome/subscribe');?>";
                subscribe_using_ajax(url);

                

                $('#btnstoresetup').click( function() {
                $('#divstoresetup').hide("400",function(){
                // alert( "Animation complete." );
                // $('#divsetup-content').css('display','block');
                window.location="<?php echo base_url('store');?>";
                });
                }) ;


              
                 /*
                 * Validate the store page 
                 * before continuing to next page
                 */




                function validation_store(){

                var storeimgfile = $('#imgfile_store').val();
                var storename = $('#storename').val();
                var store_description = $("#store_descritpion").val();
                    
                    
                    if(storeimgfile==''){
                        return false;
                    }
                     if(storename==''){
                        return false;
                    }
                   if(store_description==''){
                        return false;
                    }

                    return true;
                }



                //validate add products

                  function validation_add_products(){

                var product_image = $('#preview_product_image').attr('src');
                var product_name = $('#product_name').val();
                var product_description = $("#product_descritpion").val();
                var category = $('#category').attr('value');
                var variation = $('#variation').attr('value');
                var sub_varaition = $("#sub_varaition").attr('value');
                var quantity = $("#quantity").val();
                var sprice = $("#sprice").val();

                //console.log (document.getElementById("myForm").elements);
                      

                    if(product_image=='uploads/profile/no-photo.jpg'){
                        alert('at least on product image need to be attached');
                        return false;
                    }
                     if(product_name==''){
                          alert('please,');
                        return false;
                    }
                   if(product_description==''){
                      alert('desc'+product_description);
                        return false;
                    }

 
                    if(category==''){
                          alert('pcat'+category);
                        return false;
                    }
                     if(variation==''){
                        alert('vvar'+variation);
                        return false;
                    }

                    if(sub_varaition==''){
                              alert('subvvar'+sub_varaition);
                        return false;
                    }


                    if(quantity==''||isNaN(quantity)==false){
                        alert('isNaN(quantity)===false'+isNaN(quantity)===false);
                        return false;
                    }
                     if(sprice==''||isNaN(sprice)){
                        alert('isNaN(quantity)===false'+isNaN(sprice)==false);
                        return false;
                    }
                    if(price==''||!isNaN(price)==false){
                        alert('isNaN(quantity)===false'+isNaN(price)==false);
                        return false;
                    }
                    alert(isNaN(price)==false+isNaN(sprice)==false+isNaN(quantity)==false);

                    return true;
                }

                </script>
            </body>
        </html>