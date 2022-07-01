<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cn_referral_list extends MY_Controller
{
    /**
   * This is view referral list page referral_list function
   * no perameter are required
   * 
   *
   * @param   no perameter
   * @package   application/Controller/front/referral_list
   */
	public function referral_list()
	{
		(!empty($this->session->userdata('USERID'))) ? '' : redirect('referral-login');
		$this->frontend('front/referral_list');
	}
	      /**
	 * ***************Function to get referral list table data **********
	 * @type : Function
	 * @function name : get_data_table_referral_list
	 * @description : Get "referral list table data" admin interface
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

        

            $data[] = array(
                ($start + 1),
                !empty($rows->referred_by) ? ($rows->referred_by) : '',
                !empty($rows->mobile_number) ? ($rows->mobile_number) : '',
                !empty(ucwords($rows->city)) ? ucwords($rows->city) : '',
                !empty(ucwords($rows->referral_amount)) ? ucwords($rows->referral_amount) : '',
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
 * ***************Function to get referral list table data **********
 * @type : Function
 * @function name : get_referral_list_table_data
 * @description : Get "get_referral_list table data" admin interface
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

        // if(!empty($this->input->get("city_id"))){
		// 	$city_id = $this->input->get("city_id");
		// }else{
		// 	$city_id = "1";
		// }


		$valid_columns = array(
			0 => 'SC.referred_by',
			1 => 'SC.mobile_number',
			2 => 'SMC.city',
			3 => 'SC.referral_amount',
		);

		if (!empty($search)) {
			$this->db->where("(SC.referred_by LIKE '%" . $search . "%' OR SC.mobile_number LIKE '%" . $search . "%')");
		}



		/*--start--*/

		$this->db->select('SMC.city,SC.city_id,SC.referral_amount,SC.referred_by,SC.mobile_number');
		$this->db->from(SCROLLUP_REFERRAL_LIST . ' SC');
        $this->db->join(SCROLLUP_MASTER_CITY . ' SMC', 'SMC.city_id = SC.city_id','left');
		$this->db->where('SC.status<>', "3");
		$this->db->where('SC.referred_by', $this->session->userdata('USERMOBILE'));
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