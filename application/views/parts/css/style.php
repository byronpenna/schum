.navbar{
	list-style: none;
}
.footerresp{
	transform:scale(0.4,0.4);
	-moz-transform:scale(0.4,0.4);
	-webkit-transform:scale(0.4,0.4);
}
.bannerMovil{
	margin-top: 4%;
}
/* circulo */ 
	.iconCuadro{
		width: 10%;
		display: inline-block;
		margin-left: 1%;
	}
	/*.circle-text {
	    width:50%;
	    font-size:3em;
	    color: white
	}
	.circle-text:after {
	    content: "";
	    display: block;
	    width: 100%;
	    height:0;
	    padding-bottom: 100%;
	    background: black; 
	    -moz-border-radius: 50%; 
	    -webkit-border-radius: 50%; 
	    border-radius: 50%;
	}
	.circle-text div {
	    float:left;
	    width:100%;
	    padding-top:50%;
	    line-height:1em;
	    margin-top:-0.5em;
	    text-align:center;
	    color:white;
	}*/
	.circle-text {
	    width:100%;
	    font-size: 3.2em;
	}
	.circle-text:after{
	    content: "";
	    display: block;
	    width: 100%;
	    height:0;
	    padding-bottom: 100%;
	    background: black; 
	    -moz-border-radius: 50%; 
	    -webkit-border-radius: 50%; 
	    border-radius: 50%;
	}
	
	.circle-text div {
	    float:left;
	    width:100%;
	    padding-top:50%;
	    line-height:1em;
	    margin-top:-0.5em;
	    text-align:center;
	    color:white;
	}
	.marginNull{
		margin: 0;
	}
/* header */ 
	.headerPrincipal{
		cursor: pointer;
	}
	.imgFull{
		width: 100%;
	}
	.headerPrincipal{
		margin-bottom: 0%;
	}
	.socialNetworkBar{
		margin-top: 1%;
		margin-bottom: 1%;
	}
	.blackCircle{
		background: black;
		border-radius: 70px;
		color: 		white;
		font-size: 	20px;
		width: 140px;
   		height: 140px;
   		text-align: center;
   		padding: 30px 0;
	}
/* footer */
	.copyRight{
		font-size: 1em;
	}
	.footer{
		padding-top: 5%;
		padding-bottom: 5%;
		background: black;
	}
/* Menu */ 
	ul{
		list-style: none;
	}
	.activeMenu{
		color: #ba0202 !important;
	}
	.sliderNew{
		background: url(<?php echo "'".base_url("img/slider/img/img1.png")."'"; ?>);
		background-repeat: none;
		background-size: 100%;
		background-size: cover;
		padding: 0;
		/*min-height: 550px;*/
	}
	.menu{
		background-color: rgba(255, 255, 255, 0.5);
		text-transform: uppercase;
		border-top: 2px solid #cccccc; 
	}
	.menu ul{
		margin-left: 3%;
		margin-right: 3%;
		margin-bottom: 0;
	}
	.menu ul li{
		list-style: none;
		display: inline-block;
		border-right: 1px solid #d1d1d1;
		padding: 1%;
		/*padding-right: 2%;
		padding-left: 2%;*/

	}
	.menu ul > li > a{
		color: #555555;
		font-family: 'proximaNovaBold';
	}
	.menu ul > li > a:hover{
		font-style: normal;
		text-decoration: none;
		color: #BA0202;
	}
/* Test */ 
	.white{
		background: #ffffff;
	}
	.red{
		background: red;
	}
	.green{
		background: green
	}
	.blue{
		background: blue;
	}
	.pink{
		background: pink;
	}
	.gray{
		background: gray;
	}
	.purple{
		background: purple;
	}
/* generals */ 
	.alignTop{
		vertical-align: top;
	}
	.imgLine{
		display: inline-block;
	}
	.imgCenter{
		margin: 0 auto;
	}
	.paddingNull{
		padding: 0;
	}
	.bold{
		font-weight: bold;
	}
/* calculator */ 
	.calculadora{
		background: #d2d1d1;
		margin-top: 2%;
		padding-top: 2%;
		padding-bottom: 2%;
	}
	.calculadora label{
		font-family: 'proximaNovaBold';
		color: #666666;
	}
	.calculadora input,.calculadora button{
		min-height: 60px;
		font-size: 1.5em;
		font-family: 'proximaNovaSemiBold';
	}
	.calculadora button{
		color: white;
	}
	#clearButton{
		background: #585e6a
	}
	#calculateButton{
		background: #f06030;
	}
	.calculatorSection h4{
		font-family: 'proximaNovaSemiBold';
		color: #737373;
	}
	.calculatorSection h2{
		text-transform: uppercase;
	}
