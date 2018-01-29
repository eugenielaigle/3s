<?php
session_start();

$gets = explode('/', $_GET['get']);

foreach($gets AS $get){
	$i = $i+1;
	${'get_'.$i} = $get;
}

$url = 'https://'.$_SERVER['SERVER_NAME'].'/';


	$page = $get_1;
	if(!file_exists('dist/'.$get_1.'.php')) {
		$page = "404";
	}

ob_start();

	include('dist/'.$page.'.php');

$content = ob_get_contents();
ob_end_clean();
