<?php

$carNumbers = 'CT 1234 TP, TX 7337 TX, CB 7997 AB, CT 7895 AH';

$matchCTcarNums = '/CT\s\d{4}\s[AXCBMHKETOP]{2}/';

$result = preg_match_all($matchCTcarNums, $carNumbers, $matches);

var_dump($matches[0], $result);