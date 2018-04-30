<?php
class Settings_model extends CI_Model

{
	function __construct()
	{
		parent :: __construct();
	}
        
      function save($input, $table) {
        $this->db->insert($table, $input); 
        return $this->db->insert_id();
    }   
   /* ################# Designation Section Start #################### */
    function get_designation() {
        return $this->db
                    ->join('appointments','appointments.appointments_id=designations.appointments_id')
                    ->join('battalions','battalions.battalions_id=appointments.battalions_id')
                    ->join('wings','wings.wings_id=battalions.wings_id')                   
                    ->get('designations')->result_array();
    }    
    function get_id_wise_designation_info($deployement_id) {
		return $this-> db
                            ->join('appointments','appointments.appointments_id=designations.appointments_id')
                            ->join('battalions','battalions.battalions_id=appointments.battalions_id')
                            ->join('wings','wings.wings_id=battalions.wings_id')        
                            ->where('designations.designations_id',$deployement_id)
                            ->get('designations')->row_array();
		
	} 
    public function dep_wise_unit($deployment_id) {
        return $this    ->db                       
                        ->join('battalions','battalions.battalions_id=appointments.battalions_id')
                        ->where('appointments.battalions_id',$deployment_id)
                        ->get('appointments')
                        ->result_array();
    }    
    function update_designation($update_user, $id){
            return $this->db->where('designations_id',$id)->update('designations',$update_user);
    } 
    function delete_designation($user_type) {
        return $this->db->where('designations_id', $user_type)->delete('designations');
    }
     /* ################# Designation Section End #################### */
    
    /* ################# Rank Section Start #################### */
    function get_rank() {
        return $this->db->get('ranks')->result_array();
    }    
    function update_rank($update_user, $id){
            return $this->db->where('ranks_id',$id)->update('ranks',$update_user);
    } 
    function delete_rank($user_type) {
        return $this->db->where('ranks_id', $user_type)->delete('ranks');
    }
     /*  ################# Rank Section End ################# */
    
    /* ################# Wing Section Start #################### */
    function get_wing() {
        return $this->db->get('wings')->result_array();
    }    
    function update_wing($update_user, $id){
            return $this->db->where('wings_id',$id)->update('wings',$update_user);
    } 
    function delete_wing($user_type) {
        return $this->db->where('wings_id', $user_type)->delete('wings');
    }
     /*  ################# Wing Section End ################# */
    
    
    /* ################# battalion Section Start #################### */
    function get_battalion() {
        return $this->db->join('wings','wings.wings_id=battalions.wings_id')->get('battalions')->result_array();
    }    
    function get_id_wise_battalion_info($deployement_id) {
		return $this-> db
			->join('wings','wings.wings_id=battalions.wings_id')
			->where('battalions.battalions_id',$deployement_id)
			->get('battalions')->row_array();
		
	} 
    function update_battalion($update_user, $id){
            return $this->db->where('battalions_id',$id)->update('battalions',$update_user);
    } 
    function delete_battalion($user_type) {
        return $this->db->where('battalions_id', $user_type)->delete('battalions');
    }
     /*  ################# battalion Section End ################# */
    
    
    
    /* ################# rt_officer Section Start #################### */
    function get_rt_officer() {
        return $this->db
                        ->join('battalions','battalions.battalions_id=rt_officers.battalions_id')
                        ->join('wings','wings.wings_id=battalions.wings_id')
                        ->get('rt_officers')
                        ->result_array();
    }  
    function get_id_wise_rt_officer_info($deployement_id) {
		return $this-> db
			->join('battalions','battalions.battalions_id=rt_officers.battalions_id')
                        ->where('rt_officers.rt_officers_id',$deployement_id)
			->get('rt_officers')->row_array();
		
	} 
    function update_rt_officer($update_user, $id){
            return $this->db->where('rt_officers_id',$id)->update('rt_officers',$update_user);
    } 
    function delete_rt_officer($user_type) {
        return $this->db->where('rt_officers_id', $user_type)->delete('rt_officers');
    }
     /*  ################# rt_officer Section End ################# */
    
    
    /* ################# appointment Section Start #################### */
    function get_appointment() {
        return $this->db->join('battalions','battalions.battalions_id=appointments.battalions_id')->join('wings','wings.wings_id=battalions.wings_id')->get('appointments')->result_array();
    } 
    function get_id_wise_appointment_info($deployement_id) {
		return $this-> db
                        ->join('battalions','battalions.battalions_id=appointments.battalions_id')			
			->where('appointments.appointments_id',$deployement_id)
			->get('appointments')->row_array();
		
	} 
    function update_appointment($update_user, $id){
            return $this->db->where('appointments_id',$id)->update('appointments',$update_user);
    } 
    function delete_appointment($user_type) {
        return $this->db->where('appointments_id', $user_type)->delete('appointments');
    }
     /*  ################# appointment Section End ################# */
    
    
    function get_user_type() {
        return $this->db->get('roles')->result_array();
    }
    function update_user_type($update_user, $id){
        
            return $this->db->where('roleid',$id)->update('roles',$update_user);
    }   
    
