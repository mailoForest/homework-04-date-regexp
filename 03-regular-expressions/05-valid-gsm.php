<?php

$BGgsm = "+359988458697, 0988458697, +359878458697, +359898458697, 0878458697, invalid: 07256598, 09875666541, 088945621";

$BGgsmPattern = '/(0|\+359)(?:8[7-9][0-9]{7}|988[0-9]{6})/';

$result = preg_match_all($BGgsmPattern, $BGgsm, $matches);

var_dump($matches[0], $result);