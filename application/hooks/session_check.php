<?php 
function session_checker_function(){
	$ci=& get_instance();
	$class=$ci->router->fetch_class();
        $method=$ci->router->fetch_method();
	if($class!='auth'){
		if($ci->session->userdata('sign_in')!=TRUE){  
                    redirect('auth/sign_in');
		}
		
	}
}
?>