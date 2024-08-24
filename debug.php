<?php

$dateTime = date('Y-m-d H:i:s');

$file = 'log.txt';

$current = file_get_contents($file);

$current .= "$dateTime\n";

file_put_contents($file, $current);
echo "Дата и время записаны: $dateTime";