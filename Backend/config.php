<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "sales";
$pdo = new PDO("mysql:host=$host;dbname=$db",$user,$pass);

try {
}

catch(PDOException $error) {
    echo "Connection failed";
}
?>