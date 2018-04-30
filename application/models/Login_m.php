<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login_m extends CI_Model{

    public function login_valid($email,$password){
		
		// print_r($email);
		// echo '---------';
		// print_r($password);
		// die;
		
		$this->db->select('tbl_authorizedofficers.*');
		$this->db->from('tbl_authorizedofficers');
		
	
		$this->db->where('password', $password);
		$this->db->where('email', $email);
        
		$query = $this->db->get();
		
		
		// echo $this->db->last_query();
		// die;
		
        if($query->num_rows() === 1 ){
            return $query->row_array();
            return false;
        }
    }
}