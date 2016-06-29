<?php
    //3) Write a PHP script to count lines in a file. Tip: you will need file() and count()

    $fileToCount = file("../books.php");

    echo count($fileToCount);

?>