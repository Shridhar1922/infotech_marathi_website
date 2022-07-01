<?php
defined('BASEPATH') or exit('No direct script access allowed');
require FCPATH . '/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Cn_registered_user extends MY_Controller
{
	/**
	 * This is view register_user page index function
	 * no perameter are required
	 * 
	 *
	 * @param   no perameter
	 * @package   application/Controller/registered_user/cn_registered_user_list **/
	public function cn_registered_user_list()
	{
		$data['city'] = $this->Md_database->getData(SCROLLUP_MASTER_CITY, 'city_id,city', array('status' => '1'), 'city_id asc');
		$this->adminBackend('admin/registered_user/vw_registered_user', $data, TRUE);
	}

	/**
	 * ***************Function to get city table data **********
	 * @type : Function
	 * @function name : get_data_table_city
	 * @description : Get "city table data" admin interface
	 * @param : null
	 * @designer : Yogita Patil
	 * @author : Atul Naik
	 * @return : null
	 ********************************************************* */
	public function get_data_table_register_user()
	{

		$draw 		= intval($this->input->post("draw"));
		$questions 	= $this->get_register_user_table_data($is_get_total_record = FALSE);
		$data 		= array();
		$start = intval($this->input->post("start"));
		foreach ($questions as $index => $rows) {

			$status_btn = false;

			// $privilige = $this->Md_database->getPriviliges();
			// if ((in_array('city_edit', $privilige))) {
			// $edit_btn = '<a href="' . base_url('master/edit-city/' . $rows->user_id) . '" class="btn btn-warning btn-xs" title="Edit"><i class="fa fa-pencil"></i></a>';
			// } else {
			// $edit_btn = '<button type="button" class="btn btn-warning btn-xs" title="Access denied" disabled=""><i class="fa fa-pencil"></i></button>';
			// }

			// if ((in_array('city_delete', $privilige))) {
			// $delete_btn = '<a href="javascript:void(0);" data-id="' . $rows->user_id . '" class="btn btn-danger btn-xs delete-record" title="Delete" ><i class="fa fa-trash"></i></a>';
			// } else {
			// $delete_btn = '<button type="button" class="btn btn-danger btn-xs" title="Access denied" disabled=""><i class="fa fa-trash"></i></button>';
			// }

			// if ((in_array('city_status', $privilige))) {
			// $status_btn = true;
			// }


			$data[] = array(
				($start + 1),
				ucwords($rows->given_name),
				ucwords($rows->family_name),
				($rows->group_membership),
				ucwords($rows->phone_type),
				$rows->mobile_number,
				$rows->whatsapp_operated,
				!empty($rows->created_at) ? date('d-m-Y H:i:s', strtotime(($rows->created_at))) : '',
			);
			$start++;
		}

		$total_employees = $this->get_register_user_table_data(TRUE);
		$output = array(
			"draw" => $draw,
			"recordsTotal" => $total_employees,
			"recordsFiltered" => $total_employees,
			"data" => $data
		);
		echo json_encode($output);
		exit();
	}

	/**
	 * ***************Function to get city table data **********
	 * @type : Function
	 * @function name : get_city_table_data
	 * @description : Get "city table data" admin interface
	 * @param : is_get_total_record
	 * @designer : Yogita Patil
	 * @author : Atul Naik
	 * @return : query result
	 ********************************************************* */
	public function get_register_user_table_data($is_get_total_record = FALSE)
	{
		$start = intval($this->input->post("start"));
		$length = intval($this->input->post("length"));
		$order = $this->input->post("order");
		$search = $this->input->post("search");
		$search = $search['value'];

		if (!empty($this->input->get("city_id") != 0)) {
			$city_id = $this->input->get("city_id");
			$get_city_tb_name = $this->Md_database->getData(SCROLLUP_MASTER_CITY, 'city_id,sql_tb_name', array('status' => 1, 'city_id' => $city_id), 'city_id asc');
		} else if ($this->input->get("city_id") == 0) {
			$city_id = $this->input->get("city_id");
		}
		// }

		$valid_columns = array(
			0 => 'SC.user_id',
			1 => 'SC.given_name',
			2 => 'SC.family_name',
			3 => 'SC.group_membership',
			4 => 'SC.phone_type',
			5 => 'SC.mobile_number',
			6 => 'SC.created_at',
		);
		// $filter_btn = $this->input->get("filter_btn");
		// $submit_btn = $this->input->get("submit_btn");
		if (!empty($search)) {
			$this->db->where("(SC.given_name LIKE '%" . $search . "%' OR SC.mobile_number LIKE '%" . $search . "%')");
		}
		if ($this->input->get("mobile_number") && !empty($this->input->get("mobile_number"))) {
			$this->db->like('SC.mobile_number', $this->input->get("mobile_number"));
		}

		// if($filter_btn == 1){
		// if ($this->input->get("city_id") && !empty($this->input->get("city_id"))) {
		// 	$this->db->where('SC.city_id', $this->input->get("city_id"));
		// }
		$get_date = !empty($this->input->get('filter_date')) ? $this->input->get('filter_date') : '';
		$convert_date = explode("-", $get_date);

		if (!empty($get_date)) {
			$form_date = date('Y-m-d', strtotime($convert_date[0]));
			$to_date = date('Y-m-d', strtotime($convert_date[1]));

			$this->db->where('DATE(SC.created_at)>=', $form_date);
			$this->db->where('DATE(SC.created_at)<=', $to_date);
		} else {
			$back_seven_days = date('Y-m-d', strtotime('-7 days'));
			$this->db->where('DATE(SC.created_at)>=', $back_seven_days);
		}

		if ($city_id != 0) {
			$this->db->select('SC.city_id,SC.user_id,SC.whatsapp_operated,SC.given_name,SC.status,SC.family_name,SC.mobile_number,SC.created_at,SC.phone_type,SC.group_membership');
			$this->db->from($get_city_tb_name[0]['sql_tb_name'] . ' SC');
			$this->db->where('SC.status<>', "3");
			$this->db->order_by('SC.user_id', 'desc');
		} else if ($city_id == 0) {
			$this->db->select('SC.city_id,SC.user_id,SC.whatsapp_operated,SC.given_name,SC.status,SC.family_name,SC.mobile_number,SC.created_at,SC.phone_type,SC.group_membership');
			$this->db->from(SCROLLUP_REGISTERED_USERS . ' SC');
			$this->db->where('SC.status<>', "3");
			$this->db->order_by('SC.user_id', 'desc');
		}
		if ($is_get_total_record == TRUE) {
			return $this->db->get()->num_rows();
		} else {
			$this->db->limit($length, $start);
			return $this->db->get()->result();
		}
		/*--stop--*/
	}

	/**
	 * ***************Function to download csv register user data **********
	 * @type : Function
	 * @function name : download_excel_of_register_user
	 * @description : Get "download CSV register user data" admin interface
	 * @designer : Yogita Patil
	 * @author : Yugal Mali
	 * @return : CSV File data
	 ********************************************************* */
	public function download_excel_of_register_user()
	{
		$city_id = $this->input->get('city_id');
		// $todate = !empty($this->input->post('todate')) ? $this->input->post('todate'): '';
		$get_date = !empty($this->input->get('get_date')) ? $this->input->get('get_date') : '';
		// $fromdate = !empty($this->input->post('fromdate')) ? $this->input->post('fromdate'): '';
		// echo $city_id;
		// die;
		// print_r($convert_date);
		// die;
		$get_city_tb_name = $this->Md_database->getData(SCROLLUP_MASTER_CITY, 'city_id,sql_tb_name', array('status' => 1, 'city_id' => $city_id), 'city_id asc');

		$this->db->select('SC.given_name,SC.family_name,SC.group_membership,SC.phone_type,SC.mobile_number,SC.whatsapp_operated,SC.created_at');
		$this->db->from($get_city_tb_name[0]['sql_tb_name'] . ' SC');
		$this->db->where('SC.status<>', "3");

		$convert_date = explode("-", $get_date);
		if (!empty($get_date)) {
			$from_date = date('Y-m-d', strtotime($convert_date[0]));
			$to_date = date('Y-m-d', strtotime($convert_date[1]));
			$this->db->where('DATE(SC.created_at)>=', $from_date);
			$this->db->where('DATE(SC.created_at)<=', $to_date);
		}
		// $this->db->where('SC.city_id', $city_id);
		$this->db->order_by('SC.user_id', 'asc');
		$data['users'] =  $this->db->get()->result_array();


		$city_name = $this->Md_database->getData(SCROLLUP_MASTER_CITY, 'city_id,city', array('city_id' => $city_id), 'city_id');


		if (!empty($data['users'])) {
			//csv file name
			if (!empty($get_date)) {
				$from_date = date('dmY', strtotime($convert_date[0]));
				$to_date = date('dmY', strtotime($convert_date[1]));
				$filename = strtoupper($city_name[0]['city']) . $from_date . '-' . $to_date . '.csv';
			} else {
				$filename = strtoupper($city_name[0]['city']) . '.csv';
			}
			header("Content-Description: File Transfer");
			header("Content-Disposition: attachment; filename=$filename");
			header("Content-Type: application/csv; ");

			// get data
			// $usersData = $this->Md_database->getUserDetails();

			// file creation
			$file = fopen('php://output', 'w');

			$header = array("Given Name", "Family Name", "Group Membership", "Phone 1 - Type", "Phone 1 - Value", "Client Operators WP No.", "Subscriber On");
			fputcsv($file, $header);

			foreach ($data['users'] as $key => $line) {
				fputcsv($file, $line);
			}
			// redirect($this->agent->referrer(), 'refresh', 301);
			redirect('shubham/registered-user', 'refresh', 301);
			fclose($file);
			exit;
			// echo "1";
		} else {
			$this->session->set_flashdata('error', 'file not downloaded');
			redirect($this->agent->referrer(), 'refresh', 301);
			// echo "2";
		}

		// }
	}

	public function check_city_id()
	{
		if (!$this->input->is_ajax_request()) {
			exit('No direct script access allowed');
		} else {
			$city_id  = trim($this->input->post("city_id"));

			$data['city'] = $this->Md_database->getData(SCROLLUP_MASTER_CITY, 'city_id,sql_tb_name,whatsapp_url,join_url', array('status' => 1, 'city_id' => $city_id), 'city_id asc');

			if (!empty($data['city'])) {
				echo 1;
			} else {
				echo 0;
			}
		}
	}
}
