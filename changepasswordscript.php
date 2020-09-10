<?php

$con=  mysqli_connect("localhost","root","","innerwor_hrms")or die($mysqli_error($con));


$email = $_POST['email_id'];
$email = mysqli_real_escape_string($con, $email);
$password = $_POST['password'];
//$password=MD5($password);
$password = mysqli_real_escape_string($con, $password);
$newpassword=$_POST['newpassword'];
//$newpassword=MD5($newpassword);
$newpassword = mysqli_real_escape_string($con, $newpassword);

//$password = MD5($password);
// Query checks if the email and password are present in the database.
if($password==$newpassword){
$query = "UPDATE employee SET password='".$password."' WHERE email_id='".$email."'";
$result = mysqli_query($con, $query)or die(mysqli_error($con));
$num = mysqli_num_rows($result);
// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.

    header('location:login.html');    
}
else{
    alert("Password and new password not matched");
}

?>