<?php
class Files_upload {
	
	public function uploadFilesOrImages($file,$path,$allowed_types)
    {
		$CI =& get_instance();
		$returnpath='';
        $config['upload_path']          = './'.$path;
        $config['allowed_types']        = $allowed_types;
        // $config['max_size']             = 100000;
        // $config['max_width']            = 100024;
        // $config['max_height']           = 76008;

        $CI->load->library('upload', $config);
		if($CI->upload->do_upload($file))
        {
			$data = array('upload_data' => $CI->upload->data());
			return $returnpath=$path.''.$data['upload_data']['file_name'];
        }
        echo 1;
        die;
		return $returnpath;
	}
	
	public function uploadFilesOrImagesBulk($file_name,$path,$allowed_types)
    {   
		$CI =& get_instance();
		$returnpath = [];
        foreach ($_FILES[$file_name]['name'] as $key => $img) {

            $_FILES['userfile']['name']         = $_FILES[$file_name]['name'][$key];
            $_FILES['userfile']['type']         = $_FILES[$file_name]['type'][$key];
            $_FILES['userfile']['tmp_name']     = $_FILES[$file_name]['tmp_name'][$key];
            $_FILES['userfile']['error']        = $_FILES[$file_name]['error'][$key];
            $_FILES['userfile']['size']         = $_FILES[$file_name]['size'][$key];

            $photoDoc           = uniqid() . '_' . $_FILES['userfile']['name'];
            $config['upload_path'] = $path; //'uploads/superadmin/';
            $config['allowed_types'] = $allowed_types; //'gif|jpg|png|jpeg';
            $config['max_width'] = 0;
            $config['max_height'] = 0;
            $config['max_size'] = 0;
            $config['encrypt_name'] = false;
            $config['overwrite'] = false;
            $config['file_name'] = $photoDoc;

            $CI->load->library('upload', $config);
            $CI->upload->initialize($config);
            if (!$CI->upload->do_upload('userfile')) {
                $error = $CI->upload->display_errors();
            } else {
                $returnpath[] = $path.''.$CI->upload->data()['file_name'];
            }
        }
        return $returnpath;
	}
}
?>