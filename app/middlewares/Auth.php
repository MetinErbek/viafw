<?php


class Auth
{
	
	function __construct()
	{
		
		if($_SESSION['isLogin'])
		{
			return TRUE;
		} else {
			return FALSE;
		}
		
	}
	
	
}