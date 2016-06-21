<?php

$books = array (
    $book => array(
        "title" => "The Hitchhiker's Guide to the Galaxy",
        "price" => "10", 
        "author" => "Douglas Adams"
    ),
    $book => array(
        "title" => "The Lord of the Rings",
        "price"  => "9",
        "author" => "J. R. R. Tolkien"
    ),
    $book => array(
        "title" => "The Martian",
        "price"  => "13",
        "author" => "Andy Weir"
    ),
    $book => array(
        "title" => "The Color of Magic",
        "price"  => "8",
        "author" => "Terry Pratchett"
    ),
    $book => array(
        "title" => "I, Robot",
        "price"  => "6",
        "author" => "Isaac Asimov"
    ),
    $book => array(
        "title" => "The Way of Kings",
        "price"  => "11",
        "author" => "Brandon Sanderson"
    ),
);

echo "<table>";
    echo "<tr> 
        <td>Title</td> <td>Price</td> <td>Author</td> 
    </tr>";
    
    foreach ($books as $book){
        echo "<tr>";
        foreach ($book as $key => $value){
            echo "<td>" . $value . "</td>";
        }
        echo "</tr>";
    }
    
echo "</table>";


?>