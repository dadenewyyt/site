<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to MadeByUs4U.com | Home </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="MadeByUs4u>.com is a ecommerce platfrom for sell and buy using social netowrking feature and store setup.">
    <meta name="author" content="">
    <meta name="keyword" content="madebyus4u.com , sell and buy online , social networ , video upload ,store">
   <!--styles-->
    <link href=<?php echo base_url()."assets/plugins/bootstrap/css/bootstrap.min.css";?> rel="stylesheet">
   <link href=<?php echo base_url()."assets/css/responsive.css";?> rel="stylesheet">
        <link rel="shortcut icon" href=<?php echo base_url()."assets/ico/favicon.png";?>>

</head>
<style type="text/css">
  .large_body_image {
    background-image: url('assets/images/mbu4u.png');
    /*max-height: 455px;*/
    /*width: 100%;*/
    background-attachment: content;
    background-size: 100%;
    background-clip: body;
    background-repeat: no-repeat;
    overflow: hidden;
}
</style>
<body>

<div id="notification_bar">
    <span></span>
</div>

<div class="container-fluid">

 <header class='header row'>

    <div class='logo'>
        <img src="assets/images/logo.jpg"/>
        <div class='header_text' ><h4> The <b>New Way</b> to  <b>Shop</b> Online!</h4> </div>
   </div>

   </header>

<div class="large_body_image row">

        <div class='seachbox'>

            <div class='top_text'>
            <h1>Selling online <b>made Easy</b></h1>
            <h3>Join our mailing list & get notified upon our offical launch!</h3>
            </div>

               <div class="email_subscriber">
                 <?php $this->load->view($email_form); ?>
                </form>
            </div>

        </div>

  </div>
</div>

<div class="row row1">

    <div class="container">
         
         <!--<div class="col-md-12 padding-class"></div-->

             <div class="row">

                <div class="col-md-12 signup">

                   <h1>Sign up <span style="color:#186eaa;">today</span> for early access.</h1>
                   <h3>Setup your own personal store within a minutes.</h3>
          
               </div>
         </div>

     <div class="row">
          
              <div class="col-md-3 bottom_three_modules"> 

                <div class="image_header"><img src="assets/images/man_header_image.png"> </div>
                <h4> Build your profile </h4>
                
                <p style="text-align:center; display: flex;"> 
            Build your personal profile, including products ,stores, photos,videos and more! 
            Become freinds with your buyers and Live Chat with your customers directly.
            </p>

              </div>

 
            <div class="col-md-4 bottom_three_modules">

             <div class="image_header"><img src="assets/images/shop_header_image.png"> </div>
           
            <h4>Create your custome store</h4>

            <p  style="text-align:center; display: flex;">
            Upload and Sell! It's that easy,create your own custom store 
            on  MadeByUs4U.com.      Allowing user the ability to purchase from your profile. 
            </p>
       

    </div>
          <div class="col-md-5 bottom_three_image">
          <img src="assets/images/mbu4u_laptop_bottom.png">
          </div>

  </div>
  </div>

</div>

<div class="row row2" style="background-color: #f5f5f5;margin:0;overflow:hidden;">
  
  <div class="container">
  
   <div class="col-md-4 tablet_image_section">
          <img src="assets/images/tablet_image2.png">
    </div>  

  <div class="col-md-6">
    <div class="col-md-6 "> 

                <div class="image_header"><img src="assets/images/lock.png"> </div>
                <h4> Build your profile </h4>
                
                <p style="text-align:center; display: flex;padding-bottom: 25%;"> 
            Build your personal profile , including products,stores, photos,videos and more! 
            Become freinds with your buyers and Live Chat with your customers directly.
            </p>

              </div>


              <div class="col-md-6 "> 

                <div class="image_header"><img src="assets/images/payment.png"> </div>
                <h4> Build your profile </h4>
                
                <p style="text-align:center; display: flex;padding-bottom: 25%;"> 
            Build your personal profile,including products,stores, photos,videos and more! 
            Become freinds with your buyers and Live Chat with your customers directly.
            </p>

              </div>

            

               <!--<div class="col-md-6 padding-class"></div>-->
      <div class="clearfix"></div>

              <div class="col-md-6 "> 

                <div class="image_header"><img src="assets/images/heart.png"> </div>
                <h4> Build your profile </h4>
                
                <p style="text-align:center; display: flex;"> 
            Build your personal profile,including products,stores, photos,videos and more! 
            Become freinds with your buyers and Live Chat with your customers directly.
            </p>

              </div>
              <div class="col-md-6 "> 

                <div class="image_header"><img src="assets/images/rss.png"> </div>
                <h4> Build your profile </h4>
                
                <p style="text-align:center; display: flex;"> 
            Build your personal profile,including products,stores, photos,videos and more! 
            Become freinds with your buyers and Live Chat with your customers directly.
            </p>

              </div>
      </div>
 
  </div>



</div>
<footer class="footer">
  <div clas="row">
    <div class="container cont">
          <p>© 2014-2015 MadeByUs4U Inc.</p>
    </div>
  </div>
</footer>

<!-- Le javascript
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
    $(document).ready(function() {
       subscribe_using_ajax();
       
    });

</script>
</body>

</html>
