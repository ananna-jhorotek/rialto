<?php
/**
 * Created by PhpStorm.
 * User: Shamim Ahammed
 * Date: 20-11-2017
 * Time: 2:17 PM
 */
class RequestLogs_model extends CI_Model{	

	public function storeLogs($dataArray){

        $this->db->insert('tbl_requestlogs',$dataArray);
        //return true;

    }

	public function storeActivitesLogs($dataArray){

        $this->db->insert('tbl_activities',$dataArray);
        //return true;

    }
	
	
	

}