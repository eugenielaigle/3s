<?php
session_start();

require_once('Mobile-Detect/Mobile_Detect.php');
$detect = new Mobile_Detect();

$gets = explode('/', $_GET['get']);

foreach($gets AS $get){
	$i = $i+1;
	${'get_'.$i} = $get;
}

$url = 'localhost/3s/';

if($get==''){
  if ($detect->isMobile() && !$detect->isTablet()){
    $page = "mobile";
  }else{
    $page = "home";
  }
} else{
	$page = $get_1;
	if(!file_exists('pages/'.$get_1.'.php')) {
		$page = "404";
	}
}

ob_start();

include('pages/'.$page.'.php');

$content = ob_get_contents();
ob_end_clean();
