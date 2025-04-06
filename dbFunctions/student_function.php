<?php
require_once "./dbconnection.php";
function display(){
    $conn = dbConnection();
    try {
        $qry = "SELECT * FROM event";
        $stmt = $conn->prepare($qry);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if($result->num_rows > 0){
            return $result;
        } else {
            return false;
        }
    } catch (Exception $e) {
        die($e->getMessgae());
    } finally{
        $conn->close();
    }
}

?>