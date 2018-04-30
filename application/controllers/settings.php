<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class settings extends CI_Controller {

    function __construct() {
        parent :: __construct();
        $this->load->model('settings_model');
        
    }

    public function index() {
        $data['main_content'] = 'dashboard';
        $this->load->view('includes/template', $data);
		
    }
    /* ##############     Designation Section Start  ############  */
    function designation() {
        $data['main_content'] = 'settings/designation/designation';
        $this->load->view('includes/template', $data);
    } 
    public function deployment_wise_unit() {
       $deployment_id= $this->input->post('deployment_id');
       $data['deployment_wise_unit'] = $this->settings_model->dep_wise_unit($deployment_id);
       $this->load->view('settings/designation/deployment_wise_unit', $data);
    }
    function save_designation() {
        $save_user_type = array(
            'appointments_id' => $this->input->post('wing_id'),
            'designation' => $this->input->post('deployment_name')
        );
        $this->settings_model->save($save_user_type, 'designations');
        
        $protocol = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $base_url = $protocol . "://" . $_SERVER['HTTP_HOST'];
        $complete_url =   $base_url . $_SERVER["REQUEST_URI"];        
        $save_log = array(
            'user_name' => $this->session->userdata('email'),
            'user_id' => $this->session->userdata('user_id'),
            'user_type' => $this->session->userdata('role_type'),
            'activity_url' => $complete_url,
            'action_type' => ' Designation Create',
            'activity_details' => 'Created  '.'Designation Name: ' .$this->input->post('user_type'),              
        );
	$this->settings_model->save($save_log, 'log_details');
        
    }
    function designation_list() {
        $data['user_type_list'] = $this->settings_model->get_designation();
        $this->load->view('settings/designation/designation_list', $data);
    }
    function ajax_edit_designation_page() {   
        //var_dump($this->input->post());die;
        $deployement_id=$this->input->post('user_id');
//        //var_dump($user_id);die;
        $data['dep_details'] = $this->settings_model->get_id_wise_designation_info($deployement_id); 
        //var_dump($data['dep_details']);die;
        $this->load->view('settings/designation/designation_edit_page',$data);
    }
    function edit_designation() {
        $id = $this->input->post('designations_id');
        
        $get_old_data = $this->settings_model->get_id_wise_designation($id);
        $old_designation = $get_old_data['designation'];
        
        
        $save_user_type = array(
            'appointments_id' => $this->input->post('rank_id'),
            'designation' => $this->input->post('designation')
        );
        $this->settings_model->update_designation($save_user_type, $id);
        
        $protocol = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $base_url = $protocol . "://" . $_SERVER['HTTP_HOST'];
        $complete_url =   $base_url . $_SERVER["REQUEST_URI"];        
        $save_log = array(
            'user_name' => $this->session->userdata('email'),
            'user_id' => $this->session->userdata('user_id'),
            'user_type' => $this->session->userdata('role_type'),
            'activity_url' => $complete_url,
            'action_type' => 'Designation Update',
            'activity_details' => 'Updated '.'Designation Name: ' .$this->input->post('designation'), 
            
            'prev_log' => 'Previous '.'Designation Name: ' .$old_designation,
        );
	$this->settings_model->save($save_log, 'log_details');  
        redirect('settings/designation');
    }
    function designation_delete() {
        $id = $this->input->post('user_type_id');
        
        $get_old_data = $this->settings_model->get_id_wise_designation($id);
        $old_designation = $get_old_data['designation'];
        
        
        
        $protocol = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $base_url = $protocol . "://" . $_SERVER['HTTP_HOST'];
        $complete_url =   $base_url . $_SERVER["REQUEST_URI"];        
        $save_log = array(
            'user_name' => $this->session->userdata('email'),
            'user_id' => $this->session->userdata('user_id'),
            'user_type' => $this->session->userdata('role_type'),
            'activity_url' => $complete_url,
            'action_type' => 'Designation Delete',
            'activity_details' => 'Deleted '.'Designation Name: ' .$old_designation,             
            
        );
	$this->settings_model->save($save_log, 'log_details'); 
        $this->settings_model->delete_designation($id);
        
    }
    function check_existing_designation() {
        
        $designation = $this->input->post('designation');
        $check_email = $this->settings_model->get_existing_designation($designation);
        
        if($check_email ==NULL){
            echo '0';
        }else{
            echo '1';
        }
    }
    
    
    /* ##############     Designation Section End  ############  */
    
    /* ##############     Rank Section Start  ############  */
    function rank() {
        $data['main_content'] = 'settings/rank/rank';
        $this->load->view('includes/template', $data);
    } 
    function save_rank() {
        $save_user_type = array(
            'rank' => $this->input->post('user_type')
        );
        $this->settings_model->save($save_user_type, 'ranks');
        
        $protocol = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $base_url = $protocol . "://" . $_SERVER['HTTP_HOST'];
        $complete_url =   $base_url . $_SERVER["REQUEST_URI"];        
        $save_log = array(
            'user_name' => $this->session->userdata('email'),
            'user_id' => $this->session->userdata('user_id'),
            'user_type' => $this->session->userdata('role_type'),
            'activity_url' => $complete_url,
            'action_type' => ' Rank Create',
            'activity_details' => 'Created  '.'Rank Name: ' .$this->input->post('user_type'),              
        );
	$this->settings_model->save($save_log, 'log_details');
    }
    function check_existing_rank() {
        $designation = $this->input->post('designation');
        $check_email = $this->settings_model->get_existing_rank($designation);
        if($check_email ==NULL){
            echo '0';
        }else{
            echo '1';
        }
    }
    function rank_list() {
        $data['user_type_list'] = $this->settings_model->get_rank();
        $this->load->view('settings/rank/rank_list', $data);
    }
    function edit_rank() {
        $id = $this->input->post('user_type_id');
        
        $get_old_data = $this->settings_model->get_id_wise_rank($id);
        $old_rank = $get_old_data['rank'];
        
        $save_user_type = array(
            'rank' => $this->input->post('user_type')
        );
        $this->settings_model->update_rank($save_user_type, $id);
        
        $protocol = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $base_url = $protocol . "://" . $_SERVER['HTTP_HOST'];
        $complete_url =   $base_url . $_SERVER["REQUEST_URI"];        
        $save_log = array(
            'user_name' => $this->session->userdata('email'),
            'user_id' => $this->session->userdata('user_id'),
            'user_type' => $this->session->userdata('role_type'),
            'activity_url' => $complete_url,
            'action_type' => 'Rank Update',
            'activity_details' => 'Updated '.'Rank Name: ' .$this->input->post('user_type'), 
            
            'prev_log' => 'Previous '.'Rank Name: ' .$old_rank,
        );
	$this->settings_model->save($save_log, 'log_details');  
        
    }
    function rank_delete() {
        $id = $this->input->post('user_type_id');
        $get_old_data = $this->settings_model->get_id_wise_rank($id);
        $old_rank = $get_old_data['rank'];
        
        $protocol = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $base_url = $protocol . "://" . $_SERVER['HTTP_HOST'];
        $complete_url =   $base_url . $_SERVER["REQUEST_URI"];        
        $save_log = array(
            'user_name' => $this->session->userdata('email'),
            'user_id' => $this->session->userdata('user_id'),
            'user_type' => $this->session->userdata('role_type'),
            'activity_url' => $complete_url,
            'action_type' => 'Rank Delete',
            'activity_details' => 'Deleted '.'Rank Name: ' .$old_rank,             
            
        );
	$this->settings_model->save($save_log, 'log_details'); 
        
        
        
        $this->settings_model->delete_rank($id);
    }
    
    /* ##############     Rank Section End  ############  */
    
     /* ##############     Wing Section Start  ############  */
    function wing() {
        $data['main_content'] = 'settings/wing/wing';
        $this->load->view('includes/template', $data);
    } 
    function save_wing() {
        $save_user_type = array(
            'wing' => $this->input->post('user_type')
        );
        $this->settings_model->save($save_user_type, 'wings');
        
        $protocol = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $base_url = $protocol . "://" . $_SERVER['HTTP_HOST'];
        $complete_url =   $base_url . $_SERVER["REQUEST_URI"];        
        $save_log = array(
            'user_name' => $this->session->userdata('email'),
            'user_id' => $this->session->userdata('user_id'),
            'user_type' => $this->session->userdata('role_type'),
            'activity_url' => $complete_url,
            'action_type' => ' Wing Create',
            'activity_details' => 'Created  '.'Wing Name: ' .$this->input->post('user_type'),              
        );
	$this->settings_model->save($save_log, 'log_details');
        
        
        
        
    }
    function check_existing_wing() {
        $designation = $this->input->post('designation');
        $check_email = $this->settings_model->get_existing_wing($designation);
        if($check_email ==NULL){
            echo '0';
        }else{
            echo '1';
        }
    }
    function wing_list() {
        $data['user_type_list'] = $this->settings_model->get_wing();
        $this->load->view('settings/wing/wing_list', $data);
    }
    function edit_wing() {
        $id = $this->input->post('user_type_id');
        
        $get_old_data = $this->settings_model->get_id_wise_wing($id);
        $old_wing = $get_old_data['wing'];
        
        $save_user_type = array(
            'wing' => $this->input->post('user_type')
        );
        $this->settings_model->update_wing($save_user_type, $id);
        
        $protocol = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $base_url = $protocol . "://" . $_SERVER['HTTP_HOST'];
        $complete_url =   $base_url . $_SERVER["REQUEST_URI"];        
        $save_log = array(
            'user_name' => $this->session->userdata('email'),
            'user_id' => $this->session->userdata('user_id'),
            'user_type' => $this->session->userdata('role_type'),
            'activity_url' => $complete_url,
            'action_type' => 'Update',
            'activity_details' => 'Updated '.'Wing Name: ' .$this->input->post('user_type'), 
            
            'prev_log' => 'Previous '.'Wing Name: ' .$old_wing,
        );
	$this->settings_model->save($save_log, 'log_details');    
        
        
    }
    function wing_delete() {
        $id = $this->input->post('user_type_id');
        $get_old_data = $this->settings_model->get_id_wise_wing($id);
        $old_wing = $get_old_data['wing'];
        $protocol = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $base_url = $protocol . "://" . $_SERVER['HTTP_HOST'];
        $complete_url =   $base_url . $_SERVER["REQUEST_URI"];        
        $save_log = array(
            'user_name' => $this->session->userdata('email'),
            'user_id' => $this->session->userdata('user_id'),
            'user_type' => $this->session->userdata('role_type'),
            'activity_url' => $complete_url,
            'action_type' => 'Wing Delete',
            'activity_details' => 'Deleted '.'Wing Name: ' .$old_wing,             
            
        );
	$this->settings_model->save($save_log, 'log_details'); 
        
        $this->settings_model->delete_wing($id);
    }
    
    /* ##############     Wing Section End  ############  */
    
    /* ##############     battalion Section Start  ############  */
    function battalion() {
        $data['main_content'] = 'settings/battalion/battalion';
        $this->load->view('includes/template', $data);
    } 
    function save_battalion() {
        //var_dump($this->input->post());die;
        $save_user_type = array(
            'wings_id' => $this->input->post('wing_id'),
            'battalion' => $this->input->post('deployment_name')
        );
        $this->settings_model->save($save_user_type, 'battalions');
        
        $protocol = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $base_url = $protocol . "://" . $_SERVER['HTTP_HOST'];
        $complete_url =   $base_url . $_SERVER["REQUEST_URI"];        
        $save_log = array(
            'user_name' => $this->session->userdata('email'),
            'user_id' => $this->session->userdata('user_id'),
            'user_type' => $this->session->userdata('role_type'),
            'activity_url' => $complete_url,
            'action_type' => ' Battalion Create',
            'activity_details' => 'Created  '.'Battalion Name: ' .$this->input->post('user_type'),              
        );
	$this->settings_model->save($save_log, 'log_details');
        
        
    }
    function ajax_edit_battalion_page() {   
        $deployement_id=$this->input->post('user_id');
        $data['dep_details'] = $this->settings_model->get_id_wise_battalion_info($deployement_id); 
        $this->load->view('settings/battalion/battalion_edit_page',$data);
    } 
    function check_existing_battalion() {
        
        $designation = $this->input->post('designation');
        $check_email = $this->settings_model->get_existing_battalion($designation);
        
        if($check_email ==NULL){
            echo '0';
        }else{
            echo '1';
        }
    }
    function battalion_list() {
        $data['user_type_list'] = $this->settings_model->get_battalion();
        $this->load->view('settings/battalion/battalion_list', $data);
    }
    function edit_battalion() {
        //var_dump($this->input->post());die;        
        $id = $this->input->post('battalions_id');
        $get_old_data = $this->settings_model->get_id_wise_battalion($id);
        $old_battalion = $get_old_data['battalion'];
        
        
        $save_user_type = array(
            'wings_id' => $this->input->post('wing_id'),
            'battalion' => $this->input->post('deployment_name')
        );
        $this->settings_model->update_battalion($save_user_type, $id);        
        
        $protocol = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $base_url = $protocol . "://" . $_SERVER['HTTP_HOST'];
        $complete_url =   $base_url . $_SERVER["REQUEST_URI"];        
        $save_log = array(
            'user_name' => $this->session->userdata('email'),
            'user_id' => $this->session->userdata('user_id'),
            'user_type' => $this->session->userdata('role_type'),
            'activity_url' => $complete_url,
            'action_type' => 'Update',
            'activity_details' => 'Updated '.'Battalion Name: ' .$this->input->post('user_type'), 
            
            'prev_log' => 'Previous '.'Battalion Name: ' .$old_battalion,
        );
	$this->settings_model->save($save_log, 'log_details');  
        redirect('settings/battalion');
        
    }
    function battalion_delete() {
        $id = $this->input->post('user_type_id');
        
        $get_old_data = $this->settings_model->get_id_wise_battalion($id);
        $old_battalion = $get_old_data['battalion'];
        
        $protocol = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $base_url = $protocol . "://" . $_SERVER['HTTP_HOST'];
        $complete_url =   $base_url . $_SERVER["REQUEST_URI"];        
        $save_log = array(
            'user_name' => $this->session->userdata('email'),
            'user_id' => $this->session->userdata('user_id'),
            'user_type' => $this->session->userdata('role_type'),
            'activity_url' => $complete_url,
            'action_type' => 'Battalion Delete',
            'activity_details' => 'Delete '.'Battalion Name: ' .$old_battalion, 
            
        );
	$this->settings_model->save($save_log, 'log_details'); 
        $this->settings_model->delete_battalion($id);
    }
    
    /* ##############     battalion Section End  ############  */
    
    
         /* ##############     rt_officer Section Start  ############  */
    function rt_officer() {
        $data['main_content'] = 'settings/rt_officer/rt_officer';
        $this->load->view('includes/template', $data);
    } 
    function save_rt_officer() {
        $save_user_type = array(
            'battalions_id' => $this->input->post('wing_id'),
            'rt_officer' => $this->input->post('deployment_name')
        );
        $this->settings_model->save($save_user_type, 'rt_officers');
        
        $protocol = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $base_url = $protocol . "://" . $_SERVER['HTTP_HOST'];
        $complete_url =   $base_url . $_SERVER["REQUEST_URI"];        
        $save_log = array(
            'user_name' => $this->session->userdata('email'),
            'user_id' => $this->session->userdata('user_id'),
            'user_type' => $this->session->userdata('role_type'),
            'activity_url' => $complete_url,
            'action_type' => ' Reporting Officer Create',
            'activity_details' => 'Created  '.'Reporting Officer Name: ' .$this->input->post('deployment_name'),              
        );
	$this->settings_model->save($save_log, 'log_details');
        
        
        
    }
    function check_existing_rt_officer() {
        
        $designation = $this->input->post('designation');
        $check_email = $this->settings_model->get_existing_rt_officer($designation);
        
        if($check_email ==NULL){
            echo '0';
        }else{
            echo '1';
        }
    }
    
    function rt_officer_list() {
        $data['user_type_list'] = $this->settings_model->get_rt_officer();
        $this->load->view('settings/rt_officer/rt_officer_list', $data);
    }
    function ajax_edit_rt_officer_page() {   
        $deployement_id=$this->input->post('user_id');
        $data['dep_details'] = $this->settings_model->get_id_wise_rt_officer_info($deployement_id); 
        $this->load->view('settings/rt_officer/rt_officer_edit_page',$data);
    } 
    function edit_rt_officer() {
        $id = $this->input->post('rt_officers_id');
        
        $get_old_data = $this->settings_model->get_id_wise_rt_officer($id);
        $old_rt_officer = $get_old_data['rt_officer'];
        
        
        $save_user_type = array(
            'battalions_id' => $this->input->post('wing_id'),   
            'rt_officer' => $this->input->post('deployment_name')
        );
        $this->settings_model->update_rt_officer($save_user_type, $id);
        
        
        $protocol = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $base_url = $protocol . "://" . $_SERVER['HTTP_HOST'];
        $complete_url =   $base_url . $_SERVER["REQUEST_URI"];        
        $save_log = array(
            'user_name' => $this->session->userdata('email'),
            'user_id' => $this->session->userdata('user_id'),
            'user_type' => $this->session->userdata('role_type'),
            'activity_url' => $complete_url,
            'action_type' => 'Reporting Officer Update',
            'activity_details' => 'Updated '.'Reporting Officer Name: ' .$this->input->post('deployment_name'),
            'prev_log' => 'Previous '.'Reporting Officer Name: ' .$old_rt_officer,
        );
	$this->settings_model->save($save_log, 'log_details');
        redirect('settings/rt_officer');
        
        
    }
    function rt_officer_delete() {
        $id = $this->input->post('user_type_id');
        $get_old_data = $this->settings_model->get_id_wise_rt_officer($id);        
        $old_rt_officer = $get_old_data['rt_officer'];
        
        $protocol = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $base_url = $protocol . "://" . $_SERVER['HTTP_HOST'];
        $complete_url =   $base_url . $_SERVER["REQUEST_URI"];        
        $save_log = array(
            'user_name' => $this->session->userdata('email'),
            'user_id' => $this->session->userdata('user_id'),
            'user_type' => $this->session->userdata('role_type'),
            'activity_url' => $complete_url,
            'action_type' => 'Reporting Officer Delete',
            'activity_details' => 'Deleted '.'Reporting Officer Name: ' .$old_rt_officer,
            
        );
	$this->settings_model->save($save_log, 'log_details');
        
        
        $this->settings_model->delete_rt_officer($id);
    }    
    /* ##############     rt_officer Section End  ############  */
    
    /* ##############     appointment Section Start  ############  */
    function appointment() {
        $data['main_content'] = 'settings/appointment/appointment';
        $this->load->view('includes/template', $data);
    } 
    function save_appointment() {
        //var_dump($this->input->post());die;
        $save_user_type = array(
            'battalions_id' => $this->input->post('wing_id'),
            'appointment' => $this->input->post('deployment_name')
        );
        $this->settings_model->save($save_user_type, 'appointments');
        
        $protocol = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $base_url = $protocol . "://" . $_SERVER['HTTP_HOST'];
        $complete_url =   $base_url . $_SERVER["REQUEST_URI"];        
        $save_log = array(
            'user_name' => $this->session->userdata('email'),
            'user_id' => $this->session->userdata('user_id'),
            'user_type' => $this->session->userdata('role_type'),
            'activity_url' => $complete_url,
            'action_type' => ' Appointment Create',
            'activity_details' => 'Created  '.'Appointment Name: ' .$this->input->post('deployment_name'),              
        );
	$this->settings_model->save($save_log, 'log_details');
        
        
        
    }
    function ajax_edit_unit_page() {   
        //var_dump($this->input->post());die;
        $deployement_id=$this->input->post('user_id');
//        //var_dump($user_id);die;
        $data['dep_details'] = $this->settings_model->get_id_wise_appointment_info($deployement_id); 
        //var_dump($data['dep_details']);die;
        $this->load->view('settings/appointment/unit_edit_page',$data);
    } 
    function check_existing_unit() {
        
        $designation = $this->input->post('designation');
        $check_email = $this->settings_model->get_existing_unit($designation);
        
        if($check_email ==NULL){
            echo '0';
        }else{
            echo '1';
        }
    }
    
    function appointment_list() {
        $data['user_type_list'] = $this->settings_model->get_appointment();
        $this->load->view('settings/appointment/appointment_list', $data);
    }
    function edit_appointment() {
        
        $id = $this->input->post('appointments_id');
        $get_old_data = $this->settings_model->get_id_wise_appointment($id);
        $old_appointment = $get_old_data['appointment'];
        
        $save_user_type = array(
            'battalions_id' => $this->input->post('wing_id'),
            'appointment' => $this->input->post('deployment_name')
        );
        $this->settings_model->update_appointment($save_user_type, $id);
        
        
        $protocol = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $base_url = $protocol . "://" . $_SERVER['HTTP_HOST'];
        $complete_url =   $base_url . $_SERVER["REQUEST_URI"];        
        $save_log = array(
            'user_name' => $this->session->userdata('email'),
            'user_id' => $this->session->userdata('user_id'),
            'user_type' => $this->session->userdata('role_type'),
            'activity_url' => $complete_url,
            'action_type' => 'Update',
            'activity_details' => 'Updated '.'Appointment Name: ' .$this->input->post('user_type'),
            'prev_log' => 'Previous '.'Appointment Name: ' .$old_appointment,
        );
	$this->settings_model->save($save_log, 'log_details');
        redirect('settings/appointment');
        
    }
    function appointment_delete() {
        $id = $this->input->post('user_type_id');
        $get_old_data = $this->settings_model->get_id_wise_appointment($id);
        $old_appointment = $get_old_data['appointment'];
        $protocol = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $base_url = $protocol . "://" . $_SERVER['HTTP_HOST'];
        $complete_url =   $base_url . $_SERVER["REQUEST_URI"];        
        $save_log = array(
            'user_name' => $this->session->userdata('email'),
            'user_id' => $this->session->userdata('user_id'),
            'user_type' => $this->session->userdata('role_type'),
            'activity_url' => $complete_url,
            'action_type' => 'Delete',
            'activity_details' => 'Deleted '.'Appointment Name: ' .$old_appointment,
            
        );
	$this->settings_model->save($save_log, 'log_details');
        
        $this->settings_model->delete_appointment($id);
    }    
    /* ##############     appointment Section End  ############  */
    
    /* ##############     User Type Section Start  ############  */
    function user_type() {
        $data['main_content'] = 'settings/role/user_type';
        $this->load->view('includes/template', $data);
    }  
    
    function save_user_type() {
        //var_dump($this->input->post());die;
        $save_user_type = array(
            'role_name' => $this->input->post('user_type')
        );
        $this->settings_model->save($save_user_type, 'roles');
    }
    function user_type_list() {
        $data['user_type_list'] = $this->settings_model->get_user_type();
        //var_dump($data['user_type_list']);die;
        $this->load->view('settings/role/user_type_list', $data);
    }
    function edit_user_type() {
        //var_dump($this->input->post());die;
        $id = $this->input->post('user_type_id');
        $save_user_type = array(
            'role_name' => $this->input->post('user_type')
        );
        $this->settings_model->update_user_type($save_user_type, $id);
    }

    function user_type_delete() {
        $id = $this->input->post('user_type_id');
        $this->settings_model->delete_user_type($id);
    }
     /* ##############     User Type Section End  ############  */
    
    function reference_details_list() {
        $data['reference_details_list'] = $this->settings_model->get_reference_details();
        $data['main_content'] = 'settings/reference_details/reference_details_list';
        $this->load->view('includes/template', $data);
    }  
    
    function reference_details() {
        $data['main_content'] = 'settings/reference_details/reference_details_create';
        $this->load->view('includes/template', $data);
    }  
    
     function save_reference_details() {
        
        //var_dump($this->input->post());die;
        $save_reference_details = array(
            'reference_type' => $this->input->post('reference_type'),
            'owner_of_reference' => $this->input->post('owner_reference'),
            'designation' => $this->input->post('designation'),
            'organization' => $this->input->post('org'),
            'contact_no' => $this->input->post('contact_no'),
            'contact_email' => $this->input->post('contact_email'),
            'reference_number' => $this->input->post('reference_number'),           
            'relation' => $this->input->post('relation'),
            'priority' =>$this->input->post('priority'),   
            'created_by' => $this->session->userdata('user_id'),
            'created_date' => date('Y-m-d')              
        );
        $this->settings_model->save($save_reference_details, 'reference_details');
        redirect('settings/reference_details_list');
    }
     function ajax_edit_reference_details_page() {  
         //var_dump($this->input->post());die;
        $user_id=$this->input->post('user_id');
        //var_dump($user_id);die;
        $data['reference_details'] = $this->settings_model->get_id_wise_reference_details($user_id); 
        //var_dump($data['reference_details']);die;
        $this->load->view('settings/reference_details/ajax_edit_reference_details_page',$data);
    }
    function update_reference_details() {
        //var_dump($this->input->post());die;
        $reference_details_id=$this->input->post('reference_details_id');
        $update_user = array(
            'reference_type' => $this->input->post('reference_type'),
            'owner_of_reference' => $this->input->post('owner_reference'),
            'designation' => $this->input->post('designation'),
            'organization' => $this->input->post('org'),
            'contact_no' => $this->input->post('contact_no'),
            'contact_email' => $this->input->post('contact_email'),
            'reference_number' => $this->input->post('reference_number'),           
            'relation' => $this->input->post('relation'),
            'priority' =>$this->input->post('priority')  
                 
        );
        //var_dump($update_user);die;
        $this-> settings_model-> update_reference_details_info($update_user, $reference_details_id);
        redirect('settings/reference_details_list');
    }  
    function reference_details_delete($reference_detail) {
        $this->settings_model->delete_reference_detail($reference_detail);
        $data['reference_details_list'] = $this->settings_model->get_reference_details();
        $data['main_content'] = 'settings/reference_details/reference_details_list';
        $this->load->view('includes/template', $data);
        
    }  
    
    
    function create_user() {
        $data['main_content'] = 'settings/user_create';
        $this->load->view('includes/template', $data);
    }  
    public function wing_wise_battalion() {
       $wing_id= $this->input->post('wing_id');
       $data['deployment_wise_unit'] = $this->settings_model->wing_wise_bat($wing_id);
       $this->load->view('settings/wing_wise_bat', $data);
    }
    public function bat_wise_unit() {
       $battalion_id= $this->input->post('battalion_id');
       $data['deployment_wise_unit'] = $this->settings_model->bat_wise_units($battalion_id);
       $this->load->view('settings/bat_wise_unit', $data);
    }
    public function unit_wise_desig() {
       $unit= $this->input->post('unit');
       $data['deployment_wise_unit'] = $this->settings_model->unit_wise_designation($unit);
       $this->load->view('settings/unit_wise_design', $data);
    }   
    public function bat_wise_rt_officer() {
       $battalion_id= $this->input->post('battalion_id');
       $data['deployment_wise_unit'] = $this->settings_model->bat_wise_rt_officer($battalion_id);
       $this->load->view('settings/bat_wise_rt_officer', $data);
    } 
    function save_user() {
        $is_authorized = $this->input->post('is_authorized');
        if($is_authorized !=NULL || $is_authorized !=""){
            $autorized = 1;
        }  else {
            $autorized = 0;
        }
        //var_dump($autorized);die;
        /*############     For Document File ###################*/
        if (!empty($_FILES['user_image']['name'])) {
            $config['upload_path'] = './assets/uploads/images';
            $config['allowed_types'] = '*';
            $this->load->library('upload');
            $this->upload->initialize($config);
            if ($this->upload->do_upload('user_image')) {
                $image_data = $this->upload->data();
                $branch_data['user_image'] = $image_data['file_name'];
            } else {
                echo $this->upload->display_errors();
                echo "Uploading Image problem...";
            }
        }
        else{
            $branch_data['user_image'] = '';
        }
        
 /* ###############  End Document ##########  */  
        
        
        $save_user = array(
            'designations_id' => $this->input->post('designation'),
            'ranks_id' => $this->input->post('rank'),
            'wings_id' => $this->input->post('wing'),
            'appointments_id' => $this->input->post('appointment'),
            'battalions_id' => $this->input->post('battalion'),
            'rt_officers_id' => $this->input->post('rt_officer'),
            'name' => $this->input->post('name'),           
            'email' => $this->input->post('username'),
            'is_authorized' => $autorized,
            'password' =>md5($this->input->post('password')),
            'phone' => $this->input->post('phone'),
            'created_on' => date('Y-m-d'),
            'active' => 1,
            'parent' => $this->session->userdata('user_id'),
            'user_type' => $this->input->post('role'),
            'user_image' => $branch_data['user_image']  
        );
	$save = $this->settings_model->save($save_user, 'users');
        
        $designation_data = $this->settings_model->get_designation_info($this->input->post('designation'));
        $designation_name = $designation_data['designation'];
        $rank_data = $this->settings_model->get_rank_info($this->input->post('rank'));
        $rank_name = $rank_data['rank'];
        $wing_data = $this->settings_model->get_wing_info($this->input->post('wing'));
        $wing_name = $wing_data['wing'];
        $unit_data = $this->settings_model->get_unit_info($this->input->post('appointment'));
        $unit_name = $unit_data['appointment'];
        $battalion_data = $this->settings_model->get_battalion_info($this->input->post('battalion'));
        $battalion_name = $battalion_data['battalion'];
        $rt_officer_data = $this->settings_model->get_rt_officer_info($this->input->post('rt_officer'));
        $rt_officer_name = $rt_officer_data['rt_officer'];        
        $role_data = $this->settings_model->get_user_role_info($this->input->post('role'));
        $role_name = $role_data['role_name'];
        
        $protocol = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $base_url = $protocol . "://" . $_SERVER['HTTP_HOST'];
        $complete_url =   $base_url . $_SERVER["REQUEST_URI"];        
        $save_log = array(
            'user_name' => $this->session->userdata('email'),
            'user_id' => $this->session->userdata('user_id'),
            'user_type' => $this->session->userdata('role_type'),
            'activity_url' => $complete_url,
            'action_type' => 'Create',
            'activity_details' => 'Created  '.'Users Name: ' .$this->input->post('name').'-'.'Email:  '.$this->input->post('username').'-'.'Password:  '.$this->input->post('password')
                .'-'.'Phone:  '.$this->input->post('phone').'-'.'Image:  '.$branch_data['user_image'].'-'.'Role Type:  '.$role_name
                .' '.'Designation:  '.$designation_name.'-'.'Rank:  '.$rank_name.'-'.'Wing:  '.$wing_name
                .' '.'Department/Battalion:  '.$unit_name.'-'.'Unit:  '.$battalion_name.'-'.'Reporting Officer:  '.$rt_officer_name,              
        );
	$this->settings_model->save($save_log, 'log_details');
        
        
        
         if ($save == true) {
                    $messge = array('message' => 'Succesfully Added A New User', 'class' => 'alert alert-success fade in');
                    $this->session->set_flashdata('item', $messge);
                     redirect('settings/user_list');
                } else {
                    $messge = array('message' => 'Please Input Your Data Again', 'class' => 'alert alert-danger fade in');
                    $this->session->set_flashdata('item', $messge);
                    redirect('settings/user_list');
                }
                $this->session->keep_flashdata('item', $messge); 
        
        
    }
    function ajax_edit_user_page() {   
        //var_dump($this->input->post());die;
        $user_id=$this->input->post('user_id');
        //var_dump($user_id);die;
        $data['user_details'] = $this->settings_model->get_id_wise_user($user_id); 
        //var_dump($data['user_details']);die;
        $this->load->view('settings/ajax_edit_user_view',$data);
    } 
    function update_user() {
        //var_dump($this->input->post());die;
        $is_authorized = $this->input->post('is_authorized');
        if($is_authorized !=NULL || $is_authorized !=""){
            $autorized = 1;
        }  else {
            $autorized = 0;
        }
        $user_id=$this->input->post('user_id');
        $get_previous_data = $this->settings_model->get_id_wise_user($user_id);
        
        $old_name = $get_previous_data['name'];
        $old_username = $get_previous_data['email'];
        $old_phone = $get_previous_data['phone'];
        $old_desig = $get_previous_data['designation'];
        $old_rank = $get_previous_data['rank'];
        $old_wing = $get_previous_data['wing'];
        $old_battalion = $get_previous_data['battalion'];
        $old_unit = $get_previous_data['appointment'];
        $old_rt_officer = $get_previous_data['rt_officer'];
        $old_role = $get_previous_data['role_name'];
        $old_pic = $get_previous_data['user_image'];
        
        
        
        if (!empty($_FILES['user_pic']['name'])) {
            $config['upload_path'] = './assets/uploads/images';
            $config['allowed_types'] = '*';
            $this->load->library('upload');
            $this->upload->initialize($config);
            if ($this->upload->do_upload('user_pic')) {
                $image_data = $this->upload->data();
                $branch_data['user_pic'] = $image_data['file_name'];
                 $name = $this->input->post('old_file');
                 //unlink($name);
                 //@unlink("./upload/images".$name);
                 unlink("./assets/uploads/images/".$name);
            } else {
                echo $this->upload->display_errors();
                echo "Uploading Image problem...";
            }
        } else {
            //var_dump('old');die;
            $branch_data['user_pic'] = $this->input->post('old_file');
        }
        
        
        
        
        $update_user = array(
            'designations_id' => $this->input->post('designation'),
            'ranks_id' => $this->input->post('rank'),
            'wings_id' => $this->input->post('wing'),
            'appointments_id' => $this->input->post('appointment'),
            'battalions_id' => $this->input->post('battalion'),
            'rt_officers_id' => $this->input->post('rt_officer'),
            'name' => $this->input->post('name'),           
            'email' => $this->input->post('username'),
            'is_authorized' => $autorized,
            'phone' => $this->input->post('phone'),
            'created_on' => date('Y-m-d'),
            'active' => $this->input->post('status'),
            'user_type' => $this->input->post('role'),
            'user_image' =>  $branch_data['user_pic'],
        );
        //var_dump($update_user);die;
        $edit = $this-> settings_model-> update_user_info($update_user, $user_id);
        
        $designation_data = $this->settings_model->get_designation_info($this->input->post('designation'));
        $designation_name = $designation_data['designation'];
        $rank_data = $this->settings_model->get_rank_info($this->input->post('rank'));
        $rank_name = $rank_data['rank'];
        $wing_data = $this->settings_model->get_wing_info($this->input->post('wing'));
        $wing_name = $wing_data['wing'];
        $unit_data = $this->settings_model->get_unit_info($this->input->post('appointment'));
        $unit_name = $unit_data['appointment'];
        $battalion_data = $this->settings_model->get_battalion_info($this->input->post('battalion'));
        $battalion_name = $battalion_data['battalion'];
        $rt_officer_data = $this->settings_model->get_rt_officer_info($this->input->post('rt_officer'));
        $rt_officer_name = $rt_officer_data['rt_officer'];        
        $role_data = $this->settings_model->get_user_role_info($this->input->post('role'));
        $role_name = $role_data['role_name'];
        
        /* previous data */
        
        
        /* prev data */
        
        
        $protocol = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $base_url = $protocol . "://" . $_SERVER['HTTP_HOST'];
        $complete_url =   $base_url . $_SERVER["REQUEST_URI"];        
        $save_log = array(
            'user_name' => $this->session->userdata('email'),
            'user_id' => $this->session->userdata('user_id'),
            'user_type' => $this->session->userdata('role_type'),
            'activity_url' => $complete_url,
            'action_type' => 'Update',
            'activity_details' => 'Updated '.'Users Name: ' .$this->input->post('name').'-'.'Email:  '.$this->input->post('username')
                .'-'.'Phone:  '.$this->input->post('phone').'-'.'Image:  '.$branch_data['user_image'].'-'.'Role Type:  '.$role_name
                .' '.'Designation:  '.$designation_name.'-'.'Rank:  '.$rank_name.'-'.'Wing:  '.$wing_name
                .' '.'Department/Battalion:  '.$unit_name.'-'.'Unit:  '.$battalion_name.'-'.'Reporting Officer:  '.$rt_officer_name,  
            
            'prev_log' => 'Previous Data '.'Users Name: ' .$old_name.'-'.'Email:  '.$old_username
                .'-'.'Phone:  '.$old_phone.'-'.'Image:  '.$old_pic.'-'.'Role Type:  '.$old_role
                .' '.'Designation:  '.$old_designation.'-'.'Rank:  '.$old_rank.'-'.'Wing:  '.$old_wing
                .' '.'Department/Battalion:  '.$old_battalion.'-'.'Unit:  '.$old_unit.'-'.'Reporting Officer:  '.$old_rt_officer,
        );
	$this->settings_model->save($save_log, 'log_details');        
        
        if ($edit == true) {
                    $messge = array('message' => 'Succesfully Edited !!!', 'class' => 'alert alert-success fade in');
                    $this->session->set_flashdata('item', $messge);
                     redirect('settings/user_list');
                } else {
                    $messge = array('message' => 'Please Input Your Data Again', 'class' => 'alert alert-danger fade in');
                    $this->session->set_flashdata('item', $messge);
                    redirect('settings/user_list');
                }
                $this->session->keep_flashdata('item', $messge); 
        
    }
    
    function reset_user_password() {
        
        //var_dump($this->input->post());die;
       $user_id = $this->input->post('user_id'); 
       $email = $this->input->post('email'); 
       $password = $this->input->post('password');     
       $update_password = array(
            'password' =>md5($this->input->post('password'))       
        );
       $pass_change = $this-> settings_model->update_user_wise_password($update_password, $user_id); 
      
       
        $protocol = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $base_url = $protocol . "://" . $_SERVER['HTTP_HOST'];
        $complete_url =   $base_url . $_SERVER["REQUEST_URI"];        
        $save_log = array(
            'user_name' => $this->session->userdata('email'),
            'user_id' => $this->session->userdata('user_id'),
            'user_type' => $this->session->userdata('role_type'),
            'activity_url' => $complete_url,
            'action_type' => 'Change Password By Admin',
            'activity_details' => 'Password Change For'.'-'.$email,              
        );
	$this->settings_model->save($save_log, 'log_details');
       
       
       if ($pass_change == true) {
                    $messge = array('message' => 'You Have Changed Your Password Succesfully !!!', 'class' => 'alert alert-success fade in');
                    $this->session->set_flashdata('item', $messge);
                     redirect('settings/user_list');
                } else {
                    $messge = array('message' => 'Please Input Your Data Again', 'class' => 'alert alert-danger fade in');
                    $this->session->set_flashdata('item', $messge);
                    redirect('settings/user_list');
                }
                $this->session->keep_flashdata('item', $messge); 
    }
    function check_existing_email() {
        
        $email = $this->input->post('email');
        $check_email = $this->settings_model->get_existing_emails($email);
        
        if($check_email ==NULL){
            echo '0';
        }else{
            echo '1';
        }
       
        
    }
    
      function check_same_email() {
        
        $email = $this->input->post('email');
        $check_email = $this->settings_model->get_same_emails($email);
        
        if($check_email == $email){
            echo '2';
        }else{
            echo '2';
        }
       
        
    }
    
    function user_list() {
        		
		$battalions_id = $this->session->userdata('battalion');
		$role_type = $this->session->userdata('role_type');
		
		// echo '<pre/>';
		// print_r($this->session->userdata());
		// die;
		if($role_type != 'Super Admin')
		{			
			$data['user_list'] = $this->settings_model->get_user_by_battalion($battalions_id);
		}
		else
		{
			$data['user_list'] = $this->settings_model->get_user();
		}
		// echo '<pre/>';
		// echo $this->db->last_query();
		// print_r($data['user_list']);
		// die("LOL");
		
		$battalions_id = $this->session->userdata('battalion');		
        $data['main_content'] = 'settings/user_list';
        $this->load->view('includes/template', $data);
    }
	
    function change_password() {
        //$data['user_id']=$user;
        //var_dump($data['user_id']);die;
        $data['id'] = $this->session->userdata('user_id');
        $data['main_content'] = 'settings/change_password';
        $this->load->view('includes/template', $data);
        
    }
     function submit_change_password() {
         //var_dump($this->input->post());die;
        $this->load->model('general_model');
        $id = $this->session->userdata('user_id');
        $prev = md5($this->input->post('prev'));
        $new = md5($this->input->post('new'));
        $check = $this->general_model->check_current_password($prev, $id);
        //var_dump($check);die;
        if ($check['c'] != 0) {
            $change_password = array(
                'password' => $new
            );
            $result = $this->general_model->change_password($change_password, $id);
            if ($result == 'true') {
                echo 1;
            } else {
                echo 0;
            }
        }else{
             echo 0;
        }
        $protocol = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $base_url = $protocol . "://" . $_SERVER['HTTP_HOST'];
        $complete_url =   $base_url . $_SERVER["REQUEST_URI"];        
        $save_log = array(
            'user_name' => $this->session->userdata('email'),
            'user_id' => $this->session->userdata('user_id'),
            'user_type' => $this->session->userdata('role_type'),
            'activity_url' => $complete_url,
            'action_type' => 'Change Password By User',
            'activity_details' => 'Password Change By'.'-'.$this->input->post('new'), 
            'prev_log' => 'Previous password'.'-'.$this->input->post('prev'),
        );
	$this->settings_model->save($save_log, 'log_details');
    }
    function user_delete($user) {
        $user_info = $this->settings_model->get_id_wise_user($user); 
        $user_email = $user_info['email'];
        $this->settings_model->delete_user($user);
        
        
        
        $protocol = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $base_url = $protocol . "://" . $_SERVER['HTTP_HOST'];
        $complete_url =   $base_url . $_SERVER["REQUEST_URI"];        
        $save_log = array(
            'user_name' => $this->session->userdata('email'),
            'user_id' => $this->session->userdata('user_id'),
            'user_type' => $this->session->userdata('role_type'),
            'activity_url' => $complete_url,
            'action_type' => 'Delete',
            'activity_details' => 'Delete User'.'-'.$user_email,              
        );
		
		$this->settings_model->save($save_log, 'log_details');    
                
                
                $battalions_id = $this->session->userdata('battalion');
		$role_type = $this->session->userdata('role_type');
		
		// echo '<pre/>';
		// print_r($this->session->userdata());
		// die;
		if($role_type != 'Super Admin')
		{			
			$data['user_list'] = $this->settings_model->get_user_by_battalion($battalions_id);
		}
		else
		{
			$data['user_list'] = $this->settings_model->get_user();
		}
        $data['main_content'] = 'settings/user_list';
        $this->load->view('includes/template', $data);
        
    }
     function create_menu() {
        $data['main_content'] = 'settings/menu_create';
        $this->load->view('includes/template', $data);
    }  
    function save_menu() { 
        $save_menu = array(
            'menu_title' => $this->input->post('menu_name'),
            'menu_url' => $this->input->post('menu_link'),
            'parent' => $this->input->post('menu'),
            'icon_class' =>$this->input->post('menu_icon')                       
        );
        $this->settings_model->save($save_menu, 'menus');
        redirect('settings/menu_list');
    }
    function menu_list() {
        $data['menu_list'] = $this->settings_model->get_menu();
        //var_dump($data['menu_list']);die;
        $data['main_content'] = 'settings/menu_list';
        $this->load->view('includes/template', $data);
    }
    function menu_delete($menu) {        
        $this->settings_model->delete_menu($menu);
        $data['menu_list'] = $this->settings_model->get_menu();
        $data['main_content'] = 'settings/menu_list';
        $this->load->view('includes/template', $data);        
    }
    function ajax_edit_form() {
        $menus=$this->input->post('menu');
        $data['menu_list'] = $this->settings_model->get_id_wise_menu($menus);
        $this->load->view('settings/ajax_menu_edit',$data);
    }
     public function update_menu() {
         $id = $this->input->post('menuid');  
         $menu_update = array(
            'menu_title' => $this->input->post('menu_name'),
            'menu_url' => $this->input->post('menu_link'),
            'parent' => $this->input->post('menu'),
            'icon_class' =>$this->input->post('menu_icon')
        );
        $this->settings_model->edit_menu($menu_update,$id);
        redirect('settings/menu_list');
    } 
        function create_function() {
        
        $data['main_content'] = 'settings/function_create';
        $this->load->view('includes/template', $data);
    }
      function save_function() { 
        $save_function = array(
            'title' => $this->input->post('function_name'),
            'controller' => $this->input->post('menu_link'),
            'function' => $this->input->post('function')                                  
        );
        $this->settings_model->save($save_function, 'function');
        redirect('settings/function_list');
    }
     function function_list(){
        
        $data['function_list'] = $this->settings_model->get_function();
        $data['main_content'] = 'settings/function_list';
        $this->load->view('includes/template', $data);
    }
    function ajax_function_edit_form() {
        $function=$this->input->post('function');
        $data['function_list'] = $this->settings_model->get_id_wise_function($function);        
        $this->load->view('settings/ajax_function_edit',$data);
    }
    function update_function() {
        $id = $this->input->post('function_id');  
         $function_update = array(
            'title' => $this->input->post('function_name'),
            'controller' => $this->input->post('controller'),
            'function' => $this->input->post('function')
        );
        $this->settings_model->edit_function($function_update,$id);
        redirect('settings/function_list');
    }
    function function_delete($function) {
        
        $this->settings_model->delete_function($function);
        $data['function_list'] = $this->settings_model->get_function();
        $data['main_content'] = 'settings/function_list';
        $this->load->view('includes/template', $data);       
    }
    function access_list() {
        $data['role_list'] = $this->settings_model->menu_role_list();
        $data['main_content'] = 'settings/access_list_show';
        $this->load->view('includes/template', $data);
    }
    function save_menu_priority() {
        //var_dump($this->input->post());die;
        $role_id=  $this->input->post('role_id');
        $menu_id = $this->input->post('menu_id');
        $update_menu_priority=array(                    
                    'priority' => $this->input->post('priority')
                    );
        //var_dump($update_menu_priority);die;
        $this->settings_model->update_menu_priority($update_menu_priority,$role_id,$menu_id);
        redirect('settings/access_list');  
    }
    function menu_priority() {
        //$data['main_content'] = 'settings/role_create';
        $data['main_content'] = 'settings/menu_priority';
        $this->load->view('includes/template', $data);
    }
    function save_menu_role(){
        $role=  $this->input->post('role');
        $menus = $this->input->post('menu[]');
        $functions = $this->input->post('function[]');
        if($menus !=0){
            foreach ($menus as $menu):
                $save_menu_roles = array(
                                'menuid' => $menu,
                                'roleid' => $role         
                            );
            $this->settings_model->save($save_menu_roles, 'menu_role');
            endforeach;
        }
      if($functions !=0){
           foreach ($functions as $function):
                $save_function_access = array(
                    'function_id' => $function,
                    'roleid' => $role         
                );
      $this->settings_model->save($save_function_access, 'function_access');
      endforeach;   
      }
      redirect('settings/role_list');     
    }
    function role_list() {        
        $data['role_list'] = $this->settings_model->menu_role_list();
        $data['main_content'] = 'settings/menu_role_list';
        $this->load->view('includes/template', $data);        
    }
    function ajax_menu_role_edit() {
        $role_id = $this->input->post('role_id');
        $data['role_id']=$role_id;
        $data['menu_role'] = $this->settings_model->get_role_wise_menu($role_id);
        $data['menu_role_menus'] = $this->settings_model->get_id_wise_menu_role_menus($role_id);
        $data['menu_role_functions'] = $this->settings_model->get_id_wise_menu_role_function($role_id);
        $this->load->view('settings/ajax_menu_role_edit',$data);
    }
        function update_role(){
        $role=  $this->input->post('role');
        $menus = $this->input->post('menu[]');        
        $functions = $this->input->post('function[]');
        
        
       // var_dump($role,$menus,$functions);die;
        $delete_existing_menu= $this->settings_model->delete_existing_menu($role);
        $delete_existing_function= $this->settings_model->delete_existing_function($role);
        
        
        foreach ($menus as $menu):           
            $update_menu_role=array(
                    'menuid' => $menu,
                    'roleid' => $role
                    );
            $this->settings_model->save($update_menu_role, 'menu_role');
        endforeach;
        
        foreach ($functions as $function):            
                $update_function_access = array(
                    'function_id' => $function,
                    'roleid' => $role
                );
            $this->settings_model->save($update_function_access,'function_access');
        endforeach; 
        
        
//        $protocol = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
//        $base_url = $protocol . "://" . $_SERVER['HTTP_HOST'];
//        $complete_url =   $base_url . $_SERVER["REQUEST_URI"];        
//        $save_log = array(
//            'user_name' => $this->session->userdata('email'),
//            'user_id' => $this->session->userdata('user_id'),
//            'user_type' => $this->session->userdata('role_type'),
//            'activity_url' => $complete_url,
//            'action_type' => 'Access Update', 
//            
//            'activity_details' => 'Access For '.'Role Name: ' .$role.'-'.'Menus:  '.$menus.'-'.'Functions:  '.$functions,  
//            
//        );
//	$this->settings_model->save($save_log, 'log_details');  
        
  
      redirect('settings/access_list');
     
    }
    function dashboard_access() { 
        $data['role_list'] = $this->settings_model->menu_role_list();
        $data['main_content'] = 'settings/dashboard_access_list';
        $this->load->view('includes/template', $data);
    }
    function ajax_dashboard_access_edit() {
        $role_id = $this->input->post('role_id');
        $data['role_id']=$role_id;
        $data['dashboard_access'] = $this->settings_model->get_id_wise_dash_access($role_id); 
        $this->load->view('settings/ajax_dashboard_access_edit',$data);
    }
    function update_dash_access(){
        $role=  $this->input->post('role');
        $dash_access = $this->input->post('dash_access[]');       
        
        $delete_existing_access = $this-> db-> where('roleid', $role)-> delete('dashboard_access');      
        
        foreach ($dash_access as $dash):           
            $update_menu_role=array(
                    'dashboard_id' => $dash,
                    'roleid' => $role
                    );
            $this->settings_model->save($update_menu_role, 'dashboard_access');
        endforeach;
  
      redirect('settings/dashboard_access');
     
    }
    
     /* ##############     Crime Section Start  ############  */
    function crime() {
        $data['main_content'] = 'settings/crime/crime';
        $this->load->view('includes/template', $data);
    } 
    function save_crime() {
        $save_user_type = array(
            'crime_name' => $this->input->post('user_type')
        );
        $this->settings_model->save($save_user_type, 'tbl_crimeinfo');
        
        $protocol = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $base_url = $protocol . "://" . $_SERVER['HTTP_HOST'];
        $complete_url =   $base_url . $_SERVER["REQUEST_URI"];        
        $save_log = array(
            'user_name' => $this->session->userdata('email'),
            'user_id' => $this->session->userdata('user_id'),
            'user_type' => $this->session->userdata('role_type'),
            'activity_url' => $complete_url,
            'action_type' => ' Crime Create',
            'activity_details' => 'Created  '.'Crime Name: ' .$this->input->post('user_type'),              
        );
	$this->settings_model->save($save_log, 'log_details');
        
        
        
        
    }
    function check_existing_crime() {
        $designation = $this->input->post('designation');
        $check_email = $this->settings_model->get_existing_crime($designation);
        if($check_email ==NULL){
            echo '0';
        }else{
            echo '1';
        }
    }
    function crime_list() {
        $data['user_type_list'] = $this->settings_model->get_crime();
        $this->load->view('settings/crime/crime_list', $data);
    }
    function edit_crime() {
        $id = $this->input->post('user_type_id');
        
        $get_old_data = $this->settings_model->get_id_wise_crime($id);
        $old_wing = $get_old_data['crime_name'];
        
        $save_user_type = array(
            'crime_name' => $this->input->post('user_type')
        );
        $this->settings_model->update_crime($save_user_type, $id);
        
        $protocol = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $base_url = $protocol . "://" . $_SERVER['HTTP_HOST'];
        $complete_url =   $base_url . $_SERVER["REQUEST_URI"];        
        $save_log = array(
            'user_name' => $this->session->userdata('email'),
            'user_id' => $this->session->userdata('user_id'),
            'user_type' => $this->session->userdata('role_type'),
            'activity_url' => $complete_url,
            'action_type' => 'Update',
            'activity_details' => 'Updated '.'Crime Name: ' .$this->input->post('user_type'), 
            
            'prev_log' => 'Previous '.'Crime Name: ' .$old_wing,
        );
	$this->settings_model->save($save_log, 'log_details');    
        
        
    }
    function crime_delete() {
        $id = $this->input->post('user_type_id');
        $get_old_data = $this->settings_model->get_id_wise_crime($id);
        $old_wing = $get_old_data['crime_name'];
        $protocol = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $base_url = $protocol . "://" . $_SERVER['HTTP_HOST'];
        $complete_url =   $base_url . $_SERVER["REQUEST_URI"];        
        $save_log = array(
            'user_name' => $this->session->userdata('email'),
            'user_id' => $this->session->userdata('user_id'),
            'user_type' => $this->session->userdata('role_type'),
            'activity_url' => $complete_url,
            'action_type' => 'Crime Delete',
            'activity_details' => 'Deleted '.'Crime Name: ' .$old_wing,             
            
        );
	$this->settings_model->save($save_log, 'log_details'); 
        
        $this->settings_model->delete_crime($id);
    }
    
    /* ##############     Crime Section End  ############  */
    
    /* ##############     Sub Crime Section Start  ############  */
    function sub_crime() {
        $data['main_content'] = 'settings/sub_crime/sub_crime';
        $this->load->view('includes/template', $data);
    }
    function subcrime_list() {        
        $data['user_type_list'] = $this->settings_model->get_sub_crime();
        //var_dump($data['user_type_list']);die;
        $this->load->view('settings/sub_crime/sub_crime_list', $data);
    }
    function save_sub_crime() {
        //var_dump($this->input->post());die;
        $save_user_type = array(
            'crimeid' => $this->input->post('wing_id'),
            'subcrime_name' => $this->input->post('deployment_name')
        );
        $this->settings_model->save($save_user_type, 'tbl_subcrimeinfo');
        
        $protocol = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $base_url = $protocol . "://" . $_SERVER['HTTP_HOST'];
        $complete_url =   $base_url . $_SERVER["REQUEST_URI"];        
        $save_log = array(
            'user_name' => $this->session->userdata('email'),
            'user_id' => $this->session->userdata('user_id'),
            'user_type' => $this->session->userdata('role_type'),
            'activity_url' => $complete_url,
            'action_type' => ' Battalion Create',
            'activity_details' => 'Created  '.'Battalion Name: ' .$this->input->post('user_type'),              
        );
	$this->settings_model->save($save_log, 'log_details');
        
        
    }
    function ajax_edit_sub_crime_page() {   
        $deployement_id=$this->input->post('user_id');
        $data['dep_details'] = $this->settings_model->get_id_wise_sub_crime_info($deployement_id); 
        $this->load->view('settings/sub_crime/sub_crime_edit_page',$data);
    }   
    }
    function edit_sub_crimes() {
        var_dump($this->input->post());die;        
        $id = $this->input->post('battalions_id');
        $save_user_type = array(
            'crimeid' => $this->input->post('wing_id'),
            'subcrime_name' => $this->input->post('deployment_name')
        );
        $this->settings_model->update_sub_crime($save_user_type, $id);      
        redirect('settings/sub_crime');        
    }
    function sub_crime_delete() {
        $id = $this->input->post('user_type_id');
        
        $get_old_data = $this->settings_model->get_id_wise_sub_crime($id);
        $old_battalion = $get_old_data['battalion'];
        
        $protocol = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $base_url = $protocol . "://" . $_SERVER['HTTP_HOST'];
        $complete_url =   $base_url . $_SERVER["REQUEST_URI"];        
        $save_log = array(
            'user_name' => $this->session->userdata('email'),
            'user_id' => $this->session->userdata('user_id'),
            'user_type' => $this->session->userdata('role_type'),
            'activity_url' => $complete_url,
            'action_type' => 'Battalion Delete',
            'activity_details' => 'Delete '.'Battalion Name: ' .$old_battalion, 
            
        );
	$this->settings_model->save($save_log, 'log_details'); 
        $this->settings_model->delete_sub_crime($id);
    /* ##############     battalion Section End  ############  */
    
   
}
