<?php
require('common.php');
$email =  $_POST['email'];
$password =  $_POST['password'];
//$con = mysqli_connect('localhost','root','','innerwor_hrms');
$query = "SELECT  emp_id ,email_id  FROM employee WHERE email_id='" . $email . "' AND password='" . $password . "'";
$result = mysqli_query($conn, $query)or die(mysqli_error($conn));
$num = mysqli_num_rows($result);
 
  if ($num == 0) {
      
      echo'incorrect password';
  }	
    
    

 else {
     $row = mysqli_fetch_array($result);
  $_SESSION['id']=$row["emp_id"];
    header('location:updateinfo.php');
  
}

?>  