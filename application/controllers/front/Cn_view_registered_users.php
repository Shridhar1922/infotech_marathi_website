

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cn_view_registered_users extends MY_Controller
{
    //  REGISTERED USERS VIEW MORE PAGE
    public function view_registered_users()
    {
        $data['city'] = $this->Md_database->getData(SCROLLUP_MASTER_CITY, 'city_id,city,sql_tb_name,live_website_count as count', array('status' => 1), 'city asc');
        $data['register_user_count'] = $this->Md_database->getData(SCROLLUP_MASTER_CONFIGURATION, 'total_register_live_count as count', array('status' => 1, 'id' => 1));
        $this->frontend('front/view_registered_users', $data, true);
    }
}
