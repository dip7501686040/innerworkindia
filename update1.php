<?php

	$conn=mysqli_connect("localhost","root","","innerwor_hrms")or die(mysqli_error($conn));
	
	
	
     

	
	
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	}  
	
	
	
	if(isset($_POST['updateRecord']))
		{
				
       $emp_id=$_POST['emp_id'];
	$firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
	$f_name=$_POST['fname'];
        $sex=$_POST['sex'];
	$work_duration = $_POST['work_duration'];
	$college_name=$_POST['college_name'];
        $college_address=$_POST['college_address'];
	$degree = $_POST['degree'];
	$branch=$_POST['branch'];
        $JoinDate=$_POST['JoinDate'];
	$ResignDate = $_POST['ResignDate'];
	$designation=$_POST['designation'];
$projectDetail=$_POST['projectDetail'];
				
			
		
       $stmt=$conn->prepare("update employee set firstname='$firstname',lastname='$lastname',fname='$f_name',gender='$sex',workduration='$work_duration',collegename='$college_name',collegeaddress='$college_address',degree='$degree',branch='$branch',joining_date='$JoinDate',separation_date='$ResignDate',designation='$designation',projectdetails='$projectDetail' where emp_id='$emp_id'" );
		//$stmt->bind_param("sssssssssssss",$employeeid, $name,$father_name,$sex,$work_duration,$college_name,$college_address,$degree,$branch,$JoinDate,$ResignDate,$designation,$projectDetail);
		$execval = $stmt->execute();
		//echo $execval;
		//echo "Registration successfully...";
		// header("Location:l.php");
		echo '<script type="text/javascript">'; 
		echo 'alert("Record updated Successfully!!");'; 
		echo 'window.location.href = "updateinfo.php";';
		echo '</script>';
		$stmt->close();
		$conn->close();
	}
	
	
?>