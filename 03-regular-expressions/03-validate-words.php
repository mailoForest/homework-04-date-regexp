<?php

$angelOfDeath = <<<EOT
Sadistic, surgeon of demise
Sadist of the noblest blood

Destroying, without mercy
To benefit the Aryan race

In this frozen water burial?

His face of death staring down,
Your blood running cold.
Injecting cells, dying eyes
Feeding on the screams of
The mutants he's creating
Pathetic harmless victims
Left to die
Rancid Angel of Death
Flying free
Angel of Death
Monarch to the kingdom of the dead
Infamous butcher,
Angel of Death!
		
Something is no thing
EOT;

$wordPattern = '/[A-Za-z][a-z]*/';

$result = preg_match_all($wordPattern, $angelOfDeath, $matches);

var_dump($matches);
