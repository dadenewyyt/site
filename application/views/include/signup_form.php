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

</style>
<div id="singup" class="col-md-3 col-md-offset-3 thumbnail " style="background-color:#ffffff;border-top:6px solid black;" >
        <h5>Register with MadeByUs4U.com Today!</h5>
        <hr style="padding-bottom:2%;">

     <?php if (isset($this->message)): ?>
        <?php if ($this->message['type'] == 'error'):?>
            <!--display errors-->
             <div class="alert alert alert-error" >
                 <a href="#" class="close" data-dismiss="alert">×</a>
                 <strong>Warning!</strong> <?php echo $this->message['message'];?>.
             </div>
          <!-- <div class="errorMessage"></div> -->
        <?php elseif ($this->message['type'] == 'info'):?>
            <!--display errors-->
             <div class="alert alert-info" >
                 <a href="#" class="close" data-dismiss="alert">×</a>
                 <strong>Warning!</strong> <?php echo $this->message['message'];?>.
             </div>
         <?php elseif ($this->message['type'] == 'success'): ?>
             <div class="alert alert-success" >
                 <a href="#" class="close" data-dismiss="alert">×</a>
                 <strong>Warning!</strong> <?php echo $this->message['message'];?>.
             </div>
        <?php endif; ?>
    <?php endif; ?>




      <div class="col-md-6" style="background-color:white;">

              <div class="form-group">
                <label for="exampleInputEmail1">First Name</label>
                <input type="text" class="form-control input-sm" id="firstname" name="firstname">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email Address</label>
                <input type="email" class="form-control input-sm" id="exampleInputEmail1" name="email" placeholder="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">UserName</label>
                <input type="text" class="form-control input-sm" id="username" name="username" placeholder="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" class="form-control" id="exampleInputEmail1" name="password" placeholder="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">City</label>
                <input type="text" class="form-control input-sm" id="city"  name="city" placeholder="">
              </div>
              <div class="form-group">
               <label for="exampleInputEmail1">Zip /Postal code</label>
               <input type="text" class="form-control input-sm"  name="zipcode" id="zipcosde" placeholder="">
            </div>
  </div>

    <div class="col-md-6" style="background-color:white;">

              <div class="form-group">
                <label for="exampleInputEmail1">Last Name</label>
                <input type="text" class="form-control input-sm" id="lastname" name="lastname" >
              </div>
            <div class="form-group">
                <label for="exampleInputEmail1" style="margin-top:120px;">Confirm Password</label>
                <input type="password" class="form-control input-sm"  name="confirm" id="confirm_password" placeholder="">
              </div>
              <div class="form-group">
               <label for="exampleInputEmail1">State</label>

                  <?= form_dropdown('state', array_merge(array(''=>'Select State'), $states) ,'','class="form-control"' ) ;?>

            </div>

    </div>


    <div class="col-md-7 col-md-offset-4" style="margin-top:5%;">

        <?php 

            $form_submit_button_data = array(
                        'name'        => 'signup',
                        'id'          => 'signup',
                        'type'        => 'submit',
                        'class'       => 'btn btn-default btn-primary'
                    );
            echo form_button($form_submit_button_data, 'REGISTER NOW');
            
        ?>


      <p><small>or login with</small> <span><img src="../assets/images/fb.png" height="15" width="15" /><a href="#">Facebook</a></span></p>

    </div>
    <?php echo  form_close();?>
    </div>