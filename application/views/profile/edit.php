<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to MadebyUs4u.com | Edit Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href=<?php echo base_url()."assets/plugins/bootstrap/css/bootstrap.min.css";?> rel="stylesheet">
    <link href=<?php echo base_url()."assets/css/common.css";?> rel="stylesheet">
    <link href=<?php echo base_url()."assets/css/signup.css";?> rel="stylesheet">

</head>

<body>

<?php $this->load->view($notification_bar); ?>

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
            <?php $logged_in = (bool) $this->session->userdata('logged_in'); ?>
            <?php if($logged_in===TRUE): ?>
            <a href="<?php echo base_url('users/logout');?>">Logout</a>
            <?php else: ?>
                <a href="<?php echo base_url('users/login');?>">Login</a>
            <?php  endif ?>
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

.fileUpload {
    position: relative;
    overflow: hidden;
}
#uploadFile {
    margin-left: 20px;
    margin-top: -50px;
}
.fileUpload{
      margin-top: -50px;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}

.fileUpload .btn .btn-primary{
color: #fff;
background-color: #060B0F;
border-color: #0F0F0F;
font-weight: 400;

}
.fileUpload {
    margin-left: 10px;
}
.form-inline hr {
margin-bottom: 10px;
margin-top: 13px;
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
                <?php if (isset($this->message)): ?>
                    <?php if ($this->message['type'] == 'error'):?>
                        <!--display errors-->
                        <div class="alert alert-danger" style="font-size: 10px;" >
                            <a href="#" class="close" data-dismiss="alert">×</a>
                            <strong>Error!</strong> <?php echo $this->message['message'];?>.
                        </div>
                        <!-- <div class="errorMessage"></div> -->
                    <?php elseif ($this->message['type'] == 'info'):?>
                        <!--display errors-->
                        <div class="alert alert-info" >
                            <a href="#" class="close" data-dismiss="alert">×</a>
                            <strong>Info!</strong> <?php echo $this->message['message'];?>.
                        </div>
                    <?php elseif ($this->message['type'] == 'success'): ?>
                        <div class="alert alert-success" role='alert'>
                            <a href="#" class="close" data-dismiss="alert">×</a>
                            <strong>Success!</strong> <?php echo $this->message['message'];?>.
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
               <h4>Profile Photo </h4>

                <?php
                $attributes = array(
                    'class'=>'form-inline',
                    'id'=>'profile_edit',
                );

                echo form_open_multipart('/profile/save_profile',$attributes);

                ?>

                <img id="preview" height="100" width="100"  src="<?= base_url($profile_image);?>">

                 <div class="form-group">

                     <input type="text" id='file_path' name="file_path" class='form-control' placeholder="No file selected" disabled="disabled"
                            style="margin-top: -47px;margin-left: 9px;" />

                      <div class="fileUpload btn btn-primary">
                        <span>Choose File</span>
                        <input id="imgfile" name="imgfile" type="file" class="upload" accept="image/*" />
                    </div>
                </div>
                  
               <hr>

                <h4>Change Password </h4>

               
                 <div class="form-group" style="margin-left:20px;">
                 <label for="exampleInputEmail1">New Password</label>
                 <input type="password" name="password" class="form-control" required="true">
                </div>
            
               
                  <div class="form-group" style="margin-top:10px;">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password"  id="confirm_password" name="confirm_password" class="form-control" required="true">
                  </div>
      

                <hr>

                <h4>Address Information </h4>
                <div class="address" style="padding-bottom:50px;">
                        <div class="col-sm-4">
                <label class="col-sm-2 control-label">City</label>
              <input type="text" name="city" class="form-control input-sm" id="city" value="<?php echo $profile->city ;?>">

                        </div>

                         <div class="col-sm-4">
                <label class="col-sm-2 control-label">State</label>
                <?= form_dropdown('state', array_merge(array(''=>'Select State'), $states) ,'','class="form-control input-sm"  tabindex="7"' ) ;?>

                        </div>
                         <div class="col-sm-4">
                <label class="col-sm-2 control-label">Zip</label>
                <input type="text" name="zip" class="form-control input-sm" id="zip" value="<?php echo $profile->zipcode ;?>">

                        </div>
                </div>
                 <hr>

                 <h4>Job Information </h4>
                <div class="jobinfo">
                      <div class="form-group">
                        <label class="sr-only">Job Title</label>
                        <p class="">Job Title</p>
                      </div>
                      <div class="form-group">
                        <label for="job_title" class="sr-only">Job Title</label>
                        <input type="text" name="job_title" class="form-control input-sm" id="job_title" value="<?php echo $profile->job_title ;?>">
                      </div>
                    &nbsp;
                       <div class="form-group">
                        <label class="sr-only">CompanyName</label>
                        <p class="">Company Name</p>
                      </div>
                      <div class="form-group">
                        <label for="company_name" class="sr-only">Company Name</label>
                        <input type="text" name="company_name" class="form-control input-sm" id="company_name" value="<?php echo $profile->company_name ;?>">
                      </div>
            </div>
            <br/>
                 <button class="btn btn-primary btn-default pull-left">SAVE</button>
                <a href="<?php echo base_url('payment/payment');?>" class="btn btn-default" style="margin-left:5px;">SKIP</a>
                <?php  echo form_open_multipart('profile/save_profile',$attributes); ?>

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
<script src="<?php echo base_url()."assets/plugins/jquery/jquery.min.js";?>"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="<?php echo base_url()."assets/plugins/bootstrap/js/bootstrap.min.js";?>"></script> 
<script src="<?php echo base_url()."assets/js/subscribe_ajax.js";?>"></script>
<script type="text/javascript">
 

       /*prepare profile image to be previewd before actual upload 
       /*this will be called on change even of the file / upload component
        **/
     $( "#imgfile" ).change(function(event) {
        var output = document.getElementById('preview');
        output.src = URL.createObjectURL(event.target.files[0]);
        $( "#file_path").val('file selected');
      });

       var url =  "<?php echo site_url('welcome/subscribe');?>";
       subscribe_using_ajax(url);  

</script>
</body>
</html>
