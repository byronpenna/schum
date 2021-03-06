@media(min-width:500px){
    .imgListing{
			min-height: 150px;
		}
    		.searchBar > .col-sm-10 > .col-sm-2 > select,.searchBar > .col-sm-2 > button{
			font-size: 1em;
		}
		.imgListing{
			min-height: 400px;
		}
		.titleFootDescriptionCasa, .desFootDescriptionCasa{
			font-size: 0.8em;
			text-align: center;
		}
		.descripcionCasa h3{
			font-size: 1em;
		}
		.navbar{
			margin-bottom: 16%;
		}
		.descripcionCasa h5{
			font-size: 0.8em;
		}
		.descripcionCasa h2{
			font-size: 2em;
		}
		.numbers div{
			font-size: 3em;
			text-align: center;
			margin: 1%;
			width: 11%;
			/*padding-top: 1%;
			padding-bottom: 1%;*/
			padding: 1%;
			border: 2px solid;
			font-family: 'proximaNovaSemiBold';
			color: #333333;
			cursor: pointer;
		}
}
@media(max-width:767px){
	/*xs*/	

	/*Extra Dany*/

		/*Property Search*/	
			.searchSection{
				margin-top: 5%;
			}		

			/*Property seach title*/
			.titleSearch h2{
				font-size: 4em;
				text-align: center;
			}

			/*search by map*/
			.titleSearch h4{
				/*color: #333333;*/
				text-align: center;
				font-size: 2em;
				margin-top: 5%;
				margin-bottom: 2%;
			}

			/*Contenedor selects*/
			.searchBar > .col-sm-10{
				padding: 0%;
			}

			/*div Selects individuales*/
			.searchBar > .col-sm-10 > .col-sm-2{
				padding: 0.3%;				
			}

			/*selects*/
			.searchBar > .col-sm-10 > .col-sm-2 > select{
				font-size: 1.9em;		
				height: 4em;
			}

			/*Search Now container*/
			.searchBar > .col-sm-2{
				padding: 0.2%;
			}

			/*search now button*/
			.searchBar > .col-sm-2 > button{
				font-size: 2.5em;
				height: 3em;
			}


		/*Before homes*/			

			.beforeHomes{
				margin-top: 10%;
				margin-bottom: 10%;
			}

			/*result title*/
			.beforeHomes h2{
				font-size: 5em;
				text-align: center;
			}

			/*display by text*/
			.displaySection h3{
				margin-top: 5%;
				font-size: 2.2em;
				text-align: center;
			}

			/*display by select*/
			.displaySection > .col-sm-2{
				padding: 0.5%;							
			}

			.displaySection > .col-sm-2 > select{
				text-align: center;
				font-size: 3em;
				height: 2em;
			}


		/*Casas cuadritos*/

			/*cuadrito casas*/
			.casa{
				margin-top: 10%;
				padding: 3%;
			}
			
			/*Titulo de la casa*/
			.descripcionCasa h3{		
				margin-top: 2%;
				font-size: 4em;
			}

			/*Sin asignar*/
			.descripcionCasa h5{			
				margin-top: 1%;
				font-size: 2.3em;
			}

			/*precio*/
			.descripcionCasa h2{			
				margin-top: 2%;
				font-size: 4.5em;
			}
			
			/*info baños y cuartos casas*/
			.descripcionCasa > .row:nth-child(4){
				/*margin-left: -17%;*/

				font-size: 1.5em;
				margin-top: 6%;
			}

		/*Paginacion*/

			.titlePagination {
				margin-top: 10%;
				font-size: 1.8em;
			}

			.paginationSection{
				margin-top: 5%;
				margin-bottom: 2%;
			}

			#imgNavLeft{
				background-repeat: no-repeat;
				background-position: center;
				background-color: #314782;
				background-size: 15%;			
			}

			.numbers > .col-sm-1{			
				font-size: 2.5em;
			}

			#imgNavRight{
				background-repeat: no-repeat;
				background-position: center;
				background-color: #314782;
				background-size: 15%;
			}

			.imgCenter{
				margin-top: 10%;
			}

}
@media(min-width:768px){
	
	/*sm*/
	body{
		/*background: gray;*/
	}

	/*Property Search*/

		/*DIv area seach*/
		.searchSection {
			margin-top: 5%;
		}

		/*search by map*/
		.titleSearch h4{
			color: #333333;
			font-size: 0.8em;
			margin-top: 5%;
			text-decoration: underline;
		    -moz-text-decoration-color: #ccc; /* Code for Firefox */
		    -webkit-text-decoration-color: #ccc; /* Code for Firefox */
		    text-decoration-color: red;
		}

		.searchBar{
			margin-top: 2%;
		}

		/*Contenedor selects*/
		.searchBar > .col-sm-10{
			padding: 0%;
		}

		/*div Selects individuales*/
		.searchBar > .col-sm-10 > .col-sm-2{
			padding: 0.3%;			
		}

		.searchBar > .col-sm-10 > .col-sm-2 > select{
			font-size: 1em;		
		}

		/*Search Now*/
		.searchBar > .col-sm-2{
			padding: 0.2%;
		}

	/*Before homes*/
		.beforeHomes{
			margin-top: 3%;
		}

		/*result title*/
		.beforeHomes h2{
			font-size: 1.8em;
		}

		/*display by text*/
		.displaySection h3{
			margin-top: 7%;
			font-size: 1em;
		}

		/*display by select*/
		.displaySection > .col-sm-2{
			padding: 0.5%;			
		}


	/*Casas cuadritos*/

		/*cuadrito casas*/
		.casa{			
			padding: 3%;
		}
		
		/*Titulo de la casa*/
		.descripcionCasa h3{		
			margin-top: 2%;
			font-size: 1.6em;
		}

		/*Sin asignar*/
		.descripcionCasa h5{			
			margin-top: 1%;
			font-size: 1em;
		}

		/*precio*/
		.descripcionCasa h2{			
			margin-top: 2%;
			font-size: 2.2em;
		}
		
		/*info baños y cuartos casas*/
		.descripcionCasa > .row:nth-child(4){
			/*margin-left: -17%;*/
			font-size: 0.8em;
			margin-top: 2%;
		}

	/*Paginacion*/

		.paginationSection{
			margin-top: 5%;
		}

		#imgNavLeft{
			background-size: 85%;
		}

		.numbers > .col-sm-1{			
			font-size: 1em;
		}

		#imgNavRight{
			background-size: 85%;
		}

}
@media(min-width:770px){
    .imgListing{
			min-height: 150px;
		}
		.serchi{
			font-size: 1.3em;
			padding-left: 0%;
			padding-right: 5%;
		}
	
    		.searchBar > .col-sm-10 > .col-sm-2 > select,.searchBar > .col-sm-2 > button{
			font-size: 0.5em;
            height: 40px;
			padding-top: 3%;
			padding-bottom: 3%;
		}
		.imgListing{
			min-height: 150px;
		}
        .textEstadoCasa{
            color: #000 !Important;
			font-size: 3em;
			font-weight: 900;
            text-shadow: 2px 0 0 #fff, -2px 0 0 #fff, 0 2px 0 #fff, 0 -2px 0 #fff, 1px 1px #fff, -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0              #fff;
            border: 5px
		}
		.titleFootDescriptionCasa, .desFootDescriptionCasa{
			font-size: 0.8em;
			text-align: center;
		}
		.descripcionCasa h3{
			font-size: 0.8em;
		}
		.navbar{
			margin-bottom: 16%;
		}
		.descripcionCasa h5{
			font-size: 0.8em;
		}
		.descripcionCasa h2{
			font-size: 2em;
		}
}
@media(min-width:992px){
	.serchi{
			font-size: 1.3em;
			padding-left: 0%;
			padding-right: 5%;
		}
	
	body{
		/*background: blue;*/
	}
    .imgListing{
			min-height: 230px;
		}
    		.searchBar > .col-sm-10 > .col-sm-2 > select,.searchBar > .col-sm-2 > button{
			font-size: 0.55em;
            height: 50px;
			padding-top: 3%;
			padding-bottom: 3%;
		}
		/*display by text*/
		.displaySection h3{
			margin-top: 7%;
			font-size: 2.2em;
		}
		/*El dezplegable*/
		.displaySection select{
			font-size: 2em;
			width: 13%;
			margin-left: 4%;
		}
		.imgListing{
			min-height: 160px;
		}
		.titleFootDescriptionCasa, .desFootDescriptionCasa{
			font-size: 0.8em;
			text-align: center;
		}
		.descripcionCasa h3{
			font-size: 1em;
		}
		.navbar{
			margin-bottom: 16%;
		}
		.descripcionCasa h5{
			font-size: 0.8em;
		}
		.descripcionCasa h2{
			font-size: 2em;
		}
}
@media(min-width:1100px){
		.serchi{
			font-size: 1.3em;
			padding-left: 0%;
			padding-right: 5%;
		}
    
    		.searchBar > .col-sm-10 > .col-sm-2 > select,.searchBar > .col-sm-2 > button{
			font-size: 0.8em;
            height: 60px;
			padding-top: 3%;
			padding-bottom: 3%;
		}
		/*display by text*/
		.displaySection h3{
			margin-top: 7%;
			font-size: 2.2em;
		}
		/*El dezplegable*/
		.displaySection select{
			font-size: 2em;
			width: 13%;
			margin-left: 4%;
		}
		.imgListing{
			min-height: 160px;
		}
		.titleFootDescriptionCasa, .desFootDescriptionCasa{
			font-size: 0.8em;
			text-align: center;
		}
		.descripcionCasa h3{
			font-size: 1em;
		}
		.navbar{
			margin-bottom: 16%;
		}
		.descripcionCasa h5{
			font-size: 0.8em;
		}
		.descripcionCasa h2{
			font-size: 2em;
		}
}		
@media(min-width:1200px){
	body{
		/*background: pink;*/
	}
	/*ahhh */
		.serchi{
			font-size: 1.3em;
			padding-left: 0%;
			padding-right: 5%;
		}
		.searchBar > .col-sm-10 > .col-sm-2 > select,.searchBar > .col-sm-2 > button{
			font-size: 1em;
            height: 50px;
			padding-top: 3%;
			padding-bottom: 3%;
		}
		/*display by text*/
		.displaySection h3{
			margin-top: 7%;
			font-size: 2.2em;
		}
		/*El dezplegable*/
		.displaySection select{
			font-size: 2em;
			width: 13%;
			margin-left: 4%;
		}
		.imgListing{
			min-height: 160px;
		}
        .textEstadoCasa{
            color: #000 !Important;
			font-size: 4em;
			font-weight: 900;
            text-shadow: 2px 0 0 #fff, -2px 0 0 #fff, 0 2px 0 #fff, 0 -2px 0 #fff, 1px 1px #fff, -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0              #fff;
            border: 5px
		}
		.titleFootDescriptionCasa, .desFootDescriptionCasa{
			font-size: 0.8em;
			text-align: center;
		}
		.descripcionCasa h3{
			font-size: 1em;
		}
		.navbar{
			margin-bottom: 16%;
		}
		.descripcionCasa h5{
			font-size: 0.8em;
		}
		.descripcionCasa h2{
			font-size: 2em;
		}
}
@media(min-width:1300px){
		.serchi{
			font-size: 1.4em;
			padding-left: 0%;
			padding-right: 5%;
		}
    	.searchBar > .col-sm-10 > .col-sm-2 > select,.searchBar > .col-sm-2 > button{
			font-size: 1em;
            height: 60px;
			padding-top: 3%;
			padding-bottom: 3%;
		}
		/*display by text*/
		.displaySection h3{
			margin-top: 7%;
			font-size: 2.2em;
		}
		/*El dezplegable*/
		.displaySection select{
			font-size: 1.2em;
			width: 20%;
			margin-left: 4%;
		}
		.imgListing{
			min-height: 160px;
		}
		.titleFootDescriptionCasa, .desFootDescriptionCasa{
			font-size: 0.8em;
			text-align: center;
		}
		.descripcionCasa h3{
			font-size: 1em;
		}
		.navbar{
			margin-bottom: 16%;
		}
		.descripcionCasa h5{
			font-size: 0.8em;
		}
		.descripcionCasa h2{
			font-size: 2em;
		}
}

