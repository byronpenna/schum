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
			display:none;
		}

	/* estilos para el footer */


		/* <!-- Nuevo Estilo --> */




















.bg-green {
  background-color: #8dc63f;
  color: #fdfdfd; }

.bg-blue {
  background-color: blue;
  color: #fdfdfd; }

.bg-black {
  background-color: black;
  color: #fdfdfd; }

.bg-charcoal {
  background-color: #444444;
  color: #fdfdfd; }

.bg-slate-grey {
  background-color: #999999;
  color: #fdfdfd; }

.bg-white {
  background-color: white;
  color: #444444; }

.bg-cream-white {
  background-color: #fdfdfd;
  color: #444444; }

#main_content_container .site-content article .entry-content > .vc_row, .lgm-popup-button {
  background-color: transparent;
  background-repeat: no-repeat;
  background-origin: padding-box;
  background-size: auto;
  background-position: 0 0;
  background-clip: border-box;
  background-attachment: scroll;
  background-image: none;
  background-blend-mode: normal; }

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

.table-layout {
  display: table;
  table-layout: fixed;
  border-collapse: collapse;
  width: 100%;
  border: 0;
  margin: 0;
  padding: 0;
  clear: both; }

.table-layout-row {
  display: table-row;
  border: 0;
  margin: 0;
  padding: 0;
  clear: both;
  min-width: 100%;
  width: inherit;
  height: initial; }

.table-layout-cell {
  display: table-cell;
  text-align: left;
  vertical-align: top;
  border: 0;
  margin: 0;
  padding: 0;
  height: inherit;
  width: inherit; }

.alignleft {
  float: left; }

.alignright {
  float: right; }

.aligncenter {
  display: block;
  margin-left: auto;
  margin-right: auto;
  clear: both; }

.hidden {
  display: none !important; }

#header_container .site-header .site-social-nav {
  font-size: 0px;
  line-height: 0px; }

html {
  font-family: sans-serif;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%; }

body {
  margin: 0; }

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
nav,
section,
summary {
  display: block; }

audio,
canvas,
progress,
video {
  display: inline-block;
  vertical-align: baseline; }

audio:not([controls]) {
  display: none;
  height: 0; }

[hidden],
template {
  display: none; }

a {
  background: transparent; }

a:active,
a:hover {
  outline: 0; }

abbr[title] {
  border-bottom: 1px dotted; }

b,
strong {
  font-weight: bold; }

dfn {
  font-style: italic; }

h1 {
  font-size: 2em;
  margin: 0.67em 0; }

mark {
  background: #ff0;
  color: #000; }

small {
  font-size: 80%; }

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline; }

sup {
  top: -0.5em; }

sub {
  bottom: -0.25em; }

img {
  border: 0; }

svg:not(:root) {
  overflow: hidden; }

figure {
  margin: 1em 40px; }

hr {
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  height: 0; }

pre {
  overflow: auto; }

code,
kbd,
pre,
samp {
  font-family: monospace, monospace;
  font-size: 1em; }

button,
input,
optgroup,
select,
textarea {
  color: inherit;
  font: inherit;
  margin: 0; }

button {
  overflow: visible; }

button,
select {
  text-transform: none; }

button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
  -webkit-appearance: button;
  cursor: pointer; }

button[disabled],
html input[disabled] {
  cursor: default; }

button::-moz-focus-inner,
input::-moz-focus-inner {
  border: 0;
  padding: 0; }

input {
  line-height: normal; }

input[type="checkbox"],
input[type="radio"] {
  box-sizing: border-box;
  padding: 0; }

input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
  height: auto; }

input[type="search"] {
  -webkit-appearance: textfield;
  -moz-box-sizing: content-box;
  -webkit-box-sizing: content-box;
  box-sizing: content-box; }

input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none; }

fieldset {
  border: 1px solid #c0c0c0;
  margin: 0 2px;
  padding: 0.35em 0.625em 0.75em; }

legend {
  border: 0;
  padding: 0; }

textarea {
  overflow: auto; }

optgroup {
  font-weight: bold; }

table {
  border-collapse: collapse;
  border-spacing: 0; }

td,
th {
  padding: 0; }

* {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box; }

body {
  margin: 0;
  font-size: 16px;
  font-size: 1rem;
  line-height: 1.5; }

::-webkit-selection {
  background: #5784FE;
  color: #fff;
  text-shadow: none; }

::-moz-selection {
  background: #5784FE;
  color: #fff;
  text-shadow: none; }

::selection {
  background: #5784FE;
  color: #fff;
  text-shadow: none; }

a {
  color: #333;
  text-decoration: underline; }

a:visited {
  color: #666; }

a:hover {
  color: #b40101; }

menu {
  padding: 0; }

td {
  vertical-align: top; }

.ir {
  display: block;
  border: 0;
  text-indent: -999em;
  overflow: hidden;
  background-color: transparent;
  background-repeat: no-repeat;
  text-align: left;
  direction: ltr;
  *line-height: 0; }

.ir br {
  display: none; }

.hidden {
  display: none !important;
  visibility: hidden; }

.visuallyhidden {
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px; }

.visuallyhidden.focusable:active, .visuallyhidden.focusable:focus {
  clip: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  position: static;
  width: auto; }

.invisible {
  visibility: hidden; }

.clearfix:before,
.clearfix:after {
  content: "";
  display: table; }

.clearfix:after {
  clear: both; }

.clearfix {
  *zoom: 1; }

@media print {
  * {
    background: transparent !important;
    color: black !important;
    box-shadow: none !important;
    text-shadow: none !important;
    filter: none !important;
    -ms-filter: none !important; }

  /* Black prints faster: h5bp.com/s */
  a, a:visited {
    text-decoration: underline; }

  a[href]:after {
    content: " (" attr(href) ")"; }

  abbr[title]:after {
    content: " (" attr(title) ")"; }

  .ir a:after, a[href^="javascript:"]:after, a[href^="#"]:after {
    content: ""; }

  pre, blockquote {
    border: 1px solid #999;
    page-break-inside: avoid; }

  thead {
    display: table-header-group; }

  tr, img {
    page-break-inside: avoid; }

  img {
    max-width: 100% !important; }

  @page {
    margin: 0.5cm; }
  p, h2, h3 {
    orphans: 3;
    widows: 3; }

  h2, h3 {
    page-break-after: avoid; } }
html, body {
  width: 100%;
  min-width: 100%;
  height: 100%;
  min-height: 100%; }

embed,
iframe,
object,
video {
  max-width: 100%; }

iframe {
  display: block; }

img[class*="align"],
img[class*="wp-image-"],
img[class*="attachment-"] {
  height: auto; }

img.size-full,
img.size-large,
img.header-image,
img.wp-post-image {
  max-width: 100%;
  height: auto; }

canvas {
  -ms-touch-action: double-tap-zoom; }

@font-face {
  font-family: 'BebasNeueRegular';
  src: url("../webfonts/BebasNeueRegular/bebasneue-webfont.eot");
  src: url("../webfonts/BebasNeueRegular/bebasneue-webfont.eot?#iefix") format("embedded-opentype"), url("../webfonts/BebasNeueRegular/bebasneue-webfont.woff2") format("woff2"), url("../webfonts/BebasNeueRegular/bebasneue-webfont.woff") format("woff"), url("../webfonts/BebasNeueRegular/bebasneue-webfont.ttf") format("truetype"), url("../webfonts/BebasNeueRegular/bebasneue-webfont.svg#bebas_neueregular") format("svg");
  font-weight: normal;
  font-style: normal; }
.font-sans-serif, blockquote cite, .wp-caption .wp-caption-text,
.gallery-caption,
.entry-caption, button, input, .archive-title,
.page-title,
.entry-content th,
.comment-content th, .comments-link, .entry-header address,
.comment-content address, .entry-header time, .entry-content dt,
.comment-content dt, .archive-meta, #wp-calendar caption, body, h1, h2, h3, h4, h5, h6, dt, b, strong, em, #header_container, #header_container .site-header, #footer_container .site-footer, form label.error, .comments-area .comment-meta cite, .entry-meta address, .entry-meta time {
  font-family: "Futura", "Helvetica Neue", "Helvetica", Sans-serif;
  font-size: 1em; }

.font-serif {
  font-family: "Georgia", "Times New Roman", "Times", serif;
  font-size: 1em; }

.font-bebas-neue {
  font-family: "BebasNeueRegular", "Futura", "Helvetica Neue", "Helvetica", Sans-serif;
  font-size: 1em; }

.font-rokkitt {
  font-family: "Rokkitt", "Georgia", "Times New Roman", "Times", serif;
  font-size: 1em; }

.font-open-sans {
  font-family: "Open Sans", "Futura", "Helvetica Neue", "Helvetica", Sans-serif;
  font-size: 1em; }

.entry-content .twitter-tweet-rendered {
  max-width: 100% !important; }

.entry-content img,
.comment-content img,
.widget img {
  max-width: 100%; }

blockquote:before,
blockquote:after,
q:before,
q:after {
  content: '';
  content: none; }

blockquote {
  border-left: 5px solid #333;
  margin: 0 0 18px 20px;
  margin: 0 0 1.125rem 1.25rem;
  padding: 0 0 0 16px;
  padding: 0 0 0 1rem; }

blockquote.pull-right {
  border-left: 0 none;
  border-right: 5px solid #333;
  margin: 0 20px 18px 0;
  margin: 0 1.25rem 1.125rem 0;
  padding: 0 16px 0 0;
  padding: 0 1rem 0 0;
  float: none; }

blockquote p {
  font-size: 1.1em;
  margin-bottom: 0; }

blockquote.pull-right p, blockquote.pull-right small {
  text-align: right; }

blockquote cite:before {
  content: "\2014 "; }

blockquote cite {
  font-style: normal;
  font-weight: 400;
  font-size: 14px;
  font-size: 0.875rem;
  line-height: 1.125;
  color: #999;
  display: block; }

table {
  border-collapse: collapse;
  border-spacing: 0; }

caption,
th,
td {
  font-weight: normal;
  text-align: left; }

code, pre {
  border-radius: 3px;
  color: #555;
  font-family: Monaco, Menlo, Consolas, "Courier New", monospace;
  font-size: 12px;
  font-size: 0.75rem;
  padding: 0 3px 2px;
  padding: 0 0.1875rem 0.125rem; }

code {
  background-color: #f7f7f9;
  border: 1px solid #e1e1e8;
  padding: 2px 4px;
  padding: 0.125rem 0.25rem; }

abbr,
dfn,
acronym {
  border-bottom: 1px dotted #666;
  cursor: help; }

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline; }

sup {
  top: -0.5em; }

sub {
  bottom: -0.25em; }

.wp-caption {
  max-width: 100%;
  padding: 4px;
  padding: 0.25rem; }

.wp-caption .wp-caption-text,
.gallery-caption,
.entry-caption {
  font-style: italic;
  font-weight: 400;
  font-size: 14px;
  font-size: 0.875rem;
  line-height: 1.5;
  color: #777;
  text-align: center; }

img.wp-smiley, .rsswidget img {
  border: 0;
  border-radius: 0;
  box-shadow: none;
  margin-bottom: 0;
  margin-top: 0;
  padding: 0; }

.entry-content dl.gallery-item {
  margin: 0; }

.gallery-columns-1 .gallery-item a {
  max-width: 100%;
  width: auto; }

.gallery .gallery-icon img {
  height: auto; }

#primary .entry-content [id^="gallery-"] img {
  border: none; }

/* Text meant only for screen readers */
.assistive-text {
  clip: rect(1px 1px 1px 1px);
  /* IE6, IE7 */
  clip: rect(1px, 1px, 1px, 1px);
  position: absolute !important; }

button, input {
  font-style: normal;
  font-weight: 400;
  font-size: 16px;
  font-size: 1rem;
  line-height: 1.25;
  margin: 0;
  font-size: 100%;
  vertical-align: middle; }

button, input {
  *overflow: visible;
  line-height: normal; }

button::-moz-focus-inner,
input::-moz-focus-inner {
  padding: 0;
  border: 0; }

button,
input[type="button"],
input[type="reset"],
input[type="submit"] {
  cursor: pointer;
  -webkit-appearance: button; }

input[type="button"] {
  width: auto; }

.btn {
  display: inline-block;
  *display: inline;
  padding: 8px 14px;
  padding: 0.5rem 0.875rem;
  margin-bottom: 0;
  *margin-left: .3em;
  font-size: 16px;
  font-size: 1rem;
  line-height: 1.25;
  color: #333333;
  text-align: center;
  text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
  vertical-align: middle;
  cursor: pointer;
  background-color: #f5f5f5;
  *background-color: #e6e6e6;
  background-image: -ms-linear-gradient(top, white, #e6e6e6);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(white), to(#e6e6e6));
  background-image: -webkit-linear-gradient(top, white, #e6e6e6);
  background-image: -o-linear-gradient(top, white, #e6e6e6);
  background-image: linear-gradient(top, white, #e6e6e6);
  background-image: -moz-linear-gradient(top, white, #e6e6e6);
  background-repeat: repeat-x;
  border: 1px solid #cccccc;
  *border: 0;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  border-color: #e6e6e6 #e6e6e6 #bfbfbf;
  border-bottom-color: #b3b3b3;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#ffffff', endColorstr='#e6e6e6');
  *zoom: 1;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); }

a.btn {
  color: #333333;
  text-decoration: none; }

.btn:hover,
.btn:active,
.btn.active,
.btn.disabled,
.btn[disabled] {
  background-color: #e6e6e6;
  *background-color: #d9d9d9; }

.btn:first-child {
  *margin-left: 0; }

.btn:hover {
  color: #333333;
  text-decoration: none;
  background-color: #e6e6e6;
  *background-color: #d9d9d9;
  background-position: 0 -15px;
  -webkit-transition: background-position 0.1s linear;
  -moz-transition: background-position 0.1s linear;
  -ms-transition: background-position 0.1s linear;
  -o-transition: background-position 0.1s linear;
  transition: background-position 0.1s linear; }

.btn:focus,
input[type="submit"]:focus {
  outline: thin dotted #333;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px; }

.btn.active,
.btn:active,
input[type="submit"]:active {
  background-color: #e6e6e6;
  background-color: #d9d9d9 \9;
  background-image: none;
  outline: 0;
  -webkit-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
  position: relative;
  top: 1px; }

.btn.disabled, .btn[disabled] {
  cursor: default;
  background-color: #e6e6e6;
  background-image: none;
  opacity: 0.65;
  filter: alpha(opacity=65);
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none; }

.btn.disabled:active, .btn[disabled]:active {
  top: 0; }

button.btn, input[type="submit"].btn {
  *padding-top: 2px;
  *padding-bottom: 2px; }

button.btn::-moz-focus-inner,
input[type="submit"].btn::-moz-focus-inner {
  padding: 0;
  border: 0; }

.btn-large,
input[type="submit"].btn-large {
  padding: 10px 15px;
  padding: 0.625rem 0.9375rem;
  font-size: 20px;
  font-size: 1.25rem;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px; }

.btn-small,
input[type="submit"].btn-small {
  padding: 5px 9px;
  padding: 0.3125rem 0.5625rem;
  font-size: 13px;
  font-size: 0.8125rem; }

/* Form fields */
input[type="text"],
input[type="password"],
input[type="email"],
input[type="url"],
textarea {
  font-family: inherit;
  padding: 8px;
  padding: 0.5rem;
  font-family: inherit;
  border: 1px solid #ccc;
  border-radius: 3px; }

select {
  max-width: 100%; }

.archive-title,
.page-title,
.entry-content th,
.comment-content th {
  font-style: normal;
  font-weight: 500;
  font-size: 14px;
  font-size: 0.875rem;
  line-height: 2;
  text-transform: uppercase; }

#wrapper {
  width: 100%;
  position: relative;
  text-align: left; }

#main_content_container .home-sidebar .widget {
  background-color: #fcfcfc;
  border: 1px solid #bbb;
  -webkit-border-radius: 5px;
  border-radius: 5px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  padding: 10px;
  padding: 0.625rem; }

#main_content_container {
  width: 100%; }

.home-sidebar {
  width: 90%;
  margin: 0 auto;
  padding-bottom: 32px;
  padding-bottom: 2rem; }

.home.page .site-content article {
  margin-bottom: 0; }

.entry-meta {
  clear: both; }

.comments-link {
  font-style: italic;
  font-weight: 400;
  font-size: 14px;
  font-size: 0.875rem;
  float: right; }

article.sticky .featured-post {
  font-family: 'Arvo', Georgia, "Times New Roman", Times, serif;
  font-style: normal;
  font-weight: 400;
  border-top: 4px double #aaa;
  border-bottom: 4px double #aaa;
  color: #777;
  font-size: 16px;
  font-size: 1rem;
  line-height: 3;
  margin-bottom: 24px;
  margin-bottom: 1.5rem;
  text-align: center; }

article.sticky {
  border-bottom: 4px double #aaa; }

.site-content article {
  margin-bottom: 40px;
  margin-bottom: 2.5rem; }

.header-meta {
  border-top: 1px solid #ccc;
  border-bottom: 1px solid #ccc;
  margin-bottom: 10px;
  margin-bottom: 0.625rem;
  padding: 5px 0;
  padding: 0.3125rem 0;
  *zoom: 1; }

.header-meta:before,
.header-meta:after {
  content: "";
  display: table; }

.header-meta:after {
  clear: both; }

.header-meta a {
  text-decoration: none; }

.header-meta a:visited {
  color: #333; }

.header-meta a:hover {
  color: #2997ab; }

.entry-content {
  margin-bottom: 20px;
  margin-bottom: 1.25rem;
  *zoom: 1; }

.entry-content:before,
.entry-content:after {
  content: "";
  display: table; }

.entry-content:after {
  clear: both; }

.entry-header address,
.comment-content address {
  font-style: italic;
  font-weight: 400;
  display: block; }

.entry-header address {
  display: inline; }

.entry-header time,
.entry-header address {
  font-style: italic;
  font-weight: 400;
  font-size: 14px;
  font-size: 0.875rem;
  margin: 0 20px 0 0;
  margin: 0 1.25rem 0 0; }

.page-links {
  clear: both;
  line-height: 1.75;
  color: #333; }

.page-links .page-numbers {
  background-color: #333;
  border: 1px solid #333;
  padding: 2px 4px;
  padding: 0.125rem 0.25rem;
  color: #fff; }

.page-links a {
  text-decoration: none; }

.page-links a .page-numbers {
  background-color: transparent;
  color: #333; }

.page-links a:hover .page-numbers {
  background-color: #2997ab;
  color: #fff; }

.more-link {
  text-decoration: none; }

.post-edit-link {
  text-decoration: none; }

.entry-content dl,
.comment-content dl {
  margin: 0 24px;
  margin: 0 1.5rem; }

.entry-content dt,
.comment-content dt {
  font-style: normal;
  font-weight: 500;
  line-height: 1.5; }

.entry-content dd,
.comment-content dd {
  line-height: 1.5;
  margin-bottom: 24px;
  margin-bottom: 1.5rem; }

.entry-content table,
.comment-content table {
  border-bottom: 1px solid #ccc;
  font-size: 14px;
  font-size: 0.875rem;
  line-height: 2;
  margin: 0 0 24px;
  margin: 0 0 1.5rem;
  width: 100%; }

.entry-content table caption,
.comment-content table caption {
  font-size: 16px;
  font-size: 1rem;
  margin: 24px 0;
  margin: 1.5rem 0; }

.entry-content td,
.comment-content td {
  border-top: 1px solid #ccc;
  padding: 6px 10px 6px 0;
  padding: 0.375rem 0.625rem 0.375rem 0; }

.entry-content ol,
.comment-content ol,
.entry-content ul,
.comment-content ul {
  margin: 0 0 24px;
  margin: 0 0 1.5rem;
  line-height: 1.5;
  padding: 0; }

.entry-content ul ul,
.comment-content ul ul,
.entry-content ol ol,
.comment-content ol ol,
.entry-content ul ol,
.comment-content ul ol,
.entry-content ol ul,
.comment-content ol ul {
  margin-bottom: 0; }

.entry-content ul,
.comment-content ul {
  list-style: disc outside; }

.entry-content ol,
.comment-content ol {
  list-style: decimal outside; }

.entry-content li,
.comment-content li {
  margin: 0 0 0 28px;
  margin: 0 0 0 1.75rem; }

.author .archive-header {
  margin-bottom: 24px;
  margin-bottom: 1.5rem; }

.author-info {
  border-top: 1px solid #ccc;
  border-bottom: 1px solid #ccc;
  margin: 24px 0;
  margin: 1.5rem 0;
  padding: 24px 0;
  padding: 1.5rem 0;
  overflow: hidden;
  *zoom: 1; }

.author-info:before,
.author-info:after {
  content: "";
  display: table; }

.author-info:after {
  clear: both; }

.author-description h2 {
  font-size: 24px;
  font-size: 1.5rem; }

.author-description p {
  color: #777;
  font-size: 14px;
  font-size: 0.875rem;
  line-height: 1.5;
  margin-bottom: 8px;
  margin-bottom: 0.5rem; }

.author-link {
  font-size: 14px;
  font-size: 0.875rem; }

.author-link a {
  color: #777;
  text-decoration: none; }

.author-link a:visited {
  color: #666; }

.author-link a:focus,
.author-link a:hover,
.author-link a:active {
  outline: 0;
  color: #2997ab; }

.author.archive .author-info {
  border-top: 0;
  margin: 0 0 48px;
  margin: 0 0 3rem; }

.author.archive .author-avatar {
  margin-top: 0; }

.author.archive .author-link {
  display: none; }

.author-avatar {
  float: left;
  margin-top: 8px;
  margin-top: 0.5rem; }

.author-description {
  float: right;
  width: 80%; }

.social-meta a {
  text-decoration: none;
  margin-right: 5px;
  margin-right: 0.3125rem; }

.entry-media {
  margin: 0 auto 16px;
  margin: 0 auto 1rem;
  width: 100%; }

.entry-media .wp-caption,
.entry-media .wp-caption-text,
.entry-media [class*="align"] {
  margin: 0 auto; }

.format-aside .entry-content {
  margin: 20px 0 18px 0;
  margin: 1.25rem 0 1.125rem 0; }

.format-aside .entry-content p:last-child {
  margin-bottom: 0; }

.format-status .entry-content {
  border-left: 5px solid #ddd;
  margin: 20px 0 18px 0;
  margin: 1.25rem 0 1.125rem 0;
  padding: 0 0 0 15px;
  padding: 0 0 0 0.9375rem; }

.format-status .entry-content p {
  font-size: 20px;
  font-size: 1.25rem;
  font-style: italic; }

.format-status .entry-content p:last-child {
  margin-bottom: 0; }

.format-quote .entry-content blockquote:before {
  font-family: 'FontAwesome';
  font-weight: normal;
  font-style: normal;
  speak: none;
  vertical-align: top;
  font-size: 40px;
  font-size: 2.5rem;
  content: "\f10d";
  color: #ddd;
  top: -15px;
  left: 0;
  position: absolute;
  z-index: -1; }

.format-quote .entry-content {
  margin-top: 24px;
  margin-top: 1.5rem;
  position: relative; }

.format-quote .entry-content blockquote {
  border: none;
  margin-left: 40px;
  margin-left: 2.5rem; }

.format-audio .wp-audio-shortcode {
  margin-bottom: 16px;
  margin-bottom: 1rem; }

.archive-header,
.page-header {
  margin-bottom: 32px;
  margin-bottom: 2rem;
  border-bottom: 1px solid #CCCCCC; }

.archive-meta {
  font-style: italic;
  font-weight: 400;
  color: #777;
  font-size: 14px;
  font-size: 0.875rem;
  line-height: 2;
  margin-top: 16px;
  margin-top: 1rem; }

.archive .entry-title {
  font-size: 1.6em; }

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

.smallprint {
  width: 90%; }

.smallprint p {
  font-size: 14px;
  font-size: 0.875rem; }

.widget-area ul {
  list-style: none outside none;
  padding-left: 0; }

.widget-area .widget {
  -moz-hyphens: auto;
  -ms-word-break: break-all;
  -webkit-hyphens: auto;
  hyphens: auto;
  word-wrap: break-word;
  word-break: break-word;
  margin-bottom: 48px;
  margin-bottom: 3rem; }

.widget select {
  margin-left: 1px;
  margin-left: 0.0625rem; }

.widget-area .widget ul ul {
  margin-left: 12px;
  margin-left: 0.75rem; }

.widget_rss li {
  margin: 12px 0;
  margin: 0.75rem; }

.widget_recent_entries .post-date,
.widget_rss .rss-date {
  font-size: 12px;
  font-size: 0.75rem;
  margin-left: 12px;
  margin-left: 0.75rem; }

#wp-calendar {
  margin: 0;
  width: 100%;
  font-size: 14px;
  font-size: 0.875rem;
  line-height: 2; }

#wp-calendar th,
#wp-calendar td,
#wp-calendar caption {
  text-align: center; }

#wp-calendar thead {
  border-top: 1px solid #aaa;
  border-bottom: 1px solid #aaa; }

#wp-calendar caption {
  font-style: normal;
  font-weight: 500;
  text-transform: uppercase;
  text-align: left; }

#wp-calendar #today {
  background-color: #ddd; }

#wp-calendar tfoot {
  border-top: 1px solid #aaa;
  border-bottom: 1px solid #aaa; }

#wp-calendar #next {
  padding-right: 24px;
  padding-right: 1.5rem;
  text-align: right; }

.widget_search label {
  display: block;
  font-size: 14px;
  font-size: 0.875rem;
  line-height: 1.5; }

.widget_twitter li {
  list-style-type: none; }

.widget_twitter .timesince {
  display: block;
  text-align: right; }

.site-content nav {
  clear: both;
  line-height: 2;
  overflow: hidden; }

#nav-above {
  padding: 24px;
  padding: 1.5rem; }

#nav-above {
  display: none; }

.paged #nav-above {
  display: block; }

.nav-previous,
.previous-image {
  float: left;
  width: 50%;
  line-height: 1.3; }

.nav-previous a,
.nav-next a {
  text-decoration: none; }

.nav-next,
.next-image {
  float: right;
  text-align: right;
  width: 50%;
  line-height: 1.3; }

.nav-single + .comments-area,
#comment-nav-above {
  margin: 48px 48px 48px 0;
  margin: 3rem 3rem 3rem 0; }

ul.page-numbers {
  padding: 0;
  margin: 0;
  text-align: center;
  line-height: 2; }

li a.page-numbers,
li span.page-numbers {
  padding: 5px;
  padding: 0.3125rem;
  border: 1px solid #333;
  text-decoration: none; }

li a:visited.page-numbers {
  color: #333; }

li a:hover.page-numbers {
  background-color: #2997ab;
  color: #fff; }

li a:hover.prev,
li a:hover.next {
  background-color: transparent;
  color: #2997ab; }

.page-numbers li {
  display: inline; }

li span.current {
  background-color: #333;
  color: #fff; }

li a.prev,
li a.next,
li span.dots {
  border: none; }

#lang_sel {
  width: 65%;
  height: 35px; }

#lang_sel li {
  width: 100%; }

#lang_sel ul ul {
  top: 35px;
  width: 100%; }

#lang_sel a.lang_sel_sel {
  border-radius: 3px; }

#lang_sel a,
#lang_sel a:visited {
  font-size: 16px;
  font-size: 1rem;
  padding: 5px 0 5px 10px; }

.main-navigation .menu-item-language .iclflag {
  margin-top: 7px; }

#lang_sel .iclflag {
  margin-top: 2px; }

#lang_sel .lang_sel_sel .iclflag {
  margin-top: 6px; }

#lang_sel_footer .iclflag,
#lang_sel_footer .icl_lang_sel_current {
  margin-top: 6px; }

@media only screen and (max-width: 800px) {
  header .grid_5_of_12 {
    width: 100%; }

  header .grid_7_of_12 {
    width: 100%;
    margin-left: 0; } }
@media only screen and (max-width: 650px) {
  .grid_1_of_12,
  .grid_2_of_12,
  .grid_3_of_12,
  .grid_4_of_12,
  .grid_5_of_12,
  .grid_6_of_12,
  .grid_7_of_12,
  .grid_8_of_12,
  .grid_9_of_12,
  .grid_10_of_12,
  .grid_11_of_12,
  .grid_12_of_12 {
    width: 100%; }

  .col {
    margin: 0; } }
@media only screen and (max-width: 320px) {
  .author-description {
    float: left;
    width: 100%; } }
html {
  font-size: 16px; }

body {
  margin: 0 auto;
  padding: 0;
  font-size: 1rem;
  line-height: 1.625rem;
  font-weight: 300;
  font-style: normal;
  text-align: left;
  color: black; }

h1, h2, h3, h4, h5, h6 {
  font-style: normal;
  font-weight: normal;
  color: black;
  margin-top: 0; }

h1 {
  margin-bottom: 10px;
  margin-bottom: 0.625rem;
  font-size: 48px;
  line-height: 1.25;
  letter-spacing: -0.5px; }

h2 {
  margin-bottom: 8px;
  margin-bottom: 0.5rem;
  font-size: 42px;
  line-height: 1.1666;
  letter-spacing: -0.5px;
  text-transform: uppercase; }

h3 {
  margin-bottom: 6px;
  margin-bottom: 0.375rem;
  font-size: 36px;
  line-height: 1.2857; }

h4 {
  margin-bottom: 5px;
  margin-bottom: 0.3125rem;
  font-size: 24px;
  line-height: 1.25; }

h5 {
  margin-bottom: 5px;
  margin-bottom: 0.3125rem;
  font-size: 17px;
  line-height: 1.25;
  font-weight: 300;
  text-transform: uppercase;
  letter-spacing: -0.5px; }

ol, ul {
  list-style: none outside none; }

ol, ul, dl, address {
  margin: 0 0 24px 0;
  margin: 0 0 1.5rem 0;
  font-size: 16px;
  font-size: 1rem;
  line-height: 1.5; }

ul ul, ul ol, ol ol, ol ul {
  margin-bottom: 0; }

dt {
  font-style: normal;
  font-weight: 500; }

p {
  font-size: 21px;
  font-size: 1rem;
  line-height: 1.625rem;
  margin: 0 0 24px 0;
  margin: 0 0 1.5rem 0;
  margin-bottom: 1.125rem;
  font-weight: 300;
  font-style: normal; }

hr {
  background-color: #ccc;
  border: 0;
  height: 1px;
  margin: 24px;
  margin: 1.5rem; }

ins {
  background: none repeat scroll 0 0 #FFF9C0;
  text-decoration: none; }

a {
  -webkit-transition: all 0.2s ease-in-out;
  -moz-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  color: blue;
  outline: none;
  text-decoration: none; }
  a:visited {
    color: #666;
    text-decoration: none; }
  a:focus {
    outline: thin dotted;
    color: blue;
    text-decoration: none; }
  a:hover, a:active {
    outline: 0;
    text-decoration: none; }
  p a {
    text-decoration: underline; }

img {
  border: 0;
  max-width: 100%;
  height: auto;
  vertical-align: top; }
  img.wp-smiley {
    border: 0;
    border-radius: 0;
    box-shadow: none;
    margin-bottom: 0;
    margin-top: 0;
    padding: 0; }

.table-layout-cell {
  vertical-align: middle; }

.text-green {
  color: #8dc63f; }

.text-blue {
  color: blue; }

.text-black {
  color: black; }

.text-charcoal {
  color: #444444; }

.text-slate-grey {
  color: #999999; }

.text-white {
  color: white; }

.text-cream-white {
  color: #fdfdfd; }

.text-effect-shadow {
  text-shadow: -4px 3px 0px #e8e8e8; }

.vc_box_shadow,
.vc_box_shadow_border,
.vc_box_shadow_border_circle,
.vc_box_shadow_circle {
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
  border-radius: 0px; }

#header_container {
  position: relative;
  margin-bottom: 75px;
  color: #fdfdfd;
  font-size: 14px; }
  #header_container a {
    color: #fdfdfd; }
    #header_container a:visited, #header_container a:link {
      color: #fdfdfd; }
    #header_container a:hover, #header_container a:active {
      color: #cacaca; }
  #header_container .site-header {
    clear: both;
    font-size: 1.4em;
    line-height: 1em;
    padding-top: 0;
    padding-bottom: 0;
    width: 100%;
    position: fixed;
    z-index: 10;
    background-color: black;
    text-align: center;
    /**
     * Forms
     */ }
    #header_container .site-header .col {
      padding: 0; }
      #header_container .site-header .col > .table-layout {
        height: 75px; }
    #header_container .site-header .inner {
      position: relative; }
    #header_container .site-header form {
      margin: 0;
      padding: 0;
      border: 0; }
    #header_container .site-header .site-title .logo {
      position: relative;
      z-index: 10;
      color: #fdfdfd;
      font-family: "Futura", "Helvetica Neue", "Helvetica", Sans-serif; }
      #header_container .site-header .site-title .logo a {
        text-decoration: none; }
      #header_container .site-header .site-title .logo .image-logo {
        display: inline-block; }
        #header_container .site-header .site-title .logo .image-logo img {
          width: auto;
          max-height: 50px; }
        #header_container .site-header .site-title .logo .image-logo .compact-img-container {
          display: none; }
      #header_container .site-header .site-title .logo.typography {
        max-height: 75px;
        overflow: hidden; }
      #header_container .site-header .site-title .logo .typography-logo {
        display: inline-block;
        color: #fdfdfd;
        font-size: 50px;
        font-family: "Futura", "Helvetica Neue", "Helvetica", Sans-serif;
        letter-spacing: 2px;
        font-weight: normal;
        line-height: 1.1em;
        white-space: nowrap;
        max-height: inherit;
        overflow: inherit; }
    #header_container .site-header .site-social-nav {
      display: block; }
      #header_container .site-header .site-social-nav:last-of-type {
        position: static; }
      #header_container .site-header .site-social-nav.site-nav {
        padding-right: 35px; }
      #header_container .site-header .site-social-nav .navigation .main-navigation ul li {
        font-family: "Futura", "Helvetica Neue", "Helvetica", Sans-serif;
        font-size: 16px; }
        #header_container .site-header .site-social-nav .navigation .main-navigation ul li a {
          font-family: inherit;
          font-size: inherit; }
      #header_container .site-header .site-social-nav .navigation .main-navigation .nav-menu {
        text-align: justify; }
        #header_container .site-header .site-social-nav .navigation .main-navigation .nav-menu:after {
          content: '';
          display: inline-block;
          width: 100%;
          height: 0;
          padding: 0;
          border: 0; }
        #header_container .site-header .site-social-nav .navigation .main-navigation .nav-menu > li {
          display: inline-block;
          float: none;
          margin: 0;
          padding-right: 5px; }
      #header_container .site-header .site-social-nav .social-media-icons {
        margin: 0;
        height: auto;
        float: right;
        text-align: center;
        position: absolute;
        right: 24px; }
        body.bs-grid-lt-md #header_container .site-header .site-social-nav .social-media-icons {
          position: static;
          right: 0; }
        #header_container .site-header .site-social-nav .social-media-icons ul {
          list-style: none;
          margin: 0;
          padding: 0; }
        #header_container .site-header .site-social-nav .social-media-icons li {
          display: inline-block;
          margin: 0;
          text-align: left; }
        #header_container .site-header .site-social-nav .social-media-icons a {
          color: #fdfdfd;
          text-decoration: none;
          font-size: 1rem; }
          #header_container .site-header .site-social-nav .social-media-icons a:visited {
            color: #fdfdfd; }
          #header_container .site-header .site-social-nav .social-media-icons a:hover, #header_container .site-header .site-social-nav .social-media-icons a:active {
            color: white; }
          #header_container .site-header .site-social-nav .social-media-icons a .fa-stack {
            font-size: 0.9em;
            vertical-align: baseline; }
            #header_container .site-header .site-social-nav .social-media-icons a .fa-stack i.fa-stack-2x {
              -webkit-transition: all 0.2s ease-in-out;
              -moz-transition: all 0.2s ease-in-out;
              transition: all 0.2s ease-in-out;
              color: black; }
            #header_container .site-header .site-social-nav .social-media-icons a .fa-stack i.fa-inverse {
              -webkit-transition: all 0.2s ease-in-out;
              -moz-transition: all 0.2s ease-in-out;
              transition: all 0.2s ease-in-out;
              color: #fdfdfd; }
            #header_container .site-header .site-social-nav .social-media-icons a .fa-stack:hover i.fa-stack-2x {
              color: #fdfdfd; }
            #header_container .site-header .site-social-nav .social-media-icons a .fa-stack:hover i.fa-inverse {
              color: black; }
    #header_container .site-header .menu-toggle {
      display: none;
      position: absolute;
      z-index: 11;
      right: 0;
      top: 22.5px;
      height: 30px;
      border-width: 2px;
      border-style: solid;
      border-color: transparent;
      border-radius: 2px;
      padding: 2px;
      padding-left: 3px;
      padding-right: 3px;
      font-size: 22px;
      line-height: 1em; }
      #header_container .site-header .menu-toggle:hover {
        color: #fdfdfd;
        border-color: #fdfdfd; }
  #header_container.compact {
    margin-bottom: 0; }
    #header_container.compact .site-header .col > .table-layout {
      height: 40px; }
    #header_container.compact .site-header .menu-toggle {
      top: 5px; }
    #header_container.compact .site-header .site-title .logo .image-logo img {
      max-height: 35px; }
    #header_container.compact .site-header .site-title .logo.typography {
      max-height: 40px; }
    #header_container.compact .site-header .site-title .logo .typography-logo {
      font-size: 26.66667px; }

