<?php
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
                header("location:../admin/dashboard.php");
            }else{
                echo "Invalid Credential!!";
            }
        }else if($_POST['role'] == 'student'){
            echo "I am a student";
        }else if($_POST['role'] == 'coach'){
            echo "I am a coach";
        }
    }
?>