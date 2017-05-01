<?php

$mail = 'somebody-to_love123@yahoo.com';

$matchMail = '/^[\da-z\-_\.]+@(?:(?:gmail|yahoo)\.com|abv\.bg)$/'; 

$result = preg_match($matchMail, $mail, $matches);
var_dump($matches[0]);