<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Cn_referral extends MY_Controller
{
   /**
   * This is view referral page index function
   * no perameter are required
   * 
   *
   * @param   no perameter
   * @package   application/Controller/referral/cn_referral_list**/
    public function cn_referral_list()
    {
        $this->adminBackend('admin/referral/vw_referral');
    }


    /**
	 * ***************Function to get referral_list table data **********
	 * @type : Function
	 * @function name : get_data_table_referral_list
	 * @description : Get "referral_list table data" admin interface
	 * @param : null
	 * @designer : Yogita Patil
	 * @author : Yugal Mali
	 * @return : null
	 ********************************************************* */
    public function get_data_table_referral_list()
    {
        $draw 		= intval($this->input->post("draw"));
        $questions 	= $this->get_referral_list_table_data($is_get_total_record = FALSE);
        $data 		= array();
        $start = intval($this->input->post("start"));
        foreach ($questions as $index => $rows) {

            $status_btn = true;

            // $privilige = $this->Md_database->getPriviliges();
            // if ((in_array('city_edit', $privilige))) {
            // $edit_btn = '<a href="' . base_url('master/edit-city/' . $rows->city_id) . '" class="btn btn-warning btn-xs" title="Edit"><i class="fa fa-pencil"></i></a>';
            // } else {
            // $edit_btn = '<button type="button" class="btn btn-warning btn-xs" title="Access denied" disabled=""><i class="fa fa-pencil"></i></button>';
            // }
            $view_btn = '<a href="' . base_url('shubham/view-referral/' . $rows->id) . '" class="btn btn-primary btn-xs" title="View"><i class="fa fa-eye"></i></a>';

            // if ((in_array('city_delete', $privilige))) {
            $delete_btn = '<a href="javascript:void(0);" data-id="' . $rows->id . '" class="btn btn-danger btn-xs delete-record" title="Delete" ><i class="fa fa-trash"></i></a>';
            // } else {
            // $delete_btn = '<button type="button" class="btn btn-danger btn-xs" title="Access denied" disabled=""><i class="fa fa-trash"></i></button>';
            // }

            // if ((in_array('city_status', $privilige))) {
            // $status_btn = true;
            // }


            $data[] = array(
                ($start + 1),
                !empty($rows->name) ? ucwords($rows->name) : '',
                !empty($rows->referred_by) ? ($rows->referred_by) : '',
                !empty($rows->city) ? ucwords($rows->city) : '',
                ($status_btn == true) ?
					($rows->status == 1 ?
						'<a href="javascript:void(0);" class="change-status" status="1" data-id="' . $rows->id . '"><i class="fa fa-toggle-on tgle-on " aria-hidden="true" title="Active"></i></a>' :
						'<a href="javascript:void(0);" class="change-status" status="2" data-id="' . $rows->id . '"><i class="fa fa-toggle-on tgle-off fa-rotate-180 " aria-hidden="true" title="In-Active"></i></a>') :
					'<a href="javascript:void(0)" disabled=""><i class="fa fa-toggle-on tgle tgle-disable-on tgle-disable" aria-hidden="true" title="Access denied" disabled=""></i></a>',
            ' ' . $view_btn . ' '. $delete_btn . ' ',
            );
            $start++;
        }



        $total_employees = $this->get_referral_list_table_data(TRUE);
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
 * ***************Function to get referral_list table data **********
 * @type : Function
 * @function name : get_referral_list_table_data
 * @description : Get "referral_list table data" admin interface
 * @param : is_get_total_record
 * @designer : Yogita Patil
 * @author : Yugal Mali
 * @return : query result
 ********************************************************* */
    public function get_referral_list_table_data($is_get_total_record = FALSE)
    {
        $start = intval($this->input->post("start"));
        $length = intval($this->input->post("length"));
        $order = $this->input->post("order");
        $search = $this->input->post("search");
        $search = $search['value'];

        $valid_columns = array(
            0 => 'SD.name',
            1 => 'SD.referred_by',
            2 => 'SM.city',
            3 => 'SD.status',
            4 => 'SD.Action'
        );

        if (!empty($search)) {
            $this->db->where("(SD.name LIKE '%" . $search . "%' OR SM.city LIKE '%" . $search . "%' OR SD.referred_by LIKE '%" . $search . "%')");
        }

        /*--start--*/
        $this->db->select('SD.id,SD.name,SM.city,SD.city_id_referred_by,SD.referred_by,SD.status');
        $this->db->from(SCROLLUP_REFERRAL_LIST . ' SD');
        $this->db->join(SCROLLUP_MASTER_CITY . ' SM', 'SM.city_id = SD.city_id_referred_by');
        $this->db->where('SD.status<>', "3");
        $this->db->order_by('SD.id', 'ASC');
        $this->db->group_by('SD.referred_by');
        if ($is_get_total_record == TRUE) {
            return $this->db->get()->num_rows();
        } else {
            $this->db->limit($length, $start);
            return $this->db->get()->result();
        }
        /*--stop--*/
    }

      /**
     * ***************Function to delete referral **********
     * @type : Function
     * @function name : delete_referral
     * @description : Delete "referral" admin interface
     * @param : null
     * @designer : Yogita Patil
     * @author : Ajay Prajapati
     * @return : null
     ********************************************************* */
    public function delete_referral()
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
                $check = $this->Md_database->updateData(SCROLLUP_REFERRAL_LIST, $data, array('id' => $id));
                if (!empty($check)) {
                    // $this->Md_database->updateData(NEW_ERA_STUDENT_PAID_ACCOUNT, $data, array('student_id' => $id));
                    $this->system_log(SCROLLUP_SYSTEM_LOG, 'delete', $data, array('id' => $id));
                }
                $data = $this->db->select('status,name')->where('id', $id)->get(SCROLLUP_REFERRAL_LIST)->row();
                $name = "";
                if (!empty($data)) {
                    $subject = ucwords($data->name);
                    if ($data->status == "3") {
                        $message = "Referral user deleted successfully.";
                    } else {
                        $message = "Unable to delete referral user.";
                    }
                } else {
                    $message = "referral user Not Found.";
                }
                echo json_encode(array("status" => "true", "message" => $message, "name" => $name));
            }
        }
    }

}
