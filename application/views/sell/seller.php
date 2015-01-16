<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to MadebyUs4u.com | Seller Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href=<?php echo base_url()."assets/plugins/bootstrap/css/bootstrap.min.css";?> rel="stylesheet">
    <link href=<?php echo base_url()."assets/css/common.css";?> rel="stylesheet">

</head>

<style type="text/css">

.navbar {
    min-height:40px;
    border-radius:0px;
    width:100%;   
}

.navbar-default .navbar-nav>li>a {
color: #000000;
}

.navbar-default .navbar-nav>li>a:hover, .navbar-default .navbar-nav>li>a:focus {

color: #a1a1a1;

}
.navbar-nav {
  width: 100%;
  margin-left: -16px;
}
 .rating {
  color: #828282;
 }
.rating_star{
  color: #2676af;
}


</style>
<body>

     <?php $this->load->view($notification_bar); ?>
     
  <header>

      <?php $this->load->view($header_black_menu); ?>

      <?php $this->load->view($header_logo_white); ?>

  </header>
<!-- Responsive design
================================================== -->
<section id="responsive" style="background-color:#f5f5f5;">

   <!--load menu here -->
   <?php $this->load->view($main_menu); ?>
<style type="text/css">

  .container-seller-details {
      border: 1px solid rgb(228, 215, 215);

      padding-top: 10px;
      margin-bottom: 10px;
  }
  .row-details {

  }
  .media-heading {
    font-weight: 600;
    padding-bottom: 5px;
    color: #5F5757;
  }
  .jobtitle {
    font-weight: 600;
    font-size: 14px;
    color: #5F5757;
  }
  .companyname {
    font-weight: 600;
    font-size: 14px;
    color: #5F5757;
  }

  .located {
    font-family: 10px;
    color: #898989;
  }
  .location {
    color:black;
    padding: 7px;
  }
  .country {
     color: #898989;
     padding-left: 7px;
  }
  .country i {
     color: #898989;
     padding-left: 0px;
       padding-right: 3px;
  }
  .rating_chat .rating {
    color:#226da0;
    font-size: 18px;
  }

.rating_chat .btn-rate  {
background-color: #C0C0C0;
border-radius: 2px;
color: white;

    text-transform: uppercase;
    font-weight: 600;
  }

.rating_chat .btn-start-chat  {
    background-color: #428bca;
    border-radius: 2px;
    color: white;
    text-transform: uppercase;
    font-weight: 500;
  }

  .rating_chat .btn-start-chat i {
    padding-right: 8px;
  }

   .rating_chat .btn-rate i {
    padding-right: 8px;
  }


.btn-default {
border: none;
}

.btn-start-chat i {
    padding:2px;
}

 
.buttons .btn {
background-color: #3E3F3F;
border-color: #535658;
color: white;
text-transform: uppercase;
font-weight: 500;
border-radius: 2px;
}

.buttons i {
  padding-right: 4px;
}

.buttons .btn-chat-status  {
    background-color: #FDFDFD;
    border-radius: 2px;
    color: rgb(105, 100, 100);
    text-transform: capitalize;
    font-weight: 500;
        border:1px solid rgb(226, 223, 223);;
  }

.buttons .btn-chat-status i {
    padding-right:8px;

}
.memeber_month {
padding-top: 4px;
}

.memeber {
  color: #989898;
}
.month{
 color: #4D4949;
}

.buttons .btn-chat-status {
  margin-top: 35%;
}
.bodys{
  padding-left: 18px;
}

</style>

<div class='container container-seller-details'> 

