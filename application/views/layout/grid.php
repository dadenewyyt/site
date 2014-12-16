<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to MadeByUs4U.com | Home </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

   

    <!-- Le styles -->
    <link href=<?php echo base_url()."assets/css/bootstrap.min.css";?> rel="stylesheet">
    <link href=<?php echo base_url()."assets/css/bootstrap-responsive.css";?> rel="stylesheet">
    <link href=<?php echo base_url()."assets/css/jambo.css";?> rel="stylesheet">
     <link rel="stylesheet" href=<?php echo base_url()."/assets/plugins/font-awesome/css/font-awesome.min.css";?>>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src=<?php echo base_url()."assets/js/html5shiv.js";?>></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href=<?php echo base_url()."assets/ico/apple-touch-icon-114-precomposed.png";?>>
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href=<?php echo base_url()."assets/ico/apple-touch-icon-72-precomposed.png";?>>
    <link rel="apple-touch-icon-precomposed" href=<?php echo base_url()."assets/ico/apple-touch-icon-57-precomposed.png";?>>
    <link rel="shortcut icon" href=<?php echo base_url()."assets/ico/favicon.png";?>>
</head>
<body>
<style>
@import url(http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,300,400,700);

body {
   padding-top: 0px;
   padding-bottom: 0px;
}
.container {
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }
.header {
    margin: 0;
    background-color: '';
    width: 100%;
    height: 86px;


}
.logo {
height: inherit;
margin-left: 300px;
padding-top: 14px;
padding-bottom: 15px;
float: left;

}

.logo .img {
width:188px;
height: 50px;


}


.header_text {
margin-left: 400px;
position: relative;
}

.large_image_body {
    height: 525px;
    width: 100%;
    float: left;
    background-image: url('assets/images/left.png');
    background-repeat: repeat-x;
    vertical-align: top;
}


.large_body_image {
    background-image: url('assets/images/mbu4u.png');
    height: 455px;
    width: 100%;
    background-attachment: content;
    background-size: 100%;
    background-clip: body;
    background-repeat: no-repeat;
    overflow: hidden

}



h1 {
    font-family: 'Open Sans', sans-serif;
    font-size: 45px;
  
}

.seachbox {
     position: absolute;
    left: 404px;
    padding-top: 45px;
    height: auto;
   
}
.seachbox h1 {
    margin-bottom: -10px;
    color:white;
    text-shadow: 5px 5px 5px #346893;
}
.seachbox h3 {
     font-family: 'Open Sans', sans-serif;
     font-size: 20px;
     color: white;
     font-weight: 500;
}
h3 {
     font-family: 'Open Sans', sans-serif;
     font-size: 25px;
}

.top_text {
padding-bottom: 15px;
}

.signup h1 {
    color:#222222;
   margin-left:85px;

}

.signup h3 {
 margin-left: 129px;
}

.signup {
    padding-bottom: 25px
}

.email_subscriber  {
    padding: 7px;
    margin-top:12px;
    box-shadow: 1px 55px 1px rgba(0, 0, 0, 0.3400) inset;
    
}

.email_subscriber .form-control {

  width: 388px;
margin-left: 4px;
border-radius: 1px;
height: 27px;

}
.email_subscriber .form-control  {
  height: 20;
}
.btn-primary{

    width: 120px;
    height: 30px;
    text-align: center;
    color:white; 
    background-color: #292929;
    border-color: #292929;
    padding: 2px;
    margin-left: 4px;
    background-color: #292929;
    border-color: #292929;
    font-weight: bold;
    font-size: 15px;
    letter-spacing: 0.5px;
}
.padding-class {

    height:56px;
}


.asd {
    background-image:url('assets/images/shop_header_image.png');
    background-repeat: no-repeat;
    position: static;
}

.image_header {
    text-align: center;
    padding-bottom: 15px;
    top:0;

} 

.bottom_three_modules h3 {


}


.tablet_image_section {

margin-left: 271px;
width:auto;

}

/** This for notifcation message only ***/

 #message {
        position: absolute;
        z-index: 6001;
        top: 0;
        left: 0;
        right: 0;
        background: #fde073;
        text-align: center;
        line-height: 2.5;
        overflow: hidden; 
        -webkit-box-shadow: 0 0 5px black;
        -moz-box-shadow:    0 0 5px black;
        box-shadow:         0 0 5px black;
    }
    .cssanimations.csstransforms #message {
        -webkit-transform: translateY(-50px);
        -webkit-animation: slideDown 2.5s 1.0s 1 ease forwards;
        -moz-transform:    translateY(-50px);
        -moz-animation:    slideDown 2.5s 1.0s 1 ease forwards;
    }

    #close {
      position: absolute;
      right: 10px;
      top: 9px;
      text-indent: -9999px;
      background: url(images/close.png);
      height: 16px;
      width: 16px;
      cursor: pointer;
    }
    .cssanimations.csstransforms #close {
      display: none;
    }
    
    @-webkit-keyframes slideDown {
        0%, 100% { -webkit-transform: translateY(-50px); }
        10%, 90% { -webkit-transform: translateY(0px); }
    }
    @-moz-keyframes slideDown {
        0%, 100% { -moz-transform: translateY(-50px); }
        10%, 90% { -moz-transform: translateY(0px); }
    }
    h4 {
      font-size: 18px;
text-align: center;
padding-top: 15px;
padding-bottom: 5px;
    }

  .header_text {
float:right;
margin-top:0;
    }
