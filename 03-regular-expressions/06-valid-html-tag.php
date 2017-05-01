<?php

$HTMLtag = "<div width=\"123px\" id=\"content\">123 123 132</div>";

$validHTMLtag = '/<[a-z]*(\s+[a-z]*="[0-9a-z]*")*>.*<\/[a-z]*>/';

$result = preg_match($validHTMLtag, $HTMLtag, $matches);

var_dump($matches[0], $result);