<div class="row row-details">
      
      <div class="col-md-8 detail_info pull-left">
     
        <div class="media">

              <a class="media-left media-top" href="#">
                  <img class='pull-left user-small-image' src="<?php echo base_url()."assets/images/products/user.png"?>" height='180' alt="...">
              </a>



             <div class="media-body">
 <div class='bodys'>
               <h3 class="media-heading">Fashion Unique</h3>
                   <p><i class='glyphicon glyphicon-briefcase'></i>
                   <span class='jobtitle'>Creative Director</span> | 
                   <span class='companyname'>Fashion Unique Apprell,LLC</span>
                   </p>
                   <p class="located"><span>Located In:</span>
                   <span class='location'>Las Vegas ,NV</span> | 
                   <span class='country'><i class='glyphicon glyphicon-map-marker'></i>United States</span>
                   </p> 

                <div class="col-md rating_chat" style="padding-top:6%;">
                 
                  <p>  <span class="rating">
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                    </span>                     
                           
                    <a href="#" class="btn btn-default btn-rate"><i class='glyphicon glyphicon-star'></i>Rate</a>
                     <a href="#" class="btn btn-default btn-start-chat "><i class='glyphicon glyphicon-comment'></i>Start Chat</a>
                    </p>       
                     <div class="memeber_month">
                         <p>
                           <span class='memeber'>Member Since |</span>  
                           <span class="month">February 2014</span>

                         </p>
                     </div>
                   
                     

               </div>

               </div>
             </div>

          </div>



      </div>



        <div class="col-md-4 buttons ">
            <div class="form-inline pull-right">
             <div class="form-groups">
               <a href="#" class="btn btn-default btn-sm"><i class='glyphicon glyphicon-user'></i>Send Friend Request</a>
               <a href="#" class="btn btn-default btn-sm"><i class='glyphicon glyphicon-envelope'></i>Send a Message</a>
            
             </div>
              </div>
             <a href="#" class="btn btn-default btn-chat-status btn-sm pull-right"><i class='glyphicon glyphicon-record' style='color:#69DA32;'></i>This user is online</a>
      </div>

</div> <!--end of row -->
<style type="text/css">
  
  .row-under-container {
    background-color:white;
 
    border-top: 1px solid rgb(228, 215, 215);
  
  }
  .row-under-container  {

    vertical-align: middle;
    padding-top:8px;
    padding-left:6px;
    padding-right:6px;
    font-size: 12px;
    padding-bottom:2px;

  }
.row-under-container .col-md-1 {
width: 16.333333%;
}
.row-under-container  .col-md-2 {
    width: 13.666667%;
   font-size: 15px;
   padding-left: 2px;
   
}
.hr_border {
border-top: 2px dotted #818181;
margin-top: 0px;

}


 .catagory-checks {
    border-radius: 2px; 
  }
  
.thumbnail-catagories {

    height: 100%;
    overflow-y: scroll;  
    background-color:#fafafa;
    margin-top: 16px;
  }
.thumbnail hr {
margin-top: 0px;
margin-bottom: 0px;
padding: 4px;
border: 0;
border-top: 1px solid #eee;
font-family: font-family: 'Open Sans', sans-serif;

}
.img-thumbnail { border-radius: 2px;}

.buy_btn .btn-primary {
color: #fff;
background-color: #3E3F3F;
border-color: #535658;
border-radius: 2px;
float: right;
}

.apply_btn .btn-primary {
color: #fff;
background-color: #3E3F3F;
border-color: #535658;
border-radius: 2px;
padding: 1px 10px 1px 10px;
}

 .buy_btn .btn {
padding: 3px 9px;
/* height: auto; */
/* width: 73px; */
}

.custom_product_images .col-md-3 {
/*width: 18%;*/
}
.span_buy_it_now p{
margin-top: -10px;
margin-left: 3px;
font-size: 11px;
font-family: font-family: 'Open Sans', sans-serif;
}
 .span_buy_it_now p a {
  text-decoration: none;
}

.thumbnail .caption h4 {
  margin-top: 0px;
}

.thumbnail .caption {
  padding: 2px;
}
.row-heading {
margin-top: -5px;
}
.element_count {

}
.col-md-images {
    /**
padding-right: 10px;
padding-left: 0px;**/
padding-right: 2;

}
</style>
    <div class="row row-under-container" >
      <div class="col-md-1">Web | <span class='webaddres'>www.google.com  </span>  </div>
       <div class="col-md-2"><span class='' style='border-bottom: 2px solid #428bca;'>8 Listings</span></div>
        <div class="col-md-2">0 Stores  </div>
         <div class="col-md-2">146 Likes  </div>
          <div class="col-md-2">22 Freinds  </div>
           <div class="col-md-2">0 Photos  </div>
           <div class="col-md-2">1 Video  </div>

    </div>

    </div>

