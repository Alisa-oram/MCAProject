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
function showBlog(){
    $conn = dbConnection();
    try {
        $qry = "SELECT * FROM blog ORDER BY date DESC";
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
function getBlogById($id) {
    $conn = dbConnection();
    try {
        $stmt = $conn->prepare("SELECT * FROM blog WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    } catch (Exception $e) {
        die("Error fetching blog: " . $e->getMessage());
    } finally {
        $conn->close();
    }
}

function getAllClubs() {
    $conn = dbConnection();
    try {
        $stmt = $conn->prepare("SELECT * FROM sports_club");
        $stmt->execute();
        $result = $stmt->get_result();
        $clubs = [];

        if ($result->num_rows > 0) {
            $clubs = $result->fetch_all(MYSQLI_ASSOC);
        }
        return $clubs;
    } catch (Exception $e) {
        die("Error fetching clubs: " . $e->getMessage());
    } finally {
        $conn->close();
    }
}
function getEventById($id) {
    $conn = dbConnection();
    try {
        $stmt = $conn->prepare("SELECT * FROM event WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    } catch (Exception $e) {
        die("Error fetching blog: " . $e->getMessage());
    } finally {
        $conn->close();
    }
}


?>