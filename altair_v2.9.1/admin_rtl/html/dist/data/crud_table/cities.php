<?php

$str = file_get_contents('cities.json');
$json = json_decode($str, true);

$jTableResult['Result'] = "OK";
$jTableResult['Options'] = $json;
print json_encode($jTableResult);