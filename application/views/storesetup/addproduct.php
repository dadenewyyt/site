<div class="col-md-12 col-md-store-content">
    <div class="col-md-12 pull-left">
        <p>
        <span class='tab_content_title'>Add a Product</span>

        </p>
    </div>
    <div class='row row-table-p col-md-12'>
        
        <div class="col-md-10 col-md-offset-1" style="margin-top:2%;">
            <form>

             <div class="form-group row col-md-4">
                    <span class='required_star'>*</span><label for="pname">Product Name</label>
                    <input type="text" id='pname' name="pname" class='form-control' placeholder="Product Name" 
                    style="margin-top: 13px;" />
                </div>

                <div class="form-group row col-md-12">
                    <span class='required_star'>*</span><label for="descritpion">Add product description</label>
                    <textarea class="form-control" rows="4"></textarea>
                </div>

                <div class="col-md-4 col-md-select">
                    <div class="form-group">
                        <span class='required_star'>*</span>
                        <label for="descritpion">Select Category</label>
                        <select class='form-control' required>
                            <option>Shoe</option>
                            <option>Car</option>
                            <option>House</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-md-select">
                    <div class="form-group">
                        <label for="descritpion">Variation</label>
                        <select class='form-control'>
                            <option>Shoe</option>
                            <option>Car</option>
                            <option>House</option>
                        </select>
                    </div>
                </div>

                 <div class="col-md-4 col-md-select">
                    <div class="form-group">
                       
                        <label for="descritpion">Sub Variation</label>
                        <select class='form-control'>
                            <option>Shoe</option>
                            <option>Car</option>
                            <option>House</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row col-md-12">

                   <!-- Upload popup hover html hidden content -->
                    <div id="popup_upload_html" style="display: none;">
                                      
                     <div class="fileUpload btn btn-sm btn-primary">
                        <span>Upload Image</span>
                        <input id="imgfile_store1" name="imgfile_store1" type="file" class="upload" accept="image/*" />
                    </div>
                    </div>  

                    <!-- Upload popup hover html hidden title -->
                    <div id="popup_upload_html_title" style="display: none;color:white;">
                       Upload file
                    </div> 


                    <label for="descritpion">Photos</label>


                    <div class="row">

                        <div class="col-xs-4 col-md-2">

                           <a class="thumbnail" id="popup_upload">
                            <img id='preview_product_image' name='preview_product_image' src="uploads/profile/no-photo.jpg" alt="...">
                            </a>
                        </div>

                        <div class="col-xs-4 col-md-2">
                            <a href="#" class="thumbnail" id="popup_upload">
                            <img src="uploads/profile/no-photo.jpg" alt="...">
                            </a>
                        </div>

                        <div class="col-xs-4 col-md-2">
                            <a href="#" class="thumbnail" id="popup_upload1">
                            <img src="uploads/profile/no-photo.jpg" alt="...">
                            </a>
                        </div>

                        <div class="col-xs-4 col-md-2">
                            <a href="#" class="thumbnail" id="popup_upload2">
                            <img src="uploads/profile/no-photo.jpg" alt="...">
                            </a>
                        </div>

                        <div class="col-xs-4 col-md-2">
                            <a href="#" class="thumbnail" id="popup_upload3">
                            <img src="uploads/profile/no-photo.jpg" alt="...">
                            </a>
                        </div>
                       

                    </div>

                    <label>Upload clear and good quality pictures</label>
                    <p>
                    <span class='required_star'>*</span>
                    At least one image is manadatory</p>
                </div>

                 <div class="row col-md-4 form-group">
                        <span class='required_star'>*</span>
                        <label for="descritpion">Quantity</label>
                       <input type="text" class="form-control" name='quantity' id="quanity">
                </div>

                 <div class="col-md-12 col-price">

                    <div class="col-md-4 form-group">
                        <span class='required_star'>*</span>
                        <label for="descritpion">Price Before Tax</label>
                       <input type="text" class="form-control" name='price' id="price">
                   </div>

                <div class="col-md-4 form-group">
                        <span class='required_star'>*</span>
                        <label for="descritpion">Special Price </label>
                       <input type="text" class="form-control" name='sprice' id="sprice">
                </div>
                       
                </div>
             
            </form>
        </div>
         <hr  class='hr_store_form'>
              <div class="form-group col-md-2 col-md-offset-5">
              <button class="btn btn-primary btn-lg">Continue</button>
            </div>
    </div>
</div>