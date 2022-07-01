<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Cn_cms extends MY_Controller
{
 /**
   * This is view cms page index function
   * no perameter are required
   * 
   *
   * @param   no perameter
   * @package   application/Controller/cms **/
    public function cms()
    {
		$data['cms'] = $this->Md_database->getData(SCROLLUP_CMS, 'id,page_title,cms_text,cms_meta_title,cms_meta_keywords,cms_description', array('status' => '1'),'id asc');
		$this->adminBackend('admin/cms/vw_cms',$data,TRUE);
    }

    /*****************Function to update cms content**********
	 * @type : Function
	 * @function name : cms_action
	 * @description : Update "CMS content" admin interface
	 * @param : null
	 * @designer : Yogita Patil
	 * @author : Atul Naik
	 * @return : null
	 ********************************************************* */
	public function cms_action()
	{
		if (!empty($this->input->post())) {
			$txtid = $this->input->post('txtid');
			$this->form_validation->set_rules('page_id', 'Page Title', 'trim|required');
			// $this->form_validation->set_rules('content', 'Content', 'trim|required');
			if ($this->form_validation->run() === FALSE) {
				$this->session->set_flashdata('error', validation_errors());
				redirect($_SERVER['HTTP_REFERER']);
				exit();
			} else {
				$formdata = $this->input->post();
				unset($formdata['cmsBtn']);
				$data = array(
					// 'slug_url' => $formdata['slug_url'], 
					'cms_text' => $formdata['cms_text'],
					'cms_meta_title' => $formdata['cms_meta_title'],
					'cms_meta_keywords' => $formdata['cms_meta_keywords'],
					'cms_description' => $formdata['cms_description'],
				);
				

				$data['updated_by'] = $this->session->userdata('UADMINID');
				$data['updated_ip_address'] = ip_address();
				$data['updated_at'] = $this->current_date_time;
				
				$check = $this->Md_database->updateData(SCROLLUP_CMS, $data, array('id' => $txtid));
				if (!empty($check)) {
					$this->session->set_flashdata('success', 'CMS saved successfully');
				} else {
					$this->session->set_flashdata('error', 'Unable to save CMS');
				}
				redirect('shubham/cms', 'refresh', 301);
			}
		}
	}

/*****************Function to get cms data by page title **********
	 * @type : Function
	 * @function name : get_cms_data_by_page
	 * @description : Get "cms page data by page title" admin interface
	 * @param : null
	 * @designer : Yogita Patil
	 * @author : Atul Naik
	 * @return : null
	 ********************************************************* */
	public function get_cms_data_by_page()
	{
		if (!$this->input->is_ajax_request()) {
			exit('No direct script access allowed');
		} else {

			$page_title = $this->input->post('page_title');
			if (!empty($page_title)) {
				$this->db->where('id', $page_title);
				$this->db->where('status', 1);
				$query = $this->db->get(SCROLLUP_CMS);
				$result = $query->row();

				if (!empty($result)) {
					$data['id'] = $result->id;
					$data['cms_text'] = $result->cms_text;
					$data['cms_meta_title'] = $result->cms_meta_title;
					$data['cms_description'] = $result->cms_description;
					$data['cms_meta_keywords'] = $result->cms_meta_keywords;
					echo json_encode($data);
				}
				exit;
			}
		}
	}

}
