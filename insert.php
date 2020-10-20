<?php
if(isset($_POST['Register']))
{
$email = $_POST['email'];
$p_email=$_POST['p_email'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$psw=$_POST['psw'];
//$string = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
//$password = substr(str_shuffle($string),0,6);

$con = mysqli_connect('localhost','root','','innerwor_hrms');

$query = "INSERT INTO employee(email_id,firstname,lastname,email_personal,password) VALUES ('$email','$firstname','$lastname','$p_email','$psw')";
  
$run = mysqli_query($con,$query);

/*if($run == TRUE) 
	echo "";
    $to_email = $email;
    $subject = "Response from website";
    $headers = "From: akankshagoyalju2000@gmail.com";
    $logInLink = "http://localhost:8080/password%20generation/login.html";
    $c =  $logInLink."   "."password is :".$psw;
if (mail($to_email,$subject,$c,$headers)){
	echo "Mail sent Successfully";
} else {
	echo "Can not send mail";
}
   */ 
header('location:login.html');
}
?>  