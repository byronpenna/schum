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
	
		


		/* 11,12,13 */
		/* menu fijo al top  */
		.menu-fijo {
			background: rgba(230,229,230, 0.8);
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
  border-top: 2px solid #ce4e25 !important;
  background-color: #24231f !important;
  width: 100% !important;
  font-family: "Nunito", "Helvetica", sans-serif; !important}
  #footer_container .site-footer.row a {
    text-decoration: none !important;
    color: #cccccc !important;  }
  #footer_container .site-footer.row #recent-posts-2 h3.widget-title {
    color: #cccccc !important;  }
  #footer_container .site-footer.row #recent-posts-2 ul li {
    padding: 12px 0 !important;
    list-style: none !important;
    line-height: 1.5em !important; }
    #footer_container .site-footer.row #recent-posts-2 ul li a {
      font-size: 2rem !important;
      font-size: 20px !important; }
  #footer_container .site-footer.row #simple_tweet_widget-2 h3.widget-title {
    color: #cccccc !important; }
  #footer_container .site-footer.row #simple_tweet_widget-2 .tweets {
    color: #cccccc !important; }
  #footer_container .site-footer.row #simple_tweet_widget-2 .tweets-meta {
    margin: 2em 0 0em 0 !important; }
    #footer_container .site-footer.row #simple_tweet_widget-2 .tweets-meta strong.real-name {
      color: #cccccc !important; }
    #footer_container .site-footer.row #simple_tweet_widget-2 .tweets-meta p.twitget-user-description {
      color: #cccccc !important; 
  		margin-top:10px;
  		width:100%;
  		height: auto;
  	}

      .tweets-meta a {
      	color:red !important;
      }

    #footer_container .site-footer.row #text-4 h3.widget-title {
      color: white !important;
      text-align: right !important; }
    #footer_container .site-footer.row #text-4 a.foot-social-ico {
      font-size: 10px !important;
      float: left !important;
      width: 4.3em !important;
      height: 4.3em !important;
      line-height: 4.3em !important;
      list-style-type: none !important;
      text-align: center !important;
      margin-right: 8px !important;
      margin-bottom: 16px !important;
      background-color: gray ;
      display: block !important;
      border-radius: 50% !important;  }
      #footer_container .site-footer.row #text-4 a.foot-social-ico .fa {
        font-size: 2em !important;
        vertical-align: middle !important;
        color: white !important;  }
    #footer_container .site-footer.row #text-4 a.foot-social-ico:hover {
        /*background-color: skyblue; */
    }
  #footer_container .credits.row {
    padding: 20px 0 !important; }
    #footer_container .credits.row p {
      font-family: "Nunito", "Helvetica", sans-serif !important;
      font-weight: 400 !important;
      padding: 0 !important; }
      #footer_container .credits.row p a {
        color: #cccccc !important;
        font-size: 2rem  !important;
        font-size: 20px !important;
        text-decoration: none !important; }
        #footer_container .credits.row p a:visited {
          color: #cccccc !important; }
    #footer_container .credits.row a.terms {
      color: #cccccc !important; }





#header_container, #footer_container, #main_content_container {
  width: 100% !important;
  padding-left: 0 !important;
  padding-right: 0 !important;
  clear: both !important; }
  .container#header_container > .row, .container#footer_container > .row, .container#main_content_container > .row, .container-fluid#header_container > .row, .container-fluid#footer_container > .row, .container-fluid#main_content_container > .row {
    margin-left: 0 !important;
    margin-right: 0 !important; }
    .container#header_container > .row > .col:first-of-type, .container#footer_container > .row > .col:first-of-type, .container#main_content_container > .row > .col:first-of-type, .container-fluid#header_container > .row > .col:first-of-type, .container-fluid#footer_container > .row > .col:first-of-type, .container-fluid#main_content_container > .row > .col:first-of-type {
      padding-left: 0 !important; }
    .container#header_container > .row > .col:last-of-type, .container#footer_container > .row > .col:last-of-type, .container#main_content_container > .row > .col:last-of-type, .container-fluid#header_container > .row > .col:last-of-type, .container-fluid#footer_container > .row > .col:last-of-type, .container-fluid#main_content_container > .row > .col:last-of-type {
      padding-right: 0 !important; }