    function delete_user_type($user_type) {
        return $this->db->where('roleid', $user_type)->delete('roles');
    }
    function get_reference_details() {
            return $this-> db->get('reference_details')->result_array();
            
        }
    function get_id_wise_reference_details($user_id) {
            return $this->db
                        ->where('reference_details_id', $user_id)                   
                        ->get('reference_details')->row_array();
            
        }   
      function update_reference_details_info($update_user, $reference_details_id){
              //var_dump($update_user,$user_id);die;
		return $this->db->where('reference_details_id',$reference_details_id)->update('reference_details',$update_user);
	}   
     function delete_reference_detail($user_type) {
        return $this->db->where('reference_details_id', $user_type)->delete('reference_details');
    }    
    function get_user() {
            return $this-> db->join('roles','roles.roleid=users.user_type')->get('users')->result_array();
            
        }
		
	
	function get_user_by_battalion($battalions_id) {
        return $this->db->join('battalions','battalions.battalions_id=users.battalions_id')->join('roles','roles.roleid=users.user_type')->where('battalions.battalion', $battalions_id)->get('users')->result_array();           
	}
	function get_id_wise_user($user_id) {
		return $this-> db
			->join('roles','roles.roleid=users.user_type')
			->join('designations','designations.designations_id=users.designations_id')
			->join('battalions','battalions.battalions_id=users.battalions_id')
			->join('appointments','appointments.appointments_id=users.appointments_id')
			->join('rt_officers','rt_officers.rt_officers_id=users.rt_officers_id')
			->join('wings','wings.wings_id=users.wings_id')
			->join('ranks','ranks.ranks_id=users.ranks_id')
			->where('users.id',$user_id)
			->get('users')->row_array();
		
	}   
	function update_user_info($update_user, $user_id){
		//var_dump($update_user,$user_id);die;
		return $this->db->where('id',$user_id)->update('users',$update_user);
	}
        function update_user_wise_password($update_password, $user_id){
              return $this->db->where('id',$user_id)->update('users',$update_password);
	}
        function get_existing_rt_officer($designation) {
            return $this->db
                            ->where('rt_officer', $designation)                         
                            ->get('rt_officers')
                            ->row_array();
        }
        function get_existing_rank($designation) {
            return $this->db
                            ->where('rank', $designation)                         
                            ->get('ranks')
                            ->row_array();
        }
        function get_existing_wing($designation) {
            return $this->db
                            ->where('wing', $designation)                         
                            ->get('wings')
                            ->row_array();
        }
        function get_existing_battalion($designation) {
            return $this->db
                            ->where('battalion', $designation)                         
                            ->get('battalions')
                            ->row_array();
        }
        function get_existing_unit($designation) {
            return $this->db
                            ->where('appointment', $designation)                         
                            ->get('appointments')
                            ->row_array();
        }
        function get_existing_designation($designation) {
            return $this->db
                            ->where('designation', $designation)                         
                            ->get('designations')
                            ->row_array();
        }
        function get_existing_emails($email) {
            return $this->db
                            ->where('email', $email)                         
                            ->get('users')
                            ->row_array();
        }
        function get_same_emails($email) {
            return $this->db
                            ->where('email', $email)                         
                            ->get('users')
                            ->row_array();
        }

