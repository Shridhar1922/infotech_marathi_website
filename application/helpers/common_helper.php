<?php ob_start(); // Turn on output buffering

/*
* Getting MAC Address using PHP
* @author: Sunil Garad (Mplussoft Technology)
*/
if (!function_exists("mac_address")) {
	function mac_address()
	{
		// $mac_address = exec('getmac');
		// if(!empty($mac_address)){

		//     $mac_address = strtok($mac_address, ' ');
		// } else {
		// //     system('ipconfig /all'); //Execute external program to display output
		// //     $mycom=ob_get_contents(); // Capture the output into a variable
		// //     ob_clean(); // Clean (erase) the output buffer

		// //     $findme = "Physical";
		// //     $pmac = strpos($mycom, $findme); // Find the position of Physical text
		// //     $mac_address = substr($mycom,($pmac+36),17); // Get Physical Address        
		//     $cmd = "arp -a " . ip_address();
		//     $status = 0;
		//     $return = [];
		//     $mac_address = exec($cmd, $return, $status);
		// }
		// return $mac_address;
		return '128.98.54.6';
	}
}

/*
* Getting MAC Address using PHP
* @author: Atul Naik (Mplussoft Technology)
*/
// if (!function_exists("mac_address")) {
//     function mac_address()
//     {
//         if (!empty(exec('getmac'))) {
//             $mac_address = exec('getmac');
//         } else {
//             //     system('ipconfig /all'); //Execute external program to display output
//             //     $mycom=ob_get_contents(); // Capture the output into a variable
//             //     ob_clean(); // Clean (erase) the output buffer

//             //     $findme = "Physical";
//             //     $pmac = strpos($mycom, $findme); // Find the position of Physical text
//             //     $mac_address = substr($mycom,($pmac+36),17); // Get Physical Address        
//             $cmd = "arp -a " . ip_address();
//             $status = 0;
//             $return = [];
//             $mac_address = exec($cmd, $return, $status);
//         }
//         return $mac_address;
//     }
// }

