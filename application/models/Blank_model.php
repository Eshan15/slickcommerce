<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Blank_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function show_pages(){
		$query="select * from blank_template_pages";
		$show_data=$this->db->query($query);
		return $show_data->result();
	}
	
	function saved_data($save){
		return $this->db->insert('blank_template_pages', $save);
	}
	
	function edit_pages($page_id){			
		$this->db->where('blank_temp_id', $page_id);
        $query = $this->db->get('blank_template_pages');
        return $query->result();
	
	}
	
	function updated_data($id){
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
		$this->db->where('blank_temp_id', $id);
		$this->db->update('blank_template_pages', $save);
		return true;		
	}
	
	function delete_page($id){
		$this->db->where('blank_temp_id', $id);
		$this->db->delete('blank_template_pages'); 
		return true;
	}

	function get_details_header(){
		$this->db->where('blank_head_id','1');
		$query=$this->db->get('blank_templates');
		return $query->result();
	}

	function update_footer($id){
		$header=$_POST['header'];
		$footer=$_POST['footer'];
		$save=array(
			'header' => $header,
			'footer' => $footer						
		);
		$this->db->where('blank_head_id',$id);
		$query=$this->db->update('blank_templates',$save);
		return true;
	}
	//Shop
	function show_slider(){
		$query="select * from slider";
		$show_data=$this->db->query($query);
		return $show_data->result();
	}

	function insert_slider(){
		$upload_path =  $_SERVER['DOCUMENT_ROOT']."/login/assets/images/slider/";
		$slider_order=$_POST['slider_order'];
		$slider_content=$_POST['slider_content'];
		$file_name=substr(md5(time()), 0, 28);
		$config['upload_path'] = $upload_path;
	    $config['allowed_types'] = 'jpg|png';
	    $config['file_name']  = $file_name;	    
	    $config['overwrite'] = TRUE;
	    $config['encrypt_name'] = FALSE;
	    $config['remove_spaces'] = TRUE;

	    
	    $qry = "select * from slider where slider_order='$slider_order'";
		$query = $this->db->query($qry);
		$count=$query->num_rows();
		if($count==1){
			$qry1 = "select max(slider_order) as slider_order from slider";
			$get_qry= $this->db->query($qry1);
			$rsult=$get_qry->result();
			$slider_order= $rsult[0]->slider_order;
			$slider_order++;
		}
	    if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
	    
	    $this->load->library('upload', $config);
	    if ( ! $this->upload->do_upload('userfile')) {
	         $data['imageError'] =  $this->upload->display_errors();
	         print_r($data);
	    } else {
	        $save_slider_images= array(
	        	'slider_images' => $file_name . '.jpg',
	        	'slider_content' => $slider_content,
	        	'slider_order' => $slider_order
	        );
	        return $this->db->insert('slider', $save_slider_images);
	    }
	}

	function edit_byid($id){
		$this->db->where('slider_id', $id);
		$qry = $this->db->get('slider');
		return $qry->result();
	}	

	function update_slider($slider_id){
		$upload_path =  $_SERVER['DOCUMENT_ROOT']."/login/assets/images/slider/";
		$slider_content=$_POST['slider_content'];
		$file_nm=$_FILES['userfile']['name'];
		if($file_nm!=""){
			$file_name=substr(md5(time()), 0, 28);
			$config['upload_path'] = $upload_path;
		    $config['allowed_types'] = 'jpg|png';
		    $config['file_name']  = $file_name;	    
		    $config['overwrite'] = TRUE;
		    $config['encrypt_name'] = FALSE;
		    $config['remove_spaces'] = TRUE;
		    if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
		    
		    $this->load->library('upload', $config);
		    if ( ! $this->upload->do_upload('userfile')) {
		         $data['imageError'] =  $this->upload->display_errors();
		         print_r($data);
		    } else {		    	
				$save_slider_images= array(
		        	'slider_images' => $file_name . '.jpg',
		        	'slider_content' => $slider_content,		        	
		        );
		        $this->db->where('slider_id',$slider_id);
		        $this->db->update('slider', $save_slider_images);
		        return true;
		    }
		}else{
			$save_slider_images= array(		        	
		        	'slider_content' => $slider_content,		        	
	        );
	        $this->db->where('slider_id',$slider_id);
	        $this->db->update('slider', $save_slider_images);
	        return true;
		}
	}

	function delete_slider($id){
		$this->db->where('slider_id', $id);
		$this->db->delete('slider'); 
		return true;
	}
	
	//End Slider
	
	//Start Shop
	function save_shop(){
		$user_id=$this->session->userdata('uid');
		$shop_select=$_POST['q'];
			
		$qry = "select * from shop where user_id='$user_id'";
		$query = $this->db->query($qry);
		$count=$query->num_rows();
		if($count==1){
			$update=array(
			'enable_shop' => $shop_select,
			'user_id' => $user_id
			);			
			$this->db->where('user_id',$user_id);
			$this->db->update('shop',$update);			
		}else{
			$save=array(
			'enable_shop' => $shop_select,
			'user_id' => $user_id
			);
			$return=$this->db->insert('shop',$save);			
		}
		echo $shop_select;						
	}	
	
	function category_retrieve(){
		$user_id=$this->session->userdata('uid');
		$query="select * from products_category_id where user_id='$user_id'";
		$show_data=$this->db->query($query);
		return $show_data->result();
	}
	
	function get_detailof_shop(){
		$user_id=$this->session->userdata('uid');
		$query="select * from shop where user_id='$user_id'";
		$show_data=$this->db->query($query);
		return $show_data->result();
	}
	
	function save_product(){
		$upload_path =  $_SERVER['DOCUMENT_ROOT']."/login/assets/images/product/";
		$prd_name=$_POST['prd_name'];
		$simple_prd_regular_price=$_POST['simple_prd_regular_price'];
		$simple_prd_sale_price=$_POST['simple_prd_sale_price'];
		$simple_prd_description=$_POST['simple_prd_description'];
		$simple_prd_short_desc=$_POST['simple_prd_short_desc'];
		$user_id=$this->session->userdata('uid');
		$file_nm=$_FILES['userfile']['name'];		
		if($file_nm!=""){
			$file_name=substr(md5(time()), 0, 28);
			$config['upload_path'] = $upload_path;
		    $config['allowed_types'] = 'jpg|png';
		    $config['file_name']  = $file_name;	    
		    $config['overwrite'] = TRUE;
		    $config['encrypt_name'] = FALSE;
		    $config['remove_spaces'] = TRUE;
		    if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
		    
		    $this->load->library('upload', $config);
		    if ( ! $this->upload->do_upload('userfile')) {
		         $data['imageError'] =  $this->upload->display_errors();
		         print_r($data);
		    } else {		    	
				$save_prd=array(
					'simple_prd_name' => $prd_name,
					'simple_prd_description' => $simple_prd_description,
					'simple_prd_short_desc' => $simple_prd_short_desc,
					'simple_prd_image' => $file_name . 'jpg',
					'simple_prd_regular_price' => $simple_prd_regular_price,
					'simple_prd_sale_price'=> $simple_prd_sale_price,
					'user_id' => $user_id,					
				);		        
		        $this->db->insert('shop_simple_products', $save_prd);
		        return true;
		    }
		}else{
			$save_prd=array(
				'simple_prd_name' => $prd_name,
				'simple_prd_description' => $simple_prd_description,
				'simple_prd_short_desc' => $simple_prd_short_desc,
				'simple_prd_regular_price' => $simple_prd_regular_price,
				'simple_prd_sale_price'=> $simple_prd_sale_price,
				'user_id' => $user_id,				
			);	        
	        $this->db->insert('shop_simple_products', $save_prd);
	        return true;
		}
	}
	
	
	//Categories
	
	function product_cat(){
		$user_id=$this->session->userdata('uid');
		$query="SELECT * FROM  products_category_id WHERE user_id='$user_id' order by cat_name asc";
		$show_data=$this->db->query($query);
		return $show_data->result();
	}
	
	function save_cate_data(){
		$cat_name=$_POST['cat_name'];
		$user_id=$this->session->userdata('uid');
		$save_array=
		array(
			'cat_name' => $cat_name,
			'user_id' => $user_id
		);
		$this->db->insert('products_category_id',$save_array);
		return true;		
	}
	
	function edit_cat($cat_id){
		$user_id=$this->session->userdata('uid');
		$qry="select * from products_category_id where cat_id='$cat_id' and user_id='$user_id'";		
		$query = $this->db->query($qry);
		return $query->result();
	}
	
	function update_category($cat_id){
		$updatefor_cat=$_POST['edit_name'];
		$this->db->where('cat_id',$cat_id);
		$update=array(
			'cat_name' => $updatefor_cat,
		);
		$this->db->update('products_category_id', $update);
		return true;
	}
	
	function del_category($cat_id){
		$update=array(
			'prd_cat_id' => 0,
		);
		$this->db->where('prd_cat_id',$cat_id);		
		$this->db->update('shop_simple_products', $update);				
		$this->db->where('prd_cat_id',$cat_id);
		$this->db->update('shop_variable_products', $update);
		$this->db->where('cat_id', $cat_id);
		$this->db->delete('products_category_id'); 
		return true;
	}
	
	//End Categories
	
	//Attributes
	function product_attr(){
		$user_id=$this->session->userdata('uid');
		$query="SELECT * FROM  shop_variable_attributes WHERE user_id='$user_id' order by attr_name asc";
		$show_data=$this->db->query($query);
		return $show_data->result();
	}
	
	function save_attr_data(){
		$attr_name=$_POST['attr_name'];
		$user_id=$this->session->userdata('uid');
		$save_array=
		array(
			'attr_name' => $attr_name,
			'user_id' => $user_id
		);
		$this->db->insert('shop_variable_attributes',$save_array);
		return true;
	}
	
	function edit_attributes($attr_id){
		$user_id=$this->session->userdata('uid');
		$query="SELECT * FROM  shop_variable_attributes WHERE user_id='$user_id' and attr_id='$attr_id'";
		$show_data=$this->db->query($query);
		return $show_data->result();		
	}
	
	function update_attributes($attr_id){
		$user_id=$this->session->userdata('uid');
		$attr_name=$_POST['edit_name'];
		$update_array = array(
				'attr_name' => $attr_name,
				'user_id' => $user_id
			);
		$this->db->where('attr_id',$attr_id);
		$this->db->update('shop_variable_attributes', $update_array);
		return true;
	}
	//End Attributes
	
	
	
	//End Shop
	
	//Show Theme
	function user_informations(){
		$user_id=$this->session->userdata('uid');
		$this->db->where('user_id', $user_id);
        $query = $this->db->get('register');
        return $query->result();
	}
	
	//End Show Theme
	

	//Front end view
	function secion_view(){								//Section View
		$query="SELECT * FROM blank_template_pages WHERE blank_temp_id='1'";
		$show_data=$this->db->query($query);
		return $show_data->result();
	}
	function slider_view(){								//Slider View
		$query1="select * from slider ORDER BY slider_order ASC";
		$show_data1=$this->db->query($query1);
		return $show_data1->result();
	}	
	function footer_view(){                               //Header and Footer View
		$query="SELECT * FROM blank_templates WHERE blank_head_id='1'";
		$show_data=$this->db->query($query);
		return $show_data->result();
	}
	function product_view(){
		$user_id=$this->session->userdata('uid');
		$query="SELECT * FROM  shop_simple_products WHERE user_id='$user_id'";
		$show_data=$this->db->query($query);
		return $show_data->result();
	}

}

?>