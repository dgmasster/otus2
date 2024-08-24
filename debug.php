<?php

$currentDateTime = date('Y-m-d H:i:s');

$file = 'log/log.txt';

$handle = fopen($file, 'a');

fwrite($handle, $currentDateTime . "\n");

fclose($handle);
