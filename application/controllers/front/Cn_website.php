<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cn_website extends MY_Controller
{



    public function __construct()
    {
        parent::__construct();
        $this->current_date_time = date('Y-m-d H:i:s');
    }
    /**
     * ***************Function to get city & mobile_number details **********
     * @type : Function
     * @function name : get_district_mobile_number_data
     * @description : Get city & mobile_number details
     * @param : null
     * @designer : Yogita Patil
     * @author : Yugal Mali
     * @return : null
     ********************************************************* */
    public function get_district_mobile_number_data()
    {

        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        } else {
            $city  = trim($this->input->post("city"));
            $mobile_number  = trim($this->input->post("mobile_number"));
            $data = $this->get_city_id_using_mobile_number($mobile_number);

            $get_city_tb_name = $this->Md_database->getData(SCROLLUP_MASTER_CITY, 'city_id,sql_tb_name,whatsapp_url,join_url', array('status' => 1, 'city_id' => $city), 'city_id asc');
            $home = $this->Md_database->getData(SCROLLUP_ANIMATED_HOME, 'id,popup_1,popup_2,animated_heading_1,animated_heading_2,animated_heading_3,animated_heading_4,animated_heading_5,sub_heading,animated_heading_6,animated_heading_7,animated_heading_8,animated_heading_9,button_2,banner,button_1', array('status' => 1), 'id asc');

            if (!empty($data)) {
                // echo 0;
                $status = "true";
            } else {
                // echo 1;
                $status = "false";
            }
            echo json_encode(array("status" => $status, "join_url" => $get_city_tb_name[0]['join_url'], "popup_2" => $home[0]['popup_2']));
        }
    }



    /**
     * ***************Function to check Number is already exist or not **********
     * @type : Function
     * @function name : check_number
     * @description : Check "number data" admin interface
     * @param : id
     * @designer : Yogita Patil
     * @author : Yugal Mali
     * @return : null
     ********************************************************* */
    public function check_number()
    {
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        } else {
            $mobile_number = trim($this->input->post('mobile_number'));
            $city = trim($this->input->post('city'));

            $get_city_tb_name = $this->Md_database->getData(SCROLLUP_MASTER_CITY, 'city_id,sql_tb_name,whatsapp_url,join_url', array('status' => 1, 'city_id' => $city), 'city_id asc');
            $data['get_mobile_data'] = $this->Md_database->getData($get_city_tb_name[0]['sql_tb_name'], 'user_id,city_id,mobile_number,whatsapp_url', array('status' => 1, 'mobile_number' => "+91" . $mobile_number, 'city_id' => $city), 'user_id');
            if (!empty($data['get_mobile_data'])) {
                // echo 0;
                $status = "true";
            } else {
                // echo 1;
                $status = "false";
            }
            if (!empty($data["get_mobile_data"][0]['whatsapp_url'])) {
                $link = $data["get_mobile_data"][0]['whatsapp_url'];
            } else {
                $link = $get_city_tb_name[0]['whatsapp_url'];
            }
            echo json_encode(array("status" => $status, "link" => $link, "join_url" => $get_city_tb_name[0]['join_url']));
        }
    }

    /**
     * ***************Function to check Number is already exist or not **********
     * @type : Function
     * @function name : check_number
     * @description : Check "number data" admin interface
     * @param : id
     * @designer : Yogita Patil
     * @author : Yugal Mali
     * @return : null
     ********************************************************* */
    public function check_duplicate_number()
    {
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        } else {
            $mobile_number = trim($this->input->post('mobile_number'));

            $data = $this->get_city_id_using_mobile_number($mobile_number);

            if (!empty($data)) {
                echo "true";
            } else {
                // $this->session->unset_userdata('USEROTP');
                $otp =  mt_rand('100000', '999999');
                $templates_id = "1607100000000154203";
                // $message = "Your Scrollup verification one time password is " . $otp . " Code is valid for 10 minutes only, One Time Use.";
                $res = otp($mobile_number, $otp, $templates_id);
                $this->session->set_userdata('USEROTP', $otp);
                echo "false";
            }
        }
    }

    /**
     * ***************Function to get otp verify **********
     * @type : Function
     * @function name : get_otp_verify
     * @description : Check "number data" admin interface
     * @param : id
     * @designer : Yogita Patil
     * @author : Yugal Mali
     * @return : null
     ********************************************************* */
    public function get_otp_verify()
    {
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        } else {
            $mobile_number = trim($this->input->post('mobile_number'));
            $city = trim($this->input->post('city'));
            $otp = trim($this->input->post('otp'));
            $referral_by = trim($this->input->post('referral_by'));
            $referral_user_id = trim($this->input->post('referral_user_id'));
            $referral_tb_name = trim($this->input->post('referral_tb_name'));
            $referral_city_id = trim($this->input->post('referral_city_id'));
            $referral_name = trim($this->input->post('referral_name'));
            $data = $this->get_city_id_using_mobile_number($mobile_number);
            $session_otp =  $this->session->userdata('USEROTP');
            $limit = $this->Md_database->getData(SCROLLUP_MASTER_CONFIGURATION, 'id,referral_commission,withdrawal_limit', array('status' => 1), 'id asc');



            if ($otp == $session_otp) {

                $get_city = $this->Md_database->getData(SCROLLUP_MASTER_CITY, 'batch,dist_code,lable_code,city_id,sql_tb_name,whatsapp_url', array('status' => 1, 'city_id' => $city), 'city_id asc');
                // $city_code = $this->Md_database->getData(SCROLLUP_MASTER_CITY, 'city_id,dist_code,lable_code,city',array('status'=>1,'city_id'=>$data['city']),'city_id asc');
                $upper_case_string = $get_city[0]['dist_code'];
                $count_city = $this->Md_database->getData($get_city[0]['sql_tb_name'], 'count(user_id) as  id_count', array('status' => 1));
                $num_padded = sprintf("%07d", 1 + $count_city[0]['id_count']);
                $append_given_name = $upper_case_string . $num_padded;
                $compare_batch = 250 * $get_city[0]['batch'];

                $batch_count = ($count_city[0]['id_count'] != 0) ? $count_city[0]['id_count'] : 1;
                if ($batch_count >= $compare_batch) {
                    if (!empty($get_city[0]['batch'])) {
                        $update_batch['batch'] = $get_city[0]['batch'] + 1;
                        $batch_number = $get_city[0]['batch'] + 1;
                        $this->Md_database->updateData(SCROLLUP_MASTER_CITY, $update_batch, array('city_id' => $data['city']));
                    }
                } else {
                    $batch_number = $get_city[0]['batch'];
                }
                $insert_data = array(
                    'referral_by' =>  $referral_by,
                    'city_id' => $city,
                    'otp' => $otp,
                    'referral_status' => 2,
                    'mobile_number' => "+91" . $mobile_number,
                    'whatsapp_url' => $get_city[0]['whatsapp_url'],
                    'created_at' =>  $this->current_date_time,
                    'created_ip_address' =>  ip_address(),
                    'given_name' =>  $append_given_name,
                    'family_name' => $get_city[0]['lable_code'] . sprintf("%04d", $batch_number),
                    'group_membership' => $get_city[0]['lable_code'] . sprintf("%04d", $batch_number) . ' ::: ALL ::: * myContacts',
                );
                $data_list = array(
                    'mobile_number' => "+91" . $mobile_number,
                    'referred_by' =>  "+91" . $referral_by,
                    'city_id' => $city,
                    'city_id_referred_by' => $referral_city_id,
                    'name' => $referral_name,
                    'user_id_referral' => $referral_user_id,
                    'tb_name_referred_by' => $referral_tb_name,
                    'tb_name' => $get_city[0]['sql_tb_name'],
                    'referral_amount' => $limit[0]['referral_commission'],
                    'created_at' => $this->current_date_time,
                    'created_ip_address' =>  ip_address(),
                );

                if (!empty($data_list)) {
                    $check = $this->Md_database->insertData(SCROLLUP_REFERRAL_LIST, $data_list);
                    if (!empty($check)) {
                        $this->system_log(SCROLLUP_REFERRAL_LIST, 'insert', $data_list, array('user_id' => $check));
                    }
                }
                if (!empty($insert_data)) {
                    $this->session->unset_userdata('USEROTP');
                    $check = $this->Md_database->insertData($get_city[0]['sql_tb_name'], $insert_data);
                    $this->Md_database->insertData(SCROLLUP_REGISTERED_USERS, $insert_data);
                    if (!empty($check)) {
                        $this->system_log($get_city[0]['sql_tb_name'], 'insert', $insert_data, array('user_id' => $check));
                    }
                }
                $get_referred_user_data = $this->Md_database->getData($referral_tb_name, 'user_id,city_id,total_earned_amount,earned_amount', array('status' => 1, 'user_id' => $referral_user_id), 'user_id');
                if (!empty($get_referred_user_data)) {
                    $referral_amt = $get_referred_user_data[0]['earned_amount'] + $limit[0]['referral_commission'];
                    $total_earned = $get_referred_user_data[0]['total_earned_amount'] + $limit[0]['referral_commission'];
                } else {
                    $referral_amt = $limit[0]['referral_commission'];
                    $total_earned = $limit[0]['referral_commission'];
                }

                $referred_user = array(
                    'earned_amount' => $referral_amt,
                    'total_earned_amount' => $total_earned,
                );
                $this->Md_database->updateData($referral_tb_name, $referred_user, array('user_id' => $referral_user_id));
            }

            $data = $this->get_city_id_using_mobile_number($mobile_number);
            if (!empty($data)) {
                $status = "true";
                $redirect_link = !empty($get_city[0]['whatsapp_url']) ? $get_city[0]['whatsapp_url'] : 'https://scrollup.in/';
                // $this->session->set_flashdata('success', 'Registration successfully');
            } else {
                $status = "false";
                $redirect_link = '';
                $this->session->set_flashdata('error', 'Unable to register');
            }
            echo json_encode(array("status" => $status, "link" => $redirect_link));
        }
    }
    /**
     **************Function to add number **********
     * @type : Function
     * @function name : add_number
     * @description : Check "add number" admin interface
     * @param : id
     * @designer : Yogita Patil
     * @author : Yugal Mali
     * @return : null
     ********************************************************/
    public function add_number()
    {
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        } else {
            $mobile_number = trim($this->input->post('mobile_number'));
            $city = trim($this->input->post('city'));
            $get_city_tb_name = $this->Md_database->getData(SCROLLUP_MASTER_CITY, 'city_id,mobile_no,sql_tb_name,whatsapp_url,join_url', array('status' => 1, 'city_id' => $city), 'city_id asc');

            $regiser_list = $this->Md_database->getData($get_city_tb_name[0]['sql_tb_name'], 'city_id,user_id,mobile_number,whatsapp_url', array('status' => 1, 'mobile_number' => "+91" . $mobile_number), 'user_id');
            if (!empty($regiser_list)) {
                $this->session->set_flashdata('error', 'Duplicate entry not allowed');
                //  redirect($_SERVER['HTTP_REFERER']);
                $status = 'false';
            } else {
                $batch_data = $this->Md_database->getData(SCROLLUP_MASTER_CITY, 'city_id,batch,city', array('city_id' => $city));
                //  $city = $batch_data[0]['city'];
                $city_code = $this->Md_database->getData(SCROLLUP_MASTER_CITY, 'city_id,dist_code,lable_code,city', array('status' => 1, 'city_id' => $city), 'city_id asc');
                $upper_case_string = $city_code[0]['dist_code'];
                $count_city = $this->Md_database->getData($get_city_tb_name[0]['sql_tb_name'], 'count(user_id) as  id_count', array('status' => 1));
                $num_padded = sprintf("%07d", 1 + $count_city[0]['id_count']);
                $append_given_name = $upper_case_string . $num_padded;
                $compare_batch = 250 * $batch_data[0]['batch'];

                $batch_count = ($count_city[0]['id_count'] != 0) ? $count_city[0]['id_count'] : 1;
                if ($batch_count >= $compare_batch) {
                    if (!empty($batch_data)) {
                        $update_batch['batch'] = $batch_data[0]['batch'] + 1;
                        $batch_number = $batch_data[0]['batch'] + 1;
                        $this->Md_database->updateData(SCROLLUP_MASTER_CITY, $update_batch, array('city_id' => $city));
                    }
                } else {
                    $batch_number = $batch_data[0]['batch'];
                }


                $insert_data = array(
                    'given_name' =>  $append_given_name,
                    'whatsapp_operated' => "+91" . $get_city_tb_name[0]['mobile_no'],
                    'city_id' =>  $get_city_tb_name[0]['city_id'],
                    'family_name' => $city_code[0]['lable_code'] . sprintf("%04d", $batch_number),
                    'group_membership' => $city_code[0]['lable_code'] . sprintf("%04d", $batch_number) . ' ::: ALL ::: * myContacts',
                    'mobile_number' => "+91" . $mobile_number,
                    'whatsapp_url' => $get_city_tb_name[0]['whatsapp_url'],
                    'created_at' =>  $this->current_date_time,
                    'created_ip_address' =>  ip_address(),
                );
                if ($insert_data['city_id'] == 0) {
                    $insert_data['city_id'] = 1;
                }
                $check = $this->Md_database->insertData($get_city_tb_name[0]['sql_tb_name'], $insert_data);
                $this->Md_database->insertData(SCROLLUP_REGISTERED_USERS, $insert_data);
                if (!empty($check)) {
                    $home_link = $this->Md_database->getData($get_city_tb_name[0]['sql_tb_name'], 'city_id,user_id,mobile_number,whatsapp_url', array('status' => 1, 'mobile_number' => "+91" . $mobile_number), 'user_id');

                    $this->system_log($get_city_tb_name[0]['sql_tb_name'], 'insert', $insert_data, array('user_id' => $check));
                    $status = 'true';
                    $redirect_link = !empty($home_link[0]['whatsapp_url']) ? $home_link[0]['whatsapp_url'] : '';
                    $join_link = !empty($get_city_tb_name[0]['join_url']) ? $get_city_tb_name[0]['join_url'] : '';
                    // $this->session->set_userdata('LINK',$redirect_link);
                    // $this->session->set_flashdata('success', 'Registration successfully');

                } else {
                    $status = 'false';
                    $redirect_link = '';
                    $join_link = '';
                    $this->session->set_flashdata('error', 'Unable to register');
                }
                echo json_encode(array("status" => $status, "link" => $redirect_link, "join_link" => $join_link));
            }
        }
    }
    /**
     **************Function to get join url **********
     * @type : Function
     * @function name : get_join_url
     * @description : Check "get_join_url" admin interface
     * @param : id
     * @designer : Yogita Patil
     * @author : Yugal Mali
     * @return : null
     ********************************************************/
    public function get_join_url()
    {
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        } else {
            $city = trim($this->input->post('city'));
            $mobile_number = trim($this->input->post('mobile_number'));

            $get_city_tb_name = $this->Md_database->getData(SCROLLUP_MASTER_CITY, 'city_id,sql_tb_name,whatsapp_url,join_url', array('status' => 1, 'city_id' => $city), 'city_id asc');
            $join_link = !empty($get_city_tb_name[0]['join_url']) ? $get_city_tb_name[0]['join_url'] : '';

            $home_link = $this->Md_database->getData($get_city_tb_name[0]['sql_tb_name'], 'city_id,user_id,mobile_number,whatsapp_url', array('status' => 1, 'mobile_number' => "+91" . $mobile_number), 'user_id');

            echo json_encode(array("link" => $join_link, "url" => $home_link[0]['whatsapp_url']));
        }
    }
}
