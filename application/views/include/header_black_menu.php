 <style type="text/css">
.col-md-1 a ,.col-md-2 a {
    color: white;
    font-weight: 800;
    font-size: 12px;
}


 </style>
 <div class='row row1'>
        <div class="container">
            <div class="col-md-2 col-left-border">
                <b>Hi</b> <a href="<?php echo base_url('user/login');?>">Sign In</a> or <a href="<?php echo base_url('signup');?>">Register</a>
            </div>
            <div class="col-md-1 col-left-border">
                <strong><a href="<?php echo base_url('buy');?>">Shop</a></strong>
            </div>
            <div class="col-md-1 col-left-border">
                <strong><a href="<?php echo base_url('sell');?>">Sell</a></strong>
            </div>
            <div class="col-md-1 col-left-border">
                <strong><a href="<?php echo base_url('bid');?>">Bid</a></strong>
            </div>
            <div class="col-md-2 col-md-offset-3 col-left-border" style="text-align:right;">
                My Account
            </div>

            <div class="col-md-1 col-left-border ">
                Checkout
            </div>
            <div class="col-md-1 col-left-border">
                <a href="#">Login</a>
            </div>

        </div>

    </div>

    <div class="row row2 paddings">

        <div class="container">
            <div class="col-md-2" >
                <div class='shopping_cart'>
                    <small style='padding-right:5px;font-size:1.3em;color:grey;'>Cart/ $ 0.00</small>
                    <span class="glyphicon glyphicon-shopping-cart" ></span>
                    <sup class="badge">0</sup>
                </div>
            </div>

            <div class="col-md-3 col-md-offset-3 ">
                <a href="<?php echo base_url('welcome/home'); ?>"><img src="<?php echo base_url()."assets/images/logo_home.jpg";?>"/></a>
            </div>

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

    </div>