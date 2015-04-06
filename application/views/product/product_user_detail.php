<div class="col-sm-12 col-give-margin-top">
          <p class='listedby'>
              <strong>Listed By <i class='caret'></i>
              </strong> 
              <b><?php echo ucfirst($product['username']);?></b>    
          </p>
</div>
<row>
<div class="col-md-12" style="background-color:#f5f5f5;padding:10px;text-align: center;">
      <div class="media" style="padding-bottom: 13px;">
          <a class="media-left" href="#">
            <img src="<?php echo $product['profile_image'];?>" height='90' alt="..." style='width:100%;'>
          </a>
      <div class="media-body">
            <h4 class="media-heading"><?</h4>
            <span class='joined_date'>Joined Date <?php echo date_format(date_create($product['joined_date']),'Y-m-d');?></span>
             <p></p>
             <p><a href="#" class="btn buttons btn_black">Send Request</a></p>

              <span class='rating_class'>
                    <i class='glyphicon glyphicon-star'></i>
                    <i class='glyphicon glyphicon-star'></i>
                    <i class='glyphicon glyphicon-star'></i>
                    <i class='glyphicon glyphicon-star-empty'></i>
                    <i class='glyphicon glyphicon-star-empty'></i>
                </span>
        </div>
               
        <hr style="padding:0px;border-top:2px dotted #b3b3b3;margin-top: 5px;margin-bottom: 2px;">
      </div>

          <div class="col-md-4" style="padding: 0;">
                  <span class="badge badge-product-details">0</span>
                   <p><img src="<?php echo base_url()."assets/images/products/listing_icon.png";?>">&nbsp;<span class='user_text'>Listing</span></p>

                </div>
              <div class="col-md-4" style="padding: 0;">
               <span class="badge badge-product-details">0</span>
               <p><img src="<?php echo base_url()."assets/images/products/love_icon.png";?>">&nbsp;<span class='user_text'>Likes</span></p>
              </div>
              <div class="col-md-4" style="padding: 0;">
                   <span class="badge badge-product-details">0</span><br/>
                 <p><img src="<?php echo base_url()."assets/images/products/freinds_icon.png";?>">&nbsp;<span class='user_text'>Friends</span></p>
                </div>
             
             </div>
            <div class="col-md-12" style="background-color:#e8e8e8;margin-bottom:0;text-aligin:justify;">
               Once you become friends with a user, you can enable all the communication features. 
            </div>
   </row> 
