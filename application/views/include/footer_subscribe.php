<style type="text/css">

    .email_subscribe .form-control {
        border-radius: 2px;
        width: 50%;
    }

    .email_subscribe .btn{
       margin-left: 1%;
      border:2px solid #3498db;
      border-radius: 2px;
      font-weight: 500;
      color: #3498db;
      text-transform: uppercase;
      font-size: 13px;

      padding: 6px 24px;


    }
 .need_help  .btn {
    padding: 8px 25px;
    border-radius: 2px;
    background-color: #2676af;
    font-size: 13px;
    color: white;
    text-transform: uppercase;

}
.container-border {
    border-bottom:1px solid #dddddd;
    padding-bottom:1%;
}
.row-bottom-border {
    padding-bottom: 2%;
}
.row-footer-subscribe{
   background-color: white;
}
</style>
<div class="border" style="border-top:1px solid #e9e9e9;">
<div class="row row-footer-subscribe">

<div class="container container-border">

    <div class="col-md-4">
          <div class="text_content">
              <h3>Follow Us </h3> 
              <p><h3><small>Follow us on social networks</small></h3></p>
          </div>
          <div class='social_images'>
              <img src="<?php echo base_url()."assets/images/social/twitter.png";?>" height="40">
                <img src="<?php echo base_url()."assets/images/social/facebook.png";?>" height="40">
                  <img src="<?php echo base_url()."assets/images/social/google.png";?>" height="40">
                    <img src="<?php echo base_url()."assets/images/social/pin.png";?>" height="40">
                      <img src="<?php echo base_url()."assets/images/social/linkedin.png";?>" height="40">
          </div>
  </div>

    <div class="col-md-6">
        
        <div class="text_content">
                    <h3>Subscribe Us </h3> 
                  <p><h3><small>Get the latest updates & offers in your inbox</small></h3></p>
        </div>

        <!--<div class='email_subscribe'>
        <form class="form-inline">
        <div class="form-group">
                <label class="sr-only" for="exampleInputEmail2">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="">
              </div>
             
              <button type="submit" class="btn btn-default btn-lg">SUBSCRIBE</button>
            </form>
        </div> -->
   <div class='email_subscribe form-inline'>

    <?php
    $form_attributes_data = array('class' =>'form-inline', 'id' => 'subscribe_form');
    $form_email_input_data = array(
        'name'        => 'subscribe_email_input',
        'id'          => 'subscribe_email_input',
        'class'       =>'form-control',
        'placeholder' => ''
       
    );
    $form_submit_button_data = array(
                'name'        => 'btn_subscribe',
                'id'          => 'btn_subscribe',
                'value'       => 'SUBSCRIBE',
                'class'       => 'btn btn-default btn-lg'
            );

    echo form_open('welcome/subscribe',$form_attributes_data);
    echo form_input($form_email_input_data);

    echo form_button($form_submit_button_data, 'SUBSCRIBE');
    echo form_close();
    ?>
</div>

        
    </div>
    <div class="col-md-2">
     <div class="text_content">
            <h3>Need Help ? </h3> 
            <p><h3><small>Contact Us</small></h3></p>
        </div>
        <div class='need_help'>
           <button type="submit" class="btn btn-default btn-lg">CONTACT US</button>
        </div>
        
    </div>

</div>
</div>

<div class="row row-bottom-border row-footer-subscribe">
<div class="container container-border" style="padding-top:1%;">
    <div class="col-md-6 col-md-offset-3">
        <div class='finance_images'>
            <img src="<?php echo base_url()."assets/images/finance/ssl.png";?>" height="40">|
              <img src="<?php echo base_url()."assets/images/finance/visa.png";?>" height="36"> |
                <img src="<?php echo base_url()."assets/images/finance/master.png";?>" height="36">|
                  <img src="<?php echo base_url()."assets/images/finance/blue_log.png";?>" height="36">|
                    <img src="<?php echo base_url()."assets/images/finance/circle_logo.png";?>" height="36">|
                     <img src="<?php echo base_url()."assets/images/finance/emi_option.png";?>" height="36">|
              <img src="<?php echo base_url()."assets/images/finance/net_bank.png";?>" height="36">|

        </div>
    </div>   

</div>
</div>
</div>