<div class="container container-listing">

<h4>Showing  (8) Listing</h4>

 <hr class="hr_border">

<div class="row">
 

   <div class="col-sm-2 col-md-3 col-md-images">

                    <div class="thumbnail rec">
                        <img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/images/products/bag.jpg";?>" data-holder-rendered="true" style="height: 200px;display: block;">
                        <div class="caption">
                            <h4>Black and Red </h4>
                            <p><span class='price'>$59.89</span><span class='buy_btn'><a href="#" class="btn btn-primary" role="button">Bid Now!</a></span></p>
                            <span class='span_buy_it_now'><p><a href="#">1 Bid </a></p></span>
                        </div>
                        <hr>
                        <p><span class=''><i class='glyphicon glyphicon-user'><b style='padding-left:4px;color: #1f72ad;'>Danny man</b></span></i>
                        <span class='pull-right'><i class='glyphicon glyphicon-star'></i>
                         <i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star-empty'></i><i class='glyphicon glyphicon-star-empty'></i></span></span></p>
                    </span>
                    </div>
                </div>

                 <div class="col-sm-2 col-md-3 col-md-images">

                    <div class="thumbnail rec">
                        <img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/images/products/ring.jpg";?>" data-holder-rendered="true" style="height: 200px;display: block;">
                        <div class="caption">
                            <h4>Black and Red </h4>
                            <p><span class='price'>$59.89</span><span class='buy_btn'><a href="#" class="btn btn-primary" role="button">Bid Now!</a></span></p>
                            <span class='span_buy_it_now'><p><a href="#">1 Bid </a></p></span>
                        </div>
                        <hr>
                        <p><span class=''><i class='glyphicon glyphicon-user'><b style='padding-left:4px;color: #1f72ad;'>Danny man</b></span></i>
                       <span class="rating pull-right" style="color:#;">
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                   </span>
                
                    </div>
                </div>

                 <div class="col-sm-2 col-md-3 col-md-images">

                    <div class="thumbnail rec">
                        <img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/images/products/ring.jpg";?>" data-holder-rendered="true" style="height: 200px;display: block;">
                        <div class="caption">
                            <h4>Black and Red </h4>
                            <p><span class='price'>$59.89</span><span class='buy_btn'><a href="#" class="btn btn-primary" role="button">Bid Now!</a></span></p>
                            <span class='span_buy_it_now'><p><a href="#">1 Bid </a></p></span>
                        </div>
                        <hr>
                        <p><span class=''><i class='glyphicon glyphicon-user'><b style='padding-left:4px;color: #1f72ad;'>Danny man</b></span></i>
                        <span class='pull-right'><i class='glyphicon glyphicon-star'></i>
                         <i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star-empty'></i><i class='glyphicon glyphicon-star-empty'></i></span></span></p>
                    </span>
                    </div>
                </div>
                 <div class="col-sm-2 col-md-3 col-md-images">

                    <div class="thumbnail rec">
                        <img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/images/products/ring.jpg";?>" data-holder-rendered="true" style="height: 200px;display: block;">
                        <div class="caption">
                            <h4>Black and Red </h4>
                            <p><span class='price'>$59.89</span><span class='buy_btn'><a href="#" class="btn btn-primary" role="button">Bid Now!</a></span></p>
                            <span class='span_buy_it_now'><p><a href="#">1 Bid </a></p></span>
                        </div>
                        <hr>
                        <p><span class=''><i class='glyphicon glyphicon-user'><b style='padding-left:4px;color: #1f72ad;'>Danny man</b></span></i>
                        <span class="rating pull-right" style="color:#;">
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                   </span>
                    </div>
                </div>

