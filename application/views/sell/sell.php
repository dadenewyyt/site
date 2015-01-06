<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to MadebyUs4u.com | Sell</title>
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
 .col-md-2-person {
   
width: 21.666667%;
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


.thumbnail .caption h4 {
  margin-top: 0px;
}

.thumbnail .caption {
  padding: 2px;
}
.row-heading {
margin-top: -5px;
}

.showing_text {
    margin-left: 0;
    padding-bottom: 10px;
}
.hr_border {
border-top: 2px dotted #818181;
margin-top: 33px;
margin-bottom: 22px;
width: 100%;
}

.hr_border_bottom {
border-top: 2px dotted #818181;
width: 100%;
}
.showing_text .showing {
font-weight: 800;
font-size: 20px;
color:#595959;
}

.showing_text .small_text{
font-size: 18px;
font-weight: normal;
}
.showing_text .showing-item {
   color:#bfbfbf;
   font-weight: 600;
}

.img-responsive {
  border: none;
}
.thumbnail {
  border-radius: 1px;
}
/**column width**/
.col-md-2-person {
width: 19.7777%;
padding-left: 2;
padding-right:6px; 
}

.container-pattern_image {
  padding-bottom: 15px;
  padding-top: 5px;
}
  .pattern_holder_div {
  width: 100%;
  background-color: white;
  height: 70px;
  padding: 10px;

  }

  .pattern {
    background-image: url('assets/images/pattern.png');
     height: 50px;
    background-repeat: repeat-x;
    padding: 7px;
  }
.become_seller_text{
font-size: 18px;
font-weight: 600;
}
.become_seller_text .blue_color{
color: #184878;
}

 .small_text{
color: #6c6c6c;
font-weight: bold;

}
.buy_btn .btn-primary {
color: #fff;
background-color: #3E3F3F;
border-color: #535658;
border-radius: 2px;
float: right;
}

 .seller_name .member_name{
  font-size: 17px;
  font-weight: normal;
  padding-left: 5px;

  color: #343434;
 }
 .seller_name i {
    color: #343434;
 }
 .seller_location {
   text-align: left;
  
 }
 .text_content {
  padding-left: 8px;
    padding-right: 4px;
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
          
             <div class="container-pattern_image"> 
                <div class="col-md pattern_holder_div">  
                 <div class="pattern">
                   <p>
                   <img src="<?php echo base_url()."assets/images/seller_made_icon.png";?>">
                   <span class="become_seller_text">Become a <span class="blue_color">SELLER</span> on <span class="blue_color">MadeByUs4u.com</span> today!</span>&nbsp; <small class="small_text">Once you create your free account you will gain instant access to all of our Sellers features!</small>
                   <span class='buy_btn'><a href="#" class="btn btn-primary" role="button">Become a Seller!</a></span>
                   </p>

                 </div>
                </div>
                </div> 
          
                  
               <div class="sfd">
               <div class="col-md-12 showing_text">
     
                    <div class="">
                      
                      <span class="showing">Showing <span class="small_text">all Sellers</span> on MBU4U !</span>

                      <span class='pull-right showing-item'>SELLERS PER PAGE:&nbsp; (<span class='element_count'>201,201</span>)&nbsp;&nbsp;<a href="#">12</a>&nbsp;<a href="#">15</a>&nbsp;<a href="#">18</a>&nbsp;<a href="#">21</a></span>
                    
                    </div>
            
            </div>
            </div>   

     <hr class="hr_border" style="width:100%;">

            <div class="sellers">                 
          
          <div class="row">
                                     
                   <div class="col-sm-2 col-md-2 col-md-2-person">

                    <div class="thumbnail rec">
                        <img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/images/users/person1.png";?>" data-holder-rendered="true" style="height: 150px;display: block;">
                        <div class='text_content'>
                        <div class="seller_name">
                         <h4><small><i class='glyphicon glyphicon-user'></i></small><span class="member_name">Memeber Name</span></h4>
                        </div>   
                       
                        <div class="seller_location">
                          <h4><small><span class="member_location">LasVegas NV | USA </small></h4>
                        </div> 
                                                         
                     <hr> <!--horizonal line-->

                     <div class="rating_social">
                       <p><span class="rating"><strong>Rating:</strong><span class="rating_star">
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                         </span></span>
                         </p>

                         <p><span class="friends rating"><strong>Freinds:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span><span class="friends rating pull-right"><strong>Products:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span> </span></p>

                     </div>
                    </div> <!--end of text content -->     
                    </div>
                </div>    

                  <div class="col-sm-2 col-md-2 col-md-2-person">

                    <div class="thumbnail rec">
                        <img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/images/users/person2.png";?>" data-holder-rendered="true" style="height: 150px;display: block;">
                        <div class='text_content'>
                        <div class="seller_name">
                         <h4><small><i class='glyphicon glyphicon-user'></i></small><span class="member_name">Memeber Name</span></h4>
                        </div>   
                       
                        <div class="seller_location">
                          <h4><small><span class="member_location">LasVegas NV | USA </small></h4>
                        </div> 
                                                         
                     <hr> <!--horizonal line-->

                     <div class="rating_social">
                       <p><span class="rating"><strong>Rating:</strong><span class="rating_star">
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                         </span></span>
                         </p>

                         <p><span class="friends rating"><strong>Freinds:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span><span class="friends rating pull-right"><strong>Products:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span> </span></p>

                     </div>
                    </div> <!--end of text content -->     
                    </div>
                </div>                    
                  <div class="col-sm-2 col-md-2 col-md-2-person">

                    <div class="thumbnail rec">
                        <img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/images/users/person3.png";?>" data-holder-rendered="true" style="height: 150px;display: block;">
                        <div class='text_content'>
                        <div class="seller_name">
                         <h4><small><i class='glyphicon glyphicon-user'></i></small><span class="member_name">Memeber Name</span></h4>
                        </div>   
                       
                        <div class="seller_location">
                          <h4><small><span class="member_location">LasVegas NV | USA </small></h4>
                        </div> 
                                                         
                     <hr> <!--horizonal line-->

                     <div class="rating_social">
                       <p><span class="rating"><strong>Rating:</strong><span class="rating_star">
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                         </span></span>
                         </p>

                         <p><span class="friends rating"><strong>Freinds:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span><span class="friends rating pull-right"><strong>Products:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span> </span></p>

                     </div>
                    </div> <!--end of text content -->     
                    </div>
                </div>  
                  <div class="col-sm-2 col-md-2 col-md-2-person">

                    <div class="thumbnail rec">
                        <img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/images/users/person4.png";?>" data-holder-rendered="true" style="height: 150px;display: block;">
                        <div class='text_content'>
                        <div class="seller_name">
                         <h4><small><i class='glyphicon glyphicon-user'></i></small><span class="member_name">Memeber Name</span></h4>
                        </div>   
                       
                        <div class="seller_location">
                          <h4><small><span class="member_location">LasVegas NV | USA </small></h4>
                        </div> 
                                                         
                     <hr> <!--horizonal line-->

                     <div class="rating_social">
                       <p><span class="rating"><strong>Rating:</strong><span class="rating_star">
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                         </span></span>
                         </p>

                         <p><span class="friends rating"><strong>Freinds:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span><span class="friends rating pull-right"><strong>Products:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span> </span></p>

                     </div>
                    </div> <!--end of text content -->     
                    </div>
                </div>  
                  <div class="col-sm-2 col-md-2 col-md-2-person">

                    <div class="thumbnail rec">
                        <img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/images/users/person5.png";?>" data-holder-rendered="true" style="height: 150px;display: block;">
                        <div class='text_content'>
                        <div class="seller_name">
                         <h4><small><i class='glyphicon glyphicon-user'></i></small><span class="member_name">Memeber Name</span></h4>
                        </div>   
                       
                        <div class="seller_location">
                          <h4><small><span class="member_location">LasVegas NV | USA </small></h4>
                        </div> 
                                                         
                     <hr> <!--horizonal line-->

                     <div class="rating_social">
                       <p><span class="rating"><strong>Rating:</strong><span class="rating_star">
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                         </span></span>
                         </p>

                         <p><span class="friends rating"><strong>Freinds:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span><span class="friends rating pull-right"><strong>Products:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span> </span></p>

                     </div>
                    </div> <!--end of text content -->     
                    </div>
                </div>  

                
        
             </div><!--nio margin row end-->


               <div class="row">
                                     
                   <div class="col-sm-2 col-md-2 col-md-2-person">

                    <div class="thumbnail rec">
                        <img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/images/users/person1.png";?>" data-holder-rendered="true" style="height: 150px;display: block;">
                        <div class='text_content'>
                        <div class="seller_name">
                         <h4><small><i class='glyphicon glyphicon-user'></i></small><span class="member_name">Memeber Name</span></h4>
                        </div>   
                       
                        <div class="seller_location">
                          <h4><small><span class="member_location">LasVegas NV | USA </small></h4>
                        </div> 
                                                         
                     <hr> <!--horizonal line-->

                     <div class="rating_social">
                       <p><span class="rating"><strong>Rating:</strong><span class="rating_star">
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                         </span></span>
                         </p>

                         <p><span class="friends rating"><strong>Freinds:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span><span class="friends rating pull-right"><strong>Products:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span> </span></p>

                     </div>
                    </div> <!--end of text content -->     
                    </div>
                </div>    

                  <div class="col-sm-2 col-md-2 col-md-2-person">

                    <div class="thumbnail rec">
                        <img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/images/users/person2.png";?>" data-holder-rendered="true" style="height: 150px;display: block;">
                        <div class='text_content'>
                        <div class="seller_name">
                         <h4><small><i class='glyphicon glyphicon-user'></i></small><span class="member_name">Memeber Name</span></h4>
                        </div>   
                       
                        <div class="seller_location">
                          <h4><small><span class="member_location">LasVegas NV | USA </small></h4>
                        </div> 
                                                         
                     <hr> <!--horizonal line-->

                     <div class="rating_social">
                       <p><span class="rating"><strong>Rating:</strong><span class="rating_star">
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                         </span></span>
                         </p>

                         <p><span class="friends rating"><strong>Freinds:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span><span class="friends rating pull-right"><strong>Products:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span> </span></p>

                     </div>
                    </div> <!--end of text content -->     
                    </div>
                </div>                    
                  <div class="col-sm-2 col-md-2 col-md-2-person">

                    <div class="thumbnail rec">
                        <img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/images/users/person3.png";?>" data-holder-rendered="true" style="height: 150px;display: block;">
                        <div class='text_content'>
                        <div class="seller_name">
                         <h4><small><i class='glyphicon glyphicon-user'></i></small><span class="member_name">Memeber Name</span></h4>
                        </div>   
                       
                        <div class="seller_location">
                          <h4><small><span class="member_location">LasVegas NV | USA </small></h4>
                        </div> 
                                                         
                     <hr> <!--horizonal line-->

                     <div class="rating_social">
                       <p><span class="rating"><strong>Rating:</strong><span class="rating_star">
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                         </span></span>
                         </p>

                         <p><span class="friends rating"><strong>Freinds:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span><span class="friends rating pull-right"><strong>Products:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span> </span></p>

                     </div>
                    </div> <!--end of text content -->     
                    </div>
                </div>  
                  <div class="col-sm-2 col-md-2 col-md-2-person">

                    <div class="thumbnail rec">
                        <img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/images/users/person4.png";?>" data-holder-rendered="true" style="height: 150px;display: block;">
                        <div class='text_content'>
                        <div class="seller_name">
                         <h4><small><i class='glyphicon glyphicon-user'></i></small><span class="member_name">Memeber Name</span></h4>
                        </div>   
                       
                        <div class="seller_location">
                          <h4><small><span class="member_location">LasVegas NV | USA </small></h4>
                        </div> 
                                                         
                     <hr> <!--horizonal line-->

                     <div class="rating_social">
                       <p><span class="rating"><strong>Rating:</strong><span class="rating_star">
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                         </span></span>
                         </p>

                         <p><span class="friends rating"><strong>Freinds:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span><span class="friends rating pull-right"><strong>Products:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span> </span></p>

                     </div>
                    </div> <!--end of text content -->     
                    </div>
                </div>  
                  <div class="col-sm-2 col-md-2 col-md-2-person">

                    <div class="thumbnail rec">
                        <img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/images/users/person5.png";?>" data-holder-rendered="true" style="height: 150px;display: block;">
                        <div class='text_content'>
                        <div class="seller_name">
                         <h4><small><i class='glyphicon glyphicon-user'></i></small><span class="member_name">Memeber Name</span></h4>
                        </div>   
                       
                        <div class="seller_location">
                          <h4><small><span class="member_location">LasVegas NV | USA </small></h4>
                        </div> 
                                                         
                     <hr> <!--horizonal line-->

                     <div class="rating_social">
                       <p><span class="rating"><strong>Rating:</strong><span class="rating_star">
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                         </span></span>
                         </p>

                         <p><span class="friends rating"><strong>Freinds:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span><span class="friends rating pull-right"><strong>Products:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span> </span></p>

                     </div>
                    </div> <!--end of text content -->     
                    </div>
                </div>  

                
        
             </div><!--nio margin row end-->

             <div class="row">
                                     
                   <div class="col-sm-2 col-md-2 col-md-2-person">

                    <div class="thumbnail rec">
                        <img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/images/users/person1.png";?>" data-holder-rendered="true" style="height: 150px;display: block;">
                        <div class='text_content'>
                        <div class="seller_name">
                         <h4><small><i class='glyphicon glyphicon-user'></i></small><span class="member_name">Memeber Name</span></h4>
                        </div>   
                       
                        <div class="seller_location">
                          <h4><small><span class="member_location">LasVegas NV | USA </small></h4>
                        </div> 
                                                         
                     <hr> <!--horizonal line-->

                     <div class="rating_social">
                       <p><span class="rating"><strong>Rating:</strong><span class="rating_star">
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                         </span></span>
                         </p>

                         <p><span class="friends rating"><strong>Freinds:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span><span class="friends rating pull-right"><strong>Products:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span> </span></p>

                     </div>
                    </div> <!--end of text content -->     
                    </div>
                </div>    

                  <div class="col-sm-2 col-md-2 col-md-2-person">

                    <div class="thumbnail rec">
                        <img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/images/users/person2.png";?>" data-holder-rendered="true" style="height: 150px;display: block;">
                        <div class='text_content'>
                        <div class="seller_name">
                         <h4><small><i class='glyphicon glyphicon-user'></i></small><span class="member_name">Memeber Name</span></h4>
                        </div>   
                       
                        <div class="seller_location">
                          <h4><small><span class="member_location">LasVegas NV | USA </small></h4>
                        </div> 
                                                         
                     <hr> <!--horizonal line-->

                     <div class="rating_social">
                       <p><span class="rating"><strong>Rating:</strong><span class="rating_star">
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                         </span></span>
                         </p>

                         <p><span class="friends rating"><strong>Freinds:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span><span class="friends rating pull-right"><strong>Products:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span> </span></p>

                     </div>
                    </div> <!--end of text content -->     
                    </div>
                </div>                    
                  <div class="col-sm-2 col-md-2 col-md-2-person">

                    <div class="thumbnail rec">
                        <img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/images/users/person3.png";?>" data-holder-rendered="true" style="height: 150px;display: block;">
                        <div class='text_content'>
                        <div class="seller_name">
                         <h4><small><i class='glyphicon glyphicon-user'></i></small><span class="member_name">Memeber Name</span></h4>
                        </div>   
                       
                        <div class="seller_location">
                          <h4><small><span class="member_location">LasVegas NV | USA </small></h4>
                        </div> 
                                                         
                     <hr> <!--horizonal line-->

                     <div class="rating_social">
                       <p><span class="rating"><strong>Rating:</strong><span class="rating_star">
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                         </span></span>
                         </p>

                         <p><span class="friends rating"><strong>Freinds:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span><span class="friends rating pull-right"><strong>Products:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span> </span></p>

                     </div>
                    </div> <!--end of text content -->     
                    </div>
                </div>  
                  <div class="col-sm-2 col-md-2 col-md-2-person">

                    <div class="thumbnail rec">
                        <img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/images/users/person4.png";?>" data-holder-rendered="true" style="height: 150px;display: block;">
                        <div class='text_content'>
                        <div class="seller_name">
                         <h4><small><i class='glyphicon glyphicon-user'></i></small><span class="member_name">Memeber Name</span></h4>
                        </div>   
                       
                        <div class="seller_location">
                          <h4><small><span class="member_location">LasVegas NV | USA </small></h4>
                        </div> 
                                                         
                     <hr> <!--horizonal line-->

                     <div class="rating_social">
                       <p><span class="rating"><strong>Rating:</strong><span class="rating_star">
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                         </span></span>
                         </p>

                         <p><span class="friends rating"><strong>Freinds:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span><span class="friends rating pull-right"><strong>Products:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span> </span></p>

                     </div>
                    </div> <!--end of text content -->     
                    </div>
                </div>  
                  <div class="col-sm-2 col-md-2 col-md-2-person">

                    <div class="thumbnail rec">
                        <img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/images/users/person5.png";?>" data-holder-rendered="true" style="height: 150px;display: block;">
                        <div class='text_content'>
                        <div class="seller_name">
                         <h4><small><i class='glyphicon glyphicon-user'></i></small><span class="member_name">Memeber Name</span></h4>
                        </div>   
                       
                        <div class="seller_location">
                          <h4><small><span class="member_location">LasVegas NV | USA </small></h4>
                        </div> 
                                                         
                     <hr> <!--horizonal line-->

                     <div class="rating_social">
                       <p><span class="rating"><strong>Rating:</strong><span class="rating_star">
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                         </span></span>
                         </p>

                         <p><span class="friends rating"><strong>Freinds:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span><span class="friends rating pull-right"><strong>Products:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span> </span></p>

                     </div>
                    </div> <!--end of text content -->     
                    </div>
                </div>  

                
        
             </div><!--nio margin row end-->
             <div class="row">
                                     
                   <div class="col-sm-2 col-md-2 col-md-2-person">

                    <div class="thumbnail rec">
                        <img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/images/users/person1.png";?>" data-holder-rendered="true" style="height: 150px;display: block;">
                        <div class='text_content'>
                        <div class="seller_name">
                         <h4><small><i class='glyphicon glyphicon-user'></i></small><span class="member_name">Memeber Name</span></h4>
                        </div>   
                       
                        <div class="seller_location">
                          <h4><small><span class="member_location">LasVegas NV | USA </small></h4>
                        </div> 
                                                         
                     <hr> <!--horizonal line-->

                     <div class="rating_social">
                       <p><span class="rating"><strong>Rating:</strong><span class="rating_star">
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                         </span></span>
                         </p>

                         <p><span class="friends rating"><strong>Freinds:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span><span class="friends rating pull-right"><strong>Products:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span> </span></p>

                     </div>
                    </div> <!--end of text content -->     
                    </div>
                </div>    

                  <div class="col-sm-2 col-md-2 col-md-2-person">

                    <div class="thumbnail rec">
                        <img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/images/users/person2.png";?>" data-holder-rendered="true" style="height: 150px;display: block;">
                        <div class='text_content'>
                        <div class="seller_name">
                         <h4><small><i class='glyphicon glyphicon-user'></i></small><span class="member_name">Memeber Name</span></h4>
                        </div>   
                       
                        <div class="seller_location">
                          <h4><small><span class="member_location">LasVegas NV | USA </small></h4>
                        </div> 
                                                         
                     <hr> <!--horizonal line-->

                     <div class="rating_social">
                       <p><span class="rating"><strong>Rating:</strong><span class="rating_star">
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                         </span></span>
                         </p>

                         <p><span class="friends rating"><strong>Freinds:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span><span class="friends rating pull-right"><strong>Products:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span> </span></p>

                     </div>
                    </div> <!--end of text content -->     
                    </div>
                </div>                    
                  <div class="col-sm-2 col-md-2 col-md-2-person">

                    <div class="thumbnail rec">
                        <img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/images/users/person3.png";?>" data-holder-rendered="true" style="height: 150px;display: block;">
                        <div class='text_content'>
                        <div class="seller_name">
                         <h4><small><i class='glyphicon glyphicon-user'></i></small><span class="member_name">Memeber Name</span></h4>
                        </div>   
                       
                        <div class="seller_location">
                          <h4><small><span class="member_location">LasVegas NV | USA </small></h4>
                        </div> 
                                                         
                     <hr> <!--horizonal line-->

                     <div class="rating_social">
                       <p><span class="rating"><strong>Rating:</strong><span class="rating_star">
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                         </span></span>
                         </p>

                         <p><span class="friends rating"><strong>Freinds:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span><span class="friends rating pull-right"><strong>Products:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span> </span></p>

                     </div>
                    </div> <!--end of text content -->     
                    </div>
                </div>  
                  <div class="col-sm-2 col-md-2 col-md-2-person">

                    <div class="thumbnail rec">
                        <img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/images/users/person4.png";?>" data-holder-rendered="true" style="height: 150px;display: block;">
                        <div class='text_content'>
                        <div class="seller_name">
                         <h4><small><i class='glyphicon glyphicon-user'></i></small><span class="member_name">Memeber Name</span></h4>
                        </div>   
                       
                        <div class="seller_location">
                          <h4><small><span class="member_location">LasVegas NV | USA </small></h4>
                        </div> 
                                                         
                     <hr> <!--horizonal line-->

                     <div class="rating_social">
                       <p><span class="rating"><strong>Rating:</strong><span class="rating_star">
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                         </span></span>
                         </p>

                         <p><span class="friends rating"><strong>Freinds:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span><span class="friends rating pull-right"><strong>Products:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span> </span></p>

                     </div>
                    </div> <!--end of text content -->     
                    </div>
                </div>  
                  <div class="col-sm-2 col-md-2 col-md-2-person">

                    <div class="thumbnail rec">
                        <img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/images/users/person5.png";?>" data-holder-rendered="true" style="height: 150px;display: block;">
                        <div class='text_content'>
                        <div class="seller_name">
                         <h4><small><i class='glyphicon glyphicon-user'></i></small><span class="member_name">Memeber Name</span></h4>
                        </div>   
                       
                        <div class="seller_location">
                          <h4><small><span class="member_location">LasVegas NV | USA </small></h4>
                        </div> 
                                                         
                     <hr> <!--horizonal line-->

                     <div class="rating_social">
                       <p><span class="rating"><strong>Rating:</strong><span class="rating_star">
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                             <i class='glyphicon glyphicon-star-empty'></i>
                         </span></span>
                         </p>

                         <p><span class="friends rating"><strong>Freinds:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span><span class="friends rating pull-right"><strong>Products:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span> </span></p>

                     </div>
                    </div> <!--end of text content -->     
                    </div>
                </div>  

                
        
             </div><!--nio margin row end-->
            <div class="col-md-12" style="padding-bottom:6%;">
                        <hr class="hr_border_bottom" style="margin-top:0px;">
                        <div class="pull-right">
                                <?php $this->load->view($paginate_page); ?>
                        </div>    
                </div>


        </div><!--seller-->


    
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
