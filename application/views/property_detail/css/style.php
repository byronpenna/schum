.listingSort{
	display: inline-block;
}
.iframeVirtual{
	width: 100%;
	height: 700px;
}
#imgModal{
	width:100%;
	height:80%;
	cursor: pointer;
}
#dialogoModal{
	margin-top: 0;
}
#modalTour #dialogoModal,.modal-dialog{
	width: 100% !important;
	height: 400px !important;
}
#myModal #contenidoModal,.modal-dialog{
	width: 700px;
	margin:auto;
	height: 500px;
	margin-top: 5%;
}
.dvImgModal{
	width: 100%; 
	height: auto;
}
.col-xs-6{
	padding: 2%;
}
.navControl{
	top: 50%;
	left:-1%;
	position:absolute;
	width: 100%;
	background: none;
	display: inline-block;
}


.contactAgentText1{
	display: none;
}
div.imgfull{
  max-height: 200%;
  overflow: hidden;
  margin: 0 auto;
  padding: 0;
  position: relative;
}

div.imgfull img {
  display: block;
  max-width: none !important;
}
/*img.imgfull{
    margin-left: 0px ;
    margin-right: 0px ;
}*/

.fbbox iframe{
	display: none;
}
.fa-facebook-square {
	font-size: 5em;
	color: white;
	
}
.facebookcool {
	margin-top: 26%;
	padding: 10px;
	text-align: center;
	background-color: #425F9C;
	width: 90px;
	border-radius: 20px;
}
.conteFB {
	display: none;
}
.textoFB {
	color:#425F9C;
	font-family: ProximaNova;
	font-size: 2em;
	margin-left: 85%;
	margin-top: -52%;
}
.readmore{
	margin-bottom: 5%;
	background: 
}
.descript{
	word-break: break-all;
}
a:hover{
	text-decoration: none;
}
.punto{
	color: #d2d1d1;
}
label{
    margin-bottom: 0px !important;
}
.input-group-addon{
    background-color: #be0000;
    color: #fff !important;
    border-radius: 0px !important;
    border: none !important;
}
.icon{
    color: #fff;
}
.navbar{
	margin-bottom: 35%;
}
/* Slider */ 
	.menu{
		margin-bottom: 30%;
	}
	.sliderNew{
		background: green;
		
		/*echo "'".base_url("img/property_detail/slider/img1.png")."'"*/
		background: url(<?php echo $imgSlider; ?>);
		/*background: red;*/
		background-repeat: none;
		background-position: center;
		background-size: 90% 100%;
		background-repeat: no-repeat;
	}
	.control:hover{
		cursor: pointer;
	}
/* Body section */
	.bodySection{
		margin-left: 4%;
		margin-right: 4%;
	}
/* Slider */ 
	.miniaturasSlider{
		margin-top: 2%;
	}
	.miniaturasSlider{
		padding: 0;
	}
	.minSection{
		padding-right: 1%;
		cursor: pointer;
	}
/* summary */
	.summarySection h2{
		color: #be0000;
		text-transform: uppercase;
		font-family: 'proximaNovaSemiBold';
	}
	.boxSummary{
		border-right:  2px solid;
		background: #dddddd;
		padding-top: 5%;
		padding-bottom: 5%;
	}
	.parentBoxSummary{

	}
/* Description */ 
	/* Left */
		.descriptionSection{
			padding-top: 3%;
		}
		.imgBlockDescription img{
			width: 10%;
		}
		.blockDescriptions{
			padding-left: 20%;
			padding-right: 20%;			
			padding-top: 5%;
			padding-bottom: 5%;
			margin-bottom: 3%;
			background: #314782;
		}
		.txtBlockDescription{
			margin-top: 3%;
		}
		.txtBlockDescription p {
			color: #FFFFFF;
			text-transform: uppercase;
			text-decoration: none;
			font-family: 'proximaNovaSemiBold';
		}
		#openHouseTxtBlock p{
			color: white;
		}

		.titleBlockDescription h2{
			text-align: center;
			color: white;
			text-transform: uppercase;
			font-family: 'proximaNovaBold';
		}
		#openHouseBlock{
			background: #ba0202;
			background: url(<?php echo "'".base_url("img/elements/fondo_calendar.png")."'"; ?>);

			color: #fff;
		}
	/* Right */ 
		/* ######## */
			.dataDescription{
				padding-left: 2%;
				padding-right: 2%;
			}
			.dataDescription h2{
				color: #be0000;
				text-transform: uppercase;
				margin: 0;
				font-family: 'proximaNovaSemiBold';
				font-size: 3.5em;
			}
			.dataDescription p,.additionalDetailsBody span{
				font-size: 2.5em;
				font-family: 'proximaRegular';
				margin-top: 2.5%;
			}
		/* ######## */
			.keyFeatureBlock{
				padding-top: 5%;
				width:100%;
			}	
			.keyFeatureBlock h2{
				margin-bottom: 2%;
			}
			.keyFeatureBlock p{
				margin: 0;
				margin-top: 1%;
			}
		/* ####### */ 
			.additionalDetailsBody .title{
				color: #b6b6b6
			}
			.rowAditionalDetails{
				margin-top: 2.3%;
			}
