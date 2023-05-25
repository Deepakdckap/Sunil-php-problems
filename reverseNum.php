<?php

// reverse an number;
// $num  = 123456789;  
// $x = 0;
// $n =$num;
 
// while(floor($num))
// {  
// $mod = $num%10;
// $x = $x * 10 + $mod;  
// $num = $num/10;
// }  
// echo "Reverse of $n is $x."."\n";

function reverseNumber($num){

    $x = 0;
    $n =$num;
    while(floor($num))
    {
        if ($mod = $num%10) {
            $x = $x * 10 + $mod;
            $num = $num/10;
        }else{
            echo "This is not an number";
        }
    }
        return $x;
}

echo reverseNumber("1234444567889");