        function delete_user($user)
        {
	    return $this-> db-> where('id', $user)-> delete('users');
        }  
       function get_menu() {
            return $this-> db
                    
                    ->get('menus')->result_array();
            
        }
       function delete_menu($menu){
           
	    return $this-> db-> where('menuid', $menu)-> delete('menus');
        } 
        function get_id_wise_menu($menus) {
            return $this->db->where('menuid',$menus)->get('menus')->row_array();
            
        } 
//        function check_existing_role($menus) {
//            
//            return $this->db
//                    ->where('menuid',$menus)
//                    ->get('role')
//                    ->result_array();
//        }    
    function edit_menu($menu_update,$id) { 
       
        return $this -> db -> where('menuid',$id)->update('menus',$menu_update);
    }
    function get_function() {
            return $this-> db->get('function')->result_array();
            
        }
    function menu_role_list() {   
        
            return $this-> db ->get('roles')->result_array();
            
        }
    function get_menu_role($role) {
        
            return $this->db
                     ->join('menus','menus.menuid=menu_role.menuid')
                     ->where('roleid',$role)
                     ->get('menu_role')
                     ->result_array();
        } 
      function get_function_role($role) {
        
            return $this->db
                     ->join('function','function.function_id=function_access.function_id') 
                     ->where('roleid',$role)
                     ->get('function_access')
                     ->result_array();
        }    
    function get_role_wise_menu($role_id) {        
         return $this->db
                     ->join('roles','roles.roleid=menu_role.roleid')
                     ->where('menu_role.roleid',$role_id)
                     ->get('menu_role')
                     ->row_array();
            
        } 
    function get_id_wise_dash_access($role_id) {        
         return $this->db
                     ->join('roles','roles.roleid=dashboard_access.roleid')
                     ->where('dashboard_access.roleid',$role_id)
                     ->get('dashboard_access')
                     ->row_array();
            
        }     
      function get_id_wise_menu_role_menus($role_id) {  
         return $this->db
                     ->select('menu_role.*,menus.*')
                     ->join('menus','menus.menuid=menu_role.menuid')
                     ->where('menu_role.roleid',$role_id)
                     ->get('menu_role')
                     ->row_array();
            
        } 
      function get_id_wise_menu_role_function($role_id) {  
          //var_dump($menu_role_id);die;       
            return $this->db
                    ->select('function_access.*,function.*')
                     ->join('function','function.function_id=function_access.function_id') 
                     ->where('roleid',$role_id)
                     ->get('function_access')
                     ->row_array();
            
        } 
    function delete_existing_menu($role) {
           return $this-> db-> where('roleid', $role)-> delete('menu_role');
            
        }   
    function delete_existing_function($role) {
           return $this-> db-> where('roleid', $role)-> delete('function_access');
            
        }   
        function get_existing_menu($role) {
            return $this->db                   
                     ->where('menu_role.roleid',$role)
                     ->get('menu_role')
                     ->result_array();
            
        }   
       function get_existing_function($role) {
            return $this->db                   
                     ->where('function_access.roleid',$role)
                     ->get('function_access')
                     ->result_array();
            
        }     
    function get_id_wise_function($function) {
            return $this->db->where('function_id',$function)->get('function')->row_array();
            
        }  
     function edit_function($function_update,$id) { 
       
        return $this -> db -> where('function_id',$id)->update('function',$function_update);
    }
    function delete_function($function){
           
	    return $this-> db-> where('function_id', $function)-> delete('function');
        }
      function update_menu_role($update_menu_role,$role_id) { 
       
        return $this -> db -> where('roleid',$role_id)->update('menu_role',$update_menu_role);
    }   
    function update_function_role($update_function_access,$role_id) { 
       
        return $this -> db -> where('roleid',$role_id)->update('function_access',$update_function_access);
    }
    function update_menu_priority($update_menu_priority,$role_id,$menu_id) { 
        //var_dump($update_menu_priority,$role_id,$menu_id);die;
       
        return $this -> db 
                           ->where('roleid',$role_id)
                           ->where('menuid',$menu_id)
                           ->update('menu_role',$update_menu_priority);
    }
    
    
    function get_designation_info($desig_id) {
            return $this->db->where('designations_id', $desig_id)->get('designations')->row_array();            
    } 
    function get_rank_info($rank_id) {
            return $this->db->where('ranks_id', $rank_id)->get('ranks')->row_array();            
    }
    function get_wing_info($wing_id) {
            return $this->db->where('wings_id', $wing_id)->get('wings')->row_array();            
    }
    function get_unit_info($wing_id) {
            return $this->db->where('appointments_id', $wing_id)->get('appointments')->row_array();            
    }
    function get_battalion_info($battalion_id) {
            return $this->db->where('battalions_id', $battalion_id)->get('battalions')->row_array();            
    }
    function get_rt_officer_info($rt_officers_id) {
            return $this->db->where('rt_officers_id', $rt_officers_id)->get('rt_officers')->row_array();            
    }
    function get_user_role_info($role) {
            return $this->db->where('roleid', $role)->get('roles')->row_array();            
    }
    function get_id_wise_wing($id) {
        return $this->db->where('wings_id', $id)->get('wings')->row_array();
    }  
    function get_id_wise_appointment($id) {
        return $this->db->where('appointments_id', $id)->get('appointments')->row_array();
    } 
    function get_id_wise_battalion($id) {
        return $this->db->where('battalions_id', $id)->get('battalions')->row_array();
    } 
    function get_id_wise_rt_officer($id) {
        return $this->db->where('rt_officers_id', $id)->get('rt_officers')->row_array();
    }    
    function get_id_wise_designation($id) {
        return $this->db->where('designations_id', $id)->get('designations')->row_array();
    }
    function get_id_wise_rank($id) {
        return $this->db->where('ranks_id', $id)->get('ranks')->row_array();
    }
    function get_existing_menuss($role) {
            return $this->db    
                    ->join('menus','menus.menuid = menu_role.menuid')
                     ->where('menu_role.roleid',$role)
                     ->get('menu_role')
                     ->result_array();
            
    } 
    public function wing_wise_bat($wing_id) {
        return $this    ->db                       
                        ->join('wings','wings.wings_id=battalions.wings_id')
                        ->where('battalions.wings_id',$wing_id)
                        ->get('battalions')
                        ->result_array();
    } 
    public function bat_wise_units($battalion_id) {
        return $this    ->db                       
                        ->join('battalions','battalions.battalions_id=appointments.battalions_id')
                        ->where('appointments.battalions_id',$battalion_id)
                        ->get('appointments')
                        ->result_array();
    }
    public function unit_wise_designation($unit) {
        return $this    ->db                       
                        ->join('appointments','appointments.appointments_id=designations.appointments_id')
                        ->where('designations.appointments_id',$unit)
                        ->get('designations')
                        ->result_array();
    }
    public function bat_wise_rt_officer($battalion_id) {
        return $this    ->db                       
                         ->join('battalions','battalions.battalions_id=rt_officers.battalions_id')
                        ->where('rt_officers.battalions_id',$battalion_id)
                        ->get('rt_officers')
                        ->result_array();
    }
    function update_crime($update_user, $id){
        
            return $this->db->where('id',$id)->update('tbl_crimeinfo',$update_user);
    } 
    function get_id_wise_crime($id) {
        return $this->db->where('id', $id)->get('tbl_crimeinfo')->row_array();
    }  
    function get_crime() {
        return $this->db->get('tbl_crimeinfo')->result_array();
    } 
    function get_existing_crime($designation) {
            return $this->db
                            ->where('crime_name', $designation)                         
                            ->get('tbl_crimeinfo')
                            ->row_array();
        }
    function delete_crime($id) {
        return $this->db->where('id', $id)->delete('tbl_crimeinfo');
    }
    function get_id_wise_sub_crime_info($id) {
        return $this->db
               ->select('tbl_crimeinfo.id as crime_id, tbl_crimeinfo.*, tbl_subcrimeinfo.id as subcrime_id,tbl_subcrimeinfo.*')
               ->join('tbl_crimeinfo','tbl_crimeinfo.id=tbl_subcrimeinfo.crimeid')
                ->where('tbl_subcrimeinfo.id', $id)
                ->get('tbl_subcrimeinfo')
                ->row_array();
    }
    function get_sub_crime() {
        return $this->db
                       ->select('tbl_crimeinfo.id as crime_id, tbl_crimeinfo.*, tbl_subcrimeinfo.id as subcrime_id,tbl_subcrimeinfo.*')
                       ->join('tbl_crimeinfo','tbl_crimeinfo.id=tbl_subcrimeinfo.crimeid')
                       ->get('tbl_subcrimeinfo')
                       ->result_array();
    } 
    function update_sub_crime($update_user, $id){
        
            return $this->db->where('id',$id)->update('tbl_subcrimeinfo',$update_user);
    } 
    function delete_sub_crime($id) {
        return $this->db->where('id', $id)->delete('tbl_subcrimeinfo');
    }
    
}
?>