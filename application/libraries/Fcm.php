<?php defined('BASEPATH') OR exit('No direct script access allowed');
	
class Fcm {
	
    public function send_notification($registatoin_ids='',$title,$body,$redirect_type='',$redirect_id='') {
		$fcmUrl = 'https://fcm.googleapis.com/fcm/send';
				
		$notification = [
            'title' =>$title,
            'message' =>$body,
			'redirect_type' => $redirect_type,
			'redirect_id'=>$redirect_id,
            'sound' => 'default'
        ];
        $extraNotificationData =$notification;

        $fcmNotification = [
            //'registration_ids' => $tokenList, //multple token array
            'to'        => $registatoin_ids, //single token
            'notification' => $notification,
            'data' => $extraNotificationData
        ];

        $headers = [
            'Authorization: key=' . FCM_SERVER_KEY,
            'Content-Type: application/json'
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$fcmUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fcmNotification));
        $result = curl_exec($ch);
        curl_close($ch);
	}
}   