<?php
	class Home extends CI_Controller
	{
		function __construct()
        {
            parent::__construct();
            $this->load->model('san_pham/m_san_pham_table');
            /*
            if(!isset($_SESSION['userdangnhap'])){
				redirect('login');
			}
			*/

        }

	
		function index()
		{
			
			$dssp_hot = $this->m_san_pham_table->ds_san_pham_hot();
			$dssp = $this->m_san_pham_table->ds_san_pham();
			
			$data['ds']=$dssp;
			$data['dshot']=$dssp_hot;
			$this->load->view('site/home/index',$data);
			
		}

	}
?>