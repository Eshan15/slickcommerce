<?php

class blank_template extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url','login'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->database();
        $this->load->model('blank_model');
		$this->load->model('user_createsites');
		is_logged_in();
    }

    function index() {
		$model=$this->blank_model->show_pages();
		$data= array(
			'model' => $model,
		);
		$this->load->view('blank_templates/admin/header'); 
		$this->load->view('blank_templates/admin/sidebar_menu');
		$this->load->view('blank_templates/admin/home_view',$data);
		$this->load->view('blank_templates/admin/footer');		
    }
	
	function add_page() {		
		$this->load->view('blank_templates/admin/header'); 
		$this->load->view('blank_templates/admin/sidebar_menu');
		$this->load->view('blank_templates/admin/add_pages');
		$this->load->view('blank_templates/admin/footer');		
    }
	
	function save_page(){
		$page_name=$_POST['page_name'];
		$page_sec1=$_POST['page_sec1'];
		$page_sec2=$_POST['page_sec2'];
		$page_sec3=$_POST['page_sec3'];
		$page_sec4=$_POST['page_sec4'];
		$save=array(
			'blank_pages' => $page_name,
			'section1' => $page_sec1,
			'section2' => $page_sec2,
			'section3' => $page_sec3,
			'section4' => $page_sec4
		);
		$save_pages=$this->blank_model->saved_data($save);
		if($save_pages){
			redirect('blank_template/index');
		}
	}
	
	function edit_page($id){
		$get_data=$this->blank_model->edit_pages($id);
		$get_details=array(
			'get_data1'=>$get_data,
		);
		$this->load->view('blank_templates/admin/header'); 
		$this->load->view('blank_templates/admin/sidebar_menu');
		$this->load->view('blank_templates/admin/edit_pages',$get_details);
		$this->load->view('blank_templates/admin/footer');
	}
	
	function update_page($id){		
		$update_pages=$this->blank_model->updated_data($id);
		if($update_pages){
			redirect('blank_template/index');
		}		
	}
	
	function del_page($id){
		$del_page=$this->blank_model->delete_page($id);
		if($del_page){
			redirect('blank_template/index');
		}
	}

	function header_footer(){
		$headerfooter=$this->blank_model->get_details_header();
		$header=array(
			'details_header' => $headerfooter
		);
		$this->load->view('blank_templates/admin/header'); 
		$this->load->view('blank_templates/admin/sidebar_menu');
		$this->load->view('blank_templates/admin/header_footer',$header);
		$this->load->view('blank_templates/admin/footer');	
	}

	function update_header($id){		
		$return =$this->blank_model->update_footer($id);
		if($return){
			redirect('blank_template/index');
		}
	}

	//slider
	function get_slider(){
		$get_slider=$this->blank_model->show_slider();
		$data1= array(
			'slider' => $get_slider,
		);
		$this->load->view('blank_templates/admin/header');
		$this->load->view('blank_templates/admin/sidebar_menu');		
		$this->load->view('blank_templates/admin/slider', $data1);
		$this->load->view('blank_templates/admin/footer');
	}	

	function add_slider(){
		$this->load->view('blank_templates/admin/header'); 
		$this->load->view('blank_templates/admin/sidebar_menu');
		$this->load->view('blank_templates/admin/add_slider');
		$this->load->view('blank_templates/admin/footer');
	}

	function save_slider(){
		// form validation        
        $this->form_validation->set_rules("slider_order", "Set Slider Order", "trim|required");
        if ($this->form_validation->run() == FALSE) {
            // validation fail
            $this->load->view('blank_templates/admin/header');
			$this->load->view('blank_templates/admin/sidebar_menu');			
			$this->load->view('blank_templates/admin/add_slider');
			$this->load->view('blank_templates/admin/footer');
        } else {
        	$save_images=$this->blank_model->insert_slider();
        	if($save_images){
        		redirect('blank_template/get_slider');
        	}
        }
	}

	function edit_slider($id){
		$edit_slider=$this->blank_model->edit_byid($id);
		$get_slide_detail= array(
			'slider_detailEdit' => $edit_slider,
		);
		$this->load->view('blank_templates/admin/header');
		$this->load->view('blank_templates/admin/sidebar_menu');		
		$this->load->view('blank_templates/admin/edit_slider', $get_slide_detail);
		$this->load->view('blank_templates/admin/footer');
	}

	function update_slider($slider_id){
		$save_images=$this->blank_model->update_slider($slider_id);
    	if($save_images){
    		redirect('blank_template/get_slider');
    	}
	}

	function del_slider($id){
		$del_slider=$this->blank_model->delete_slider($id);
		if($del_slider){
    		redirect('blank_template/get_slider');
    	}
	}

	// slider
	
	//Show Theme
	function show_theme(){
		$data=$this->blank_model->user_informations();
		$user_id=$this->session->userdata('uid');
		$showresult = $this->user_createsites->show_sites($user_id);
        $this->load->view('users/header');
		$this->load->view('blank_templates/admin/sidebar_menu');
        $this->load->view('users/profile_view', array('data'=>$data, 'show_site'=>$showresult));
        $this->load->view('users/footer');
	}	
	//End Show Theme
	
	
	// shop
	function shop(){
		$get_data=$this->blank_model->get_detailof_shop();
		$show_data=array(
			'show_detail_shop'=>$get_data,
		);
		$this->load->view('blank_templates/admin/header'); 
		$this->load->view('blank_templates/admin/sidebar_menu');		
		$this->load->view('blank_templates/admin/shop/shop', $show_data);
		$this->load->view('blank_templates/admin/footer');
	}
	
	function add_shop(){
		$ret=$this->blank_model->save_shop();
		return $ret;
	}
	function show_products(){
		$get_prd=$this->blank_model->product_view();
		$detail_prd=array(
			'show_prd' => $get_prd,
		);
		$this->load->view('blank_templates/admin/header'); 
		$this->load->view('blank_templates/admin/sidebar_menu');				
		$this->load->view('blank_templates/admin/shop/view_product', $detail_prd);
		$this->load->view('blank_templates/admin/footer');
	}
	
	function add_product(){
		$get_cat=$this->blank_model->category_retrieve();
		print_r($get_cat);
		$this->load->view('blank_templates/admin/header');  
		$this->load->view('blank_templates/admin/sidebar_menu');		
		$this->load->view('blank_templates/admin/shop/add_product',array('get_cat'=>$get_cat));
		$this->load->view('blank_templates/admin/footer');
	}
	function save_product(){
		// form validation        
        $this->form_validation->set_rules("prd_name", "Product Name", "trim|required");
		$this->form_validation->set_rules("prd_name", "Product price", "trim|required");
		$simple_prd_regular_price=$_POST['simple_prd_regular_price'];
		$simple_prd_sale_price=$_POST['simple_prd_sale_price'];
		if ($simple_prd_sale_price < $simple_prd_regular_price){
			$this->form_validation->set_message('check_equal_less', 'The First &amp;/or Second fields have errors.');
		}
        if ($this->form_validation->run() == FALSE) {
            // validation fail
            $this->load->view('blank_templates/admin/header');
			$this->load->view('blank_templates/admin/sidebar_menu');					
			$this->load->view('blank_templates/admin/shop/add_product');
			$this->load->view('blank_templates/admin/footer');
        }else{
			$re=$this->blank_model->save_product();
			if($re){
				redirect('blank_template/add_product');
			}
		}		
	}
	
	
	//Add Categories

	function add_category(){
		$get_cat=$this->blank_model->product_cat();
		$detail_cat=array(
			'show_cat' => $get_cat,
		);
		$this->load->view('blank_templates/admin/header'); 
		$this->load->view('blank_templates/admin/sidebar_menu');				
		$this->load->view('blank_templates/admin/shop/add_category', $detail_cat);
		$this->load->view('blank_templates/admin/footer');
	}	
	
	function save_category(){
		$cat_name=$_POST['cat_name'];
		$user_id=$this->session->userdata('uid');
		$qry="select * from products_category_id where cat_name='$cat_name' and user_id='$user_id'";
		$query = $this->db->query($qry);		
		$count=$query->num_rows();
		if($count!=1){
			$cat_ret=$this->blank_model->save_cate_data();
			redirect('blank_template/add_category');
		}else{					
			$this->session->set_flashdata('feedback', 'Categorie name already exist');	
			redirect('blank_template/add_category');			
		}
	}
	
	function edit_category($cat_id){
		$get_cat=$this->blank_model->product_cat();
		$edit_cat=$this->blank_model->edit_cat($cat_id);
		
		$detail_cat_edit=array(
			'edit_cat' => $edit_cat,
			'show_cat' => $get_cat,
		);
		$this->load->view('blank_templates/admin/header'); 
		$this->load->view('blank_templates/admin/sidebar_menu');				
		$this->load->view('blank_templates/admin/shop/add_category', $detail_cat_edit);
		$this->load->view('blank_templates/admin/footer');
	}
	
	function update_cat($id){
		$cat_name=$_POST['edit_name'];
		$user_id=$this->session->userdata('uid');
		$qry="select * from products_category_id where cat_name='$cat_name' and user_id='$user_id'";
		$query = $this->db->query($qry);		
		$count=$query->num_rows();
		if($count!=1){
			$return=$this->blank_model->update_category($id);
			if($return){
				redirect('blank_template/add_category');
			}
		}else{					
			$this->session->set_flashdata('feedback', 'Categorie name already exist');	
			redirect('blank_template/edit_category/' . $id);			
		}
	}
	
	function delete_category($id){
		$return=$this->blank_model->del_category($id);
		if($return){
			redirect('blank_template/add_category');
		}
	}
	
	function add_attributes(){
		$get_attr=$this->blank_model->product_attr();
		$detail_attr=array(
			'show_attr' => $get_attr,
		);
		$this->load->view('blank_templates/admin/header'); 
		$this->load->view('blank_templates/admin/sidebar_menu');				
		$this->load->view('blank_templates/admin/shop/add_attr', $detail_attr);
		$this->load->view('blank_templates/admin/footer');
	}
	
	function save_attr(){
		$attr_name=$_POST['attr_name'];
		$user_id=$this->session->userdata('uid');
		$qry="select * from shop_variable_attributes where attr_name='$attr_name' and user_id='$user_id'";
		$query = $this->db->query($qry);		
		$count=$query->num_rows();
		if($count!=1){
			$cat_ret=$this->blank_model->save_attr_data();
			redirect('blank_template/add_attributes');
		}else{					
			$this->session->set_flashdata('feedback', 'Attributes name already exist');	
			redirect('blank_template/add_attributes');			
		}		
	}
	
	function edit_attr($attr_id){
		$get_attr=$this->blank_model->product_attr();
		$edit_attr=$this->blank_model->edit_attributes($attr_id);		
		$detail_attr_edit=array(
			'edit_attr' => $edit_attr,
			'show_attr' => $get_attr,
		);
		$this->load->view('blank_templates/admin/header'); 
		$this->load->view('blank_templates/admin/sidebar_menu');				
		$this->load->view('blank_templates/admin/shop/add_attr', $detail_attr_edit);
		$this->load->view('blank_templates/admin/footer');
	}
	
	
	function update_attr($id){
		$edit_name=$_POST['edit_name'];
		$user_id=$this->session->userdata('uid');
		$qry="select * from shop_variable_attributes where attr_name='$edit_name' and user_id='$user_id'";
		$query = $this->db->query($qry);		
		$count=$query->num_rows();
		if($count!=1){
			$cat_ret=$this->blank_model->update_attributes($id);
			if($cat_ret){
				redirect('blank_template/add_attributes');
			}
		}else{					
			$this->session->set_flashdata('feedback', 'Attributes name already exist');	
			redirect('blank_template/edit_attr/' . $id);			
		}
	}
	
	// end shop
	
	


	// View Front End 

	function show_frontend(){
		$header=$this->blank_model->footer_view();			//Header and Footer View
		$section=$this->blank_model->secion_view();			//Slider View
		$slider=$this->blank_model->slider_view();			//Section View
		$view_site= array(
			'header' => $header,
			'slider' => $slider,
			'section' => $section
		);
		$this->load->view('blank_templates/frontend/header',$view_site); 
		$this->load->view('blank_templates/frontend/index', $view_site);
		$this->load->view('blank_templates/frontend/footer',$view_site);
	}
	
}
