<?php
    include 'db.php';

    define("JustaConstant","This is How you create a constant. And so PDO::Fetch.. kinds are all constants just like this!");
    echo JustaConstant;
    echo "<br><br>";
    $stmt = $db->query("SELECT * FROM users");
    echo "<h3>Fetching Using PDO::FETCH_OBJ</h3>";
    // echo "<pre>";
    // while($row = $stmt->fetch(PDO::FETCH_OBJ)){
    //     print_r($row);
    // }
    echo "<pre>";
    while($row = $stmt->fetch(PDO::FETCH_OBJ)){
        echo $row->id." ".$row->fname ." ".$row->lname."<br>";
    }
?>