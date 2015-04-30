
<style type="text/css">
  
  .xpens {
    
    -webkit-background-size: cover; /* For WebKit*/
    -moz-background-size: cover;    /* Mozilla*/
    -o-background-size: cover;      /* Opera*/
    background-size: cover;         /* Generic*/
  }
 
</style>

<div class='row product-lisiting-pages'>

<div class='col-md-12 col-sm-6'>

<?php if(count($all_store_data)>0): ?>

<?php foreach($all_store_data as $store) : ?>


      <div class="col-sm-3 col-md-3">

            <div class="thumbnail">
                <a href="#">

                        <img  alt="<?php echo $store->store_name;?>"  class="img-thumbnail img-responsive xpens" 
                              src="<?php echo $store->media->file_name ;?>" 
                              style=' text-align: center; width: 100%;height: 200px;'>
               </a>
                   
            <div class="caption">
                       <h4><?php echo $store->store_name;?></h4>
                       <p><?php echo $store->desc;?></p>
                        <p>
                          
                          
                      </p>
            </div>
             <hr>

                  <p>
                      <span class='seller_name'><i class='glyphicon glyphicon-user'></i>
                    
                    <?php $logged_in = (bool) $this->session->userdata('logged_in'); ?>
                      
                      <?php if($logged_in) :?>
                      <a href="<?php echo base_url('sell/seller').'/'.$store->profile->id ;?>">
                      <?php else:?>
                      <a href="<?php echo base_url('sell/sellers').'/'.$store->profile->id ;?>">
                      <?php endif;?>
                      <b style='padding-left:4px;color: #1f72ad;'><?php echo ucfirst($store->profile->fname).' '.ucfirst($store->profile->lname);?></b>
                      </a>
                    </span>
                         
                        <span class='rating_class'>
                           <i class='glyphicon glyphicon-star'></i>
                          <i class='glyphicon glyphicon-star'></i>
                          <i class='glyphicon glyphicon-star'></i>
                          <i class='glyphicon glyphicon-star-empty'></i>
                          <i class='glyphicon glyphicon-star-empty'></i>
                      </span>
                   </p>
            </div>
      </div>

<?php endforeach; ?>
<?php else: ?>
  <h3>No store to show.</h3>
<?php endif; ?>

</div>
</div>