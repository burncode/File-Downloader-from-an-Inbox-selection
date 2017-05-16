<?php 
 session_start();

//set ini settings
//set_time_limit(0); 
//ini_set('memory_limit', '512M'); 

 $Directory = 'Files/';

if(!isset($_SESSION['SelectFile'])){
header('Location: index.php');
}
include_once 'downloader.php';

 _SESSION['SelectFile'] ;
$filepath  = $Directory."". $_SESSION['SelectFile'] ;
sleep(1);
download($filepath); 
$filepath = '';
exit;
 ?>
 