<?php defined('BASEPATH') OR exit('No direct script access allowed');
	
class Htmltopdf {
	
    public function generate_pdf($pdfpath, $filename, $savefilepath)
	{
		$curl_handle = curl_init();
        curl_setopt($curl_handle, CURLOPT_URL, base_url().'pdf/pdf.php');              
        #curl_setopt($curl_handle, CURLOPT_URL, PDFHOMEPATH);
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl_handle, CURLOPT_POST, 1);
        curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
             'pdfpath' => $pdfpath,
             'filename' => $filename,
			 'savefilepath' => $savefilepath
         ));
        
		$buffer = curl_exec($curl_handle);
        curl_close($curl_handle);
		$result = json_decode($buffer);
        return  $result;
	}
	
}   