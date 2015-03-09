<div class="col-md-12 col-md-store-content">
    <div class="col-md-12 pull-left">
        <p>
        <span class='tab_content_title'>Add a Product</span>

        </p>
    </div>
    <div class='row row-table-p col-md-12'>
        
        <div class="col-md-10 col-md-offset-1" style="margin-top:2%;">
           

             <div class="form-group row col-md-4">
                    <span class='required_star'>*</span><label class='control-lable' for="product_name">Product Name</label>
                    <input type="text" id='product_name' name="product_name" class='form-control' placeholder="Product Name" 
                    length="20"  style="margin-top: 13px;" required>
                      
                </div>

                <div class="form-group row col-md-12 ">
                    <span class='required_star'>*</span>
                    <label class='control-lable' for="product_descritpion">Add product description</label>
                    <textarea class="form-control" rows="4" id='product_descritpion' name="product_descritpion" required></textarea>
                </div>

                <div class="col-md-4 col-md-select" >
                    <div class="form-group ">
                        <span class='required_star'>*</span>
                        <label for="category">Select Category</label>
                        <select id='category' name='category' class='form-control' required>
                            <option>Shoe</option>
                            <option>Car</option>
                            <option>House</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-md-select">
                    <div class="form-group ">
                        <label for="variation">Variation</label>
                        <select id='variation' name='variation' class='form-control'>
                            <option>Shoe</option>
                            <option>Car</option>
                            <option>House</option>
                        </select>
                    </div>
                </div>

                 <div class="col-md-4 col-md-select">
                    <div class="form-group">
                       
                        <label for="sub_varaition">Sub Variation</label>
                        <select name='sub_varaition' id='sub_varaition' class='form-control'>
                            <option>Shoe</option>
                            <option>Car</option>
                            <option>House</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row col-md-12 ">

                   <!-- Upload popup hover html hidden content -->
                    <div id="popup_upload_html" style="display: none;">
                  
                                      
                     <div class="fileUpload btn btn-sm btn-primary" style="margin-top: -4px;margin-left: -4px;">
                        <span>Upload Image</span>
                        <input id="product_image" name="product_image" type="file" class="upload" accept="image/*" >
                    </div>
                    
                    </div>  

                    <!-- Upload popup hover html hidden content -->
                    <div id="popup_upload_html1" style="display: none;">
                  
                                      
                     <div class="fileUpload btn btn-sm btn-primary" style="margin-top: -4px;margin-left: -4px;">
                        <span>Upload Image</span>
                        <input id="product_image1" name="product_image1" type="file" class="upload" accept="image/*" >
                    </div>
                    
                    </div>  

                    <!-- Upload popup hover html hidden content -->
                    <div id="popup_upload_html2" style="display: none;">
                  
                                      
                     <div class="fileUpload btn btn-sm btn-primary" style="margin-top: -4px;margin-left: -4px;">
                        <span>Upload Image</span>
                        <input id="product_image2" name="product_image2" type="file" class="upload" accept="image/*" >
                    </div>
                    
                    </div>  

                    <!-- Upload popup hover html hidden content -->
                    <div id="popup_upload_html3" style="display: none;">
                  
                                      
                     <div class="fileUpload btn btn-sm btn-primary" style="margin-top: -4px;margin-left: -4px;">
                        <span>Upload Image</span>
                        <input id="product_image3" name="product_image3" type="file" class="upload" accept="image/*" >
                    </div>
                    
                    </div>  

                    <!-- Upload popup hover html hidden content -->
                    <div id="popup_upload_html4" style="display: none;">
                  
                                      
                     <div class="fileUpload btn btn-sm btn-primary" style="margin-top: -4px;margin-left: -4px;">
                        <span>Upload Image</span>
                        <input id="product_image4" name="product_image4" type="file" class="upload" accept="image/*" >
                    </div>
                    
                    </div>  


                    <!-- Upload popup hover html hidden title -->
                    <div id="popup_upload_html_title" style="display: none;color:white;">
                       Upload file
                    </div> 


                    <label for="preview_produt_image">Photos</label>


                    <div class="row">

                        <div class="col-xs-4 col-md-3">

                           <a class="thumbnail" id="popup_upload">
                            <img id='preview_product_image' name='preview_product_image' src="uploads/profile/no-photo.jpg" alt="..." height="200">
                            </a>
                        </div>

                        <div class="col-xs-4 col-md-2">
                            <a class="thumbnail" id="popup_upload1">
                             <img id='preview_product_image1' name='preview_product_image1' src="uploads/profile/no-photo.jpg" alt="..." height="200">
                            </a>
                        </div>

                        <div class="col-xs-4 col-md-2">
                            <a  class="thumbnail" id="popup_upload2">
                             <img id='preview_product_image2' name='preview_product_image2' src="uploads/profile/no-photo.jpg" alt="..." height="200">
                            </a>
                        </div>

                        <div class="col-xs-4 col-md-2">
                            <a  class="thumbnail" id="popup_upload3">
                            <img id='preview_product_image3' name='preview_product_image3' src="uploads/profile/no-photo.jpg" alt="..." height="200">
                            </a>
                        </div>

                        <div class="col-xs-4 col-md-2">
                            <a class="thumbnail" id="popup_upload4">
                              <img id='preview_product_image4' name='preview_product_image4' src="uploads/profile/no-photo.jpg" alt="..." height="200">
                            </a>
                        </div>
                       

                    </div>

                    <label>Upload clear and good quality pictures</label>
                    <p>
                    <span class='required_star'>*</span>
                    At least one image is manadatory</p>
                </div>

                 <div class="row col-md-4 form-group ">
                        <span class='required_star'>*</span>
                        <label for="descritpion">Quantity</label>
                       <input type="number" class="form-control" name='quantity' id="quanity" required>
                </div>

                 <div class="col-md-12 col-price">

                    <div class="col-md-4 form-group">
                        <span class='required_star'>*</span>
                        <label for="descritpion">Price Before Tax</label>
                       <input type="number" class="form-control" name='price' id="price" required>
                   </div>

                <div class="col-md-4 form-group ">
                        <span class='required_star'>*</span>
                        <label for="descritpion">Special Price </label>
                       <input type="text" class="form-control" name='sprice' id="sprice" required>
                       
                </div>
                       
                </div>
             
          
        </div>
         <hr  class='hr_store_form'>
              <div class="form-group col-md-2 col-md-offset-5">
              <button id='btn_product_next_page' name='btn_product_next_page' class="btn btn-primary btn-lg">Continue</button>
            
            </div>
    </div>
</div>