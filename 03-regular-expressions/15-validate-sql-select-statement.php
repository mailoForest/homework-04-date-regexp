<?php

$sqlStatement = 'SELECT StreetNumber FROM addres';

$sqlStatementPattern = '/SELECT\s[\w]+[,\w]*\sFROM\s[\w]+/';

$result = preg_match($sqlStatementPattern, $sqlStatement, $matches);
var_dump($matches);

/**
 * SELECT column_name,column_name
    FROM table_name;
 */