<?php
$db_host = "db";
$db_name = "db";
$db_user = "db";
$db_pass = "db";

try{
    $mysql = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch (PDOException $e){
    echo "SQL Error: ".$e->getMessage();
}
