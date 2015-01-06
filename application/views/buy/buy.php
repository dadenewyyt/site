<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to MadebyUs4u.com | Buy</title>
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
 .col-md-2 {
   

  }
  .thumbnail-catagories {

    height: 100%;
    overflow-y: scroll;  
    background-color:#fafafa;
    margin-top: 16px;
  }

  .catagory-checks {
    border-radius: 2px;

    
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
  .buy_btn_small {

  }
  
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
.col-md-catagory {
/*width:28%;*/
}
.showing_text {
    margin-left: -5%;
}
.hr_border {
    border-top: 2px dotted #818181;
    margin-top: 33px;
margin-bottom: 22px;
width: 70%;
}

.hr_border_bottom {
border-top: 2px dotted #818181;
width: 100%;
}
.showing_text .showing {
font-weight: 800;
font-size: 16px;
color:#595959;
}
.showing_text .showing-item {
   color:#bfbfbf;
   font-weight: 600;

}


.showing_text .col-md-offset-4  span {
    margin-top: 0px;
}
.rating {
    padding-left: 2px;
    
}
.rating .glyphicon {
  color: #2676af;
  font-size: 10px;

}
.row-no-margin {
    margin: 0;
}

.line-checkbox {
  font-size: 13px;
}
              
div.status_box_featured
{

  position: absolute;
  margin:10px 3px;
  /*border: 1px solid black;*/
  background-color: #2676af;
  opacity:0.7;
  filter:alpha(opacity=70); /* For IE8 and earlier */
}

div.status_box_featured p
{
  margin: 8px 7px;
  font-weight: bold;
  color: #ffffff;
  text-transform: uppercase;
}


.status_box_onsale {
  position: absolute;
  margin:10px 3px;
  /*border: 1px solid black;*/
  background-color: #86a800;
  opacity:0.7;
  filter:alpha(opacity=70); /* For IE8 and earlier */
}

.status_box_onsale p {

  margin: 8px 7px;
  font-weight: bold;
  color: #ffffff;
  text-transform: uppercase;
} 
.status_box_outstock {
  position: absolute;
  margin:80px 3px;
  /*border: 1px solid black;*/
  background-color: #ffffff;
  width: 80%;
  opacity:0.7;
  filter:alpha(opacity=70); /* For IE8 and earlier */
}

.status_box_outstock p {
 
  margin: 8px 5px;
  font-weight: bold;
  font-weight: 800;
  font-size: 17px;
  color: black;
  text-transform: uppercase;
} 

.img-responsive {
  border: none;
}
.thumbnail {
  border-radius: 1px;
}
.left-catag-twitt {
background-color:#ffffff;

}
</style>
<body>

  <?php $this->load->view($notification_bar); ?>

  <header>

     <?php $this->load->view($header_black_menu); ?>

  </header>
<!-- Responsive design
================================================== -->
<section id="responsive" style="background-color:#f5f5f5;">
    <div class="row row-1">

        <nav class="navbar navbar-default" role="navigation">
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


<div class="container">
   
            <div class="col-md-3 left-catag-twitt">


                <div class="thumbnail catagory-checks thumbnail-catagories" >
                    <span><small>MadeByUs4U</small>&nbsp;&nbsp;<span class="caret"></span>&nbsp;<span style="font-weight:bold">&nbsp;Clothing</span>
                    <div class="thumbnail rec" >                   
                  <!--form -->
                  <?php 
                  $form_data = array(
                    'name'        => 'categories',
                    'id'          => 'categories',
                    'class' => 'form',
                    );
                  echo form_open('bid/categories',$form_data);
                 ?> 

                <?php foreach($this->config->item('categories')['Cloths'] as $value) : ?>
                  <div class="line-checkbox">
                  <p><input type="checkbox"  class='form-inline'name="categories[]" value="<?php echo $value;?>"><a href="">&nbsp;<?php echo $value;?></a>&nbsp;(<span class='catagory_count'>201,201</span> )</p>            
                
                </div>

                <?php endforeach;?>                                                          
                    
                </div>
                <?php

                  $submit_btn_data = array(
                        'class'=>'btn btn-primary apply-button pull-left',        
                        'value'=>"APPLY",              
                        'type'=>'submit',
                    );
                  $reset_btn_data = array(
                        'class'=>'btn btn-primary apply-button pull-right',                  
                        'value'=>"reset filter",
                        'type'=>'reset',
                    );
                ?>
                    <span class='apply_btn'><?php echo form_submit($submit_btn_data);?></span>
                    <span class='apply_btn' ><?php echo form_input($reset_btn_data);?></span>
                    <?php echo form_close();?>
                   <!--form end--> 
            </div>
<hr>
                 <div class="row row-newline">
                     <div class="col-md-2">
                         <img src="<?php echo base_url()."assets/images/bid/delivery.png"?>" height="200"/>
                     </div> 
                 </div>
 
                 <div class="row" style="margin-left:4px;text-align:LEFT;">
                 <?php $this->load->view($tweets_page,$data); ?>
                </div>
            
            </div>

               <div class="sfd">
            <div class="col-md-9 showing_text">
     
                    <div class="col-md-offset-1 ">
                      
                      <span class='showing'>Showing &nbsp;( <span class='element_count'>201,201</span> )&nbsp;&nbsp;result in </span>
                      Clothing  

                      <span class='pull-right showing-item'>ITEM PER PAGE:&nbsp; (<span class='element_count'>201,201</span>)&nbsp;&nbsp;<a href="#">12</a>&nbsp;<a href="#">15</a>&nbsp;<a href="#">18</a>&nbsp;<a href="#">21</a></span>
                    
                    </div>
                    
                   
            
            </div>
            </div>   

     <hr class="hr_border">

            <div class="products">                 
          
               <div class="row row-no-margin">
                   
                <div class="col-sm-2 col-md-3">

                    <div class="thumbnail rec">

                      <div class="status_box_featured"><p>Featured!</p></div> 

                        <img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/images/products/dimond.jpg";?>" data-holder-rendered="true" style="height: 200px;display: block;">
                      
                        <div class="caption">
                            <h4>Dimonad Rings </h4>

                            <p><span class='price'>$66.99</span><span class='buy_btn'><a href="#" class="btn btn-primary" role="button">Buy Now!</a></span></p>
                            <span class='span_buy_it_now'><p><a href="#">Buy It Now!</a></p></span>
                        </div>
                        <hr>
                       
                
                        <p>
                        <span class='usericon'>
                        <i class='glyphicon glyphicon-user'>
                        <b style='padding-left:4px;color: #1f72ad;'>Danny man</b>
                       </i> 
                        </span>
                         <span class="rating pull-right">
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                         </span>
                         </p>
                
                         

                    </div>
                </div>

                <div class="col-sm-3 col-md-3 col-md-images">
                    <div class="thumbnail rec">

                    <div class="status_box_onsale"><p>on Sale!</p></div> 
                       
                        <img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/images/products/tshirt.jpg";?>" data-holder-rendered="true" style="height: 200px;display: block;">
                        <div class="caption">
                            <h4>Thirt </h4>
                            <p><span class='price'>$88.00</span><span class='buy_btn'><a href="#" class="btn btn-primary" role="button">Buy Now!</a></span></p>
                            <span class='span_buy_it_now'><p><a href="#">Buy It Now!</a></p></span>
                        </div>
                        <hr>
                        <div class='rating'>
                        <p><span class=''><i class='glyphicon glyphicon-user'><b style='padding-left:4px;color: #1f72ad;'>Danny man</b></span></i>
                       <span class="rating pull-right" style="color:#;">
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                   </span>
                    </div></div>
                </div>
                <div class="col-sm-2 col-md-3 col-md-images">

                    <div class="thumbnail rec">
                        <img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/images/products/bag.jpg";?>" data-holder-rendered="true" style="height: 200px;display: block;">
                        <div class="caption">
                            <h4>Black and Red </h4>
                            <p><span class='price'>$59.89</span><span class='buy_btn'><a href="#" class="btn btn-primary" role="button">Buy Now!</a></span></p>
                            <span class='span_buy_it_now'><p><a href="#">Buy It Now! </a></p></span>
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
                            <p><span class='price'>$59.89</span><span class='buy_btn'><a href="#" class="btn btn-primary" role="button">Buy Now!</a></span></p>
                            <span class='span_buy_it_now'><p><a href="#">Buy It Now!</a></p></span>
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
                            <p><span class='price'>$59.89</span><span class='buy_btn'><a href="#" class="btn btn-primary" role="button">Buy Now!</a></span></p>
                            <span class='span_buy_it_now'><p><a href="#">Buy It Now!</a></p></span>
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
                            <p><span class='price'>$59.89</span><span class='buy_btn'><a href="#" class="btn btn-primary" role="button">Buy Now!</a></span></p>
                            <span class='span_buy_it_now'><p><a href="#">Buy It Now!</a></p></span>
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
                            <p><span class='price'>$59.89</span><span class='buy_btn'><a href="#" class="btn btn-primary" role="button">Buy Now!</a></span></p>
                            <span class='span_buy_it_now'><p><a href="#">Buy It Now! </a></p></span>
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
                            <p><span class='price'>$59.89</span><span class='buy_btn'><a href="#" class="btn btn-primary" role="button">Buy Now!</a></span></p>
                            <span class='span_buy_it_now'><p><a href="#">Buy It Now!</a></p></span>
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
                            <p><span class='price'>$59.89</span><span class='buy_btn'><a href="#" class="btn btn-primary" role="button">Buy Now!</a></span></p>
                            <span class='span_buy_it_now'><p><a href="#">Buy It Now!</a></p></span>
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
                        <div class="status_box_outstock"><p>out of stock!</p></div> 
                        <img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/images/products/ring.jpg";?>" data-holder-rendered="true" style="height: 200px;display: block;">
                        <div class="caption">
                            <h4>Black and Red </h4>

                            <p><span class='price'>$59.89</span><span class='buy_btn'><a href="#" class="btn btn-primary" role="button">Buy Now!</a></span></p>
                            <span class='span_buy_it_now'><p><a href="#">Buy It Now!</a></p></span>
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

                            <p><span class='price'>$59.89</span><span class='buy_btn'><a href="#" class="btn btn-primary" role="button">Buy Now!</a></span></p>
                            <span class='span_buy_it_now'><p><a href="#">Buy It Now!</a></p></span>
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

                            <p><span class='price'>$59.89</span><span class='buy_btn'><a href="#" class="btn btn-primary" role="button">Buy Now!</a></span></p>
                            <span class='span_buy_it_now'><p><a href="#">Buy It Now!</a></p></span>
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


                <div class="col-md-9 col-md-offset-3" style="padding-bottom:6%;">
                        <hr class="hr_border_bottom" style="margin-top:0px;">
                        <div class="pull-right">
                                <?php $this->load->view($paginate_page); ?>
                        </div>    
                </div>
        
             </div><!--nio margin row end-->
           

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

      
    });

       var url =  "<?php echo site_url('welcome/subscribe');?>";
       subscribe_using_ajax(url);
  
</script>
</body>
</html>
