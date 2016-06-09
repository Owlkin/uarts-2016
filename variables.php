<?php

    $firstName = "Augustus";
    $lastName = "Wilder";
    
    echo $firstName ." ". $lastName;

    echo "<br>";
    
    $firstVar = 4;
    $secondVar = 6;

    echo $firstVar + $secondVar;
    
    echo "<br>";
    
    if ($firstVar < 10) {
        echo $firstVar ." ". "is less than 10";
    } else if ($firstVar > 10) {
        echo $firstVar ." ". "is greater than 10";
    } else if ($firstVar == 10) {
        echo $firstVar ." ". "is equal to 10";
    }
    
    echo "<br>";
    
    $brushNum = 0;
    $currentCost = 0;
    
    while ($brushNum <= 100) {
        $currentCost = $currentCost + 3;
        $brushNum++;
        if ($currentCost % 10 === 0) {
            echo $currentCost;
            echo "<br>";
        }
    }
    
    
    
?>