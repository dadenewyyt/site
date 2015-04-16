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
    <link href=<?php echo base_url()."assets/css/edit_profile.css";?> rel="stylesheet">

</head>

<body>
<?php 

$uname = $this->session->userdata('username');
$email = $this->session->userdata('email');

 ?>
<?php $this->load->view($notification_bar); ?>

<div class='header'>

<?php $this->load->view($header_black_menu);?>
<?php $this->load->view($header_logo_white); ?>

</div>

<section >

    <div class="middle_naviagtion">
        <?php $this->load->view($main_menu); ?>
    </div>

    <div class="container container-content">
     <div class="col-md-12 add-border" style="background-color: white;">
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
         <style class="text/css">

             .edit-profile .form-control {
                     background-color:#E4E7EA;;

             }
         </style>

            <div class="col-md-6 edit-profile" style="color:#999999;">
              <?php $this->load->view($show_error_page,$data);?>

              <h4 class="heading_color">Personal Information </h4> 
              <hr class="hr_below_heading">

                 <div class="form-group form-group-edit">
                  <label for="exampleInputEmail1">Full Name:</label>
                    <label class="profile_info_text">
                     <?php echo ucfirst(strtolower($profile->fname));?>
                    </label>
                     <label class="profile_info_text">
                     <?php echo ucfirst(strtolower($profile->lname));?>
                    </label><br/>
                                   
                  <label for="username">Username:</label>
                  <label class="profile_info_text"><?php echo $uname;?>
                  </label><br/>
                  <label for="location">Location:</label>
                  <label class="profile_info_text"> <?php echo $profile->city.' '.$profile->state .' ,'.$profile->zipcode;?></label>
                </div>

                <h4 class="heading_color">Profile Photo </h4>
                <hr class="hr_below_heading">

                <?php
                $attributes = array(
                    'class'=>'form-inline',
                    'id'=>'profile_edit',
                );

                echo form_open_multipart('/profile/save_profile',$attributes);

                ?>

                <img id="preview" height="60" width="60"  src="<?= base_url($profile_image);?>">

                 <div class="form-group">

                     <input type="text" id='file_path' name="file_path" class='form-control input-sm' placeholder="No file selected" disabled="disabled"
                            style="" />

                      <div class="fileUpload btn btn-primary">
                        <span>Choose File</span>
                        <input id="imgfile" name="imgfile" type="file" class="upload input-sm" accept="image/*" />
                    </div>
                </div>
                  
              

              <h4 class="heading_color">Bio Information </h4>
               <hr>
                <div class="form-group">
                  <label class="profile_info_text"> A Little About Myself</label>
                 <br/>
                  <textarea class="form-control input-sm" cols="70" rows="2" id="bioinfo" name='bioinfo'><?php echo trim($profile->bioinfo) ;?></textarea>
                </div>

                <h4 class="heading_color">Email Information </h4>

                <hr>
                <div class="form-group">
                 <label>Email Address:</label>
                 <label><?php echo $email; ?></label>
                </div>
                <br/>
                <div class="form-group">
                  <label class="profile_info_text"> Change Email Address</label>
                 <br/>
                  <input type='email' class="form-control input-sm"  id="new_email" name='new_email'></textarea>
                </div>

            <div class="form-group">
                  <label class="profile_info_text"> Confirm Email Address</label>
                 <br/>
                  <input type='email' class="form-control input-sm" id="confirm_email" name='confirm_email'></textarea>
                </div>                


                <h4 class="heading_color">Password Information </h4>
                <hr>
                <label>Password</label> <label>************</label><br/>

                 <div class="form-group">
                  <label class="profile_info_text">Change Password</label>
                 <br/>
                  <input type='password' class="form-control input-sm" name="password" id="password" required='true'>
                </div>

                <div class="form-group">
                  <label class="profile_info_text"> Confirm Password</label>
                 <br/>
                  <input type='password' class="form-control input-sm" id="confirm_password" name="confirm_password" required='true'>
                </div>  

                <!-- Job infromation-->
                 <h4 class="heading_color">Job Information </h4>
                <hr>
               

                 <div class="form-group">
                 <label class="sr-only">Job Title</label>
                  <label class="profile_info_text">Job Title</label>
                 <br/>
                  <input type="text" name="job_title" class="form-control input-sm" id="job_title" value="<?php echo $profile->job_title ;?>">
                </div>

                <div class="form-group">
                  <label class="sr-only">Company Information</label>
                  <label class="profile_info_text">Company Information</label>
                 <br/>
                   <input type="text" name="company_name" class="form-control input-sm" id="company_name" value="<?php echo $profile->company_name ;?>">
                </div> 
                 <div class="form-group">
                  <label class="sr-only">Website</label>
                  <label class="profile_info_text">Website Address</label>
                 <br/>
                   <input type="text" name="website" class="form-control input-sm" id="website" value="<?php echo  $profile->website ;?>">
                </div>

              

               <!--
                <h4 class="heading_color">Address Information </h4>

                <div class="address" style="padding-bottom:50px;">
                        
                        <div class="col-sm-4">
                          <label class="col-sm-2 control-label">City</label>
                           <input type="text" name="city" class="form-control input-sm" id="city" value="<?php echo $profile->city ;?>">
                        </div>

                         <div class="col-sm-4">
                <label class="col-sm-2 control-label">State</label>
                <?php
                $default = array(''=>'Select State') ;
              

                echo form_dropdown('state', $profile->state,array_merge($default,$states),'class="form-control input-sm"  tabindex="7"' ) 
                ;?>

                        </div>
                         <div class="col-sm-4">
                <label class="col-sm-2 control-label">Zip</label>
                <input type="text" name="zip" class="form-control input-sm" id="zip" value="<?php echo $profile->zipcode ;?>">

                        </div>
                </div>
                 <hr>

                <h4 class="heading_color">Job Information </h4>
               
                      <div class="form-group">
                        <label class="sr-only">Job Title</label>
                           <label class="profile_info_text"> Job Title</label>
                      </div>
                      <div class="form-group">
                        <label for="job_title" class="sr-only">Job Title</label>
                        <input type="text" name="job_title" class="form-control input-sm" id="job_title" value="<?php echo $profile->job_title ;?>">
                      </div>
                    &nbsp;
                       <div class="form-group">
                        <label class="sr-only">CompanyName</label>
                         <label class="profile_info_text"> Company Name</label>
                      </div>
                      <div class="form-group">
                        <label for="company_name" class="sr-only">Company Name</label>
                        <input type="text" name="company_name" class="form-control input-sm" id="company_name" value="<?php echo $profile->company_name ;?>">
                      </div>
            </div>
            <br/> -->
                <br/>
                 <button class="btn btn-primary btn-sm btn-default pull-right" style="padding: 3px 45px;margin-top: 8px;">SAVE</button>
                <!--<a href="<?php echo base_url('payment/payment');?>" class="btn btn-default" style="margin-left:5px;">SKIP</a>
               -->
                <?php  echo form_close(); ?>
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
