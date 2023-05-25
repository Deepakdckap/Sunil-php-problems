<?php
function primeNumber($number)
{
    for ($i=2;$i<$number;$i++){
        if ($number % $i == 0)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
}

$primeNumber = primeNumber(12);

// done with ternary operator;
echo ($primeNumber !== 1) ? "is prime number":"is composite number";