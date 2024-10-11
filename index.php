<?php
class database
{
    public $conn;
    // // public $host;
    // public $user;
    // public $pass;
    // public $db;



    function __construct($host, $user, $pass, $db)
    {
        $this->conn = mysqli_connect($host, $user, $pass, $db);


        if ($this->conn) {
            echo 'connected';
            //  die('Error please check database');

        } else {
            echo "Error";
        }
    }
}

$obj = new database('localhost', 'root', '', '2310f');
// $obj->query();
