
<?php
	class M_san_pham_table extends CI_Model
	{
		public function ds_san_pham()
		{
			//cau lenh truy van sql
			$sql = 'select * from tbsanpham';
			//su dung $data de luu cac gia tri truy xuat tu database
			$data = $this->db->query($sql);
			if($data->num_rows()>0)
			{
				return $data->result_array();
			}
			return false;
		}
		public function ds_san_pham_hot()
		{
			//cau lenh truy van sql
			$sql = 'select * from tbsanpham where seo = 1';
			//su dung $data de luu cac gia tri truy xuat tu database
			$data = $this->db->query($sql);
			if($data->num_rows()>0)
			{
				return $data->result_array();
			}
			return false;
		}
		public function tim_san_pham($ten)
		{
			$tukhoa = array('tensp' => $ten);
			$this->db->select('*')->from('tbsanpham')->like($tukhoa);
			$query= $this->db->get();
			if($query->num_rows()>0)
				return $query->result_array();
			return $query->num_rows();

		}
		public function chi_tiet_sp($id)
		{
			//truy vấn sql
			$this->db->select('*')->from('tbsanpham')->where('id_sanpham',$id);
			//thuc hien cau lenh truy van
			$query= $this->db->get();
			//kiem tra có tồn tại id đó trong mảng?true->return mảng;false->return flase 
			if($query->num_rows()>0)
				return $query->result_array();
			return false;

		}
		public function sap_xep_gia_tang()
		{
			//cau lenh truy van sql
			$sql = 'select * from tbsanpham order by gia asc';
			//su dung $data de luu cac gia tri truy xuat tu database
			$data = $this->db->query($sql);
			if($data->num_rows()>0)
			{
				return $data->result_array();
			}
			return false;
		}
		public function sap_xep_gia_giam()
		{
			//cau lenh truy van sql
			$sql = 'select * from tbsanpham order by gia desc';
			//su dung $data de luu cac gia tri truy xuat tu database
			$data = $this->db->query($sql);
			if($data->num_rows()>0)
			{
				return $data->result_array();
			}
			return false;
		}
		public function bo_loc_hang($id)
		{
			//truy vấn sql
			$this->db->select('*')->from('tbsanpham')->join('tbhangdt','tbhangdt.id_hangdt=tbsanpham.id_hangdt');
			//thuc hien cau lenh truy van
			$query= $this->db->get();
			//kiem tra có tồn tại id đó trong mảng?true->return mảng;false->return flase 
			if($query->num_rows()>0)
				return $query->result_array();
			return false;

		}
		public function bo_loc_nhom($id)
		{

			//truy vấn sql
			$this->db->select('*')->from('tbsanpham')->join('tbnhomsanpham','tbnhomsanpham.id_nhom=tbsanpham.id_nhom');
			//thuc hien cau lenh truy van
			$query= $this->db->get();
			//kiem tra có tồn tại id đó trong mảng?true->return mảng;false->return flase 
			if($query->num_rows()>0)
				return $query->result_array();
			return false;
		}
		public function bo_loc_gia_min_max($min,$max)
		{
			$gia= array('gia >=' =>$tensp, 'gia <='=>$trangthai);
			//truy vấn sql
			$this->db->select('*')->from('tbsanpham')->where($gia);
			//thuc hien cau lenh truy van
			$query= $this->db->get();
			//kiem tra có tồn tại gia đó trong mảng?true->return mảng;false->return flase 
			if($query->num_rows()>0)
				return $query->result_array();
			return false;
		}
		
	}
?>