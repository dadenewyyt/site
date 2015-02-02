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
    <link href=<?php echo base_url()."assets/css/login.css";?> rel="stylesheet">

</head>

<body>
<header>
<?php $this->load->view($header_black_menu);?>
<?php $this->load->view($header_logo_white); ?>



</div>

</header>

<section>

<div class="row" style="margin-top:50px;">
    <div class="col-md-12 col-md-offset-2 col-md-master" style="padding-bottom:50px;">
        <div class="col-md-4 col-signin">

            <?php $this->load->view($signin_form,$data); ?>

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
