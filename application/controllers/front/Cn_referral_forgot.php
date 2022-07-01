<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cn_referral_forgot extends MY_Controller
{
    /**
   * This is view referral forgot page referral_forgot function
   * no perameter are required
   * 
   *
   * @param   no perameter
   * @package   application/Controller/front/referral_forgot
   */
    public function referral_forgot()
    {
        $data['referral_page'] = $this->Md_database->getData(SCROLLUP_REFERRAL_PAGE, 'id,heading,logo,content', array('status' => 1), 'id asc');
        $this->frontend('front/referral_forgot', $data, TRUE);
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

		
		$edi = $this->get_city_id_using_email_id($email);
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
	public function ForgetPasswordAction()
	{
		if ($this->input->post()) {
			$data = $this->input->post();
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			if ($this->form_validation->run() === FALSE) {
				$this->session->set_flashdata('error', validation_errors());
				redirect($_SERVER['HTTP_REFERER']);
				exit();
			} else {
                $get_data = $this->get_city_id_using_email_id($data['email']);
                if(!empty($get_data)){
                    $pwd = $this->encryption->decrypt($get_data[0]['password']);
					
					if (!empty($pwd)) {
						/* [start::send  mail to customer] */
						$recipeinets = $data['email'];
						$from = array(
							"email" => SITE_MAIL,
							"name" => SITE_TITLE
						);
						$email_data['content'] = 'Your Password is' . ' ' .$pwd.'.';
						$email_data['subject'] = 'SCROLLUP forgot password mail';
						$subject = SITE_TITLE . '-' . !empty($email_data['subject']) ? $email_data['subject'] : "";
						
						$ml = $this->Md_database->sendSMTPEmail($recipeinets, $from, $subject, $email_data['content']);
						
						$this->session->set_flashdata('success', 'Email send successfully.');
						$data['email_data'] = $data['email'];
                        redirect('referral-login', 'refresh', 301);
					} else {
						$this->session->set_flashdata('error', 'Email not send.');
						redirect($this->agent->referrer(), 'location', 301);
					}
				} else {
					$this->session->set_flashdata('error', 'This email is not register.');
					redirect($this->agent->referrer(), 'location', 301);
				}
			}
		} else {
			redirect(base_url());
		}
	}
}