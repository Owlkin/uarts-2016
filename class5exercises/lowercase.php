<?php
    // 6) Write a PHP function that accepts a string as an argument and returns a 
    // string where the argument is return as being all lower case.

    function lowercase($stringToLower){
        return strtolower($stringToLower);
    }

    echo lowercase("POTATO");

?>