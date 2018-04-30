<?php
/**
 * Created by Notepadd++.
 * User: Shamim Ahammed
 * Date: 16-10-2017
 * Time: 10:38 PM
 */
class TransactionModel extends CI_Model
{	
    public function transactionStore($transactionArray){
		$this->db->insert('invoice_transactions_tbl', $transactionArray);
        $insert_id = $this->db->insert_id();
   		return  $insert_id;  
    }

	public function transactionUpdate($transactionArray)	{
		$this->db->where('invoice_transactions_tbl.transaction_id', $transactionArray['transaction_id']);
	    $this->db->update('invoice_transactions_tbl', $transactionArray);   
	    return 1;       
	}

	public function getTransaction($transactionId){                $this->db->select('*');        $this->db->from('invoice_transactions_tbl');        $this->db->where('invoice_transactions_tbl.transaction_id',$transactionId);        $result = $this->db->get()->row_array();        // $query = $this->db->last_query();        // echo $query;        // die();        return $result;     }
}