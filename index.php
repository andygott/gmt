<?php
date_default_timezone_set('UTC');
header("Content-type: application/json");
header("HTTP/1.1 200 OK");
echo('{"gmt":"' . date('D, j M Y G:i:s e') . '"}');
?>