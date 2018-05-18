<?php
    include 'db.php';

    class user
    {

        public $fname;
        public $lname;
        public $fullname;
        private $records = []; //This is used to retrieve the id from the database

        public function __set($name, $value)//This is used to retrieve the id from the database
        {
            $this->records[$name] = $value;
        }
        
        public function __get($name)//This is used to retrieve the id from the database
        {
            if(array_key_exists($name,$key))
            {
                return $this->records[$name];    
            }
        }

        public function ToArray()//This is used to retrieve the id from the database
        {
            return $this->records;
        }

        public function __construct()//This is used to retrieve the id from the database
        {
            $this->fullname = $this->fname." ". $this->lname;            
        }
    
    } 

    $stmt = $db->query("SELECT * FROM users");
    echo "<pre>";
    $stmt->setFetchMode(PDO::FETCH_CLASS,"user");
    // while($row = $stmt->fetch()){
    //     //echo $row->fullname. "<br>";
    //     print_r($row->ToArray());
    // }

    $row = $stmt->fetchAll();
        print_r($row);
?> 