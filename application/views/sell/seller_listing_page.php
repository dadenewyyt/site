<div class="row">
<?php 

foreach ($profiles as $key => $profile) {
?>
                 

                        <div class="col-sm-2 col-md-2 col-md-2-person">                 
                                <div class="thumbnail rec">
                                <a href="<?php echo base_url('sell/sellers/').'/'.$profile->id;?>">
                                <img  class="img-thumbnail img-responsive" src="<?php echo base_url().$profile->media->file_name;?>" style="height: 150px;display: block;"></a>
                                <div class='text_content'>
                                <div class="seller_name">
                                 <h4><small><i class='glyphicon glyphicon-user'></i></small><span class="member_name"><?php echo ucfirst($profile->fname).' '.ucfirst($profile->lname); ?></span></h4>
                                </div>   
                               
                                <div class="seller_location">
                                  <h4><small><span class="member_location"><?php echo $profile->city; ?> | <?php echo $profile->state; ?> </small></h4>
                                </div> 
                                                         
                                <hr> <!--horizonal line-->

                             <div class="rating_social">
                               <p><span class="rating"><strong>Rating:</strong><span class="rating_star">
                                     <i class='glyphicon glyphicon-star'></i>
                                     <i class='glyphicon glyphicon-star'></i>
                                     <i class='glyphicon glyphicon-star'></i>
                                     <i class='glyphicon glyphicon-star-empty'></i>
                                     <i class='glyphicon glyphicon-star-empty'></i>
                                 </span></span>
                                 </p>

                                 <p><span class="friends rating"><strong>Freinds:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span><span class="friends rating pull-right"><strong>Products:</strong>&nbsp;<a href="#">(<span class="nulmbers">12</span>)</a></span> </span></p>

                             </div>
                            </div> <!--end of text content -->                             
      

                             </div>
                                  
                             
                               

                  

                </div>     

      
                   

        <?php } ?>           
