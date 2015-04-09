
<?php for($i=1;$i<=2;$i++) { ?>

<div class='row product-lisiting-pages'>

<div class='col-md-12 col-sm-6'>

<?php for($j=1;$j<=4;$j++) { ?>

      <div class="col-sm-3 col-md-3">
            <div class="thumbnail">
                <img data-src="holder.js/100%x200" alt="100%x200"  class="img-thumbnail img-responsive"
                     src=<?php echo base_url("assets/images/products/tshirt.jpg");?> data-holder-rendered="true" style="height: 200px;display: block;">
                    <div class="caption">
                            <h4>Dimonad Rings </h4>
                            <p><span class='price'>$66.99</span><span class='buy_btn pull-right'><a href="#" class="btn btn-primary" role="button">Buy Now</a></span></p>
                            <span class='span_buy_it_now'><p><a href="#">Buy It Now!</a></p></span>
                        </div>
                   <hr>

                  <p><span class='seller_name'><i class='glyphicon glyphicon-user'><b style="padding-left: 6px;color: #7F8B93;font-weight: 500;line-height: 2px;font-family: sans-serif;">Seller Name</b></span></i>
                  <span class='rating_class pull-right'><i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star-empty'></i><i class='glyphicon glyphicon-star-empty'></i></span></span></p>
            </div>
      </div>


<?php } ?>

</div>

</div>
<?php } ?>