/* Video tour */
	h2{
		color: #be0000;
		font-family: 'proximaNovaSemiBold';
		text-transform: uppercase;
	} 
	.youtubeVideo{
		width: 100%;
		min-height: 1000px;
	}
/* agent section */ 
	.agentSection h3{
		font-family: 'proximaNovaSemiBold';
		color: #666666;
		text-transform: uppercase;
		margin: 0;
	}
	.contactAgent span{
		text-transform: uppercase;

	}
	.contactAgent{
		margin-top: 3%;
		margin-bottom: 3%;
	}
	.contactAgentText{
		padding-top: 4%;
		padding-left: 4%;
	}
	.agent{
		border: 2px solid #d9d9d9;
	}
	/*.titulo h2 {
		margin-bottom: 0px !important;
	}*/
	.freeEbookSection{
		padding: 4%;
	}
	.freeEbookSection input{
		background: #f0f0f0;
		font-size: 1.5em;
		margin-bottom: 2%;
	}
	.buttonEnviarFreebook{
		background: #be0000;
		padding: 2%;
	}
	.buttonEnviarFreebook img{
		width: 60%;
	}
	.privacyFreeBook{
		margin-top: 3%;
	}
	.privacyFreeBook span{
		font-size: 1.5em;
	}
/* calculator section */ 
	.calculatorSection,.agentSection,.videoTourSection,.locationSection{
		margin-top: 4%;
	}
	.calculatorSection h4{
		font-family: 'proximaNovaSemiBold';
		color: #737373;
	}
		


	

	/*.fb-like-box{
		width: 100% !important;		
	}

	.fb-like-box > span{
		width: 100% !important;		
	}

	.fb-like-box > span > iframe{
		width: 100% !important;
		height: 100% !important;
	}

	._4s7c{
		height: 100% !important;
	}*/

/*	.fb-wrap {
  width:50%;
  margin: 0 auto;
}

.fb-like-box, .fb-like-box span, .fb-like-box span iframe[style] { width: 100% !important; }*/

	.boxSummary{	
		border: solid 1px #ccc;
	}

/*box summary*/
.boxSummary label{
    font-family: "proximaNovaBold";
}
.boxSummary p{
    font-family: "proximaNovaLight";
}
.nameSection h2{
    font-family: "proximaNovaBold";
}
.nameSection h4{
    font-family: "proximaNovaSemiBold";
}

.nameSection1{
	display: none;
}

.readmore{
    border: none;
    background-color: #314782;
}
.readmore:hover{
	background: #be0000;
}
.readmore a{
	color:#FFFFFF !important;
}
.bot{
    padding-left: 0px !important;
    padding-right: 0px !important;
}
.butto{
    width: 100% !important;
    padding-left: 0px !important;
    padding-right: 0px !important;
    text-align: center;
    
}
#contkey{
	width: 20%;
	height: auto;
	background: none repeat scroll 0% 0% rgba(243, 243, 243, 0.51);
	word-break:break-word;
}
.ckeyK{
	margin-left:10px;
}
.keyFeatureBlock article{
	display: inline-block;
	vertical-align: top;
	margin-top:5px;	
}
.silicon h2{
	margin-top: 5%;
}
.silicon h4{
	margin-top: 10%;
	margin-bottom: 10%;
	margin-left: 5%;
}
.silicon p{
	margin-top: 10%;
	margin-bottom: 10%;
	margin-left: 5%;
}

/*################################*/
.txtSubtitle{
	color: black !important;
}
.contenedor-cubos{
	background:none;
	width: 100%;
}

.contenedor-cubos article{
	display: inline-block;
	vertical-align: top;
	margin-left:5px;
	width: 32%;
	height: 195px;
	padding:0px;
	padding-top:15px;
	cursor:pointer;
}

#virtualTourBlock p {
	font-size:1.5em;
}

.conte-readmore{
	display: none;
}

.summarySection1{
	display: none;
}

.imgControls{
	display: none;
}



.conteSlider{
	/*background: orange;*/
	width: 110%;
	height: 900px;
	margin-left: -5%;
}

.imgNewSlider{
	width: 95%;
	height: 120%;
	margin-left: 5.5%;
	position: absolute;
}