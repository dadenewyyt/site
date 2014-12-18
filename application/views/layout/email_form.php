<!--
<form class="form-inline" role="form">

<input type="text" class="form-control" width='400px;' placeholder="Enter email . . .">

 <input type="button" value="Sign Up" class="btn-primary .btn-block btn-sm">

 </form>

-->

<?php
$form_attributes_data = array('class' =>'form-inline', 'id' => 'subscribe_form');
$form_email_input_data = array(
    'name'        => 'subscribe_email_input',
    'id'          => 'subscribe_email_input',
    'class'       =>'form-control input_class',
    'placeholder' => 'Enter email . . .'
   
);
$form_submit_button_data = array(
            'name'        => 'signup',
            'id'          => 'signup',
            'value'       => 'Sign Up',
            'class'       => 'btn-primary .btn-block btn-sm'
        );

echo form_open('welcome/subscribe',$form_attributes_data);
echo form_input($form_email_input_data);

echo form_button($form_submit_button_data, 'Sign Up');
echo form_close();
?>


