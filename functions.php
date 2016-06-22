<?php
    
    function fix_names($firstName, $lastName) {
    	$n1 = ucfirst(strtolower($firstName));
    	$n2 = ucfirst(strtolower($lastName));
    	$nameArray = array ( $n1, $n2 );
    	return $nameArray;
    }
    
    
    $name = fix_names("EDWARD", "hertZOg");
    
    echo $name[0] . " " . $name[1];

    echo "<hr>";

    //area function
    //Write a function called calculateArea that accepts two arguments, a length and width. 
    //Call that function within a sentence, using contacatenation, that looks like this:
    //The area of a rectangle with a length of (some number) and width of (some number) is (some number).

    function calculateArea($length, $width) {
        $area = $length * $width;
        return $area;
    }

    $length = 4;
    $width = 5;

    $area = calculateArea($length, $width);
    
    echo "The area of a rectangle with a length of " . $length . " and a width of " . $width . " is " . $area . "."
    
    
    

?>

