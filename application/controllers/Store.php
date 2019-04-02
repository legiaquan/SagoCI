<?php
	class Store extends CI_Controller
	{
		public function __construct()
        {
            parent::__construct();
            $this->load->model('san_pham/m_san_pham_table');
        }

		
		public function index()
		{
			
			$dssp = $this->m_san_pham_table->ds_san_pham();
			$data['ds']=$dssp;
			$this->load->view('site/home/v_store',$data);
		}
		public function tim_san_pham()
		{
			if($this->input->get('btnSearch')!='')
			{
				$data_Search = $this->input->get(null);
				$ten= $data_Search['ts'];
			}
			else{
				$ten = '';
			}
			
			$dssp=$this->m_san_pham_table->tim_san_pham($ten);

			//var_dump($dssp);
			$data['dssp']=$dssp;
			$data['path']=array('site/home/v_search');
			$this->load->view('site/home/v_search',$data);
		}
		public function chi_tiet_sp()
		{
			
			$id=$this->input->get('id');
			
			$dssp=$this->m_san_pham_table->chi_tiet_sp($id);

			//var_dump($dssp);
			$data['dssp']=$dssp;
			$data['path']=array('site/home/v_search');
			$this->load->view('site/home/v_product',$data);
		}
		public function bo_loc_hang()
		{
			
			$id=$this->input->get('id');
			
			$dssp=$this->m_san_pham_table->bo_loc_hang($id);

			//var_dump($dssp);
			$data['dssp']=$dssp;
			$this->load->view('site/home/v_search',$data);
		}
	}
?>