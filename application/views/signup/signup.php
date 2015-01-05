<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to MadebyUs4u.com | SignUp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href=<?php echo base_url()."assets/plugins/bootstrap/css/bootstrap.min.css";?> rel="stylesheet">
    <link href=<?php echo base_url()."assets/css/common.css";?> rel="stylesheet">
    <link href=<?php echo base_url()."assets/css/signup.css";?> rel="stylesheet">

</head>

<body>
<header>
<div class='row row1'>
    <div class="container">
        <div class="col-md-2 col-left-border">
            <b>Hi</b> <a href="#">Sign In</a> or <a href="<?php echo base_url('signup');?>">Register</a>
        </div>
        <div class="col-md-1 col-left-border">
            <strong><a href="#">Sell</a></strong>
        </div>
        <div class="col-md-1 col-left-border">
            <strong><a href="#">Buy</a></strong>
        </div>
        <div class="col-md-1 col-left-border">
          <strong><a href="<?php echo base_url('bid');?>">Bid</a></strong>
        </div>
        <div class="col-md-2 col-md-offset-3 col-left-border" style="text-align:right;">
           My Account
       
        </div>
         
        <div class="col-md-1 col-left-border ">
          Checkout
        </div>
        <div class="col-md-1 col-left-border">
          <a href="#">Login</a>
        </div>
       
    </div>

</div>


<div class="row row2 paddings">

    <div class="container">
        <div class="col-md-2" >
                <div class='shopping_cart'>
                    <small style='padding-right:5px;font-size:1.3em;color:grey;'>Cart/ $ 0.00</small>
                    <span class="glyphicon glyphicon-shopping-cart" ></span> 
                    <sup class="badge">0</sup>
                </div>
        </div>

        <div class="col-md-4 col-md-offset-3 ">
              <a href="<?php echo base_url('welcome/home'); ?>"><img src="<?php echo base_url()."assets/images/logo_home.jpg";?>"/></a>
        </div>

        <div class="col-md-3 input_search" >
               <input type="text" class="form-control" placeholder='search'>
        </div>
           
    </div>
</div>

</div>

</header>

<section>

<div class="row row3">


    <?php $this->load->view($signup_form) ;?>
  
    <!--SELL TEXT-->

    <div class="col-md-4 image_left_conent" style="margin-left:2%;">
        <h1 style="color:white;">Shop, Sell, Bid Now!</h1> 
                <p>We connect buyers with independent creators, sellers and business owners 
        and businesses alike to find the very best in new, used, handmade, vintage 
        and resalable consumer goods that fall in the Terms of Use policy. We’re glad 
        you’re here. We’ll help you learn how to get started, how you’re protected, 
        and how to get help when you need it. </p>
    </div>

</div>

</section>

<footer class="footer">

    <?php 


    $this->load->view($footer_subscribe);
    $this->load->view($footer_privacy);
    
    ?>

</footer>

<!-- Bootstrap and Jquery and Other JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url()."assets\plugins\jquery\jquery.min.js";?>"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="<?php echo base_url()."assets\plugins\bootstrap\js\bootstrap.min.js";?>"></script> 
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
       var url =  "<?php echo site_url('welcome/subscribe');?>";
       subscribe_using_ajax(url);
    });

</script>
</body>
</html>
