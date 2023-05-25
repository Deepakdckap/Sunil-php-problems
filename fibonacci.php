<?php
$a = 0; // this variable is for loop
$n1 = 0; // this variable is for asigining
$n2 = 1; // this variable is for asigning
echo $a." ".$n2." ";
while ($a <= 10) {
    $n3 = $n1 + $n2;
    $n1 = $n2;
    $n2 = $n3;
    echo $n3 . " ";
    $a++;
}








?>