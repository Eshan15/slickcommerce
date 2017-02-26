<?php

class profile extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('url', 'html'));
        $this->load->library('session');
        $this->load->database();
        $this->load->model('user_model');
		$this->load->model('user_createsites');
    }

    function index() {
		$data=$this->user_model->user_informations();
        $this->load->view('header');
        $this->load->view('profile_view', $data);
        $this->load->view('footer');
    }
	function users() {   
		$data=$this->user_model->user_informations();
		$user_id=$this->session->userdata('uid');
		$showresult = $this->user_createsites->show_sites($user_id);
        $this->load->view('users/header');
		$this->load->view('users/sidebar_menu');
        $this->load->view('users/dashboard', array('data'=>$data, 'show_site'=>$showresult));
        $this->load->view('users/footer');
    }

}
