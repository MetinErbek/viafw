<?php


class Route
{

	static function all($requested, $reqclass, $reqmethod = 'index')
	{
		global $projectFolder;
		
		$requestedq = str_replace('/'.$projectFolder, '' , str_replace('index.php', '', $_SERVER['REQUEST_URI']));

		if($requestedq  == $requested || $requestedq  == '/'.$requested )
		{
			
			$Obj = new $reqclass();
			$Obj->$reqmethod();
			
		}
		
	}	
	
	static function get()
	{
		
		
	}	
	static function post()
	{
		
		
	}
	
	
}