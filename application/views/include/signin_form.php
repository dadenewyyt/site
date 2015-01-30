 <style type="text/css">
.sign-in-form .btn-sign-in{
	background-color: #2772a6;
	color: white;
	text-transform: uppercase;

}
.sign-in-form .btn:hover, .btn:focus, .btn.focus {
	background-color: #2772a6;
	color: white;
}
.sign-in-form .btn {
	background-color: #2772a6;
	font-weight: 800;
	font-size: large;
}
.sign-in-form .form-control{
background-color: #f2f2f2;
}
 </style>

 <div class="sign-in-form">
	 <h3>Sign in to My Account</h3>
	<br/>

     <?php if (isset($message)): ?>
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

     <?php

	  $attributes = array('class' => 'form', 'id' => 'signin');
	  echo form_open('users/signin', $attributes);
      ?>

	      <div class="form-group">
	          <label for="identity">Email or User ID</label>
	          <input type="input" class="form-control" id="identity"  name="identity" placeholder="">
	      </div>

	       <div class="form-group">
	          <label for="Password">Password</label>
	          <input type="password" class="form-control" id="password" name="password" placeholder="">
	          <p class="help-block"><a href="#"><strong>Forgot Password?</strong></a>.</p>
	      </div>
	      <div class="checkbox">
	      	<label>
	      	<?php 
	      	echo form_checkbox('remember', '1', FALSE, 'id="remember"');
	      	?>
             <strong>Stay Signed in</strong>
	      	<p class="help-block">
	      	 If this is a public or shared device, uncheck and sign out 
	      	 where you’re done to protect your account. <a href="#">Learn More</a>
	      	 </p>
	      	</label>
	      </div>
	   
	    
	  <?php  
      
      $form_submit_button_data = array(
                        'name'        => 'signin',
                        'id'          => 'signin',
                        'type'        => 'submit',
                        'class'       => 'btn btn-default pull-left btn-sign-in',
                        'tabindex'    => '10'
                    );
       echo form_button($form_submit_button_data, 'SIGN IN');
      ?>
	  <?php  echo form_close();  ?>
</div>