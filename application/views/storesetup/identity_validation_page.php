<div class="col-md-12 col-md-store-content">
    <div class="col-md-12 pull-left">
         <p>

           <?php if($tab_status): ?>
        
          <span class='tab_content_title'>You Have Validate Your Identity</span>  
       
          <?php endif; ?>

          <?php if(!$tab_status): ?>

         <span class='tab_content_title'>Enter Credit Card Info To Validate Your Identity</span>
         <p class='intro_table_text'>To ensure that the identitiy of our sellers match thier profile.We require that you verify your self with your credit card information</p>
        
         <?php endif; ?>

        </p>

    </div>

    <div class='row row-table-p col-md-12'>

             <!--ERROR MESSAGE-->
                 
              <style type="text/css">
              .error-message {
                margin-top: 1%;
         
              }
              </style>

              <div class="error-message col-md-12">  
                <?php $this->load->view($show_error_page,$data);?> 
              </div>

          <!--END OF ERROR MESSAGE-->

    <?php if (!$tab_status): ?>

        <div class='col-md-6 column_margin'><!--column1-->                                  
                
              <div class="col-md-10 col-md-offset-1">

                    <h4 class="heading">Credit Card Information</h4>

                   <?php

                   $attributes = array('class' => 'form', 'id' => 'store_setup');
                   echo form_open('store/process_payment', $attributes);
                   ?>

                    <div class="form-group">

                        <span class='required_star'>*</span>
                        <label class="control-label" for="x_card_num">Card Number</label>
                        <input type="text" class="form-control" size="15" name="x_card_num" id="x_card_num" placeholder="Debit/Credit Card Number">

                    </div>

                    <div class="form-group">

                        <span class='required_star'>*</span> 
                        <label class=" control-label" for="x_card_code">Card CVV</label>
                        <input type="text" class="form-control" size="4" name="x_card_code" id="x_card_code" placeholder="Security Code">

                    </div>

                    <div class="form-group">
                        <span class='required_star'>*</span>
                        <label class="control-label" for="card-holder-name">Name on Card</label>
                        <input type="text" class="form-control" name="fullname" id="card-holder-name"
                               value="<?= ucfirst(strtolower($fname)).' '.ucfirst(strtolower($lname));?>" readonly>

                    </div>

                 <h4 class="heading">Billing Address Information</h4>

                   <div class="form-group">

                        <span class='required_star'>*</span>
                        <label class="control-label" for="x_country">Country</label>

                            <?= form_dropdown('x_country', array_merge(
                            array(''=>'Select Country'), $country) ,
                            '','class="form-control"  tabindex="7"' ) ;
                            ?>

                    </div>
                    <div class="form-group">
                        
                        <span class='required_star'>*</span> 
                        <label class=" control-label" size="25" for="x_address_1">Address Line 1 </label>
                        <input type="text" class="form-control" name="x_address_1" id="x_address_1" placeholder="Address Line 1">

                    </div>

                    <div class="form-group">
                        
                        <span class='required_star'>*</span>
                        <label class="control-label" size="15" for="x_city">City</label>
                        <input type="text" class="form-control" name="x_city" id="x_city" placeholder="City">                
                 
                  </div>
                  

                 </div>

                </div><!--end of column 1-->

                <div class='col-md-5 column_margin' style="margin-top:71px;"><!--end of column 2-->
                  
                  <div class="form-group">
                 
                  <label class="col-sm-6 control-label" for="x_exp_month"> <span class='required_star'>*</span>Expiration Date</label>
                     <div class="col-sm-12">
                            <div class="row">
                              <div class="col-xs-6">
                                <select class="form-control col-sm-4" name="x_exp_month" id="x_exp_month">
                                  <option>Month</option>
                                  <option value="01">Jan (01)</option>
                                  <option value="02">Feb (02)</option>
                                  <option value="03">Mar (03)</option>
                                  <option value="04">Apr (04)</option>
                                  <option value="05">May (05)</option>
                                  <option value="06">June (06)</option>
                                  <option value="07">July (07)</option>
                                  <option value="08">Aug (08)</option>
                                  <option value="09">Sep (09)</option>
                                  <option value="10">Oct (10)</option>
                                  <option value="11">Nov (11)</option>
                                  <option value="12">Dec (12)</option>
                                </select>
                              </div>
                              <div class="col-xs-6">
                                <select class="form-control" name="x_exp_year" id="x_exp_year">
                                  <option value="13">2013</option>
                                  <option value="14">2014</option>
                                  <option value="15">2015</option>
                                  <option value="16">2016</option>
                                  <option value="17">2017</option>
                                  <option value="18">2018</option>
                                  <option value="19">2019</option>
                                  <option value="20">2020</option>
                                  <option value="21">2021</option>
                                  <option value="22">2022</option>
                                  <option value="23">2023</option>
                                </select>
                              </div>
                        </div>
                    </div>

                  </div>

                  <div class="form-group col-sm-12 " style="padding-top:90px;">

                      <span class='required_star'>*</span>
                       <label class=" control-label" for="x_phone">Phone Number</label>
                      <input type="text" class="form-control" name="x_phone" id="x_phone" 
                             placeholder="Phone Number">   

                   </div>

                  <div class="form-group col-sm-12 " style="padding-top:110px;">

                        <label class=" control-label" for="x_address_2">Address Line 2</label>
                        <input type="text" class="form-control" name="x_address_2" id="x_address_2" 
                               placeholder="Address Line 2">

                   </div>

                  <div class="form-group col-sm-6">
                        <span class='required_star'>*</span>
                        <label class=" control-label" for="x_state">State</label>
                      
                         <?= form_dropdown('x_state', array_merge(
                                  array(''=>'Select States'), $states) ,
                                  '','class="form-control"  tabindex="7"' ) ;
                                  ?>
                   </div>

                    <div class="form-group col-sm-6">
                        <span class='required_star'>*</span>
                        <label class=" control-label" for="x_zip">Zip</label>
                         <input type="text" class="form-control" name="x_zip" id="x_zip" 
                         placeholder="Zip Code" value="<?= $zipcode;?>" readonly>
                        
                   </div>

                </div><!--end of column 2-->
            <hr  class='hr_store_form'>
            <div class="form-group col-md-2 col-md-offset-5">
            
            <?php  
      
               $form_submit_button_data = array(
                        'name'        => 'submit_payment',
                        'id'          => 'submit_payment',
                        'type'        => 'submit',
                        'class'       => 'btn btn-primary btn-lg',
                        'tabindex'    => '10'
                    );
           echo form_button($form_submit_button_data, 'Continue');
           ?>
            
            </div>
            <?php echo form_close(); ?>
            <?php endif; ?>


            <hr  class='hr_store_form'>
            <div class="form-group col-md-2 col-md-offset-5">
            <?php if($tab_status): ?>
            
           <a class="btn btn-primary btn-lg" href="#" id="btn_next_page">Continue</a>

           <?php endif; ?>
            </div>
            </div>
           

        </div>