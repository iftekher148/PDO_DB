<?php

    

    function Connect(){
        $server_name = "sql3.freesqldatabase.com";
        $username = "sql3476074";
        $password = "x8i8SFwCbq";
        $db_name = "sql3476074";
        try {
            $conn = new PDO("mysql:host=$server_name;dbname=$db_name", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
          } catch(PDOException $e) {
            echo $e;
            return -1;
          }
    }

?>