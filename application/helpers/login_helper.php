<?php
function is_logged_in() {
    // Get current CodeIgniter instance
    $CI =& get_instance();
    // We need to use $CI->session instead of $this->session
    $user = $CI->session->userdata('uid');    
    if (!isset($user)) { 
	redirect(base_url());
	return true; 
    }
}
?>
