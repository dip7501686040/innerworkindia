<?php

	include('common.php');

	$empid=$_SESSION['id'];
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
$result = mysqli_query($conn,"SELECT * FROM employee where emp_id=$empid");
$row_cnt = $result->num_rows;
if($row_cnt>0){
while($row = mysqli_fetch_array($result))
{
	$firstname = $row['firstname'];
        $lastname = $row['lastname'];
	$f_name=$row['fname'];
        $sex=$row['gender'];
	$work_duration = $row['workduration'];
	$college_name=$row['collegename'];
        $college_address=$row['collegeaddress'];
	$degree = $row['degree'];
	$branch=$row['branch'];
        $JoinDate=$row['joining_date'];
	$ResignDate = $row['separation_date'];
	$designation=$row['designation'];
$projectDetail=$row['projectdetails'];


}}else{
echo '<script type="text/javascript">';
echo 'alert("Incorrect Employee Id");';
echo 'window.location.href = "print.html";';
echo '</script>';
}


$conn->close();
}
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Certificate</title>
        <link type="text/CSS" rel="stylesheet" href="certificate.css"/>
				<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
                                <style>		
		.button {
  background-color: #4CAF50; /* Green */
  /*border: none;*/
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 26px;
  color:white;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color:#4CAF50 ; 
  color: white; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color:#0dff4d ;
  color: black;
}
.button2 {
  background-color:#003dc2 ; 
  color: white; 
  border: 2px solid #003dc2;
}

.button2:hover {
  background-color:#2b6eff;
  color: black;
}
.button3 {
  background-color:#c9002c ; 
  color: white; 
  border: 2px solid #c9002c;
}

.button3:hover {
  background-color:#ff3864;
  color: black;
}
.button4 {
  background-color:#dae600 ; 
  color: white; 
  border: 2px solid #dae600;
}

.button4:hover {
  background-color:#f5ff40;
  color: black;
}
.button5 {
  background-color:#d60e00 ; 
  color: white; 
  border: 2px solid #d60e00;
}

.button5:hover {
  background-color:#ff5145;
  color: black;
}
a{
color:white;
text-decoration:none;
}
a:hover{
text-decoration:none;
color:black;}
</style>
    </head>
    <body>
		 <!-- Top navigation -->
					<center>
<header>
<button class="button button5"><a href="home.html" >Home</a></button>
		 
                 <button class="button button2"><a href="certidisplay.php">certificate</a></button>
		 <button class="button button3"><a href="updateinfo.php" >Update</a></button>
		 <button class="button button4"><a href="lordisplay.php">Lor</a></button>
                 <button class="button button5"><a href="emp_registration.php">Register</a></button>
</header></center>
<div id ="certificate" class="certificate">
		<div id="background">
							  <div id="logo">
                    <embed src="https://innerworkindia.com/img/logo.png" height="120px" width="120px"/>
                </div>
                <div id="address">
                    <h3>Corprate Office</h3>
                    #80,4th cross, Ashwath Nagar,<br>
                    Marathahalli, Bnaglore,<br>
                    560017,  9887888469.
                </div>
            </div>


            <div id="hrDiv"><hr id="hr"/></div>


            <div id="body">

                <script>
                    var cdate = new Date();
                    var day = cdate.getDate();
                    var month = cdate.getMonth()+1;
                    var year = cdate.getFullYear();
                    cdate="Date:"+day+"/"+month+"/"+year;
                </script>
                <div id="ref">Ref:INWRK/INT/2020/&nbsp<?php echo $empid;?></div>
                <div id="cdate"><script>document.getElementById("cdate").innerHTML = cdate;</script></div>
                <div id="head"><b><u>TO WHOM IT MAY CONCERN</b></u></div>
                <div id="midLogo"><img src="https://innerworkindia.com/img/logo.png" height="250px" width="300px"></div>
                <div id="details">Dear Mr. &nbsp<b><?php echo $firstname;?>&nbsp<?php echo $lastname;?> </b>,<br>I am writing to recommend &nbsp<b><?php echo $firstname;?>&nbsp<?php echo $lastname;?> </b>,for &nbsp<b><?php echo $designation;?></b>.<br>I have known &nbsp<b><?php echo $firstname;?>&nbsp<?php echo $lastname;?></b>  Since &nbsp<b>(From <?php echo $JoinDate; echo ' '; echo 'to'; echo ' ';  echo $ResignDate;  ?>)</b>  as a good friend and co-worker &nbsp<b><?php echo '';?></b>.<br> I have always known &nbsp<b><?php echo $firstname;?>&nbsp<?php echo $lastname;?></b>  to be very honest,hardworking in nature and very loyal towards work.<b><?php echo '';?></b><br>Based on our experience together,I can confidently recommend &nbsp<b><?php echo $firstname;?>&nbsp<?php echo $lastname;?></b> for &nbsp<b><?php echo $designation;?></b>.<br><br>Sincerely,<br>For &nbsp<b>Innerwork Solution Pvt Ltd.</b><br><img src="sign.png"><br>Ansu Hanna Biji<br> HR Executive.<br></div>
            </div>

                        <div id="downHr"><hr></div>
            <div id="lastLine">Corprate IdentityNumber U74999KA2019PTC129695 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp www.innerworkindia.com</div>
            <div id="hrDiv2"><hr id="hr2"/></div>
</div>
    <?php
    $date=date('Y-m-d');
    
    
    
   
    if($date>$ResignDate)
    {
       
    ?>
     <div id="buttons">
        	<input type="button" id="but" value="Print"  onclick="printDiv('certificate')" />

	</div>
<?php
    }
    else{
        ?>
    <script>
        alert("Sorry! You cannot download lor NOW");
        </script>
        <?php
    }
?>
    </body>
<script type="text/javascript">
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}

    </script>
</html>
