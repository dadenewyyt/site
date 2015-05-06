<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to MadebyUs4u.com | Reset Your Password</title>
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

                <h1><?php echo lang('reset_password_heading');?></h1>

                <div id="infoMessage"><?php echo $message;?></div>



                <?php
                $attributes = array('class' => 'form');
                echo form_open('users/reset_password/' . $code,$attributes) ;?>

                <div class="form-group col-md-10">
                    <label for="new_password"><?php echo sprintf(lang('reset_password_new_password_label'), $min_password_length);?></label> <br />
                    <?php echo form_input($new_password);?>
                </div>
                <div class="form-group col-md-10">
                    <?php echo lang('reset_password_new_password_confirm_label', 'new_password_confirm');?> <br />
                    <?php echo form_input($new_password_confirm);?>
                </div>

                <div class="form-group col-md-10">
                <?php echo form_input($user_id);?>
                </div>
                <?php echo form_hidden($csrf); ?>
                <div class="form-group col-md-10">
                    <?php
                    $attributes = array('class' => 'btn btn-primary','type'=>'submit','value'=>lang('reset_password_submit_btn'));
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
