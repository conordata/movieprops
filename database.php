<?php

function database ($query, $sql) {
    $dsn = "mysql:host=localhost;dbname=movieprops";
    $username = "root";
    $password = "";
    
    try {
        $conn = new PDO($dsn, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } 
    catch (PDOException $e) {
        echo "Connection failed: " .$e->getMessage();
        die;
    }
    
    $result=$conn->query($sql);

    if ($query=="r") {

            $array=array();

            foreach ($result as $row) {
                $array[]=$row;  
            }

            return $array;
        }

    $conn = null;
}

?>