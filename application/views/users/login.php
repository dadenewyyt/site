<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to MadebyUs4u.com | Login</title>
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
            <b>Hi</b> <a href="<?php echo base_url('users/login');?>">Sign In</a> or 
            <a href="<?php echo base_url('signup');?>">Register</a>
        </div>
        <div class="col-md-1 col-left-border">
            <strong><a href="<?php echo base_url('sell');?>">Sell</a></strong>
        </div>
        <div class="col-md-1 col-left-border">
            <strong><a href="<?php echo base_url('buy');?>">Buy</a></strong>
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


<?php $this->load->view($header_logo_white); ?>

</div>

</header>

<section>
<style type="text/css">
header {
    border-bottom: 1px solid #f0f0f0;
}
    .col-signin {
       
       
        border:1px solid #f2f2f2;
         border-top:8px solid #146098;
         border-radius: 4px;
         padding-bottom: 20px;

    }
    .col-signup {
       
         border:1px solid #f2f2f2;
         border-top:8px solid #146098;
         border-radius: 4px;


    }
    .col-md-master .col-md-4 {
        margin-right:20px;
    }
  .col-signin , .col-signup {
        background-color: white;
     }
   

</style>

<div class="row" style="margin-top:50px;">
    <div class="col-md-12 col-md-offset-2 col-md-master" style="padding-bottom:50px;">
        <div class="col-md-4 col-signin">
          
            <?php $this->load->view($signin_form); ?>
        </div>
        <div class="col-md-4 col-signup">
            <?php $this->load->view($new_to_madeby); ?>
         </div>

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
