<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Scaffolding · Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href=<?php echo base_url()."assets/plugins/bootstrap/css/bootstrap.min.css";?> rel="stylesheet">
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
            <strong><a href="#">Bid</a></strong>
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


    $this->load->view($footer_privacy);
    
    ?>

</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
