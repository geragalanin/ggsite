﻿<?php

$output = json_decode(file_get_contents('php://input'),true);
$id = $output['message']['chat']['id'];
$text = $output['message']['text'];
$token = '384628942:AAFoapuIipUZEAwi2NQoNElgF6uXfBdWFu8';

switch($text){
	case 'hi':
		$message = 'hello';
		file_get_contents("https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$id."&text=".$message);
	break;
	case 'hihi':
		$message = 'привет';
		file_get_contents("https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$id."&text=".$message);
	break;
	default:		
		$message = 'no';
		file_get_contents("https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$id."&text=".$message);
}
	
?>