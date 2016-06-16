<?php

    $firstName = "Augustus";
    $lastName = "Wilder";
    
    echo $firstName ." ". $lastName;

    echo "<br>";
    
    $firstVar = 4;
    $secondVar = 6;

    echo $firstVar + $secondVar;
    
    echo "<hr>";
    
    if ($firstVar < 10) {
        echo $firstVar ." ". "is less than 10";
    } else if ($firstVar > 10) {
        echo $firstVar ." ". "is greater than 10";
    } else if ($firstVar == 10) {
        echo $firstVar ." ". "is equal to 10";
    }
    
    echo "<hr>";
    
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
    
    echo "<hr>";
    
    $brushNum2 = 100;
    $brushCost2 = 3;
    $currentCost2 = $brushNum2 * $brushCost2;
    
    echo "$currentCost2";
    echo "<br>";
    
    do {
        $currentCost2 = $currentCost2 - 3;
        $brushNum2 = $brushNum2 - 1;
        if ($currentCost2 % 10 === 0) {
            echo $currentCost2;
            echo "<br>";
        }
    }
    while ($brushNum2 > 0);
    
    echo "<hr>";
    
    for ($i=1; $i <= 10; $i++){
        echo "$i";
        echo "<br>";
    }
    
    echo "<hr>";
    
    $states=array("Pennsylvania", "Arkansas", "Massachusets", "Texas", "California", "Montana");
    $statesLength=count($states);
    echo "<select>";
    for ($i=0; $i < $statesLength; $i++){
        echo "<option value='" . $states[$i] . "'>" . $states[$i] . "</option>";
    }
    echo "</select>";
    
    echo "<hr>";
    
    $statesAssoc=array("Pennsylvania"=>"Harrisburg", "Maine"=>"Augusta", "Hawaii"=>"Honolulu", "Texas"=>"Austin");
    foreach ($statesAssoc as $x => $x_value){
        echo "The capitol of " . $x . " is " . $x_value;
        echo "<br>";
    }
    
    echo "<hr>";
    
    $books = array (
        array("The Hitchhiker's Guide to the Galaxy", "10", "Douglas Adams");
        array("The Lord of the Rings", "9", "J. R. R. Tolkien");
        array("The Martian", "13", "Andy Weir");
        array("The Color of Magic", "8", "Terry Pratchett");
        array("I, Robot", "6", "Isaac Asimov");
        array("The Way of Kings", "11", "Brandon Sanderson");
    );
    
    foreach ()
    
?>