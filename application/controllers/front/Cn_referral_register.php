<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cn_referral_register extends MY_Controller
{
	    /**
   * This is view referral register page referral_register function
   * no perameter are required
   * 
   *
   * @param   no perameter
   * @package   application/Controller/front/referral_register
   */
    public function referral_register()
	{
		$data['referral_page'] = $this->Md_database->getData(SCROLLUP_REFERRAL_PAGE, 'id,heading,logo,content',array('status'=>1),'id asc');
		$data['city'] = $this->Md_database->getData(SCROLLUP_MASTER_CITY, 'city_id,city', array('status' => '1'), 'city_id asc');
		$this->frontend('front/referral_register',$data,TRUE);
	}

      /**
	 * ***************Function to register user **********
	 * @type : Function
	 * @function name : register_action
	 * @description : Insert "register data" admin interface
	 * @param : null
	 * @designer : Yogita Patil
	 * @author : Yugal Mali
	 * @return : null
	 ********************************************************* */
	public function register_action()
	{
		if (!empty($this->input->post())) {
			$this->form_validation->set_rules('mobile_number', 'Mobile Number', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email' );
			if ($this->form_validation->run() === FALSE) {
				$this->session->set_flashdata('error', validation_errors());
				redirect($_SERVER['HTTP_REFERER']);
				exit();
			} else {
				$formdata =  $this->security->xss_clean($this->input->post());
				unset($formdata['submit_btn']);
				$data = array_map('trim', $formdata);
				$check = '';

				$get_city_id = $this->get_city_id_using_mobile_number($formdata['mobile_number']);
				$get_email_city_id = $this->get_city_id_using_email_id($formdata['email']);

				$get_city_tb_name =$this->Md_database->getData(SCROLLUP_MASTER_CITY, 'city_id,sql_tb_name',array('status'=> 1,'city_id'=> $get_city_id[0]['city_id']), 'city_id asc');
				// $get_user_data = $this->Md_database->getData($get_city_tb_name[0]['sql_tb_name'],'user_id,city_id,email',array('status'=>1,'email'=>$formdata['email']),'user_id');
				

				if(!empty($get_email_city_id)){
					$this->session->set_flashdata('error', 'This email is already used.');
					redirect('referral-register', 'refresh', 301);
				} else {
					$get_info = $this->Md_database->getData($get_city_tb_name[0]['sql_tb_name'],'user_id,email,mobile_number',array('status'=>1,'mobile_number'=> "+91".$formdata['mobile_number']),'user_id');
					

					if(!empty($get_info[0]['email'])){
						$this->session->set_flashdata('error', 'You are already register.');
						redirect('referral-register', 'refresh', 301);
					}else{
						$data['updated_by'] = $this->session->userdata('UADMINID');
						$data['updated_at'] = $this->current_date_time;
						$data['mobile_number'] = "+91".$formdata['mobile_number'];
						$data['password'] = $this->encryption->encrypt($data['password']);
						$data['updated_ip_address'] = ip_address();

						$check = $this->Md_database->updateData($get_city_tb_name[0]['sql_tb_name'], $data,array('status'=>1,'mobile_number'=>"+91".$formdata['mobile_number']));
						$this->Md_database->updateData(SCROLLUP_REGISTERED_USERS, $data,array('status'=>1,'mobile_number'=>"+91".$formdata['mobile_number']));
						if (!empty($check)) {
							$this->system_log($get_city_tb_name[0]['sql_tb_name'], 'update', $data, array('user_id' => $check));

							$login_details = $this->Md_database->getData($get_city_tb_name[0]['sql_tb_name'], 'city_id,user_id,email,password,name,mobile_number', array('status' => 1,'email'=>$data['email']), 'user_id asc');

							$this->session->set_flashdata('success', 'Referral registration successfully');
							$this->session->set_userdata('USERID', $login_details[0]['user_id']);
							$this->session->set_userdata('USERCITYID', $login_details[0]['city_id']);
							$this->session->set_userdata('USERTBNAME', $get_city_tb_name[0]['sql_tb_name']);
							$this->session->set_userdata('USERNAME', $login_details[0]['name']);
							$this->session->set_userdata('USEREMAIL', $data['email']);
							$this->session->set_userdata('USERMOBILE', $login_details[0]['mobile_number']);
							$this->session->set_userdata('USERPD', $data['password']);
							redirect('referral-dashboard', 'refresh', 301);
						} else {
							$this->session->set_flashdata('error', 'Unable to register user');
						}
					}
					
				}
			}
		}
	}

    /**
	 * ***************Function to check Number is already exist or not **********
	 * @type : Function
	 * @function name : check_number_register
	 * @description : Check "number data" admin interface
	 * @param : id
	 * @designer : Yogita Patil
	 * @author : Yugal Mali
	 * @return : null
	 ********************************************************* */
	public function check_number_register()
	{
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        } else {
            $mobile_number = trim($this->input->post('mobile_number'));
            $get_city_id = $this->get_city_id_using_mobile_number($mobile_number);
           
            if (!empty($get_city_id)) {
                echo "true";
            } else {
                echo "false";
            }
        }
	}

	    /**
	 * ***************Function to get city_id using mobile Number **********
	 * @type : Function
	 * @function name : get_city_id_using_mobile_number
	 * @description : Check "number data" admin interface
	 * @param : id
	 * @designer : Yogita Patil
	 * @author : Yugal Mali
	 * @return : null
	 ********************************************************* */
	public function get_city_id_using_mobile_no()
	{
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        } else {
            $mobile_number = trim($this->input->post('mobile_number'));
            $get_city_id = $this->get_city_id_using_mobile_number($mobile_number);
			
            if (!empty($get_city_id)) {
				$get_city_name = $this->Md_database->getData(SCROLLUP_MASTER_CITY, 'city_id,sql_tb_name,city',array('status =>1','city_id'=>$get_city_id[0]['city_id']),'city_id');
                $status = "true";
				$city_id = $get_city_id[0]['city_id'];
				$city = $get_city_name[0]['city'];
            } else {
                $status = "false";
				$city_id = '';
				$city = '';
            }
			echo json_encode(array("status" =>$status, "city_id" => $city_id, "city" => $city));
        }
	}

}