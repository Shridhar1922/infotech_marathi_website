<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Cn_referral_page extends MY_Controller
{
 /**
   * This is view referral_page page index function
   * no perameter are required
   * 
   *
   * @param   no perameter
   * @package   application/Controller/referral_page/index**/
    public function index()
    {
        $data['referral'] = $this->Md_database->getData(SCROLLUP_REFERRAL_PAGE, 'id,heading,logo,content',array('status'=>1),'id asc');
        $this->adminBackend('admin/referral_page/referral',$data,TRUE);
    }

    /*****************Function to add referral page**********
     * @type : Function
     * @function name : referral_action
     * @description : Insert "add referral page" admin interface
     * @param : null
     * @designer : Yogita Patil
     * @author : Yugal Mali
     * @return : null
     ********************************************************* */
    public function referral_action()
    {
        if (!empty($this->input->post())) {
            $this->form_validation->set_rules('heading', 'heading', 'trim|required');
            if ($this->form_validation->run() == false) {
                $this->session->set_flashdata('error', trim(validation_errors()));
				redirect($_SERVER['HTTP_REFERER']);
                exit();
            } else {
                $formdata =  $this->security->xss_clean($this->input->post());
                $txtpkey = $formdata['txtpkey'];
                $logo_old = $formdata['logo_old'];
                unset($formdata['submit_btn']);
                unset($formdata['txtpkey']);
                unset($formdata['logo_old']);
                $data = array_map('trim', $formdata);
                
                // echo "<pre>";
                // print_r ($data);
                // echo "</pre>";
                // die;
                $check = '';
                if (!empty($txtpkey)) {
                    if (!empty($_FILES['logo']['name'])) {
                        $folder = 'uploads/logo/';
                        if (!file_exists($folder)) {
                            mkdir($folder, 0777, true);
                        }

                        $rename_name = uniqid(); //get file extension:
                        $arr_file_info = pathinfo($_FILES['logo']['name']);
                        $file_extension = $arr_file_info['extension'];
                        $photoDoc = $rename_name . '.' . $file_extension;
                        $old_name = $_FILES['logo']['name'];
                        $filelocation = $folder . $photoDoc;
                        $config = array();
                        $config['upload_path'] = FCPATH . $folder;
                        $config['overwrite'] = FALSE;
                        $config["allowed_types"] = 'jpg|png|jpeg|gif|bmp';
                        // $config["max_size"] = 100024;
                        // $config["min_width"] = 400;
                        // $config["max_width"] = 400;
                        // $config["min_height"] = 400;
                        // $config["max_height"] = 400;
                        $config['create_thumb'] = TRUE;
                        $config['maintain_ratio'] = FALSE;
                        $config['file_name'] = $photoDoc;
                        $this->load->library('upload');
                        $this->upload->initialize($config);
                        //load image library:
                        if (!$this->upload->do_upload('logo')) {
                            $this->data['error'] = $this->upload->display_errors();
                            $error = $this->data['error'];
                            $error = str_replace("'", "\'", $error);
                            $this->session->set_flashdata('error', $error);
                            redirect($this->agent->referrer(), 'location', 301);
                            exit();
                        } else {
                            $this->upload->data();
                        }
                    }
                    if ($_FILES['logo']['name']) {
                        $old_logo_img = !empty($logo_old) ? $logo_old : '';
                        $file =  $old_logo_img;
                        if (is_file($file))
                            unlink($file); // delete file
                        $logo = $filelocation;
                    } else {
                        $logo = !empty($logo_old) ? $logo_old : '';
                    }

                    $data['logo'] = $logo;
                    $data['updated_by'] = $this->session->userdata('UADMINID');
                    $data['updated_at'] = $this->current_date_time;
                    $data['updated_ip_address'] = ip_address();
                    $check = $this->Md_database->updateData(SCROLLUP_REFERRAL_PAGE, $data, array('id' => $txtpkey));
                    if (!empty($check)) {
                        $std_id = $txtpkey;
                       
                        $this->system_log(SCROLLUP_REFERRAL_PAGE, 'update', $data, array('id' => $txtpkey));
                        $this->session->set_flashdata('success', 'Referral page save successfully');
                    } else {
                        $std_id = $txtpkey;
                        $this->session->set_flashdata('error', 'Unable to save referral page');
                        redirect('shubham/edit-referral-page', 'refresh', 301);
                    }
            } else {
                    // echo $_FILES['logo']['name'];
                    // die;
                    if (!empty($_FILES['logo']['name'])) {

                        $folder = 'uploads/logo/';
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
                        $config["allowed_types"] = 'jpg|png|jpeg|gif';
                        $config['create_thumb'] = TRUE;
                        $config['maintain_ratio'] = FALSE;
                        $config['file_name'] = $photoDoc;
                        $this->load->library('upload');
                        $this->upload->initialize($config);
                        //load image library:
                        if (!$this->upload->do_upload('logo')) {
                            $this->data['error'] = $this->upload->display_errors();
                            $error = $this->data['error'];
                            $error = str_replace("'", "\'", $error);
                            $this->session->set_flashdata('error', $error);
                            redirect($this->agent->referrer(), 'location', 301);
                            exit();
                        } else {
                            $this->upload->data();
                        }
                    } else {
                        $photoDoc = '';
                    }


                    $data['logo'] = $photoDoc;
                    $data['created_by'] = $this->session->userdata('UADMINID');
                    $data['created_ip_address'] = ip_address();
                    $data['created_at'] = $this->current_date_time;
              
                    $check = $this->Md_database->insertData(SCROLLUP_REFERRAL_PAGE, $data);
                    if (!empty($check)) {
                        $this->system_log(SCROLLUP_REFERRAL_PAGE, 'insert', $data, array('id' => $check));
                        $this->session->set_flashdata('success', 'Referral page save successfully');
                    } else {
                        $this->session->set_flashdata('error', 'Unable to save referral page');
                        redirect('shubham/edit-referral-page', 'refresh', 301);
                    }
                }
                redirect('shubham/edit-referral-page', 'refresh', 301);
            }

        }
    }
}
