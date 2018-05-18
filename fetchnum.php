<?php
    include 'db.php';

    define("JustaConstant","This is How you create a constant. And so PDO::Fetch.. kinds are all constants just like this!");
    echo JustaConstant;
    echo "<br><br>";
    $stmt = $db->query("SELECT * FROM users");
    echo "<h3>Fetching Using PDO::FETCH_NUM</h3><p>Uncomment to see others</p>";
    while($row = $stmt->fetch(PDO::FETCH_NUM)){
        print_r($row);
    }
    // echo "<h3>Fetching Using PDO::FETCH_NUM</h3>";
    // while($row = $stmt->fetch(PDO::FETCH_NUM)){
    //     echo $row[2];
    // }

?>