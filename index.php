<?php

$output = json_decode(file_get_contents('php://input'),true);
$id = $output['message']['chat']['id'];
$text = $output['message']['text'];

if($text = 'hi')
file_put_contents("https://api.telegram.org/bot384628942:AAFoapuIipUZEAwi2NQoNElgF6uXfBdWFu8/sendMessage?chat_id=".$id."&text=ih");

?>