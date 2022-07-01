<?php
defined('BASEPATH') or exit('No direct script access allowed');

require FCPATH . '/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Cn_default extends MY_Controller
{
	/**
	 * This is view Website page index function
	 * no perameter are required
	 * 
	 *
	 * @param   no perameter
	 * @package   application/Controller/index **/
	public function index()
	{
		// $num_segment = $this->uri->segment(3);
		// $get_user_data = $this->get_city_id_using_mobile_number($num_segment);
		// if(!empty($get_user_data)){
		// 	$data['get_num'] = $number;
		// 	$data['city'] = $this->Md_database->getData(SCROLLUP_MASTER_CITY, 'city_id,city', array('status' => '1'), 'city_id asc');
		// 	$data['home'] = $this->Md_database->getData(SCROLLUP_ANIMATED_HOME, 'id,animated_heading_1,animated_heading_2,animated_heading_3,animated_heading_4,animated_heading_5,sub_heading,animated_heading_6,animated_heading_7,animated_heading_8,animated_heading_9,button_2,banner,button_1',array('status'=>1),'id asc');
		// 	$this->frontend('front/website', $data, TRUE);
		// }else{
		$data['form_validation'] = 2;
		$data['register_user_count'] = $this->Md_database->getData(SCROLLUP_MASTER_CONFIGURATION, 'total_register_live_count as count', array('status' => 1, 'id' => 1));
		$data['city'] = $this->Md_database->getData(SCROLLUP_MASTER_CITY, 'city_id,city', array('status' => '1'), 'city_id asc');
		$data['home'] = $this->Md_database->getData(SCROLLUP_ANIMATED_HOME, 'id,popup_1,popup_2,animated_heading_1,animated_heading_2,animated_heading_3,animated_heading_4,animated_heading_5,sub_heading,animated_heading_6,animated_heading_7,animated_heading_8,animated_heading_9,button_2,banner,button_1', array('status' => 1), 'id asc');
		$this->frontend('front/website', $data, TRUE);
	}


	public function link($number = '')
	{
		$num_segment = $this->uri->segment(3);
		$get_user_data = $this->get_city_id_using_mobile_number($num_segment);
		if (!empty($get_user_data)) {
			$data['form_validation'] = 1;
			$data['get_num'] = $number;
			$data['get_city_tb_name'] = $this->Md_database->getData(SCROLLUP_MASTER_CITY, 'city,city_id,sql_tb_name', array('status' => '1', 'city_id' => $get_user_data[0]['city_id']), 'city_id asc');
			$data['get_referral_user_data'] = $this->Md_database->getData($data['get_city_tb_name'][0]['sql_tb_name'], 'city_id,name,user_id,mobile_number', array('status' => '1', 'mobile_number' => "+91" . $number), 'user_id');
			$data['city'] = $this->Md_database->getData(SCROLLUP_MASTER_CITY, 'city_id,city', array('status' => '1'), 'city_id asc');
			$data['home'] = $this->Md_database->getData(SCROLLUP_ANIMATED_HOME, 'id,popup_1,popup_2,animated_heading_1,animated_heading_2,animated_heading_3,animated_heading_4,animated_heading_5,sub_heading,animated_heading_6,animated_heading_7,animated_heading_8,animated_heading_9,button_2,banner,button_1', array('status' => 1), 'id asc');
			$this->frontend('front/website', $data, TRUE);
		} else {
			redirect(base_url(), 'Cn_default');
		}
	}



	public function table()
	{
		$city = $this->Md_database->getData(SCROLLUP_MASTER_CITY, 'city_id,sql_tb_name,city', array('status' => 1), 'city_id asc');
		foreach ($city as $value) {
			$city_name_lower = strtolower($value['city']);
			$city_name_upper = strtoupper($value['city']);
			// $id = $value['city_id'];
			$sql_tb_name = $value['sql_tb_name'];


			$string = "ALTER TABLE `$sql_tb_name` ADD `whatsapp_operated` VARCHAR(250) NULL AFTER `whatsapp_url`;";
			// $data['count_'. $value['city_id']] =  $this->Md_database->countAllResult(SCROLLUP_REGISTERED_USERS,array('status'=>1,'city_id' =>  $value['city_id']),$like = '');


			// $sql = "SELECT * FROM $sql_tb_name  WHERE `created_at` = '2021-09-14 18:57:05'";
			// $sql = "ALTER TABLE $sql_tb_name ADD `whatsapp_url` LONGTEXT NULL AFTER `location`;";

			// $query = $this->db->query($sql);
			// return $query->result_array();

			// $unwanted_data = $this->Md_database->getData($sql_tb_name,'city_id, given_name, family_name,group_membership, phone_type, mobile_number, name, email, password, earned_amount, total_earned_amount, acc_no, ifsc,bank_name, branch, UPI_id, referral_by, referral_status, otp, status, created_at, created_by, created_ip_address, updated_at, updated_by, updated_ip_address',array('status' => '1','city_id' => $value['city_id']));

			// echo "<pre>";
			// print_r ($unwanted_data);
			// echo "</pre>";
			// die;

			// $response = $this->Md_database->insertDataBatch(SCROLLUP_REGISTERED_USERS, $unwanted_data);
			// print_r($response);

			// $sql="ALTER TABLE $sql_tb_name  ADD `total_earned_amount` VARCHAR(100) NULL AFTER `earned_amount`;";    
			// $sql="ALTER TABLE $sql_tb_name  ADD `referral_by` VARCHAR(255) NULL AFTER `UPI_id`, ADD `referral_status` ENUM('1','2') NULL DEFAULT '1' AFTER `referral_by`, ADD `otp` VARCHAR(100) NULL AFTER `referral_status`;";    
			// $sql="ALTER TABLE $sql_tb_name  DROP `location`;";    
			// $query = $this->db->query($sql);
			// echo $sql;
		}
		die;
	}

	/**
	 * ***************Function to Bulk Upload **********
	 * @type : Function
	 * @function name : City_count_bulk_upload
	 * @description : Bulk Upload Cron
	 * @param : null
	 * @designer : Null
	 * @author : Yugal Mali 
	 * @return : null
	 ********************************************************* */
	public function city_bulk_upload()
	{
		$user_id = $this->session->userdata('UCMZAID');
		$file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		if (isset($_FILES['city_excel']['name']) && in_array($_FILES['city_excel']['type'], $file_mimes)) {
			$arr_file = explode('.', $_FILES['city_excel']['name']);
			$extension = end($arr_file);
			if ('csv' == $extension) {
				$reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
			} else {
				$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
			}
			$spreadsheet = $reader->load($_FILES['city_excel']['tmp_name']);
			$sheetData = $spreadsheet->getActiveSheet()->toArray();
			$excelerror = false;
			$temparray = array();
			$i = 1;

			echo "<pre>";
			print_r($sheetData);
			echo "</pre>";
			die;
			$excelErrorArray = array();
			foreach ($sheetData as $row) :
				if ($i == 1) {
				} else {
					if (!empty($row[0])) {
						unset($dataArr);
						$dataArr = array(
							'start_range' => $row[1],
							'end_range' => $row[2],
							'updated_at' => $this->current_date_time,
							'created_ip_address' => $_SERVER['REMOTE_ADDR'],
						);
						$inserted_id = $this->Md_database->updateData(SCROLLUP_MASTER_CITY, $dataArr, array('city_id' => $row[0]));

						# End						
					} elseif (empty($row[0]) && empty($row[1]) && empty($row[2]) && empty($row[3]) && empty($row[4]) && empty($row[5]) && empty($row[6]) && empty($row[7]) && empty($row[8]) && empty($row[9]) && empty($row[10]) && empty($row[11])) {
					} else {
						$excelerror = true;
						array_push($excelErrorArray, 'Empty columns found in row no ' . $i);
					}
				}
				$i++;
			endforeach;

			if ($excelerror == false) {
				$this->session->set_flashdata('success', 'Excel imported successfully');
			} else {
				$spreadsheet = new Spreadsheet();
				$sheet = $spreadsheet->getActiveSheet();
				# Set document properties

				$spreadsheet->getProperties()->setCreator('Yugal Mali')
					->setLastModifiedBy('Yugal Mali')
					->setTitle('Errors List')
					->setSubject('Errors List')
					->setDescription('Errors List!');
				# Add style to the header
				$styleArray = array(
					'font' => array(
						'bold' => true,
					),
					'alignment' => array(
						'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
						'vertical'   => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
					)
				);
				$spreadsheet->getActiveSheet()->getStyle('A1:B1')->applyFromArray($styleArray);
				#Auto fit column to content
				$sheet
					->getStyle('A1:B1')
					->getFill()
					->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
					->getStartColor()
					->setARGB('33ccef');

				foreach (range('A', 'B') as $columnID) {
					$spreadsheet->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
				}

				#Set the names of header cells
				$sheet->setCellValue('A1', 'Sr No');
				$sheet->setCellValue('B1', 'Error Description');

				$getdata = $excelErrorArray;

				$sheet->getColumnDimension('A')->setWidth(25);
				$sheet->getColumnDimension('B')->setWidth(25);

				#Add some data
				$x = 2;
				$k = 1;
				$Ai = 0;

				foreach ($getdata as $get) {
					$sheet->setCellValue('A' . $x, $k);
					$sheet->setCellValue('B' . $x, (!empty($get) ? $get : 'NA'));
					$x++;
					$k++;
					$Ai++;
				}

				#Create file excel.xlsx
				if (file_exists(FCPATH . '/assets/uploads/excel-errors/Erros-List.xlsx')) {
					unlink(FCPATH . '/assets/uploads/excel-errors/Erros-List.xlsx');
				}
				$writer = new Xlsx($spreadsheet);
				$filename = FCPATH . '/assets/uploads/excel-errors/Erros-List.xlsx';
				$writer->save($filename);
				$this->session->set_flashdata('error', 'Invalid excel format<br> <a href="' . base_url("assets/uploads/excel-errors/Erros-List.xlsx") . '">Click Here To Download Error Log</a>');
			}
			redirect(base_url('shubham'));
		}
	}

	/**
	 * ***************Function to Register User Count Function **********
	 * @type : Function
	 * @function name : Register USer COunt
	 * @description : View "Register User Count" Cron
	 * @param : null
	 * @designer : Null
	 * @author : Yugal Mali 
	 * @return : null
	 ********************************************************* */
	public function website_live_counter()
	{
		$get_current_count = $this->Md_database->getData(SCROLLUP_MASTER_CONFIGURATION, 'id,total_register_live_count', array('status' => 1, 'id' => 1));
		$city = $this->Md_database->getData(SCROLLUP_MASTER_CITY, 'city_id,sql_tb_name,start_range,end_range,live_website_count', array('status' => 1), 'city asc');
		$all_count = 0;
		foreach ($city as $value) {
			$all_count = $all_count + $this->Md_database->countAllResult($value['sql_tb_name'], array('status' => 1), $like = '');
		}
		foreach ($city as $row => $value) {
		    $value['start_range'] = $value['start_range'] / 2;
			$value['end_range'] = $value['end_range'] / 2;
			$city_count[$row] = $this->Md_database->countAllResult($value['sql_tb_name'], array('status' => 1), $like = '');
			$city_count[$row] = !empty($value['live_website_count']) ? $value['live_website_count'] : $city_count[$row];
			$rand_value[$row] = rand($value['start_range'], $value['end_range']);
			$final_city_count[$row] = $city_count[$row] + $rand_value[$row];
			$this->Md_database->updateData(SCROLLUP_MASTER_CITY, array('live_website_count' => $final_city_count[$row]), array('city_id' => $value['city_id']));
		}
		$all_count_registered = 0;
		if (!empty($final_city_count)) {
			foreach ($final_city_count as $row => $value) {
				$all_count_registered = $all_count_registered + $value;
			}
		}

		if (!empty($all_count_registered)) {
			$this->Md_database->updateData(SCROLLUP_MASTER_CONFIGURATION, array('total_register_live_count' => $all_count_registered), array('id' => '1'));
		}
	}
}
