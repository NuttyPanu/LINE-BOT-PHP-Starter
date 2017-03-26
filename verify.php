<?php
$access_token = 'y2UlAlusSEOWpYjx2P+ua9/kcF1HaE03n8j51eOO/CUr8HnGUWRtA+P8BcLejtsA3dpulZ/wBPiy2zxYXsSfjuxaK1Tq9MvWdXFMQkG37qTD4Qhf/QluGnHmXY5+39jMKF8ZFAi9SQ21aT3ksZbjYQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>