@media only screen and (min-width: 992px) {
  #header_container .site-header .site-social-nav {
    display: block !important; } }
@media only screen and (max-width: 991px) {
  #header_container {
    margin-bottom: 0; }
    #header_container .site-header {
      position: relative; }
      #header_container .site-header .site-title .logo {
        text-align: center; }
        #header_container .site-header .site-title .logo a {
          display: block;
          margin: 0 auto; }
      #header_container .site-header .site-social-nav {
        display: none; }
        #header_container .site-header .site-social-nav.site-nav {
          padding-right: 0; }
        #header_container .site-header .site-social-nav.col > .table-layout {
          height: auto; }
        #header_container .site-header .site-social-nav .navigation .main-navigation {
          padding-top: 20px;
          padding-bottom: 10px; }
          #header_container .site-header .site-social-nav .navigation .main-navigation ul li, #header_container .site-header .site-social-nav .navigation .main-navigation ul > li {
            background-color: #666666;
            border: 2px solid black;
            border-radius: 20px;
            color: #fdfdfd;
            margin: 5px 0;
            text-align: center;
            width: 100%; }
            #header_container .site-header .site-social-nav .navigation .main-navigation ul li a, #header_container .site-header .site-social-nav .navigation .main-navigation ul > li a {
              color: inherit;
              padding: 5px; }
            #header_container .site-header .site-social-nav .navigation .main-navigation ul li:hover > a, #header_container .site-header .site-social-nav .navigation .main-navigation ul > li:hover > a {
              color: #fdfdfd;
              text-decoration: underline; }
            #header_container .site-header .site-social-nav .navigation .main-navigation ul li:hover > ul, #header_container .site-header .site-social-nav .navigation .main-navigation ul > li:hover > ul {
              display: none !important; }
          #header_container .site-header .site-social-nav .navigation .main-navigation .nav-menu {
            padding: 0; }
            #header_container .site-header .site-social-nav .navigation .main-navigation .nav-menu ul {
              padding: 0; }
            #header_container .site-header .site-social-nav .navigation .main-navigation .nav-menu li, #header_container .site-header .site-social-nav .navigation .main-navigation .nav-menu > li {
              margin: 5px 0;
              padding-top: 5px;
              padding-bottom: 5px; }
        #header_container .site-header .site-social-nav .social-media-icons {
          padding-top: 30px;
          padding-bottom: 10px;
          float: none;
          display: inline-block;
          width: 100%;
          clear: both; }
          #header_container .site-header .site-social-nav .social-media-icons > ul {
            font-size: 2rem; }
          #header_container .site-header .site-social-nav .social-media-icons a {
            font-size: 2rem; }
      #header_container .site-header .menu-toggle {
        display: block; } }
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
    vertical-align: middle;
     }
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