/* revancha menu bootstrap */ 
	
	.navbar-fixed-top, .navbar-fixed-bottom{
		position: static;
	}
	.navbar-default{
		background-image: none;
		background-color: rgba(255, 255, 255, 0.5);
		text-transform: uppercase;
	}
	.navbar-default,.navbar-nav > li > .dropdown-menu{
		background-color: rgba(255, 255, 255, 0.5);
	}
	.caret{
		display: none;
	}
	.nav > li{
		display: inline-block;
		list-style: none;
		padding-left: 3%;
		padding-right: 3%;
		border-right: 1px solid #d1d1d1; /* PORFAVOR DESCOMENTAR ESTO */ 
		/*border-right: 2px solid red;*/
		padding-top: 1%;
		padding-bottom: 1%;
		/*padding: 1%;*/
	}
	.nav > li:nth-child(6) {
		border-right: none;
	}
	.navbar-nav{
		width: 97%;
	}
	.navbar-default .navbar-nav > li > a{
		color: #555555;
		font-family: 'proximaNovaBold';
	}
	.navbar-nav > li > a{
		padding-top: 0;
		padding-bottom: 0;
	}
	.nav > li{
		list-style: none;
		padding-top: 2%;
		padding-bottom: 2%;
		padding-right: 4%;
		padding-left: 4%;
	}
	.navbar{
		height: auto;
		min-height: 0;
		padding: 0;
	}
	.dropdown-menu > li > a{
		text-align: center;
		font-size: 2em;
		padding-top: 5%;
		padding-bottom: 5%;
	}
	.dropdown-menu .divider{
		background-color: #cccccc;
	}
/* eventos */
	/* header */ 
		#tw > a > .circle-text:hover:after{
			background: #5EA9DD;
		}
		
		#in > a > .circle-text:hover:after{
			/*content: url(<?php echo "'".base_url("img/social_networks/in2.png")."'"; ?>);	*/
			background: #007BB6;
		}

		#fb > a > .circle-text:hover:after{
			background: #4A6EA9;
		}
		#youtube > a > .circle-text:hover:after{
			background: #DF2926;
		}
		#pinterest > a > .circle-text:hover:after{
			background: #CD2129;
		}
		#wordpress > a > .circle-text:hover:after{
			background: #22769B;
		}
		



		/* menu fijo al top  */
		.menu-fijo {
			background: rgba(255, 255, 255, 1);
			position: fixed;
			top: 0;
			z-index:900000000;
		}
		.menu-contenedor{
			z-index:900000000;
		}
		.amostrar{
			width:100%;
			margin-left:-15px;
			z-index:900000000;
			opacity:0;
		}

		.showmenu{
			opacity:1;	
		}

		.hidemenu{
			display:none;
		}











		/* estilos para el footer */


















#footer_container {
  border-top: 2px solid #ce4e25;
  background-color: #24231f;
  width: 100%;
  font-family: "Nunito", "Helvetica", sans-serif; }
  #footer_container .site-footer.row a {
    text-decoration: none;
    color: #cccccc; }
  #footer_container .site-footer.row #recent-posts-2 h3.widget-title {
    color: #cccccc; }
  #footer_container .site-footer.row #recent-posts-2 ul li {
    padding: 12px 0;
    list-style: none;
    line-height: 1.5em; }
    #footer_container .site-footer.row #recent-posts-2 ul li a {
      font-size: 2rem;
      font-size: 20px; }
  #footer_container .site-footer.row #simple_tweet_widget-2 h3.widget-title {
    color: #cccccc; }
  #footer_container .site-footer.row #simple_tweet_widget-2 .tweets {
    color: #cccccc; }
  #footer_container .site-footer.row #simple_tweet_widget-2 .tweets-meta {
    margin: 2em 0 0em 0; }
    #footer_container .site-footer.row #simple_tweet_widget-2 .tweets-meta strong.real-name {
      color: #cccccc; }
    #footer_container .site-footer.row #simple_tweet_widget-2 .tweets-meta p.twitget-user-description {
      color: #cccccc; }

      .tweets-meta a {
      	color:red;
      }

    #footer_container .site-footer.row #text-4 h3.widget-title {
      color: #fbb03b !important;
      text-align: right; }
    #footer_container .site-footer.row #text-4 a.foot-social-ico {
      font-size: 10px;
      float: left;
      width: 4.3em;
      height: 4.3em;
      line-height: 4.3em;
      list-style-type: none;
      text-align: center;
      margin-right: 8px;
      margin-bottom: 16px;
      background-color: #fbb03b;
      display: block;
      border-radius: 50%; }
      #footer_container .site-footer.row #text-4 a.foot-social-ico .fa {
        font-size: 2em;
        vertical-align: middle;
        color: #24231f; }
      #footer_container .site-footer.row #text-4 a.foot-social-ico:hover {
        background-color: #faa622; }
  #footer_container .credits.row {
    padding: 20px 0; }
    #footer_container .credits.row p {
      font-family: "Nunito", "Helvetica", sans-serif;
      font-weight: 400;
      padding: 0; }
      #footer_container .credits.row p a {
        color: #cccccc;
        font-size: 2rem;
        font-size: 20px;
        text-decoration: none; }
        #footer_container .credits.row p a:visited {
          color: #cccccc; }
    #footer_container .credits.row a.terms {
      color: #cccccc; }





