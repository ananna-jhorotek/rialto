<?php

class EmailSender
{
	public function __construct()
	{
		$this->CI = & get_instance();
		$this->CI->load->library('encrypt');
	}
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

		$this->CI->load->library('email'); 

		$this->CI->email->initialize($config);

		$this->CI->email->set_newline("\r\n");
		$this->CI->email->from($sender);
		$this->CI->email->to($to);
		$this->CI->email->subject($subject);
		$this->CI->email->message($body);
		if(!$this->CI->email->send())
		{
			show_error($this->CI->email->print_debugger());
		} 
	}
	
	
	  
	  public function send_mail() { 

         // print_r($_POST);
         // die();

		$from_email    = "invoice@jhorotek.com"; 
		$to_email      = $this->CI->input->post('email'); 
		$email_body    = $this->CI->input->post('body');
		$invoiceId     = $this->CI->input->post('id'); 
		$email_status     = $this->CI->input->post('email_status'); 
		$invoiceDate   = date("M d, Y");
		$address   = 'Wakil Tower (8th Floor)<br>
                           Ta-131 Gulshan - Badda Link Road<br>
                           Gulshan, Dhaka-1212';
		$dueDate   = date("M d, Y", strtotime("+1 week"));

      

		$find    = array('{invoiceId}','{date}','{address}','{dueDate}');
		$replace = array($invoiceId,$invoiceDate,$address,$dueDate);

		$email_body = str_replace($find,$replace,$this->CI->config->item('email_body'));
		


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
         $this->CI->load->library('email'); 

         $this->CI->email->initialize($config);
   
         $this->CI->email->set_newline("\r\n");
         $this->CI->email->from($from_email);
         $this->CI->email->to($to_email);
         $this->CI->email->subject('invoice');
         $this->CI->email->message($email_body);

         //Send mail 
         if($this->CI->email->send())
         {
         $this->CI->session->set_flashdata("email_sent","Email sent successfully.");
         $this->CI->InvoiceModel->updateEmailStatusById($invoiceId,$email_status);
         }
         else
         {
         $this->CI->session->set_flashdata("email_sent","Error in sending Email."); 
         }
         redirect(base_url('Invoice/index'));
      } 
   
	
	  
	public function bulkEmail($mailArray)
	{
		// echo '<pre/>';
		// print_r($mailArray);
		// die('LOL');

		foreach($mailArray as $mail)
		{
			// echo '<pre>';
			// print_r($mail);
			// echo '</pre>';
			// die('LOL');

			$encryptInvoiceId = $this->CI->encrypt->encode($mail['invoice_number']);
			$encodeedInvoiceId  = urlencode($encryptInvoiceId);

			$from_email    	= "invoice@jhorotek.com"; 
			$to_email   	= $mail['email_address']; 
			$encodeedInvoiceId  = urlencode($encryptInvoiceId);
			$invoiceId     	= $encryptInvoiceId;
			$invoiceDate   	= date("M d, Y");
			$address	   	= 'Wakil Tower (8th Floor)<br>Ta-131 Gulshan - Badda Link Road<br>Gulshan, Dhaka-1212';
			$dueDate   		= date("M d, Y", strtotime("+1 week"));


			// $mail = $this->CI->InvoiceModel->getInvoiceById($this->input->post('id'));
			
			/*		
				[unit_price] => 12000
				[unit_price_without_tax] => 12000
				[discount] => 0
				[total_without_tax] => 7742.4
				[tax_rate] => VAT
				[tax] => 1161.36
				[line_total] => 8903.76
			*/
			
			$contact_name 			= $mail['contact_name'];
			$clientAddress 			= $mail['address'];
			$email_address 			= $mail['email_address'];
			$phone 					= @$mail['phone'];
			$invoice_number 		= $mail['invoice_number'];
			$date 					= $mail['Invoice_date'];
			$dueDate 				= $mail['due_date'];
			$unit_price 			= $mail['unit_price'];
			$unit_price_without_tax = $mail['unit_price_without_tax'];
			$total_without_tax 		= $mail['total_without_tax'];
			$line_total 			= $mail['line_total'];
			$tax 					= $mail['tax'];
			$description 			= $mail['description'];
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
			
			
			$emailTemplate = $this->CI->load->view('template/email', array('value' => $mail) , true);
			
			
			$email_body = str_replace($find,$replace,$emailTemplate );

			// echo '<pre/>';
			// print_r($email_body);
			// die;

			// $encryptInvoiceId = $this->CI->encrypt->encode($mail['id']);

			// $from_email    		= "invoice@jhorotek.com"; 
			// $to_email      		= $mail['email']; 
			// $email_body    		= $mail['body'];
			// $encodeedInvoiceId  = urlencode($encryptInvoiceId);
			// $invoiceId     		= $mail['id'];
			// $invoiceDate   		= date("M d, Y");
			// $address   			= 'Wakil Tower (8th Floor)<br>Ta-131 Gulshan - Badda Link Road<br>Gulshan, Dhaka-1212';
			// $dueDate   			= date("M d, Y", strtotime("+1 week"));
			// $paymentbutton		= "<a href='http://localhost/invoice.shurucampus.com/MakePayment/invoice/".$encodeedInvoiceId ."'><button type='button' style='font-size: 24px;background:#0d4684;color:#ffdf74;margin: 15%;border: 1px solid #CCC;width: 184px;height: 184px;padding: 5%;' ><b>Make Payment<b/></button></a>";



			// $find    = array('{encodeedInvoiceId}','{invoiceId}','{date}','{address}','{dueDate}','{PaymentButton}');
			// $replace = array($encodeedInvoiceId, $invoiceId,$invoiceDate,$address,$dueDate,$paymentbutton);

			// $email_body = str_replace($find,$replace,$this->CI->config->item('email_body'));



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
			$this->CI->load->library('email'); 
			$this->CI->email->initialize($config);
			$this->CI->email->set_newline("\r\n");
			$this->CI->email->from($from_email);
			$this->CI->email->to($to_email);
			$this->CI->email->subject('Invoice : Shuru Campus : '. $mail['invoice_number'] .' : '. $mail['contact_name']);
			$this->CI->email->message($email_body);

			//Send mail 
			if($this->CI->email->send())
			{
				// $this->CI->session->set_flashdata("email_sent","Email sent successfully.");
				$this->CI->InvoiceModel->updateEmailStatusById($invoiceId,1);
			}
		}
		
		// redirect(base_url('Invoice/index'));
	} 
   
}
	
?>
