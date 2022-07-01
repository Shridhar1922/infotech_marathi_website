<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cn_referral_dash_img extends MY_Controller
{
   /**
   * This is view referral_dash_img page index function
   * no perameter are required
   * 
   *
   * @param   no perameter
   * @package   application/Controller/referral_dash_img/referral_dash_img_list**/
    public function referral_dash_img_list()
    {
        $this->adminBackend('admin/referral_dash_img/vw_referral_dash_img');
    }

     /*****************Function to add banner**********
     * @type : Function
     * @function name : banner_action
     * @description : Insert "add banner" admin interface
     * @param : null
     * @designer : Yogita Patil
     * @author : Yugal Mali
     * @return : null
     ********************************************************* */
    public function banner_action()
    {
        if (!empty($_FILES['banner_img']['name'])) {

            $folder = 'uploads/banner/';
            if (!file_exists($folder)) {
                mkdir($folder, 0777, true);
            }

            $rename_name = uniqid(); //get file extension:
            $arr_file_info = pathinfo($_FILES['banner_img']['name']);
            $file_extension = $arr_file_info['extension'];
            $photoDoc = $rename_name . '.' . $file_extension;
            $old_name = $_FILES['banner_img']['name'];
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
            //load image library:
            
            // echo "<pre>";
            // print_r ($config);
            // echo "</pre>";
            // die;
            if (!$this->upload->do_upload('banner_img')) {
                $this->data['error'] = $this->upload->display_errors();
                $error = $this->data['error'];
                $error = str_replace("'", "\'", $error);
                $this->session->set_flashdata('error', $error);
                redirect('admin/referral-dash-img', 'refresh', 301);
                exit();
            } else {
                $this->upload->data();
            }

        $data['banner_img'] = $photoDoc;
        $data['created_by'] = $this->session->userdata('UADMINID');
        $data['created_at'] = $this->current_date_time;
        $data['created_ip_address'] = ip_address();
        $data = $this->security->xss_clean($data);

        $banner_data['staff'] = $this->Md_database->getData(SCROLLUP_BANNER, 'COUNT(*) as banner_count', array('status<>' => 3));
        $banner_count = !empty($banner_data['staff'][0]['banner_count']) ? $banner_data['staff'][0]['banner_count'] : '';
        // if ($banner_count >= 6) {
        //     $this->session->set_flashdata('error', 'You can not add more than 4 banner for staff app');
        //     redirect('banner', 'refresh', 301);
        //     exit();
        // } else {
            $check = $this->Md_database->insertData(SCROLLUP_BANNER, $data);
        // }

        if (!empty($check)) {
            $this->system_log(SCROLLUP_BANNER, 'insert', $data, array('id' => $check));
            $this->session->set_flashdata('success', 'Banner added successfully');
        } else {
            $this->session->set_flashdata('error', 'Unable to add banner');
        }
        redirect('shubham/referral-dash-img', 'refresh', 301);
      }else{
        $this->session->set_flashdata('error', 'Unable to add banner');
        redirect($_SERVER['HTTP_REFERER']);
      }
    }

      /*****************Function to delete banner**********
     * @type : Function
     * @function name : delete_banner
     * @description : Delete "delete banner" admin interface
     * @param : id
     * @designer : Yogita Patil
     * @author : Atul Naik
     * @return : null
     ********************************************************* */
    public function delete_banner()
    {
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        } else {
            $id = $this->input->post("id");
            if (!empty($id)) {
                $data['status'] = '3';
                $data['updated_by'] = $this->session->userdata('UADMINID');
                $data['updated_ip_address'] = ip_address();
                $data['updated_at'] = $this->current_date_time;
                $check = $this->Md_database->updateData(SCROLLUP_BANNER, $data, array('id' => $id));
                if (!empty($check)) {
                    $edit_data = $this->Md_database->getData(SCROLLUP_BANNER, 'id,banner_img', array('id' => $id));
                    $img = !empty($edit_data[0]['banner_img']) ? $edit_data[0]['banner_img'] : '';
                    if (is_file('uploads/banner/' . $img)) {
                        unlink('uploads/banner/' . $img); //delete image from folder                    
                    }
                    $this->system_log(SCROLLUP_BANNER, 'delete', $data, array('id' => $id));
                }
                $data = $this->db->where('id', $id)->get(SCROLLUP_BANNER)->row();
                $banner = "";
                if (!empty($data)) {
                    $banner = 'Success';
                    if ($data->status == "3") {
                        $this->session->set_flashdata('success', 'Banner deleted successfully');
                    } else {
                        $this->session->set_flashdata('success', 'Unable to delete banner.');
                    }
                } else {
                    $this->session->set_flashdata('success', 'Banner Not Found.');
                }
                echo json_encode(array("status" => true, "banner" => $banner));
            }
        }
    }

    /**
	 * ***************Function to get banner table data **********
	 * @type : Function
	 * @function name : get_data_table_banner
	 * @description : Get "banner table data" admin interface
	 * @param : null
	 * @designer : Yogita Patil
	 * @author : Yugal Mali
	 * @return : null
	 ********************************************************* */
	public function get_data_table_banner()
	{
		$draw 		= intval($this->input->post("draw"));
		$questions 	= $this->get_banner_table_data($is_get_total_record = FALSE);
		$data 		= array();
		$start = intval($this->input->post("start"));



		foreach ($questions as $index => $rows) {

			$status_btn = false;



			
			$delete_btn = '<a href="javascript:void(0);" data-id="' . $rows->id . '" class="btn btn-danger btn-xs delete-record" title="Delete" ><i class="fa fa-trash"></i></a>';


			// if ((in_array('banner_status', $privilige))) {
			// 	$status_btn = true;
			// }
            $banner_img = !empty($rows->banner_img) ? $rows->banner_img : '';

			$data[] = array(
				($start + 1),
				
                '<img id="myImg" class="img-popup" src="'. base_url().'uploads/banner/'.$banner_img.'" alt="banner" style="height: 30px;object-fit: cover;">'
                ,
				' ' . $delete_btn . ' ',
			);
			$start++;
		}

		$total_employees = $this->get_banner_table_data(TRUE);
		$output = array(
			"draw" => $draw,
			"recordsTotal" => $total_employees,
			"recordsFiltered" => $total_employees,
			"data" => $data
		);
		echo json_encode($output);
		exit();
	}

	/**
	 * ***************Function to get banner table data **********
	 * @type : Function
	 * @function name : get_banner_table_data
	 * @description : Get "banner table data" admin interface
	 * @param : is_get_total_record
	 * @designer : Yogita Patil
	 * @author : Yugal Mali
	 * @return : query result
	 ********************************************************* */
	public function get_banner_table_data($is_get_total_record = FALSE)
	{
		$start = intval($this->input->post("start"));
		$length = intval($this->input->post("length"));
		$order = $this->input->post("order");
		$search = $this->input->post("search");
		$search = $search['value'];

		$valid_columns = array(
			0 => 'SB.id',
			1 => 'SB.banner_img',
			2 => 'SB.Action'
		);

		if (!empty($search)) {
			$this->db->where("SB.banner_img LIKE '%" . $search . "%'");
		}

		/*--start--*/
		$this->db->select('SB.id,SB.banner_img,SB.status');


		$this->db->from(SCROLLUP_BANNER . ' SB');
		$this->db->where('SB.status<>', "3");
		$this->db->order_by('SB.banner_img', 'asc');
		if ($is_get_total_record == TRUE) {
			return $this->db->get()->num_rows();
		} else {
			$this->db->limit($length, $start);
			return $this->db->get()->result();
		}
		/*--stop--*/
	}
}
