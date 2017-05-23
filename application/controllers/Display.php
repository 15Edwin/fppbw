<?php
class Display extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('email');
	}

	function index() {
		$this->load->view('index');
		$data['err_message'] = "";
	}

	function login(){
		$this->load->view('user/login');
		$data['err_message'] = "";
	}

	function register(){
		$this->load->view('user/register');
		$data['err_message'] = "";
	}
	
/*	

	function dashboard1(){
		$this->load->view('user/dashboard1');
		$data['err_message'] = "";
	}

	function print(){
		$this->load->view('user/print');
		$data['err_message'] = "";
	}

	function history(){
		$this->load->view('user/history', array('data' => $data));
		$data['err_message'] = "";
	}

	function datauser(){
		$this->load->view('admin/datauser');
		$data['err_message'] = "";
	}

	function historyadmin(){
		$this->load->view('admin/historyadmin', array('data'=>$data));
		$data['err_message']="";
	}

	function logout(){
		$this->session->sess_destroy();
		redirect();
	}

	function dashboardadmin(){
		$this->load->view('admin/dashboardadmin');
		$data['err_message'] = "";
	}
*/
	function loginadmin(){
		$this->load->view('admin/loginadmin');
		$data['err_message'] = "";
	}

}
?>