<?php

class users extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'html'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->database();
        $this->load->model('user_model');
		$this->load->model('user_createsites');
    }
	
	function index(){
		//$this->load->model('user_model');
		$data=$this->user_model->user_informations();
		$user_id=$this->session->userdata('uid');
		$showresult = $this->user_createsites->show_sites($user_id);
        $this->load->view('users/header');
        $this->load->view('users/profile_view', array('data'=>$data, 'show_site'=>$showresult));
        $this->load->view('users/footer');
	}

    function create_site_name() {
		
        // get form input
        $site_name = $this->input->post("site_name");
		
        // form validation
        $this->form_validation->set_rules("site_name", "Site Name", "trim|required");        

        if ($this->form_validation->run() == FALSE) {
            // validation fail
            redirect ('users/index');
        } else {
            // check for user credentials
			$splitter = " ";
			$pieces = explode($splitter, $site_name);
			$site_slug= strtolower($pieces[0]);	
			$user_id=$this->session->userdata('uid');
			$save_sites=array(
				'user_site_name' => $site_name,
				'user_site_slug' => $site_slug,
				'register_userid'=> $user_id
				
			);
            $uresult = $this->user_createsites->insert_sites($save_sites);
			if($uresult){			
				$this->session->set_flashdata('msg', 'Site Name Insert Successfully');
				redirect('users/index');
			}
		}
    }

	function add_template($temp_id){
		$user_id=$this->session->userdata('uid');
		$save_data=array(
			'temp_name' => 'blank',
			'temp_select_id' => '1',
			'register_userid' => $user_id
		);
		$re=$this->user_createsites->save_template($save_data);		
		if($re){
			redirect('blank_template/index');
		}
	}

}
