<?php

    include 'db.php';
    echo "<h2>Prepared Statement</h2>";
    echo("Write the values into the code before using it.");
    echo "<br><br>";
    echo("Kindly Change the values once it's run!");
    $stmt = $db->prepare("INSERT into users(fname,lname) values(?,?)");
    $stmt->execute([
        'Rahul','Parmar'
    ]);
    $stmt->execute([
        'Ishan','Bhatt'
    ]);
    
?>