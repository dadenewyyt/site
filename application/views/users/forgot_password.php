<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to MadebyUs4u.com | Forgot Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href=<?php echo base_url()."assets/plugins/bootstrap/css/bootstrap.min.css";?> rel="stylesheet">
    <link href=<?php echo base_url()."assets/css/common.css";?> rel="stylesheet">
    <link href=<?php echo base_url()."assets/css/login.css";?> rel="stylesheet">

</head>

<body>
<header>
    <?php $this->load->view($header_black_menu);?>
    <?php $this->load->view($header_logo_white_template); ?>



</header>

<section>

    <div class="row" style="margin-top:50px;">
        <div class="col-md-12 col-md-offset-2 col-md-master" style="padding-bottom:50px;">
            <div class="col-md-6 col-signin">

                <h1><?php echo lang('forgot_password_heading');?></h1>
                <p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>

                <div id="infoMessage"><?php echo $this->load->view($show_error_page,$data);?></div>

                <?php
                $attributes = array('class' => 'form');
                echo form_open("users/forgot_password",$attributes);?>


                <div class="form-group col-md-10">
                    <label for="email"><?php echo sprintf(lang('forgot_password_email_label'), $identity_label);?></label>
                    <?php echo form_input($email);?>
                </div>
                <div class="form-group col-md-10">
                    <label for="email"><?php echo $captcha['image']; ?></label>
                </div>
                <div class="form-group col-md-10">
                    <label for="name">Captcha:</label>
                    <input id="captcha" name="captcha" type="text" class="form-control" />
                </div>
                <div class="form-group col-md-10">
                    <?php
                    $attributes = array('class' => 'btn btn-primary','type'=>'submit','value'=>lang('forgot_password_submit_btn'));
                    echo form_input($attributes);?>
                </div>



                <?php echo form_close();?>
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
