<?php

class home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('url', 'html'));
        $this->load->library('session');
    }

    function index() {
        $this->load->view('header');
        $this->load->view('home_view');
        $this->load->view('footer');
    }

    function logout() {
        // destroy session
        $data = array('login' => '', 'uname' => '', 'uid' => '');
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
        redirect(base_url());
    }

}
