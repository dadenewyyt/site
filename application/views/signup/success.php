<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to MadebyUs4u.com | Registration Success</title>
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
       <b>Hi</b> <a href="#">Sign In</a> or <a href="<?php echo base_url('/signup/');?>">Register</a>
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

<!-- Responsive design
================================================== -->
<section id="responsive" >
<div class="container container2">

<div class="row row2"  >
 <div class="col-md-3 col-md-offset-5" style="background-color:balck;">  <a href="<?php echo base_url('welcome/home'); ?>"><img src="<?php echo base_url()."assets/images/logo_home.jpg";?>"/></a></div>
 <div class="col-md-2 col-md-offset-1 col-md-offset-1-1" style="margin-top: 1%;">
          <select class="form-control" size="width:100%;">
          <option>All Catagories</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          </select>
  </div>
  <div class="col-sm-1" style="margin-top: 1%;">  <input type='button' class="btn btn-primary form-control" value="search"> </div>

  </div> 

  <div class="row">

          <nav class="navbar navbar-default" role="navigation" style="min-height:40px;">
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
                <img alt="Brand" src="../assets/images/logo.jpg" height="0">
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
        </nav>

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
<script src=<?php base_url()."assets/js/holder.js";?>></script>
<script src="path/to/js/star-rating.min.js" type="text/javascript"></script>





</body>
</html>
