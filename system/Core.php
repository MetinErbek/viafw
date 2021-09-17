<?php


require_once ('db/MysqliDb.php');
foreach(glob("app/helpers/*.php") as $filename)
{
    include $filename;
}


class Via
{
	Public $db;
	public function __construct()
	{
		global $db;
		$this->db = $db; 
		
	}
	
	
	public function view($address)
	{
		
		include_once('app/views/'.$address.'.php');
		
	}
	
}



foreach(glob("app/controllers/*.php") as $filename)
{
    include $filename;
}







require_once('system/Route.php');
require_once('app/routes.php');





