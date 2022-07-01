<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cn_forgot extends MY_Controller
{
	/**
	 * This is view adminarea page adminarea function
	 * no perameter are required
	 * 
	 *
	 * @param   no perameter
	 * @package   application/Controller/adminarea **/
	public function adminarea()
	{
		$data['summary'] = $this->Md_database->getData(SCROLLUP_LOGIN_LOGS, 'login_time', array('username' => $this->session->userdata('UADMINMAIL'), 'status' => 'logout'), 'id desc');
		$this->adminBackend('admin/landing-page', $data, TRUE);
	}
	/**
	 * This is view forgot_password page forgot_password function
	 * no perameter are required
	 * 
	 *
	 * @param   no perameter
	 * @package   application/Controller/forgot_password **/
	public function forgot_password()
	{
		$this->load->view('admin/vw_forgot_password');
	}
	/**
	 * This is view otp page otp function
	 * no perameter are required
	 * 
	 *
	 * @param   no perameter
	 * @package   application/Controller/otp **/
	public function otp()
	{
		$this->load->view('admin/otp');
	}
	/**
	 * This is view reset_password page reset_password function
	 * no perameter are required
	 * 
	 *
	 * @param   no perameter
	 * @package   application/Controller/reset_password **/
	public function reset_password()
	{
		$this->load->view('admin/reset-password');
	}
	/**
	 * This is view change_password page change_password function
	 * no perameter are required
	 * 
	 *
	 * @param   no perameter
	 * @package   application/Controller/change_password **/
	public function change_password()
	{
		$this->adminBackend('admin/change-password');
	}

	/**
	 * This is checkDuplicateemailForForgetPassword function
	 * this function are used to check the duplicate mobile no. on user registration
	 *
	 * @param   email
	 * @package   application/Controller/Forgot/checkDuplicateemailForForgetPassword
	 */
	public function checkDuplicateemailForForgetPassword()
	{
		$email = $this->input->get('email');

		$condition = array('email' => $email, 'status <>' => 3);
		$edi = $this->Md_database->getData(SCROLLUP_USERADMIN, 'id', $condition);
		if (empty($edi)) {
			echo 'false';
		} else {
			echo 'true';
		}
		// die;
	}

	/**
	 * This is sendMailForForgetPassword function
	 * this function are used to send the otp on there registerd email id
	 *
	 * @param   contact_no_one  perameter
	 * @package    application/Controller/Forgot/sendMailForForgetPassword
	 */
	public function sendMailForForgetPassword()
	{
		if ($this->input->post()) {
			$data = $this->input->post();
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			if ($this->form_validation->run() === FALSE) {
				$this->session->set_flashdata('error', validation_errors());
				redirect($_SERVER['HTTP_REFERER']);
				exit();
			} else {
				$res = $this->Md_database->getData(SCROLLUP_USERADMIN, 'id', array('email' => $data['email'], 'status' => '1'));
				if (!empty($res)) {
					$otp =  mt_rand('100000', '999999');
					$updateData = array(
						'otp' => $otp,
						'updated_ip_address' => ip_address(),
					);
					$con = array('email' => $data['email']);
					$res = $this->Md_database->updateData(SCROLLUP_USERADMIN, $updateData, $con);
					if (!empty($res)) {

						/* [start::send  mail to customer] */
						$recipeinets = $data['email'];
						$from = array(
							"email" => SITE_MAIL,
							"name" => SITE_TITLE
						);

						$email_data['content'] = 'Your Otp is' . ' ' . $otp;
						$email_data['subject'] = 'SCROLLUP forget password mail';
						$subject = SITE_TITLE . '-' . !empty($email_data['subject']) ? $email_data['subject'] : "";

						$ml = $this->Md_database->sendSMTPEmail($recipeinets, $from, $subject, $email_data['content']);

						$this->session->set_flashdata('success', 'Please enter OTP, received on Email.');
						$data['email_data'] = $data['email'];
						$this->load->view('admin/otp', $data);
					} else {
						$this->session->set_flashdata('error', 'OTP not sending on email.');
						redirect($this->agent->referrer(), 'location', 301);
					}
				} else {
					$this->session->set_flashdata('error', 'This email are not available.');
					redirect($this->agent->referrer(), 'location', 301);
				}
			}
		} else {
			redirect(base_url());
		}
	}

	/**
	 * This is verify_otp function
	 * this function are used verify email otp
	 *
	 * @param   otp, email
	 * @package    application/Controller/Forgot/verify_otp
	 */
	public function verify_otp()
	{
		if ($this->input->post()) {
			$data = $this->input->post();
			$this->form_validation->set_rules('otp', 'OTP', 'trim|required');
			if ($this->form_validation->run() === FALSE) {
				$this->session->set_flashdata('error', validation_errors());
				redirect($_SERVER['HTTP_REFERER']);
				exit();
			} else {
				$res = $this->Md_database->getData(SCROLLUP_USERADMIN, 'id,otp', array('email' => $data['email']), '', '');
				if (!empty($res)) {
					if ($res[0]['otp'] == $data['otp']) {
						$this->session->set_flashdata('success', 'OTP Verification Successful. Please Enter New Password.');
						$data['email_data'] = $data['email'];
						$this->load->view('admin/reset-password', $data);
					} else {

						$this->session->set_flashdata('error', 'OTP Verification Failed.');
						redirect($this->agent->referrer(), 'location', 301);
					}
				} else {
					$this->session->set_flashdata('error', 'This email are not available.');
					redirect($this->agent->referrer(), 'location', 301);
				}
			}
		} else {
			redirect(base_url());
		}
	}
	/**
	 * ***************Function to set new password **********
	 * @type : Function
	 * @function name : set_new_password
	 * @description : Insert "set new password" admin interface
	 * @param : null
	 * @designer : Yogita Patil
	 * @author : Yugal Mali
	 * @return : null
	 ********************************************************* */
	public function set_new_password()
	{
		if ($this->input->post()) {
			$data = $this->input->post();
			$this->form_validation->set_rules('new_password', 'New Password', 'trim|required');
			$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required');
			if ($this->form_validation->run() === FALSE) {
				$this->session->set_flashdata('error', validation_errors());
				redirect($_SERVER['HTTP_REFERER']);
				exit();
			} else {
				$res = $this->Md_database->getData(SCROLLUP_USERADMIN, 'id', array('email' => $data['email']), '', '');
				if (!empty($res)) {

					$passMakeHash = $this->encryption->encrypt($data['new_password']);

					$updateData = array(
						'password' => $passMakeHash,
						'updated_ip_address' => ip_address(),
						'updated_at' => $this->current_date_time,
					);
					$con = array('email' => $data['email']);
					$check = $this->Md_database->updateData(SCROLLUP_USERADMIN, $updateData, $con);
					if (!empty($check)) {
						$this->session->set_flashdata('success', 'Password Updated Successfully');
						redirect('shubham', 'location', 301);
					} else {
						$this->session->set_flashdata('error', 'Password Not Updated ');
						redirect($this->agent->referrer(), 'location', 301);
					}
				} else {
					$this->session->set_flashdata('error', 'This email are not available.');
					redirect($this->agent->referrer(), 'location', 301);
				}
			}
		} else {
			redirect(base_url());
		}
	}
}
