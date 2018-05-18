<?php 

    include 'db.php'; 

    echo "Kindly Change the Values first from code for demo ! ";
    echo "<br><br>";
    //For Insert; 
    $run=$db->query("INSERT into users(fname,lname) values('Mishan','Dholiya')");

    if($run){
        echo "Insertion Successful!";
    }
    else{
        echo "Something went wrong!";
    }
    echo "<br><br>";
    
    //Set the id to be inserted!
    //For Update
    $run=$db->query("UPDATE users set lname='Goti' where id='9'");

    if($run){
        echo "Update Successful!";
    }
    else{
        echo "Something went wrong!";
    }
    echo "<br><br>";
    
    //For Update
    $run=$db->query("DELETE from users where id='9'");

    if($run){
        echo "Delete Successful!";
    }
    else{
        echo "Something went wrong!";
    }
?>