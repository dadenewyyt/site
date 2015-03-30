<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Welcome to MadebyUs4u.com | Seller Details</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Le styles -->
        <link href=<?php
echo base_url() . "assets/plugins/bootstrap/css/bootstrap.min.css"; ?> rel="stylesheet">
            <link href=<?php
echo base_url() . "assets/css/common.css"; ?> rel="stylesheet">
                <link href=<?php
echo base_url() . "assets/css/collective_common.css"; ?> rel="stylesheet">
                    <link href=<?php
echo base_url() . "assets/css/store_tabs.css"; ?> rel="stylesheet">

                    </head>
                    <body>
                        <?php
$this->load->view($notification_bar); ?>
                        <header>
                            <?php
$this->load->view($header_black_menu); ?>
                            <?php
$this->load->view($header_logo_white); ?>
                        </header>
                        <!-- Responsive design
                        ================================================== -->
                        <section id="responsive" style="background-color:#f5f5f5;">
                            <!--load menu here -->
                            <?php
$this->load->view($main_menu); ?>
                            <div class="container container-listing">
                                <!--store setup-->
                                <div role="tabpanel" class="tab-pane active" id="store">
                                    <!--start of row-->

                                    <style type="text/css">
                                                            .tab_lables_sup {
                                                            font-weight:400;
                                                            top:-3.79px;
                                                            font-size:13px;'
                                                            }
                                    </style>
                                    <div class="row-storesetup row">
                                        <div id="divsetup-content" name="divsetup-content" class="divsetup-content col-md-12" style="display:block;">
                                            <h2 style="font-size: 26px;font-weight: 600;">Store <span style='font-weight: 400;'>Setup</span>
                                            <sup id='tab_lables_sup'class='tab_lables_sup'>- Step 1. Validate Identity</sup>
                                            <small class='pull-right' style='color:rgb(216, 62, 62);margin-top: 8px;font-size: small;'>* ( Mandatory filed )</small>  </h3>
                                            <hr>
                                            <div role="tabpanel" class="tabpane-storesetup">
                                                <!-- Nav tabs -->


                                                <ul class="nav nav-pills" role="tablist" id='createNotTab'>
                                                    <li role="presentation"><a href="#verify-tab" aria-controls="verify-tab" role="tab" data-toggle="tab" ><!--validate page-->1. Validate Identity<i class="fa"></i></a></li>
                                                    <!--this is a form for all tab submission after verfiication-->
                                                    <li role="presentation" ><a href="#store-tab" aria-controls="store-tab" role="tab" data-toggle="tab" ><!--store page--> 2. Store Name<i class="fa"></i></a></li>
                                                    <li role="presentation"><a href="#product-tab" aria-controls="product-tab" role="tab" data-toggle="tab">3. Add Listing<i class="fa"></i></a></li>
                                                    <li role="presentation"><a href="#getpaid-tab" aria-controls="getpaid-tab" role="tab" data-toggle="tab" >4. Get Paid<i class="fa"></i></a></li>
                                                    <li role="presentation"><a href="#openstore-tab" aria-controls="openstore-tab" role="tab" data-toggle="tab" >5. Preview Store<i class="fa"></i></a></li>
                                                    <li role="presentation"><a href="#launchstore-tab" aria-controls="launchstore-tab" role="tab" data-toggle="tab" >6. Launch Store<i class="fa"></i></a></li>

                                                </ul>
                                                <?php
if ($tab_status): ?>
                                                <?php
    $attributes = array('class' => 'form', 'novalidate' => 'novalidate', 'id' => 'myForm', 'name' => 'myForm',);
    
    echo form_open_multipart('store/save/' . $profile->id, $attributes);
?>
                                                <?php
endif; ?>

                                                <!-- Tab panes -->
                                                <div class="tab-content">

                                                    <div role="tabpanel" class="tab-pane fade in tab-pane active " id="verify-tab"><?php
$this->load->view($identity_validation_page); ?></div>

                                                    <!--DISABLE TAB -->
                                                    <?php
if ($tab_status): ?>
                                                    <div role="tabpanel" class="tab-pane fade tab-pane  " id="store-tab"><?php
    $this->load->view($store_page); ?></div>
                                                    <div role="tabpanel" class="tab-pane fade tab-pane" id="product-tab"><?php
    $this->load->view($addproduct_page); ?></div>
                                                    <div role="tabpanel" class="tab-pane fade tab-pane" id="getpaid-tab"><?php
    $this->load->view($getpaid_page); ?></div>
                                                    <div role="tabpanel" class="tab-pane fade tab-pane" id="openstore-tab"><?php
    $this->load->view($previewstore_page); ?></div>
                                                    <div role="tabpanel" class="tab-pane fade tab-pane" id="launchstore-tab"><?php
    $this->load->view($launchstore_page); ?></div>

                                                    <?php
