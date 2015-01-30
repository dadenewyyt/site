<style type="text/css">
    .errorMessage {
      color:red;
      text-align: center;
      border: 1px solid red;
      font-weight: 500;
      font-size: 13px;
    }
    .infoMessage {
        color:blue;
        text-align: center;
        border: 1px solid grey;
    }
    .successMessage {
        color:green;
        text-align: center;
        border: 1px solid grey;
        font-weight: 500;
        font-size: 13px;
    } 
    .help-block {
      font-size: 11px;
    font-weight: 100;
    color: rgb(14, 83, 163);
    }

</style>

<?php

$form_attributes_data = array('class' =>'form', 'id' => 'singup_form');

$form_fname_input_data = array(
    'name'        => 'first_name',
    'id'          => 'first_name',
    'class'       => 'form-control input-sm'
);

$form_lname_input_data = array(
    'name'        => 'lname',
    'id'          => 'lname',
    'type'        => 'password',
    'class'       => 'form-control input-sm'
);
echo form_open('signup/register',$form_attributes_data);
?>

<div id="singup" class="col-md-3 col-md-offset-3 thumbnail " style="background-color:#ffffff;border-top:6px solid black;" >
        <h5>Register with MadeByUs4U.com Today!</h5>
        <hr style="padding-bottom:10px;">

     <?php

     if (isset($message)): ?>
        <?php if ($message['type'] == 'error'):?>
            <!--display errors-->
             <div class="alert alert-danger" style="font-size: 10px;" >
                 <a href="#" class="close" data-dismiss="alert">×</a>
                 <strong>Error!</strong> <?php echo $message['message'];?>.
             </div>
          <!-- <div class="errorMessage"></div> -->
        <?php elseif ($message['type'] == 'info'):?>
            <!--display errors-->
             <div class="alert alert-info" >
                 <a href="#" class="close" data-dismiss="alert">×</a>
                 <strong>Info!</strong> <?php echo $message['message'];?>.
             </div>
         <?php elseif ($message['type'] == 'success'): ?>
             <div class="alert alert-success" role='alert'>
                 <a href="#" class="close" data-dismiss="alert">×</a>
                 <strong>Success!</strong> <?php echo $message['message'];?>.
             </div>
        <?php endif; ?>
    <?php endif; ?>




      <div class="col-md-6" style="background-color:white;">

              <div class="form-group">
                <label for="exampleInputEmail1">First Name</label>
                <input type="text" class="form-control input-sm" id="firstname" name="firstname" tabindex="1">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email Address</label>
                <input type="email" class="form-control input-sm" id="exampleInputEmail1" name="email" placeholder=""  tabindex="2">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">UserName</label>
                <input type="text" class="form-control input-sm" id="username" name="username" placeholder=""  tabindex="3">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" class="form-control" id="exampleInputEmail1" name="password" placeholder=""  tabindex="4">
              <span id="helpBlock" class="help-block">Minmum Password Length is 8.</span>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">City</label>
                <input type="text" class="form-control input-sm" id="city"  name="city" placeholder=""  tabindex="6">
              </div>
              <div class="form-group">
               <label for="exampleInputEmail1">Zip /Postal code</label>
               <input type="text" class="form-control input-sm"  name="zipcode" id="zipcosde" placeholder=""  tabindex="8">
            </div>
  </div>

    <div class="col-md-6" style="background-color:white;">

              <div class="form-group">
                <label for="exampleInputEmail1">Last Name</label>
                <input type="text" class="form-control input-sm" id="lastname" name="lastname"  tabindex="1" tab >
              </div>
            <div class="form-group">
                <label for="exampleInputEmail1" style="margin-top:120px;">Confirm Password</label>
                <input type="password" class="form-control input-sm"  name="confirm" id="confirm_password" placeholder=""  tabindex="5">
              </div>
              <div class="form-group">
               <label for="exampleInputEmail1">State</label>

                  <?= form_dropdown('state', array_merge(array(''=>'Select State'), $states) ,'','class="form-control"  tabindex="7"' ) ;?>

            </div>

    </div>


    <div class="col-md-7 col-md-offset-4" style="margin-top:5%;">

        <?php 

            $form_submit_button_data = array(
                        'name'        => 'register',
                        'id'          => 'register',
                        'type'        => 'submit',
                        'class'       => 'btn btn-default btn-primary',
                        'tabindex'    => '10'
                    );
            echo form_button($form_submit_button_data, 'REGISTER NOW');
            
        ?>


      <p><small>or login with</small> <span><img src=<?php echo base_url()."assets/images/fb.png" ;?> height="15" width="15" /><a href="#">Facebook</a></span></p>

    </div>
    <?php echo  form_close();?>
    </div>
