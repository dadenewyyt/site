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

</head>

<style type="text/css">

body {
    background-color: #fafafa;
    overflow-x: hidden;
}
.row1 {
         background-color: #ffffff;
         margin: 0px;
       
         border-bottom: 1px solid #d9d9d9;

         line-height: 2.428571;
 }

.col-md-offset-1-1 {
    margin-left: 7.333333%;
}
 
.search_box .input-group .form-control input {
        height: 20px;     
}
.btn {
     padding: 4px 12px;
}
.form-control {
   /* margin-top: 4px;
    max-height: 30px;*/
    display: inline;
    line-height: 14px;
    vertical-align: middle;
}

.select_box {
    position:  relative;
}
.header_element {
    display:inline;
}
.right_elements {
    display:inline;
    margin-left: 18%;
}

.row2 {
    vertical-align: middle;
    margin-top: 10px;
}
.row2 {
    margin-right: 0px;
    margin-left: 0px;
}
.row4 h3 {
     border-bottom: 1px solid #fafafa;
     margin-top:2%;
}
.row4 hr {
margin-top: 0px;
margin-bottom:2%;
}

.row5 .col-md-4 {
    width: 31%;
}
.row5 .col-md-offset-1 {
    margin-left: 3.3333%
}

.navbar-default {
    background-color: #ffffff;
    border-color: #e7e7e7;
}
.navbar {
    height:37px;
    margin-bottom: 20px;
   margin-top: 20px;
}
.active {
    height: 40px;
}
.navbar-nav li{
     margin-top: -5px;
    vertical-align:middle; 
}
.row3-background {
    background-image: url('../assets/images/home_large_image.jpg');
    /*max-height: 455px;*/
    /*width: 100%;*/
    height: 421px;
    background-attachment: content;
    background-size: 100%;
    background-clip: body;
    background-repeat: no-repeat;
    overflow: hidden;
}

.search-box .input-group {
    vertical-align: middle;
    margin-top: 4px;
}

 .col-left-border {
  border-right: 1px solid #d9d9d9;
}

 .col-md-11 {
   width: 3.333%;
}

.module_images_upload {
   background-color: #2770a2;
   color: #ffffff;
   height:236px; 
   text-align: center;
    
}
.module_images_upload p {
    padding-top:4%;
    border-top: 2px dotted #E3E5E8;
    border-color: #E3E5E8;
    padding-bottom:4%;
}

.module_border_style h4 {
    margin-top: 12%;
    text-transform: uppercase;
    padding-bottom: 4%;
}
.module_border_style {
border-top: 6px solid grey;
/*
border-left: 1px solid #e2e2e2;
border-right: 1px solid #e2e2e2;
border-bottom: 1px solid #e2e2e2;
*/
}

.module_images_newarrival {
     background-image: url('../assets/images/home_new_arrival_image1.jpg');
    /*max-height: 455px;*/
    /*width: 100%;*/
    height: auto;
    background-attachment: content;
    background-size: 100%;
    background-clip: body;
    background-repeat: no-repeat;
    text-align: center;
    height:236px;

}
.module_images_newarrival .btn {
    margin-top: 48%;
}
.module_images_meet_people {
     background-image: url('../assets/images/home_people_image1.jpg');
    /*max-height: 455px;*/
    /*width: 100%;*/
    text-align: center;
    background-attachment: content;
    background-size: 100%;
    background-clip: body;
    background-repeat: no-repeat;
    height: 236px;
}

.module_images_meet_people h4 {
    margin-top: 12%;
    text-transform: uppercase;
    padding-bottom: 4%;
}

