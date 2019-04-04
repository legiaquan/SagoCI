
<?php
	class M_san_pham_table extends CI_Model
	{
		public function ds_san_pham()
		{
			//function hien thi danh sach tất san pham
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
			//function hien thi danh sach san pham ban chay
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
			//function tim kiem san pham
			$tukhoa = array('tensp' => $ten);
			$this->db->select('*')->from('tbsanpham')->like($tukhoa);
			$query= $this->db->get();
			if($query->num_rows()>0)
				return $query->result_array();
			return $query->num_rows();

		}
		public function chi_tiet_sp($id)
		{
			//function xem chi tiet san pham
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
			//function sap xep gia tang dan
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
			//function sap xep gia giam dan
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
			//function loc san pham theo hang dien thoai
			//truy vấn sql
			
			$this->db->select('*')->from('tbsanpham')->join('tbhangdt','tbhangdt.id_hangdt=tbsanpham.id_hangdt')->where('tbhangdt.id_hangdt',$id);
			//thuc hien cau lenh truy van
			$query= $this->db->get();
			//kiem tra có tồn tại id đó trong mảng?true->return mảng;false->return flase 
			if($query->num_rows()>0)
				return $query->result_array();
			return false;

		}
		public function bo_loc_nhom($id)
		{
			//function loc san pham theo nhom
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
			$gia= array('gia >=' => $min, 'gia <='=> $max);
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