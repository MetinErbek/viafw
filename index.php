<?php
session_start();
/* 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/
require_once ('system/db/MysqliDb.php');
$projectFolder = 'ulker/admin/';

try
{
	
	$db = new MysqliDb('localhost', 'root', '', 'db');

} catch(Exception $e)
{
	echo 'DB ERROR';
}


require_once('system/Core.php');









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