endif; ?>
                                                </div>
                                                <?php
if ($tab_status): ?>    </form>    <?php
endif; ?>

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
                        <script src="<?php
echo base_url() . "assets/plugins/jquery/jquery.min.js"; ?>"></script>
                        <!-- Latest compiled and minified JavaScript -->
                        <script src="<?php
echo base_url() . "assets/plugins/bootstrap/js/tooltip.js"; ?>"></script>
                        <script src="<?php
echo base_url() . "assets/plugins/bootstrap/js/bootstrap.min.js"; ?>"></script>
                        <script src="<?php
echo base_url() . "assets/js/subscribe_ajax.js"; ?>"></script>
                        <script src="<?php
echo base_url() . "assets/js/multiple_image_uploads.js"; ?>"></script>
                        <script src="<?php
echo base_url() . "assets/js/bootstrapValidator.js"; ?>"></script>

                        <script type="text/javascript">
                                        
                            
                        function disable_tabs_when_completed() {
                        var store_setup_completed = '<?php
                         echo $store_setup_completed; ?>';
                        if (store_setup_completed) {
                        $('.nav-pills a[href="#' + 'launchstore-tab' + '"]').tab('show');
                        $('.nav-pills li').not('.active').find('a').removeAttr("data-toggle");
                        } else {
                        $('.nav-pills a[href="#' + 'verify-tab' + '"]').tab('show');
                        $('.nav-pills li').not('.active').find('a').removeAttr("data-toggle");
                        }
                        }
                        function misellenous_help_preview_store_and_image() {
                        //change the produt name div conetnt to same as this one
                        // $('.product_name').text($(e.currentTarget).data('asdasdasd');
                        $("#product_name").change(function(e) {
                        $('#product_name_h4').text($(this).val());
                        });
                        $("#product_descritpion").change(function(e) {
                        $('#descritpion_paragraph').text($(this).val());
                        });
                        $("#price").change(function(e) {
                        $('#price_tag_label').text("$" + $(this).val());
                        });
                        $("#category").change(function(e) {
                        $('#category_label').text($(this).val());
                        });
                        //display the image on previw store page as
                        $(document).on('change', '#product_image', function(event) {
                        var output = document.getElementById("product_preview_image");
                        output.src = URL.createObjectURL(event.target.files[0]);
                        });
                        }
                        function change_labels_when_tabs_activated() {
                        $('a[href="#store-tab"]').click(function() {
                        $('#tab_lables_sup').empty();
                        $('#tab_lables_sup').append(document.createTextNode("- Step 2. Create Store"));
                        });

                        $('a[href="#product-tab"]').on('shown.bs.tab', function (e) {
                        $('#tab_lables_sup').empty();
                        $('#tab_lables_sup').append(document.createTextNode("- Step 3. Add Product Lisiting"));
                        });

                        $('a[href="#getpaid-tab"]').on('shown.bs.tab', function (e) {
                        $('#tab_lables_sup').empty();
                        $('#tab_lables_sup').append(document.createTextNode("- Step 4. Get Paid Wire Your Account"));
                        });

                        $('a[href="#openstore-tab"]').on('shown.bs.tab', function (e) {
                        $('#tab_lables_sup').empty();
                        $('#tab_lables_sup').append(document.createTextNode("- Step 5. Preview Your Store"));

                        });

                        $('a[href="#launchstore-tab"]').on('shown.bs.tab', function (e) {
                        $('#tab_lables_sup').empty();
                        $('#tab_lables_sup').append(document.createTextNode("- Step 6. Launch Your Store"));
                        });
                        }
                        $( document ).ready(function() {
                        disable_tabs_when_completed();
                        misellenous_help_preview_store_and_image();
                        change_labels_when_tabs_activated();



                        //disable tabs not active so that enable them when validated

                        /**
                        this a continue button after successfull identity verfication
                        **/
                        $('#btn_next_page').click( function() {

                        $('.nav-pills > .active').next('li').find('a').attr("data-toggle","tab").trigger('click');

                        });
                        //next page for store
                        $('#btn_store_next_page').click( function() {
                        var self = this;


                        //TODOD: check store image file attached or not
                        $store_image_status = $("#imgfile_store").val();

                        if( ($store_image_status!=undefined) & ($store_image_status!='') )  {

                        self.store_image = true;
                        $('#imgfile_store').closest('.form-group').removeClass('has-error').addClass('has-success');
                        $('#store_validation_message').css('color','#3c763d');

                        } else if($store_image_status==undefined || $store_image_status=='') {
                        self.store_image = false;
                        $('#imgfile_store').closest('.form-group').removeClass('has-success').addClass('has-error');
                        $('#store_validation_message').css('color','#a94442');
                        }


                        if(self.store_image==true) {
                        $('.nav-pills > .active').next('li').find('a').attr("data-toggle","tab").trigger('click');
                        }


                        });
                        //next page for product
                        $('#btn_product_next_page').click( function() {

                        var self = this;

                        //TODOD: check store image file attached or not
                        $product_image_status = $("#product_image").val();

                        if( ($product_image_status != undefined) & ($product_image_status != '') )  {

                        self.product_image=true;
                        $('#preview_product_image').css('border','1px solid #3c763d');
                        $(".product_validation_message").css('color','#3c763d');

                        } else if( $product_image_status == undefined || $product_image_status == '' ) {

                        // self.product_image=false;
                        $('#preview_product_image').css('border','1px solid #a94442');
                        $(".product_validation_message").css('color','#a94442');
                        }


                        if(self.product_image == true ) {

                        $('.nav-pills > .active').next('li').find('a').attr("data-toggle","tab").trigger('click');
                        }

                        });
                        //next page for store
                        $('#btn_next_page_getpaid').click( function() {

                        var self = this;
                        self.isValid=true;


                        if(self.isValid==true) {
                        $('.nav-pills > .active').next('li').find('a').attr("data-toggle","tab").trigger('click');
                        }

                        });

                        //call function for image upload
                        // multiple_image_upload();

                        });


                        /***
                        * Created by Daniel Adenew , 2014
                        * Submit email subscription using ajax
                        * Send email address
                        * Send controller
                        * Receive response
                        */
                        var url =  "<?php
