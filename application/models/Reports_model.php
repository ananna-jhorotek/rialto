<?php
/**
 * Created by PhpStorm.
 * User: Shamim Ahammed
 * Date: 20-11-2017
 * Time: 2:17 PM
 */
class Reports_model extends CI_Model{	

	public function getData($user_id){

        $this->db->select('*');
		$this->db->where('requested_by',$user_id);
        return $this->db->get('tbl_req_mno_msisdn')->result_array();;

    }
	
	public function getdDetailedReportData(){

        $this->db->select('*')
		->join('users','users.id=tbl_req_mno_msisdn.requested_by','left');
        return $this->db->get('tbl_req_mno_msisdn')->result_array();

    }

	public function getActivitesLogData(){

        $this->db->select('*');
        return $this->db->get('tbl_activities')->result_array();;

    }

	public function getRequestlogsData($user_id){

        $this->db->select('tbl_requestlogs.*, users.name as requested_by')
		->join('users','tbl_requestlogs.user_id=users.id','left')
		->where('user_id',$user_id);
        return $this->db->get('tbl_requestlogs')->result_array();

    }  
	
	public function getParentData($parent){            
		$this->db->select('*')
		->join('roles','roles.roleid=users.user_type','left')
		->join('designations','designations.designations_id=users.designations_id','left')
		->join('battalions','battalions.battalions_id=users.battalions_id','left')
		->join('appointments','appointments.appointments_id=users.appointments_id','left')
		->join('rt_officers','rt_officers.rt_officers_id=users.rt_officers_id','left')
		->join('wings','wings.wings_id=users.wings_id','left')
		->join('ranks','ranks.ranks_id=users.ranks_id','left')
		->where('users.id',$parent);
        $query = $this->db->get('users');

        if($query->num_rows() > 0){
            return $query->row_array();
        }else{
            return false;
        }

    }
	
	public function getParentByName($name){
       
		$this->db->select('*');
		$this->db->where('users.name',$name);
        $query = $this->db->get('users');

        if($query->num_rows() > 0){
            return $query->row_array();
        }else{
            return false;
        }

    }
	
	public function getParentById($id){
       
		$this->db->select('*')
		->join('roles','roles.roleid=users.user_type','left')
		->join('designations','designations.designations_id=users.designations_id','left')
		->join('battalions','battalions.battalions_id=users.battalions_id','left')
		->join('appointments','appointments.appointments_id=users.appointments_id','left')
		->join('rt_officers','rt_officers.rt_officers_id=users.rt_officers_id','left')
		->join('wings','wings.wings_id=users.wings_id','left')
		->join('ranks','ranks.ranks_id=users.ranks_id','left')
		->where('users.id',$id);
        $query = $this->db->get('users');
		
		// echo '<pre/>';
		// echo $this->db->last_query();
		// print_r($query->result_array());
		// die;

        if($query->num_rows() > 0){
            return $query->row_array();
        }else{
            return false;
        }

    }
    function get_log_data() {
        return $this->db->get('log_details')->result_array();
        
    }	
    function get_self_user_parent($battalion_id,$role_id,$user_id) {
        //var_dump($battalion_id,$role_id,$user_id);die;
        return $this->db->select('parent')->where('battalions_id',$battalion_id)->where('user_type',$role_id)->where('id',$user_id)->get('users')->row_array();
        
    }
    function get_self_user_data($user_id) {
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
    function get_crime_wise_subcrime($crime_type) {
        //var_dump($crime_type);die;
        return $this-> db
                        ->select('tbl_subcrimeinfo.id as subcrime_id,tbl_subcrimeinfo.subcrime_name')
			->join('tbl_crimeinfo','tbl_crimeinfo.id=tbl_subcrimeinfo.crimeid')
                        ->where('tbl_subcrimeinfo.isactive','1')
                        ->where('tbl_subcrimeinfo.crimeid',$crime_type)			
                        ->get('tbl_subcrimeinfo')->result_array();		
        
    }
    

}

?>