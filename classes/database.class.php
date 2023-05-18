<?php

class Database{
    private $host = "localhost";
    private $username = "Tobi"; 
    private $password = 'Queenzy';
    private $dbname = 'subscribers';

    protected function connect(){
    
        $conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);
        // if($conn->connect_error){
        //     echo 'Fail'. $conn->connect_error;
        // }
        // echo "Connection Succesful";
        return $conn;
    }
}

