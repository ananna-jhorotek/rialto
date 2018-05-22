<?php
class Request_model extends CI_Model

{
	function __construct()
	{
		parent :: __construct();
	}
        
        function get_end_user_new_request_data($target_number,$request_by,$crime_type,$start_date,$end_date) {
            $this->db->join('users','users.id=tbl_req_mno_msisdn.requested_for');
            $this->db->join('battalions', 'battalions.battalions_id=users.battalions_id');
            $this->db->join('designations', 'designations.designations_id=users.designations_id');
            $this->db->join('tbl_crimeinfo', 'tbl_crimeinfo.id=tbl_req_mno_msisdn.reason_crime_type');          
            $this->db->where('requested_by', $this->session->userdata('user_id'));            
            $this->db->where('tbl_req_mno_msisdn.request_status','New');
            if($target_number !='')
                $this->db->where('tbl_req_mno_msisdn.msisdn',$target_number);
            if($request_by !='')
                $this->db->where('users.name',$request_by);
            if($crime_type !='')
                $this->db->where('tbl_crimeinfo.reason_crime_type',$crime_type);
            if($start_date !='')
                $this->db->where('tbl_req_mno_msisdn.date_requested >=',$start_date);   
            if($end_date !='')
                $this->db->where('tbl_req_mno_msisdn.date_requested <=',$end_date);   
            
           return $this->db->get('tbl_req_mno_msisdn')->result_array();            
        }  
	function get_super_admin_new_request_data($target_number,$request_by,$crime_type,$start_date,$end_date) {
            $this->db->join('users','users.id=tbl_req_mno_msisdn.requested_for');
            $this->db->join('battalions', 'battalions.battalions_id=users.battalions_id');
            $this->db->join('designations', 'designations.designations_id=users.designations_id');
            $this->db->join('tbl_crimeinfo', 'tbl_crimeinfo.id=tbl_req_mno_msisdn.reason_crime_type'); 
            $this->db->where('tbl_req_mno_msisdn.request_status','New');
            if($target_number !='')
                $this->db->where('tbl_req_mno_msisdn.msisdn',$target_number);
            if($request_by !='')
                $this->db->where('users.name',$request_by);
            if($crime_type !='')
                $this->db->where('tbl_crimeinfo.reason_crime_type',$crime_type);
            if($start_date !='')
                $this->db->where('tbl_req_mno_msisdn.date_requested >=',$start_date);   
            if($end_date !='')
                $this->db->where('tbl_req_mno_msisdn.date_requested <=',$end_date);   
            
           return $this->db->get('tbl_req_mno_msisdn')->result_array();            
        }  	  
        function get_id_wise_new_request_data_sas($transaction_id) {
            return $this-> db
                           ->join('users','users.id=tbl_req_mno_msisdn.requested_for')
                            ->join('battalions', 'battalions.battalions_id=users.battalions_id')
                            ->join('appointments', 'appointments.battalions_id=battalions.battalions_id')
                            ->join('designations', 'designations.designations_id=users.designations_id')
                            ->join('tbl_crimeinfo', 'tbl_crimeinfo.id=tbl_req_mno_msisdn.reason_crime_type') 
                            ->join('tbl_subcrimeinfo', 'tbl_subcrimeinfo.id=tbl_req_mno_msisdn.reason_crime_subtype')
                            ->where('tbl_req_mno_msisdn.request_id',$transaction_id)
                            ->get('tbl_req_mno_msisdn')->row_array();
            
        } 
		
