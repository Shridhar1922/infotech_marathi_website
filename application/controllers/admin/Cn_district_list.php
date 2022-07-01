<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cn_district_list extends MY_Controller
{
    /**
     * This is view district page fun_list function
     * id perameter are required
     * 
     *
     * @param   no perameter
     * @package   application/Controller/fun_list **/
    public function fun_list($id)
    {
        $get_city_tb_name = $this->Md_database->getData(SCROLLUP_MASTER_CITY, 'city_id,sql_tb_name', array('status' => 1, 'city_id' => $id), 'city_id asc');
        $data['register_user'] = $this->Md_database->getData($get_city_tb_name[0]['sql_tb_name'], 'user_id,created_at,mobile_number,city_id,given_name', array('status => 1'), 'user_id asc');

        $this->adminBackend('admin/district_list/vw_district_list', $data, TRUE);
    }

    /**
     * ***************Function to get user_list table data **********
     * @type : Function
     * @function name : get_data_table_city
     * @description : Get "user_list table data" admin interface
     * @param : null
     * @designer : Yogita Patil
     * @author : Yugal Mali
     * @return : null
     ********************************************************* */
    public function get_data_table_user_list()
    {

        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        } else {
            $city_id =  trim($this->input->post("get_segment"));
            $draw         = intval($this->input->post("draw"));
            $questions     = $this->get_user_list_table_data($is_get_total_record = FALSE, $city_id);
            $data         = array();
            $start = intval($this->input->post("start"));



            foreach ($questions as $index => $rows) {

                // $status_btn = false;

                // // $privilige = $this->Md_database->getPriviliges();
                // // if ((in_array('city_edit', $privilige))) {
                // $edit_btn = '<a href="' . base_url('master/edit-city/' . $rows->city_id) . '" class="btn btn-warning btn-xs" title="Edit"><i class="fa fa-pencil"></i></a>';
                // // } else {
                // // $edit_btn = '<button type="button" class="btn btn-warning btn-xs" title="Access denied" disabled=""><i class="fa fa-pencil"></i></button>';
                // // }

                // // if ((in_array('city_delete', $privilige))) {
                // $delete_btn = '<a href="javascript:void(0);" data-city_id="' . $rows->city_id . '" class="btn btn-danger btn-xs delete-record" title="Delete" ><i class="fa fa-trash"></i></a>';
                // // } else {
                // // $delete_btn = '<button type="button" class="btn btn-danger btn-xs" title="Access denied" disabled=""><i class="fa fa-trash"></i></button>';
                // // }

                // // if ((in_array('city_status', $privilige))) {
                // $status_btn = true;
                // // }

                // $get_city = $this->Md_database->getData(SCROLLUP_MASTER_CITY, 'city,city_id',array('city_id'=>$row->city_id, 'status'=>'1'),'');

                $data[] = array(
                    ($start + 1),
                    !empty($rows->given_name) ? ucwords($rows->given_name) : '',
                    !empty($rows->mobile_number) ? ucwords($rows->mobile_number) : '',
                    !empty($rows->city) ? ucwords($rows->city) : '',
                    !empty($rows->created_at) ? date('d-m-Y H:i:s', strtotime($rows->created_at)) : '',
                );
                $start++;
            }

            $total_employees = $this->get_user_list_table_data(TRUE, $city_id);
            $output = array(
                "draw" => $draw,
                "recordsTotal" => $total_employees,
                "recordsFiltered" => $total_employees,
                "data" => $data
            );
            echo json_encode($output);
            exit();
        }
    }

    /**
     * ***************Function to get user_list table data **********
     * @type : Function
     * @function name : get_user_list_table_data
     * @description : Get "user_list table data" admin interface
     * @param : is_get_total_record
     * @designer : Yogita Patil
     * @author : Yugal
     * @return : query result
     ********************************************************* */
    public function get_user_list_table_data($is_get_total_record = FALSE, $city_id = '')
    {
        $start = intval($this->input->post("start"));
        $length = intval($this->input->post("length"));
        $order = $this->input->post("order");
        $search = $this->input->post("search");
        $search = $search['value'];

        $get_city_tb_name = $this->Md_database->getData(SCROLLUP_MASTER_CITY, 'city_id,sql_tb_name', array('status' => 1, 'city_id' => $city_id), 'city_id asc');

        $valid_columns = array(
            0 => 'SRU.created_at',
            1 => 'SRU.given_name',
            2 => 'SRU.mobile_number',
            3 => 'SMC.city'
        );

        if (!empty($search)) {
            $this->db->where("(SMC.city LIKE '%" . $search . "%' OR  SRU.mobile_number LIKE '%" . $search . "%' OR SRU.given_name LIKE '%" . $search . "%')");
        }

        /*--start--*/
        $this->db->select('SRU.city_id,SRU.status,SRU.mobile_number,SRU.given_name,SRU.created_at,SRU.user_id,SMC.city');
        $this->db->from($get_city_tb_name[0]['sql_tb_name'] . ' SRU');
        $this->db->join(SCROLLUP_MASTER_CITY . ' SMC', 'SMC.city_id = SRU.city_id', 'left');
        $this->db->where('SRU.status<>', "3");
        $this->db->where('SRU.city_id', $city_id);
        $this->db->order_by('SRU.user_id', 'ASC');

        // echo $this->db->last_query();
        // die;

        if ($is_get_total_record == TRUE) {
            return $this->db->get()->num_rows();
        } else {
            $this->db->limit($length, $start);
            return $this->db->get()->result();
            // $data = $this->db->get()->result();
        }
        /*--stop--*/
    }
}
