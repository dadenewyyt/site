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
	  <form>
	      <div class="form-group">
	          <label for="email_user_id">Email or User ID</label>
	          <input type="email" class="form-control" id="email_user_id" placeholder="">
	      </div>

	       <div class="form-group">
	          <label for="Password">Password</label>
	          <input type="password" class="form-control" id="password" placeholder="">
	          <p class="help-block"><a href="#"><strong>Forgot Password?</strong></a>.</p>
	      </div>
	      <div class="checkbox">
	      	<label>
	      	<input type="checkbox"> <strong>Stay Signed in</strong>
	      	<p class="help-block">
	      	 If this is a public or shared device, uncheck and sign out 
	      	  where you’re done to protect your account. <a href="#">Learn More</a>
	      	 </p>
	      	</label>
	      </div>
	     <button type="submit" class="btn btn-default pull-left btn-sign-in">SIGN IN</button>
	  </form>
</div>