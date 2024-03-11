<?php

function reverseDigits($number){
    $rev_number = 0;
    while ($number > 1){
        $rev_number = $rev_number * 10 + $number % 10;
        $number = (int) $number / 10;
    }
    return $rev_number;

}

$number = 41413;
echo "The reverse result is: ", reverseDigits($number);