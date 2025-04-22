<?php
include('smtp/PHPMailerAutoload.php');

// echo sendMail('subhamitapani@gmail.com','mca project','you are selected');
function sendMail($to,$subject, $msg){
	$mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	//$mail->SMTPDebug = 2; 
	$mail->Username = "mcaproject321@gmail.com";
	$mail->Password = "ctuc woac npuk sbug";
	$mail->SetFrom("mcaproject321@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}
	// else{
	// 	return 'Mail sent successfull';
	// }
}
// sendMail('anilsahu9786@gmail.com','mca project','you are selected');
?>