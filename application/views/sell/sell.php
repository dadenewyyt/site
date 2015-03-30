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
    <link href=<?php echo base_url()."assets/css/sell.css";?> rel="stylesheet">

</head>
<body>

  <?php $this->load->view($notification_bar); ?>

  <header>

     <?php $this->load->view($header_black_menu); ?>

     <?php $this->load->view($header_logo_white); ?>


  </header>
<!-- Responsive design
================================================== -->
<section id="responsive" style="background-color:#f5f5f5;">

   <?php $this->load->view($main_menu); ?>


<div class="container">
          
             <div class="container-pattern_image"> 
                <div class="col-md pattern_holder_div">  
                 <div class="pattern">
                   <p>
                   <img src="<?php echo base_url()."assets/images/seller_made_icon.png";?>">
                   <span class="become_seller_text">Become a <span class="blue_color">SELLER</span> on <span class="blue_color">MadeByUs4u.com</span> today!</span>&nbsp; <small class="small_text">Once you create your free account you will gain instant access to all of our Sellers features!</small>
                   <span class='buy_btn'><a href="<?php echo base_url('sell/become_seller');?>" class="btn btn-primary" role="button">Become a Seller!</a></span>
                   </p>

                 </div>
                </div>
                </div> 
          
                  
             
               <div class="col-md-12 showing_text">
     
                    <div class="">
                      
                      <span class="showing">Showing <span class="small_text">all Sellers</span> on MBU4U !</span>

                      <span class='pull-right showing-item'>SELLERS PER PAGE:&nbsp; (<span class='element_count'>201,201</span>)&nbsp;&nbsp;<a href="#">12</a>&nbsp;<a href="#">15</a>&nbsp;<a href="#">18</a>&nbsp;<a href="#">21</a></span>
                    
                    </div>
            
            </div>
             

     <hr class="hr_border" style="width:100%;">

            <div class="sellers">                 
          
          <div class="row">
                                     
                   <div class="col-sm-2 col-md-2 col-md-2-person">

                    <div class="thumbnail rec">
                        <a href="<?php echo base_url('sell/sellers/1');?>"><img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/images/users/person1.png";?>" data-holder-rendered="true" style="height: 150px;display: block;"></a>
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
                         <a href="<?php echo base_url('sell/sellers/1');?>"><img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/images/users/person2.png";?>" data-holder-rendered="true" style="height: 150px;display: block;"></a>
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
                         <a href="<?php echo base_url('sell/sellers/1');?>"><img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/images/users/person3.png";?>" data-holder-rendered="true" style="height: 150px;display: block;"></a>
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
                        <a href="<?php echo base_url('sell/sellers/1');?>"> <img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/images/users/person4.png";?>" data-holder-rendered="true" style="height: 150px;display: block;"></a>
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
                         <a href="<?php echo base_url('sell/sellers/1');?>"><img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/images/users/person5.png";?>" data-holder-rendered="true" style="height: 150px;display: block;"></a>
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
                         <a href="<?php echo base_url('sell/sellers/1');?>"><img data-src="holder.js/100%x140" alt="100%x200"  class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/images/users/person1.png";?>" data-holder-rendered="true" style="height: 150px;display: block;"></a>
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
