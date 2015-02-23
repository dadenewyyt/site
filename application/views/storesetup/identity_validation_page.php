<div class="col-md-12 col-md-store-content">
    <div class="col-md-12 pull-left">
        <p>
        <span class='tab_content_title'>Enter Credit Card Info To Validate Your Identity</span>
        <p class='tab_content_p'>To ensure that the identitiy of our sellers match thier profile.We require that you verify your self with your credit card information</p>
        </p>
    </div>

    <div class='row row-table-p col-md-12'>

     <form>

        <div class='col-md-6 column_margin'><!--column1-->                                  

                <div class="col-md-10 col-md-offset-1">

                     <h4 class="heading">Credit Card Information</h4>

                    <div class="form-group">

                        <span class='required_star'>*</span>
                        <label class="control-label" for="card-number">Card Number</label>
                        <input type="text" class="form-control" name="card-number" id="card-number" placeholder="Debit/Credit Card Number">

                    </div>

                    <div class="form-group">

                        <span class='required_star'>*</span> 
                        <label class=" control-label" for="cvv">Card CVV</label>
                        <input type="text" class="form-control" name="cvv" id="cvv" placeholder="Security Code">

                    </div>

                    <div class="form-group">
                        <span class='required_star'>*</span>
                        <label class="control-label" for="card-holder-name">Name on Card</label>
                        <input type="text" class="form-control" name="card-holder-name" id="card-holder-name" placeholder="Card Holder's Name">                

                    </div>

                 <h4 class="heading">Billing Address Information</h4>

                   <div class="form-group">

                        <span class='required_star'>*</span>
                        <label class="control-label" for="card-number">Country</label>

                            <?= form_dropdown('country', array_merge(
                            array(''=>'Select Country'), $country) ,
                            '','class="form-control"  tabindex="7"' ) ;
                            ?>

                    </div>
                    <div class="form-group">
                        
                        <span class='required_star'>*</span> 
                        <label class=" control-label" for="cvv">Address Line 1 </label>
                        <input type="text" class="form-control" name="cvv" id="cvv" placeholder="Security Code">

                    </div>

                    <div class="form-group">
                        
                        <span class='required_star'>*</span>
                        <label class="control-label" for="card-holder-name">City</label>
                        <input type="text" class="form-control" name="city" id="card-holder-name" placeholder="Card Holder's Name">                
                 
                  </div>
                  

                 </div>

                </div><!--end of column 1-->

                <div class='col-md-5 column_margin' style="margin-top:71px;"><!--end of column 2-->
                  
                  <div class="form-group">
                 
                  <label class="col-sm-6 control-label" for="expiry-month"> <span class='required_star'>*</span>Expiration Date</label>
                     <div class="col-sm-12">
                            <div class="row">
                              <div class="col-xs-6">
                                <select class="form-control col-sm-4" name="expiry-month" id="expiry-month">
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
                                <select class="form-control" name="expiry-year">
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
                       <label class=" control-label" for="cvv">Phone Number</label>
                      <input type="text" class="form-control" name="phone" id="phone" 
                             placeholder="Phone Number">   

                   </div>

                  <div class="form-group col-sm-12 " style="padding-top:110px;">

                        <span class='required_star'>*</span>
                        <label class=" control-label" for="cvv">Address Line 2</label>
                        <input type="text" class="form-control" name="address2" id="address2" 
                               placeholder="Address Line 2">

                   </div>

                  <div class="form-group col-sm-6">
                        <span class='required_star'>*</span>
                        <label class=" control-label" for="cvv">State</label>
                      
                         <?= form_dropdown('state', array_merge(
                                  array(''=>'Select States'), $states) ,
                                  '','class="form-control"  tabindex="7"' ) ;
                                  ?>
                   </div>

                    <div class="form-group col-sm-6">
                        <span class='required_star'>*</span>
                        <label class=" control-label" for="cvv">Zip</label>
                         <input type="text" class="form-control" name="zipcode" id="zipcode" 
                         placeholder="Zip Code"> 
                        
                   </div>

                </div><!--end of column 2-->
            <hr  class='hr_store_form'>
            <div class="form-group col-md-2 col-md-offset-5">
              <button class="btn btn-primary btn-lg">Continue</button>
            </div>
            <?php echo form_close(); ?>
            </div>
           


        </div>