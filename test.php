<?php

$s = curl_init();
curl_setopt($s,CURLOPT_URL,'http://localhost:3000/customer');
curl_setopt($s,CURLOPT_HEADER,true);
$result = curl_exec($s);

echo "<pre>";print_r($result);echo "</pre>"; ?>
