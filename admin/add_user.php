<?php
if(isset($_POST['upload'])){
   $name = $_POST['name'];
   $role = $_POST['role'];
   $club = $_POST['club'];
   // $userid = $_POST['userid'];
   $password = $_POST['password'];
   $email = $_POST['email'];
   require_once "admin_functions.php";
   $res = addCoach($name,$role,$club,$password,$email);
   if($res){
      echo "<script>alert('Coach Added!'); window.location.href='add_user.html';</script>";
   } else {
       echo " Error While Adding.";
   }
} else {
   echo "File Upload Error";
}
?>