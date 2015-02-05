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

<div class='container container-seller-details'> 

<div class="row row-details">
      
      <div class="col-md-10 detail_info pull-left">
     
        <div class="media">

              <a class="media-left media-top" href="#" style="padding-bottom: 9px">
                  <img class='pull-left user-small-image' src="<?php echo base_url()."assets/images/products/user.png"?>" height='180' alt="...">
              </a>



             <div class="media-body">
 <div class='bodys'>

               <h3 class="media-heading">Fashion Unique <small>| &nbsp;<i class='glyphicon glyphicon-thumbs-up' style='color:#2676af;'></i>&nbsp;<span class='likes'>Likes <span class='likes_count'>( 143 )</span></span></small></h3>
                   <p><i class='glyphicon glyphicon-briefcase'></i>
                   <span class='jobtitle'>Creative Director</span> | 
                   <span class='companyname'>Fashion Unique Apprell,LLC</span>
                   </p>
                   <p class="located"><span>Located In:</span>
                   <span class='location'>Las Vegas ,NV</span> | 
                   <span class='country'><i class='glyphicon glyphicon-map-marker'></i>United States</span>
                   </p> 

                <div class="" style="">
                 <div class="bio">
                  <p> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod teincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniat, 
                quisexercitation ullamco laboris nisi ut aliquip ex ea commodo."Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod teincidid
                 
                 </div>
                       
                    
                   
                     

               </div>

               </div>
             </div>

          </div>



      </div>



        <div class="col-md-2 buttons ">
            <div class="form-inline pull-right">
             <div class="form-groups">

               <a href="#" class="btn btn-default btn-sm"><i class='glyphicon glyphicon-bullhorn'></i>Refer a Friend Today</a>
            
             </div>
              </div>

      </div>



</div> <!--end of row -->

          <div class="row row-under-container" >
            
             <div class="col-md-1"><i class='glyphicon glyphicon-pencil'></i> <span class='webaddres'>Edit Profile  </span>  </div>
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
                                        <?php $this->load->view($paginate_page); ?>
                                </div>    
                        </div>
                            
                    </div>


    </div>
    <div role="tabpanel" class="tab-pane" id="store">Store coming soon!</div>
     <div role="tabpanel" class="tab-pane" id="likes">Likes coming soon!</div>
    <div role="tabpanel" class="tab-pane" id="freinds">Friends coming soon!</div>
    <div role="tabpanel" class="tab-pane" id="photos">Photos coming soon!</div>
      <div role="tabpanel" class="tab-pane" id="videos">Videos coming soon!</div>
  </div>
   

</div>  <!--end of listing contrainmer-->
    
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
