<?php 

    include 'db.php'; 

    $stmt = $db->query("SELECT * from users"); 
    // A single $stmt is just a variable but when we assign it $db's query function,
    // it becomes an object.
    echo "<pre>";
    while($row = $stmt->fetch()){
        print_r($row);
    }
    
    // print_r will print the $row in which a single tuple is stored. it will fetch the associative array in which
    // both key, value & index, value is displayed

?>