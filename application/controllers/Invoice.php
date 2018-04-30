<?php 
   class Invoice extends CI_Controller
   { 
		function __construct() 
		{ 
			parent::__construct(); 
			$this->load->model('InvoiceModel');
			$this->load->library('encrypt');

			if(!($this->session->userdata('user_id')))
			{
				redirect('login');
			}

		}
		
		public function index()
		{
			$invoices = $this->InvoiceModel->getAllInvoice();
			$this->load->view('layout/header');
			$this->load->view('invoice/allInvoice',array('invoices' =>$invoices)); 
			$this->load->view('layout/footer');
		}
		
		public function viewInvoice($decryptInvoiceId)
		{
			$invoices = $this->InvoiceModel->getInvoiceById($decryptInvoiceId);
		
		
			//Decrypting invoiceId
			
			//Receiving GET data----------------------
			// $encodeedInvoiceId = $this->input->get('encodeedInvoiceId');
			$encodeedInvoiceId = $this->encrypt->encode($decryptInvoiceId);
			
			if($decryptInvoiceId == NULL )
			{
				die('Invalid invoice number!');
			}
			
			// echo '<pre/>';
			// print_r($decryptInvoiceId);
			// die('@line:25');
			
			//Getting all invoices
			$invoiceDetails 		= $this->InvoiceModel->getInvoiceById($decryptInvoiceId);
			if($invoiceDetails == NULL )
			{
				die('Invalid invoice number!');
			}
			
			$address	   			= 'Wakil Tower (8th Floor)<br>Ta-131 Gulshan - Badda Link Road<br>Gulshan, Dhaka-1212';
			$contact_name 			= $invoiceDetails['contact_name'];
			$clientAddress			= $invoiceDetails['address'];
			$email_address 			= $invoiceDetails['email_address'];
			$phone 					= $invoiceDetails['phone'];
			$invoiceId 				= $invoiceDetails['id'];
			$invoice_number 		= $invoiceDetails['invoice_number'];
			$date 					= $invoiceDetails['invoice_date'];
			$invoiceDate			= $invoiceDetails['invoice_date'];
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
			// print_r($email_body);
			// die;
			
			$this->create_pdf($email_body);
			// $mypdf = new mPDF();
			// $mypdf->WriteHTML($html_data);
			// $mypdf->Output($file_name . 'pdf', 'D');
			
			$this->load->view('layout/header');
			$this->load->view('invoice/viewInvoice',array('invoice_template' =>$email_body, 'invoice' =>$invoiceDetails)); 
			$this->load->view('layout/footer');
			
		}
		
		function create_pdf($html_data, $file_name = "")
		{
			if($file_name == ""){
				$file_name = 'report' . date('dMY');
			}
			$this->load->helper('mpdf');
			$this->WriteHTML($html_data);
			$this->Output($file_name . 'pdf', 'D');
		}
	
	
     
	  
	}
