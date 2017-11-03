<?php

$output = json_decode(file_get_contents('php://input'),true);
$id = $output['message']['chat']['id'];
$text = $output['message']['text'];
$token = '384628942:AAFoapuIipUZEAwi2NQoNElgF6uXfBdWFu8';

function sendMessage($id, $message){
	file_get_contents("https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$id."&text=".$message);
}


		sendMessage($id, 'hello');

?>