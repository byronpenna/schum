    <!-- <div class="col-lg-12 col-md-12"> -->
    <?php 
        $menu = array("","","","","","");
        if(isset($opMenu)){
            $menu[$opMenu] = "activeMenu";    
        }
        
    ?>
    <div class="navbar navbar-default navbar-fixed-top aocultar" role="navigation">
        <div class="container container-menu">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                <ul class="nav navbar-nav">
                    <li>
                        <a <?php echo "class='".$menu[0]."' href='".site_url("welcome")."'" ?> >Home</a>
                    </li>
                    <li class="liPadre">
                       <a <?php echo "class='".$menu[1]."' href='".site_url("listings")."'" ?> class="dropdown-toggle" data-toggle="dropdown">Listings <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="liSubMenu">
                                <a href=<?php echo "'".site_url("listings/getMostRecent")."'" ?> >Active Listings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href=<?php echo "'".site_url("listings/getFinishedListings")."'" ?> >Finished listings</a></li>
                        </ul>
                    </li>
                    <li class="liPadre">
                        <a <?php echo "class='".$menu[2]."' href='".site_url("ourteam")."'" ?> class="dropdown-toggle" data-toggle="dropdown">Meet our team <b class="caret"></b></a>
                    </li>
                    <li>
                        <a <?php echo "class='".$menu[3]."' href='".site_url("news")."'" ?> >News</a>
                    </li>
                    <li>
                        <a <?php echo "class='".$menu[4]."' href='".site_url("our_story")."'" ?> >Our story</a>
                    </li>
                    <li>
                        <a <?php echo "class='".$menu[5]."' href='".site_url("contact_us")."'" ?> >Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<!-- </div> -->