
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
		
		
	}
?>