<?php


class Route
{
	
	static function middleware($middleware)
	{
		
		$Mid  = new $middleware();
		
		
	}
	
	
	static function all($requested, $reqclass, $reqmethod = 'index')
	{
		global $projectFolder;
		//$requestedq = strtok($_SERVER['REQUEST_URI'] , '?');
		////echo $_SERVER['REQUEST_URI'];exit;
		if(strpos( $_SERVER['REQUEST_URI'], "?"))
		{
			$Requests = explode('?', $_SERVER['REQUEST_URI']);;
			$requestedq  = $Requests[0];
			
			$_GET = [];
			if(strpos($Requests[1], '&'))
			{
				$Vars = explode('&',$Requests[1]);
				foreach($Vars as $req)
				{
					$det = explode('=', $req);
					if($det && count($det) == 2)
					{
						$det[0] = str_replace('&', '', $det[0]);
						$det[1] = str_replace('&', '', $det[1]);
						$_GET[$det[0]] = $det[1];
					}
					
				}
				
			} else {
				///echo var_dump($Requests);Exit;
				$det = explode('=', $Requests[1]);
				$det[0] = str_replace('&', '', $det[0]);
				$det[1] = str_replace('&', '', $det[1]);
				$_GET[$det[0]] = $det[1];
			}
			

			///echo var_dump($_GET);exit;
			
			
		} else {
			$requestedq = $_SERVER['REQUEST_URI'];
		}
		
		//echo var_dump($requestedq) ;exit;
		$requestedq = str_replace('/'.$projectFolder, '' , str_replace('index.php', '', $requestedq ));
		//echo var_dump($requested);exit;
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