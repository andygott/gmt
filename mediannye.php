<?php
date_default_timezone_set('UTC');
$median_nye_unix = strtotime('31 Dec 2015 20:15:00');
$seconds_to_median_nye = $median_nye_unix - time();
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");
header("HTTP/1.1 200 OK");
echo('{"median_nye":"' . date('D, j M Y G:i:s e', $median_nye_unix) . '","seconds_remaining":"' . $seconds_to_median_nye . '"}');
?>