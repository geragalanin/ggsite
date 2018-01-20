<?php

$output = json_decode(file_get_contents('php://input'),true);
$id = $output['message']['chat']['id'];
$text = $output['message']['text'];

file_get_contents("http://ggsite.ru/bot/ggsite/index.php?pass=76898428&id=".$id."&text=".urlencode($text));

?>