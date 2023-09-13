<?php

$count_page = ("countfile.txt");
$counts = file($count_page);
$counts[0] ++;

$fput = fopen($count_page, "w");
fputs($fput, "$counts[0]");
fclose($fput);
echo $counts[0];
