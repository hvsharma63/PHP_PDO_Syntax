<?php
    include 'db.php';

    define("JustaConstant","This is How you create a constant. And so PDO::Fetch.. kinds are all constants just like this!");
    echo JustaConstant;
    echo "<br><br>";
    $stmt = $db->query("SELECT * FROM users");
    echo "<h3>Fetching Using PDO::FETCH_ASSOC with fetchAll</h3>";
    
    // The below used method will also print the rows in form of array. This can be faster & takes low ram.
    // while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    //     print_r($row);
    // }

    // The below used method will also print the rows in form of array. This may take high ram, depends on the no. of rows.
    echo "<pre>";
    $row = $stmt->fetchAll();
    print_r ($row);
    
?>