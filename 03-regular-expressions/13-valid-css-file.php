<?php

$classSelector = '.class-Name123';

$classSelectorPattern = '/\.[\w\-]+/';

$result = preg_match_all($classSelectorPattern, $classSelector, $matches);

var_dump($matches);