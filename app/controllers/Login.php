<?php



class Login extends Via
{
	Public $data;
	public function __construct()
	{
		parent::__construct();

		$this->data = [];
	}
	

	public function index()
	{
		
		if($_POST)
		{
			if(($this->input->post('username')) && ($this->input->post('password')))
			{
				////var_dump($this->db);exit;
				$UserRS = $this->db->where('username', $this->input->post('username'))->where('password', $this->input->post('password'))->get('users');
				
				
				if(isset($UserRS) && count($UserRS) > 0)
				{
					$User = $UserRS[0];
					///var_dump($User);exit;
					$User['isLogin'] = TRUE;
					$_SESSION['isLogin'] = TRUE;
					//$_SESSION = array_merge($_SESSION, $User);
					///var_dump($_SESSION);exit;
					///echo var_dump($_SESSION);;
					Redirect(site_url('index'));
					return;
				} else {
					$this->data['form_error'] = 'Email or Password Wrong !';
				}
				
			} else {
				$this->data['form_error'] = 'Email or Password Cant be Empty !';
			}
			
		}
		
		$this->view('login', $this->data);
		
		
	}
	
	function logout()
	{
		session_unset();
		session_destroy();
		return Redirect($_SERVER['HTTP_REFERER']);
		
	}

	
}

