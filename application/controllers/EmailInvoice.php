<?php 
   class EmailInvoice extends CI_Controller { 
 
    function __construct(){ 
        parent::__construct(); 
        $this->load->model('InvoiceModel');
		$this->load->library('encrypt');
	} 
		
	public function index() { 	
		$this->load->view('layout/header');
		$this->load->view('invoice/email_form'); 
		$this->load->view('layout/footer');
	} 
  
    // ---------------------THIS PART IS RESPONSIBLE FOR SENDING MAIL----------------
	private function sendMail($to, $subject, $body, $sender, $senderPass)
	{
       $config = Array(
           'protocol' => 'smtp',
			'smtp_host' => 'ssl://anadol.websitewelcome.com',
			'smtp_port' => '465',
			'smtp_user' => 'invoice@jhorotek.com',
			'smtp_pass' => 'jh0r0!invoice',
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE
		);

		$this->load->library('email'); 

		$this->email->initialize($config);

		$this->email->set_newline("\r\n");
		$this->email->from($sender);
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($body);
		if(!$this->email->send())
		{
			show_error($this->email->print_debugger());
		} 
	}
	
	
	  
	public function send_mail(){ 

		// print_r($_POST);
		// die();
		$encryptInvoiceId 	= $this->encrypt->encode($this->input->post('id'));
		$encodeedInvoiceId  = urlencode($encryptInvoiceId);

		$from_email    	= "invoice@jhorotek.com"; 
		$to_email      	= $this->input->post('email'); 
		$email_body    	= $this->input->post('body');
		$invoiceId     	= $encryptInvoiceId;
		$email_status  	= $this->input->post('email_status'); 
		$invoiceDate   	= date("M d, Y");
		$address	   	= 'Wakil Tower (8th Floor)<br>Ta-131 Gulshan - Badda Link Road<br>Gulshan, Dhaka-1212';
		$dueDate   		= date("M d, Y", strtotime("+1 week"));


		$invoiceDetails = $this->InvoiceModel->getInvoiceByInvoice($this->input->post('id'));
		
		// echo '<pre/>';
		// print_r($invoiceDetails);
		// die;
		/*		
			[unit_price] => 12000
			[unit_price_without_tax] => 12000
			[discount] => 0
			[total_without_tax] => 7742.4
			[tax_rate] => VAT
			[tax] => 1161.36
			[line_total] => 8903.76
		*/
		
		$contact_name 			= $invoiceDetails['contact_name'];
		$clientAddress 			= $invoiceDetails['address'];
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
		$PaymentUrl				= site_url('MakePayment/invoice/?encodeedInvoiceId='.$encodeedInvoiceId);
		$PaymentButton			= "<a href='".site_url('MakePayment/invoice/?encodeedInvoiceId='.$encodeedInvoiceId) ."'><button type='button' style='font-size: 24px;background:#0d4684;color:#ffdf74;margin: 11%;border: 1px solid #CCC;width: 200px;height: 200px;' ><b>Make Payment<b/></button></a>";
		
		// echo '<pre/>';
		// print_r($PaymentButton);
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
							'{encodeedInvoiceId}',
							'{PaymentUrl}',
							'{PaymentButton}'
						);
						
		$replace = array($contact_name,$address,$clientAddress,$email_address,$phone,$invoice_number,$date,$dueDate,$unit_price,$unit_price_without_tax,$total_without_tax,$line_total,$invoiceDate,$tax,$description,$encodeedInvoiceId,$PaymentUrl,$PaymentButton);
		
		
		$emailTemplate = $this->load->view('template/email', array('value' => $invoiceDetails) , true);
		
		
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



		//Load email library 
		$this->load->library('email'); 

		$this->email->initialize($config);
		$this->email->set_newline("\r\n");
		$this->email->from($from_email);
		$this->email->to($to_email);
		$this->email->subject('invoice');
		$this->email->message($email_body);

		
		//Send mail 
		if($this->email->send())
		{
			$email_status = $email_status + 1;
			$this->session->set_flashdata("email_sent","Email sent successfully.");
			$this->InvoiceModel->updateEmailStatusById($invoiceId,$email_status);
			
		}
		else
		{
			$this->session->set_flashdata("email_sent","Error in sending Email."); 
		}
		redirect(base_url('Invoice/index'));
	} 
} 
