<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cn_contact_us extends MY_Controller
{

	public function contact_us()
	{
		$data['social'] = $this->Md_database->getData(SCROLLUP_GENERAL_SETTINGS);	
		$this->frontend('front/contact_us',$data, TRUE);
	}

	/**
	 * This is sendMailForContactUs function
	 * this function are used to send the details on there registerd email id
	 *
	 * @param   contact_no_one  perameter
	 * @package    application/Controller/Forgot/sendMailForContactUs
	 */
	public function sendMailForContactUs()
	{
		if ($this->input->post()) {
			$data = $this->input->post();
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('mobile_number', 'Mobile number', 'trim|required');
			$this->form_validation->set_rules('location', 'location', 'trim|required');
			$this->form_validation->set_rules('message', 'Message', 'trim|required');
			if ($this->form_validation->run() === FALSE) {
				$this->session->set_flashdata('error', validation_errors());
				redirect($_SERVER['HTTP_REFERER']);
				exit();
			} else {

				$con = array('email' => $data['email']);

				$recipeinets = SITE_MAIL;
				$from = array(
					"email" => SITE_MAIL,
					"name" => SITE_TITLE
				);

				$email_data['content'] = 'Name :' . ' ' . $data['name'].', '. 'Email :'.' ' . $data['email'] .', '. 'Mobile Number :'.' ' . $data['mobile_number'].', '. 'Description :'.' ' . $data['message'] .', '. 'location :'.' ' . $data['location'];
				$email_data['subject'] = 'SCROLLUP Contact Form mail';
				$subject = SITE_TITLE . '-' . !empty($email_data['subject']) ? $email_data['subject'] : "";

				$ml = $this->Md_database->sendSMTPEmail($recipeinets, $from, $subject, $email_data['content']);
				
				if(!empty($ml)){
					$this->session->set_flashdata('success', 'Your message has been sent. Thank you!');
					redirect('contact_us', 'location', 301);
				}else{
					$this->session->set_flashdata('error', 'This email are not available.');
					redirect($this->agent->referrer(), 'location', 301);
				}
			}
		} else {
			redirect($this->agent->referrer(), 'location', 301);
		}
	}
	

}