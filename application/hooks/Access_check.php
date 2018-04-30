<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ActicityHook {

    var $CI;
    var $data;

    function __construct() {
        $id=$this->CI = & get_instance();
        $this->CI->load->helper('url'); 
    }

    function check() {
        $class = '';
        $method = '';
        $this->CI = & get_instance();
        $class = $this->CI->router->fetch_class();
        $method = $this->CI->router->fetch_method();    
        if ($class != 'auth') {
            if (!isset($this->CI->session)) {
                $this->CI->load->library('session');
                $this->CI->load->library('database');
            }
            if ($this->CI->session->userdata('user_type') == TRUE) {
                $class = $this->CI->router->fetch_class();
                $method = $this->CI->router->fetch_method();
                $user_role = $this->CI->session->userdata('user_type');
                $user_id = $this->CI->session->userdata('user_id');
                $menus = $this->CI->db
                        ->join('menus', 'menus.menuid=menu_role.menuid')
                        ->where('roleid', $user_role)
                        ->order_by('menu_role.priority')
                        ->get('menu_role')
                        ->result_array();
                $flag = 0;
                if (count($menus) == 0) {
                    $flag = 1;
                } else {
                    $flag = 0;
                }
                foreach ($menus as $menu):
                    $m = explode('/', $menu['menu_url']);
//                echo'<br>';
                    if ($m[0] == $class && $m[1] == $method) {
                        $flag = 1;
                        break;
                    } else {
                        $flag = 0;
                    }
                endforeach;
               if ($flag != 1) {
                    $functions = $this->CI->db
                            ->join('function', 'function.function_id=function_access.function_id')
                            ->where('roleid', $user_role)
                            ->order_by('function_access.priority')
                            ->get('function_access')
                            ->result_array();
                    foreach ($functions as $function):
                        if ($function['controller'] == $class && $function['function'] == $method) {
                            $flag = 1;
                            break;
                        }
                    endforeach;
                }

                if ($flag == 0) {
                    redirect($this->CI->load->view('access_denay'));
                }
            } else if ($this->CI->session->userdata('user_type') == FALSE) {
                redirect();
            }
        } else {
            
        }
            
            
            
        }
    

}