#header_container, #footer_container, #main_content_container {
  width: 100%;
  padding-left: 0;
  padding-right: 0;
  clear: both; }
  .container#header_container > .row, .container#footer_container > .row, .container#main_content_container > .row, .container-fluid#header_container > .row, .container-fluid#footer_container > .row, .container-fluid#main_content_container > .row {
    margin-left: 0;
    margin-right: 0; }
    .container#header_container > .row > .col:first-of-type, .container#footer_container > .row > .col:first-of-type, .container#main_content_container > .row > .col:first-of-type, .container-fluid#header_container > .row > .col:first-of-type, .container-fluid#footer_container > .row > .col:first-of-type, .container-fluid#main_content_container > .row > .col:first-of-type {
      padding-left: 0; }
    .container#header_container > .row > .col:last-of-type, .container#footer_container > .row > .col:last-of-type, .container#main_content_container > .row > .col:last-of-type, .container-fluid#header_container > .row > .col:last-of-type, .container-fluid#footer_container > .row > .col:last-of-type, .container-fluid#main_content_container > .row > .col:last-of-type {
      padding-right: 0; }

.blog #main_content_container #primary.site-content,
.archive #main_content_container #primary.site-content,
.single #main_content_container #primary.site-content, #header_container .site-header .inner, #footer_container .site-footer .inner, .search #main_content_container .site-content,
.error404 #main_content_container .site-content {
  clear: both;
  width: 90%;
  max-width: 1100px;
  margin: 0 auto;
  float: none; }

.blog #main_content_container #primary.site-content,
.archive #main_content_container #primary.site-content,
.single #main_content_container #primary.site-content {
  max-width: 699.6px; }

#footer_container {
  width: 100%; }

.site-footer {
  clear: both;
  width: 90%;
  font-size: 16px;
  font-size: 1rem;
  padding: 30px 0 0 0;
  padding: 1.875rem 0 0 0; }

.site-footer a:focus {
  outline: thin dotted;
  color: black; }

.site-footer .widget-area .widget {
  margin-bottom: 16px;
  margin-bottom: 1rem; }

#footer_container .site-footer {
  clear: both;
  font-size: 1.4em;
  line-height: 1em;
  padding-top: 0;
  padding-bottom: 0;
  width: 100%;
  background-color: black; }
  #footer_container .site-footer .inner {
    position: relative; }
  #footer_container .site-footer .col:first-of-type {
    padding-left: 0; }
  #footer_container .site-footer .col:last-of-type {
    padding-right: 0; }
  #footer_container .site-footer .navigation {
    display: inline-block;
    width: 100%;
    padding: 30px 0 50px 0; }
    #footer_container .site-footer .navigation .main-navigation .nav-menu {
      text-align: justify; }
      #footer_container .site-footer .navigation .main-navigation .nav-menu:after {
        content: '';
        display: inline-block;
        width: 100%; }
      #footer_container .site-footer .navigation .main-navigation .nav-menu > li {
        display: inline-block;
        float: none;
        list-style: none;
        margin: 0;
        position: static; }
      #footer_container .site-footer .navigation .main-navigation .nav-menu li a {
        color: white; }
  #footer_container .site-footer .sidebars {
    display: inline-block;
    width: 100%; }
#footer_container .foot-social-ico {
  font-size: 10px;
  float: left;
  width: 4.3em;
  height: 4.3em;
  line-height: 4.3em;
  list-style-type: none;
  text-align: center;
  margin-right: 20px;
  margin-bottom: 16px;
  display: inline-block;
  border-radius: 50%; }
  #footer_container .foot-social-ico .fa {
    font-size: 2em;
    vertical-align: middle; }
#footer_container .credits {
  background-color: #444444;
  color: #fdfdfd;
  text-align: center; }
  #footer_container .credits p {
    font-size: 14px;
    font-size: 0.875rem; }
  #footer_container .credits a {
    color: #555; }
    #footer_container .credits a:visited {
      color: #555; }
    #footer_container .credits a:hover {
      color: #2997AB; }