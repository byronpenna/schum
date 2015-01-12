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