.pull-right {
    margin-right: 18px;
}
.content-bottom {
padding-top:4%;
text-align:center;padding-bottom:8%; 
}
.content-bottom h2 {
    border-bottom:2px dotted #8B8A8A;
    padding-top:6%;
    padding-bottom:6%;
}
.content-bottom span {
    color:#6a9fd2;
}
@media(max-width:450px){
.row3-background {height: 180px; }
.row .row4 h3{ font-size: 16px;  }
.row5 .col-md-4 {width: 100%;}
.content-bottom {padding-top:1%;text-align:center;padding-bottom:1%;}
.module_images_upload{z-index:-1;}
.module_images_newarrival{z-index:-1;}
footer_menu {padding-right: }

}

.buy_btn {float: right;}
.price { padding-top: 1%;margin-left: 3%;font-size: 17px;font-weight: 600;}.
.caption p {
    padding: 1%;
}

.navbar-nav li {
padding-left: 1%;
}

.seller_name {
    margin-left: 4%;
}
.rating_class {
    float: right;
    margin-right: 15px;
}

.footer_menufooter_menu a {
    display: block;
    width: 60px;
}
    .footer_menu ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
.footer_menu li {
    display: inline;
    position: relative;
    padding-right: 3%;
    font-weight: 400;
}
.footer_menu li a {
   text-decoration: none;
   color: #ffffff;
   font-size: 12px;
}

