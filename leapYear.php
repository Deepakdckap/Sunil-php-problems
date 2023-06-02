<?php
// NOTE: Year should be in 4 digits
$year = readline("Enter the year: ");

$lead =  ($year % 4 == 0 )? " It was a Leap year"."\n" : "It was not a Leap year"."\n";

echo $lead;













?>