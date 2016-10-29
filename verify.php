<?php
$access_token = 'JV0ulg8NHHEaHwS9PYXEpbpO/BEcnqrC+HTRMJSvYbIsi597bPtKCaU7W1E9Vhop3imysvgwtLuIWfTDri97oG3Tu/iBz+0np+dDeXokyvmzHGlYf5sYy2Myja+7Fi0aqN8nfPyD1NBey1fCyC0GRwdB04t89/1O/w1cDnyilFU=';

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