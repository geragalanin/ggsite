<?php

$output = json_decode(file_get_contents('php://input'),true);
$id = $output['message']['chat']['id'];
$text = $output['message']['text'];
$token = '384628942:AAFoapuIipUZEAwi2NQoNElgF6uXfBdWFu8';

switch($text){
	case 'hi':
		$message = 'hello';
		SendMessage($token,$id,$message);
	break;
	case 'hihi':
		$message = 'hi';
		SendMessage($token,$id,$message.KeyboardMenu());
	break;
	default:		
		$message = 'no';
		SendMessage($token,$id,$message);
}

function SendMessage($token,$id,$message){
	file_get_contents("https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$id."&text=".$message);
}

function KeyboardMenu(){
	$buttons = [['hi'],['hihi']];
	$keyboard = json_encode($keyboard = ['keyboard' => $buttons,       //кнопки 
										  'resize_keyboard' => true,  //размер кнопок норм, если true
										  'one_time_keyboard' => true, //убирается само, если true
										  'selective' => false]);
	$reply_markup = '&reply_markup='.$keyboard.'';
	
	return $reply_markup; 
}
	
?>