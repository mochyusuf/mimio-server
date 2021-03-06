<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

        function SendGCM($message, $id, $key_server)
        {
            $registrationIds = $id;
			#prep the bundle
			
			$msg = array
			(
				'body' 	=> $message,
				'title'	=> $message,
				'icon'	=> 'myicon',
				'sound' => 'mySound'
			);
			
			$fields = array
			(
				'to'		=> $registrationIds,
				'notification'	=> $msg
			);
				
			$headers = array
			(
			'Authorization: key=' . $key_server,
				'Content-Type: application/json'
			);
			#Send Reponse To FireBase Server	
			
			$ch = curl_init();
			curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
			curl_setopt( $ch,CURLOPT_POST, true );
			curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
			curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
			curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
			curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
			$result = curl_exec($ch );
			curl_close( $ch );
			#Echo Result Of FireBase Server
			echo $result;
        }

    
