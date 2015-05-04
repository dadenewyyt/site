<style type="text/css">
    .row2 {
        background-color: #ffffff;
    }
    .community_badges .badge{
    border-radius: 6px;
    padding: 4px 6px;
}
.search-input {
    margin-top: 18px;
    border-radius: 1px;
}
</style>
<?php 
  $logged_in = (bool) $this->session->userdata('logged_in');
?>
<div class="row row2 paddings" style="margin-top:50px;">

    <div class="container">
    
        <div class="col-md-2" >
       
               <?php if($logged_in):?>
                 <div class='community_badges' style="margin-top: 28px;">
                    <i class="glyphicon glyphicon-bell" style='background-color:'></i>  <sup class="badge">0</sup>
                    <i class="glyphicon glyphicon-user" style='background-color:'></i>  <sup class="badge">0</sup>
                    <i class="glyphicon glyphicon-envelope" style='background-color:'></i>  <sup class="badge">0</sup>
                    <i class="glyphicon glyphicon-star" style='background-color:'></i>  <sup class="badge">0</sup>
                </div>

              <?php endif ;?>
           
        </div>

        <div class="col-md-4 col-md-offset-3 ">
              <a href="<?php echo base_url('welcome/home'); ?>"><img src="<?php echo base_url()."assets/images/logo_white.png";?>"/></a>
        </div>

        <div class="col-md-3" >
               <input type="text" class="form-control search-input" placeholder='search'>
        </div>
           
    </div>
</div>