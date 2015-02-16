    <!-- <div class="col-lg-12 col-md-12"> -->
    <?php 
        $menu = array("","","","","","");
        if(isset($opMenu)){
            $menu[$opMenu] = "activeMenu";    
        }
        
    ?>
    <div class="navbar navbar-default navbar-fixed-top responsive menu-responsivo" role="navigation">
        <div class="container container-menu">
            <div class="navbar-header">

                <img class="imgFull img-responsive bannerMovil schumMovilLogo"  src=<?php echo "'".base_url("img/logos/logo2.png")."'" ?> 

                <!-- social  -->
            <div class="row container-fluid social-responsivo">
            <div id="banneraner" class="col-sm-offset-5 col-sm-7 col-lg-offset-8 col-lg-4  text-right socialNetworkBar">
                <!-- <span class="fa fa-facebook"></span> -->
                <div class="iconCuadro" id='tw'>
                    <a href=<?php echo "'".$homeData->twitter."'" ?> target="_blank">
                        <div class="circle-text " >
                            <div>
                                <i class="fa fa-twitter"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="iconCuadro" id='fb'>
                    <a href=<?php echo "'".$homeData->facebook."'" ?> target="_blank">
                        <div class="circle-text " >
                            <div>
                                <i class="fa fa-facebook iconAwesomeHeader" ></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="iconCuadro" id='in'>
                    <a href=<?php echo "'".$homeData->linkedIn."'" ?> target='_blank'>
                        <div class="circle-text " >
                            <div>
                                <i class="fa fa-linkedin"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="iconCuadro" id='youtube'>
                    <a href=<?php echo "'".$homeData->youtube."'" ?> target="_blank">
                        <div class="circle-text " >
                            <div>
                                <i class="fa fa-youtube"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="iconCuadro" id='pinterest'>
                    <a href=<?php echo "'".$homeData->pinterest."'" ?> target="_blank">
                        <div class="circle-text " >
                            <div>
                                <i class="fa fa-pinterest"></i>
                            </div>
                        </div>
                    </a>
                </div>
                
            </div>
        </div>




            <!-- fin social -->


              <button type="button" class="navbar-toggle collapsed boton-responsivo" data-toggle="collapse" data-target="#bajador">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"></a>
            </div>
            <div class="collapse navbar" id="bajador">
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