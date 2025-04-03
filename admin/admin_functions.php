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
function addCoach($name,$role,$club,$password,$email){
    $conn = dbConnection();
    try{
        $qry = "INSERT INTO coach (name,role,club,password,email) VALUES(?,?,?,?,?)";
        $stmt = $conn->prepare($qry);
        $stmt->bind_param("sssss",$name,$role,$club,$password,$email);
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
function ShowCoach(){
    $conn = dbConnection();
    try{
        $qry = "SELECT * FROM coach";
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
function addClub($name,$clubId){
    $conn = dbConnection();
    try{
        $qry = "INSERT INTO sports_club (clubId,clubName) VALUES(?,?)";
        $stmt = $conn->prepare($qry);
        $stmt->bind_param("is",$clubId,$name);
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
?>