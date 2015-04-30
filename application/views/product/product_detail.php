<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> Welcome to MadebyUs4u.com | Product Details </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href=<?php echo base_url()."assets/plugins/bootstrap/css/bootstrap.min.css";?> rel="stylesheet">
    <link href=<?php echo base_url()."assets/css/common.css";?> rel="stylesheet">
    <link href=<?php echo base_url()."assets/css/product.css";?> rel="stylesheet">

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


    <div class="col-md-7" style="">
    
      <div class="col-md-9 col-md-large-image" style="">
        <div class="thumbnail rec thmbnail-large">

            <?php 

            $image_found = isset($product['image'])?true:false ;
            $image_many = is_array($product);

            ?>

              <img class="img-thumbnail img-responsive" src="<?php echo $product['image'][0];?>" data-holder-rendered="true"  width="100%" style="margin-left:0px;height:400px">       
        </div>
      </div>

     <div class="col-md-3 col-md-small-images">
       <img class="img-thumbnail img-responsive small-images" src="<?php echo  !empty($product['image'][1])? $product['image'][1]:base_url().'/uploads/no-photo.jpg';?>" data-holder-rendered="true"  style="height: 100px;width:100%;"> 
       <img class="img-thumbnail img-responsive small-images" src="<?php echo  !empty($product['image'][2])? $product['image'][2]:base_url().'/uploads/no-photo.jpg';?>" data-holder-rendered="true"  style="height: 100px;width:100%;">       
       <img class="img-thumbnail img-responsive small-images" src="<?php echo  !empty($product['image'][3])? $product['image'][3]:base_url().'/uploads/no-photo.jpg';?>" data-holder-rendered="true"  style="height: 100px;width:100%;">   
       <img class="img-thumbnail img-responsive small-images" src="<?php echo  !empty($product['image'][4])? $product['image'][4]:base_url().'/uploads/no-photo.jpg';?>" data-holder-rendered="true"  style="height:100px;width:100%;">                       
    </div>

    </div>

    <div class="col-md-5">
          
          <h3><?php echo $product['product_name'];?></h3>
            <p style="margin-top:-2px;margin-bottom:4px;">
            <span class='seller_name'>
            <i class='glyphicon glyphicon-user'>
            <b style='padding-left:4px;color: #A8ABAD;'>By <?php echo $product['seller_name'];?></b>
            </i>
            </span>|            
            <span class='rating_class'>
            <i class='glyphicon glyphicon-star'></i>
            <i class='glyphicon glyphicon-star'></i>
            <i class='glyphicon glyphicon-star'></i>
            <i class='glyphicon glyphicon-star-empty'></i>
            <i class='glyphicon glyphicon-star-empty'></i>
            </span>
        </p>
        <hr class="hr_border">

        <p> <?php echo $product['desc'];?> 
        </p>
        <hr class="hr_line">
      
          <h4 style="color:#515151;">
          <strong>Latest Bid:</strong> 
          <span class="price_1">$ <?php echo $product['price'];?></span>
          <span class="timeleft"><strong style="color: #a8a8a8;">Time Left:</strong>
          <span class="left_text">00:04:14</span> </span> 
          </h4>

        <hr class="hr_line">

        <h4 style="color:#266e9e;">
        <strong>Next Bid:</strong> 
        <span class="price_1">$ 279.99</span>
        <span class="timeleft"><strong style="color: #a8a8a8;">Number of Bids:</strong>
        <span class="left_text">22</span> </span> 
        </h4>

          <hr class="hr_line">
          <div class="buttons" style="padding:10px;">
          <button class="btn btn-primary pull-left btn-lg btn-bid" style="width: 45%;">
          <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
          Bid Now
          </button>
          <button class="btn btn-primary btn_black btn-lg" style="margin-left:20px;">
            <span class="glyphicon glyphicon glyphicon-heart" aria-hidden="true"></span>
          Like</button>
          <button class="btn btn-primary btn_black btn-lg pull-right" style="margin-left:20px;">
          <span class="glyphicon glyphicon glyphicon-star" aria-hidden="true"></span>
          Rate</button>
          </div>
          <p><h5>Share this product</h5> <div class="addthis_native_toolbox"></div></p>
          <!-- Go to www.addthis.com/dashboard to customize your tools -->
         
    
    </div>
  
  <div class="col-md-12 col-md-12-2" style="margin-top:3%;border:1px solid #eaeaea;background-color:white;padding:8px;">
  <div class="col-md-4">
       <div class="col-sm-6">
        <p class="Numbers"> <img src="<?php echo base_url()."assets/images/products/icon01.png";?>">&nbsp;500+</p>
        </div>
        <div class="col-sm-6"><span class="short_text">Customers bought
        this product</span>
      </div>
  </div>
  <div class="col-md-4">

    <div class="col-sm-6">
          <p class="Numbers"> <img src="<?php echo base_url()."assets/images/products/icon02.png";?>">&nbsp;97%</p>
          </div>
          <div class="col-sm-6"><span class="short_text">people Recommend
          this product</span>
        </div>
    </div>

    <div class="col-md-4">
        <div class="col-sm-6">
          <p class="Numbers"> <img src="<?php echo base_url()."assets/images/products/icon03.png";?>">&nbsp;4/5</p>
        </div>
          <div class="col-sm-6"><span class="short_text">Is average rating
        for this product</span>
        </div>

    </div>
</div>

<!--main containet-->
    <div class="col-md-9">
    
    <h3 style="color:#595959;font-weight:600;">Additional Details</h3>
    <hr class="hr_border" >
        <div class="main_content_text">
        <p>
        <?php echo $product['product_details'] ;?>
        </p>
        
        </div>

     <!--view-comment-=-->
     <?php 
          $data['product'] = $product;
      ?>

     <?php $this->load->view($comment_view,$data); ?>
         


     </div><!--main-end=-->
        
     <!--left container--listedby-->
      <div class="col-md-3" style="padding:10px;border:1px solid #ececec;background-color:white;">
           
          <?php 
          $data['product'] = $product;
          $this->load->view($product_user_details,$data); ?>

          <?php $this->load->view($product_other_details); ?>

    </div><!--left-end-->

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
     * Receive response
     */
       var url =  "<?php echo site_url('welcome/subscribe');?>";
       subscribe_using_ajax(url);
  
</script>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-54b38f196f4ba42f" async="async"></script>
</body>
</html>
