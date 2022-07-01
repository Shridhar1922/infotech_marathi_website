<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Cn_configuration extends MY_Controller
{
   /**
   * This is view configuration page index function
   * no perameter are required
   * 
   *
   * @param   no perameter
   * @package   application/Controller/master/configuration/index
   */
    public function configuration()
    {
        $data['configuration'] = $this->Md_database->getData(SCROLLUP_MASTER_CONFIGURATION, 'id,referral_commission,withdrawal_limit',array('status'=>1),'id asc');
        $this->adminBackend('admin/master/configuration',$data,TRUE);
    }

	/**
	 * ***************Function to save configuration **********
	 * @type : Function
	 * @function name : configuration_action
	 * @description : Insert "configuration data" admin interface
	 * @param : null
	 * @designer : Yogita Patil
	 * @author : Yugal Mali
	 * @return : null
	 ********************************************************* */
    public function action_configuration(){
        if (!empty($this->input->post())) {
			$this->form_validation->set_rules('referral_commission', 'referral_commission', 'trim|required');
			$this->form_validation->set_rules('withdrawal_limit', 'withdrawal_limit', 'trim|required');
			if ($this->form_validation->run() === FALSE) {
				$this->session->set_flashdata('error', validation_errors());
				redirect($_SERVER['HTTP_REFERER']);
				exit();
			} else {
				$formdata = $this->input->post();
				$txtpkey = $formdata['txtpkey'];
				unset($formdata['submit_btn']);
				unset($formdata['txtpkey']);
				$data = array_map('trim', $formdata);
				$check = '';
				// if (!empty($txtpkey)) {
					$data['updated_by'] = $this->session->userdata('UADMINID');
					$data['updated_at'] = $this->current_date_time;
					$data['updated_ip_address'] = ip_address();
					$check = $this->Md_database->updateData(SCROLLUP_MASTER_CONFIGURATION, $data, array('id' => $txtpkey));
					if (!empty($check)) {
						$this->system_log(SCROLLUP_MASTER_CONFIGURATION, 'update', $data, array('id' => $txtpkey));
						$this->session->set_flashdata('success', 'Configuration saved successfully');
					} else {
						$this->session->set_flashdata('error', 'Unable to save configuration');
					}
				// } else {
				// 	$data['created_by'] = $this->session->userdata('UADMINID');
				// 	$data['created_ip_address'] = ip_address();
				// 	$check = $this->Md_database->insertData(SCROLLUP_MASTER_CONFIGURATION, $data);
				// 	if (!empty($check)) {
				// 		$this->system_log(SCROLLUP_MASTER_CONFIGURATION, 'insert', $data, array('id' => $check));
				// 		$this->session->set_flashdata('success', 'Configuration saved successfully');
				// 	} else {
				// 		$this->session->set_flashdata('error', 'Unable to save configuration');
				// 	}
				// }
				redirect('shubham/configuration', 'refresh', 301);
			}
		}
    }
}
