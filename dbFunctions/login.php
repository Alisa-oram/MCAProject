<?php
    session_start();
    require_once "dbconnection.php";
    if(isset($_POST['submit'])){
        if($_POST['role'] == 'admin'){
            $conn = dbConnection();
            $email = $_POST['username'];
            $password = $_POST['password'];

            // echo $email , $password;

            $stmt = $conn->prepare("select * from admin where email = ?  and password = ?");
            $stmt->bind_param("ss", $email, $password);
            $stmt->execute();

            $result = $stmt->get_result();
            if($result->num_rows > 0){
                echo "Login Successfully";
                header("location:../admin/index.php");
            }else{
                echo "Invalid Credential!!";
            }
        }else if($_POST['role'] == 'student'){
            // echo "I am a student";
            $conn = dbConnection();
            $email = $_POST['username'];
            $password = $_POST['password'];

            // echo $email , $password;

            $stmt = $conn->prepare("select * from club_member where email = ?  and password = ?");
            $stmt->bind_param("ss", $email, $password);
            $stmt->execute();

            $result = $stmt->get_result();
            if($result->num_rows > 0){
                echo "Login Successfully";
                header("location:../index.php");
            }else{
                echo "Invalid Credential!!";
            }
        }else if($_POST['role'] == 'coach'){
            // echo "I am a coach";
            $conn = dbConnection();
            $email = $_POST['username'];
            $password = $_POST['password'];

            // echo $email , $password;

            $stmt = $conn->prepare("select * from coach where email = ?  and password = ?");
            $stmt->bind_param("ss", $email, $password);
            $stmt->execute();

            $result = $stmt->get_result();
            if($result->num_rows > 0){
                $user = $result->fetch_assoc();
                $_SESSION['email'] = $user['email'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['club'] = $user['club'];
                echo "Login Successfully";
                header("location:../coach/index.php");
            }else{
                echo "Invalid Credential!!";
            }
        }
    }
    
?>