<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cn_terms_and_conditions extends MY_Controller
{
   /**
   * This is view terms & conditions page terms_and_conditions function
   * no perameter are required
   * 
   *
   * @param   no perameter
   * @package   application/Controller/front/terms_and_conditions
   */
	public function terms_and_conditions()
	{
		$data['cms_data'] = $this->Md_database->getData(SCROLLUP_CMS,'page_title,id,cms_text,cms_meta_title,cms_meta_keywords,cms_description',array('status'=>1,'id'=>2),'id');
		$data['cms_how'] = $this->Md_database->getData(SCROLLUP_CMS,'page_title,id,cms_text,cms_meta_title,cms_meta_keywords,cms_description',array('status'=>1,'id'=>4),'id');
		$this->frontend('front/terms_and_conditions',$data,true);
	}

}