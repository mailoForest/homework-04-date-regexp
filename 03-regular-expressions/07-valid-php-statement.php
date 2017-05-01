<?php

$PHPstatement = <<<EOT
if (1) {
		
//expression;
}
EOT;





$validPHPstatement = '/[a-z]+\s?\(.+\)\s?\{\r*\n*.+;\r*\n*}/'; //\n.*;\r*\n*}

$result = preg_match($validPHPstatement, $PHPstatement, $matches);

var_dump($matches);