.blog #main_content_container #primary.site-content,
.archive #main_content_container #primary.site-content,
.single #main_content_container #primary.site-content, #header_container .site-header .inner, #footer_container .site-footer .inner, .search #main_content_container .site-content,
.error404 #main_content_container .site-content {
  clear: both !important;
  width: 90% !important;
  max-width: 1100px !important;
  margin: 0 auto !important;
  float: none !important; }

.blog #main_content_container #primary.site-content,
.archive #main_content_container #primary.site-content,
.single #main_content_container #primary.site-content {
  max-width: 699.6px !important; }

#footer_container {
  width: 100% !important; }

.site-footer {
  clear: both !important;
  width: 90% !important;
  font-size: 16px !important;
  font-size: 1rem !important;
  padding: 30px 0 0 0 !important;
  padding: 1.875rem 0 0 0 !important;  }

.site-footer a:focus {
  outline: thin dotted !important;
  color: black !important; }

.site-footer .widget-area .widget {
  margin-bottom: 16px !important;
  margin-bottom: 1rem !important; }

#footer_container .site-footer {
  clear: both !important;
  font-size: 1.4em !important;
  line-height: 1em !important;
  padding-top: 0 !important;
  padding-bottom: 0 !important;
  width: 100% !important;
  background-color: black !important; }
  #footer_container .site-footer .inner {
    position: relative !important; }
  #footer_container .site-footer .col:first-of-type {
    padding-left: 0 !important; }
  #footer_container .site-footer .col:last-of-type {
    padding-right: 0 !important; }
  #footer_container .site-footer .navigation {
    display: inline-block !important;
    width: 100% !important;
    padding: 30px 0 50px 0 !important; }
    #footer_container .site-footer .navigation .main-navigation .nav-menu {
      text-align: justify !important; }
      #footer_container .site-footer .navigation .main-navigation .nav-menu:after {
        content: '' !important;
        display: inline-block !important;
        width: 100% !important;   }
      #footer_container .site-footer .navigation .main-navigation .nav-menu > li {
        display: inline-block !important;
        float: none !important;
        list-style: none !important;
        margin: 0 !important;
        position: static !important; }
      #footer_container .site-footer .navigation .main-navigation .nav-menu li a {
        color: white !important; }
  #footer_container .site-footer .sidebars {
    display: inline-block !important;
    width: 100% !important; }
#footer_container .foot-social-ico {
  font-size: 10px !important;
  float: left !important;
  width: 4.3em !important;
  height: 4.3em !important;
  line-height: 4.3em;
  list-style-type: none !important;
  text-align: center !important;
  margin-right: 20px !important;
  margin-bottom: 16px !important;
  display: inline-block !important;
  border-radius: 50% !important; }
  #footer_container .foot-social-ico .fa {
    font-size: 2em !important;
    vertical-align: middle !important;  }
#footer_container .credits {
  background-color: #444444 !important;
  color: #fdfdfd !important;
  text-align: center !important; }
  #footer_container .credits p {
    font-size: 14px !important;
    font-size: 0.875rem !important; }
  #footer_container .credits a {
    color: #555 !important; }
    #footer_container .credits a:visited {
      color: #555 !important; }
    #footer_container .credits a:hover {
      color: #2997AB !important; }

      li:before{
		width: 0px !important;
		height: 0px !important;
	}

.connectFooter{
	color: white;
}

.tituloFooter{
	color: white !important;
	font-weight: bold;
}

/* header */ 
		#tw > a > .circle-text:hover:after,#twitterFooter:hover{
			background: #5EA9DD !important;
		}
		
		#in > a > .circle-text:hover:after,#inFooter:hover{
			/*content: url(<?php echo "'".base_url("img/social_networks/in2.png")."'"; ?>);	*/
			background: #007BB6 !important;
		}

		#fb > a > .circle-text:hover:after,#fbFooter:hover{
			background: #4A6EA9 !important;
		}
		#youtube > a > .circle-text:hover:after,#youtubeFooter:hover{
			background: #DF2926 !important;
		}
		#pinterest > a > .circle-text:hover:after,#pinterestFooter:hover{
			background: #CD2129 !important;
		}
		#wordpress > a > .circle-text:hover:after{
			background: #22769B !important;
		}