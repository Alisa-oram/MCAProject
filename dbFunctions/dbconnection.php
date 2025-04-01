<?php
function dbConnection(){
    $HOST = "127.0.0.1";
    $USERNAME = "root";
    $PASSWORD = "";
    $DB_NAME = "sports";

    $conn = new mysqli($HOST, $USERNAME, $PASSWORD, $DB_NAME);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}
?>