echo site_url('welcome/subscribe'); ?>";
                        subscribe_using_ajax(url);

                        $('#btnstoresetup').click( function() {
                        $('#divstoresetup').hide("400",function(){
                        // alert( "Animation complete." );
                        // $('#divsetup-content').css('display','block');
                        window.location="<?php
echo base_url('store'); ?>";
                        });
                        }) ;
                        /*care for cascading drop down boxes **/
                        $('#category').change(function(){
                        var csrf = $('input[name="madebyus4u_csrf_test_name"]').val();  // <- get token value from hidden form input

                        var categorey_selected = $("#category option:selected").text();

                        $("#variation > option").remove(); //first of all clear select items
                        // alert(categorey_selected);
                        $.ajax({
                        url: "<?php
echo base_url('store/get_categories_variation_ajax'); ?>",
                        async: false,
                        cache: false,
                        data: {madebyus4u_csrf_test_name:csrf,category:categorey_selected},
                        type: 'post',
                        datatype:'json',
                        success: function(variation_array_json){
                        // alert(variation_array_json);
                        $.each(variation_array_json,function(id,value) //here we're doing a foeach loop round each city with id as the key and city as the value
                        {

                        var opt = $('<option />'); // here we're creating a new select option with for each city
                            opt.val(id);
                            opt.text(value);
                            $('#variation').append(opt); //here we will append these new select options to a dropdown with the id 'cities'
                            });
                            $('#variation').val('#');
                            }
                            });
                            //sub variation
                            $('#variation').change(function(){
                            var csrf = $('input[name="madebyus4u_csrf_test_name"]').val();  // <- get token value from hidden form input

                            var variation_selected = $("#variation option:selected").text();
                            var categorey_selected = $("#category option:selected").text();

                            $("#sub_variation > option").remove(); //first of all clear select items
                            // alert(categorey_selected);
                            $.ajax({
                            url: "<?php
echo base_url('store/get_sub_variation_ajax'); ?>",
                            async: false,
                            cache: false,
                            data: {madebyus4u_csrf_test_name:csrf,category:categorey_selected,variation:variation_selected},
                            type: 'post',
                            datatype:'json',
                            success: function(variation_array_json){
                            //alert(variation_array_json);
                            $.each(variation_array_json,function(id,value) //here we're doing a foreach loop round each city with id as the key and city as the value
                            {

                            var opt = $('<option />'); // here we're creating a new select option with for each city
                                opt.val(id);
                                opt.text(value);
                                $('#sub_variation').append(opt); //here we will append these new select options to a dropdown with the id 'cities'
                                });
                                $('#sub_variation').val('#');
                                }          });
                                });
                                });

                                </script>
                            </body>
                        </html>