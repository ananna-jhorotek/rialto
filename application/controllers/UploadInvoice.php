<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UploadInvoice extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        if(!($this->session->userdata('user_id')))
		{
			redirect('login');
		}
		
        $this->load->model('InvoiceModel');
        $this->load->library('EmailSender');
		$this->load->helper('file');
        

    }
	
	public function index()
	{
        $this->load->view('layout/header');
		$this->load->view('invoice/uploadInvoice');
        $this->load->view('layout/footer');
	}
	

    public function downloadSampleExcel()
    {

		$this->load->helper('download');

		$data = file_get_contents(base_url()."downloads/samplefile.csv");
		$name = 'SampleFile.csv';

		force_download($name, $data);

	}
	
	public function storeInvoiceFromExcel(){
		
		$config = [
			'upload_path'   => './uploads',
			'allowed_types' => 'xls|xlsx|csv',
			'max_size'      => '51200',
			'file_name'     => '123'

		];

		$this->load->library('upload',$config);

		if(!$this->upload->do_upload('excelFile'))
		{
			$upload_error = $this->upload->display_errors();
			$this->load->view('uploadInvoice',compact('upload_error'),true);   
		}
		else
		{
			$fileName   = $this->upload->data('raw_name');
			$this->session->set_userdata('lastExcelFileName',$fileName);

			$fileExt    = $this->upload->data('file_ext');
			$fileNameWithExt = $fileName.$fileExt;

			$filePathWithFileName = BASEPATH.'../uploads/'.$fileNameWithExt;
			
			//load the excel library
			
			 $this->load->library('MyExcel');

			//read file from path
			$objPHPExcel = PHPExcel_IOFactory::load($filePathWithFileName);

			//get only the Cell Collection
			$cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();

			//extract to a PHP readable array format

			foreach ($cell_collection as $cell) 
			{
				
				if($objPHPExcel->cellXfExists($cell));

				$column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn('A,C,D,F,L');
				$row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
				$data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
				//header will/should be in row 1 only. of course this can be modified to suit your need.

				if ($row == 1) {
					$header[$row][$column] = $data_value;
				} else {
					$arr_data[$row][$column] = $data_value;
				}

			}


			//send the data in an array format
			$data['header'] = $header;
			
			$SMSArray = array();
			
			if(isset($arr_data))
			{
				$data['values'] = $arr_data;

				$i=0;
				foreach($data['values']  as $smsData)
				{
					$SMSArray[$i]['contact_name']           = @$smsData['A'];
					$SMSArray[$i]['email_address']      	= @$smsData['B'];
					$SMSArray[$i]['address']      			= @$smsData['C'];
					$SMSArray[$i]['postcode']      			= @$smsData['D'];
					$SMSArray[$i]['city']      				= @$smsData['E'];
					$SMSArray[$i]['registrationnumber']     = @$smsData['F'];
					$SMSArray[$i]['taxId']      			= @$smsData['G'];
					$SMSArray[$i]['invoice_number']      	= @$smsData['H'];
					$SMSArray[$i]['document_type']      	= @$smsData['I'];
					$SMSArray[$i]['allocations']      		= @$smsData['J'];
					$SMSArray[$i]['payment_method']      	= @$smsData['K'];
					$SMSArray[$i]['paid_by']      			= @$smsData['L'];
					$SMSArray[$i]['Invoice_date']      		= @$smsData['M'];
					$SMSArray[$i]['due_date']      			= @$smsData['N'];
					$SMSArray[$i]['description']      		= @$smsData['O'];
					$SMSArray[$i]['item_code']      		= @$smsData['P'];
					$SMSArray[$i]['quantity']      			= @$smsData['Q'];
					$SMSArray[$i]['unit_price']      		= @$smsData['R'];
					$SMSArray[$i]['unit_price_without_tax']	= @$smsData['S'];
					$SMSArray[$i]['discount']      			= @$smsData['T'];
					$SMSArray[$i]['total_without_tax']      = @$smsData['U'];
					$SMSArray[$i]['tax_rate']      			= @$smsData['V'];
					$SMSArray[$i]['tax']      				= @$smsData['W'];
					$SMSArray[$i]['line_total']      		= @$smsData['X'];
					$SMSArray[$i]['currency']      			= @$smsData['Y'];
					$SMSArray[$i]['paid_amount']      		= @$smsData['Z'];
					$SMSArray[$i]['pending_amount']      	= @$smsData['AA'];
					$SMSArray[$i]['charge_details']      	= @$smsData['AB'];
					$SMSArray[$i]['emailed_status']      	= '1';
					
					
					$i++;                       
				}
				
				// echo '<pre/>';
				// print_r($emailArray);
				// die('------------UploadInvoice');

				
				if(is_array($SMSArray) && !empty($SMSArray))
				{
					//Storing 
					$batchInsertID = $this->InvoiceModel->invoiceStore($SMSArray);				
					$this->emailsender->bulkEmail($SMSArray);
					redirect('invoice');
				}
				else
				{
					$this->session->set_flashdata('error_msg','Invalid File!');
					redirect('UploadInvoice');
				}

			}
			else
			{

				$this->session->set_flashdata('error_msg','File is empty');

				redirect('UploadInvoice');
			}


		}



    }
	
}
