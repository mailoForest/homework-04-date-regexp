<?php

$number = '1000, 10999, 19000, 2000, 9999, 999, 10';
$numberPattern = '/(?:1[0-8][\d]{3}|19000)|([1-9][\d]{3})/';

$result = preg_match_all($numberPattern, $number, $matches);
var_dump($matches[0]);