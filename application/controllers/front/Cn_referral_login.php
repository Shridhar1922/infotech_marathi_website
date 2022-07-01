<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cn_referral_login extends MY_Controller
{
    /**
   * This is view referral login page referral_login function
   * no perameter are required
   * 
   *
   * @param   no perameter
   * @package   application/Controller/front/referral_login
   */
    public function referral_login()
    {
        $data['referral_page'] = $this->Md_database->getData(SCROLLUP_REFERRAL_PAGE, 'id,heading,logo,content', array('status' => 1), 'id asc');
        
        $this->frontend('front/referral_login', $data, TRUE);
    }

    /**
     * ***************Function to login user **********
     * @type : Function
     * @function name : login_action
     * @description : check "register data" admin interface
     * @param : null
     * @designer : Yogita Patil
     * @author : Yugal Mali
     * @return : null
     ********************************************************* */

    public function login_action()
    {
        if (!empty($this->input->post())) {
            $this->form_validation->set_rules('email', 'email', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            if ($this->form_validation->run() === FALSE) {
                $this->session->set_flashdata('error', validation_errors());
                redirect($this->agent->referrer(), 'location', 301);
                exit();
            } else {
                $formdata =  $this->security->xss_clean($this->input->post());
                unset($formdata['submit_btn']);
                $data = array_map('trim', $formdata);
                $get_city_id = $this->get_city_id_using_email_id($formdata['email']);
				$get_city_tb_name =$this->Md_database->getData(SCROLLUP_MASTER_CITY, 'city_id,sql_tb_name',array('status'=> 1,'city_id'=> $get_city_id[0]['city_id']), 'city_id asc');
                $check = '';

                $data['password'] = $this->encryption->encrypt($data['password']);

                $login_details = $this->Md_database->getData($get_city_tb_name[0]['sql_tb_name'], 'city_id,user_id,email,password,name,mobile_number', array('status' => 1,'email'=>$data['email']), 'user_id asc');
                
                if ($data['email'] == $login_details[0]['email'] &&  $this->encryption->decrypt($data['password']) ==  $this->encryption->decrypt($login_details[0]['password'])) {
                    $data['user_type'] = "2";
                    $this->session->set_userdata('USERID', $login_details[0]['user_id']);
                    $this->session->set_userdata('USERCITYID', $login_details[0]['city_id']);
                    $this->session->set_userdata('USERTBNAME', $get_city_tb_name[0]['sql_tb_name']);
                    $this->session->set_userdata('USERNAME', $login_details[0]['name']);
                    $this->session->set_userdata('USEREMAIL', $data['email']);
                    $this->session->set_userdata('USERMOBILE', $login_details[0]['mobile_number']);
                    $this->session->set_userdata('USERPD', $data['password']);

                    // $login_logs = array(
                    //     'username' => $this->input->POST($data['email']),
                    //     'password' => $this->encryption->encrypt($data['password']),
                    //     'user_type' => NULL,
                    //     'status' => 'failed',
                    //     'created_ip_address' => ip_address(),
                    //     'created_at' => $this->current_date_time,

                    // );
                    // $this->Md_database->insertData(SCROLLUP_LOGIN_LOGS, $login_logs);

                    redirect('referral-dashboard', 'refresh', 301);
                    $this->session->set_flashdata('success', 'login successfully');
                } else {
                    $this->session->set_flashdata('error', 'Unable to login user');
                    redirect($this->agent->referrer(), 'location', 301);
                }
            }
        } else {
            $this->session->set_flashdata('error', 'Unable to login user');
            redirect($this->agent->referrer(), 'location', 301);
        }
    }

    public function check_account_exits()
	{
		$email = $this->input->post('email');
		if (!empty($email)) {
            $get_city_id = $this->get_city_id_using_email_id($email);

			// $result = $this->Md_database->getData(SCROLLUP_REGISTERED_USERS, '*', array('email' => $email, 'status' => '1'));
			
			// echo "<pre>";
			// print_r ($result);
			// echo "</pre>";
			// die;
			if (!empty($get_city_id)) {
				echo "true";
			} else {
				echo "false";
			}
		}
	}

}