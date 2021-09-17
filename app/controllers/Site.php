<?php


class Site extends Via
{
	Public $data;
	public function __construct()
	{
		parent::__construct();
		$this->data = [];
	}
	
	public function index()
	{
		
		$this->view('admin', $this->data);
		
		
	}	
	
	public function login()
	{
		
		$this->view('login', $this->data);
		
		
	}
	
}