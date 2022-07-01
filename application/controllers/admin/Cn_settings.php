<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cn_settings extends MY_Controller
{

    /**
     * This is view general settings page cn_general_settings function
     * no perameter are required
     * 
     *
     * @param   no perameter
     * @package   application/Controller/cn_general_settings **/
    public function cn_general_settings()
    {
        $data['result'] = $this->Md_database->getData(SCROLLUP_GENERAL_SETTINGS);
        $this->adminBackend('admin/settings/general_settings', $data, true);
    }
    /**
     * This is view email settings page cn_email_settings function
     * no perameter are required
     * 
     *
     * @param   no perameter
     * @package   application/Controller/cn_email_settings **/
    public function cn_email_settings()
    {
        $this->adminBackend('admin/settings/email_settings');
    }
    /**
     * This is view social settings page cn_social_login_settings function
     * no perameter are required
     * 
     *
     * @param   no perameter
     * @package   application/Controller/cn_social_login_settings **/
    public function cn_social_login_settings()
    {
        $this->adminBackend('admin/settings/social_login');
    }
    /**
     * This is view visual settings page cn_visual_settings function
     * no perameter are required
     * 
     *
     * @param   no perameter
     * @package   application/Controller/cn_visual_settings **/
    public function cn_visual_settings()
    {
        $data['visualSettings'] = $this->Md_database->getData(SCROLLUP_VISUAL_SETTINGS, '*', array());
        $this->adminBackend('admin/settings/visual_settings', $data, true);
    }
    /**
     * ***************Function to vistual setting action **********
     * @type : Function
     * @function name : action_visual_setting
     * @description : Insert "action_visual_setting data" admin interface
     * @param : null
     * @designer : Yogita Patil
     * @author : Yugal Mali
     * @return : null
     ********************************************************* */
    public function action_visual_setting()
    {
        $dataArr = array(
            'created_by' => $this->session->userdata('UADMINNAME'),
            'created_at' => $this->current_date_time,
            'updated_ip_address' => ip_address(),
        );
        if (!empty($_FILES['logo']['name'])) {
            $folder = 'uploads/settings/';
            if (!file_exists($folder)) {
                mkdir($folder, 0777, true);
            }
            $rename_name = uniqid(); //get file extension:
            $arr_file_info = pathinfo($_FILES['logo']['name']);
            $file_extension = $arr_file_info['extension'];
            $photoDoc = $rename_name . '.' . $file_extension;
            $old_name = $_FILES['logo']['name'];
            $config = array();
            $config['upload_path'] = FCPATH . $folder;
            $config['overwrite'] = FALSE;
            $config["allowed_types"] = 'jpg|png|jpeg|gif|bmp';
            // $config["max_size"] = 100024;
            // $config["min_width"] = 750;
            // $config["max_width"] = 750;
            // $config["min_height"] = 400;
            // $config["max_height"] = 400;
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = FALSE;
            $config['file_name'] = $photoDoc;
            $this->load->library('upload');
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('logo')) {
                $this->data['error'] = $this->upload->display_errors();
                $error = $this->data['error'];
                $error = str_replace("'", "\'", $error);
                $this->session->set_flashdata('error', $error);
                redirect('shubham/visual-settings', 'refresh', 301);
                exit();
            } else {
                $this->upload->data();
            }
            if (!empty($photoDoc)) {
                $dataArr['logo'] = $folder . $photoDoc;
            }
        }

        if (!empty($_FILES['email_logo']['name'])) {
            $folder = 'uploads/settings/';
            if (!file_exists($folder)) {
                mkdir($folder, 0777, true);
            }
            $rename_name = uniqid(); //get file extension:
            $arr_file_info = pathinfo($_FILES['email_logo']['name']);
            $file_extension = $arr_file_info['extension'];
            $emailPhoto = $rename_name . '.' . $file_extension;
            $old_name = $_FILES['email_logo']['name'];
            $config = array();
            $config['upload_path'] = FCPATH . $folder;
            $config['overwrite'] = FALSE;
            $config["allowed_types"] = 'jpg|png|jpeg|gif|bmp';
            // $config["max_size"] = 100024;
            // $config["min_width"] = 750;
            // $config["max_width"] = 750;
            // $config["min_height"] = 400;
            // $config["max_height"] = 400;
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = FALSE;
            $config['file_name'] = $emailPhoto;
            $this->load->library('upload');
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('email_logo')) {
                $this->data['error'] = $this->upload->display_errors();
                $error = $this->data['error'];
                $error = str_replace("'", "\'", $error);
                $this->session->set_flashdata('error', $error);
                redirect('shubham/visual-settings', 'refresh', 301);
                exit();
            } else {
                $this->upload->data();
            }
            if (!empty($emailPhoto)) {
                $dataArr['email_logo'] = $folder . $emailPhoto;
            }
        }

        if (!empty($_FILES['favicon']['name'])) {
            $folder = 'uploads/settings/';
            if (!file_exists($folder)) {
                mkdir($folder, 0777, true);
            }
            $rename_name = uniqid(); //get file extension:
            $arr_file_info = pathinfo($_FILES['favicon']['name']);
            $file_extension = $arr_file_info['extension'];
            $faviconPhoto = $rename_name . '.' . $file_extension;
            $old_name = $_FILES['favicon']['name'];
            $config = array();
            $config['upload_path'] = FCPATH . $folder;
            $config['overwrite'] = FALSE;
            $config["allowed_types"] = 'jpg|png|jpeg|gif|bmp';
            // $config["max_size"] = 100024;
            // $config["min_width"] = 750;
            // $config["max_width"] = 750;
            // $config["min_height"] = 400;
            // $config["max_height"] = 400;
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = FALSE;
            $config['file_name'] = $faviconPhoto;
            $this->load->library('upload');
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('favicon')) {
                $this->data['error'] = $this->upload->display_errors();
                $error = $this->data['error'];
                $error = str_replace("'", "\'", $error);
                $this->session->set_flashdata('error', $error);
                redirect('shubham/visual-settings', 'refresh', 301);
                exit();
            } else {
                $this->upload->data();
            }
            if (!empty($faviconPhoto)) {
                $dataArr['favicon'] = $folder . $faviconPhoto;
            }
        }

        $where = array('id ' => 1);
        $response = $this->Md_database->updateData(SCROLLUP_VISUAL_SETTINGS, $dataArr, $where);
        if (!empty($response)) {
            $this->system_log(SCROLLUP_VISUAL_SETTINGS, 'update', $dataArr, array('id' => 1));
            $this->session->set_flashdata('success', 'Visual setting updated successfully');
        } else {
            $this->session->set_flashdata('success', 'Unable to update visual setting');
        }
        redirect('shubham/visual-settings');
    }


    /**
     * This is admin update password function
     * no perameter are required
     * this function are used to update the admin password
     * 
     * @param   no perameter
     * @package   application/Controller/Adminarea/admin/admin-update-change-password
     */
    public function updateAdminPassword()
    {

        if ($this->input->post()) {
            // if ($this->form_validation->run('change_pass_form') == false) {
            //       $this->session->set_flashdata('error', validation_errors());
            //       redirect($this->agent->referrer(),'location',301);
            //       exit();
            // }else {
            $data = $this->input->post();
            $data['admin_data'] = $this->Md_database->getData(SCROLLUP_USERADMIN, 'id,password', array('id' => $this->session->userdata('UADMINID')), '', '');
            if ($this->encryption->decrypt($data['admin_data'][0]['password']) == $data['old_pass']) {

                if (!empty($this->session->userdata('UADMINID'))) {
                    $updateData = array(
                        'updated_by' => $this->session->userdata('UADMINID'),
                        'updated_at' => $this->current_date_time,
                        'password' => $this->encryption->encrypt($data['new_pass']),
                        'updated_ip_address' => '1',
                    );

                    $conditoin = array('id' => $this->session->userdata('UADMINID'));
                    $res = $this->Md_database->updateData(SCROLLUP_USERADMIN, $updateData, $conditoin);

                    // echo $res;
                    // die();
                    if (!empty($res)) {
                        $this->session->set_flashdata('success', 'Password Update successful.');
                        $this->session->unset_userdata('UADMINID');
                        $this->session->unset_userdata('UADMINPD');
                        $this->session->unset_userdata('UADMINNAME');
                        $this->session->unset_userdata('UADMINMAIL');
                        $this->session->unset_userdata('UADMINTYPE');
                        redirect(base_url() . 'shubham');
                    } else {
                        $this->session->set_flashdata('error', 'Password Not Updated.');
                        redirect($this->agent->referrer(), 'location', 301);
                    }
                }
            } else {
                $this->session->set_flashdata('error', 'Old Password does not match.');
                redirect($this->agent->referrer(), 'location', 301);
            }
            // }
        } else {
            redirect(base_url() . 'shubham/dashboard');
        }
    }

    public function contact_setting()
    {



        $data = $this->input->post();
        unset($data['submit']);

        if (!empty($this->input->post('pk_id_sec1'))) {
            $msg = 'update';
            $data['updated_at'] = date('Y-m-d H:i:s');
            $data['updated_by'] = $this->session->userdata('UADMINID');
            $data['updated_ip_address'] = ip_address();


            $condition = array('id' => $this->input->post('pk_id_sec1'));
            unset($data['pk_id_sec1']);
            $response = $this->Md_database->updateData(SCROLLUP_GENERAL_SETTINGS, $data, $condition);
            // $this->system_log(SCROLLUP_GENERAL_SETTINGS,'update',$data,array('id' => $response));

        } else {
            $msg = 'add';
            $data['created_at'] = date('Y-m-d H:i:s');
            $data['created_by'] = $this->session->userdata('UADMINID');
            $data['created_ip_address'] = ip_address();

            unset($data['pk_id_sec1']);
            $response = $this->Md_database->insertData(SCROLLUP_GENERAL_SETTINGS, $data);
            // $this->system_log(SCROLLUP_GENERAL_SETTINGS,'insert',$data,array('id' => $response));
        }
        if (!empty($response)) {
            $this->session->set_flashdata('success', 'General Setting ' . $msg . ' successfully');
        } else {
            $this->session->set_flashdata('error', 'Unable to ' . $msg . ' General Setting');
        }
        redirect('shubham/general-settings');
    }

    public function social_media_setting()
    {

        $data = $this->input->post();

        unset($data['submit']);

        if (!empty($this->input->post('pk_id_sec1'))) {
            $msg = 'update';
            $data['updated_at'] = date('Y-m-d H:i:s');
            $data['updated_by'] = $this->session->userdata('UADMINID');
            $data['updated_ip_address'] = ip_address();


            $condition = array('id' => $this->input->post('pk_id_sec1'));
            unset($data['pk_id_sec1']);
            $response = $this->Md_database->updateData(SCROLLUP_GENERAL_SETTINGS, $data, $condition);
            // $this->system_log(SCROLLUP_GENERAL_SETTINGS,'update',$data,array('id' => $response));
        } else {
            $msg = 'add';
            $data['created_at'] = date('Y-m-d H:i:s');
            $data['created_by'] = $this->session->userdata('UADMINID');
            $data['created_ip_address'] = ip_address();

            unset($data['pk_id_sec1']);
            $response = $this->Md_database->insertData(SCROLLUP_GENERAL_SETTINGS, $data);
            // $this->system_log(SCROLLUP_GENERAL_SETTINGS,'insert',$data,array('id' => $response));
        }
        if (!empty($response)) {
            $this->session->set_flashdata('success', 'General Setting ' . $msg . ' successfully');
        } else {
            $this->session->set_flashdata('error', 'Unable to ' . $msg . ' General Setting');
        }
        redirect('shubham/general-settings');
    }

    public function header_footer_setting()
    {
        $data = $this->input->post();

        unset($data['submit']);

        if (!empty($this->input->post('pk_id_sec1'))) {
            $msg = 'update';
            $data['updated_at'] = date('Y-m-d H:i:s');
            $data['updated_by'] = $this->session->userdata('UADMINID');
            $data['updated_ip_address'] = ip_address();


            $condition = array('id' => $this->input->post('pk_id_sec1'));
            unset($data['pk_id_sec1']);
            $response = $this->Md_database->updateData(SCROLLUP_GENERAL_SETTINGS, $data, $condition);
            // $this->system_log(SCROLLUP_GENERAL_SETTINGS,'update',$data,array('id' => $response));


        } else {
            $msg = 'add';
            $data['created_at'] = date('Y-m-d H:i:s');
            $data['created_by'] = $this->session->userdata('UADMINID');
            $data['created_ip_address'] = ip_address();

            unset($data['pk_id_sec1']);
            $response = $this->Md_database->insertData(SCROLLUP_GENERAL_SETTINGS, $data);
            // $this->system_log(GENERAL_SETTING,'insert',$data,array('id' => $response));
        }
        if (!empty($response)) {
            $this->session->set_flashdata('success', 'General Setting ' . $msg . ' successfully');
        } else {
            $this->session->set_flashdata('error', 'Unable to ' . $msg . ' General Setting');
        }
        redirect('shubham/general-settings');
    }
}
