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

<?php 
$error = isset($data['message']['type'])=='error' ? true :false ;
?>

             
           

              <div class='container container-seller-details'> 
              
              <?php 
             
              if($error):?>

              <div class="error-message col-md-12">  
                <?php $this->load->view($show_error_page,$data);?> 
              </div>
              <?php endif;?>
              <?php if(!$error): ?>

              <div class="row row-details">
                    
                    <div class="col-md-8 detail_info pull-left">
                   
                      <div class="media">

                            <a class="media-left media-top" href="#" style="padding-bottom: 9px">
                              <img class='pull-left user-small-image' src="<?php echo base_url($profile_image);?>" height='150' alt="...">
                            </a>


                           <div class="media-body">
                              <div class='bodys'>
                             <h3 class="media-heading"><?php echo ucfirst($profile->fname) .' ' .ucfirst($profile->lname) ;?> <small>| &nbsp;<i class='glyphicon glyphicon-thumbs-up' style='color:#2676af;'></i>&nbsp;<span class='likes'>Likes <span class='likes_count'>( 143 )</span></span></small></h3>
                                 <p><i class='glyphicon glyphicon-briefcase'></i>
                                 <span class='jobtitle'><?php echo trim(ucfirst($profile->job_title));?>r</span> | 
                                 <span class='companyname'><?php echo trim(ucfirst($profile->company_name));?></span>
                                 </p>
                                 <p class="located">Located In :&nbsp;<strong><span style='color:#5F5757;'><?php echo $profile->state ; ?></span></strong> ,
                                 <span class='location' style='color:#5F5757;'><?php echo $profile->city ; ?></span> | 
                                 <span class='country'><i class='glyphicon glyphicon-map-marker'></i>United States</span>
                                 </p> 

                              <div class="col-md rating_chat" style="padding-top:6%;">
                               
                                <p>  <span class="rating">
                                           <i class='glyphicon glyphicon-star'></i>
                                           <i class='glyphicon glyphicon-star'></i>
                                           <i class='glyphicon glyphicon-star'></i>
                                           <i class='glyphicon glyphicon-star-empty'></i>
                                           <i class='glyphicon glyphicon-star-empty'></i>
                                  </span>                     
                                         
                                  <a href="#" class="btn btn-default btn-rate"><i class='glyphicon glyphicon-star'></i>Rate</a>
                                   <a href="#" class="btn btn-default btn-start-chat "><i class='glyphicon glyphicon-comment'></i>Start Chat</a>
                                  </p>       
                                   <div class="memeber_month">
                                       <p>
                                         <span class='memeber'>Member Since |</span>  
                                         <span class="month"><?php echo date_format(date_create($profile->created_date),'F Y');?></span>

                                       </p>
                                   </div>
                                 
                                   

                             </div>

                             </div>
                           </div>

                        </div>



                    </div>



                      <div class="col-md-4 buttons ">
                          <div class="form-inline pull-right">
                           <div class="form-groups">
                             <a href="#" class="btn btn-default btn-sm"><i class='glyphicon glyphicon-user'></i>Send Friend Request</a>
                             <a href="#" class="btn btn-default btn-sm"><i class='glyphicon glyphicon-envelope'></i>Send a Message</a>
                          
                           </div>
                            </div>
                           <a href="#" class="btn btn-default btn-chat-status btn-sm pull-right"><i class='glyphicon glyphicon-record' style='color:#69DA32;'></i>This user is online</a>
                    </div>

              </div> <!--end of row -->

                        <div class="row row-under-container" >
                          
                           <div class="col-md-1">Web | <span class='webaddres'><a href='<?php echo $profile->website;?>'><?php echo $profile->website;?></a> </span>  </div>
                            <div class="col-md-2"><a href="#listing" aria-controls="listing" role="tab" data-toggle="tab" class="active"><span class='tab-links' style='border-bottom: 2px solid #428bca;'>5 Listings</a></span>  </div>
                            <div class="col-md-2"><a href="#store" aria-controls="store" role="tab" data-toggle="tab"><span class='tab-links' style='border-bottom: 2px solid #428bca;'>2 Store</a></span></div>
                            <div class="col-md-2"><a href="#likes" aria-controls="likes" role="tab" data-toggle="tab"><span class='tab-links' style='border-bottom: 2px solid #428bca;'>10 Likes</a></span></div>
                              <div class="col-md-2"><a href="#freinds" aria-controls="freinds" role="tab" data-toggle="tab"><span class='tab-links' style='border-bottom: 2px solid #428bca;'>70 Friends</a></span></div>
                               <div class="col-md-2"><a href="#photos" aria-controls="photos" role="tab" data-toggle="tab"><span class='tab-links' style='border-bottom: 2px solid #428bca;'>7 Photos</a></span>  </div>
                               <div class="col-md-2"><a href="#videos" aria-controls="videos" role="tab" data-toggle="tab"><span class='tab-links' style='border-bottom: 2px solid #428bca;'>15 Videos</a></span> </div>

                        </div>

                         </div>

              <div class="container container-listing">
               <!-- Tab panes -->
               
                <div class="tab-content">

                  <div role="tabpanel" class="tab-pane active" id="listing">

                                <div class="product_lsiting">
                                  <h4> Showing  (8) Listing </h4>

                                  <hr class="hr_border">

                                    <?php $this->load->view($product_listing); ?>

                                  <div class="col-md-12 pagination_section">
                                              <hr class="hr_border_bottom" style="margin-top:0px;">
                                              <div class="pull-right">
                                                      <!--<?php//$this->load->view($paginate_page,); ?>-->
                                              </div>    
                                      </div>
                                          
                                  </div>


                  </div>
                  <div role="tabpanel" class="tab-pane" id="store">
                         <div class="product_lsiting">
                                
                               
                                <h4> Showing  (1) Listing </h4>

                                <hr class="hr_border">
                               <?php $this->load->view($store_listing_tab); ?></h3>
                            
                                      
                        </div>
                  </div>

                   <div role="tabpanel" class="tab-pane" id="likes">Likes coming soon!</div>
                  <div role="tabpanel" class="tab-pane" id="freinds">Friends coming soon!</div>
                  <div role="tabpanel" class="tab-pane" id="photos">Photos coming soon!</div>
                    <div role="tabpanel" class="tab-pane" id="videos">Videos coming soon!</div>
                </div>

                
                 

              </div>  <!--end of listing contrainmer-->
               <?php endif;?>
                  
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
<script src="<?php echo base_url()."assets/plugins/bootstrap/js/bootstrap.min.js";?>"></script> 
<script src="<?php echo base_url()."assets/js/subscribe_ajax.js";?>"></script>
<script type="text/javascript">
    /***
     * Created by Daniel Adenew
     * Submit email subscription using ajax
     * Send email address
     * Send controller
     * Recive response
     */
       var url =  "<?php echo site_url('welcome/subscribe');?>";
       subscribe_using_ajax(url);
  
</script>
</body>
</html>
