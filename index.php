<?php

$output = json_decode(file_get_contents('php://input'),true);
$id = $output['message']['chat']['id'];
$text = $output['message']['text'];

file_get_contents("http://ggsite.ru/bot/ggsite/index.php?pass=0982359238&id=".$id."&text=".urlencode($text));
file_get_contents("https://api.telegram.org/bot384628942:AAFoapuIipUZEAwi2NQoNElgF6uXfBdWFu8/sendMessage?chat_id=".$id."&text=".$id);

?>