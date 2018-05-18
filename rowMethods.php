<?php

    include 'db.php';

    $stmt = $db->query("SELECT * from users");
    if($stmt->rowCount()){
        echo "Total Rows: " . $stmt->rowCount();
    }
    else{
        echo "Nothing Found!";
    }
?>