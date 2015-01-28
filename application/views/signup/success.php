<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to MadebyUs4u.com | Registration Successfull!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href=<?php echo base_url()."assets/plugins/bootstrap/css/bootstrap.min.css";?> rel="stylesheet">
    <link href=<?php echo base_url()."assets/css/home.css";?> rel="stylesheet">

</head>

<body>
<style type="text/css">
    .nav .navbar-nav li {
        padding-left: 0;
    }
</style>
<header>
         <?php $this->load->view($header_black_menu); ?>
         <?php $this->load->view($header_logo_white); ?>
</header>

<!-- Responsive design
================================================== -->
<section id="responsive" >
<div class="container container2">

 <div class="row">

          <div class="navbar navbar-default" role="navigation" style="min-height:40px;">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#madebyus4u-mobile-responsive-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <a class="navbar-brand" href="#">
            
              </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="madebyus4u-mobile-responsive-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="#">Closing </a></li>
                <li><a href="#">Footwear</a></li>
                <li><a href="#">Outdoors</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Entertainment</a></li>
                <li><a href="#">Technology</a></li>
                <li><a href="#">Arts & Crafts</a></li>
                <li><a href="#">Music</a></li>
                <li><a href="#">Home Goods</a></li>     
                <li><a href="#">Accessories</a></li>     
                
              </ul>
             
              
              
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </div>

         <div class="message_div" >
                  <?php 
                  		$this->load->view('include/'.$message_page,$data);
                  ?>
         </div>

   
  

  
             
</div>  



</section>
<footer class="footer">
<?php $this->load->view($footer_page); ?>
</footer>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
