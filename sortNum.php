<?php
    function sortAnInteger($value){
        $array = $value;
        rsort($value);
        sort($array );
        print_r($array );
        print_r($value);
        
    }
    sortAnInteger([1,3,2,4,7,8,0,9,12,-10,4,3]);
?>