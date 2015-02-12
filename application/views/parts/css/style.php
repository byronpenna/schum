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
		height: 400px;
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
	/* 	background: url(<?php echo "'".base_url("img/slider/img/img1.png")."'"; ?>);
	background-repeat: none !important;
	background-size: 100% !important;
	background-size: cover !important; */
		padding: 0;
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
			z-index:100;
		}

		.menu-contenedor{
			z-index:100;
		}
		.amostrar{
			width:100%;
			margin-left:-15px;
			z-index:100;
			opacity:0;
		}

		.showmenu{
			opacity:1;
		}

		.hidemenu{
			opacity:0;
		}

	

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


		#tw > a > .circle-text:hover:after,#twitterFooter:hover{
			background: #5EA9DD !important;
		}
		
		#in > a > .circle-text:hover:after,#inFooter:hover{
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

	#facebook_area{
		margin-left:100px;
	}

/* empieza el estilo del footer */


.site-footer {
  clear: both;
  width: 90%;
  font-size: 1em;
  padding: 30px 0 0 0;
  padding: 1.875rem 0 0 0; }

  #footer_container {
  width: 100%; 
	border-top:0.2em solid #be0000;}
.site-footer a:focus {
  outline: thin dotted;
  color: black; }

.site-footer .widget-area .widget {
  margin-bottom: 16px;
  margin-bottom: 1rem; 

}

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
    width: 95%;
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
        margin: 0;
        position: static; }
      	#footer_container .site-footer .navigation .main-navigation .nav-menu li a {
        	color: white; }
  		#footer_container .site-footer .sidebars {
		    display: inline-block;
		    width: 90%;
		    margin-left: 70px; }
		#footer_container .foot-social-ico {
			  font-size: 10px;
			  float: left;
			  width: 4.3em;
			  height: 4.3em;
			  line-height: 4.3em;
			  list-style-type: none;
			  text-align: center;
			  margin-right: 8px;
			  margin-bottom: 16px;
			  display: inline-block;
			  border-radius: 50%; }
  		#footer_container .foot-social-ico .fa {
	    	font-size: 2em;
	    	vertical-align: middle; }
#footer_container .credits {
  background-color: #444444;
  color: #fdfdfd;
  text-align: center;
	width: 100%;
	padding-top: 1em;
	padding-bottom: 1em;
   }
  #footer_container .credits p {
    font-size: 14px;
    font-size: 0.875rem; }
  #footer_container .credits a {
    color: #555; }
    #footer_container .credits a:visited {
      color: #555; }
    #footer_container .credits a:hover {
      color: #2997AB; }



.widget .widget-title, .widget .widgettitle, .widget #footer_container .site-footer.row #recent-posts-2 h3.widget-title, #footer_container .site-footer.row #recent-posts-2 .widget h3.widget-title, .widget #footer_container .site-footer.row #simple_tweet_widget-2 h3.widget-title, #footer_container .site-footer.row #simple_tweet_widget-2 .widget h3.widget-title, .widget #footer_container .site-footer.row #text-4 h3.widget-title, #footer_container .site-footer.row #text-4 .widget h3.widget-title {
  font: bold 1.8rem "Nunito", "Helvetica", sans-serif;
  font-size: 18px;
  font-weight: 300;
  letter-spacing: .05em;
  border-bottom: 1px solid rgba(204, 204, 204, 0.5);
  padding-bottom: 0.1em;
  margin-bottom: 0.4em;
  text-transform: uppercase; }

  #recent-posts-2 ul li{
  	margin-left: -40px;
  	margin:1.5em;
  }

	
  #footer_container a{
  	color:#CCCCCC;
  }
	
	#footer_container #recent-posts-2 a:hover{
  	color:#be0000;
  }

	#recent-posts-2 ul{
  		margin-left: -60px;
  	}

.widget .wpb_widgetised_column_heading {
  font-style: bold; }