#main_content_container .site-content article {
  margin-bottom: 0; }
  body.page #main_content_container .site-content article .entry-header {
    display: none; }
  #main_content_container .site-content article .entry-content {
    margin-bottom: 0; }
    body.template_raw-page #main_content_container .site-content article .entry-content {
      margin-bottom: 0; }
    #main_content_container .site-content article .entry-content > .vc_row {
      max-width: 1100px;
      width: 100%;
      margin-left: auto;
      margin-right: auto;
      clear: both;
      float: none;
      background-position: 50% 50%; }
      #main_content_container .site-content article .entry-content > .vc_row.full-width-content, #main_content_container .site-content article .entry-content > .vc_row.full-width-bg {
        max-width: 100%; }
      #main_content_container .site-content article .entry-content > .vc_row.full-width-bg > .row-inner.span-12 {
        max-width: 1100px;
        margin-left: auto;
        margin-right: auto;
        clear: both;
        float: none; }
      body.page #main_content_container .site-content article .entry-content > .vc_row:last-of-type {
        margin-bottom: 0; }
#main_content_container #primary.outsidecontainer {
  max-width: 1100px;
  margin: 0 auto; }

@media only screen and (max-width: 1100px) {
  #wpadminbar .ab-top-secondary {
    display: none; } }
