<?php
require_once "../dbFunctions/dbconnection.php";
// require_once "../phpmailer/test.php";
function addEvent($title,$date,$image,$content,$event_for){
    $conn = dbConnection();
    try{
        $qry = "INSERT INTO event (date,image,topic,detail,event_for) VALUES(?,?,?,?,?)";
        $stmt = $conn->prepare($qry);
        $stmt->bind_param("sssss",$date,$image,$title,$content,$event_for);
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
function addBlog($title,$date,$image,$content){
    $conn = dbConnection();
    try{
        $qry = "INSERT INTO blog (title,date,image,detail) VALUES(?,?,?,?)";
        $stmt = $conn->prepare($qry);
        $stmt->bind_param("ssss",$title,$date,$image,$content);
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