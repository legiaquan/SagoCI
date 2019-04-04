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
			
			//$id=$this->input->get('id');
			if(!isset($_GET['id']))
				$this->load->view('site/home/not_found');
			else{
				$id=$this->input->get('id');
			
			$dssp=$this->m_san_pham_table->chi_tiet_sp($id);
				if($dssp!=false){
					//var_dump($dssp);
					$data['dssp']=$dssp;
					$data['path']=array('site/home/v_search');
					$this->load->view('site/home/v_product',$data);
				}
				else
					$this->load->view('site/home/not_found');
			}
		}
		public function bo_loc_hang()
		{
			
			$id=$this->input->get('id');
			
			$dssp=$this->m_san_pham_table->bo_loc_hang($id);

			//var_dump($dssp);
			$data['dssp']=$dssp;
			$this->load->view('site/home/v_search',$data);
		}
		public function loc_gia_max_min()
		{
			$gia_max=50000000;
			$gia_min=0;
			if($_GET['giamax']!='')
				$gia_max=$this->input->get('giamax');
			if($_GET['giamin']!='')
				$gia_min=$this->input->get('giamin');
			

			$dssp=$this->m_san_pham_table->bo_loc_gia_min_max($gia_min,$gia_max);
			
			if($dssp!=false){
				//var_dump($dssp);
				$data['ds']=$dssp;
				$this->load->view('site/home/v_store',$data);
			}
			else
				$this->load->view('site/home/not_found');
		}
	}
?>