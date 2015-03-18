<style type="text/css">
.main-navigation {
    background-color: #ffffff;
}
div.row.row-1.main-nav {
  max-height:40px;
}
.row-1 .navbar {
    min-height:40px;
    border-radius:0px;
    width:100%;   

}
.row-1 .navbar-default .navbar-nav>li>a {
color: #000000;
padding-right: 0px;
}
.row-1 {
    background-color: #black;
}
.row-1 .navbar-default .navbar-nav>li>a:hover, .navbar-default .navbar-nav>li>a:focus {
color: #a1a1a1;
}
.row-1 .navbar-nav {

  margin-left: -16px;
}
.navbar {
    min-height:40px;
    border-radius:0px;

}

.navbar-default .navbar-nav>li>a {
color: #000000;
}

.navbar-default .navbar-nav>li>a:hover, .navbar-default .navbar-nav>li>a:focus {

color: #a1a1a1;

}

</style>
 <div class="row row-1">

        <div class="nav navbar navbar-default main-navigation" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#madebyus4u-mobile-responsive-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                    
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="madebyus4u-mobile-responsive-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Men <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">

                             <?php 

                             $men = array_keys($this->config->item('categories')['MEN']);

                             foreach( $men as $value) : ?>
               
                                     <li><a href="<?php echo $value;?>"><?php echo $value;?></a></li>
              

                             <?php endforeach;?>                     
                               
                               
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Women <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">

                             <?php 
                            $women = array_keys($this->config->item('categories')['WOMEN']);

                             foreach($women as $value) : ?>
               
                                     <li><a href="<?php echo $value;?>"><?php echo $value;?></a></li>
              

                             <?php endforeach;?>                     
                               
                               
                            </ul>
                        </li>
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Bottoms<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">

                             <?php foreach($this->config->item('categories')['BOTTOMS'] as $value) : ?>
               
                                     <li><a href="<?php echo $value;?>"><?php echo $value;?></a></li>
              

                             <?php endforeach;?>                     
                               
                               
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dresses <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">

                             <?php foreach($this->config->item('categories')['DRESSES'] as $value) : ?>
               
                                     <li><a href="<?php echo $value;?>"><?php echo $value;?></a></li>
              

                             <?php endforeach;?>                     
                               
                               
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">OutWear <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">

                             <?php foreach($this->config->item('categories')['OUTWEAR'] as $value) : ?>
               
                                     <li><a href="<?php echo $value;?>"><?php echo $value;?></a></li>
              

                             <?php endforeach;?>                     
                               
                               
                            </ul>
                        </li>

                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Shoes <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">

                             <?php foreach($this->config->item('categories')['SHOES'] as $value) : ?>
               
                                     <li><a href="<?php echo $value;?>"><?php echo $value;?></a></li>
              

                             <?php endforeach;?>                     
                               
                               
                            </ul>
                        </li>
                       <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Sleep<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">

                             <?php foreach($this->config->item('categories')['SI'] as $value) : ?>
                            
               
                                     <li><a href="<?php echo $value;?>"><?php echo $value;?></a></li>
              

                             <?php endforeach;?>                     
                               
                               
                            </ul>
                        </li>

                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Swim<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">

                             <?php foreach($this->config->item('categories')['SC'] as $value) : ?>
               
                                     <li><a href="<?php echo $value;?>"><?php echo $value;?></a></li>
              

                             <?php endforeach;?>                     
                               
                               
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tops<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">

                             <?php foreach($this->config->item('categories')['TOPS'] as $value) : ?>
               
                                     <li><a href="<?php echo $value;?>"><?php echo $value;?></a></li>
              

                             <?php endforeach;?>                     
                               
                               
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Art<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">

                             <?php foreach($this->config->item('categories')['ART'] as $value) : ?>
               
                                     <li><a href="<?php echo $value;?>"><?php echo $value;?></a></li>
              

                             <?php endforeach;?>                     
                               
                               
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Living<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">

                             <?php foreach($this->config->item('categories')['HL'] as $value) : ?>
               
                                     <li><a href="<?php echo $value;?>"><?php echo $value;?></a></li>
              

                             <?php endforeach;?>                     
                               
                               
                            </ul>
                        </li>
                           <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mobile<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">

                             <?php foreach($this->config->item('categories')['MA'] as $value) : ?>
               
                                     <li><a href="<?php echo $value;?>"><?php echo $value;?></a></li>
              

                             <?php endforeach;?>                     
                               
                               
                            </ul>
                        </li>
                           <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Jewelry<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">

                             <?php foreach($this->config->item('categories')['Jewelry'] as $value) : ?>
               
                                     <li><a href="<?php echo $value;?>"><?php echo $value;?></a></li>
              

                             <?php endforeach;?>                     
                               
                               
                            </ul>
                        </li>

                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Kids<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">

                             <?php foreach($this->config->item('categories')['Kids'] as $value) : ?>
               
                                     <li><a href="<?php echo $value;?>"><?php echo $value;?></a></li>
              

                             <?php endforeach;?>                     
                               
                               
                            </ul>
                        </li>
                              <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Vintage<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">

                             <?php foreach($this->config->item('categories')['Vintage'] as $value) : ?>
               
                                     <li><a href="<?php echo $value;?>"><?php echo $value;?></a></li>
              

                             <?php endforeach;?>                     
                               
                               
                            </ul>
                        </li>
                               <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Toys<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">

                             <?php foreach($this->config->item('categories')['Toys'] as $value) : ?>
               
                                     <li><a href="<?php echo $value;?>"><?php echo $value;?></a></li>
              

                             <?php endforeach;?>                     
                               
                               
                            </ul>
                        </li>
                               <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Crafts<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">

                             <?php foreach($this->config->item('categories')['Craft Supplies'] as $value) : ?>
               
                                     <li><a href="<?php echo $value;?>"><?php echo $value;?></a></li>
              

                             <?php endforeach;?>                     
                               
                               
                            </ul>
                        </li>
                       
                       
                  
                      
                      
                       
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </div>

  </div>