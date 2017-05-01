<?php

$angelOfDeath = <<<EOT
Sadistic, surgeon of demise
Sadist of the noblest blood

Destroying, without mercy to benefit the Aryan race.

In this frozen water burial?

His face of death staring down, your blood running cold.
Injecting cells, dying eyes
Feeding on the screams of the mutants he's creating.
Pathetic harmless victims
Left to die
Rancid Angel of Death
Flying free
Angel of Death
Monarch to the kingdom of the dead
Infamous butcher,
Angel of Death!
EOT;

$sentencePattern = '/[A-Z][a-z\']*([,\-;:]?\s[A-Za-z][a-z\']*[,\-;:]?)*[\.\?!]/';

$result = preg_match_all($sentencePattern, $angelOfDeath, $matches);

var_dump($matches[0]);
