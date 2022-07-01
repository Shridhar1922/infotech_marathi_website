<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cn_referral_dashboard extends MY_Controller
{
    /**
   * This is view referral dashboard page referral_dashboard function
   * no perameter are required
   * 
   *
   * @param   no perameter
   * @package   application/Controller/front/referral_dashboard
   */
  public function referral_dashboard()
    {
      $data['limit'] = $this->Md_database->getData(SCROLLUP_MASTER_CONFIGURATION, 'id,referral_commission,withdrawal_limit',array('status'=>1),'id asc');
      $get_user_id =  $this->session->userdata('USERID');
      $get_tb_name =  $this->session->userdata('USERTBNAME');
      (!empty($this->session->userdata('USERID'))) ? '' : redirect('referral-login');

      $data['user_info'] = $this->Md_database->getData($get_tb_name , 'user_id,mobile_number,name,earned_amount,acc_no,ifsc,bank_name,branch,UPI_id',array('status'=>1 , 'user_id' =>$get_user_id),'user_id asc');
      
        if($data['limit'][0]['withdrawal_limit'] < $data['user_info'][0]['earned_amount']){
          $data['button_value'] = "1";
        }else{
          $data['button_value'] = "2";
        }
        $data['referral_count'] =  $this->Md_database->countAllResult(SCROLLUP_REFERRAL_LIST,array('status'=>1,'referred_by' => $data['user_info'][0]['mobile_number']),$like = '');
        $data['banner'] = $this->Md_database->getData(SCROLLUP_BANNER,'id,banner_img',array('status'=>1),'id');
        $this->frontend('front/referral_dashboard',$data,TRUE);
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
	public function logout_action()
    {
      if (!empty($this->session->userdata('USERID'))) {
        $data = array(
          'status' => 'logout',
          'updated_ip_address' => ip_address(),
          'logout_time' => $this->current_date_time,
        );
        $condition = array(
          'username' => $this->session->userdata('USEREMAIL'),
          'status' => 'login',
        );
        $this->Md_database->updateData(SCROLLUP_LOGIN_LOGS, $data, $condition);
        $this->session->unset_userdata('USERID');
        $this->session->unset_userdata('USERCITYID');
        $this->session->unset_userdata('USERTBNAME');
        $this->session->unset_userdata('USERNAME');
        $this->session->unset_userdata('USEREMAIL');
        $this->session->unset_userdata('USERMOBILE');
        $this->session->unset_userdata('USERPD');
      }
      $this->session->set_flashdata('success', 'You are logged out successfully.');
  
      redirect('referral-login', 'refresh', 301);
    }

    public function withdrawal_amount(){
      if (!$this->input->is_ajax_request()) {
        exit('No direct script access allowed');
      } else {
          $user_ammount  = trim($this->input->post("user_ammount"));
          $user_id  = trim($this->input->post("user_id"));
          $get_tb_name =  $this->session->userdata('USERTBNAME');
          $data['user_info'] = $this->Md_database->getData($get_tb_name, 'user_id,mobile_number,name,earned_amount,city_id',array('status'=>1 , 'user_id' =>$user_id),'user_id asc');
          $old_payment_data = $this->Md_database->getData(SCROLLUP_USER_PAYMENT_DETAILS,'id,request_id',array('status'=>1),'id desc');

          
          if(!empty($user_id)){

            if(!empty($old_payment_data)){
              $old_payment_data = $old_payment_data[0]['id'] + 1;
            }else{
              $old_payment_data = 1;
            }
            $data = array(
              'user_id' => $user_id,
              'city_id' => $data['user_info'][0]['city_id'],
              'request_id' => "R".$old_payment_data,
              'created_at' => $this->current_date_time,
              'mobile_number' => $data['user_info'][0]['mobile_number'],
              'request_amount' => $user_ammount,
              'created_by' => $this->session->userdata('USERID'),
              'created_ip_address'=> ip_address(),
            );
            
            // echo "<pre>";
            // print_r ($data);
            // echo "</pre>";
            // die;
            $this->Md_database->insertData(SCROLLUP_USER_PAYMENT_DETAILS, $data);
            $this->session->set_flashdata('success', 'Withdrawal request sent successfully');
            $dataArray = array(
              'earned_amount' => 0,
            );
            $this->Md_database->updateData($get_tb_name, $dataArray, array('user_id' => $user_id));
						// redirect(base_url() . 'referral-dashboard');
            $status = "true";
          }else{
            $this->session->set_flashdata('error', 'Unable to send withdrawal request.');
            // redirect(base_url() . 'referral-dashboard');
            $status = "false";
          }
          echo json_encode(array("status" =>$status));
      }
    }
  /**
	 * ***************Function to save bank-details **********
	 * @type : Function
	 * @function name : bank_details_action
	 * @description : Insert "bank-details data" admin interface
	 * @param : null
	 * @designer : Yogita Patil
	 * @author : Yugal Mali
	 * @return : null
	 ********************************************************* */
    public function bank_details_action(){
      // if (!empty($this->input->post())) {
        // $this->form_validation->set_rules('bank_name', 'bank_name', 'trim|required');
        // $this->form_validation->set_rules('acc_no', 'acc_no', 'trim|required');
        // if ($this->form_validation->run() === FALSE) {
        //   $this->session->set_flashdata('error', validation_errors());
        //   redirect($_SERVER['HTTP_REFERER']);
        //   exit();
        // } else {
          $formdata = $this->input->post();
          unset($formdata['submit_btn']);
          $data = array_map('trim', $formdata);
          $check = '';
          $user_id =  $this->session->userdata('USERID');
          $get_tb_name =  $this->session->userdata('USERTBNAME');
          $user_info = $this->Md_database->getData($get_tb_name, 'user_id,mobile_number,name,earned_amount,city_id',array('status'=>1 , 'user_id' =>$user_id),'user_id asc');

          
          if (!empty($user_info)) {
                $data['updated_by'] = $this->session->userdata('USERNAME');
                $data['updated_at'] = $this->current_date_time;
                $data['updated_ip_address'] = ip_address();
                $check = $this->Md_database->updateData($get_tb_name, $data, array('user_id' => $user_id));
                if (!empty($check)) {
                  $this->system_log($get_tb_name, 'update', $data, array('id' => $check));
                  $this->session->set_flashdata('success', 'Bank details saved successfully');
                } else {
                  $this->session->set_flashdata('error', 'Unable to save bank details');
                }
            }else{
              // // $user_details = $this->Md_database->getData(SCROLLUP_REGISTERED_USERS,'user_id',array('status' => 1,'user_id' => $user_id),'user_id asc');
              // $data['created_by'] = $this->session->userdata('USERNAME');
              // $data['created_at'] = $this->current_date_time;
              // $data['created_ip_address'] = ip_address();
              // $check = $this->Md_database->insertData(SCROLLUP_USER_BANK_DETAILS, $data);

              // if (!empty($check)) {
              //   $get_data = $this->Md_database->getData(SCROLLUP_USER_BANK_DETAILS,'id',array('status'=>1),'id asc');
                
              //   $bd_id = array(
              //     'bd_id' => $get_data[0]['id'],
              //   );
              //   $this->Md_database->updateData($get_tb_name,$bd_id,array('user_id'=>$user_id));
              //   $this->system_log(SCROLLUP_USER_BANK_DETAILS, 'insert', $data, array('id' => $user_id));
              //   $this->session->set_flashdata('success', 'Bank details saved successfully');
              // } else {
                $this->session->set_flashdata('error', 'Unable to save bank details');
              // }
            }
          // }
          redirect('referral-dashboard', 'refresh', 301);
        // }
      }
}