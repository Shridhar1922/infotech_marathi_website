<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Cn_completed_payment extends MY_Controller
{
   /**
   * This is view complete payment page index function
   * no perameter are required
   * 
   *
   * @param   no perameter
   * @package   application/Controller/payment_transfer/cn_completed_payment_transfer
   */
    public function cn_completed_payment_transfer()
    {
        $data['pending_payment'] = $this->Md_database->countAllResult(SCROLLUP_USER_PAYMENT_DETAILS,array('status'=>1,'payment_status'=>1),$like = '');
		$data['completed_payment'] = $this->Md_database->countAllResult(SCROLLUP_USER_PAYMENT_DETAILS,array('status'=>1,'payment_status'=>2),$like = '');
        $this->adminBackend('admin/payment_transfer/vw_completed_payment_transfer',$data,TRUE);
    }
        /**
	 * ***************Function to get pending status table data **********
	 * @type : Function
	 * @function name : get_data_table_completed_payment
	 * @description : Get "pending status table data" admin interface
	 * @param : null
	 * @designer : Yogita Patil
	 * @author : Yugal Mali
	 * @return : null
	 ********************************************************* */
    public function get_data_table_completed_payment()
    {
        $draw 		= intval($this->input->post("draw"));
        $questions 	= $this->get_completed_payment_table_data($is_get_total_record = FALSE);
        $data 		= array();
        $start = intval($this->input->post("start"));
        foreach ($questions as $index => $rows) {

            // $status_btn = false;

            // $privilige = $this->Md_database->getPriviliges();
            // if ((in_array('city_edit', $privilige))) {
            // $edit_btn = '<a href="' . base_url('master/edit-city/' . $rows->city_id) . '" class="btn btn-warning btn-xs" title="Edit"><i class="fa fa-pencil"></i></a>';
            // } else {
            // $edit_btn = '<button type="button" class="btn btn-warning btn-xs" title="Access denied" disabled=""><i class="fa fa-pencil"></i></button>';
            // }
            $view_btn = '<button onclick="show_view_modal('.$rows->id.')" class="btn btn-primary btn-xs" title="View"><i class="fa fa-eye"></i></button>';

            // if ((in_array('city_delete', $privilige))) {
            // $delete_btn = '<a href="javascript:void(0);" data-cityid="' . $rows->city_id . '" class="btn btn-danger btn-xs delete-record" title="Delete" ><i class="fa fa-trash"></i></a>';
            // } else {
            // $delete_btn = '<button type="button" class="btn btn-danger btn-xs" title="Access denied" disabled=""><i class="fa fa-trash"></i></button>';
            // }

            // if ((in_array('city_status', $privilige))) {
            // $status_btn = true;
            // }
            $get_city_tb_name =$this->Md_database->getData(SCROLLUP_MASTER_CITY, 'city_id,sql_tb_name',array('status'=> 1,'city_id'=>$rows->city_id), 'city_id asc');

            $get_name = $this->Md_database->getData($get_city_tb_name[0]['sql_tb_name'], 'user_id,name',array('user_id'=>$rows->user_id, 'status'=>'1'),'');

            $data[] = array(
                ($start + 1),
                !empty($rows->request_id) ? ucwords($rows->request_id) : '',
                !empty($get_name[0]['name']) ? ucwords($get_name[0]['name']) : '-',
                !empty($rows->mobile_number) ? ucwords($rows->mobile_number) : '',
                !empty($rows->request_amount) ? ucwords($rows->request_amount) : '',
                !empty($rows->created_at) ? date('d-m-Y H:i:s', strtotime(($rows->created_at))) : '',
                ' ' . $view_btn . ' ',
            );
            $start++;
        }



        $total_employees = $this->get_completed_payment_table_data(TRUE);
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
 * ***************Function to get pending_payment table data **********
 * @type : Function
 * @function name : get_completed_payment_table_data
 * @description : Get "get_pending_payment_table_data table data" admin interface
 * @param : is_get_total_record
 * @designer : Yogita Patil
 * @author : Yugal Mali
 * @return : query result
 ********************************************************* */
    public function get_completed_payment_table_data($is_get_total_record = FALSE)
    {
        $start = intval($this->input->post("start"));
        $length = intval($this->input->post("length"));
        $order = $this->input->post("order");
        $search = $this->input->post("search");
        $search = $search['value'];

        $valid_columns = array(
            0 => 'SD.created_at',
            1 => 'SD.user_id',
            2 => 'SD.mobile_number',
            3 => 'SD.request_amount',
            4 => 'SD.request_id',
            5 => 'SD.Action'
        );

        if (!empty($search)) {
            $this->db->where("(SD.request_id LIKE '%" . $search . "%' OR SD.user_id LIKE '%" . $search . "%')");
        }

        /*--start--*/
        $this->db->select('SD.id,SD.request_id,SD.city_id,SD.request_amount,SD.user_id,SD.mobile_number,SD.created_at,SD.status');
        $this->db->from(SCROLLUP_USER_PAYMENT_DETAILS . ' SD');
        // $this->db->join(SCROLLUP_REGISTERED_USERS . ' SM', 'SM.user_id = SD.user_id','left');
        // $this->db->where('SD.id','SM.user_id');
        $this->db->where('SD.status<>', "3");
        $this->db->where('SD.payment_status', "2");
        $this->db->order_by('SD.id', 'ASC');
        if ($is_get_total_record == TRUE) {
            return $this->db->get()->num_rows();
        } else {
            $this->db->limit($length, $start);
            return $this->db->get()->result();
        }
        /*--stop--*/
    }
/*****************Function to getDataForCompletedModel title **********
	 * @type : Function
	 * @function name : getDataForCompletedModel
	 * @description : Get "complete model data" admin interface
	 * @param : null
	 * @designer : Yogita Patil
	 * @author : Yugal Mali
	 * @return : null
	 ********************************************************* */
    public function getDataForCompletedModel(){
        if (!$this->input->is_ajax_request()) {
    		// echo "this is not a ajax request";
	        redirect(base_url() . 'shubham/pending-payment-transfer');
		} else{
            $id  = trim($this->input->post("id"));
			

            $data['get_model_data'] = $this->Md_database->getData(SCROLLUP_USER_PAYMENT_DETAILS,'id,city_id,user_id,request_id,mobile_number,request_amount,updated_at,UPI_id,transaction_id,transaction_date,remark,',array('status'=>1,'id'=>$id),'id asc');
            $data['get_city_tb_name'] =$this->Md_database->getData(SCROLLUP_MASTER_CITY, 'city_id,sql_tb_name',array('status'=> 1,'city_id'=>$data['get_model_data'][0]['city_id']), 'city_id asc');
            $data['get_name'] = $this->Md_database->getData($data['get_city_tb_name'][0]['sql_tb_name'], 'bank_name,acc_no,branch,user_id,name,UPI_id,ifsc',array('user_id'=>$data['get_model_data'][0]['user_id'], 'status'=>'1'),'');

			$this->load->view('admin/payment_transfer/vw_model_completed',$data);
		}
    }
}