<?php

$date = date("Y-m-d H:i:s");
$fp = fopen("tokens","a");
fwrite($fp,$date."\t$_SERVER[REMOTE_ADDR]\t".$_GET['token']."\n");
fclose($fp);
echo 1;