.widget .tweets {
  padding: 0;
  margin-bottom: .5em; color:#cccccc;}
  .widget .tweets li {
    clear: both;
    overflow: auto;
    border-bottom: 1px solid rgba(204, 204, 204, 0.5);
    margin-bottom: .5em;
    padding-bottom: .5em; }
  .widget .tweets p {
    width: 70%;
    float: left;
    font-size: 0.8em;
    margin-bottom: 0;
    text-align: left; }
    .widget .tweets p.time {
      width: 30%; }
  .widget .tweets .time {
    text-align: right;
    font-style: italic;
    color: #cccccc;
    font-size: 1.5rem;
    font-size: 15px; }
.widget .tweets-meta {
  margin: 2em 0 10em 0; }
  .widget .tweets-meta strong.real-name {
    font: 1.5rem "Nunito", "Helvetica", sans-serif;
    font-weight: 400;
    display: block;
    letter-spacing: .01em;
    color: #cCCCCC; 
	margin-left:60px;
	margin-top:-50px;}
  .widget .tweets-meta a {
    font-size: 0.8em;
    font-family: "Open Sans", "Helvetica", sans-serif;
    font-weight: 500;
    margin-left:60px; }
  .widget .tweets-meta p.twitget-user-description {
    font-family: "Nunito", "Helvetica", sans-serif;
    font-size: 0.8em;
    font-weight: 300;
    line-height: 1.6;
    clear: both;
    color: #CCCCCC; 
text-align: left;}
  .widget .tweets-meta img {
    border-radius: 4px;
    margin-right: 10px; }





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

      .contSociales a{
      	background:#CCCCCC;
      	color:#000000 !important;

      }

.colorAddon {
	background-color: #585E6A !important;
}



.loader-global{
	width: 100%;
	height: 100%;
	background:#eee;
	position:absolute;
	z-index: 100;
}


/*loader*/
/* .loader {
  width: 25px;
  height: 25px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate3d(-50%,-50%,0);
  -webkit-transform: translate3d(-50%,-50%,0);
  -moz-transform: translate3d(-50%,-50%,0);
  -o-transform: translate3d(-50%,-50%,0);
  -ms-transform: translate3d(-50%,-50%,0);
  perspective: 1200;
}

.flipper {
    position: relative;
    display: block;
    height: inherit;
    width: inherit;
    animation: flip 1.2s infinite;
    -webkit-animation: flip 1.2s infinite;
    -ms-animation: flip 1.2s infinite;
    -o-animation: flip 1.2s infinite;
    -moz-animation: flip 1.2s infinite;
}

.front,
.back {
    position: absolute;
    top: 0;
    left: 0;
    backface-visibility: hidden;
    display: block;
    background-color: #d50000;
    height: 100%;
    width: 100%;
}

.back {
    background-color: orange;
    z-index: 800;
    transform: rotateY(-180deg);
    -webkit-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);
    -o-transform: rotateY(-180deg);
}

@-webkit-keyframes flip {
  
  0% {
    transform: perspective(120px) rotateX(0deg) rotateY(0deg);
  }
  
  50% {
    transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
  }
  
  100% {
    transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
  }

} */

.loader {
  width: 25px;
  height: 25px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate3d(-50%,-50%,0);
  -webkit-perspective: 1200;
  -moz-transform: translate3d(-50%,-50%,0);
  -moz-perspective: 1200;
  -o-transform: translate3d(-50%,-50%,0);
  -o-perspective: 1200;
  -ms-transform: translate3d(-50%,-50%,0);
  -ms-perspective: 1200;
}

.flipper {
    position: relative;
    display: block;
    height: inherit;
    width: inherit;
    -webkit-animation: flip 1.2s infinite ease-in-out;
    -webkit-transform-style: preserve-3d;
    -moz-animation: flip 1.2s infinite ease-in-out;
    -moz-transform-style: preserve-3d;
    -o-animation: flip 1.2s infinite ease-in-out;
    -o-transform-style: preserve-3d;
    -ms-animation: flip 1.2s infinite ease-in-out;
    -ms-transform-style: preserve-3d;
}

.front,
.back {
    position: absolute;
    top: 0;
    left: 0;
    backface-visibility: hidden;
    display: block;
    background-color: #d50000;
    height: 100%;
    width: 100%;
}

.back {
    background-color: #FFFFFF;
    z-index: 800;
    -webkit-transform: rotateY(-180deg);
    -o-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
}

@-webkit-keyframes flip {
  
  0% {
    transform: perspective(120px) rotateX(0deg) rotateY(0deg);
  }
  
  50% {
    transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
  }
  
  100% {
    transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
  }

}


/*end loader*/