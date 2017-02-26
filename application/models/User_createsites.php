<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_createsites extends CI_Model {

    function __construct() {
        parent::__construct();
    }    

    // insert
    function insert_sites($save_sites) {
        return $this->db->insert('user_sites', $save_sites);
    }

	function show_sites($user_id){
		$query=$this->db->query("select * from user_sites where register_userid='$user_id'");
		return $query->result();
	}
	function save_template($save_temp){
		return $this->db->insert(' template_selection', $save_temp);
	}
}

?>