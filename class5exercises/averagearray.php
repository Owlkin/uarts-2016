<?php
    // 5) Add the following to an array: 
    // 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
    // Write a script that will add those numbers, then divide by the number of elements in the array in order to determine 
    // the average of those numbers.

    $stringToAverage = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";

    $arrayToAverage = explode(" ", $stringToAverage);
    
    $arrayLength = count($arrayToAverage);
    
    $arraySum = 0;
    
    for ($i=0; $i <= $arrayLength; $i++) {
        $arraySum = $arraySum + $arrayToAverage[$i];
    }
    
    $averageOfNumbers = $arraySum / $arrayLength;
    
    echo $averageOfNumbers;
    
    
?>