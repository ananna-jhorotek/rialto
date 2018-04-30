<?php
class General_model extends CI_Model

{
	function __construct() { 
        parent :: __construct();
    }

    function update($id, $column, $table, $data) {
        return $this->db->where($column, $id)->update($table, $data);
    }

    function getInvoiceNumber($id) {
        return $this->db->where('purchase_id', $id)->get('purchase')->row_array();
    }

    function get_sell_InvoiceNumber($id) {
        return $this->db->where('sell_id', $id)->get('sell')->row_array();
    }

    function check_current_password($prev, $id) {
        return $this->db->select('count(id)as c')->where('password', $prev)->where('id', $id)->get('users')->row_array();
    }
    function change_password($var, $id) {
        $this->db->where('id', $id);
        return $this->db->update('users', $var);
    }
        
        
}
?>