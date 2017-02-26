<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_user($email, $pwd) {    
        $pwd_md5= md5($pwd);
        $this->db->where('email', $email);
        $this->db->where('password', $pwd_md5);
        $query = $this->db->get('register');
        return $query->result();
    }

    // get user
    function get_user_by_id($id) {
        $this->db->where('user_id', $id);
        $query = $this->db->get('register');
        return $query->result();
    }

    // insert
    function insert_user($data) {
        return $this->db->insert('register', $data);
    }
	
	function user_informations(){
		$user_id=$this->session->userdata('uid');
		$this->db->where('user_id', $user_id);
        $query = $this->db->get('register');
        return $query->result();
	}

}

?>