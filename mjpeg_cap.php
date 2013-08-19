<?php

//$camurl="http://127.0.0.1:8070/?action=stream";
$camurl='http://127.0.0.1:8070/?action=snapshot';
$fp = fopen("example.jpeg", "w");
$ch = curl_init();

//$ch = curl_init($_GET[$camurl'']);
//$ch = curl_init('http://example.com/image.php');
curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_URL, $camurl);
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
curl_close($ch);

fclose($fp);

?>