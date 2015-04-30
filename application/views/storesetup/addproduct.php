<div class="col-md-12 col-md-store-content">
    <div class="col-md-12 pull-left">
        <p>
        <span class='tab_content_title'>Add a Product</span>

        </p>
    </div>
    <div class='row row-table-p col-md-12'>
        
        <div class="col-md-10 col-md-offset-1" style="margin-top:2%;">
           

             <div class="form-group row col-md-4">
                    <span class='required_star'>*</span>
                    <label class='control-lable' for="product_name">Product Name</label>
                    <input value="<?php echo set_value('product_name');?>" type="text" id='product_name' name="product_name" class='form-control' placeholder="Product Name"
                    length="20"  style="margin-top: 13px;" required>
                      
                </div>

                <div class="form-group row col-md-12 ">
                    <span class='required_star'>*</span>
                    <label class='control-lable' for="product_descritpion">Add product description</label>
                    <textarea class="form-control" rows="4" id='product_descritpion' name="product_descritpion" required><?php echo set_value('product_descritpion');?></textarea>
                </div>

                <div class="form-group row col-md-12 ">
                    <span class='required_star'>*</span>
                    <label class='control-lable' for="product_details">Add product detail information (used for Social Networking aspect)</label>
                    <textarea class="form-control" rows="5" id='product_details' name="product_details" required><?php echo set_value('product_details');?></textarea>
                </div>

                <div class="col-md-4 col-md-select" >
                    <div class="form-group ">
                        <span class='required_star'>*</span>
                        <label for="category">Select Category</label>
                       
                      <?php  $catagories['#'] = 'Please Select Category';
                          echo form_dropdown('categories', $catagories,'#','id="category"
                          class="form-control"'); ?>
                    </div>
                </div>
                <div class="col-md-4 col-md-select">
                    <div class="form-group ">
                        <label for="variations">Variation</label>
                       
                         <?php  $variation['#'] = 'Please Select';
                         echo form_dropdown('variation',$variation,'#',
                         'id="variation" class="form-control"'); ?> 
                    </div>
                </div>

                 <div class="col-md-4 col-md-select">
                    <div class="form-group">
                       
                        <label for="sub_variation">Sub Variation</label>
                       
                          <?php  $sub_variation['#'] = 'Please Select';
                         echo form_dropdown('sub_variation',$sub_variation,'#',
                         'id="sub_variation" class="form-control"'); ?>
                    </div>
                </div>

                <div class="form-group row col-md-12 has-feedback">                                


                    <label for="preview_produt_image">Photos</label>


                    <div class="row">

                        <div class="col-xs-4 col-md-3">

                           <a class="thumbnail" id="popup_upload">
                            <img id='preview_product_image'  name='preview_product_image' src="<?php echo base_url('uploads/no-photo.jpg');?>" alt="..." height="200">
                              <div class="fileUpload btn btn-sm btn-primary" style="margin-top: -4px;margin-left: -4px;">
                             <span>Upload Image</span>
                               <input id="product_image" value="<?php echo set_value('userfile[1]');?>" name="userfile[]" type="file" class="upload" accept="image/*">
                             </div>

                            </a>
                        </div>

                        <div class="col-xs-4 col-md-2">
                            <a class="thumbnail" id="popup_upload1">
                             <img id='preview_product_image1' name='preview_product_image1' src="<?php echo base_url('uploads/no-photo.jpg');?>" alt="..." height="200">
                            <div class="fileUpload btn btn-sm btn-primary" style="margin-top: -4px;margin-left: -4px;">
                             <span>Upload Image</span>
                           <input id="product_image1" name="userfile[]" type="file" class="upload" accept="image/*" >
                             </div>
                            </a>
                        </div>

                        <div class="col-xs-4 col-md-2">
                            <a  class="thumbnail" id="popup_upload2">
                             <img id='preview_product_image2' name='preview_product_image2' src="<?php echo base_url('uploads/no-photo.jpg');?>" alt="..." height="200">
                             <div class="fileUpload btn btn-sm btn-primary" style="margin-top: -4px;margin-left: -4px;">
                             <span>Upload Image</span>
                           <input id="product_image2" name="userfile[]" type="file" class="upload" accept="image/*" >
                             </div>
                            </a>
                        </div>

                        <div class="col-xs-4 col-md-2">
                            <a  class="thumbnail" id="popup_upload3">
                            <img id='preview_product_image3' name='preview_product_image3' src="<?php echo base_url('uploads/no-photo.jpg');?>" alt="..." height="200">
                             <div class="fileUpload btn btn-sm btn-primary" style="margin-top: -4px;margin-left: -4px;">
                             <span>Upload Image</span>
                           <input id="product_image3" name="userfile[]" type="file" class="upload" accept="image/*" >
                             </div>
                            </a>
                        </div>

                        <div class="col-xs-4 col-md-2">
                            <a class="thumbnail" id="popup_upload4">
                              <img id='preview_product_image4' name='preview_product_image4' src="<?php echo base_url('uploads/no-photo.jpg');?>" alt="..." height="200">
                             <div class="fileUpload btn btn-sm btn-primary" style="margin-top: -4px;margin-left: -4px;">
                             <span>Upload Image</span>
                           <input id="product_image4" name="userfile[]" type="file" class="upload" accept="image/*" >
                             </div>
                            </a>
                        </div>
                       

                    </div>

                    <label class='product_validation_message'>Upload clear and good quality pictures</label>
                    <p class='product_validation_message'>
                    <span class='required_star'>*</span>
                    At least one image is manadatory</p>
                </div>

                 <div class="row col-md-4 form-group ">
                        <span class='required_star'>*</span>
                        <label for="descritpion">Quantity</label>
                       <input  value="<?php echo set_value('quantity');?>" type="number" class="form-control" name='quantity' id="quanity" required>
                </div>

                 <div class="col-md-12 col-price">

                    <div class="col-md-4 form-group">
                        <span class='required_star'>*</span>
                        <label for="descritpion">Price Before Tax</label>
                       <input value="<?php echo set_value('price');?>" type="number" class="form-control" name='price' id="price" required>
                   </div>

                <div class="col-md-4 form-group ">
                        <span class='required_star'>*</span>
                        <label for="descritpion">Special Price </label>
                       <input value="<?php echo set_value('sprice');?>" type="text" class="form-control" name='sprice' id="sprice" required>
                       
                </div>
                       
                </div>
             
          
        </div>
         <hr  class='hr_store_form'>
              <div class="form-group col-md-2 col-md-offset-5">
              <input type='button' id='btn_product_next_page' name='btn_product_next_page' class="btn btn-primary btn-lg" value="Continue" />
            
            </div>
    </div>
</div>