<?php 
    $servername = "localhost:3325";
    $username = "root";
    $password = "";
    $dbname = "personal_db";

    $conn = new mysqli($servername,$username,$password,$dbname);
    if($conn)
    {
        echo "Connection Successful";
    }
?>