@media(min-width:1400px){

		.serchi{
			font-size: 1.4em;
			padding-left: 0%;
			padding-right: 5%;
		}
    		.searchBar > .col-sm-10 > .col-sm-2 > select,.searchBar > .col-sm-2 > button{
			font-size: 1em;
            height: 60px;
			padding-top: 3%;
			padding-bottom: 3%;
        }
        /*display by text*/
		.displaySection h3{
			margin-top: 7%;
			font-size: 2.2em;
		}
		/*El dezplegable*/
		.displaySection select{
			font-size: 2em;
			width: 13%;
			margin-left: 4%;
		}
		.imgListing{
			min-height: 230px;
		}
		.titleFootDescriptionCasa, .desFootDescriptionCasa{
			font-size: 0.8em;
			text-align: center;
		}
		.descripcionCasa h3{
			font-size: 1.15em;
		}
		.navbar{
			margin-bottom: 16%;
		}
		.descripcionCasa h5{
			font-size: 0.8em;
		}
		.descripcionCasa h2{
			font-size: 2em;
		}
}
@media(min-width:1500px){
	/*search by map*/
		.titleSearch h4{
			color: #333333;
			font-size: 1em;
			margin-top: 5%;
			text-decoration: underline;
		    -moz-text-decoration-color: #ccc; /* Code for Firefox */
		    -webkit-text-decoration-color: #ccc; /* Code for Firefox */
		    text-decoration-color: red;
		}

		.serchi{
			font-size: 1.4em;
			padding-left: 0%;
			padding-right: 5%;
		}
		.searchBar > .col-sm-10 > .col-sm-2 > select,.searchBar > .col-sm-2 > button{
			font-size: 1.2em;
            height: 70px;
			padding-top: 3%;
			padding-bottom: 3%;
		}
		/*display by text*/
		.displaySection h3{
			margin-top: 7%;
			font-size: 2.2em;
		}
		/*El dezplegable*/
		.displaySection select{
			font-size: 2em;
			width: 13%;
			margin-left: 4%;
		}
		.imgListing{
			min-height: 230px;
		}
		.titleFootDescriptionCasa, .desFootDescriptionCasa{
			font-size: 0.8em;
			text-align: center;
		}
		.descripcionCasa h3{
			font-size: 1.2em;
		}
		.navbar{
			margin-bottom: 16%;
		}
		.descripcionCasa h5{
			font-size: 0.8em;
		}
		.descripcionCasa h2{
			font-size: 2em;
		}
}
@media(min-width:1600px){
		/*search by map*/
		.titleSearch h4{
			color: #333333;
			font-size: 1em;
			margin-top: 5%;
			text-decoration: underline;
		    -moz-text-decoration-color: #ccc; /* Code for Firefox */
		    -webkit-text-decoration-color: #ccc; /* Code for Firefox */
		    text-decoration-color: red;
		}
		.serchi{
			font-size: 1.5em;
			padding-left: 0%;
			padding-right: 5%;
		}

    		.searchBar > .col-sm-10 > .col-sm-2 > select,.searchBar > .col-sm-2 > button{
			font-size: 1.2em;
            height: 70px;
			padding-top: 3%;
			padding-bottom: 3%;
		}
		/*display by text*/
		.displaySection h3{
			margin-top: 7%;
			font-size: 1.5em;
		}
		/*El dezplegable*/
		.displaySection select{
			font-size: 1.2em;
			width: 13%;
			margin-left: 6%;
		}
		.imgListing{
			min-height: 230px;
		}
		.titleFootDescriptionCasa, .desFootDescriptionCasa{
			font-size: 0.8em;
			text-align: center;
		}
		.descripcionCasa h3{
			font-size: 1.2em;
		}
		.navbar{
			margin-bottom: 16%;
		}
		.descripcionCasa h5{
			font-size: 0.8em;
		}
		.descripcionCasa h2{
			font-size: 2em;
		}
}
@media(min-width:1700px){
		/*search by map*/
		.titleSearch h4{
			color: #333333;
			font-size: 1.2em;
			margin-top: 5%;
			text-decoration: underline;
		    -moz-text-decoration-color: #ccc; /* Code for Firefox */
		    -webkit-text-decoration-color: #ccc; /* Code for Firefox */
		    text-decoration-color: red;
		}

		.serchi{
			font-size: 1.5em;
			padding-left: 0%;
			padding-right: 5%;
		}

    	.searchBar > .col-sm-10 > .col-sm-2 > select,.searchBar > .col-sm-2 > button{
			font-size: 1.2em;
            height: 70px;
			padding-top: 2%;
			padding-bottom: 2%;
		}
		/*display by text*/
		.displaySection h3{
			margin-top: 7%;
			font-size: 1.5em;
		}
		/*El dezplegable*/
		.displaySection select{
			font-size: 1.2em;
			width: 13%;
			margin-left: 6%;
		}
		.imgListing{
			min-height: 230px;
		}
		.titleFootDescriptionCasa, .desFootDescriptionCasa{
			font-size: 0.8em;
			text-align: center;
		}
		.descripcionCasa h3{
			font-size: 1.3em;
		}
		.navbar{
			margin-bottom: 16%;
		}
		.descripcionCasa h5{
			font-size: 0.8em;
		}
		.descripcionCasa h2{
			font-size: 2em;
		}
}
@media(min-width:1800px){
		/*search by map*/
		.titleSearch h4{
			color: #333333;
			font-size: 1.3em;
			margin-top: 5%;
			text-decoration: underline;
		    -moz-text-decoration-color: #ccc; /* Code for Firefox */
		    -webkit-text-decoration-color: #ccc; /* Code for Firefox */
		    text-decoration-color: red;
		}


		.serchi{
			font-size: 1.5em;
			padding-left: 0%;
			padding-right: 5%;
		}
    	/*display by text*/
		.displaySection h3{
			margin-top: 7%;
			font-size: 1.6em;
		}
		/*El dezplegable*/
		.displaySection select{
			font-size: 1.2em;
			width: 13%;
			margin-left: 4%;
		}
    	.searchBar > .col-sm-10 > .col-sm-2 > select,.searchBar > .col-sm-2 > button{
			font-size: 1.2em;
            height: 70px;
			padding-top: 3%;
			padding-bottom: 3%;
		}
		.imgListing{
			min-height: 230px;
		}
		.titleFootDescriptionCasa, .desFootDescriptionCasa{
			font-size: 0.8em;
			text-align: center;
		}
		.descripcionCasa h3{
			font-size: 1.4em;
		}
		.navbar{
			margin-bottom: 16%;
		}
		.descripcionCasa h5{
			font-size: 0.8em;
		}
		.descripcionCasa h2{
			font-size: 2em;
		}
}
@media(min-width:1900px){
		/*search by map*/
		.titleSearch h4{
			color: #333333;
			font-size: 1.42em;
			margin-top: 5%;
			text-decoration: underline;
		    -moz-text-decoration-color: #ccc; /* Code for Firefox */
		    -webkit-text-decoration-color: #ccc; /* Code for Firefox */
		    text-decoration-color: red;
		}
		.serchi{
			font-size: 1.5em;
			padding-left: 0%;
			padding-right: 5%;
		}
    
    		.searchBar > .col-sm-10 > .col-sm-2 > select,.searchBar > .col-sm-2 > button{
			font-size: 1.4em;
            height: 80px;
			padding-top: 3%;
			padding-bottom: 3%;
		}
		/*display by text*/
		.displaySection h3{
			margin-top: 7%;
			font-size: 1.8em;
		}
		/*El dezplegable*/
		.displaySection select{
			font-size: 1.4em;
			width: 13%;
			margin-left: 4%;
		}
		.imgListing{
			min-height: 230px;
		}
		.titleFootDescriptionCasa, .desFootDescriptionCasa{
			font-size: 0.8em;
			text-align: center;
		}
		.descripcionCasa h3{
			font-size: 1.4em;
		}
		.navbar{
			margin-bottom: 16%;
		}
		.descripcionCasa h5{
			font-size: 0.8em;
		}
		.descripcionCasa h2{
			font-size: 2em;
		}
}
@media(min-width:1950px){
		/*search by map*/
		.titleSearch h4{
			color: #333333;
			font-size: 1.45em;
			margin-top: 5%;
			text-decoration: underline;
		    -moz-text-decoration-color: #ccc; /* Code for Firefox */
		    -webkit-text-decoration-color: #ccc; /* Code for Firefox */
		    text-decoration-color: red;
		}
		.serchi{
			font-size: 1.6em;
			padding-left: 0%;
			padding-right: 5%;
		}
		/*display by text*/
		.displaySection h3{
			margin-top: 7%;
			font-size: 1.8em;
		}
		/*El dezplegable*/
		.displaySection select{
			font-size: 1.4em;
			width: 13%;
			margin-left: 4%;
		}
    	.searchBar > .col-sm-10 > .col-sm-2 > select,.searchBar > .col-sm-2 > button{
			font-size: 1.5em;
            height: 80px;
			padding-top: 3%;
			padding-bottom: 3%;
		}
		.imgListing{
			min-height: 230px;
		}
		.titleFootDescriptionCasa, .desFootDescriptionCasa{
			font-size: 0.8em;
			text-align: center;
		}
		.descripcionCasa h3{
			font-size: 1.6em;
		}
		.navbar{
			margin-bottom: 16%;
		}
		.descripcionCasa h5{
			font-size: 0.8em;
		}
		.descripcionCasa h2{
			font-size: 2em;
		}
}
@media(min-width:2000px){
		/*search by map*/
		.titleSearch h4{
			color: #333333;
			font-size: 1.45em;
			margin-top: 5%;
			text-decoration: underline;
		    -moz-text-decoration-color: #ccc; /* Code for Firefox */
		    -webkit-text-decoration-color: #ccc; /* Code for Firefox */
		    text-decoration-color: red;
		}
    	.serchi{
			font-size: 1.6em;
			padding-left: 0%;
			padding-right: 5%;
		}
    	.searchBar > .col-sm-10 > .col-sm-2 > select,.searchBar > .col-sm-2 > button{
			font-size: 1.5em;
            height: 80px;
			padding-top: 3%;
			padding-bottom: 3%;
		}
		/*display by text*/
		.displaySection h3{
			margin-top: 7%;
			font-size: 2em;
		}
		/*El dezplegable*/
		.displaySection select{
			font-size: 1.6em;
			width: 13%;
			margin-left: 4%;
		}
		.imgListing{
			min-height: 230px;
		}
		.titleFootDescriptionCasa, .desFootDescriptionCasa{
			font-size: 0.8em;
			text-align: center;
		}
		.descripcionCasa h3{
			font-size: 1.8em;
		}
		.navbar{
			margin-bottom: 16%;
		}
		.descripcionCasa h5{
			font-size: 0.8em;
		}
		.descripcionCasa h2{
			font-size: 2em;
		}
}
@media(min-width:2200px){
		/*search by map*/
		.titleSearch h4{
			color: #333333;
			font-size: 1.55em;
			margin-top: 5%;
			text-decoration: underline;
		    -moz-text-decoration-color: #ccc; /* Code for Firefox */
		    -webkit-text-decoration-color: #ccc; /* Code for Firefox */
		    text-decoration-color: red;
		}
		.serchi{
			font-size: 1.7em;
			padding-left: 0%;
			padding-right: 5%;
		}
    
    		.searchBar > .col-sm-10 > .col-sm-2 > select,.searchBar > .col-sm-2 > button{
			font-size: 1.5em;
            height: 80px;
			padding-top: 3%;
			padding-bottom: 3%;
		}
		/*display by text*/
		.displaySection h3{
			margin-top: 7%;
			font-size: 2.2em;
		}
		/*El dezplegable*/
		.displaySection select{
			font-size: 2em;
			width: 13%;
			margin-left: 4%;
		}
		.imgListing{
			min-height: 250px;
		}
		.titleFootDescriptionCasa, .desFootDescriptionCasa{
			font-size: 0.8em;
			text-align: center;
		}
		.descripcionCasa h3{
			font-size: 2em;
		}
		.navbar{
			margin-bottom: 16%;
		}
		.descripcionCasa h5{
			font-size: 0.8em;
		}
		.descripcionCasa h2{
			font-size: 2em;
		}
}
@media(min-width:2300px){
		/*search by map*/
		.titleSearch h4{
			color: #333333;
			font-size: 1.6em;
			margin-top: 5%;
			text-decoration: underline;
		    -moz-text-decoration-color: #ccc; /* Code for Firefox */
		    -webkit-text-decoration-color: #ccc; /* Code for Firefox */
		    text-decoration-color: red;
		}
		.serchi{
			font-size: 1.8em;
			padding-left: 0%;
			padding-right: 5%;
		}
    
    		.searchBar > .col-sm-10 > .col-sm-2 > select,.searchBar > .col-sm-2 > button{
			font-size: 1.5em;
            height: 80px;
			padding-top: 3%;
			padding-bottom: 3%;
		}
		/*display by text*/
		.displaySection h3{
			margin-top: 7%;
			font-size: 2.2em;
		}
		/*El dezplegable*/
		.displaySection select{
			font-size: 2em;
			width: 13%;
			margin-left: 4%;
		}

		.imgListing{
			min-height: 250px;
		}
		.titleFootDescriptionCasa, .desFootDescriptionCasa{
			font-size: 0.8em;
			text-align: center;
		}
		.descripcionCasa h3{
			font-size: 2em;
		}
		.navbar{
			margin-bottom: 16%;
		}
		.descripcionCasa h5{
			font-size: 0.8em;
		}
		.descripcionCasa h2{
			font-size: 2em;
		}
        .titleSearch h2{
			font-size: 4em;
		}
}
@media(min-width:2450px){
	body{
		/*background: gray;*/
	}
		/* search bar */
		.displaySection select{
			width: 25%;
			margin-left: 4%;
		}
		/*display by text*/
		.displaySection h3{
			margin-top: 7%;
			font-size: 2.2em;
		}
		/*El dezplegable*/
		.displaySection select{
			font-size: 2em;
			width: 13%;
			margin-left: 4%;
		}
		.titleSearch h2{
			font-size: 4em;
		}
		/*search by map*/
		.titleSearch h4{
			color: #333333;
			font-size: 1.8em;
			margin-top: 5%;
			text-decoration: underline;
		    -moz-text-decoration-color: #ccc; /* Code for Firefox */
		    -webkit-text-decoration-color: #ccc; /* Code for Firefox */
		    text-decoration-color: red;
		}
		.serchi{
			font-size: 1.8em;
			padding-left: 0%;
			padding-right: 5%;
		}
		.searchBar > .col-sm-10 > .col-sm-2 > select,.searchBar > .col-sm-2 > button{
			height: 80px;
			padding-top: 3%;
			padding-bottom: 3%;
			font-size: 1.5em;	
		}
		.descripcionCasa h3{
			font-size: 2em;
		}

		.imgListing{
			min-height: 260px;
		}
		
		.titleFootDescriptionCasa, .desFootDescriptionCasa{
			font-size: 1em;
			text-align: center;
		}
		
		.navbar{
			margin-bottom: 16%;
		}
	/* result */ 
		.marketImage{
			width: 7%;
		}
		.descripcionCasa h5{
			font-size: 1.5em;
		}
}
@media(min-width:2600px){
	body{
		/*background: gray;*/
	}
	/* search bar */
		.imgLine{
			font-size: 2.2em;
		}
		/*display by text*/
		.displaySection h3{
			margin-top: 7%;
			font-size: 2.2em;
		}
		/*El dezplegable*/
		.displaySection select{
			font-size: 2em;
			width: 13%;
			margin-left: 4%;
		}
		.titleSearch h2{
			font-size: 4em;
		}
		/*search by map*/
		.titleSearch h4{
			color: #333333;
			font-size: 2em;
			margin-top: 5%;
			text-decoration: underline;
		    -moz-text-decoration-color: #ccc; /* Code for Firefox */
		    -webkit-text-decoration-color: #ccc; /* Code for Firefox */
		    text-decoration-color: red;
		}
		.serchi{
			font-size: 1.8em;
			padding-left: 0%;
			padding-right: 5%;
		}
		.searchBar > .col-sm-10 > .col-sm-2 > select,.searchBar > .col-sm-2 > button{
			height: 80px;
			padding-top: 3%;
			padding-bottom: 3%;
			font-size: 1.5em;	
		}
		.descripcionCasa h3{
			font-size: 2em;
		}

		.imgListing{
			min-height: 260px;
		}
		
		.titleFootDescriptionCasa, .desFootDescriptionCasa{
			font-size: 1em;
			text-align: center;
		}
		
		.navbar{
			margin-bottom: 16%;
		}
	/* result */ 
		.marketImage{
			width: 7%;
		}
		.descripcionCasa h5{
			font-size: 1.5em;
		}
}

