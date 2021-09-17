<?php
/* 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/
$projectFolder = 'smallapp';
require_once('system/Core.php');



try
{
	
	//$db = new MysqliDb('metinerbek.com', 'metinerb_araplar', 'araplar.metin2', 'metinerb_araplar');
	
} catch(Exception $e)
{
	echo 'DB ERROR';
}





/*
function getAllPhotos()
{
	
	global $db;
	
	return $db->get('images');
}

function getDirectories()
{
	$dir = '../';
	$directories = glob($dir . '/*', GLOB_ONLYDIR);

	print_r( $directories);
	
}




$ALL = getAllPhotos();

foreach($ALL as $photo)
{
	echo '<div ><img style="width:50px;height:100px;" src="data:image/jpg;base64, '.$photo['image'].'"></div>';
	
}
*/
?>