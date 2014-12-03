.jscarousal
{
	width: 100%;
	margin: 0;
	padding: 0;
	padding: 0px 0px 0px 0px;
	position: relative; /*overflow: hidden;*/	
}
.jscarousal .jscarousal-left, .jscarousal .jscarousal-right
{
	float: left;
	width: 2%;
	height: 25px;	
	color: White;
	position: relative;
	top: 12px;
	cursor: pointer;
	background-size: 100%;
}
.jscarousal .jscarousal-left
{	
	background-image: url('<?php echo base_url("img/property_detail/slider/controls/left.png"); ?>');
	background-repeat: no-repeat;
	background-position: left;
}
.jscarousal .jscarousal-right
{
	background-image: url('<?php echo base_url("img/property_detail/slider/controls/right.png"); ?>');
	background-repeat: no-repeat;
	background-position: right;
}
.jscarousal-contents
{

	width: 94%;
	height: 80px;
	margin: 0 auto;	
	float: left;
	position: relative;
	margin-left: 1%;
	overflow: hidden;
	/*background: blue;*/
}
.jscarousal-contents > div
{
	position: absolute;
	width: 100%;
	height: 160px;
}
.jscarousal-contents > div > div
{
	/*float: left;*/
	width: 7.5%;
	display: inline-block;
	margin-left: 0.4%;
	margin-right: 0.4%;
}
.jscarousal-contents img
{
	/*width: 60px;
	height: 50px;*/
	border: solid 1px #7A7677;
}
.hidden
{
	display: none;
}
.visible
{
	display: block;
}
/*.thumbnail-active
{
	filter: alpha(opacity=100);
	opacity: 1.0;
	cursor: pointer;
}
.thumbnail-inactive
{
	filter: alpha(opacity=20);
	opacity: 0.2;
	cursor: pointer;
}*/
@media(max-width:767px){
    .jscarousal-contents > div > div{
        width: 20% !important;
    }
    .jscarousal .jscarousal-left, .jscarousal .jscarousal-right {
        height: 30px !important;
        top: 3px !important;
        width: 20px;
    }
    .jscarousal-contents{
        width: 84%;
    }
}
.thumbnail-text
{
	color: #7A7677;
	font-weight: bold;
	text-align: left;
	display: block;
	padding: 10px 2px 2px 0px;
}
@media(min-width:1000px){
    .jscarousal .jscarousal-left, .jscarousal .jscarousal-right
    {
        height: 30px !important;	
    }
    .jscarousal-contents
    {
        height: 55px;
    }
}
@media(min-width:1500px){
    .jscarousal .jscarousal-left, .jscarousal .jscarousal-right
    {
        height: 30px !important;	
    }
}
@media(min-width:2000px){
    .jscarousal .jscarousal-left, .jscarousal .jscarousal-right
    {
        height: 120px !important;	
    }
    .jscarousal-contents
    {

        width: 94%;
    }
}
