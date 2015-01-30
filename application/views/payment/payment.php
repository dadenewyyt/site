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


.main-nav nav{
background-color: white;
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

    <div class="row row-1 main-nav">

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
<style type="text/css">
  .hr_border {
border-top: 2px dotted #818181;

}
.left-menu{
border: 1px solid #e5e5e5;
border-radius: 3px;
background-color: white;
padding: 12px;
margin-bottom: 7%;
}
.left-choice-1 {
border: 1px solid #e5e5e5;
border-radius: 2px;
background-color: #f7f7f7;
margin-bottom: 2%;
height: 135px;
width: 140px;
background: url(../assets/images/payment/my_dadboard.png);
background-repeat: no-repeat;
}

.left-choice-2 {
border: 1px solid #e5e5e5;
border-radius: 2px;
background-color: #f7f7f7;
margin-bottom: 2%;
height: 135px;
width: 140px;
background: url(../assets/images/payment/my_orders.png);
background-repeat: no-repeat;
}

.left-choice-3 {
border: 1px solid #e5e5e5;
border-radius: 2px;
background-color: #f7f7f7;
margin-bottom: 2%;
height: 135px;
width: 140px;
background: url(../assets/images/payment/my_pursche.png);
background-repeat: no-repeat;
}

.left-choice {
margin-left: 14px;
border: 1px solid #e5e5e5;
border-radius: 2px;
background-color: #f7f7f7;
margin-bottom: 2%;
width: 14.667%;
}
.table_containers
{

background-color: white;
padding: 10px;
border: 1px solid #e6e6e6;
}
</style>

<div class="container">
          
          <div class="container" style="margin-top:0px;">
            <h3>Account Overview </h3>
            <HR class='hr_border'>
          </div>

        <!--dashboard image hodlers START-->


              <div class="col-md-2 left-choice left-menu pull-left">  

                    <div class="col-md-12" style="padding-left:0;"> 
                
                       <a href="#dashboard" data-toggle="tab" role="tab" aria-controls="dashboard">
                           <div class="col-md-12 left-choice-1"></div>  
                       </a>

              </div>

                <div class="col-md-12" style="padding-left:0;">
               
               
                <a href="#orders" data-toggle="tab" aria-controls="orders" role="tab">
                <div class="col-md-12 left-choice-2"></div>  
                </a>

                </div>

                <div class="col-md-12" style="padding-left:0;">
                 
                 <a href="#purchase" data-toggle="tab" role="tab" aria-control="purchases">
                <div class="col-md-12 left-choice-3"></div>  
                </a>

                </div>  
         
        </div><!--end of dashboard image hodlers-->

         


          <div class="col-md-10 ">
            
            <div class="tab-content "> 

            <!--dashboard table-->
              <div class="table_containers tab-pane active"  id="dashboard" >
              
          


        

        <div class="col-md-10">  

             <!-- Table -->
          <table class="table" style="border: 1px solid #e6e6e6;">
                     
             
          <thead>
            <tr>
            <th>#</th>
              <th>Cash Amount</th>
              <th>Since Last Login </th>
              <th>Today</th>
              <th>This Week</th>
              <th>Total Fees Paid</th>
              <th>Total Refund Amount</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>This Month</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Total Payment Owned</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Total Payment Paid</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>

             
          </tbody>
      
          </table>
          </div>
<div class="col-md-2">  

               <!-- Table -->
          <table class="table" style="border: 1px solid #e6e6e6;">
                     
             
          <thead>
            <tr>
          
              <th>Cash Amount</th>
              <th>Since Last Login </th>
              
            </tr>
          </thead>
          <tbody>
            <tr>
             
              <td>This Month</td>
              <td>Otto</td>
            
            </tr>
            <tr>
           
              <td>Total Payment Owned</td>
              <td>Thornton</td>
             
            </tr>
            <tr>
              
              <td>Total Payment Paid</td>
              <td>the Bird</td>
              
            </tr>

             <tr>
              
              <td>Total Fees Paid</td>
              <td>the Bird</td>
             
            </tr>

             <tr>
              
              <td>Total Refund Amount</td>
              <td>the Bird</td>
             
            </tr>
          </tbody>
      
          </table></div>
                 </div>
            <!-dashboard table end-->


              <div class="tab-pane"  id="orders">orders  </div>
              <div class="tab-pane"  id="purchase">pursches  </div>   

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
     * Send contro  ller
     * Recive response
     */
       var url =  "<?php echo site_url('welcome/subscribe');?>";
       subscribe_using_ajax(url);
  
</script>
</body>
</html>
