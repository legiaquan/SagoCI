<?php
	class Home extends CI_Controller
	{
		function __construct()
        {
            parent::__construct();
            $this->load->model('san_pham/m_san_pham_table');
        }

	
		function index()
		{
			
			$dssp = $this->m_san_pham_table->ds_san_pham();
			$data['ds']=$dssp;
			$this->load->view('site/home/index',$data);
		}

	}
?>