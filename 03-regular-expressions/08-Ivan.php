<?php

$ivanText = "���� ����� �� ����, �� ������ ���� ������ ��� ���� �� ����.";

$matchIvan = '/(�|�)���/';

$result = preg_match_all($matchIvan, $ivanText, $matches);

var_dump($matches[0], $result);