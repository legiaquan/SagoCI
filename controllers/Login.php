<?php
ob_start();
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
				echo '<script>alert("Sai mật khẩu hoặc tài khoản không tồn tại!");window.history.go(-1);</script>';
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
		function signin()
		{

			$user_name=$_POST['u'];
			$password=md5($_POST['p']);
			$hoten=$_POST['hoten'];
			$diachi=$_POST['diachi'];
			$email=$_POST['email'];
			$sdt=$_POST['sdt'];
			$check_user=$this->m_user_table->check_user($user_name);
			//kiem tra da ton tai user trong db chưa
			if($check_user=='tontai')
			{
				//bao loi ton tai
				echo '<script>alert("Tài khoản đã tồn tại");window.history.go(-1);</script>';
			}
			else{
				//dang ky thanh cong
				$this->m_user_table->signin($user_name,$password,$hoten,$diachi,$email,$sdt);
				$this->load->view('site/home/v_login');
				echo "<script>alert('Đăng ký thành công!');</script>";
			}
		}
		
	}
?>