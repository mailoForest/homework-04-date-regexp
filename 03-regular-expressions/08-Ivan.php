<?php

$ivanText = "Иван казал на Иван, че другия Иван отишъл при чичо си иван.";

$matchIvan = '/(И|и)ван/';

$result = preg_match_all($matchIvan, $ivanText, $matches);

var_dump($matches[0], $result);