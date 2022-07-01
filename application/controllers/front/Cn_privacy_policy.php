<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cn_privacy_policy extends MY_Controller
{
   /**
   * This is view privacy policy page privacy_policy function
   * no perameter are required
   * 
   *
   * @param   no perameter
   * @package   application/Controller/front/privacy_policy
   */
	public function privacy_policy()
	{
		$data['cms_data'] = $this->Md_database->getData(SCROLLUP_CMS,'page_title,id,cms_text,cms_meta_title,cms_meta_keywords,cms_description',array('status'=>1,'id'=>3),'id');
		$data['cms_how'] = $this->Md_database->getData(SCROLLUP_CMS,'page_title,id,cms_text,cms_meta_title,cms_meta_keywords,cms_description',array('status'=>1,'id'=>4),'id');
		$this->frontend('front/privacy_policy',$data,true);
	}

}