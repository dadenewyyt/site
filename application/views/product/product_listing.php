
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

<?php if(count($products)>0): ?>

    <?php foreach($products as $product): ?>

      <div class="col-sm-3 col-md-3">

            <div class="thumbnail">
                <a href="<?php echo base_url('product/detail').'/'.$product['product_id'];?>">

                        <img  alt="<?php echo $product['name'];?>"  class="img-thumbnail img-responsive xpens" 
                              src="<?php echo $product['image'] ;?>" 
                              style=' text-align: center; width: 100%;height: 200px;'>
               </a>
                   
            <div class="caption">
                       <h4 class='product_name_heading'><?php echo $product['name'];?></h4>
                       <p class="product_description"><?php echo $product['desc'];?></p>
                        <p>
                          <span class='price'>$<?php echo $product['price'];?></span>
                          <span class='buy_btn'> 
                            <a href="<?php echo base_url('product/detail').'/'.$product['product_id'];?>" class="btn btn-primary" role="button">Buy Now!</a>
                          </span>
                      </p>
            </div>
             <hr>

                  <p>
                      <span class='seller_name'><i class='glyphicon glyphicon-user'></i>
                        <a href="<?php echo base_url('sell/sellers').'/'.$product['profile_id'];?>"> <b style='padding-left:4px;color: #1f72ad;'><?php echo $product['seller_name'];?></b>
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
<?php endforeach ;?>
<?php else: ?>

  <div class="col-md-12 col-md-offset-4" ><h4>We are sorry , no products added yet!</h4></div>
<?php endif ;?>

</div>
</div>