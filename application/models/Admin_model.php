<?php
class Admin_model extends CI_Model {

	function getData() {
		$query = $this->db->get('userdata');
		return $query->result_array();
		// referensi query result:
		// https://www.codeigniter.com/userguide3/database/results.html
	}

	function getDataHistory() {
		$query = $this->db->get('order_masuk');
		return $query->result_array();
		// referensi query result:
		// https://www.codeigniter.com/userguide3/database/results.html
	}
/*
	function getFile($id){
		$this->db->select('*');
		$this->db->where('id', $id);
		$this->db->from('order_masuk');
		$query = $this->db->get();
		return $query->result_array();
	}
*/
	//Untuk Login
	function getDataAdmin($username) {
		$this->db->select('*');
		$this->db->where('username', $username);
		$this->db->from('admin');
		$query = $this->db->get();
		return $query->result_array();
	}

	function getDataAdmin2() {
		$query = $this->db->get('admin');
		return $query->result_array();
		// referensi query result:
		// https://www.codeigniter.com/userguide3/database/results.html
	}

	function login_authenAdmin($username, $pass){
		$this->db->select('*');
		$this->db->where('username', $username);
		$this->db->where('pass', $pass);
		$this->db->from('admin');
		$query = $this->db->get();
		
		if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
	}

	function authen_admin($username) {
		$this->db->select('authentication');
		$this->db->where('username', $username);
		$this->db->from('admin');
		$query = $this->db->get();
		return $query->result_array();
	}

	function wrong_passwordAdmin($username, $value){
		$this->db->set('authentication', $value);
		$this->db->where('username', $username);
		$this->db->update('admin');
	}

	function hapus($data){
		$this->db->where('id', $data);
		$this->db->delete('order_masuk');
	}

	function hapusAdmin($data){
		$this->db->where('username', $data);
		$this->db->delete('admin');
	}

	function addAdmindata($data) {
		$this->db->insert('admin', $data);
		//insert $data ke tabel admin
	}

	function getItem($data) {
		return $this->db->select('*')->from('order_masuk')->where('id', $data)->get()->result_array();
	}

	function getUser($data) {
		return $this->db->select('*')->from('userdata')->where('email', $data)->get()->result_array();
	}

	function Update($data, $baru){
		$this->db->where('id', $baru);
		$this->db->update('order_masuk', $data);
	}

	function updateUser($data, $baru){
		$this->db->where('email', $baru);
		$this->db->update('userdata', $data);
	}
}
?>