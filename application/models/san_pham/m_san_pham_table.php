
<?php
	class M_san_pham_table extends CI_Model
	{
		public function ds_san_pham()
		{
			//cau lenh truy van sql
			$sql = 'select * from tbsanpham limit 10';
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
		
	}
?>