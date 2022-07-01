<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Cn_report extends MY_Controller
{
 /**
   * This is view report page index function
   * no perameter are required
   * 
   *
   * @param   no perameter
   * @package   application/Controller/index **/
    public function index()
    {       
        $dates = array();
        for ($i = 6; $i > 0; $i--) {
            $dates[$i] =  date('Y-m-d', strtotime("-$i days"));
        }
        $dates[0] = date('Y-m-d');
        $members_count = array();

        for ($i=0; $i <count($dates) ; $i++) { 
            $members_count[$i] = $this->Md_database->get_count_week($dates[$i]);
        }

        $data['members_count'] = $members_count;
        $data['city'] = $this->Md_database->getData(SCROLLUP_MASTER_CITY , 'city_id,city,sql_tb_name',array('status'=>1),'city asc');
        $data['all_count'] = 0;
		foreach($data['city'] as $value){
			$data['all_count'] = $data['all_count'] + $this->Md_database->countAllResult($value['sql_tb_name'],array('status'=>1),$like = '');
		}
        // $data['all_count'] = $this->Md_database->countAllResult(SCROLLUP_REGISTERED_USERS,array('status'=>1),$like = '');
        $data['city'] = $this->Md_database->getData(SCROLLUP_MASTER_CITY, 'city_id,city', array('status' => '1'), 'city_id asc');
        $this->adminBackend('admin/report',$data, TRUE);
    }
    /**
	 * ***************Function to Show bar chart data **********
	 * @type : Function
	 * @function name : bar_chart
	 * @description : Insert "bar chart data" admin interface
	 * @param : null
	 * @designer : Yogita Patil
	 * @author : Yugal Mali
	 * @return : null
	 ********************************************************* */
    public function bar_chart(){
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        } else {
            $city_id = trim($this->input->post('city_id'));
            $radio_btn = trim($this->input->post('radio_btn'));

            if($radio_btn == "week"){
                $dates = array();
                for ($i = 6; $i > 0; $i--) {
                    $dates[$i] =  date('Y-m-d', strtotime("-$i days"));
                }
                $dates[0] = date('Y-m-d');
                $members_count = array();
                // print_r($dates);
                // die;

                if($city_id == 0){

                    for ($i=0; $i <count($dates) ; $i++) { 
                        $members_count[$i] = $this->Md_database->get_count_week($dates[$i]);
                    }

                }else if ($city_id != 0){
                    for ($i=0; $i <count($dates) ; $i++) { 
                        $members_count[$i] = $this->Md_database->get_count_users_by_week($dates[$i],$city_id);
                    }
                }

                $data['members_count'] = $members_count;

            }else if($radio_btn == "month"){

                $dates = array();
                for ($i = 11; $i > 0; $i--) {
                    $dates[$i] =  date('Y-m', strtotime("-$i month"));
                }
                $dates[0] = date('Y-m');
                $members_count = array();
      
                if($city_id == 0){

                    for ($i=0; $i <count($dates) ; $i++) { 
                        $members_count[$i] = $this->Md_database->get_count_users(date("Y", strtotime($dates[$i])),date("m", strtotime($dates[$i])));
                    }

                }else if($city_id != 0){
                    for ($i=0; $i <count($dates) ; $i++) { 
                        $members_count[$i] = $this->Md_database->get_count_users_by_date(date("Y", strtotime($dates[$i])),date("m", strtotime($dates[$i])),$city_id);
                    }
                }
      
              $data['members_count'] = $members_count;

            
            }else if($radio_btn == "last_month"){

                $dates = array();
                for ($i = 29; $i > 0; $i--) {
                    $dates[$i] =  date('Y-m-d', strtotime("-$i days"));
                }
                $dates[0] = date('Y-m-d');
                               
                $members_count = array();
      
                if($city_id == 0){

                    for ($i=0; $i <count($dates) ; $i++) { 
                        $members_count[$i] = $this->Md_database->get_count_week($dates[$i]);
                    }

                }else if($city_id != 0){
                    for ($i=0; $i <count($dates) ; $i++) { 
                        $members_count[$i] = $this->Md_database->get_count_users_by_week($dates[$i],$city_id);
                    }
                }
      
              $data['members_count'] = $members_count;
            
            }else{
                $members_count= '';
            }
            
        }
        echo json_encode($data['members_count']);
    }
}