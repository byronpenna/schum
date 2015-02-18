<?php
include_once(APPPATH.'controllers/padre.php');
class Prueba extends Padre
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		
		// $feed = array();
		// foreach ($rss->getElementsByTagName('item') as $node) {
		// 	$item = array ( 
		// 		'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
		// 		'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
		// 		'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
		// 		'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
		// 		);
		// 	array_push($feed, $item);
		// }
	}
	function prueba(){
		
	}
}