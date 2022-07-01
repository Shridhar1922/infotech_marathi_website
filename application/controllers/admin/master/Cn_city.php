<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Cn_city extends MY_Controller
{
	/**
	 * This is view city page index function
	 * no perameter are required
	 * 
	 *
	 * @param   no perameter
	 * @package   application/Controller/master/city/index
	 */
	public function index()
	{
		$this->adminBackend('admin/master/city');
	}



	/**
	 * ***************Function to save city **********
	 * @type : Function
	 * @function name : city_action
	 * @description : Insert "city data" admin interface
	 * @param : null
	 * @designer : Yogita Patil
	 * @author : Yugal Mali
	 * @return : null
	 ********************************************************* */
	public function district_action()
	{
		if (!empty($this->input->post())) {
			$this->form_validation->set_rules('email_id', 'Email', 'trim|required|valid_email');
			if ($this->form_validation->run() === FALSE) {
				$this->session->set_flashdata('error', validation_errors());
				redirect($_SERVER['HTTP_REFERER']);
				exit();
			} else {
				$formdata = $this->input->post();
				$txtpkey = $formdata['txtpkey'];
				$mobile_no = $formdata['mobile_no'];
				$whatsapp_url = $formdata['whatsapp_url'];
				$email_id = $formdata['email_id'];
				unset($formdata['submit_btn']);
				unset($formdata['txtpkey']);
				$data = array_map('trim', $formdata);
				$check = '';


				if (!empty($txtpkey)) {
					$data['updated_by'] = $this->session->userdata('UADMINID');
					$data['updated_aT'] = $this->current_date_time;
					$data['updated_ip_address'] = ip_address();
					$data['mobile_no'] = $mobile_no;
					$data['whatsapp_url'] = $whatsapp_url;
					$data['email_id'] = $email_id;
					$check = $this->Md_database->updateData(SCROLLUP_MASTER_CITY, $data, array('city_id' => $txtpkey));
					if (!empty($check)) {
						$this->system_log(SCROLLUP_MASTER_CITY, 'update', $data, array('city_id' => $txtpkey));
						$this->session->set_flashdata('success', 'City updated successfully');
					} else {
						$this->session->set_flashdata('error', 'Unable to update city');
					}
				} else {
					$data['created_by'] = $this->session->userdata('UADMINID');
					$data['created_at'] = $this->current_date_time;
					$data['created_ip_address'] = ip_address();
					$check = $this->Md_database->insertData(SCROLLUP_MASTER_CITY, $data);
					if (!empty($check)) {
						$this->system_log(SCROLLUP_MASTER_CITY, 'insert', $data, array('city_id' => $check));
						$this->session->set_flashdata('success', 'City saved successfully');
					} else {
						$this->session->set_flashdata('error', 'Unable to save city');
					}
				}
				redirect('shubham/city', 'refresh', 301);
			}
		}
	}


	// /**
	//  * ***************Function to check city is already exist or not **********
	//  * @type : Function
	//  * @function name : check_city
	//  * @description : Check "city data" admin interface
	//  * @param : city_id
	//  * @designer : Yogita Patil
	//  * @author : Atul Naik
	//  * @return : null
	//  ********************************************************* */
	// public function check_city()
	// {
	// 	$city_id = $this->input->post('txtpkey');
	// 	$city = trim($this->input->post('city'));

	// 	$select = array('city_id');
	// 	if (empty($city_id)) {
	// 		$condition = array('city' => $city, 'state_id' => $state_id, 'status <>' => '3');
	// 	} else {
	// 		$condition = array('city' => $city, 'state_id' => $state_id, 'city_id <>' => $city_id, 'status <>' => '3');
	// 	}
	// 	$data = $this->Md_database->getData(NEW_ERA_MASTER_CITY, $select, $condition, '', '');
	// 	if (!empty($data)) {
	// 		echo "false";
	// 	} else {
	// 		echo "true";
	// 	}
	// }

	/**
	 * ***************Function to edit city data **********
	 * @type : Function
	 * @function name : edit_city
	 * @description : Edit "city data" admin interface
	 * @param : city_id
	 * @designer : Yogita Patil
	 * @author : Yugal Mali
	 * @return : null
	 ********************************************************* */
	public function edit_city($city_id)
	{
		$data['edit_city'] = $this->Md_database->getData(SCROLLUP_MASTER_CITY, 'join_url,city_id,city,mobile_no,whatsapp_url,email_id', array('city_id' => $city_id));
		if (!empty($data)) {
			$this->adminBackend('admin/master/city', $data, true);
		} else {
			$this->session->set_flashdata('error', 'Something went wrong');
			redirect('shubham/master/city', 'refresh', 301);
		}
	}


	// /**
	//  * ***************Function to change state status (active,inactive) **********
	//  * @type : Function
	//  * @function name : edit_city_status
	//  * @description : Change status "active,inactive " admin interface
	//  * @param : null
	//  * @designer : Yogita Patil
	//  * @author : Atul Naik
	//  * @return : null
	//  ********************************************************* */
	// public function edit_city_status()
	// {
	// 	if (!$this->input->is_ajax_request()) {
	// 		exit('No direct script access allowed');
	// 	} else {
	// 		$city_id 		= $this->input->post("city_id");
	// 		$change_to 	= $this->input->post("change_to");

	// 		$city_data['city'] = $this->Md_database->getData(NEW_ERA_MASTER_CITY, 'city_id,state_id', array('city_id' => $city_id, 'status<>' => '3'));
	// 		$state_id = !empty($city_data['city'][0]['state_id']) ? $city_data['city'][0]['state_id'] : '';
	// 		$state_data['state'] = $this->Md_database->getData(NEW_ERA_MASTER_STATE, 'city_id,status', array('city_id' => $state_id, 'status<>' => '3'));
	// 		$state_status = !empty($state_data['state'][0]['status']) ? $state_data['state'][0]['status'] : '';

	// 		if ($state_status == '2') {
	// 			$message = "State is In-Activated of this city.";
	// 			echo json_encode(array("status" => false, "message" => $message, "error" => 'Error'));
	// 		} else {
	// 			$data['status'] = $change_to;
	// 			$data['updated_by'] = $this->session->userdata('UADMINID');
	// 			$data['updated_ip_address'] = ip_address();
	// 			$check = $this->Md_database->updateData(NEW_ERA_MASTER_CITY, $data, array('city_id' => $city_id));

	// 			if (!empty($check)) {
	// 				$this->system_log(NEW_ERA_MASTER_CITY, 'update', $data, array('city_id' => $city_id));
	// 			}

	// 			$data = $this->db->where('city_id', $city_id)->get(NEW_ERA_MASTER_CITY)->row();
	// 			$city_name = "";
	// 			if (!empty($data)) {
	// 				$city_name = ucwords($data->city_name);
	// 				if ($data->status == "1") {
	// 					$message = "City Activated successfully.";
	// 				} else {
	// 					$message = "City In-Activated successfully .";
	// 				}
	// 			} else {
	// 				$message = "City Not Found.";
	// 			}
	// 			echo json_encode(array("status" => true, "message" => $message, "city_name" => $city_name));
	// 		}
	// 	}
	// }

	// /**
	//  * ***************Function to delete city **********
	//  * @type : Function
	//  * @function name : delete_city
	//  * @description : Delete "city" admin interface
	//  * @param : null
	//  * @designer : Yogita Patil
	//  * @author : Yugal Mali
	//  * @return : null
	//  ********************************************************* */
	// public function delete_city()
	// {
	// 	if (!$this->input->is_ajax_request()) {
	// 		exit('No direct script access allowed');
	// 	} else {
	// 		$city_id = $this->input->post("city_id");
	// 		if (!empty($city_id)) {
	// 			$data['status'] = '3';
	// 			$data['updated_by'] = $this->session->userdata('UADMINID');
	// 			$data['updated_ip_address'] = ip_address();
	// 			$check = $this->Md_database->updateData(SCROLLUP_MASTER_CITY, $data, array('city_id' => $city_id));

	// 			if (!empty($check)) {
	// 				$this->system_log(SCROLLUP_MASTER_CITY, 'delete', $data, array('city_id' => $city_id));
	// 			}
	// 			$data = $this->db->where('city_id', $city_id)->get(SCROLLUP_MASTER_CITY)->row();
	// 			$city = "";

	// 			if (!empty($data)) {
	// 				$city = ucwords($data->city);
	// 				if ($data->status == "3") {
	// 					$message = "City deleted successfully.";
	// 				} else {
	// 					$message = "Unable to city district.";
	// 				}
	// 			} else {
	// 				$message = "City Not Found.";
	// 			}
	// 			echo json_encode(array("status" => true, "message" => $message, "city" => $city));
	// 		}
	// 	}
	// }



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
	public function get_data_table_city()
	{
		$draw 		= intval($this->input->post("draw"));
		$questions 	= $this->get_city_table_data($is_get_total_record = FALSE);
		$data 		= array();
		$start = intval($this->input->post("start"));
		foreach ($questions as $index => $rows) {

			$status_btn = false;

			// $privilige = $this->Md_database->getPriviliges();
			// if ((in_array('city_edit', $privilige))) {
			$edit_btn = '<a href="' . base_url('master/edit-city/' . $rows->city_id) . '" class="btn btn-warning btn-xs" title="Edit"><i class="fa fa-pencil"></i></a>';
			// } else {
			// $edit_btn = '<button type="button" class="btn btn-warning btn-xs" title="Access denied" disabled=""><i class="fa fa-pencil"></i></button>';
			// }

			// if ((in_array('city_delete', $privilige))) {
			// $delete_btn = '<a href="javascript:void(0);" data-cityid="' . $rows->city_id . '" class="btn btn-danger btn-xs delete-record" title="Delete" ><i class="fa fa-trash"></i></a>';
			// } else {
			// $delete_btn = '<button type="button" class="btn btn-danger btn-xs" title="Access denied" disabled=""><i class="fa fa-trash"></i></button>';
			// }

			// if ((in_array('city_status', $privilige))) {
			$status_btn = true;
			// }
			$str = ($rows->whatsapp_url);
			// if (strlen($str) > 80)
			// 	$str = substr($str, 0, 50) . '...';

			$join_str = ($rows->join_url);
			// if (strlen($join_str) > 20)
			// 	$join_str = substr($join_str, 0, 20) . '...';

			$data[] = array(
				($start + 1),
				' ' . $edit_btn . ' ',
				!empty(ucwords($rows->city)) ? ucwords($rows->city) : '',
				!empty(ucwords($rows->mobile_no)) ? ucwords("+91" . $rows->mobile_no) : '',
				!empty(($rows->email_id)) ? ($rows->email_id) : '',
				!empty($str) ? ($str) : '',
				!empty($join_str) ? $join_str : '',
			);
			$start++;
		}



		$total_employees = $this->get_city_table_data(TRUE);
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
	public function get_city_table_data($is_get_total_record = FALSE)
	{
		$start = intval($this->input->post("start"));
		$length = intval($this->input->post("length"));
		$order = $this->input->post("order");
		$search = $this->input->post("search");
		$search = $search['value'];

		$valid_columns = array(
			0 => 'SD.city_id',
			1 => 'SD.city',
			2 => 'SD.mobile_no',
			3 => 'SD.email_id',
			4 => 'SD.whatsapp_url',
			5 => 'SD.join_url',
			6 => 'SD.Action'
		);

		if (!empty($search)) {
			$this->db->where("(SD.city LIKE '%" . $search . "%' OR SD.email_id LIKE '%" . $search . "%')");
		}

		/*--start--*/
		$this->db->select('SD.city_id,SD.city,SD.status,SD.mobile_no,SD.email_id,SD.whatsapp_url,SD.join_url');
		$this->db->from(SCROLLUP_MASTER_CITY . ' SD');
		$this->db->where('SD.status<>', "3");
		$this->db->order_by('SD.city', 'ASC');
		if ($is_get_total_record == TRUE) {
			return $this->db->get()->num_rows();
		} else {
			$this->db->limit($length, $start);
			return $this->db->get()->result();
		}
		/*--stop--*/
	}
}
