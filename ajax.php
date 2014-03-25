<?php
$response = rand(0, 1);

$request = $_REQUEST;

if ($response) {
	$status = 200;
	$status_message = 'Status: 200 Everything is fine.';
	$success = true;
        
} else {
	$status = 400;
	$status_message = 'Status: 400 Error, error!!!';
	$success = false;

}


// to send the data by email

// Save data in variables
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
// email addressee
$dest = "adp.cris@gmail.com"; 
 
// To prevent SPAM:
$headers = "From: $nombre <$email>\r\n";  
$headers .= "X-Mailer: PHP5\n";
$headers .= 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Subject and body
$subject = "Contact";
$body = "Name: ".$name."<br>";
$body .= "Email: ".$email."<br>";
$body .= "Message: ".$message;
 
// To make sure fields are not empty: (again)
if($name != '' && $email != '' && $message != ''){
    mail($dest,$subject,$body,$headers); //SEND!
}


// false response
$request['success'] = $success;
header($status_message, true, $status);

echo json_encode($request);
