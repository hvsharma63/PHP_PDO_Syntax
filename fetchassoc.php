<?php
    include 'db.php';

    define("JustaConstant","This is How you create a constant. And so PDO::Fetch.. kinds are all constants just like this!");
    echo JustaConstant;
    echo "<br><br>";
    $stmt = $db->query("SELECT * FROM users");
    echo "<h3>Fetching Using PDO::FETCH_ASSOC</h3>";
  
    // while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    //     print_r($row);
    // }

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo $row['fname']." ".$row['lname']."<br>";
    }
?>