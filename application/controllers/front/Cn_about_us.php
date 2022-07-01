<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cn_about_us extends MY_Controller
{
   /**
   * This is view about us page about_us function
   * no perameter are required
   * 
   *
   * @param   no perameter
   * @package   application/Controller/front/about_us
   */
	public function about_us()
	{
		$data['cms_data'] = $this->Md_database->getData(SCROLLUP_CMS,'page_title,id,cms_text,cms_meta_title,cms_meta_keywords,cms_description',array('status'=>1,'id'=>1),'id');
		$data['cms_how'] = $this->Md_database->getData(SCROLLUP_CMS,'page_title,id,cms_text,cms_meta_title,cms_meta_keywords,cms_description',array('status'=>1,'id'=>4),'id');
		$this->frontend('front/about_us',$data,true);
	}

}