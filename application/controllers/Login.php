<?php

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'html'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->database();
        $this->load->model('user_model');
    }

    public function index() {
        // get form input
        $email = $this->input->post("email");
        $password = $this->input->post("password");

        // form validation
        $this->form_validation->set_rules("email", "Email-ID", "trim|required");
        $this->form_validation->set_rules("password", "Password", "trim|required");

        if ($this->form_validation->run() == FALSE) {
            // validation fail
            $this->load->view('header');
            $this->load->view('login_view');
            $this->load->view('footer');
        } else {
            // check for user credentials

            $uresult = $this->user_model->get_user($email, $password);
            if (count($uresult) > 0) {
				if($uresult[0]->account_auth==1){
					// set session
					$sess_data = array('login' => TRUE, 'uname' => $uresult[0]->first_name, 'uid' => $uresult[0]->user_id);
					$this->session->set_userdata($sess_data);
					redirect("profile/index");
				}else{
					// set session
					$sess_data = array('login' => TRUE, 'uname' => $uresult[0]->first_name, 'uid' => $uresult[0]->user_id);
					$this->session->set_userdata($sess_data);
					redirect("profile/users");
				}
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Wrong Email-ID or Password!</div>');
                redirect('login/index');
            }
        }
    }

}