@media(max-width:764px){
    .row5 .col-md-4 {width: 100%;}
    .content-bottom {padding-top:1%;text-align:center;padding-bottom:1%;}
    .module_images_newarrival{height: auto;padding-bottom: 25px;}
    .module_images_upload {height: auto;text-align: center;padding-bottom: 22px;}
    .row5 .col-md-offset-1 { margin-left: 0%; }
    .span1{padding:0 4px;}
    .navbar-nav li{margin-top: 0px;  background-color: #fafafa;}
    .form-control {width: 100%;}
    .col-md-offset-1-1{margin-left: 0px;}
    .col-md-11 {width: auto;}
    .right_elements {margin-left: 0px;}
    .col-left-border {border:none;border-bottom: 1px solid #d9d9d9;}
     .row3-background {height: 180px; }
     .row .row4 h3{ font-size: 17px;  }
     .module_images_upload{z-index:-1;}
    .module_images_newarrival{z-index:-1;}
    .footer_menu {padding-right: 0;}
    }

   @media(max-width:380px){
     .row3-background {height: 102px; }
   .span1{padding:0 4px;}
   .col-md-11 {width: auto;}
    .form-control{display: block;}
   .navbar-nav li{margin-top: 0px;  background-color: #fafafa;}
    .form-control {width: 100%;}
    .col-md-offset-1-1{margin-left: 0px;}
    .right_elements {margin-left: 0px;}
    .col-left-border {border:none;border-bottom: 1px solid #d9d9d9;}
     .row3-background {height: 102px; }
     .module_images_upload{z-index:-1;}
   .module_images_newarrival{z-index:-1;}
   .footer_menu {padding-right: 0;}
    }


   

</style>
<body>


<header>

<div class='row row1'>
    <div class="container">
    <div class="col-md-2 col-left-border">
       <b>Hi</b> <a href="#">Sign In</a> or <a href="#">Register</a>
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

    <div class="row row5">

         <div class="col-md-4 module_images_upload col-sm-4 col-xs-4 module_border_style">

                <h4>Upload your product</h4>
                <p>You upload your product we do the rest while you make 90% of the sale price</p>
                <button class="btn btn-default" >EARN CASH</button>
          
     
         </div>

          <div class="col-md-4 col-md-offset-1 col-sm-4 col-xs-4 module_images_newarrival img-responsive module_border_style">
             
               <button class="btn btn-primary">NEW ARRIVALS</button>
         
          </div>

         <div class="col-md-4 col-sm-4 col-xs-4 col-md-offset-1 module_images_meet_people img-responsive module_border_style" > 

                <h4>MEET NEW MEMBERS DAILY</h4>

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

<div class="row row7">

    <div class="row">
        <div class='pull-right'>
            <span class='glyphicon glyphicon-chevron-left' style='background-color:#cccccc;'></span>
            <span class='glyphicon glyphicon-chevron-right' style='background-color:#cccccc;'></span>
            </div>
     </div>

<div class='row'>

  <div class="col-sm-3 col-md-3">
        <div class="thumbnail">
        
        <!-- <img data-src="holder.js/200x300">
         <img src="../assets/images/products/ring.jpg" width="200" height="300">
         -->
            <img data-src="holder.js/100%x200" alt="100%x200"  class="img-thumbnail img-responsive" src="../assets/images/products/dimond.jpg" data-holder-rendered="true" style="height: 200px; display: block;">
     
                  <div class="caption">
                        <h4>Set of Wedding Ring</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><span class='price'>$59.89</span><span class='buy_btn'><a href="#" class="btn btn-primary" role="button">Buy Now!</a></span></p>
                  </div>
                  <hr>
                  <p><span class='seller_name'><i class='glyphicon glyphicon-user'><b style='padding-left:4px;color: #1f72ad;'>Seller Name</b></span></i><span class='rating_class'><i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star-empty'></i><i class='glyphicon glyphicon-star-empty'></i></span></span></p>


        </div>
    </div>

    <div class="col-sm-3 col-md-3">
            <div class="thumbnail">
                <img data-src="holder.js/100%x200" alt="100%x200"  class="img-thumbnail img-responsive" src="../assets/images/products/tshirt.jpg" data-holder-rendered="true" style="height: 200px;display: block;">
                  <div class="caption">
                    <h4>Black and Red Plad Sleeve</h4>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><span class='price'>$59.89</span><span class='buy_btn'><a href="#" class="btn btn-primary" role="button">Buy Now!</a></span></p>
                  </div>
                   <hr>
                  <p><span class='seller_name'><i class='glyphicon glyphicon-user'><b style='padding-left:4px;color: #1f72ad;'>Seller Name</b></span></i><span class='rating_class'><i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star-empty'></i><i class='glyphicon glyphicon-star-empty'></i></span></span></p>
            </div>
      </div>

    <div class="col-sm-3 col-md-3">
        <div class="thumbnail">
        <img data-src="holder.js/100%x200" alt="100%x200"  class="img-thumbnail img-responsive" src="../assets/images/products/bag.jpg" data-holder-rendered="true" style="height: 200px;display: block;">
          <div class="caption">
            <h4>Black and Red Plad Sleeve</h4>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><span class='price'>$59.89</span><span class='buy_btn'><a href="#" class="btn btn-primary" role="button">Buy Now!</a></span></p>
          </div>
           <hr>
          <p><span class='seller_name'><i class='glyphicon glyphicon-user'><b style='padding-left:4px;color: #1f72ad;'>Seller Name</b></span></i><span class='rating_class'><i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star-empty'></i><i class='glyphicon glyphicon-star-empty'></i></span></span></p>
        </div>
      </div>

      <div class="col-sm-3 col-md-3">

        <div class="thumbnail">
           <img data-src="holder.js/100%x200" alt="100%x200"  class="img-thumbnail img-responsive" src="../assets/images/products/ring.jpg" data-holder-rendered="true" style="height: 200px;display: block;">
           <div class="caption">
           <h4>Set of Wedding Ring</h4>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><span class='price'>$59.89</span><span class='buy_btn'><a href="#" class="btn btn-primary" role="button">Buy Now!</a></span></p>
          </div>
           <hr>
                  <p><span class='seller_name'><i class='glyphicon glyphicon-user'><b style='padding-left:4px;color: #1f72ad;'>Seller Name</b></span></i><span class='rating_class'><i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star-empty'></i><i class='glyphicon glyphicon-star-empty'></i></span></span></p>
         
        </div>
      </div>

    </div>

  
  </div>
  <div class="row">

 <div class="col-sm-3 col-md-3">
        <div class="thumbnail">
        
        <!-- <img data-src="holder.js/200x300">
         <img src="../assets/images/products/ring.jpg" width="200" height="300">
         -->
            <img data-src="holder.js/100%x200" alt="100%x200"  class="img-thumbnail img-responsive" src="../assets/images/products/dimond.jpg" data-holder-rendered="true" style="height: 200px; display: block;">
     
                  <div class="caption">

                       <h4>Set of Wedding Ring</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><span class='price'>$59.89</span><span class='buy_btn'><a href="#" class="btn btn-primary" role="button">Buy Now!</a></span></p>
                  </div>
                  <hr>
                  <p><span class='seller_name'><i class='glyphicon glyphicon-user'><b style='padding-left:4px;color: #1f72ad;'>Seller Name</b></span></i><span class='rating_class'><i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star-empty'></i><i class='glyphicon glyphicon-star-empty'></i></span></span></p>
             
                 
        </div>
    </div>

    <div class="col-sm-3 col-md-3">
            <div class="thumbnail">
                <img data-src="holder.js/100%x200" alt="100%x200"  class="img-thumbnail img-responsive" src="../assets/images/products/tshirt.jpg" data-holder-rendered="true" style="height: 200px;display: block;">
                  <div class="caption">
                    <h4>Black and Red Plad Sleeve</h4>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                     <p><span class='price'>$59.89</span><span class='buy_btn'><a href="#" class="btn btn-primary" role="button">Buy Now!</a></span></p>
                  </div>
                   <hr>
                  <p><span class='seller_name'><i class='glyphicon glyphicon-user'><b style='padding-left:4px;color: #1f72ad;'>Seller Name</b></span></i><span class='rating_class'><i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star-empty'></i><i class='glyphicon glyphicon-star-empty'></i></span></span></p>
            </div>
      </div>

    <div class="col-sm-3 col-md-3">
        <div class="thumbnail">
        <img data-src="holder.js/100%x200" alt="100%x200"  class="img-thumbnail img-responsive" src="../assets/images/products/bag.jpg" data-holder-rendered="true" style="height: 200px;display: block;">
          <div class="caption">
            <h4>Black and Red Plad Sleeve</h4>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><span class='price'>$59.89</span><span class='buy_btn'><a href="#" class="btn btn-primary" role="button">Buy Now!</a></span></p>
          </div>
           <hr>
                  <p><span class='seller_name'><i class='glyphicon glyphicon-user'><b style='padding-left:4px;color: #1f72ad;'>Seller Name</b></span></i><span class='rating_class'><i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star-empty'></i><i class='glyphicon glyphicon-star-empty'></i></span></span></p>
        </div>
      </div>

      <div class="col-sm-3 col-md-3">

        <div class="thumbnail">
           <img data-src="holder.js/100%x200" alt="100%x200"  class="img-thumbnail img-responsive" src="../assets/images/products/ring.jpg" data-holder-rendered="true" style="height: 200px;display: block;">
           <div class="caption">
            <h4>Black and Red Plad Sleeve</h4>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
             <p><span class='price'>$59.89</span><span class='buy_btn'><a href="#" class="btn btn-primary" role="button">Buy Now!</a></span></p>
          </div>
           <hr>
                  <p><span class='seller_name'><i class='glyphicon glyphicon-user'><b style='padding-left:4px;color: #1f72ad;'>Danny man</b></span></i><span class='rating_class'><i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star-empty'></i><i class='glyphicon glyphicon-star-empty'></i></span></span></p>
           
        </div>
      </div>

    </div>

  </div>

  
  

  
  

  
             
</div>  



</section>
<footer class="footer">
 
   
<div clas="row" style="background-color:#353535;color:white;">
      <div class="container" >

     <div class="footer_menu">
      <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">About MBU4U</a></li>
      <li><a href="#">Shop</a></li>
      <li><a href="#">Sell</a></li>
      <li><a href="#">Bid</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
    </div>
  </div>
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
