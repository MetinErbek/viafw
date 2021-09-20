<?php


class Site extends Via
{
	Public $data;
	public function __construct()
	{
		parent::__construct();

		if(!isset($_SESSION['isLogin']))
		{
			Redirect(site_url('login'));
		}
		$this->data = [];
	}
	
	public function index()
	{
		$per_page = 12;
		//var_dump($_GET);exit;
		if(isset($_GET['req_page']))
		{
			//echo $_GET['req_page'];exit;
			$req_page = $_GET['req_page'];
			
		} else {
			$req_page = 1;
		}
		$this->db->withTotalCount();
		 
		///echo json_encode($_GET);exit;
        $page_filter = NULL;
        if(isset($per_page) && isset($req_page))
        {
            $page_filter = array(($req_page-1)*$per_page, $per_page);
        }
		$this->db->orderBy('images.images_id', 'DESC');
		$this->data['Photos'] =$this->db->get('images', $page_filter, 'images.*');
		$this->data['Total_Photo'] = $this->db->totalCount;
		//echo round($this->data['Total_Photo']/$per_page);;exit;
		$this->data['Total_Page'] = round($this->data['Total_Photo']/$per_page);
		$this->data['req_page'] = $req_page;
		$this->data['per_page'] = $per_page;
		/*
		        if(isset($withTotal))
        {
            $crmDB->withTotalCount();
        }

        
        if(!isset($withTotal))
        {

                return $crmDB->get('cms_campaign');

        } else {
            return array('campaigns'=>$crmDB->get('cms_campaign', $page_filter, 'cms_campaign.*'), 'total'=>$crmDB->totalCount, 'Sorgu'=>$crmDB->getLastQuery());
        }
		
		
		*/
		
		
		
		
		$this->view('admin', $this->data);
		
		
	}	
	public function deleteImg()
	{
		
		
		$ImageRS = $this->db->where('images_id',$_GET['img'])->get('images');
		if(count($ImageRS) > 0)
		{
			$Image = $ImageRS[0];
			
			unlink('../'.$Image['image']);
			if(isset($_GET['img']) && is_numeric($_GET['img']))
			{
				$this->db->where('images_id', $_GET['img'])->delete('images');
			}
			
			
		}

		
		return Redirect($_SERVER['HTTP_REFERER']);
	}

	
}