/*
* Getting IP address using php
@author: Mayur Patil (Mplussoft Technology)
*/
if (!function_exists("ip_address")) {
	function ip_address()
	{
		if (isset($_SERVER['HTTP_CLIENT_IP']))
			$ipaddress = $_SERVER['HTTP_CLIENT_IP']; // Getting HTTP Client IP Address
		else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR']; // Getting HTTPX FORWARDED FOR Address
		else if (isset($_SERVER['HTTP_X_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED']; // Getting HTTPX FORWARDED Address
		else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_FORWARDED_FOR']; // Getting HTTP FORWARDED FOR Address
		else if (isset($_SERVER['HTTP_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_FORWARDED']; // Getting HTTP FORWARDED Address
		else if (isset($_SERVER['REMOTE_ADDR']))
			$ipaddress = $_SERVER['REMOTE_ADDR']; // Getting REMOTE ADDR Address
		else
			$ipaddress = 'UNKNOWN'; // Getting UNKNOWN Address
		return $ipaddress;
	}
}


if (!function_exists("moneyFormatIndia")) {
	function moneyFormatIndia($num){
		$explrestunits = "" ;
		if(strlen($num)>3){
			$lastthree = substr($num, strlen($num)-3, strlen($num));
			$restunits = substr($num, 0, strlen($num)-3); // extracts the last three digits
			$restunits = (strlen($restunits)%2 == 1)?"0".$restunits:$restunits; // explodes the remaining digits in 2's formats, adds a zero in the beginning to maintain the 2's grouping.
			$expunit = str_split($restunits, 2);
			for($i=0; $i < sizeof($expunit);  $i++){
				// creates each of the 2's group and adds a comma to the end
				if($i==0)
				{
					$explrestunits .= (int)$expunit[$i].","; // if is first value , convert into integer
				}else{
					$explrestunits .= $expunit[$i].",";
				}
			}
			$thecash = $explrestunits.$lastthree;
		} else {
			$thecash = $num;
		}
		return $thecash; // writes the final format where $currency is the currency symbol.
	}
}


if (!function_exists("distance")) {
	function distance($lat1, $lon1, $lat2, $lon2, $unit) {
	  if (($lat1 == $lat2) && ($lon1 == $lon2)) {
		return 0;
	  }
	  else {
		$theta = $lon1 - $lon2;
		$dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
		$dist = acos($dist);
		$dist = rad2deg($dist);
		$miles = $dist * 60 * 1.1515;
		$unit = strtoupper($unit);

		if ($unit == "K") {
		  return ($miles * 1.609344);
		} else if ($unit == "N") {
		  return ($miles * 0.8684);
		} else {
		  return $miles;
		}
	  }
	}
}


function otp($mobile_number,$message,$templateid)
{ 
	$curl = curl_init();

	curl_setopt_array($curl, array(
		CURLOPT_URL => "http://www.smsbox.in/api/sms/SendSMS.aspx?usr=Scrollup&key=D8AB7AC5-90B3-4A8C-8C0E-C23D2AEF35FF&smstype=TextSMS&to=".$mobile_number."&msg=Your%20Scrollup%20verification%20one%20time%20password%20is%20".$message.".%20Code%20is%20valid%20for%2010%20minutes%20only%2C%20One%20Time%20Use.&rout=Transactional&from=SROLUP&templateid=".$templateid,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		// CURLOPT_POSTFIELDS => "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"to\"\r\n\r\n7083719169\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"msg\"\r\n\r\nYour Scrollup verification one time password is 1234567. Code is valid for 10 minutes only, One Time Use.\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"templateid\"\r\n\r\n1607100000000154203\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--",
		// CURLOPT_HTTPHEADER => array(
		// 	"cache-control: no-cache",
		// 	"content-type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW",
		// 	"postman-token: 9470ad44-8703-3a1c-a5d6-6230d8e12ac2"
		// ),
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
	return "cURL Error #:" . $err;
	} else {
	return $response;
	}



}

function getYoutubeEmbedUrl($url)
{
	 $shortUrlRegex = "/youtu.be\/([a-zA-Z0-9_-]+)\??/i";
	 $longUrlRegex = "/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))([a-zA-Z0-9_-]+)/i";

	if (preg_match($longUrlRegex, $url, $matches)) {
		$youtube_id = $matches[count($matches) - 1];
	}

	if (preg_match($shortUrlRegex, $url, $matches)) {
		$youtube_id = $matches[count($matches) - 1];
	}
	return 'https://www.youtube.com/embed/' . $youtube_id ;
}


function getCurrencyNumbertoWordNumber($number)
{
$no = floor($number);
$point = round($number - $no, 2) * 100;
$hundred = null;
$digits_1 = strlen($no);
$i = 0;
$str = array();
$words = array('0' => '', '1' => 'One', '2' => 'Two',
'3' => 'Three', '4' => 'Four', '5' => 'Five', '6' => 'Six',
'7' => 'Seven', '8' => 'Eight', '9' => 'Nine',
'10' => 'Ten', '11' => 'Eleven', '12' => 'Twelve',
'13' => 'Thirteen', '14' => 'Fourteen',
'15' => 'Fifteen', '16' => 'Sixteen', '17' => 'Seventeen',
'18' => 'Eighteen', '19' =>'Nineteen', '20' => 'Twenty',
'30' => 'Thirty', '40' => 'Forty', '50' => 'Fifty',
'60' => 'Sixty', '70' => 'Seventy',
'80' => 'Eighty', '90' => 'Ninety');
$digits = array('', 'Hundred', 'Thousand', 'Lakh', 'Crore');
while ($i < $digits_1) {
 $divider = ($i == 2) ? 10 : 100;
 $number = floor($no % $divider);
 $no = floor($no / $divider);
 $i += ($divider == 10) ? 1 : 2;
 if ($number) {
	$plural = (($counter = count($str)) && $number > 9) ? 's' : null;
	$hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
	$str [] = ($number < 21) ? $words[$number] .
		" " . $digits[$counter] . $plural . " " . $hundred
		:
		$words[floor($number / 10) * 10]
		. " " . $words[$number % 10] . " "
		. $digits[$counter] . $plural . " " . $hundred;
 } else $str[] = null;
}
$str = array_reverse($str);
$result = implode('', $str);
$points = ($point) ?
"." . $words[$point / 10] . " " . 
	  $words[$point = $point % 10] : '';
echo "Rs. ".$result . "Only  " ;
}
?>