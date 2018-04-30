<?php

/**
 * Created by PhpStorm.
 * User: Sanker Saha
 * Date: 04-03-2017
 * Time: 10:38 PM
 */
class InvoiceModel extends CI_Model
{
    public function invoiceStore($invoiceArray){

        $this->db->insert_batch('invoice_temp_tbl',$invoiceArray);
        return $this->db->affected_rows();

    }

    public function smsStoreFromExcel($SMSArray){

        $this->db->insert_batch('msg_outbox',$SMSArray);
        return $this->db->affected_rows();
    }

    public function getAllInvoice(){
        
        $this->db->select('*');
        $this->db->from('invoice_temp_tbl');

        $result = $this->db->get()->result_array();

        // $query = $this->db->last_query();

        // echo $query;
        // die();

        return $result; 
    }

    public function getInvoiceByInvoice($invoiceNumber){
        
        $this->db->select('*');
        $this->db->from('invoice_temp_tbl');
        $this->db->where('invoice_temp_tbl.invoice_number',$invoiceNumber);

        $result = $this->db->get()->row_array();

        // $query = $this->db->last_query();

        // echo $query;
        // die();

        return $result; 
    }

    public function getInvoiceById($invoiceId){
        
        $this->db->select('*');
        $this->db->from('invoice_temp_tbl');
        $this->db->where('invoice_temp_tbl.id',$invoiceId);

        $result = $this->db->get()->row_array();

        // $query = $this->db->last_query();

        // echo $query;
        // die();

        return $result; 
    }

    public function updateEmailStatusById($id,$email_status)
    {
		
		$this->db->set('emailed_status', $email_status);      
        
        $this->db->where('id', $id);
        $this->db->update('invoice_temp_tbl'); 

        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
	
	
	public function insertTransaction($data)
	{

        $this->db->insert('invoice_transactions_tbl', $data);

        $insert_id = $this->db->insert_id();

   		return  $insert_id;       
	}
	
	
    public function updateTransaction($transactionArray)
    {
		
        $this->db->where('invoice_transactions_tbl.transaction_id', $transactionArray['transaction_id']);
        $this->db->update('invoice_transactions_tbl', $transactionArray);
		
        return $this->db->affected_rows();
    }
	

    public function updateinvoice($dataArray)
    {

        if($email_status < 1)
        {
            $this->db->set('emailed_status', 1);
        }
        elseif ($email_status == 1) {
            $this->db->set('emailed_status', 2);
        }
        else
        {
           $this->db->set('emailed_status', 1); 
        }
        
        $this->db->where('id', $id);
        $this->db->update('invoice_temp_tbl'); 

        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
}