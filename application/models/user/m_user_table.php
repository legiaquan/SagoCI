
<?php
	class M_user_table extends CI_Model
	{
		public function login($user_name,$password)
		{
			$login = array('id_user' => $user_name,'pass'=> $password );
			//cau lenh truy van sql
			$this->db->select('*')->from('tbthanhvien')->where($login);
			//su dung $data de luu cac gia tri truy xuat tu database
			$query= $this->db->get();
			if($query->num_rows()>0)
			{
				
				return $query->result_array();
			}
			return false;
		}
		public function signin($user_name,$password,$hoten,$diachi,$email,$sdt)
		{
			$hieuluc=date('Y-m-d');
			$dangky = array('id_user' => $user_name,'pass'=> $password ,'hoten'=>$hoten, 'diachi'=>$diachi,'email'=>$email,'sdt'=>$sdt,'hieuluc'=>$hieuluc);
			//cau lenh truy van sql tuong duong insert into tbthanhvien(id_user,pass,hoten, diachi,email,sdt,hieuluc) values( '$user_name','$password' ,'$hoten', '$diachi','$email','$sdt','$hieuluc')
			$this->db->insert('tbthanhvien',$dangky);
		}
		
		
	}
?>