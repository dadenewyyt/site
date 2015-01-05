 <style type="text/css">

.header_text {

font-weight: 600;
font-size: 16px;
}
.tweet_content {

background-image: url('../../assets/images/bid/twitter_large.png');
background-repeat: none;
height: 50;
border-bottom: 2px dotted grey;
padding: 7px;
}

 </style>

  <div class="image">
  	<P>
  	<img src="<?php echo base_url()."assets/images/bid/twitter_small.png";?>" height=20 >
     <span class="header_text">Latest From Twitter</span>
  	</P>
  </div>
  
  <div class="col-md-11">

    <div class="twitte_text" style="width:100%;">
		<?php 
         foreach($tweetes_content as $twitted_text)  {          
          echo "<p class='tweet_content'>"."<img style='padding:4px;' src=".base_url().'assets/images/bid/twitter_large.png'.">" . $twitted_text."</p>";
        }

		?>
            </div>
  </div>