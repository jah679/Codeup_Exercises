<?php

$a = 100;
do {
    echo $a . "\n";
    $a = $a - 5;
}
while ($a >= -10);

$a = 2;
do {
    echo $a ."\n";
    $a = $a + 2;
}
while ($a <= 100);

$a = 2;
do {
    echo $a . "\n";
    $a = $a * $a;
}
while ($a <= 1000000);