@media(min-width:3000px){

	body{
		/*background: red;*/
	}

	/*Extra Dany*/

		/*Property Search*/		

			.titleSearch h2{
				font-size: 12em;
			}	

			/*search by map*/
			.titleSearch h4{
				/*color: #333333;*/
				font-size: 4.5em;
				margin-top: 5%;				
			}			

			/*Contenedor selects*/
			.searchBar > .col-sm-10{
				padding: 0%;
			}

			/*div Selects individuales*/
			.searchBar > .col-sm-10 > .col-sm-2{
				padding: 0.3%;				
			}

			/*selects*/
			.searchBar > .col-sm-10 > .col-sm-2 > select{
				font-size: 5em;		
				height: 3em;
			}

			/*Search Now container*/
			.searchBar > .col-sm-2{
				padding: 0.2%;
			}

			/*search now button*/
			.searchBar > .col-sm-2 > button{
				font-size: 5em;
				height: 3em;
			}


		/*Before homes*/			

			/*result title*/
			.beforeHomes h2{
				font-size: 10em;
			}

			/*display by text*/
			.displaySection h3{
				margin-top: 5%;
				font-size: 5em;
			}

			/*display by select*/
			.displaySection > .col-sm-2{
				padding: 0.5%;			
			}

			.displaySection > .col-sm-2 > select{				
				font-size: 4.50em;
				height: 2em;
				w
			}


		/*Casas cuadritos*/

			/*cuadrito casas*/
			.casa{			
				padding: 3%;
			}
			
			/*Titulo de la casa*/
			.descripcionCasa h3{		
				margin-top: 2%;
				font-size: 7em;
			}

			/*Sin asignar*/
			.descripcionCasa h5{			
				margin-top: 1%;
				font-size: 5.5em;
			}

			/*precio*/
			.descripcionCasa h2{			
				margin-top: 2%;
				font-size: 10em;
			}
			
			/*info baños y cuartos casas*/
			.descripcionCasa > .row:nth-child(4){
				/*margin-left: -17%;*/
				font-size: 2em;
				margin-top: 2%;
			}

		/*Paginacion*/

			.titlePagination {
				font-size: 3em;
			}

			.paginationSection{
				margin-top: 5%;
				margin-bottom: 2%;
			}

			#imgNavLeft{
				background-size: 120%;
			}

			.numbers > .col-sm-1{			
				font-size: 5em;
			}

			#imgNavRight{
				background-size: 120%;
			}

			.imgCenter{
				width: 30%;
			}

}