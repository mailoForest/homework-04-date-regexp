<?php

$gmail = "somebody-to_love115@gmail.com";

$matchgmail = '/^[\da-z\-_\.]+@gmail\.com$/';

$result = preg_match($matchgmail, $gmail, $matches);

var_dump($matches[0], $result);