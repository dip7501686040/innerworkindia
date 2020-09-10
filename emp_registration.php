<?php
include('dbcontroller.php');
$db_handle = new DBController();
$query = "select max(emp_id) as max_emp_id from employee";
$result = $db_handle->runQuery($query);
$max_emp_id = $result->fetch_assoc();
$new_emp_id = $max_emp_id['max_emp_id'] + 1;
//$string = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
//$password = substr(str_shuffle($string),0,6);
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

    <form action="insert.php" method="POST">
  <div class="container">
    <h1>Employee Registarion</h1>
    <hr>

	<label for="empid"><b>EmpID</b></label>
    <input type="text" value="<?php echo $new_emp_id; ?>" placeholder="Enter Employee ID" name="emp_id" id="email" required>
    
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
    
    
    <label for="first_name"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="firstname" id="psw" required>
    
    <label for="last_name"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lastname" id="psw" required>
    
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Innerwork Email" name="email" id="email" required>
    
    <label for="personal_email"><b>Personal Email</b></label>
    <input type="text" placeholder="Enter Personal Email" name="p_email" id="email" required>

    

    
    <hr>

    <button type="submit" value ="Register" name = "Register" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
   
  </div>
</form>

</body>
</html>

