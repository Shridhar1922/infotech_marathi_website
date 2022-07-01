<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Cn_common extends MY_Controller
{
 /**
   * This is view login page index function
   * no perameter are required
   * 
   *
   * @param   no perameter
   * @package   application/Controller/construct **/
	public function __construct()
	{
		parent::__construct();
	}
	
	public function softDelete()
	{
		if (!$this->input->is_ajax_request()) {  
		   $this->session->set_flashdata('error', ' No direct script access allowed.');
		   echo true;
		}
		$table=$this->input->post('table');
		$pk_id=$this->input->post('pk_id');
		$flashdata_message=$this->input->post('flashdata_message');
		$pk_id_column=$this->Md_database->primary_key('kbg_'.$table);
		if(!empty($pk_id)){
            $updatadata = array('is_delete' =>'delete','modified_by'=>1,'modified_on'=>date('Y-m-d H:i:s'));
            $condition = array($pk_id_column => $pk_id);
            if($this->Md_database->updateData($table,$updatadata,$condition)){
                $this->system_log($table,'delete',$updatadata,array('id' =>$pk_id));
                $this->session->set_flashdata('success', $flashdata_message.' has been deleted successfully.');
				
            } else {
                $this->session->set_flashdata('error', $flashdata_message.' has been not deleted.');
            }
        }
		echo true;
	}
	
	public function changeStatus()
	{
		if (!$this->input->is_ajax_request()) {
		   $this->session->set_flashdata('error', ' No direct script access allowed.');
		   echo true;
		}
		$table=$this->input->post('table');
		$pk_id=$this->input->post('pk_id');
		$status=$this->input->post('status');
		$flashdata_message=$this->input->post('flashdata_message');
		$pk_id_column=$this->Md_database->primary_key('kbg_'.$table);
		if($status=='active'){
    		$updatadata = array('is_active' =>'active','modified_by'=>1,'modified_on'=>date('Y-m-d H:i:s'));
    	} else {
    		$updatadata = array('is_active' =>'block','modified_by'=>1,'modified_on'=>date('Y-m-d H:i:s'));
    	}
    	$condition = array($pk_id_column => $pk_id);
		if($this->Md_database->updateData($table,$updatadata,$condition)){
            $this->system_log($table,'change status',$updatadata,array('id' =>$pk_id));
			$this->session->set_flashdata('success', $flashdata_message.' status has been updated successfully.');
		} else {
			$this->session->set_flashdata('error', $flashdata_message.' status has been not updated.');
		}
		echo true;
	}

}
