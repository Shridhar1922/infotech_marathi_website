<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cn_referral_user extends MY_Controller
{
 /**
   * This is view referral_user page index function
   * no perameter are required
   * 
   *
   * @param   no perameter
   * @package   application/Controller/referral_user/index**/

    public function referral_user()
    {
        $data['city'] = $this->Md_database->getData(SCROLLUP_MASTER_CITY, 'city_id,city', array('status' => '1'), 'city_id asc');
        $this->adminBackend('admin/referral_user/vw_referral_user',$data,TRUE);
    }
      /**
	 * ***************Function to get referral user table data **********
	 * @type : Function
	 * @function name : get_data_table_referral_user
	 * @description : Get "referral user table data" admin interface
	 * @param : null
	 * @designer : Yogita Patil
	 * @author : Yugal Mali
	 * @return : null
	 ********************************************************* */
    public function get_data_table_referral_user()
    {
        $draw 		= intval($this->input->post("draw"));
        $questions 	= $this->get_referral_user_table_data($is_get_total_record = FALSE);
        $data 		= array();
        $start = intval($this->input->post("start"));
        foreach ($questions as $index => $rows) {

        

            $data[] = array(
                ($start + 1),
                !empty($rows->name) ? ucwords($rows->name) : '',
                !empty($rows->email) ? ($rows->email) : '',
                !empty($rows->mobile_number) ? ucwords($rows->mobile_number) : '',
                !empty($rows->city) ? ucwords($rows->city) : '',
            );
            $start++;
        }



        $total_employees = $this->get_referral_user_table_data(TRUE);
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
 * ***************Function to get referral user table data **********
 * @type : Function
 * @function name : get_referral_user_table_data
 * @description : Get "get_referral_user table data" admin interface
 * @param : is_get_total_record
 * @designer : Yogita Patil
 * @author : Yugal Mali
 * @return : query result
 ********************************************************* */
    public function get_referral_user_table_data($is_get_total_record = FALSE)
    {
        $start = intval($this->input->post("start"));
        $length = intval($this->input->post("length"));
        $order = $this->input->post("order");
        $search = $this->input->post("search");
        $search = $search['value'];

        if(!empty($this->input->get("city_id"))){
			$city_id = $this->input->get("city_id");
		}else{
			$city_id = "";
		}

       $get_city_tb_name =$this->Md_database->getData(SCROLLUP_MASTER_CITY, 'city,city_id,sql_tb_name',array('status'=> 1,'city_id'=> $city_id), 'city_id asc');

		$valid_columns = array(
			0 => 'SC.name',
			1 => 'SC.email',
			2 => 'SC.mobile_number',
			3 => 'SMC.city',
		);

		if (!empty($search)) {
			$this->db->where("(SC.name LIKE '%" . $search . "%' OR SMC.city LIKE '%" . $search . "%' OR SC.mobile_number LIKE '%" . $search . "%')");
		}



		/*--start--*/
        if(!empty($city_id)){
		    $this->db->select('SMC.city,SC.city_id,SC.user_id,SC.name,SC.status,SC.email,SC.mobile_number');
		    $this->db->from($get_city_tb_name[0]['sql_tb_name'] . ' SC');
            $this->db->join(SCROLLUP_MASTER_CITY . ' SMC', 'SMC.city_id = SC.city_id','left');
		    $this->db->where('SC.status<>', "3");
		    $this->db->where('SC.email<>', "");
		    $this->db->order_by('SC.user_id', 'desc');
        }else{
            $this->db->select('SMC.city,SC.city_id,SC.user_id,SC.name,SC.status,SC.email,SC.mobile_number');
			$this->db->from(SCROLLUP_REGISTERED_USERS . ' SC');
            $this->db->join(SCROLLUP_MASTER_CITY . ' SMC', 'SMC.city_id = SC.city_id','left');
			$this->db->where('SC.status<>', "3");
            $this->db->where('SC.email<>', "");
			$this->db->order_by('SC.user_id', 'desc');
        }
		if ($is_get_total_record == TRUE) {
			return $this->db->get()->num_rows();
		} else {
			$this->db->limit($length, $start);
			return $this->db->get()->result();
		}
        /*--stop--*/
    }
}
