<?php
    // 2)  Write a PHP script to display source code of a webpage 
    // (e.g. "http://www.yahoo.com/"). Tip: you will need to use file()

    $sourcecode = file_get_contents("http://google.com/");
    
    echo $sourcecode;

?>