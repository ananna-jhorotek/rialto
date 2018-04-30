<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MakePayment extends CI_Controller {

    function __construct()
    {
        parent::__construct();        
        $this->load->model('InvoiceModel');
        $this->load->model('TransactionModel');
		$this->config->load('invoiceConfig');
		$this->load->library('encrypt');
    }
	
	public function index(){
		
		echo "Invalid request. Please try again.";
		
	}
	
	
	public function invoice(){
		
		//Decrypting invoiceId
		
		//Receiving GET data----------------------
        $encodeedInvoiceId = $this->input->get('encodeedInvoiceId');
		$decryptInvoiceId = $this->encrypt->decode($encodeedInvoiceId);
		
		if($decryptInvoiceId == NULL )
		{
			die('Invalid invoice number!');
		}
		
		// echo '<pre/>';
		// print_r($decryptInvoiceId);
		// die('@line:25');
		
		//Getting all invoices
		$address	   			= 'Wakil Tower (8th Floor)<br>Ta-131 Gulshan - Badda Link Road<br>Gulshan, Dhaka-1212';
		$invoiceDetails 		= $this->InvoiceModel->getInvoiceByInvoice($decryptInvoiceId);
		$contact_name 			= $invoiceDetails['contact_name'];
		$clientAddress			= $invoiceDetails['address'];
		$email_address 			= $invoiceDetails['email_address'];
		$phone 					= $invoiceDetails['phone'];
		$invoiceId 				= $invoiceDetails['id'];
		$invoice_number 		= $invoiceDetails['invoice_number'];
		$date 					= $invoiceDetails['Invoice_date'];
		$invoiceDate			= $invoiceDetails['Invoice_date'];
		$dueDate 				= $invoiceDetails['due_date'];
		$unit_price 			= $invoiceDetails['unit_price'];
		$unit_price_without_tax = $invoiceDetails['unit_price_without_tax'];
		$total_without_tax 		= $invoiceDetails['total_without_tax'];
		$line_total 			= $invoiceDetails['line_total'];
		$tax 					= $invoiceDetails['tax'];
		$description 			= $invoiceDetails['description'];
		
		$PaymentUrl				= site_url('MakePayment/invoice/?encodeedInvoiceId='.urlencode($encodeedInvoiceId));
		
		$PaymentButton			= "<button type='submit' style='font-size: 24px;background:#0d4684;color:#ffdf74;margin: 11%;border: 1px solid #CCC;width: 200px;height: 200px;' ><b>Make Payment<b/></button>";
		
		// echo '<pre/>';
		// echo $this->db->last_query();
		// print_r($invoiceDetails);
		// die;
		
		$find    = array(
						'{contact_name}',
						'{address}',
						'{clientAddress}',
						'{email_address}',
						'{phone}',
						'{invoice_number}',
						'{Invoice_date}',
						'{due_date}',
						'{unit_price}',
						'{unit_price_without_tax}',
						'{total_without_tax}',
						'{line_total}',
						'{invoiceDate}',
						'{tax}',
						'{description}',
						'{PaymentUrl}',
						'{PaymentButton}'
						);
						
		$replace = array($contact_name,$address,$clientAddress,$email_address,$phone,$invoice_number,$date,$dueDate,$unit_price,$unit_price_without_tax,$total_without_tax,$line_total,$invoiceDate,$tax,$description,$PaymentUrl,$PaymentButton);
		
		
		$emailTemplate = $this->load->view('template/email', array('value' => $invoiceDetails) , true);
		
		
		$email_body = str_replace($find,$replace,$emailTemplate );
		
		// die('LOL');
		// echo '<pre/>';
		print_r($email_body);
		die;
		
	}
	
	
     
	  
	
	public function confirm(){
		
		
		$postArray = $_POST;
		$postArray['store_id'] = $this->config->item('store_id');
		$postArray['tran_id'] = $this->udate();
		
		// echo '<pre>';
		// print_r($postArray);
		// die;
		
			
		$transactionArray['transaction_id'] = $postArray['tran_id'];
		$transactionArray['invoice_id'] = $postArray['invoice_id'];
		$transactionArray['transaction_type'] = '';
		$transactionArray['transaction_amount'] = $postArray['total_amount'];
		$transactionArray['transaction_currency'] = 'BDT';
		$transactionArray['transaction_ip'] = $_SERVER['REMOTE_ADDR'] ;
		$transactionArray['transaction_processor'] = '';
		$transactionArray['transaction_ref'] = '';
		$transactionArray['transaction_user_id'] = '';
		$transactionArray['request_body'] = json_encode($postArray);
		$transactionArray['response_body'] = '';
		
		//Getting all invoices
		$this->InvoiceModel->insertTransaction($transactionArray);
		
		// echo '<pre/>';
		// print_r($allInvoices);
		// die('@line:25');
		
		// $this->load->view('invoice/viewInvoice');
		
	
		
        $this->load->view('invoice/confirming',array('data' =>$postArray)); 
		
	}
	
	
	public function posttest(){
		
		$postArray = $_POST;
		
		echo '<pre>';
		print_r($postArray);
		die;
	}
	
	public function success_live(){
		
		
		$postArray = $_POST;
		
		// echo '<pre>';
		// print_r($postArray);
		// die;
		
			
		$transactionArray['transaction_status'] = $postArray['status'];
		$transactionArray['transaction_id'] = $postArray['tran_id'];
		$transactionArray['transaction_type'] = 'ORDER';
		$transactionArray['transaction_processor'] = 'SSLCOMMERZ';
		$transactionArray['transaction_ref'] = $postArray['bank_tran_id'];
		$transactionArray['response_body'] = json_encode($postArray);
		
		//Getting all invoices
		$this->InvoiceModel->updateTransaction($transactionArray);
		
		// echo '<pre/>';
		// print_r($allInvoices);
		// die('@line:25');
		
		// $this->load->view('invoice/viewInvoice');		
		
		
        $this->load->view('invoice/viewSuccess',array('')); 
		
		
	}
	
	public function success()
	{
		// echo '<pre/>';
		// print_r($_POST);
		// die();
		// $requestInput = file_get_contents('php://input');
		// $requestInput = '{"tran_id":"20171029123550907","val_id":"1710291238050ibDOBzixzDHax9","amount":"8903.76","card_type":"VISA-Dutch Bangla","store_amount":"8636.6472","card_no":"","bank_tran_id":"17102912380501Vqh8kdqpOgmeK","status":"VALID","tran_date":"2017-10-29 12:34:46","currency":"BDT","card_issuer":"","card_brand":"","card_issuer_country":"","card_issuer_country_code":"","store_id":"test_shurucampus01","verify_sign":"30eab0c9b9031609e3029791ba79a669","verify_key":"amount,bank_tran_id,base_fair,card_brand,card_issuer,card_issuer_country,card_issuer_country_code,card_no,card_type,currency,currency_amount,currency_rate,currency_type,risk_level,risk_title,status,store_amount,store_id,tran_date,tran_id,val_id,value_a,value_b,value_c,value_d","currency_type":"BDT","currency_amount":"8903.76","currency_rate":"1.0000","base_fair":"0.00","value_a":"","value_b":"","value_c":"","value_d":"","risk_level":"0","risk_title":"Safe"}
// ';
		$postArray = $_POST;
		// $requestJsonData = json_decode($requestInput);
		// $postArray = (array)$requestJsonData;
		
		
		$transactionArray['transaction_status'] = $postArray['status'];
		$transactionArray['transaction_id'] = $postArray['tran_id'];
		$transactionArray['transaction_type'] = 'ORDER';
		$transactionArray['transaction_processor'] = 'SSLCOMMERZ';
		$transactionArray['transaction_ref'] = $postArray['bank_tran_id'];
		$transactionArray['response_body'] = json_encode($postArray);
		
		//Getting all invoices
		$this->InvoiceModel->updateTransaction($transactionArray);
		
		
		$transactionDetails = $this->TransactionModel->getTransaction($postArray['tran_id']);
		
		$invoiceDetails = $this->InvoiceModel->getInvoiceByInvoice($transactionDetails['invoice_id']);
		
		// echo '<pre/>';
		// print_r($postArray);
		// die();
		
		$encryptInvoiceId 	= $this->encrypt->encode($this->input->post('id'));
		$encodeedInvoiceId  = urlencode($encryptInvoiceId);

		$from_email    			= "invoice@jhorotek.com"; 
		$to_email      			= $invoiceDetails['email_address'];
		$invoiceId     			= $encryptInvoiceId;
		$email_status  			= $this->input->post('email_status'); 
		$invoiceDate   			= date("M d, Y");
		$address	   			= 'Wakil Tower (8th Floor)<br>Ta-131 Gulshan - Badda Link Road<br>Gulshan, Dhaka-1212';
		$card_no 				= @$postArray['card_no'];
		$transactionId 			= $postArray['tran_id'];
		$bank_tran_id 			= $postArray['bank_tran_id'];
		$card_type 				= $postArray['card_type'];
		$contact_name 			= $invoiceDetails['contact_name'];
		$address 				= $invoiceDetails['address'];
		$email_address 			= $invoiceDetails['email_address'];
		$phone 					= $invoiceDetails['phone'];
		$invoiceId 				= $invoiceDetails['id'];
		$invoice_number 		= $invoiceDetails['invoice_number'];
		$date 					= $invoiceDetails['Invoice_date'];
		$dueDate 				= $invoiceDetails['due_date'];
		$unit_price 			= $invoiceDetails['unit_price'];
		$unit_price_without_tax = $invoiceDetails['unit_price_without_tax'];
		$total_without_tax 		= $invoiceDetails['total_without_tax'];
		$line_total 			= $invoiceDetails['line_total'];
		$tax 					= $invoiceDetails['tax'];
		$description 			= $invoiceDetails['description'];
		
		// echo '<pre/>';
		// print_r($invoiceDetails);
		// die;
		
		$find    = array(
						'{transactionId}',
						'{bank_tran_id}',
						'{card_type}',
						'{card_no}',
						'{contact_name}',
						'{email_address}',
						'{invoice_number}',
						'{Invoice_date}',
						'{line_total}',
						'{description}'
						);
						
		$replace = array($transactionId,$bank_tran_id,$card_type,$card_no,$contact_name,$email_address,$invoice_number,$date,$line_total,$description);
		
		
		$emailTemplate = $this->load->view('template/successful', array('value' => $invoiceDetails) , true);
		
		
		$email_body = str_replace($find,$replace,$emailTemplate );

		// echo '<pre/>';
		// print_r($email_body);
		// die;


		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://anadol.websitewelcome.com',
			'smtp_port' => '465',
			'smtp_user' => $from_email,
			'smtp_pass' => 'jh0r0!invoice',
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE
		);

		$from_email    		= "invoice@jhorotek.com"; 
		$to_email   		= $invoiceDetails['email_address'];

		//Load email library 
		$this->load->library('email'); 

		$this->email->initialize($config);
		$this->email->set_newline("\r\n");
		$this->email->from($from_email);
		$this->email->to($to_email);
		$this->email->subject('Invoice : Shuru Campus : '. $invoice_number .' : '. $contact_name );
		$this->email->message($email_body);
		$this->email->send();
		
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");
		$this->email->to('sa.soibal@gmail.com');
		$this->email->from($from_email);
		$this->email->subject('Payment Received : Shuru Campus : '. $invoice_number .' : '. $contact_name );
		$this->email->message($email_body);
		$this->email->send();
		$this->email->send();

		$this->load->view('template/close', array());
		
	} 
	
	public function failed(){
		
		
		$postArray = $_POST;
		
		// echo '<pre>';
		// print_r($postArray);
		// die;
		
			
		$transactionArray['transaction_status'] = $postArray['status'];
		$transactionArray['transaction_id'] = $postArray['tran_id'];
		$transactionArray['transaction_type'] = 'ORDER';
		$transactionArray['transaction_processor'] = 'SSLCOMMERZ';
		$transactionArray['transaction_ref'] = $postArray['bank_tran_id'];
		$transactionArray['response_body'] = json_encode($postArray);
		
		//Getting all invoices
		$this->InvoiceModel->updateTransaction($transactionArray);
		
		// echo '<pre/>';
		// print_r($transactionArray);
		// die('@line:25');
		
		// $this->load->view('invoice/viewInvoice');
		
        $this->load->view('invoice/viewFailed',array('')); 
		
		
	}
	
	
	public function cancel(){
		
		
		$postArray = $_POST;
		
		// echo '<pre>';
		// print_r($postArray);
		// die;
		
			
		$transactionArray['transaction_status'] = $postArray['status'];
		$transactionArray['transaction_id'] = $postArray['tran_id'];
		$transactionArray['transaction_type'] = 'ORDER';
		$transactionArray['transaction_processor'] = 'SSLCOMMERZ';
		$transactionArray['transaction_ref'] = $postArray['bank_tran_id'];
		$transactionArray['response_body'] = json_encode($postArray);
		
		//Getting all invoices
		$this->InvoiceModel->updateTransaction($transactionArray);
		
		
		// $this->load->view('invoice/viewInvoice');
		
        $this->load->view('invoice/viewCencel',array('')); 
		
		
	}
	
	/*
	* Previewing invoice data
	* 
	*/
	
	

	/* Date Function :) */
    function udate()
    {
        $m = explode(' ',microtime());
        list($totalSeconds, $extraMilliseconds) = array($m[1], (int)round($m[0]*1000,3));
        return date("YmdHis", $totalSeconds) . sprintf('%01d',$extraMilliseconds);
    }
	
	
	
}
