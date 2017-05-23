<?php
class User extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('User_Model');
		$this->load->library('upload');
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	function session() {
		if ($this->session->userdata('status') != 'siap') {
			redirect('display');
		}
	}

	function login() {
		$email = $this->input->post('email');
		$password = $this->input->post('pass');
		$isLogin = $this->User_Model->login_authen($email, $password);
		$read = $this->User_Model->getData($email);
		foreach ($read as $r) {
			$nama = $r['nama'];
		}

		$i = $this->User_Model->authen_user($email);

		if ($isLogin == true && $i[0]['authentication'] < 5) {
			$this->session->set_userdata('email', $email);
			$this->session->set_userdata('nama', $nama);
			$this->session->set_userdata('status', 'siap');
			$this->load->view('user/dashboard1');
		} else {
			if ($i[0]['authentication'] < 5) {
				$update = $this->User_Model->wrong_password($email, $i[0]['authentication']+1);
				$data['err_message'] = "" . ($i[0]['authentication']+1);
				$this->load->view('user/login', $data);
			} else {
				$data['err_message'] = "AKUN ANDA TERBLOCK";
				$this->load->view('user/login', $data);
				$this->session->sess_destroy();
			}
		}
	}

	function register() {
		$pass = $this->input->post('password');
		$pass2 = $this->input->post('password2');

		if ($pass != $pass2) {
			$data['err_message'] = "Password tidak cocok!";
			$this->load->view(user/register);
		} else {

		$data = array(
			'nama' => $this->input->post('nama'),
			'nohandphone' => $this->input->post('nohandphone'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password')
		);
		
		$this->User_Model->addUserdata($data);
		$this->load->view('user/registersuccess');
		}
	}

	function readData() {
		$this->session();
		$data = $this->User_Model->getHistory();
		$this->load->view('user/history', array('data' => $data));
	}

	function showDashboard1(){
		$this->load->view('user/dashboard1');
		$data['err_message'] = "";
	}

	function showPrint(){
		$this->load->view('user/print');
		$data['err_message'] = "";
	}

	function showHistory(){
		$this->load->view('user/history', array('data' => $data));
		$data['err_message'] = "";
	}

	function logout(){
		$this->session->sess_destroy();
		redirect();
	}

	public function cetak(){
		$is_submit = $this->input->post('is_submit');
		
		if(isset($is_submit) && $is_submit == 1){
			$fileUpload = array();
		 	$isUpload = FALSE;
		 	$config = array(
		 		'upload_path' => './uploads/',
		 		'allowed_types' => 'doc|docx|pdf',
		 		'max_size' => 15000
		 	);

			$this->upload->initialize($config);
		
			if($this->upload->do_upload('userfile')){
				$fileUpload = $this->upload->data();
			 	$isUpload = TRUE;
			}

			if($isUpload){
			 	$data =array(
			 		'tgl_order' => date('j F Y'),
					'email' => $this->session->userdata('email'),
					'ukuran_krts' => $this->input->post('ukuran_krts'),
					'warna' => $this->input->post('warna'),
					'jumlah_copy' => $this->input->post('jumlah_copy'),
					'tgl_ambil' => $this->input->post('tgl_ambil'),
					'waktu' => $this->input->post('waktu'),
					'pesan' => $this->input->post('pesan'),
					'file' => $fileUpload['file_name'],
					'status'=> 'Proses'
			 	);

				$this->User_Model->addOrder($data);
			 	redirect('user/showDashboard1');
			}
		} else {
		 	$this->load->view('user/print');
		}
	}
}
?>