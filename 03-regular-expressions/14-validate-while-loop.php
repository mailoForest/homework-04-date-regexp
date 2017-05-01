<?php

$loop = 'while (1$) {';

$whileLoopPattern = '/while\s?\([\d\w<>\|&\(\)$\"\'=]+\)\s?\{/';

$result = preg_match($whileLoopPattern, $loop, $matches);
var_dump($matches);