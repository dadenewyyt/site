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
    <link href=<?php echo base_url()."assets/css/buy.css";?> rel="stylesheet">

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
    
     <!--load menu here -->
     <?php $this->load->view($main_menu); ?>

<div class="container">
   
            <div class="col-md-3 left-catag-twitt">
                <br/>
                 <div class="row row-newline">
                     <div class="col-md-2">
                         <img src="<?php echo base_url()."assets/images/bid/delivery.png"?>" height="200"/>
                     </div> 
                 </div>
 
                 <div class="row" style="margin-left:4px;text-align:LEFT;">
                 <?php $this->load->view($tweets_page,$data); ?>
                </div>
                <div class="row">
                <?php $this->load->view($video_page); ?>
          
                </div>
            
            </div>

               <div class="showings">

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