.main-navigation {
  text-align: left; }
  .main-navigation a {
    -webkit-transition: all 0.1s ease-in-out;
    -moz-transition: all 0.1s ease-in-out;
    transition: all 0.1s ease-in-out;
    font-size: inherit;
    display: block;
    text-decoration: none;
    color: #fdfdfd; }
    .main-navigation a:visited, .main-navigation a:link {
      color: #fdfdfd; }
    .main-navigation a:hover, .main-navigation a:active {
      color: white; }
  .main-navigation li {
    float: left;
    position: relative;
    margin: 0 0 0 25px; }
    .main-navigation li:hover > a {
      text-decoration: underline; }
  .main-navigation li:first-of-type, .main-navigation > li:first-of-type {
    margin-left: 0 !important; }
  .main-navigation ul {
    font-size: inherit;
    list-style: none;
    margin: 0;
    padding: 0; }
    .main-navigation ul a {
      padding: 0; }
    .main-navigation ul li:hover > ul {
      display: block; }
  .main-navigation ul ul {
    display: none;
    position: absolute;
    left: 0;
    z-index: 99999;
    line-height: 1.7;
    background-color: #444444;
    box-shadow: 2px 2px 5px 0px rgba(0, 0, 0, 0.6); }
    .main-navigation ul ul li {
      margin: 0; }
      .main-navigation ul ul li :hover > a {
        color: #444444;
        background-color: #fdfdfd; }
  .main-navigation .nav-menu {
    font-style: normal;
    text-transform: uppercase;
    font-weight: 500;
    line-height: 1.5; }

	.comments-area article {
	  padding-bottom: 16px;
	  padding-bottom: 1rem;
	  margin: 24px 0;
	  margin: 1.5rem 0;
	  border-bottom: 1px solid #CCC; }

	.comments-area article header a {
	  text-decoration: none;
	  color: #5E5E5E; }

	.comments-area article header a:hover {
	  color: #21759b; }

	.comments-area article header h4 {
	  position: absolute;
	  top: 0;
	  right: 0;
	  padding: 8px 14px;
	  padding: 0.5rem 0.875rem;
	  font-size: 14px;
	  font-size: 0.875rem;
	  font-weight: normal;
	  color: #fff;
	  background-color: #0088D0;
	  background-repeat: repeat-x;
	  background-image: -moz-linear-gradient(top, #009cee, #0088d0);
	  background-image: -ms-linear-gradient(top, #009cee, #0088d0);
	  background-image: -webkit-linear-gradient(top, #009cee, #0088d0);
	  background-image: -o-linear-gradient(top, #009cee, #0088d0);
	  background-image: linear-gradient(top, #009cee, #0088d0);
	  border-radius: 3px;
	  border: 1px solid #007CBD; }

	a.comment-reply-link {
	  font-size: 14px;
	  font-size: 0.875rem;
	  line-height: 1.8;
	  color: #686868;
	  text-decoration: none; }

	a.comment-reply-link:hover {
	  color: #21759b; }

	.commentlist .pingback {
	  line-height: 1.8;
	  margin-bottom: 24px;
	  margin-bottom: 1.5rem;
	  padding-bottom: 0; }

	.commentlist .children {
	  margin-left: 48px;
	  margin-left: 3rem; }

	.commentlist {
	  padding-left: 0; }

	#respond form input[type="text"],
	#respond form textarea {
	  font-family: inherit;
	  -moz-box-sizing: border-box;
	  box-sizing: border-box;
	  font-size: 16px;
	  font-size: 1rem;
	  line-height: 1.8;
	  padding: 8px;
	  padding: 0.5rem;
	  width: 100%; }

	#respond form input[type="text"] {
	  width: 48%; }

	#respond form p.form-allowed-tags {
	  margin: 0;
	  font-size: 12px;
	  font-size: 0.75rem;
	  line-height: 1.5;
	  color: #5E5E5E; }

	#respond form p.form-allowed-tags code {
	  background: none;
	  border: none;
	  color: #5E5E5E; }

	label .required,
	span.required {
	  color: #BB0504; }

	form label.error {
	  font-style: normal;
	  font-weight: 500;
	  display: block;
	  padding: 0 10px 0 10px;
	  padding: 0 0.625rem 0 0.625rem;
	  margin: 5px 0 5px 0;
	  margin: 0.3125rem 0 0.3125rem 0;
	  font-size: 14px;
	  font-size: 0.875rem;
	  border-left: 4px solid #BB0504;
	  display: none; }

	#respond form label.error {
	  line-height: 1.3; }

	.comments-area .comment {
	  margin-top: 0; }
	  .comments-area .comment iframe {
	    margin: 0 auto;
	    display: block; }
	.comments-area .comment-meta {
	  border-bottom: 1px solid #DDD; }
	  .comments-area .comment-meta a {
	    -webkit-transition: all 0.2s ease-in-out;
	    -moz-transition: all 0.2s ease-in-out;
	    transition: all 0.2s ease-in-out;
	    color: blue; }
	    .comments-area .comment-meta a:visited {
	      color: blue; }
	    .comments-area .comment-meta a:hover {
	      color: #8dc63f; }
	  .comments-area .comment-meta cite {
	    font-style: normal;
	    text-transform: uppercase;
	    font-size: 1.7em;
	    margin-left: 0;
	    text-shadow: -2px 2px 0 rgba(0, 0, 0, 0.1); }
	  .comments-area .comment-meta time {
	    float: right;
	    margin-left: 0;
	    font-size: 0.8em;
	    line-height: 3.5; }
	.comments-area .bypostauthor cite span {
	  display: none; }

	.comments-title,
	.comment-reply-title {
	  text-transform: uppercase;
	  letter-spacing: -.5px;
	  font-size: 2em;
	  margin-bottom: 0; }

	#respond p {
	  margin: 0; }
	  #respond p + p {
	    margin-top: .5em; }
	#respond label {
	  display: block; }

	.lgm-optin .form-horizontal .form-group {
	  margin: 0; }
	.lgm-optin.lgm-optin-popup .optin-banner {
	  background-size: cover; }
	  .lgm-optin.lgm-optin-popup .optin-banner .featured-image > img {
	    max-height: 300px;
	    width: auto;
	    padding: 20px;
	    margin-top: 20px;
	    margin-bottom: 20px;
	    margin-left: 5%;
	    background-color: white;
	    box-shadow: 0 1px 6px 1px rgba(0, 0, 0, 0.3); }
	.lgm-optin.lgm-optin-popup .optin-copy-headline {
	  font-size: 28px;
	  text-align: center;
	  margin-top: 0.5em;
	  margin-bottom: 1rem; }
	.lgm-optin.lgm-optin-popup .optin-copy-description {
	  font-size: 18px;
	  line-height: 1.3;
	  margin-bottom: 1rem; }
	.lgm-optin.lgm-optin-popup .form-group > div {
	  width: 100%;
	  margin-bottom: 0;
	  padding: 0; }
	.lgm-optin.lgm-optin-popup .form-group label {
	  text-align: left;
	  display: none; }
	.lgm-optin.lgm-optin-popup .form-group input {
	  width: 100%;
	  float: left;
	  display: block; }

	#header_container .site-header .search {
	  float: right;
	  vertical-align: middle;
	  font-size: 10px; }
	  #header_container .site-header .search .open-search .fa-stack i.fa-square {
	    -webkit-transition: all 0.2s ease-in-out;
	    -moz-transition: all 0.2s ease-in-out;
	    transition: all 0.2s ease-in-out;
	    color: black; }
	  #header_container .site-header .search .open-search .fa-stack i.fa-search {
	    -webkit-transition: all 0.2s ease-in-out;
	    -moz-transition: all 0.2s ease-in-out;
	    transition: all 0.2s ease-in-out;
	    color: #fdfdfd; }
	  #header_container .site-header .search .open-search .fa-stack:hover i.fa-stack-2x {
	    color: #fdfdfd; }
	  #header_container .site-header .search .open-search .fa-stack:hover i.fa-inverse {
	    color: black; }
	  #header_container .site-header .search .hidden-search-bar {
	    display: none;
	    position: absolute;
	    top: 0;
	    left: 0;
	    z-index: 20;
	    margin-top: 12px;
	    width: 100%;
	    background-color: rgba(0, 0, 0, 0.8);
	    color: #fdfdfd; }
	    #header_container .site-header .search .hidden-search-bar #search {
	      width: 97%;
	      line-height: 32px;
	      font-size: 28px;
	      background-color: transparent;
	      color: white;
	      padding: 5px 10px 5px 10px;
	      margin-bottom: 0;
	      border: 0;
	      float: left; }
	      #header_container .site-header .search .hidden-search-bar #search:focus {
	        outline: 0; }
	    #header_container .site-header .search .hidden-search-bar .mobile-search-button {
	      background: none;
	      border: none;
	      padding: 0;
	      margin: 0;
	      box-shadow: none;
	      display: none; }
	    #header_container .site-header .search .hidden-search-bar .close-search {
	      font-size: 20px;
	      color: white;
	      position: relative;
	      top: 15px;
	      left: 7px; }
	#header_container.compact .site-header .search .hidden-search-bar {
	  margin-top: 3px; }
	  #header_container.compact .site-header .search .hidden-search-bar #search {
	    line-height: 17px;
	    font-size: 15px; }
	  #header_container.compact .site-header .search .hidden-search-bar .close-search {
	    top: 5px; }

	body.search .has-post-thumbnail {
	  padding-left: 0; }
	body.search h1.page-title {
	  font-size: 22px; }

	@media only screen and (max-width: 991px) {
	  #header_container .site-header .search {
	    float: none;
	    font-size: 20px;
	    text-align: center; }
	    #header_container .site-header .search .open-search .fa-stack {
	      display: none; }
	    #header_container .site-header .search .hidden-search-bar {
	      position: relative;
	      padding-right: 30px;
	      display: inline-block !important; }
	      #header_container .site-header .search .hidden-search-bar #search {
	        width: 99%;
	        background-color: rgba(0, 0, 0, 0.8); }
	      #header_container .site-header .search .hidden-search-bar .mobile-search-button {
	        font-size: 30px;
	        display: inline;
	        position: absolute;
	        right: 10px;
	        top: 8px;
	        outline: 0;
	        z-index: 10;
	        color: black; }
	        #header_container .site-header .search .hidden-search-bar .mobile-search-button .fa-search {
	          height: 50px;
	          vertical-align: middle; }
	        #header_container .site-header .search .hidden-search-bar .mobile-search-button:hover .fa-search {
	          color: black; }
	      #header_container .site-header .search .hidden-search-bar .close-search {
	        display: none; } }
	.side-post-thumbnail .teaser_grid_container {
	  padding-left: 150px; }
	.side-post-thumbnail .post-thumb {
	  position: absolute;
	  top: 0;
	  left: -125px;
	  width: 100px;
	  height: 100px; }
	  .side-post-thumbnail .post-thumb a {
	    display: block;
	    overflow: hidden;
	    border-radius: 50%;
	    border: 5px solid transparent; }
	@media only screen and (max-width: 480px) {
	  .side-post-thumbnail .teaser_grid_container {
	    padding-left: 0; } }

	.has-post-thumbnail {
	  position: relative; }
	  .has-post-thumbnail .post-thumb {
	    position: absolute;
	    top: 0;
	    left: -125px;
	    width: 100px;
	    height: 100px; }
	    .has-post-thumbnail .post-thumb a {
	      display: block;
	      overflow: hidden;
	      border-radius: 50%;
	      border: 5px solid transparent; }
	  @media only screen and (max-width: 480px) {
	    .has-post-thumbnail {
	      padding-left: 0; } }

	@media only screen and (max-width: 600px) {
	  .post-thumb {
	    display: none; } }

	.entry-meta address, .entry-meta time {
	  display: inline;
	  font-style: italic;
	  font-weight: 400;
	  font-size: 14px;
	  font-size: 0.875rem;
	  margin: 0 20px 0 0;
	  margin: 0 1.25rem 0 0; }

	body.single-post .site-content {
	  background-color: white;
	  padding-top: 20px;
	  padding-bottom: 20px; }

	.wpb_row {
	  border: 0 solid transparent; }

	.wpb_row.vc-row-callout-panels .wpb_column {
	  padding-left: 1%;
	  padding-right: 1%; }
	  .wpb_row.vc-row-callout-panels .wpb_column.first-of-type {
	    padding-left: 15px; }
	  .wpb_row.vc-row-callout-panels .wpb_column.last-of-type {
	    padding-right: 15px; }
	  .wpb_row.vc-row-callout-panels .wpb_column > .wpb_wrapper {
	    padding: 25px 15px;
	    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
	    border-radius: 0px;
	    min-height: 175px; }

	.wpb_row.vc-row-blog-featured-posts > .row-inner > .wpb_column > .wpb_wrapper {
	  position: relative;
	  padding: 25px;
	  border: 1px solid black;
	  background-color: white; }
	  .wpb_row.vc-row-blog-featured-posts > .row-inner > .wpb_column > .wpb_wrapper .wpb_single_image .wpb_heading {
	    display: inline-block;
	    text-align: center;
	    font-size: 36px;
	    min-height: 90px; }
	    body.bs-grid-xs .wpb_row.vc-row-blog-featured-posts > .row-inner > .wpb_column > .wpb_wrapper .wpb_single_image .wpb_heading {
	      min-height: initial !important;
	      height: auto !important; }
	  .wpb_row.vc-row-blog-featured-posts > .row-inner > .wpb_column > .wpb_wrapper .wpb_single_image img {
	    width: 100%;
	    height: auto; }
	  .wpb_row.vc-row-blog-featured-posts > .row-inner > .wpb_column > .wpb_wrapper .vc-pm-button, .wpb_row.vc-row-blog-featured-posts > .row-inner > .wpb_column > .wpb_wrapper .vc-pm-advanced-button {
	    margin-left: auto;
	    margin-right: auto;
	    position: absolute;
	    margin-bottom: -22px;
	    bottom: 0;
	    left: 50%; }
	    body.bs-grid-xs .wpb_row.vc-row-blog-featured-posts > .row-inner > .wpb_column > .wpb_wrapper .vc-pm-button, body.bs-grid-xs .wpb_row.vc-row-blog-featured-posts > .row-inner > .wpb_column > .wpb_wrapper .vc-pm-advanced-button {
	      margin-bottom: 5px; }
	  body.bs-grid-xs .wpb_row.vc-row-blog-featured-posts > .row-inner > .wpb_column > .wpb_wrapper {
	    height: auto !important; }

	.wpb_row.vc-row-section-header-light, .wpb_row.vc-row-section-header-dark {
	  padding-top: 5px;
	  padding-bottom: 5px;
	  margin-top: 0;
	  margin-bottom: 0; }
	  .wpb_row.vc-row-section-header-light h1, .wpb_row.vc-row-section-header-dark h1 {
	    font-family: "Futura", "Helvetica Neue", "Helvetica", Sans-serif;
	    font-size: 42px;
	    line-height: 33px;
	    letter-spacing: 5px;
	    font-weight: normal; }
	  .wpb_row.vc-row-section-header-light h2, .wpb_row.vc-row-section-header-dark h2 {
	    font-family: "Futura", "Helvetica Neue", "Helvetica", Sans-serif;
	    font-size: 30px;
	    line-height: 30px;
	    text-transform: uppercase; }
	.wpb_row.vc-row-section-header-dark {
	  background-color: black; }
	  .wpb_row.vc-row-section-header-dark h1 {
	    color: white; }
	  .wpb_row.vc-row-section-header-dark h2 {
	    color: white; }
	.wpb_row.vc-row-section-header-light {
	  background-color: #fdfdfd; }
	  .wpb_row.vc-row-section-header-light h1 {
	    color: white; }
	  .wpb_row.vc-row-section-header-light h2 {
	    color: black; }

	.wpb_row.launch-video-row-bg {
	  background-color: #178dad; }
	.wpb_row.value-sequence-video-nav > .row-inner > .wpb_column.active .wpb_raw_html {
	  background-color: #178dad; }
	.wpb_row.value-sequence-video-nav > .row-inner > .wpb_column .wpb_raw_html {
	  background-color: #333333;
	  min-height: 85px; }
	  .wpb_row.value-sequence-video-nav > .row-inner > .wpb_column .wpb_raw_html > .wpb_wrapper {
	    display: table;
	    width: 100%; }
	    .wpb_row.value-sequence-video-nav > .row-inner > .wpb_column .wpb_raw_html > .wpb_wrapper .video-nav {
	      display: table-cell;
	      vertical-align: middle;
	      padding: .5em 1em;
	      text-align: center;
	      height: 85px;
	      width: 100%; }
	      .wpb_row.value-sequence-video-nav > .row-inner > .wpb_column .wpb_raw_html > .wpb_wrapper .video-nav p {
	        color: white;
	        margin-bottom: .25em;
	        line-height: 1em;
	        padding-bottom: 0;
	        font-family: 'Georgia', 'Cambria', 'Times New Roman', 'Times', serif;
	        font-size: 16px; }
	        .wpb_row.value-sequence-video-nav > .row-inner > .wpb_column .wpb_raw_html > .wpb_wrapper .video-nav p:nth-of-type(2) {
	          color: #999;
	          font-weight: bold;
	          line-height: 1.1em;
	          font-style: italic; }
	          .wpb_row.value-sequence-video-nav > .row-inner > .wpb_column .wpb_raw_html > .wpb_wrapper .video-nav p:nth-of-type(2):before {
	            content: '\201c'; }
	          .wpb_row.value-sequence-video-nav > .row-inner > .wpb_column .wpb_raw_html > .wpb_wrapper .video-nav p:nth-of-type(2):after {
	            content: '\201d'; }

	button, input[type="button"], input[type="submit"], a[role="button"], p.learn-more a, .button, .vc-pm-button, .vc-pm-advanced-button {
	  -webkit-transition: all 0.3s ease-in-out;
	  -moz-transition: all 0.3s ease-in-out;
	  transition: all 0.3s ease-in-out;
	  display: inline-block;
	  position: relative;
	  border: 0;
	  padding: 10px 15px 10px 15px;
	  text-align: left;
	  text-decoration: none;
	  text-weight: normal;
	  font-style: normal;
	  cursor: pointer;
	  color: #178dad;
	  border-radius: 3px;
	  border: 1px solid transparent;
	  border-top-color: #f6fbfb;
	  border-bottom-color: #939e9d;
	  border-right-color: #939e9d;
	  border-left-color: #f6fbfb;
	  box-shadow: 1px 1px 3px rgba(23, 141, 173, 0.4); }
	  button strong, input[type="button"] strong, input[type="submit"] strong, a[role="button"] strong, p.learn-more a strong, .button strong, .vc-pm-button strong, .vc-pm-advanced-button strong, button em, input[type="button"] em, input[type="submit"] em, a[role="button"] em, p.learn-more a em, .button em, .vc-pm-button em, .vc-pm-advanced-button em, button i, input[type="button"] i, input[type="submit"] i, a[role="button"] i, p.learn-more a i, .button i, .vc-pm-button i, .vc-pm-advanced-button i {
	    -webkit-transition: all 0.3s ease-in-out;
	    -moz-transition: all 0.3s ease-in-out;
	    transition: all 0.3s ease-in-out; }
	  button i, input[type="button"] i, input[type="submit"] i, a[role="button"] i, p.learn-more a i, .button i, .vc-pm-button i, .vc-pm-advanced-button i {
	    font-style: normal; }
	  button:hover, input[type="button"]:hover, input[type="submit"]:hover, a[role="button"]:hover, p.learn-more a:hover, .button:hover, .vc-pm-button:hover, .vc-pm-advanced-button:hover {
	    border-color: #0e5669;
	    background-color: #e9f0ee; }
	    button:hover strong, input[type="button"]:hover strong, input[type="submit"]:hover strong, a[role="button"]:hover strong, p.learn-more a:hover strong, .button:hover strong, .vc-pm-button:hover strong, .vc-pm-advanced-button:hover strong, button:hover em, input[type="button"]:hover em, input[type="submit"]:hover em, a[role="button"]:hover em, p.learn-more a:hover em, .button:hover em, .vc-pm-button:hover em, .vc-pm-advanced-button:hover em, button:hover i, input[type="button"]:hover i, input[type="submit"]:hover i, a[role="button"]:hover i, p.learn-more a:hover i, .button:hover i, .vc-pm-button:hover i, .vc-pm-advanced-button:hover i {
	      color: #1db2da; }

	.vc-pm-button {
	  background-color: #e5ebe9;
	  display: table;
	  font-size: 16px;
	  line-height: 1em;
	  min-height: 32px; }
	  .vc-pm-button .button-text {
	    display: table-cell;
	    color: #178dad;
	    font-family: "BebasNeueRegular", "Futura", "Helvetica Neue", "Helvetica", Sans-serif;
	    font-weight: 200;
	    font-size: 1.4em;
	    line-height: 1em;
	    text-transform: uppercase;
	    text-align: center;
	    vertical-align: middle; }
	  .vc-pm-button .button-secondary-text {
	    display: table-cell;
	    color: black;
	    font-family: "Open Sans", "Futura", "Helvetica Neue", "Helvetica", Sans-serif;
	    font-weight: normal;
	    font-size: 0.65em;
	    font-style: normal;
	    line-height: 1.65em;
	    text-transform: uppercase;
	    border-left: 1px solid #178dad;
	    padding-left: 5%;
	    text-align: center;
	    vertical-align: middle; }

	.vc-pm-advanced-button {
	  background-color: #e5ebe9;
	  display: table;
	  font-size: 16px;
	  line-height: 1em;
	  padding-left: 10px;
	  padding-right: 10px;
	  min-height: 50px; }
	  .vc-pm-advanced-button.has-icon.has-icon-left {
	    padding-left: 32px; }
	    .vc-pm-advanced-button.has-icon.has-icon-left.has-icon-arrow {
	      padding-left: 25px; }
	  .vc-pm-advanced-button.has-icon.has-icon-right {
	    padding-right: 32px; }
	    .vc-pm-advanced-button.has-icon.has-icon-right.has-icon-arrow {
	      padding-right: 25px; }
	  .vc-pm-advanced-button .button-text {
	    display: table-cell;
	    color: #178dad;
	    font-family: "BebasNeueRegular", "Futura", "Helvetica Neue", "Helvetica", Sans-serif;
	    font-weight: 200;
	    font-size: 1.4em;
	    line-height: 1em;
	    text-transform: uppercase;
	    padding-right: 5%;
	    margin-right: 0.4em;
	    text-align: center;
	    vertical-align: middle; }
	  .vc-pm-advanced-button .button-secondary-text {
	    display: table-cell;
	    color: black;
	    font-family: "Open Sans", "Futura", "Helvetica Neue", "Helvetica", Sans-serif;
	    font-weight: normal;
	    font-size: 0.65em;
	    font-style: normal;
	    line-height: 1.65em;
	    text-transform: uppercase;
	    border-left: 1px solid #178dad;
	    padding-left: 5%;
	    text-align: center;
	    vertical-align: middle; }
	  .vc-pm-advanced-button .button-icon {
	    display: inline-block;
	    vertical-align: middle;
	    padding: 0;
	    margin-left: 0.7em;
	    margin-right: 0.7em;
	    content: '';
	    line-height: 1em; }
	    .vc-pm-advanced-button .button-icon.icon-1 {
	      margin-left: 0; }
	    .vc-pm-advanced-button .button-icon.icon-2 {
	      margin-right: 0; }
	    .vc-pm-advanced-button .button-icon.icon-type-arrow {
	      margin: 0;
	      position: absolute;
	      height: 25px;
	      width: 12.5px;
	      top: 25%; }
	      .vc-pm-advanced-button .button-icon.icon-type-arrow.icon-left {
	        height: 0;
	        width: 0;
	        border-top: 12.5px solid transparent;
	        border-bottom: 12.5px solid transparent;
	        border-right: 12.5px solid #178dad;
	        left: 2%; }
	      .vc-pm-advanced-button .button-icon.icon-type-arrow.icon-right {
	        height: 0;
	        width: 0;
	        border-top: 12.5px solid transparent;
	        border-bottom: 12.5px solid transparent;
	        border-left: 12.5px solid #178dad;
	        right: 2%; }
	  .vc-pm-advanced-button:hover .button-secondary-text {
	    border-left-color: #1db2da; }
	  .vc-pm-advanced-button:hover .button-icon.icon-type-arrow.icon-right {
	    border-left-color: #1db2da; }
	  .vc-pm-advanced-button:hover .button-icon.icon-type-arrow.icon-left {
	    border-right-color: #1db2da; }

	.lgm-popup-button {
	  display: table;
	  min-height: 32px;
	  padding: 10px;
	  border: 2px solid black;
	  border-radius: 5px;
	  background-color: #e5ebe9;
	  font-size: 25px;
	  color: black;
	  text-transform: uppercase;
	  text-decoration: none; }
	  .lgm-popup-button:hover {
	    color: black;
	    text-decoration: underline; }

	form .moonray-form-input-type-hidden {
	  display: none !important; }

	.hupso_c {
	  line-height: 1; }





		/* Segundo para el footer */























		/*
	// DD colors
	$color_bon_jour_approx: #e3e3e2;
	$color_orange_roughy_80_approx: rgba(206,78,37,0.8);
	$color_emperor_approx: #4d4d4d;
	$white: #fff;
	$black: #000;
	$color_orange_roughy_approx: #ce4e25;
	$color_red_damask_approx: #dc6843;
	$color_red_robin_approx: #7f351a;
	$color_log_cabin_approx: #24231f;
	$color_bombay_approx: #b2b2b8;
	$color_masala_approx: #3c3b38;
	$color_mine_shaft_approx: #333;
	$color_yellow_orange_approx: #fbb03b;
	$color_nobel_approx: #b3b3b3;
	$color_mercury_approx: #e6e6e6;
	$color_celeste_approx: #ccc;
	$color_kabul_approx: #554c3d;
	$color_cape_cod_approx: #424240;
	$color_dove_gray_approx: #6e6d6d;
	$color_suva_gray_approx: #898787;
	$color_driftwood_approx: #a67e4a;
	*/
	button[type=submit], button.inf-button, .col .lgm-optin button[type=submit], .col .lgm-optin input[type=submit], a.vc-pm-button, a.vc-pm-button.read-more, a.vc-pm-advanced-button, .site-content a[role=button], .site-content button, p.learn-more, a.button, .site-content a.lgm-popup-button, input[type="button"], input[type="reset"], input[type="submit"] {
	  display: table;
	  position: relative;
	  cursor: pointer;
	  padding: 0.4em 0 0.4em 1em;
	  text-decoration: none;
	  border-radius: 0;
	  border: none;
	  box-shadow: none;
	  -webkit-transition: all 0.3s ease-in-out;
	  -moz-transition: all 0.3s ease-in-out;
	  transition: all 0.3s ease-in-out; }
	  button[type=submit] strong, button.inf-button strong, .col .lgm-optin button[type=submit] strong, .col .lgm-optin input[type=submit] strong, a.vc-pm-button strong, a.vc-pm-button.read-more strong, a.vc-pm-advanced-button strong, .site-content a[role=button] strong, .site-content button strong, p.learn-more strong, a.button strong, .site-content a.lgm-popup-button strong, input[type="button"] strong, input[type="reset"] strong, input[type="submit"] strong, button[type=submit] em, button.inf-button em, .col .lgm-optin button[type=submit] em, .col .lgm-optin input[type=submit] em, a.vc-pm-button em, a.vc-pm-button.read-more em, a.vc-pm-advanced-button em, .site-content a[role=button] em, .site-content button em, p.learn-more em, a.button em, .site-content a.lgm-popup-button em, input[type="button"] em, input[type="reset"] em, input[type="submit"] em, button[type=submit] i, button.inf-button i, .col .lgm-optin button[type=submit] i, .col .lgm-optin input[type=submit] i, a.vc-pm-button i, a.vc-pm-button.read-more i, a.vc-pm-advanced-button i, .site-content a[role=button] i, .site-content button i, p.learn-more i, a.button i, .site-content a.lgm-popup-button i, input[type="button"] i, input[type="reset"] i, input[type="submit"] i {
	    -webkit-transition: all 0.3s ease-in-out;
	    -moz-transition: all 0.3s ease-in-out;
	    transition: all 0.3s ease-in-out; }

	button[type=submit], button.inf-button, .col .lgm-optin button[type=submit], .col .lgm-optin input[type=submit] {
	  vertical-align: middle;
	  color: #24231f;
	  padding-top: 0.2em;
	  padding-bottom: 0.2em;
	  text-transform: uppercase;
	  height: 40px;
	  font-size: 18px;
	  text-align: center; }
	  button[type=submit]:hover, button.inf-button:hover, .col .lgm-optin button[type=submit]:hover, .col .lgm-optin input[type=submit]:hover {
	    background-color: #faa622; }

	a.vc-pm-button, a.vc-pm-advanced-button, .site-content a[role=button], .site-content button, .site-content a.lgm-popup-button, input[type="button"], input[type="reset"], input[type="submit"] {
	  padding: 17px 35px 15px 25px;
	  background: url("../img/arrow-mask-right-white.png") 100% center no-repeat #4d4d4d;
	  border-radius: 0;
	  border: none;
	  box-shadow: none;
	  border: none;
	  outline: none;
	  height: 48px;
	  min-height: 48px;
	  margin-bottom: 20px !important;
	  vertical-align: middle;
	  text-transform: uppercase;
	  color: #fbb03b;
	  letter-spacing: .15em;
	  font-size: 14px; }
	  a.vc-pm-button strong.button-text, a.vc-pm-advanced-button strong.button-text, .site-content a[role=button] strong.button-text, .site-content button strong.button-text, .site-content a.lgm-popup-button strong.button-text, input[type="button"] strong.button-text, input[type="reset"] strong.button-text, input[type="submit"] strong.button-text, a.vc-pm-button a, a.vc-pm-advanced-button a, .site-content a[role=button] a, .site-content button a, .site-content a.lgm-popup-button a, input[type="button"] a, input[type="reset"] a, input[type="submit"] a {
	    font-weight: 700;
	    font-size: 14px;
	    letter-spacing: .15em;
	    text-shadow: none;
	    text-decoration: none;
	    text-transform: uppercase;
	    color: #fbb03b; }
	  a.vc-pm-button:hover, a.vc-pm-advanced-button:hover, .site-content a[role=button]:hover, .site-content button:hover, .site-content a.lgm-popup-button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover {
	    background: url("../img/arrow-mask-right-white.png") 100% center no-repeat #24231f; }

	a.vc-pm-button.read-more, p.learn-more, a.button {
	  padding: 20px 50px;
	  text-align: center;
	  background: white;
	  text-shadow: none;
	  box-shadow: 0 1px 5px #CCC;
	  border: none;
	  outline: none;
	  color: #ce4e25; }
	  a.vc-pm-button.read-more strong.button-text, p.learn-more strong.button-text, a.button strong.button-text, a.vc-pm-button.read-more strong, p.learn-more strong, a.button strong, a.vc-pm-button.read-more em.button-secondary-text, p.learn-more em.button-secondary-text, a.button em.button-secondary-text {
	    font-size: 14px;
	    text-decoration: none;
	    text-align: center;
	    color: #ce4e25;
	    line-height: 1; }
	  a.vc-pm-button.read-more strong.button-text, p.learn-more strong.button-text, a.button strong.button-text, a.vc-pm-button.read-more strong, p.learn-more strong, a.button strong {
	    text-transform: uppercase;
	    font-weight: 600;
	    letter-spacing: .15em; }
	  a.vc-pm-button.read-more em.button-secondary-text, p.learn-more em.button-secondary-text, a.button em.button-secondary-text, a.vc-pm-button.read-more a, p.learn-more a, a.button a {
	    text-transform: none;
	    font-weight: 300;
	    padding-left: 20px;
	    padding-right: 18px; }
	  a.vc-pm-button.read-more em.button-secondary-text, p.learn-more em.button-secondary-text, a.button em.button-secondary-text {
	    border-left: 1px solid #e1e0e6; }
	  a.vc-pm-button.read-more :hover, p.learn-more :hover, a.button :hover {
	    text-decoration: none;
	    color: #fbb03b; }

	button[type=submit], button.inf-button {
	  padding: 0 40px;
	  height: 48px;
	  background: url("../img/arrow-indent-left-black.png") #fbb03b center left no-repeat; }

	a.vc-pm-button.read-more:hover {
	  border-color: white;
	  background-color: white; }
	  a.vc-pm-button.read-more:hover i, a.vc-pm-button.read-more:hover .button-icon.icon-type-arrow.icon-right {
	    border-left-color: #fbb03b;
	    color: #fbb03b; }
	a.vc-pm-button.read-more a:hover {
	  color: #fbb03b; }

	a.vc-pm-advanced-button .button-secondary-text {
	  color: #FFF;
	  border-left-color: #FFF; }
	  a.vc-pm-advanced-button .button-secondary-text:hover {
	    color: #ce4e25; }

	.vc-pm-advanced-button .button-icon.icon-type-arrow.icon-right {
	  border-left: 12.5px solid #fbb03b;
	  right: 4%; }

	.vc-pm-advanced-button:hover .button-secondary-text {
	  border-left-color: #ce4e25; }

	p.learn-more a {
	  border: 0;
	  box-shadow: none;
	  color: #ce4e25; }
	  p.learn-more a:hover {
	    border-color: white;
	    background-color: white;
	    color: #fbb03b; }
	    p.learn-more a:hover strong {
	      color: #fbb03b; }

	a.button:hover {
	  background: #FFF; }

	input[type="button"], input[type="reset"], input[type="submit"] {
	  height: 50px; }

	@media screen and (min-width: 769px) and (max-width: 880px) {
	  a.vc-pm-button {
	    font-size: 1em;
	    padding: 15px 25px 15px 15px; } }
	a.vc-pm-button, a.vc-pm-advanced-button, .site-content a[role=button], .site-content button, .site-content a.lgm-popup-button, input[type="button"], input[type="reset"], input[type="submit"], a.vc-pm-button strong.button-text, a.vc-pm-advanced-button strong.button-text, .site-content a[role=button] strong.button-text, .site-content button strong.button-text, .site-content a.lgm-popup-button strong.button-text, input[type="button"] strong.button-text, input[type="reset"] strong.button-text, input[type="submit"] strong.button-text, a.vc-pm-button a, a.vc-pm-advanced-button a, .site-content a[role=button] a, .site-content button a, .site-content a.lgm-popup-button a, input[type="button"] a, input[type="reset"] a, input[type="submit"] a, p.learn-more strong.button-text, a.button strong.button-text, a.vc-pm-button.read-more strong, p.learn-more strong, a.button strong, a.vc-pm-button.read-more em.button-secondary-text, p.learn-more em.button-secondary-text, a.button em.button-secondary-text, .col h1, .col h2, .col h3, label, legend, fieldset, .home-masthead-callout .home-masthead-callout-inner h1 {
	  font-family: "Open Sans", "Helvetica", sans-serif; }

	button[type=submit], button.inf-button, .col .lgm-optin button[type=submit], .col .lgm-optin input[type=submit], p, blockquote p, .entry-content table, .comment-content table, .archive-title, .page-title, .entry-content th, .comment-content th, ol, ul, dl, address, .wpb_accordion_content, .wpb_accordion_content p, .col .lgm-optin .optin-copy p, .col .lgm-optin .optin-copy .optin-copy-description, html body, img, .col h4, .col h5, .col h6, input[type="text"], input[type="email"], input[type="password"], input[type="tel"], input[type="url"], input[type="search"], input[type="date"], textarea, select, .col .lgm-optin .optin-copy-headline {
	  font-family: "Nunito", "Helvetica", sans-serif; }

	p, blockquote p, .entry-content table, .comment-content table, .archive-title, .page-title, .entry-content th, .comment-content th, ol, ul, dl, address, .wpb_accordion_content, .wpb_accordion_content p, .col .lgm-optin .optin-copy p, .col .lgm-optin .optin-copy .optin-copy-description, .col h1, .col h2, .col h3, .col h4, .col h5, .col h6, label {
	  -webkit-font-smoothing: antialiased;
	  -moz-osx-font-smoothing: grayscale; }

	.col h6, .site-content .social-panel p {
	  -webkit-font-smoothing: subpixel-antialiased;
	  -moz-osx-font-smoothing: auto; }

	p, blockquote p, .entry-content table, .comment-content table, .archive-title, .page-title, .entry-content th, .comment-content th, ol, ul, dl, address, .wpb_accordion_content, .wpb_accordion_content p, .col .lgm-optin .optin-copy p, .col .lgm-optin .optin-copy .optin-copy-description {
	  font-weight: 300;
	  font-size: 16px;
	  line-height: 1.6;
	  margin-bottom: 1.2em; }

	html body {
	  font-size: 12px; }

	.site-content article {
	  margin-bottom: 0; }
	  .site-content article .entry-content {
	    margin-bottom: 0; }

	p {
	  color: #4d4d4d; }

	.site-content a, a.comment-reply-link {
	  color: #ce4e25;
	  text-decoration: none;
	  font-family: inherit; }
	  .site-content a:hover, a.comment-reply-link:hover {
	    color: #fbb03b; }

	.comments-area .comment-meta a:visited {
	  color: #24231f; }

	.comments-area .comment-meta a:hover, #footer_container .site-footer.row a:hover, #footer_container .credits.row p a:hover {
	  color: #fbb03b; }

	.comments-area .comment-meta a {
	  color: #ce4e25; }

	.comments-area .comment-meta cite {
	  font-style: normal;
	  text-transform: none;
	  font-size: 18px;
	  margin-left: 10px;
	  font-family: "Nunito", "Helvetica", sans-serif;
	  text-shadow: none; }

	.site-content strong, .site-content b {
	  font-weight: 700;
	  font-family: inherit;
	  font-size: inherit;
	  font-family: inherit; }

	.site-content em {
	  font-style: italic;
	  font-family: inherit;
	  font-size: inherit; }

	figure {
	  margin-bottom: 30px; }

	blockquote cite {
	  font-style: normal;
	  font-weight: 300;
	  font-size: 14px;
	  line-height: 1.6;
	  display: block;
	  font-family: "Nunito", "Helvetica", sans-serif;
	  color: #4d4d4d;
	  margin-top: 15px; }

	.wp-caption .wp-caption-text, .gallery-caption, .entry-caption {
	  font-style: italic;
	  font-weight: 300;
	  font-size: 14px;
	  line-height: 1.5;
	  color: #4d4d4d;
	  text-align: center;
	  font-family: "Nunito", "Helvetica", sans-serif; }

	.page-links {
	  font-family: "Nunito", "Helvetica", sans-serif;
	  text-transform: uppercase; }

	.entry-content th, .comment-content th {
	  font-family: "Nunito", "Helvetica", sans-serif;
	  font-size: 14px; }

	.entry-content dt, .comment-content dt {
	  font-family: "Nunito", "Helvetica", sans-serif;
	  font-weight: 700; }

	code, pre {
	  font-size: 12px; }

	q {
	  font-style: italic; }

	img {
	  font-size: 1.8rem; }

	.alignleft {
	  margin-right: 15px; }

	.alignright {
	  margin-left: 15px; }

	small {
	  font-size: 1.3rem;
	  font-size: 13px;
	  font-family: "Open Sans", "Helvetica", sans-serif;
	  font-weight: 300; }

	.wpb_accordion .wpb_accordion_wrapper .wpb_accordion_header {
	  font-family: "Nunito", "Helvetica", sans-serif;
	  font-size: 18px; }

	.wpb_prev_slide, .wpb_next_slide {
	  font-size: 13px;
	  font-family: "Nunito", "Helvetica", sans-serif; }

	.col h1, .col h2, .col h3 {
	  font-weight: 400;
	  letter-spacing: -0.5px;
	  text-transform: uppercase;
	  margin: 20px 0;
	  color: #4d4d4d; }
	.col h4, .col h5, .col h6 {
	  font-weight: 300;
	  letter-spacing: -0.5px;
	  text-transform: uppercase;
	  margin: 20px 0;
	  color: #4d4d4d; }
	.col h1 {
	  font-size: 36px; }
	.col h2 {
	  font-size: 24px;
	  line-height: 1.6; }
	.col .arrow-right h2:after {
	  content: "";
	  background: url("../img/h2-arrow-right.png") no-repeat center right transparent;
	  padding-left: 60px; }
	.col .arrow-left h2:before {
	  content: "";
	  background: url("../img/h2-arrow-right.png") no-repeat center left transparent;
	  padding-right: 60px; }
	.col h3 {
	  font-size: 22px; }
	.col h4 {
	  margin-bottom: .6em;
	  font-size: 18px;
	  letter-spacing: 0; }
	.col h5 {
	  font-size: 16px; }
	.col h6 {
	  font-size: 14px;
	  letter-spacing: .1em;
	  text-transform: uppercase; }

	ol, ul {
	  line-height: 2; }
	  .site-content ol, .site-content ul {
	    font-size: 16px; }
	    .site-content ol ol, .site-content ul ol, .site-content ol ul, .site-content ul ul {
	      font-size: inherit; }

	ol ol li {
	  list-style-type: lower-alpha; }

	form {
	  margin-bottom: 1em; }

	input[type="text"], input[type="email"], input[type="password"], input[type="tel"], input[type="url"], input[type="search"], input[type="date"], textarea, select {
	  font-weight: 400;
	  padding: 10px;
	  width: 100%;
	  border: 0px;
	  border-bottom: 1px solid #fff;
	  font-size: 1.5rem;
	  font-size: 15px;
	  line-height: inherit;
	  color: #555;
	  background-color: #efefef;
	  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.09) inset;
	  -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.09) inset;
	  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.09) inset;
	  -o-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.09) inset;
	  transition: all 0.2s linear;
	  -moz-transition: all 0.2s linear;
	  -webkit-transition: all 0.2s linear;
	  -o-transition: all 0.2s linear;
	  border-radius: 0;
	  margin-bottom: 1em; }

	input {
	  display: block; }

	label {
	  font-size: 2rem;
	  font-size: 20px;
	  font-weight: 300; }

	legend {
	  font-weight: 700;
	  text-transform: uppercase;
	  width: auto;
	  display: inline-block;
	  padding-left: 0.2em;
	  padding-right: 0.2em;
	  margin-left: -0.2em;
	  margin-bottom: auto;
	  color: #4d4d4d; }

	fieldset {
	  border: 1px solid #C0C0C0;
	  margin: 0px 2px;
	  padding: 1em 2em 0px;
	  font-size: 1.4em; }

	input[type="radio"], input[type="checkbox"] {
	  margin: -4px 20px 0px 5px; }

	#header_container {
	  color: #888888; }
	  #header_container a {
	    color: #888888; }
	    #header_container a:visited, #header_container a:link {
	      color: #888888; }
	    #header_container a:hover, #header_container a:active {
	      color: #fbb03b;
	      text-decoration: none; }
	  #header_container .site-header {
	    background-color: white; }
	    #header_container .site-header .site-title .logo .typography-logo {
	      font-size: 24px;
	      font-family: "Open Sans", "Helvetica", sans-serif;
	      letter-spacing: 0;
	      text-transform: uppercase;
	      color: #24231f; }
	      #header_container .site-header .site-title .logo .typography-logo span.word-1 {
	        font-weight: 700; }
	      #header_container .site-header .site-title .logo .typography-logo span.word-2 {
	        font-weight: 700; }
	      #header_container .site-header .site-title .logo .typography-logo span.word-3,
	      #header_container .site-header .site-title .logo .typography-logo span.word-4 {
	        font-weight: 300;
	        color: #ce4e25; }
	    #header_container .site-header .site-social-nav .social-media-icons a .fa-stack i.fa-stack-2x {
	      color: white; }
	    #header_container .site-header .site-social-nav .social-media-icons a .fa-stack i.fa-inverse {
	      color: #888888; }
	    #header_container .site-header .site-social-nav .social-media-icons a .fa-stack:hover i.fa-stack-2x {
	      color: #888888; }
	    #header_container .site-header .site-social-nav .social-media-icons a .fa-stack:hover i.fa-inverse {
	      color: white; }
	    #header_container .site-header .site-social-nav .navigation .main-navigation ul li {
	      font-family: "Open Sans", "Helvetica", sans-serif;
	      font-size: 17px; }
	      #header_container .site-header .site-social-nav .navigation .main-navigation ul li a {
	        font-family: inherit;
	        font-size: inherit; }
	      #header_container .site-header .site-social-nav .navigation .main-navigation ul li.current-menu-item a {
	        color: #ce4e25;
	        font-weight: 700; }
	    #header_container .site-header .menu-toggle:hover {
	      color: #bbbbbb;
	      border-color: #bbbbbb; }
	  #header_container.compact .site-header .site-title .logo.typography {
	    max-height: 40px; }
	  #header_container.compact .site-header .site-title .logo .typography-logo {
	    font-size: 22px; }
	  #header_container.skin-orange {
	    color: #24231f; }
	    #header_container.skin-orange a {
	      color: #24231f; }
	      #header_container.skin-orange a:visited, #header_container.skin-orange a:link {
	        color: #24231f; }
	      #header_container.skin-orange a:hover, #header_container.skin-orange a:active {
	        color: #fbb03b; }
	    #header_container.skin-orange .site-header {
	      background-color: #ce4e25; }
	      #header_container.skin-orange .site-header .site-title .logo .typography-logo {
	        color: white; }
	        #header_container.skin-orange .site-header .site-title .logo .typography-logo span.word-3,
	        #header_container.skin-orange .site-header .site-title .logo .typography-logo span.word-4 {
	          color: #fbb03b; }
	      #header_container.skin-orange .site-header .site-social-nav .social-media-icons a .fa-stack i.fa-stack-2x {
	        color: #ce4e25; }
	      #header_container.skin-orange .site-header .site-social-nav .social-media-icons a .fa-stack i.fa-inverse {
	        color: #24231f; }
	      #header_container.skin-orange .site-header .site-social-nav .social-media-icons a .fa-stack:hover i.fa-stack-2x {
	        color: #24231f; }
	      #header_container.skin-orange .site-header .site-social-nav .social-media-icons a .fa-stack:hover i.fa-inverse {
	        color: #ce4e25; }
	      #header_container.skin-orange .site-header .site-social-nav .navigation .main-navigation ul li.current-menu-item a {
	        color: white; }
	      #header_container.skin-orange .site-header .menu-toggle:hover {
	        color: #5b584e;
	        border-color: #5b584e; }

	@media only screen and (max-width: 991px) {
	  #header_container .site-header .site-social-nav .navigation .main-navigation ul li {
	    background-color: #888888;
	    border: 2px solid white; }
	    #header_container .site-header .site-social-nav .navigation .main-navigation ul li a {
	      color: white; }
	    #header_container .site-header .site-social-nav .navigation .main-navigation ul li:hover > a {
	      color: #fbb03b; }
	  #header_container.skin-orange .site-header .site-social-nav .navigation .main-navigation ul li {
	    background-color: #24231f; }
	    #header_container.skin-orange .site-header .site-social-nav .navigation .main-navigation ul li.current-menu-item a {
	      color: #ce4e25; }
	  #header_container.skin-orange .site-header .menu-toggle:hover {
	    color: black;
	    border-color: black; } }
	/*#main_content_container .site-content article {
		margin-top: 60px;
	}*/
	.site-content h2.post-title a.link_title {
	  font-family: "Open Sans", "Helvetica", sans-serif;
	  font-size: 3.2rem;
	  font-size: 32px;
	  line-height: 1.2;
	  margin-bottom: 0.5em;
	  color: #4d4d4d;
	  text-transform: none;
	  font-weight: 700; }
	  .site-content h2.post-title a.link_title a.link_title:hover {
	    text-decoration: none; }

	.blog #main_content_container #primary.site-content, .archive #main_content_container #primary.site-content, .single #main_content_container #primary.site-content {
	  margin-top: 60px; }

	.side-post-thumbnail .teaser_grid_container {
	  margin-top: 60px; }

	a.more-link {
	  font-family: "Nunito", "Helvetica", sans-serif;
	  font-size: 20px;
	  text-decoration: underline;
	  color: #ce4e25; }
	  a.more-link span.meta-nav {
	    display: none; }

	h1.entry-title {
	  font-family: "Open Sans", "Helvetica", sans-serif;
	  font-size: 3.2rem;
	  font-weight: 700;
	  font-size: 32px;
	  line-height: 1.2;
	  margin-bottom: 0.5em;
	  color: #4d4d4d;
	  text-transform: none; }

	.post a {
	  color: #ce4e25; }

	.post .post-tags a {
	  font-family: "Open Sans", "Helvetica", sans-serif;
	  font-size: 1.2rem;
	  color: #4d4d4d; }

	.header-meta a {
	  font-size: 13px;
	  font-family: "Open Sans", "Helvetica", sans-serif;
	  color: #cccccc; }
	.header-meta i {
	  color: #cccccc; }

	.entry-meta {
	  display: none; }

	.entry-header time, .entry-header address {
	  font-size: 13px;
	  font-family: "Open Sans", "Helvetica", sans-serif;
	  color: #cccccc; }

	.post blockquote {
	  border-left: 3px solid #eee;
	  margin: 1em 0;
	  padding-left: 20px;
	  font-size: inherit;
	  line-height: inherit; }

	.hupso-share-buttons {
	  margin-bottom: 10px;
	  margin-left: -10px; }

	.nav-next, .nav-previous {
	  margin-bottom: 70px;
	  font-size: 18px;
	  font-family: "Nunito", "Helvetica", sans-serif; }

	#respond form p.form-allowed-tags {
	  display: none; }

	.wpb_row.vc-row-blog-featured-posts > .row-inner > .wpb_column > .wpb_wrapper {
	  padding: 0;
	  border: 0;
	  background-color: #e1e0e6; }
	  .wpb_row.vc-row-blog-featured-posts > .row-inner > .wpb_column > .wpb_wrapper .wpb_single_image .wpb_heading {
	    margin-bottom: 0px;
	    padding-top: 25px;
	    padding-right: 25px;
	    padding-bottom: 5px;
	    padding-left: 25px;
	    background-color: #ce4e25;
	    font: italic 32px "Open Sans", "Helvetica", sans-serif;
	    color: white;
	    width: 100%;
	    text-align: left;
	    font-weight: 400; }

	.col .section-heading {
	  text-align: left;
	  text-transform: uppercase;
	  font-weight: 300;
	  font-family: "Nunito", "Helvetica", sans-serif;
	  background: url("/wp-content/themes/pm-elevate-ascent/assets/img/arrow-indent-left-white.png") no-repeat center left #24231f !important; }
	  .col .section-heading .vc_col-sm-4 h2, .col .section-heading .vc_col-sm-4 h1 {
	    color: #fbb03b;
	    font-size: 24px;
	    margin-top: 0;
	    margin-left: 20px; }
	  .col .section-heading .vc_col-sm-8 h2 {
	    color: white;
	    font-size: 16px;
	    margin: 4px 0 0 0 !important; }

	.widget ul li {
	  border-bottom: 1px solid;
	  border-color: rgba(124, 124, 124, 0.5);
	  margin-bottom: .5em;
	  padding-bottom: .5em;
	  font-size: 1.5rem;
	  font-size: 15px;
	  list-style: none;
	  margin-left: 0; }
	.widget ul a {
	  font-size: inherit; }

	.tagcloud a {
	  font-family: "Open Sans", "Helvetica", sans-serif; }

	#calendar_wrap #wp-calendar caption, #calendar_wrap #wp-calendar tfoot, #calendar_wrap #wp-calendar tbody {
	  font-size: 1.3rem;
	  font-size: 13px;
	  font-family: "Open Sans", "Helvetica", sans-serif; }
	#calendar_wrap #wp-calendar thead tr th {
	  font-size: 1.2rem;
	  font-size: 12px;
	  font-family: "Open Sans", "Helvetica", sans-serif; }

	.widget_recent_entries span.post-date, .widget_recent_entries .widget_rss span.rss-date, .widget_rss .widget_recent_entries span.rss-date {
	  font-size: 1.2rem;
	  font-size: 12px;
	  color: #ccc; }

	.widget .widget-title, .widget .widgettitle, .widget #footer_container .site-footer.row #recent-posts-2 h3.widget-title, #footer_container .site-footer.row #recent-posts-2 .widget h3.widget-title, .widget #footer_container .site-footer.row #simple_tweet_widget-2 h3.widget-title, #footer_container .site-footer.row #simple_tweet_widget-2 .widget h3.widget-title, .widget #footer_container .site-footer.row #text-4 h3.widget-title, #footer_container .site-footer.row #text-4 .widget h3.widget-title {
	  font: bold 1.8rem "Nunito", "Helvetica", sans-serif;
	  font-size: 18px;
	  font-weight: 300;
	  letter-spacing: .05em;
	  border-bottom: 1px solid rgba(204, 204, 204, 0.5);
	  padding-bottom: 0.1em;
	  margin-bottom: 0.4em;
	  text-transform: uppercase; }
	.widget .wpb_widgetised_column_heading {
	  font-style: bold; }
	.widget .tweets {
	  padding: 0;
	  margin-bottom: .5em; }
	  .widget .tweets li {
	    clear: both;
	    overflow: auto;
	    border-bottom: 1px solid rgba(204, 204, 204, 0.5);
	    margin-bottom: .5em;
	    padding-bottom: .5em; }
	  .widget .tweets p {
	  	color:#CCCCCC;
	    width: 70%;
	    float: left;
	    font-size: inherit;
	    margin-bottom: 0; }
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
	    color: #4d4d4d; }
	  .widget .tweets-meta a {
	    font-size: 1rem;
	    font-family: "Open Sans", "Helvetica", sans-serif;
	    font-weight: 500; }
	  .widget .tweets-meta p.twitget-user-description {
	    font-family: "Nunito", "Helvetica", sans-serif;
	    font-size: 1em;
	    font-weight: 300;
	    line-height: 1.6;
	    clear: both;
	    margin-top: 1em;
	    color: #4d4d4d; }
	  .widget .tweets-meta img {
	    border-radius: 4px;
	    margin-right: 10px; }

	#footer_container {
	  border-top: 2px solid #ce4e25;
	  background-color: #24231f;
	  font-family: "Nunito", "Helvetica", sans-serif; }
	  #footer_container .site-footer.row a {
	    text-decoration: none;
	    color: #cccccc; }
	  #footer_container .site-footer.row #recent-posts-2 h3.widget-title {
	    color: #cccccc; }
	  #footer_container .site-footer.row #recent-posts-2 ul li {
	    padding: 12px 0;
	    line-height: 1.5em; }
	    #footer_container .site-footer.row #recent-posts-2 ul li a {
	      font-size: 2rem;
	      font-size: 20px; }
	  #footer_container .site-footer.row #simple_tweet_widget-2 h3.widget-title {
	    color: #cccccc; }
	  #footer_container .site-footer.row #simple_tweet_widget-2 .tweets {
	    color: #cccccc; }
	  #footer_container .site-footer.row #simple_tweet_widget-2 .tweets-meta {
	    margin: 2em 0 10em 0; }
	    #footer_container .site-footer.row #simple_tweet_widget-2 .tweets-meta strong.real-name {
	      color: #cccccc; }
	    #footer_container .site-footer.row #simple_tweet_widget-2 .tweets-meta p.twitget-user-description {
	      color: #cccccc; }
	  #footer_container .site-footer.row #text-4 {
	     /*a.foot-social-ico {
			text-align: right;
				i {
					width: 36px;
					height: 36px;
					background-color: $accent-color-2 !important;
					color: $accent-color-4;
					border-radius: 50%;
					padding: 10px;
					font-size: inherit;
					@include transition(all 0.3s ease-in-out);
				}

			}
	 }
} */ }
    #footer_container .site-footer.row #text-4 h3.widget-title {
      color: #CCCCCC !important;
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
      background-color: #CCCCCC;
      display: block;
      border-radius: 50%; }
      	#footer_container .site-footer.row #text-4 a.foot-social-ico .fa {
	        font-size: 2em;
	        vertical-align: middle;
	        color: rgb(98, 98, 98); 
    	}
      #footer_container .site-footer.row #text-4 a.foot-social-ico:hover {
        background-color: black;
        color: black;
        }
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

.col .lgm-optin button[type=submit], .col .lgm-optin input[type=submit] {
  vertical-align: middle;
  width: 25%;
  text-align: center;
  height: 48px;
  background: url("../img/arrow-indent-left-black.png") #fbb03b center left no-repeat; }
.col .lgm-optin .optin-form {
  margin-top: 0;
  padding: 0; }
  .col .lgm-optin .optin-form label {
    display: none; }
  .col .lgm-optin .optin-form form input {
    width: 35%;
    float: left;
    margin-right: 10px; }
  .col .lgm-optin .optin-form form input[type="submit"] {
    width: 25%; }
.col .lgm-optin .optin-copy-headline {
  color: white;
  font-size: 18px;
  font-weight: 400;
  font-size: 18px;
  margin-bottom: 5px;
  margin-top: 5px; }
.col .lgm-optin .optin-copy {
  color: white; }
  .col .lgm-optin .optin-copy p, .col .lgm-optin .optin-copy .optin-copy-description {
    font-size: 16px;
    line-height: 1.2;
    margin-bottom: 20px;
    color: white; }
.col .lgm-optin .optin-image {
  margin-top: -45px;
  margin-right: 2em;
  margin-left: -60px;
  margin-bottom: 20px; }
  .col .lgm-optin .optin-image img {
    width: auto;
    max-height: 250px; }

.col .lgm-optin2 button[type=submit], .col .lgm-optin2 input[type=submit] {
  background: url("../img/arrow-indent-left-dark-gray.png") #fbb03b center left no-repeat; }
.col .lgm-optin2 .optin-form {
  margin-top: 20px;
  margin-bottom: 0; }
.col .lgm-optin2 .optin-image {
  margin-left: 20px; }

.lgm-optin-popup {
  margin-top: 0px; }
  .lgm-optin-popup .optin-content {
    background-color: black; }
    .lgm-optin-popup .optin-content .optin-copy-headline {
      font-family: "Nunito", "Helvetica", sans-serif;
      color: white; }
    .lgm-optin-popup .optin-content .optin-copy-description {
      font-family: "Nunito", "Helvetica", sans-serif;
      font-size: 14px;
      line-height: 18px;
      color: #9daeb3;
      margin-bottom: 5px; }

@media screen and (max-width: 860px) {
  .col .lgm-optin button[type=submit], .col .lgm-optin input[type=submit] {
    width: 100%; }
  .col .lgm-optin .optin-form form input {
    width: 100%;
    float: none;
    margin-right: 0; } }
@media screen and (max-width: 600px) {
  .col .lgm-optin2 .optin-copy {
    clear: both;
    padding-top: 0; } }
/*.featured-section {
  background-color: $feature-section-color;
  & > div {
    padding-top: 20px;
  }
  img {
    margin: -7px auto 0;
  }
  iframe {
    display: block;
  }
}*/
.home-masthead-callout {
  max-width: 576px;
  margin: 0px auto;
  background: #24231f url(../img/free-train-bg.png) 0 0 no-repeat;
  opacity: 0.9;
  min-height: 196px;
  padding: 20px 0 0; }
  .home-masthead-callout .home-masthead-callout-inner {
    border-top: 1px white solid;
    border-bottom: 1px white solid;
    max-width: 540px;
    margin-left: 20px; }
    .home-masthead-callout .home-masthead-callout-inner h1 {
      width: 50%;
      float: left;
      font-weight: 300;
      color: white;
      text-transform: uppercase;
      font-size: 36px;
      line-height: 38px; }
      .home-masthead-callout .home-masthead-callout-inner h1 strong {
        display: block;
        font-weight: 800; }
    .home-masthead-callout .home-masthead-callout-inner h2 {
      float: right;
      width: 50%;
      text-transform: uppercase;
      font-family: "Nunito", "Helvetica", sans-serif;
      font-size: 16px;
      line-height: 19px;
      font-weight: 300;
      color: white;
      padding: 0 20px 20px 0; }

@media screen and (max-width: 500px) {
  .home-masthead-callout .home-masthead-callout-inner h2 {
    float: left;
    width: 100%;
    margin: 80px 0 15px; } }
.endorsement blockquote {
  border-left: none;
  padding: 40px 0;
  background: url("../img/opening-br.gif") no-repeat left center transparent; }
  .endorsement blockquote p {
    margin-left: 100px;
    border-left: 1px solid #b2b2b8;
    padding-left: 20px; }
.endorsement .cite-source {
  background-color: #24231f;
  margin: 0;
  width: 104%;
  float: left;
  /*.wpb_single_image:after {
  	content:"";
  	background: url('../img/arrow-indent-right-black.png') no-repeat center right transparent;
  }*/ }
  .endorsement .cite-source p {
    color: white;
    text-transform: uppercase;
    line-height: 1;
    float: left;
    margin-top: 50px;
    padding-left: 20px; }
  .endorsement .cite-source img {
    margin-left: -15px;
    float: left;
    width: 45%;
    margin-bottom: 0;
    height: 154px;
    width: 277px; }

.site-content .social-panel {
  border-left: 1px solid #e3e3e2;
  height: auto;
  padding: 0 60px 0 30px;
  margin-bottom: 30px;
  overflow: auto; }
  .site-content .social-panel p {
    text-transform: uppercase;
    font-size: 11px;
    font-weight: 300;
    float: left;
    clear: both; }
    .site-content .social-panel p a {
      color: #24231f; }

@media screen and (min-width: 1px) and (max-width: 767px) {
  .site-content .social-panel {
    border-left: none;
    padding: 0 0 20px 30px;
    margin-bottom: 30px;
    border-bottom: 1px solid #e3e3e2; } }
#header_container .site-header .search .open-search .fa-stack i.fa-square {
  color: white; }
#header_container .site-header .search .open-search .fa-stack i.fa-search {
  color: #888888; }
#header_container .site-header .search .open-search .fa-stack:hover i.fa-stack-2x {
  color: #888888; }
#header_container .site-header .search .open-search .fa-stack:hover i.fa-inverse {
  color: white; }
#header_container.skin-orange .site-header .search .open-search .fa-stack i.fa-square {
  color: #ce4e25; }
#header_container.skin-orange .site-header .search .open-search .fa-stack i.fa-search {
  color: #24231f; }
#header_container.skin-orange .site-header .search .open-search .fa-stack:hover i.fa-stack-2x {
  color: #24231f; }
#header_container.skin-orange .site-header .search .open-search .fa-stack:hover i.fa-inverse {
  color: #ce4e25; }

@media only screen and (max-width: 991px) {
  #header_container .site-header .search .hidden-search-bar .mobile-search-button {
    color: white; }
    #header_container .site-header .search .hidden-search-bar .mobile-search-button:hover .fa-search {
      color: #e6e6e6; }
  #header_container.skin-orange .site-header .search .mobile-search-button:hover .fa-search {
    color: #fbb03b; } }
.col h2.wpb_singleimage_heading {
  color: #4d4d4d;
  width: 192px;
  background: #e0e0e5;
  padding: 15px 0;
  text-align: center;
  font-family: "Nunito", "Helvetica", sans-serif;
  font-size: 12px;
  line-height: 15px;
  text-transform: uppercase;
  color: #24231f;
  font-weight: 300;
  margin: 0 auto; }

/*.page{
	.entry-header{
		display: none;

	}
	.site-content{
		max-width: 100% !important;
		width: 100%;
		margin: 74px auto 0 !important;
		padding:0px;

	}
	#main_content_container {
		.site-content{
			.col{
				padding:0px !important;
			}

		}

	} 
}
.innerpage-banner{
		width: 100%;
		margin:0px auto;
		float: left;
}
.inner-newsletter{
		width: 100%;
		margin: 0 auto;
		float: left;
		.chargePanel{
			margin-top: 0px;
			background: #24231f;

		}
		.inner-newsletter-innersection{
			padding:0px;
		}
}
.about-page{
	margin:138px auto 0;
	width:100;
	float:left;
	width:100%;
	.about-page-left{
		width: 277px;
		margin-right: 0px;
		.about-page-left-inner{
			width: 100%;
			float: left;
			margin-bottom: 40px;
			.about-page-left-inner-image{
				width: 100%;
				float: left;
				text-align: center;
				img{
					width: 276px;
					height: 170px;
=======
				a:hover {
					i {
						background-color: lighten( $accent-color-2, 25 );
						color: rgba(black, 0.7) !important;
					}
>>>>>>> origin/master
				}
		 }
	} */ }
	    #footer_container .site-footer.row #text-4 h3.widget-title {
	      color: #CCCCCC;
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
	      background-color: #CCCCCC;
	      display: block;
	      border-radius: 50%; }
	      #footer_container .site-footer.row #text-4 a.foot-social-ico .fa {
	        font-size: 2em;
	        vertical-align: middle;
	        color: #000000; }
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

	.col .lgm-optin button[type=submit], .col .lgm-optin input[type=submit] {
	  vertical-align: middle;
	  width: 25%;
	  text-align: center;
	  height: 48px;
	  background: url("../img/arrow-indent-left-black.png") #fbb03b center left no-repeat; }
	.col .lgm-optin .optin-form {
	  margin-top: 0;
	  padding: 0; }
	  .col .lgm-optin .optin-form label {
	    display: none; }
	  .col .lgm-optin .optin-form form input {
	    width: 35%;
	    float: left;
	    margin-right: 10px; }
	  .col .lgm-optin .optin-form form input[type="submit"] {
	    width: 25%; }
	.col .lgm-optin .optin-copy-headline {
	  color: white;
	  font-size: 18px;
	  font-weight: 400;
	  font-size: 18px;
	  margin-bottom: 5px;
	  margin-top: 5px; }
	.col .lgm-optin .optin-copy {
	  color: white; }
	  .col .lgm-optin .optin-copy p, .col .lgm-optin .optin-copy .optin-copy-description {
	    font-size: 16px;
	    line-height: 1.2;
	    margin-bottom: 20px;
	    color: white; }
	.col .lgm-optin .optin-image {
	  margin-top: -45px;
	  margin-right: 2em;
	  margin-left: -60px;
	  margin-bottom: 20px; }
	  .col .lgm-optin .optin-image img {
	    width: auto;
	    max-height: 250px; }

	.col .lgm-optin2 button[type=submit], .col .lgm-optin2 input[type=submit] {
	  background: url("../img/arrow-indent-left-dark-gray.png") #fbb03b center left no-repeat; }
	.col .lgm-optin2 .optin-form {
	  margin-top: 20px;
	  margin-bottom: 0; }
	.col .lgm-optin2 .optin-image {
	  margin-left: 20px; }

	.lgm-optin-popup {
	  margin-top: 0px; }
	  .lgm-optin-popup .optin-content {
	    background-color: black; }
	    .lgm-optin-popup .optin-content .optin-copy-headline {
	      font-family: "Nunito", "Helvetica", sans-serif;
	      color: white; }
	    .lgm-optin-popup .optin-content .optin-copy-description {
	      font-family: "Nunito", "Helvetica", sans-serif;
	      font-size: 14px;
	      line-height: 18px;
	      color: #9daeb3;
	      margin-bottom: 5px; }

	@media screen and (max-width: 860px) {
	  .col .lgm-optin button[type=submit], .col .lgm-optin input[type=submit] {
	    width: 100%; }
	  .col .lgm-optin .optin-form form input {
	    width: 100%;
	    float: none;
	    margin-right: 0; } }
	@media screen and (max-width: 600px) {
	  .col .lgm-optin2 .optin-copy {
	    clear: both;
	    padding-top: 0; } }
	/*.featured-section {
	  background-color: $feature-section-color;
	  & > div {
	    padding-top: 20px;
	  }
	  img {
	    margin: -7px auto 0;
	  }
	  iframe {
	    display: block;
	  }
	}*/
	.home-masthead-callout {
	  max-width: 576px;
	  margin: 0px auto;
	  background: #24231f url(../img/free-train-bg.png) 0 0 no-repeat;
	  opacity: 0.9;
	  min-height: 196px;
	  padding: 20px 0 0; }
	  .home-masthead-callout .home-masthead-callout-inner {
	    border-top: 1px white solid;
	    border-bottom: 1px white solid;
	    max-width: 540px;
	    margin-left: 20px; }
	    .home-masthead-callout .home-masthead-callout-inner h1 {
	      width: 50%;
	      float: left;
	      font-weight: 300;
	      color: white;
	      text-transform: uppercase;
	      font-size: 36px;
	      line-height: 38px; }
	      .home-masthead-callout .home-masthead-callout-inner h1 strong {
	        display: block;
	        font-weight: 800; }
	    .home-masthead-callout .home-masthead-callout-inner h2 {
	      float: right;
	      width: 50%;
	      text-transform: uppercase;
	      font-family: "Nunito", "Helvetica", sans-serif;
	      font-size: 16px;
	      line-height: 19px;
	      font-weight: 300;
	      color: white;
	      padding: 0 20px 20px 0; }

	@media screen and (max-width: 500px) {
	  .home-masthead-callout .home-masthead-callout-inner h2 {
	    float: left;
	    width: 100%;
	    margin: 80px 0 15px; } }
	.endorsement blockquote {
	  border-left: none;
	  padding: 40px 0;
	  background: url("../img/opening-br.gif") no-repeat left center transparent; }
	  .endorsement blockquote p {
	    margin-left: 100px;
	    border-left: 1px solid #b2b2b8;
	    padding-left: 20px; }
	.endorsement .cite-source {
	  background-color: #24231f;
	  margin: 0;
	  width: 104%;
	  float: left;
	  /*.wpb_single_image:after {
	  	content:"";
	  	background: url('../img/arrow-indent-right-black.png') no-repeat center right transparent;
	  }*/ }
	  .endorsement .cite-source p {
	    color: white;
	    text-transform: uppercase;
	    line-height: 1;
	    float: left;
	    margin-top: 50px;
	    padding-left: 20px; }
	  .endorsement .cite-source img {
	    margin-left: -15px;
	    float: left;
	    width: 45%;
	    margin-bottom: 0;
	    height: 154px;
	    width: 277px; }

	.site-content .social-panel {
	  border-left: 1px solid #e3e3e2;
	  height: auto;
	  padding: 0 60px 0 30px;
	  margin-bottom: 30px;
	  overflow: auto; }
	  .site-content .social-panel p {
	    text-transform: uppercase;
	    font-size: 11px;
	    font-weight: 300;
	    float: left;
	    clear: both; }
	    .site-content .social-panel p a {
	      color: #24231f; }

	@media screen and (min-width: 1px) and (max-width: 767px) {
	  .site-content .social-panel {
	    border-left: none;
	    padding: 0 0 20px 30px;
	    margin-bottom: 30px;
	    border-bottom: 1px solid #e3e3e2; } }
	#header_container .site-header .search .open-search .fa-stack i.fa-square {
	  color: white; }
	#header_container .site-header .search .open-search .fa-stack i.fa-search {
	  color: #888888; }
	#header_container .site-header .search .open-search .fa-stack:hover i.fa-stack-2x {
	  color: #888888; }
	#header_container .site-header .search .open-search .fa-stack:hover i.fa-inverse {
	  color: white; }
	#header_container.skin-orange .site-header .search .open-search .fa-stack i.fa-square {
	  color: #ce4e25; }
	#header_container.skin-orange .site-header .search .open-search .fa-stack i.fa-search {
	  color: #24231f; }
	#header_container.skin-orange .site-header .search .open-search .fa-stack:hover i.fa-stack-2x {
	  color: #24231f; }
	#header_container.skin-orange .site-header .search .open-search .fa-stack:hover i.fa-inverse {
	  color: #ce4e25; }

	@media only screen and (max-width: 991px) {
	  #header_container .site-header .search .hidden-search-bar .mobile-search-button {
	    color: white; }
	    #header_container .site-header .search .hidden-search-bar .mobile-search-button:hover .fa-search {
	      color: #e6e6e6; }
	  #header_container.skin-orange .site-header .search .mobile-search-button:hover .fa-search {
	    color: #fbb03b; } }
	.col h2.wpb_singleimage_heading {
	  color: #4d4d4d;
	  width: 192px;
	  background: #e0e0e5;
	  padding: 15px 0;
	  text-align: center;
	  font-family: "Nunito", "Helvetica", sans-serif;
	  font-size: 12px;
	  line-height: 15px;
	  text-transform: uppercase;
	  color: #24231f;
	  font-weight: 300;
	  margin: 0 auto; }


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

		header 
		#tw > a > .circle-text:hover:after,#twitterFooter:hover{
			background: #5EA9DD !important;
			color:red;
		}
		
		#in > a > .circle-text:hover:after,#inFooter:hover{
			/*content: url(<?php echo "'".base_url("img/social_networks/in2.png")."'"; ?>);*/
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