        function get_id_wise_request_data($transaction_id) {
            return $this-> db                            
                            ->join('users','users.id=tbl_req_mno_msisdn.requested_for')
                            ->join('battalions', 'battalions.battalions_id=users.battalions_id')
                            ->join('appointments', 'appointments.battalions_id=battalions.battalions_id')
                            ->join('designations', 'designations.designations_id=users.designations_id')
                            ->join('tbl_crimeinfo', 'tbl_crimeinfo.id=tbl_req_mno_msisdn.reason_crime_type') 
                            ->join('tbl_subcrimeinfo', 'tbl_subcrimeinfo.id=tbl_req_mno_msisdn.reason_crime_subtype')
                            ->where('tbl_req_mno_msisdn.request_id',$transaction_id)
                            ->get('tbl_req_mno_msisdn')->row_array();
            
        } 
        function get_id_wise_completed_request_data($transaction_id) {
            return $this-> db                            
                            ->select('t1.name as usersname,t2.name as users_name,t1.*,t2.*,tbl_req_mno_msisdn.*,designations.*,tbl_crimeinfo.*,battalions.*,tbl_subcrimeinfo.*')
                            ->join('users as t1','t1.id=tbl_req_mno_msisdn.completed_by')
                            ->join('users as t2','t2.id=tbl_req_mno_msisdn.requested_for')
                            ->join('battalions', 'battalions.battalions_id=t2.battalions_id')
                            ->join('designations', 'designations.designations_id=t2.designations_id')
                            ->join('tbl_crimeinfo', 'tbl_crimeinfo.id=tbl_req_mno_msisdn.reason_crime_type')
                            ->join('tbl_subcrimeinfo', 'tbl_subcrimeinfo.id=tbl_req_mno_msisdn.reason_crime_subtype')
                            ->where('tbl_req_mno_msisdn.request_id',$transaction_id)
                            ->get('tbl_req_mno_msisdn')->row_array();
            
        }
        function get_request_providers_id_wise_completed_request_data($transaction_id) {
            return $this-> db                            
                            ->select('t1.name as usersname,t2.name as users_name,t1.*,t2.*,tbl_req_mno_msisdn.*,designations.*,tbl_crimeinfo.*,battalions.*,tbl_subcrimeinfo.*')
                            ->join('users as t1','t1.id=tbl_req_mno_msisdn.requested_by')
                            ->join('users as t2','t2.id=tbl_req_mno_msisdn.requested_for')
                            ->join('battalions', 'battalions.battalions_id=t2.battalions_id')
                            ->join('designations', 'designations.designations_id=t2.designations_id')
                            ->join('tbl_crimeinfo', 'tbl_crimeinfo.id=tbl_req_mno_msisdn.reason_crime_type')
                            ->join('tbl_subcrimeinfo', 'tbl_subcrimeinfo.id=tbl_req_mno_msisdn.reason_crime_subtype')
                            ->where('tbl_req_mno_msisdn.request_id',$transaction_id)
                            ->get('tbl_req_mno_msisdn')->row_array();
            
        }
        function get_pending_request_data($target_number,$request_by,$crime_type,$start_date,$end_date) {
            $this->db->join('users','users.id=tbl_req_mno_msisdn.requested_by');
            $this->db->join('roles', 'roles.roleid=users.user_type'); 
            $this->db->where('tbl_req_mno_msisdn.request_status','pending');   
            if($target_number !='')
                $this->db->where('tbl_req_mno_msisdn.msisdn',$target_number);
            if($request_by !='')
                $this->db->where('users.name',$request_by);
            if($crime_type !='')
                $this->db->where('tbl_req_mno_msisdn.reason_crime_type',$crime_type);
            if($start_date !='')
                $this->db->where('tbl_req_mno_msisdn.date_requested >=',$start_date);   
            if($end_date !='')
                $this->db->where('tbl_req_mno_msisdn.date_requested <=',$end_date);  
            
           return $this->db->get('tbl_req_mno_msisdn')->result_array();            
        }
        function get_admin_dash_pending_request_data($target_number,$request_by,$crime_type,$start_date,$end_date) {
            $this->db->select('users.*, tbl_req_mno_msisdn.*,designations.*,tbl_crimeinfo.*,battalions.*');
            $this->db->join('users','users.id=tbl_req_mno_msisdn.requested_for');
            $this->db->join('battalions', 'battalions.battalions_id=users.battalions_id');
            $this->db->join('designations', 'designations.designations_id=users.designations_id');
            $this->db->join('tbl_crimeinfo', 'tbl_crimeinfo.id=tbl_req_mno_msisdn.reason_crime_type');
			$this->db->where('tbl_req_mno_msisdn.battalions_id', $this->session->userdata('battalion_id'));
            $this->db->where('general_type', 1);
            $this->db->where('tbl_req_mno_msisdn.request_status','New');
            $this->db->where('date_requested <', date('Y-m-d'));                                                                
            if($target_number !='')
                $this->db->where('tbl_req_mno_msisdn.msisdn',$target_number);
            if($request_by !='')
                $this->db->where('users.name',$request_by);
            if($crime_type !='')
                $this->db->where('tbl_req_mno_msisdn.reason_crime_type',$crime_type);
            if($start_date !='')
                $this->db->where('tbl_req_mno_msisdn.date_requested >=',$start_date);   
            if($end_date !='')
                $this->db->where('tbl_req_mno_msisdn.date_requested <=',$end_date);  
            
           return $this->db->get('tbl_req_mno_msisdn')->result_array();            
        }
        function get_completed_request_data($target_number,$request_by,$crime_type,$start_date,$end_date) {
            $this->db->select('t1.name as usersname,t2.name as users_name,t1.*,t2.*,tbl_req_mno_msisdn.*,designations.*,tbl_crimeinfo.*,battalions.*,tbl_subcrimeinfo.*');
            $this->db->join('users as t1','t1.id=tbl_req_mno_msisdn.completed_by');
            $this->db->join('users as t2','t2.id=tbl_req_mno_msisdn.requested_for');
            $this->db->join('battalions', 'battalions.battalions_id=t2.battalions_id');
            $this->db->join('designations', 'designations.designations_id=t2.designations_id');
            $this->db->join('tbl_crimeinfo', 'tbl_crimeinfo.id=tbl_req_mno_msisdn.reason_crime_type');
            $this->db->join('tbl_subcrimeinfo', 'tbl_subcrimeinfo.id=tbl_req_mno_msisdn.reason_crime_subtype');
            $this->db->where('tbl_req_mno_msisdn.request_status','completed');         
            if($target_number !='')
                $this->db->where('tbl_req_mno_msisdn.msisdn',$target_number);
            if($request_by !='')
                $this->db->where('users.users_name',$request_by);
            if($crime_type !='')
                $this->db->where('tbl_crimeinfo.reason_crime_type',$crime_type);
            if($start_date !='')
                $this->db->where('tbl_req_mno_msisdn.date_requested >=',$start_date);   
            if($end_date !='')
                $this->db->where('tbl_req_mno_msisdn.date_requested <=',$end_date);  
            
           return $this->db->get('tbl_req_mno_msisdn')->result_array();            
        }        
        public function get_auto_target_number_searched($get_name) {
        $this->db->select('tbl_req_mno_msisdn.msisdn');
        //$this->db->where('customer.customer_current_balance <',0);
        $this->db->from('tbl_req_mno_msisdn');        
        $this->db->like('msisdn', $get_name);        
        return $this->db->get()->result_array();
    }    
    function update_request_info($update_request_info, $request_id){
		return $this->db->where('request_id',$request_id)->update('tbl_req_mno_msisdn',$update_request_info);
	}
       
}
?>