<?php

$output = json_decode(file_get_contents('php://input'),true);
$id = $output['message']['chat']['id'];
$text = $output['message']['text'];
$token = '384628942:AAFoapuIipUZEAwi2NQoNElgF6uXfBdWFu8';

function sendMessage($token, $id, $message){
	file_get_contents("https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$id."&text=".$message);
}

switch($text){
	case 'hi':
		$message = 'hello';
		sendMessage($id, $message);
	break;
	case 'hihi':
		$message = 'hellohello';
		sendMessage($id, $message);
	break;
	
	default:
		$message = 'no';
		sendMessage($id, $message);
	break;
}

		$message = 'no';
		sendMessage($id, $message);

?>