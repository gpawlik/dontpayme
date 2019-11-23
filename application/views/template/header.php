<header id="header" class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <span class="icon icon-align-justify menu_icon toggle_menu"></span>
        <div class="logo"><h1><a href="<?= base_url(); ?>">Don't pay me <span>The movie</span></a></h1></div>
        <div class="logo_holder"></div>
        <!--<a href="#" class="btn_donate">Donate</a>      -->
        
        <ul class="nav pull-right"> 
          <li class="dropdown">                         
            <a data-toggle="dropdown" class="dropdown-toggle" href="#"><?= (isset($session['language'])) ? strtoupper($session['language']) : 'EN' ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo current_url(); ?>?lang=en">EN</a></li>
              <li><a href="<?php echo current_url(); ?>?lang=pl">PL</a></li>
              <li><a href="<?php echo current_url(); ?>?lang=de">DE</a></li>
              <li><a href="<?php echo current_url(); ?>?lang=it">IT</a></li> 
              <li><a href="<?php echo current_url(); ?>?lang=fr">FR</a></li>
            </ul>
          </li>                     
        </ul>                   
        
    </div>
</header>