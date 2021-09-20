<?php



require_once ('Urls.php');
foreach(glob("app/helpers/*.php") as $filename)
{
    include $filename;
}
foreach(glob("app/models/*.php") as $filename)
{
    include $filename;
}

class Input
{
	public function post($special = NULL)
	{
		if(isset($special) && !empty($special))
		{
			
			return isset($_POST[$special]) ? $_POST[$special]:FALSE;
		} else {
			return isset($_POST) ? $_POST:[];
		}
		
		
	}		
	public function get($special = NULL)
	{
		if(isset($special) && !empty($special))
		{
			
			return isset($_GET[$special]) ? $_GET[$special]:FALSE;
		} else {
			return isset($_GET) ? $_POST:[];
		}
		
		
	}	

	
	
}


class Via
{
	protected $db;
	Public $input;
	public function __construct()
	{
		global $db;
		
		$this->input = new Input();
		$this->db = $db; 
		
	}
	
	
	public function view($address, $vars = NULL)
	{
		if(isset($vars)){extract($vars);}
		include_once('app/views/'.$address.'.php');
		
	}
	
	public function model($model)
	{
		
		$MD = new $model();
		return $MD;	
		
		
		
		
	}
	
}





foreach(glob("app/controllers/*.php") as $filename)
{
    include $filename;
}

foreach(glob("app/middlewares/*.php") as $filename)
{
    include $filename;
}

if(!function_exists('make_page_url'))
{
    function make_page_url($get_data, $field, $new_number)
    {
        $url = '?';
        foreach($get_data as $key => $value)
        {
            if($key != $field)
            {
                if(!is_array($value))
                {
                    $url .= $key . '=' . $value . '&';
                } else {
                    foreach($value as $val){$url .= $key . '[]=' . $val . '&';}
                }
            }
        }
        return $url.'&'.$field.'='.$new_number;
    }
}

require_once('system/Route.php');
require_once('app/routes.php');





