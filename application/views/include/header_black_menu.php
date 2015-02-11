<div class="row">
<style type="text/css">
.navbar-topmenu.navbar-inverse .navbar-text {
color: #ffffff;
font-size: 13px;
text-transform: capitalize;
}
.navbar-topmenu {
font-family: sans-serif;
font-weight: 700;
font-size: small;
color:#ffffff;
}

.navbar-topmenu.navbar-inverse .navbar-nav>li>a {
color: #FFFFFF;
}

.navbar-dropmenu .dropdown-menu {
background-color: #2d2d2d;;
}

.navbar-topmenu .navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:hover, .navbar-inverse .navbar-nav>.open>a:focus {
color: #fff;
 background-color: none;
}

.navbar-topmenu .dropdown-menu>li>a:hover, .dropdown-menu>li>a:focus {
color: #FFFFFF;
text-decoration: none;
background-color: #226da0;
}
.navbar-dropmenu .dropdown-menu>li>a {
display: block;
padding: 6px 20px;
clear: both;
font-weight: 700;
line-height: 1.42857143;
color: #FFFFFF;
font-size: 12px;
white-space: nowrap;
}
.navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:hover, .navbar-inverse .navbar-nav>.open>a:focus {
color: #fff;
background-color: #2d2d2d;
}
.navbar-topmenu .dropdown-menu .divider {
height: 1px;
margin: 3px 0;
overflow: hidden;
 background-color: #2d2d2d; 
}


.navbar-topmenu .navbar-nav li{
    position: relative
}
.navbar-topmenu .navbar-nav li:not(:last-child):after{
    content: '';
    position: absolute;
    right: -2px;
    width:1px;
    height: 40%;
    top: 30%;
    background: #808080;
}



.shopping_cart .glyphicon {
font-size: 16px;
color: #ffffff;
}
</style>
<nav class="navbar-topmenu navbar navbar-inverse navbar-fixed-top" >
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="">
        <?php 
              $logged_in = (bool) $this->session->userdata('logged_in');
              $uname = $this->session->userdata('username'); 
              $profile_fname = $this->session->userdata('profile_fname'); 
        ?>
            <?php if($logged_in===TRUE): ?>
                   <p class="navbar-text greeting-text">
                    Welcome &nbsp;<span style="color:#2a78ac;">
                   <?php echo ucfirst(strtolower($profile_fname));?> </span>!!
                   </p>
            <?php else: ?>
               <p class="navbar-text greeting-text">
                    Hi &nbsp;<span style="color:#2a78ac;">
                    <a href="<?php echo base_url('users/login');?>">Sigin In</a></span>
                    Or <span style="color:#2a78ac;">
                    <a href="<?php echo base_url('signup');?>">Register</a></span>
                   </p>
            <?php  endif ?>
        <span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo base_url('buy');?>">Shop</a></li>
        <li><a href="<?php echo base_url('sell');?>">Sell</a></li>
        <li><a href="<?php echo base_url('bid');?>">Bid</a></li>
       
      </ul>
     
      <ul class="nav navbar-nav navbar-right navbar-dropmenu">
      <li>
       <div class='shopping_cart'>
                    <small style='font-weight: 600;
font-size: 14px;'>Cart/ $ 0.00</small>
                    <span class="glyphicon glyphicon-shopping-cart" style='color: #ffffff;
'></span> 
                    <sup class="badge">0</sup>
                </div>
                </li>
        <li><a href="#">My Account</a></li>
         <li><a href="#">Checkout</a></li>
        
            <?php if($logged_in===TRUE): ?>
       
                <li class="dropdown navbar-dropmenu ">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Settings <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#"><i class='glyphicon glyphicon-cog'></i>&nbsp;My Account</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class='glyphicon glyphicon-user'></i>&nbsp;Edit Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class='glyphicon glyphicon-shopping-cart'></i>&nbsp;Edit Store</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url('users/logout');?>"><i class='glyphicon glyphicon-off'></i>&nbsp;Logout</a></li>
                  </ul>
                </li>
           <?php else: ?>
            <li class=""><a href="<?php echo base_url('users/login');?>">Login</a></li>
          <?php  endif ?>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
