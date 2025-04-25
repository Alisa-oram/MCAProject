<?php
require_once "dbconnection.php";
function display(){
    $conn = dbConnection();
    try {
        $qry = "SELECT * FROM event";
        $stmt = $conn->prepare($qry);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if($result->num_rows > 0){
            $data = $result->fetch_all(MYSQLI_ASSOC); // Convert to associative array
            return $data;
        } else {
            return false;
        }
    } catch (Exception $e) {
        die($e->getMessage()); // Corrected typo in getMessage()
    } finally {
        $conn->close();
    }
}

?>