<?php
require_once "../dbFunctions/dbconnection.php";

function addEvent($title,$date,$image,$content){
    $conn = dbConnection();
    try{
        $qry = "INSERT INTO event (date,image,topic,detail) VALUES(?,?,?,?)";
        $stmt = $conn->prepare($qry);
        $stmt->bind_param("ssss",$date,$image,$title,$content);
        $res = $stmt->execute();
        if(!$res){
            echo $conn->error;
            return false;
        }
        return $res;
    }catch(Exception $e){
        die($e->getMessage());
    }finally{
        $conn->close();
    }
}
function addCoach($name,$role,$club,$userid,$password,$email){
    $conn = dbConnection();
    try{
        $qry = "INSERT INTO coach (name,role,club,userid,password,email) VALUES(?,?,?,?,?,?)";
        $stmt = $conn->prepare($qry);
        $stmt->bind_param("ssssss",$name,$role,$club,$userid,$password,$email);
        $res = $stmt->execute();
        if(!$res){
            echo $conn->error;
            return false;
        }
        return $res;
    }catch(Exception $e){
        die($e->getMessage());
    }finally{
        $conn->close();
    }
}
function showClubs(){
    $conn = dbConnection();
    try{
        $qry = "SELECT clubName FROM sports_club";
        $stmt = $conn->prepare($qry);
        $stmt->execute();
        $res = $stmt->get_result();
        if(!$res){
            echo $conn->error;
            return false;
        } 
        return $res;
    }catch(Exception $e){
        die($e->getMessage());
    }finally{
        $conn->close();
    }
}
?>