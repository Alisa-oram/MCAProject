<?php
require_once "../phpmailer/test.php";

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
      //send mail to coach
      sendMail($email ,"Added to club","Dear sir,Ihope this mail finds you well.We are inform you that you are added to the club ".$club." you can logged in  through your email Id and Password :".$password);
      echo "<script>alert('Coach Added!'); window.location.href='add_coach.html';</script>";
   } else {
       echo " Error While Adding.";
   }
} else {
   echo "File Upload Error";
}
?>