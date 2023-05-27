<?php
function tables($num){
    if($num = (int)readline("Enter the number => ")){
        for($i=1; $i<=10; $i++){
            $result = $i * $num;
            echo "$num * $i = $result";
            echo "\n";
        }
    }
    else {
        echo "Invalid Number"."\n";
    }
}
tables(3); // any number can be delecred here


?>