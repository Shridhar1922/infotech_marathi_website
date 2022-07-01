<?php
defined('BASEPATH') or exit('No direct script access allowed');
ob_start();
class MY_Controller extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Kolkata');
		header('Cache-Control: no-store,no-cache,must-revalidate');
		header('Cache-Control: post-check=0,pre-check=0', false);
		header('Pragma:no-cache');
		$this->current_date_time = date('Y-m-d H:i:s');
	}

	public function adminBackend($common, $data = array(), $return = FALSE)
	{
		(!empty($this->session->userdata('UADMINID'))) ? '' : redirect('shubham');
		if ($return) :
			#$data['priviliges'] = $this->Md_database->getPriviliges();			
			$data['visualSettings'] = $this->Md_database->getData(SCROLLUP_VISUAL_SETTINGS, '*', array());
			$this->load->view('admin/includes/head-files', $data);
			$this->load->view('admin/includes/navbar', $data);
			$this->load->view('admin/includes/sidebar');
			$this->load->view($common, $data);
			$this->load->view('admin/includes/footer');
			$this->load->view('admin/includes/js-files');

		else :
			#$data['priviliges'] = $this->Md_database->getPriviliges();
			$data['visualSettings'] = $this->Md_database->getData(SCROLLUP_VISUAL_SETTINGS, '*', array());
			$this->load->view('admin/includes/head-files', $data);
			$this->load->view('admin/includes/navbar', $data);
			$this->load->view('admin/includes/sidebar', $data);
			$this->load->view($common);
			$this->load->view('admin/includes/footer');
			$this->load->view('admin/includes/js-files');

		endif;
	}

	public function frontend($common, $data = array(), $return = FALSE)
	{
		if ($return) :
			#$data['priviliges'] = $this->Md_database->getPriviliges();	
			$data['visualSettings'] = $this->Md_database->getData(SCROLLUP_VISUAL_SETTINGS, '*', array());
			$this->load->view('front/includes/head-files', $data);
			// $this->load->view('front/includes/navbar');
			// $this->load->view('front/includes/sidebar',$data);
			$this->load->view($common, $data);
			$this->load->view('front/includes/footer');
			$this->load->view('front/includes/js-files');

		else :
			#$data['priviliges'] = $this->Md_database->getPriviliges();
			$data['visualSettings'] = $this->Md_database->getData(SCROLLUP_VISUAL_SETTINGS, '*', array());
			$this->load->view('front/includes/head-files', $data);
			// $this->load->view('front/includes/navbar');
			// $this->load->view('front/includes/sidebar',$data);
			$this->load->view($common);
			$this->load->view('front/includes/footer');
			$this->load->view('front/includes/js-files');

		endif;
	}

	public function system_log($table, $log_type, $log_data, $id)
	{
		$user_id = $this->session->userdata('UADMINID');
		$user = '';
		if ($this->session->userdata('UADMINTYPE') == 'super_admin') {
			$user = 1;
		}

		$log_array = array_merge($id, $log_data);
		$logs_data = json_encode($log_array, JSON_FORCE_OBJECT);
		$data = array(
			'user_type' => $user,
			'models_name' => $table,
			'log_type' => $log_type,
			'log_data' => $logs_data,
			'logged_in_user_id' => $user_id
		);
		$this->Md_database->insertData(SCROLLUP_SYSTEM_LOG, $data);
	}

	public function get_city_id_using_mobile_number($number)
	{
		// $number = +917768884864;
		$city = $this->Md_database->getData(SCROLLUP_MASTER_CITY, 'city_id,sql_tb_name,city', array('status' => 1), 'city_id asc');

		foreach ($city as $value) {
			$city_name_lower = strtolower($value['sql_tb_name']);
			$this->db->select('*');
			$this->db->from($city_name_lower);
			$condition = array('mobile_number' => "+91" . $number, 'status <>' => '3');
			$this->db->where($condition);
			$query = $this->db->get();
			$result = $query->result_array();
			if (!empty($result)) {
				$array_data = $result;
				return $array_data;
			} else {
				$array_data = '';
			}
		}
	}

	public function get_city_id_using_email_id($email)
	{
		// $number = +917768884864;
		$city = $this->Md_database->getData(SCROLLUP_MASTER_CITY, 'city_id,sql_tb_name,city', array('status' => 1), 'city_id asc');

		foreach ($city as $value) {
			$city_name_lower = strtolower($value['sql_tb_name']);
			$this->db->select('*');
			$this->db->from($city_name_lower);
			$condition = array('email' => $email, 'status <>' => '3');
			$this->db->where($condition);
			$query = $this->db->get();
			$result = $query->result_array();
			if (!empty($result)) {
				$array_data = $result;
				return $array_data;
			} else {
				$array_data = '';
			}
		}
	}

	public function randomPassword()
	{
		$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		$pass = array(); //remember to declare $pass as an array
		$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
		for ($i = 0; $i < 8; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		return implode($pass);
	}
}
