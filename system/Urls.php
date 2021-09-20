<?php



function site_url($url = NULL)
{
	
	
	return $url;
}



function assets($url)
{
	
	
	return 'public/'.$url;;
	
}

function Redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}