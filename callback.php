<?php

require_once("functions.php");

$accessToken = "<ACCESS_TOKEN>";

if(isset($_REQUEST['hub_challenge'])){
	$challenge = $_REQUEST['hub_challenge'];
	$token = $_REQUEST['hub_verify_token'];

	if($token == "JLSEHtw84t08wfe8"){
		echo $challenge;
		die();
	}
}
$input = json_decode(file_get_contents('php://input'), true);
//file_put_contents('file.txt',file_get_contents('php://input'));

$sender = $input['entry'][0]['messaging'][0]['sender']['id'];
$message = $input['entry'][0]['messaging'][0]['message']['text'];
$payload = $input['entry'][0]['messaging'][0]['postback']['payload'];
$qr = $input['entry'][0]['messaging'][0]['message']['quick_reply']['payload'];

// if($message == 'Red'){
// 	file_put_contents('file.txt', print_r($input, true)  );
// }


$url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$accessToken;

$ch = curl_init($url);

$user = getUserInfo($sender);


curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($response));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
if(!empty($input['entry'][0]['messaging'][0]['message']) || $sendMessage == true){
	  $result = curl_exec($ch);
		//file_put_contents('file.txt', print_r($result, true)  );
}
curl_close($ch);

?>
