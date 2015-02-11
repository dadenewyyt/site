<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Scaffolding · Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href=<?php echo base_url()."assets/plugins/bootstrap/css/bootstrap.min.css";?> rel="stylesheet">

    <link href=<?php echo base_url()."assets/css/shop.css";?> rel="stylesheet">

</head>


 
<body>

<header>
<?php $this->load->view($header_black_menu);?>
<?php $this->load->view($header_white_logo);?>

</header>

<!-- Responsive design
================================================== -->
<section id="responsive" >
<div class="row row3"  >
<div class="container">
 <div class="col-md-3 col-md-offset-5" style="background-color:balck;"><img src="../assets/images/logo_home.jpg"/></div>
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
   <nav class="navbar navbar-default" role="navigation" style="min-height:40px;border-radius:0px;width:100%;   background-color:#2770a2;">
          <div class="container">
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
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Closing <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
                <li><a href="#">Footwear</a></li>
                <li><a href="#">Home Furnishing</a></li>
                <li><a href="#">Entertainment</a></li>
                <li><a href="#">Electronics</a></li>
                <li><a href="#">Arts & Crafts</a></li>
                <li><a href="#">Music</a></li>
                <li><a href="#">E Books</a></li>     
            
                
              </ul>
             
              
              
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
  </div>
<div class="container ">
  
  <div class="row">

    <div class="row">
        <div class="col-md-8 col-md-offset-4" style="border-bottom:1px dotted grey;padding-bottom:0px;">
           <div class="col-md-4">
           <h5>Showing ..</h5>
        </div>
        <div class="col-md-4 col-md-offset-1">
           <h5>Showing ..</h5>
        </div>
      </div>

  </div>

<div class="col-md-4">
  
     <div class="thumbnail rec">
      <span><small>MadeByUs4U</small><span class="caret"></span></span>
        <div class="thumbnail rec" style="background-color:#fafafa;">   
        </div>
      </div>
</div>

   <div class="custom_product_images">
   <div class="col-sm-2 col-md-3 ">

        <div class="thumbnail rec">
           <img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="../assets/images/products/ring.jpg" data-holder-rendered="true" style="height: 150px;display: block;">
           <div class="caption">
             <h4>Black and Red </h4>
          
             <p><span class='price'>$59.89</span><span class='buy_btn'><a href="#" class="btn btn-primary" role="button">Buy Now!</a></span></p>
             <span class='span_buy_it_now'><p><a href="#">BuyItNow!</a></p></span>
          </div>
           <hr>
                  <p><span class=''><i class='glyphicon glyphicon-user'><b style='padding-left:4px;color: #1f72ad;'>Danny man</b></span></i><span class=''><i class='glyphicon glyphicon-star'></i>
                  <i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star-empty'></i><i class='glyphicon glyphicon-star-empty'></i></span></span></p>
           
        </div>
      </div>
<div class="col-sm-2 col-md-3">

        <div class="thumbnail rec">
           <img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="../assets/images/products/ring.jpg" data-holder-rendered="true" style="height: 150px;display: block;">
           <div class="caption">
             <h4>Black and Red </h4>
          
             <p><span class='price'>$59.89</span><span class='buy_btn'><a href="#" class="btn btn-primary" role="button">Buy Now!</a></span></p>
             <span class='span_buy_it_now'><p><a href="#">BuyItNow!</a></p></span>
          </div>
           <hr>
                  <p><span class=''><i class='glyphicon glyphicon-user'><b style='padding-left:4px;color: #1f72ad;'>Danny man</b></span></i><span class=''><i class='glyphicon glyphicon-star'></i>
                  <i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star-empty'></i><i class='glyphicon glyphicon-star-empty'></i></span></span></p>
           
        </div>
      </div>
      <div class="col-sm-2 col-md-3">

         <div class="thumbnail rec">
           <img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="../assets/images/products/ring.jpg" data-holder-rendered="true" style="height: 150px;display: block;">
           <div class="caption">
             <h4>Black and Red </h4>
          
             <p><span class='price'>$59.89</span><span class='buy_btn'><a href="#" class="btn btn-primary" role="button">Buy Now!</a></span></p>
             <span class='span_buy_it_now'><p><a href="#">BuyItNow!</a></p></span>
          </div>
           <hr>
                  <p><span class=''><i class='glyphicon glyphicon-user'><b style='padding-left:4px;color: #1f72ad;'>Danny man</b></span></i><span class=''><i class='glyphicon glyphicon-star'></i>
                  <i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star-empty'></i><i class='glyphicon glyphicon-star-empty'></i></span></span></p>
           
        </div>
      </div>
      
  
 
 
      </div>
</div>
</div>

 </div>


</section>
<footer class="footer">
<?php $this->load->view($footer_page); ?>
</footer>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url()."assets/plugins/jquery/jquery.min.js";?>"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="<?php echo base_url()."assets/plugins/bootstrap/js/bootstrap.min.js";?>"></script> 
<script src="<?php echo base_url()."assets/js/subscribe_ajax.js";?>"></script>



</body>
</html>
