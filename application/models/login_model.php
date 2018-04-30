<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class login_model extends CI_Model {

    function user_check($username,$password) {
        return $this->db
                ->join('designations','designations.designations_id=users.designations_id','left')
                ->join('battalions','battalions.battalions_id = users.battalions_id','left')
                ->join('appointments','appointments.appointments_id=users.appointments_id','left')
                ->join('rt_officers','rt_officers.rt_officers_id=users.rt_officers_id','left')
                ->join('wings','wings.wings_id=users.wings_id','left')
                ->join('ranks','ranks.ranks_id=users.ranks_id','left')
                ->join('roles','roles.roleid=users.user_type','left')
                ->where('active','1')
                ->where('email', $username)
                ->where('password', $password)
                ->get('users')
                ->row_array(); 
   }
}