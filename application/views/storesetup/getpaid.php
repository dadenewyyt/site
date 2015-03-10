<style type="text/css">
</style>
<div class="col-md-12 col-md-store-content">
    <div class="col-md-12 pull-left">
        <p>
        <span class='tab_content_title'>Link your Bank Account</span>
        <div class="row">
            <p class="intro_table_text" style="margin-left:-12px;">We'll make deposits into this account for your direct checkout orders. When you first link this account, there will be a one time five day delay before your funds can be
            deposited.This is done for your protection to ensure that there is time to resolve any issues, if you think an error has been made.<span class='getpaid_notice'>We will make a .01 deposit into your
            bank account to ensure that all information has been entered correctly. No action is required by you</span>.</p>

        </div>
        </p>
    </div>

    <div class='row row-table-p col-md-12' style="padding-top: 20px;">
        <div class='col-md-12' style="padding-bottom:10px;">
            <div class="col-md-6">
             
                    <div class="col-md-6 form-group">
                        <span class='required_star'>*</span>
                        <label for="descritpion">Account Type</label>
                          <?= form_dropdown('account_type', array_merge(array(''=>'Select account type'), $account_types) ,'','class="form-control"  tabindex="7"' ) ;?>
                    </div>
                    <div class="col-md-6 form-group">
                        <span class='required_star'>*</span>
                        <label for="descritpion">Bank Branch</label>
                        <input type="text" id="bankbranch" name='bankbranch' class="form-control" required>
                    </div>


                    <div class="col-md-6 form-group">
                        <span class='required_star'>*</span>
                        <label for="storename">Account Owners Name</label>
                        <input type="text" id="account_owner" name='account_owner' class="form-control" required>
                        <p class="help-block">same as your bank book account .</p>
                    </div>

                    <div class="col-md-12 form-group">
                        <h3>Pic of Check</h3>
                        <img src="assets/images/storesetup/check.jpg">
                    </div>


                    <div class="col-md-12 form-group">
                        <span class='required_star'>*</span>
                        <label for="descritpion">Rounting Number </label>
                        <input type="text" id="routenumber" name='routenumber' class="form-control col-md-6" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <span class='required_star'>*</span>
                        <label for="descritpion">Account Number</label>
                        <input type="text" id="accountnumber" name='accountnumber' class="form-control" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <span class='required_star'>*</span>
                        <label for="storename">Re-enter Account Number</label>
                        <input type="text" id="reaccountnumber" name='reaccountnumber' class="form-control" required>

                    </div>     

                </div>

    
        </div>
         <hr  class='hr_store_form'>
            <div class="form-group col-md-2 col-md-offset-5">
              <button id='btn_next_page_getpaid' name='btn_next_page_getpaid' class="btn btn-primary btn-lg">Continue</button>
            </div>
         
    </div>

</div>