.header_text b {
  color: #1a689f;
   font-family: 'Open Sans', sans-serif;
}

}
</style>

 <div id="message" style="display:none;">
        You smell good. <a id="close">[close]</a>
    </div>


 <header class='header'>

    <div class='logo'>
        <img src="assets/images/logo.jpg"/>
        <div class='header_text' ><h4> The <b>New Way</b> to  <b>Shop</b> Online!</h4> </div>
   </div>

   
</header>

<div class="large_body_image">

        <div class='seachbox'>

            <div class='top_text'>
            <h1>Selling online <b>made Easy</b></h1>
            <h3>Join our mailing list & get notified upon our offical launch!</h3>
            </div>

            <div class="email_subscriber">

                <form class="form-inline" role="form">
                   
                    <input type="text" class="form-control" width='400px;' placeholder="Enter email . . .">

                    <input type="button" value="Sign Up" class="btn-primary .btn-block btn-sm">

                </form> 
            </div>

        </div>

  </div>

<div class="container">

    <div class="row">
         
         <div class="col-md-12 padding-class"  ></div>

             <div class="row">

                <div class="col-md-12 signup">

                   <h1>Sign up <span style='color:#186eaa;'>today</span> for early access.</h1>
                   <h3>Setup your own personal store within a minutes.</h3>
          
               </div>
         </div>

     <div class="row">
          
              <div class="col-md-3 bottom_three_modules"> 

                <div class='image_header'><img src="assets/images/man_header_image.png" /> </div>
                <h4> Build your profile </h4>
                
                <p style="text-align:center; display: flex;"> 
            Build your personal profile, including products ,stores, photos,videos and more! 
            Become freinds with your buyers and Live Chat with your customers directly.
            </p>

              </div>

 
       <div class="col-md-4 bottom_three_modules">

             <div class='image_header'><img src="assets/images/shop_header_image.png" /> </div>
           
            <h4>Create your custome store</h4>

            <p >
            Upload and Sell! It's that easy,create your own custom store 
            on <a href="http://www.madebyus4u.com"> MadeByUs4U.com.
            </a>Allowing user the ability to purchase from your profile. 
            </p>
       

    </div>
          <div class="col-md-5 ">
          <img src="assets/images/mbu4u_laptop_bottom.png" />
          </div>

  </div>
  </div>

</div>
<div clas='row' style="background-color: #f5f5f5;margin:0;overflow:hidden;">
  


 <div class="row">

  <div class="col-lg-12 padding-class"></div>
</div>

   <div class="row">

     <div class="col-xs-4 tablet_image_section" >
          <img src="assets/images/tablet_image2.png"/>
    </div>  

    <div class="col-md-2 " > 

                <div class='image_header'><img src="assets/images/lock.png" /> </div>
                <h4> Build your profile </h4>
                
                <p style="text-align:center; display: flex;"> 
            Build your personal profile , including products,stores, photos,videos and more! 
            Become freinds with your buyers and Live Chat with your customers directly.
            </p>

              </div>


              <div class="col-md-2 "> 

                <div class='image_header'><img src="assets/images/payment.png" /> </div>
                <h4> Build your profile </h4>
                
                <p  style="text-align:center; display: flex;"> 
            Build your personal profile,including products,stores, photos,videos and more! 
            Become freinds with your buyers and Live Chat with your customers directly.
            </p>

              </div>

            

               <div class="col-md-6 padding-class"></div>


              <div class="col-md-2 "> 

                <div class='image_header'><img src="assets/images/heart.png" /> </div>
                <h4> Build your profile </h4>
                
                <p style="text-align:center; display: flex;"> 
            Build your personal profile,including products,stores, photos,videos and more! 
            Become freinds with your buyers and Live Chat with your customers directly.
            </p>

              </div>
              <div class="col-md-2 "> 

                <div class='image_header'><img src="assets/images/rss.png" /> </div>
                <h4> Build your profile </h4>
                
                <p style="text-align:center; display: flex;"> 
            Build your personal profile,including products,stores, photos,videos and more! 
            Become freinds with your buyers and Live Chat with your customers directly.
            </p>

              </div>

             <div class="col-sm-6 padding-class"></div>  
     
  </div>



</div>
<footer class="footer">
<div clas='row'>
<div class='container' style="margin-left:260px;">

            <p>© 2014-2015 MadeByUs4U Inc.</p>

</div>
</footer>
</div>
</div>
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

</body>

</html>
