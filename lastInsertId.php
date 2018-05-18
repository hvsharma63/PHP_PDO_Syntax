<?php

    include 'db.php';
    echo "<h3>LastInsertId</h3>";
    echo("Write the values into the code before using it.");
    echo "<br><br>";
    echo("Kindly Change the values once it's run!");
    $stmt = $db->query("INSERT into demotable1(fname,lname) values('', '')");
    $last_id = $db->lastInsertId();
    $stmt = $db->query("INSERT into demotable2(email,demotable1_id) values('', '')");
    
?>