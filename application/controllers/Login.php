<?php
	class Login extends CI_Controller
	{
		function __construct()
        {
            parent::__construct();
            $this->load->model('user/m_user_table');
        }
		function index()
		{
			//kiem tra user da dang nhap chua. True->tra ve trang chu
			if(isset($_SESSION['userdangnhap']))
				redirect(base_url());
			$this->load->view('site/home/v_login');
		}
		function check_login()
		{
			
			/* //test data form login
			$data_Login = $this->input->post(null);
			var_dump($data_Login);
			*/
			$id_user=$this->input->post('u');
			$pass=md5($this->input->post('p'));
			//echo 'tai khoan la: '.$id_user.'pass là: '.$pass;
			$user =$this->m_user_table->login($id_user,$pass);
			//var_dump($user);
			if($user!=null){
			$_SESSION['userdangnhap'] = $user[0];
			redirect(base_url());
			}
			else
			{
				echo '<script>alert("Sai mật khẩu hoặc tài khoản không tồn ại!");window.history.go(-1);</script>';
			}
			//var_dump($_SESSION['userdangnhap']);
			//dua ve trang chu
			//redirect(base_url());
			
		}
		function user_logout()
		{
			//hủy session user
			unset($_SESSION['userdangnhap']);
			//dua ve trang chu
			redirect(base_url());
		}
		function signup()
		{
			//insert
		}
	}
?>
