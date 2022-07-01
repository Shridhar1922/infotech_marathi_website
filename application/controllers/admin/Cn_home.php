<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Cn_home extends MY_Controller
{
 /**
   * This is view home page index function
   * no perameter are required
   * 
   *
   * @param   no perameter
   * @package   application/Controller/index **/
    public function index()
    {
        $data['home'] = $this->Md_database->getData(SCROLLUP_ANIMATED_HOME, 'id,animated_heading_1,popup_1,popup_2,animated_heading_2,animated_heading_3,animated_heading_4,animated_heading_5,sub_heading,animated_heading_6,animated_heading_7,animated_heading_8,animated_heading_9,button_2,banner,button_1',array('status'=>1),'id asc');
        $this->adminBackend('admin/home/vw_home',$data,TRUE);
    }
    /**
	 * ***************Function to save home **********
	 * @type : Function
	 * @function name : action_home
	 * @description : Insert "home data" admin interface
	 * @param : null
	 * @designer : Yogita Patil
	 * @author : Yugal Mali
	 * @return : null
	 ********************************************************* */
    public function action_home(){
        if (!empty($this->input->post())) {
			// $this->form_validation->set_rules('animated_heading', 'animated_heading', 'trim|required');
			$this->form_validation->set_rules('sub_heading', 'sub_heading', 'trim|required');
			if ($this->form_validation->run() === FALSE) {
				$this->session->set_flashdata('error', validation_errors());
				redirect($_SERVER['HTTP_REFERER']);
				exit();
			} else {
				$formdata =  $this->security->xss_clean($this->input->post());
				$txtpkey = $formdata['txtpkey'];
				unset($formdata['submit_btn']);
				$banner_old = $formdata['banner_old'];
				unset($formdata['txtpkey']);
				unset($formdata['banner_old']);
				// $data = array_map('trim', $formdata);
				$check = '';
                

				if (!empty($txtpkey)) {

					if (!empty($_FILES['banner']['name'])) {
                        $folder = 'uploads/banner/';
                        if (!file_exists($folder)) {
                            mkdir($folder, 0777, true);
                        }

                        $rename_name = uniqid(); //get file extension:
                        $arr_file_info = pathinfo($_FILES['banner']['name']);
                        $file_extension = $arr_file_info['extension'];
                        $photoDoc = $rename_name . '.' . $file_extension;
                        $old_name = $_FILES['banner']['name'];
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
                        if (!$this->upload->do_upload('banner')) {
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
                    if ($_FILES['banner']['name']) {
                        $old_banner_img = !empty($banner_old) ? $banner_old : '';
                        $file =  $old_banner_img;
                        if (is_file($file))
                            unlink($file); // delete file
                        $banner = $filelocation;
                    } else {
                        $banner = !empty($banner_old) ? $banner_old : '';
                    }

                    $data['banner'] = $banner;
					$data['updated_by'] = $this->session->userdata('UADMINID');
					$data['updated_at'] = $this->current_date_time;
					$data['updated_ip_address'] = ip_address();
                    $data['animated_heading_1'] = $formdata['animated_heading_1'];
                    $data['animated_heading_2'] = $formdata['animated_heading_2'];
                    $data['animated_heading_3'] = $formdata['animated_heading_3'];
                    $data['animated_heading_4'] = $formdata['animated_heading_4'];
                    $data['animated_heading_5'] = $formdata['animated_heading_5'];
                    $data['animated_heading_6'] = $formdata['animated_heading_6'];
                    $data['animated_heading_7'] = $formdata['animated_heading_7'];
                    $data['animated_heading_8'] = $formdata['animated_heading_8'];
                    $data['animated_heading_9'] = $formdata['animated_heading_9'];
                    $data['sub_heading'] = $formdata['sub_heading'];
                    $data['button_1'] = $formdata['button_1'];
                    $data['button_2'] = $formdata['button_2'];
                    $data['popup_1'] = $formdata['popup_1'];
                    $data['popup_2'] = $formdata['popup_2'];

					$check = $this->Md_database->updateData(SCROLLUP_ANIMATED_HOME, $data, array('id' => $txtpkey));
					if (!empty($check)) {
						$this->system_log(SCROLLUP_ANIMATED_HOME, 'update', $data, array('id' => $txtpkey));
						$this->session->set_flashdata('success', 'Home Page Saved Succesfully!');
					} else {
						$this->session->set_flashdata('error', 'Unable to save home page');
					}
                
                } else {

					if (!empty($_FILES['banner']['name'])) {

                        $folder = 'uploads/banner/';
                        if (!file_exists($folder)) {
                            mkdir($folder, 0777, true);
                        }
                        $rename_name = uniqid(); //get file extension:
                        $arr_file_info = pathinfo($_FILES['banner']['name']);
                        $file_extension = $arr_file_info['extension'];
                        $photoDoc = $rename_name . '.' . $file_extension;
                        $old_name = $_FILES['banner']['name'];
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
                        if (!$this->upload->do_upload('banner')) {
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
                    $data['banner'] = $photoDoc;
					$data['created_by'] = $this->session->userdata('UADMINID');
					$data['created_at'] = $this->current_date_time;
					$data['created_ip_address'] = ip_address();
					$check = $this->Md_database->insertData(SCROLLUP_ANIMATED_HOME, $data);
					if (!empty($check)) {
						$this->system_log(SCROLLUP_ANIMATED_HOME, 'insert', $data, array('id' => $check));
						$this->session->set_flashdata('success', 'Configuration saved successfully');
					} else {
						$this->session->set_flashdata('error', 'Unable to save configuration');
					}
				}
				redirect('shubham/home', 'refresh', 301);
			}
		}
    }
}
