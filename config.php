<?php 
function getConnection() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shopping_system";
    $conn = new mysqli($servername, $username, $password, $dbname);
    return $conn;
}

?>