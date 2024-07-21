<?php
require('phpmailer/class.phpmailer.php');
//echo "<pre>";
//print_r($_POST);
//echo "</pre>";
//die;
$userName = $_POST['form_name'];
$userEmail = $_POST['form_email'];
$userPhone = $_POST['form_phone'];
$userJobPost = $_POST['form_job_post'];
$userMessage = $_POST['form_message'];
$subject = "Application for the post of ".$_POST['form_job_post'];

$body = "";
//$content = $_POST['content'];

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 1;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port     = 465;  
$mail->Username = "smtp@apexwebtechnology.com";
$mail->Password = "smtp#999@";
$mail->Host     = "mail.apexwebtechnology.com";
$mail->Mailer   = "smtp";

$to = "info@apexwebtechnology.com";

$mail->From = "jay@apexwebtechnology.com";
$mail->FromName = $userName;
$mail->AddReplyTo = $userEmail;
$mail->AddAddress("erjayesh@gmail.com", "Jayesh");	
$mail->Subject = $subject;
$mail->WordWrap   = 80;
$mail->MsgHTML = $userMessage;

$body .='Full Name: <b>'.$userName.' </b><br><br>
Email: <b>'.$userEmail.' </b><br><br>
					Phone: <b>'.$userPhone.' </b><br><br>
					 Message: <b>'.$userMessage.' </b><br><br>' ;
					 
					 $mail->Body = $body;
//mail($to, $subject, $body, $from);

//die;
/*if(is_array($_FILES)) {
$mail->AddAttachment($_FILES['form_attachment']['tmp_name'],$_FILES['form_attachment']['name']); 
}*/
$mail->Host = 'relay-hosting.secureserver.net';


$mail->IsHTML(true);
//$response[] = array("success" => "We got success !!!", "failure" => "We failed !!!");
//$mail->Send();
//die;
//echo json_encode($response);
//print_r($_POST);die;
if($mail->Send()) {
	//if("1" == "0") {
	//echo "<p class='error'>Problem in Sending Mail. </p>".$mail->ErrorInfo;
	$response = array("status" => "true", "success_msg" => "We have received your application. Thank you");                    
} else {
	//echo "<p class='success'>Contact Mail Sent.</p> ";
	//$response = array("status" => "false", "failure_msg" => "Something went wrong. Please try again after sometime. ");                    
	$response = array("status" => "false", "failure_msg" => "Something went wrong. Please try again after sometime. ".$mail->ErrorInfo);                    
}
echo json_encode($response);
?>