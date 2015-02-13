<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to MadeByUs4U.con | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href=<?php echo base_url()."assets/plugins/bootstrap/css/bootstrap.min.css";?> rel="stylesheet">
    <link href=<?php echo base_url()."assets/css/home.css";?> rel="stylesheet">

</head>

<body>

<header>

<div class='row row1'>
    <div class="container">
    <div class="col-md-2 col-left-border">
       <b>Hi</b> <a href="<?php echo base_url('users/login');?>">Sign In</a> or <a href="<?php echo base_url('signup');?>"/>Register</a>
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
     <div class="col-md-3 col-md-offset-3 search-box">
         <div class="input-group">
          <input type="text" class="form-control input-sm" style="height:28px;" placeholder = "search . . .">
          <span class="input-group-btn">
            <button class="btn btn-default btn-xs" type="button">search</button>
          </span>
        </div><!-- /input-group -->
    
    </div>
     <div class="col-md-1 col-left-border col-md-11">
      <span class=" glyphicon glyphicon-bell" aria-hidden="true"></span>
      </div>
      <div class="col-md-1 col-left-border col-md-11 ">
         <span class=" glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>

       </div>
    
        </div>
    </div>
</div>
</header>
<style type="text/css">

</style>
<!-- Responsive design
================================================== -->
<section id="responsive" >
<div class="container container2">

<div class="row row2"  >
 <div class="col-md-3 col-md-offset-5" style="background-color:balck;">
         <a href="<?php echo base_url('welcome/home'); ?>">
         <img src="<?php echo base_url()."assets/images/logo_home.jpg";?>"/></a>
 </div>

 <div class="col-md-2 col-md-offset-1 col-md-offset-1-1" style="margin-top: 1%;">


              <?= form_dropdown('catagories', array_merge(array(''=>'All  Catagories'), $catagories_all) ,'','class="form-control"  tabindex="7"' ) ;?>
          </div>
  <div class="col-sm-1" style="margin-top: 1%;">  <input type='button' class="btn btn-primary form-control" value="search"> </div>

  </div> 

  <div class="row">

          <home class="navbar navbar-default" role="navigation" style="min-height:40px;">
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
         <div class="container container4" id='header_image'>
                  
            <div class=" row row3-background">
                      <!-- /.this the large header image -->
                  </div>
              </div>

         <div class="container">
                          <div class="row row4">

                            <h3> Welcome To MadeByUs4U! The best way to shop/bid online and communicate seller-to-buyer.</h3>
                            
                             <hr>
                          </div>
                </div>
  </div>
<div class="container">
    <div class="row row5">

         <div class="col-md-4 module_images_upload col-sm-4 col-xs-4 module_border_style">

                <h4>Upload your product</h4>
                <p>You upload your product we do the rest while you make 90% of the sale price</p>
                <button class="btn btn-default" >EARN CASH</button>
          
     
         </div>

          <div class="col-md-4 col-md-offset-1 col-sm-4 col-xs-4 module_images_newarrival img-responsive module_border_style">

              <a href="<?php echo base_url('product/detail/') ;?>" class="btn btn-primary">NEW ARRIVALS</a>
         
          </div>

         <div class="col-md-4 col-sm-4 col-xs-4 col-md-offset-1 module_images_meet_people img-responsive module_border_style" > 

                <h4>MEET NEW MEMBERS DAILY</h4>
                <a href="<?php echo base_url('sell') ;?>" class="btn btn-primary browse-btn">BROWSE</a>
         </div>
    
     </div>

    <div class="row row6">

            <div class="col-md-6 col-md-offset-3" >
            <div class="content-bottom">
                 <h2> Our Latest Arrivals </h2>
               <p style="color:#8B8A8A"> Check our latest offers that just arrived to the store. <span>New Nonummy</span> for you to wear</p>  

            </div>
           
            </div> 
    </div>

<div class="row row7 product_navigation">

    <div class="row">
        <div class='pull-right'>
            <span class='glyphicon glyphicon-chevron-left' style='background-color:#cccccc;'></span>
            <span class='glyphicon glyphicon-chevron-right' style='background-color:#cccccc;'></span>
        </div>
     </div>

</div>

    <?php $this->load->view($product_listing); ?>

  </div>

  </div>



</section>
<footer class="footer">
<?php $this->load->view($footer_page); ?>
</footer>
<!-- Bootstrap and Jquery and Other JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url()."assets\plugins\jquery\jquery.min.js";?>"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="<?php echo base_url()."assets\plugins\bootstrap\js\bootstrap.min.js";?>"></script> 

</body>
</html>
