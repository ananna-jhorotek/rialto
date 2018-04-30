<?php
/**
 * Created by PhpStorm.
 * User: Sanker Saha
 * Date: 04-02-2017
 * Time: 6:49 PM
 */
class Logout extends My_Controller{

    public function index(){
        $this->session->unset_userdata('user_id');
        return redirect('login');
    }
}