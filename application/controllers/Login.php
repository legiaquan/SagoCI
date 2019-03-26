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

			$this->load->view('site/home/v_login');
		}
	}
?>