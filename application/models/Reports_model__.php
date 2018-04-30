<?php
/**
 * Created by PhpStorm.
 * User: Shamim Ahammed
 * Date: 20-11-2017
 * Time: 2:17 PM
 */
class Reports_model extends CI_Model{	

	public function getData($dataArray){

        $this->db->insert('tbl_requestlogs',$dataArray);
        //return true;

    }
	
	public function getParentData($parent){
		return $this->db
                ->join('designations','designations.designations_id=users.designations_id','left')
                ->join('battalions','battalions.battalions_id = users.battalions_id','left')
                ->join('appointments','appointments.appointments_id=users.appointments_id','left')
                ->join('rt_officers','rt_officers.rt_officers_id=users.rt_officers_id','left')
                ->join('wings','wings.wings_id=users.wings_id','left')
                ->join('ranks','ranks.ranks_id=users.ranks_id','left')
                ->join('roles','roles.roleid=users.user_type','left')
                ->where('active','1')
                ->where('users.id',$parent)
                ->get('users')
                ->row_array(); 
       
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
       
		$this->db->select('*');
		$this->db->where('users.id',$id);
        $query = $this->db->get('users');

        if($query->num_rows() > 0){
            return $query->row_array();
        }else{
            return false;
        }

    }
	

}

?>