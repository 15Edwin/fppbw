<?php
class User_Model extends CI_Model {

	function getData($email) {
		$this->db->select('*');
		$this->db->where('email', $email);
		$this->db->from('userdata');
		$query = $this->db->get();
		return $query->result_array();
	}

	function getHistory() {
		$email = $this->session->userdata('email');

		$this->db->select('*');
		$this->db->where('email', $email);
		$this->db->from('order_masuk');
		$query = $this->db->get();
		return $query->result_array();
	}

	function getTransaction(){

	}

	function addUserdata($data) {
		$this->db->insert('userdata', $data);
		//insert $data ke tabel userdata
	}

	function addOrder($data) {
		$this->db->insert('order_masuk', $data);
		//insert $data ke tabel order
	}
	
	function login_authen($email, $password){
		$this->db->select('*');
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$this->db->from('userdata');
		$query = $this->db->get();
		
		if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
	}
	
	function authen_user($email) {
		$this->db->select('authentication');
		$this->db->where('email', $email);
		$this->db->from('userdata');
		$query = $this->db->get();
		return $query->result_array();
	}
	
	function wrong_password($email, $value){
		$this->db->set('authentication', $value);
		$this->db->where('email', $email);
		$this->db->update('userdata');
	}

}
?>