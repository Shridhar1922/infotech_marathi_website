<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Cn_vw_view_referral extends MY_Controller
{
   /**
   * This is view referral_view page index function
   * id perameter are required
   * 
   *
   * @param   no perameter
   * @package   application/Controller/referral/cn_view_referral**/
    public function cn_view_referral($id)
    {
        $get_referral_list = $this->Md_database->getData(SCROLLUP_REFERRAL_LIST,'id,name,tb_name_referred_by,user_id_referral',array('status'=>1,'id'=> $id),'id');

        $data['user_details'] = $this->Md_database->getData($get_referral_list[0]['tb_name_referred_by'],'user_id,city_id,earned_amount,total_earned_amount,city_id,name,mobile_number,acc_no,ifsc,bank_name,branch,UPI_id,created_at',array('status'=>1,'user_id'=>$get_referral_list[0]['user_id_referral']),'user_id'); 
        $data['city'] = $this->Md_database->getData(SCROLLUP_MASTER_CITY, 'city_id,city',array('status'=>1,'city_id'=>$data['user_details'][0]['city_id']),'city_id');
        $this->adminBackend('admin/referral/vw_view_referral',$data,true);
    }
    /**
	 * ***************Function to get referral  table data **********
	 * @type : Function
	 * @function name : get_data_table_referral
	 * @description : Get "referral table data" admin interface
	 * @param : null
	 * @designer : Yogita Patil
	 * @author : Yugal Mali
	 * @return : null
	 ********************************************************* */
    public function get_data_table_referral()
    {
        $draw 		= intval($this->input->post("draw"));
        $questions 	= $this->get_referral_table_data($is_get_total_record = FALSE);
        $data 		= array();
        $start = intval($this->input->post("start"));
        foreach ($questions as $index => $rows) {

        

            $data[] = array(
                ($start + 1),
                !empty(($rows->city)) ? ucwords($rows->city) : '',
                !empty($rows->mobile_number) ? ($rows->mobile_number) : '',
                !empty($rows->created_at) ? date('d-m-Y H:i:s', strtotime(($rows->created_at))) : '',
            );
            $start++;
        }



        $total_employees = $this->get_referral_table_data(TRUE);
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
 * ***************Function to get referral list table data **********
 * @type : Function
 * @function name : get_referral_list_table_data
 * @description : Get "get_referral_list table data" admin interface
 * @param : is_get_total_record
 * @designer : Yogita Patil
 * @author : Yugal Mali
 * @return : query result
 ********************************************************* */
    public function get_referral_table_data($is_get_total_record = FALSE)
    {
        $start = intval($this->input->post("start"));
        $length = intval($this->input->post("length"));
        $order = $this->input->post("order");
        $search = $this->input->post("search");
        $search = $search['value'];
        $mobile_number = $this->input->post("mobile_number");

        // if(!empty($this->input->get("city_id"))){
		// 	$city_id = $this->input->get("city_id");
		// }else{
		// 	$city_id = "1";
		// }


		$valid_columns = array(
			0 => 'SMC.city',
			1 => 'SC.mobile_number',
			3 => 'SC.created_at',
		);

		if (!empty($search)) {
			$this->db->where("(SC.mobile_number LIKE '%" . $search . "%' OR SMC.city LIKE '%" . $search . "%')");
		}



		/*--start--*/

		$this->db->select('SMC.city,SC.city_id,SC.mobile_number,SC.created_at');
		$this->db->from(SCROLLUP_REFERRAL_LIST . ' SC');
        $this->db->join(SCROLLUP_MASTER_CITY . ' SMC', 'SMC.city_id = SC.city_id','left');
		$this->db->where('SC.status<>', "3");
		$this->db->where('SC.referred_by', $mobile_number);
		$this->db->order_by('SC.id', 'asc');
		if ($is_get_total_record == TRUE) {
			return $this->db->get()->num_rows();
		} else {
			$this->db->limit($length, $start);
			return $this->db->get()->result();
		}
        /*--stop--*/
    }
}