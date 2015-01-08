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


<div class="row row2 paddings" style="background-color:white;">

    <div class="container">
        <div class="col-md-2" >
                <div class='shopping_cart'>
                    <small style='padding-right:5px;font-size:1.3em;color:grey;'>Cart/ $ 0.00</small>
                    <span class="glyphicon glyphicon-shopping-cart" ></span> 
                    <sup class="badge">0</sup>
                </div>
        </div>

        <div class="col-md-4 col-md-offset-3 ">
              <a href="<?php echo base_url('welcome/home'); ?>"><img src="<?php echo base_url()."assets/images/logo_white.png";?>"/></a>
        </div>

        <div class="col-md-3 input_search" >
               <input type="text" class="form-control" placeholder='search'>
        </div>
           
    </div>
</div>

</div>

</header>

<section>
<style type="text/css">

    .container-content {
         padding-bottom: 40px;
   
    }
    .add-border {
        border:1px solid #e6e6e6;
        border-radius: 4px;
        padding: 8px;
    }

    .col-md-background-image {
        background-image: url('../../assets/images/users/editprofile.png');
        background-attachment: content;
        background-size: 100%;
        background-clip: body;
        background-repeat: no-repeat;
        min-height:500px;
        overflow: hidden;
        border-radius: 8px;
        border:1px solid #e4e4e4;
    }
    .get_noticed {
        padding-top: 15px;
        color: #226da0;
        font-weight: 500;
        text-transform: uppercase;
        border-bottom: 2px dotted #226da0;
        width: 70%;
        padding-bottom: 10px;
    }
   .get_noticed_message
   {
        color: #747474;
        text-align: justify;
        border-bottom: 2px dotted #226da0;
        width: 70%;
        padding-bottom: 10px;
        line-height: 25px;
   }
   .get_noticed_message_small {
     color: #a0a0a0;
    width: 70%;
    text-align: justify;
   }
</style>

    <div class="middle_naviagtion">
        <?php $this->load->view($navigation_top); ?>
    </div>

    <div class="container container-content">
     <div class="col-md-12 add-border">
            <div class="col-md-6 col-md-background-image">
                <h1 class='get_noticed'>Get more noticed!</h1>
               <h4 class='get_noticed_message'>You Instantly have a 40% higher chance <br/>
                                                of being noticed by uploading your <br/>
                                                profile photo today! .
                </h4>
                <h5 class="get_noticed_message_small">By having a photo, you become more available visably 
                        to existing users on the platform. Show your personality 
                        with MBU4U members today  & upload a picture.</h5>
            </div>

            <div class="col-md-6" style="color:#999999;">
               <h3>Profile Photo </h3>
               <form>
               <div class='form-group'>
                   <img src='' height="80" width="80" ></img>
         
                   <input type='file'  value="Choose File">
                  
               </div>
               <hr>

                <h3>Change Password </h3>

                <hr>

                 <h3>Job Information </h3>
                 <button class="btn btn-lg btn-default pull-right">SAVE</button>
  </form>
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