</div>  <div class="col-sm-2 col-md-3 col-md-images">

                    <div class="thumbnail rec">
                        <img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/images/products/bag.jpg";?>" data-holder-rendered="true" style="height: 200px;display: block;">
                        <div class="caption">
                            <h4>Black and Red </h4>
                            <p><span class='price'>$59.89</span><span class='buy_btn'><a href="#" class="btn btn-primary" role="button">Bid Now!</a></span></p>
                            <span class='span_buy_it_now'><p><a href="#">1 Bid </a></p></span>
                        </div>
                        <hr>
                        <p><span class=''><i class='glyphicon glyphicon-user'><b style='padding-left:4px;color: #1f72ad;'>Danny man</b></span></i>
                        <span class='pull-right'><i class='glyphicon glyphicon-star'></i>
                         <i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star-empty'></i><i class='glyphicon glyphicon-star-empty'></i></span></span></p>
                    </span>
                    </div>
                </div>

                 <div class="col-sm-2 col-md-3 col-md-images">

                    <div class="thumbnail rec">
                        <img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/images/products/ring.jpg";?>" data-holder-rendered="true" style="height: 200px;display: block;">
                        <div class="caption">
                            <h4>Black and Red </h4>
                            <p><span class='price'>$59.89</span><span class='buy_btn'><a href="#" class="btn btn-primary" role="button">Bid Now!</a></span></p>
                            <span class='span_buy_it_now'><p><a href="#">1 Bid </a></p></span>
                        </div>
                        <hr>
                        <p><span class=''><i class='glyphicon glyphicon-user'><b style='padding-left:4px;color: #1f72ad;'>Danny man</b></span></i>
                       <span class="rating pull-right" style="color:#;">
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                   </span>
                
                    </div>
                </div>

                 <div class="col-sm-2 col-md-3 col-md-images">

                    <div class="thumbnail rec">
                        <img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/images/products/ring.jpg";?>" data-holder-rendered="true" style="height: 200px;display: block;">
                        <div class="caption">
                            <h4>Black and Red </h4>
                            <p><span class='price'>$59.89</span><span class='buy_btn'><a href="#" class="btn btn-primary" role="button">Bid Now!</a></span></p>
                            <span class='span_buy_it_now'><p><a href="#">1 Bid </a></p></span>
                        </div>
                        <hr>
                        <p><span class=''><i class='glyphicon glyphicon-user'><b style='padding-left:4px;color: #1f72ad;'>Danny man</b></span></i>
                        <span class='pull-right'><i class='glyphicon glyphicon-star'></i>
                         <i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star-empty'></i><i class='glyphicon glyphicon-star-empty'></i></span></span></p>
                    </span>
                    </div>
                </div>
                 <div class="col-sm-2 col-md-3 col-md-images">

                    <div class="thumbnail rec">
                        <img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/images/products/ring.jpg";?>" data-holder-rendered="true" style="height: 200px;display: block;">
                        <div class="caption">
                            <h4>Black and Red </h4>
                            <p><span class='price'>$59.89</span><span class='buy_btn'><a href="#" class="btn btn-primary" role="button">Bid Now!</a></span></p>
                            <span class='span_buy_it_now'><p><a href="#">1 Bid </a></p></span>
                        </div>
                        <hr>
                        <p><span class=''><i class='glyphicon glyphicon-user'><b style='padding-left:4px;color: #1f72ad;'>Danny man</b></span></i>
                        <span class="rating pull-right" style="color:#;">
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                   </span>
                    </div>
                </div>
                    <div class="col-md-12" style="padding-bottom:6%;">
                        <hr class="hr_border_bottom" style="margin-top:0px;">
                        <div class="pull-right">
                                <?php $this->load->view($paginate_page); ?>
                        </div>    
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

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url()."assets/plugins/jquery/jquery.min.js";?>"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="<?php echo base_url()."assets/plugins/bootstrap/js/bootstrap.min.js";?>"></script> 
<script src="<?php echo base_url()."assets/js/subscribe_ajax.js";?>"></script>
<script type="text/javascript">
    /***
     * Created by Daniel Adenew
     * Submit email subscription using ajax
     * Send email address
     * Send controller
     * Recive response
     */
       var url =  "<?php echo site_url('welcome/subscribe');?>";
       subscribe_using_ajax(url);
  
</script>
</body>
</html>
