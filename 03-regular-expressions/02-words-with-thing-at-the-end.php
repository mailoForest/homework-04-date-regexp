<?php
$thingSring = 'Something is any thing, but nothing.';

$thingPattern = '/[A-Za-z]*thing/';

$result = preg_match_all($thingPattern, $thingSring, $matches);

var_dump($matches[0], $result);