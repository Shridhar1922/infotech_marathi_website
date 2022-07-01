<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct()
	{
	  parent::__construct();
	  if (function_exists('date_default_timezone_set')) {
		date_default_timezone_set("Asia/Kolkata");
	  }
	  $this->current_date_time = date('Y-m-d H:i:s');
	}
   /**
   * This is view login page index function
   * no perameter are required
   * 
   *
   * @param   no perameter
   * @package   application/Controller/Login/index
   */
	public function fn_login()
	{
		(empty($this->session->userdata('UADMINID'))) ? '' : redirect(base_url() . 'shubham/dashboard');
		$this->load->view('admin/login');
	}


	 /**
	 * ***************Function to login admin **********
	 * @type : Function
	 * @function name : login_action
	 * @description : Insert "Login admin data" admin interface
	 * @param : null
	 * @designer : Yogita Patil
	 * @author : Yugal Mali
	 * @return : null
	 ********************************************************* */
		public function login_action()
		{
			if (!empty($this->input->post())) {
				$this->form_validation->set_rules('email', 'UserName', 'trim|required');
				$this->form_validation->set_rules('password', 'Password', 'trim|required');
				if ($this->form_validation->run() === FALSE) {
					$this->session->set_flashdata('error', validation_errors());
					redirect($this->agent->referrer(), 'location', 301);
					exit();
				} else {
					$user_email = ($this->input->POST('email'));
					$user_pw = ($this->input->POST('password'));
	
					$condition = array('SUA.email' => $user_email, 'SUA.status' => '1');

					$user_details = $this->Md_database->getData(SCROLLUP_USERADMIN . ' as SUA', 'SUA.id,SUA.name,SUA.status,SUA.email,SUA.user_type,SUA.password,SUA.profile_path,SUA.created_at', $condition, '', '');
	        					
					if (!empty($user_details)) {
						$user_details = $user_details[0];
						$user_database_password = $this->encryption->decrypt($user_details['password']);
						if ($user_details['status'] == '1') {
	
							if ($user_database_password != $user_pw) {
								$data = array(
									'username' => $this->input->POST('email'),
									'password' => $this->encryption->encrypt($this->input->POST('password')),
									'user_type' => NULL,
									'status' => 'failed',
									'created_ip_address' => ip_address(),
									'created_at' => $this->current_date_time,
	
								);
								$this->Md_database->insertData(SCROLLUP_LOGIN_LOGS, $data);
								$this->session->set_flashdata('error', 'Please enter valid credentials to login.');
								redirect($this->agent->referrer(), 'location', 301);
							} else {
								$this->session->set_userdata('UADMINID', $user_details['id']);
								$this->session->set_userdata('UADMINPD', $user_pw);
								$this->session->set_userdata('UADMINNAME', $user_details['name']);
								$this->session->set_userdata('UADMINMAIL', $user_details['email']);
								$this->session->set_userdata('UADMINTYPE', $user_details['user_type']);
								$this->session->set_userdata('UADMINPROFILE', $user_details['profile_path']);
								$this->session->set_userdata('created_at', $user_details['created_at']);
	
	
								if ($this->input->POST('remember') == "yes") {	
									setcookie('email', $user_email, time() + (86400 * 30), '/');
									setcookie('password', $user_pw, time() + (86400 * 30), '/');
								} else {
									setcookie('email', $user_email, time() - (86400 * 30));
									setcookie('password', $user_pw, time() - (86400 * 30));
								}
	
								$this->session->set_flashdata('success', 'You are logged in successfully.');
								$data = array(
									'username' => $this->input->POST('email'),
									'password' => $this->encryption->encrypt($this->input->POST('password')),
									'user_type' => NULL,
									'status' => 'login',
									'created_ip_address' => ip_address(),
									'login_time' => $this->current_date_time,
									'created_at' => $this->current_date_time,
	
								);
								$this->Md_database->insertData(SCROLLUP_LOGIN_LOGS, $data);
								redirect(base_url() . 'shubham/system-logs');
							}
						} else if ($user_details['status'] == '2') {
							$this->session->set_flashdata('error', 'User inactive. Please contact admin.');
							redirect($this->agent->referrer(), 'location', 301);
						}
					} else {
						//Email id or password not match:
						/* @ Redirect */
	
						$data = array(
							'username' => $this->input->POST('email'),
							'password' => $this->encryption->encrypt($this->input->POST('password')),
							'user_type' => NULL,
							'status' => 'failed',
							'created_ip_address' => ip_address(),
							'created_at' => $this->current_date_time,
	
						);
						$this->Md_database->insertData(SCROLLUP_LOGIN_LOGS, $data);
						$this->session->set_flashdata('error', 'Please enter valid credentials to login.');
						redirect($this->agent->referrer(), 'location', 301);
					}
				}
			} else {
				$this->session->set_flashdata('error', 'Something goes wrong.');
				redirect($this->agent->referrer(), 'location', 301);
			}
			// redirect(base_url() . 'adminarea/login');
		}
	

	public function check_password_valid()
	{
		$old_pass = $this->input->get('old_pass');
		$admin_id = $this->session->userdata('id');
		$result = $this->Md_database->getData(SCROLLUP_USERADMIN, '*', array('id' => $admin_id));

		if ($old_pass == $this->encryption->decrypt($result[0]['password'])) {
			echo "true";
		} else {
			echo "false";
		}
	}

	public function change_password()
	{
		$where = array('id' => $this->session->userdata('id'));
		$dataArr = array('password' => $this->encryption->encrypt($this->input->post('password')));
		$affected_rows = $this->Md_database->updateData(SCROLLUP_USERADMIN, $dataArr, $where);
		if ($affected_rows == 1) {
			$this->session->set_flashdata('success', 'password changed successfully');
			redirect($this->agent->referrer(), 'location', 301);
		} else {
			$this->session->set_flashdata('error', 'unable to change password. try again');
			redirect($this->agent->referrer(), 'location', 301);
		}
	}

	public function check_account_exits()
	{
		$email = $this->input->post('email');
		if (!empty($email)) {
			$result = $this->Md_database->getData(SCROLLUP_USERADMIN, '*', array('email' => $email, 'status' => '1'));
			if (!empty($result)) {
				echo "true";
			} else {
				echo "false";
			}
		}
	}

 /**
   * This is admin logout function
   * this function are used to logout admin and unset all session admin data
   * this function logout the admin and redirect to login
   * 
   *
   * @param    no perameter are required
   * @package   application/Controller/Login/logout
   */
	public function logout()
  {
    if (!empty($this->session->userdata('UADMINMAIL'))) {
      $data = array(
        'status' => 'logout',
        'updated_ip_address' => ip_address(),
        'logout_time' => $this->current_date_time,
      );
      $condition = array(
        'username' => $this->session->userdata('UADMINMAIL'),
        'status' => 'login',
      );
      $this->Md_database->updateData(SCROLLUP_LOGIN_LOGS, $data, $condition);
      $this->session->unset_userdata('UADMINID');
      $this->session->unset_userdata('UADMINPD');
      $this->session->unset_userdata('UADMINNAME');
      $this->session->unset_userdata('UADMINMAIL');
      $this->session->unset_userdata('UADMINTYPE');
      $this->session->unset_userdata('created_at');
    }
    $this->session->set_flashdata('success', 'You are logged out successfully.');

    redirect('shubham');
  }
}
