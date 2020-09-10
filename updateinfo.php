<?php
require('common.php');

//$conn=  mysqli_connect("localhost","root","","innerwor_hrms")or die($mysqli_error($conn)); 
//$empid=$_POST['empid'];
//$employeeid=$_SESSION['email_id'];
/*if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);

	}*/
//$emp=$_SESSION['id'];

if(isset($_SESSION['id']))
		{
    $emp=$_SESSION['id'];
		$result = mysqli_query($conn,"SELECT * FROM employee where emp_id=$emp");
		$row_cnt = $result->num_rows;

		if($row_cnt==0){
			
		echo '<script type="text/javascript">'; 
		echo 'alert("Incorrect Employee ID!!");'; 
		echo 'window.location.href = "login.html";';
		echo '</script>';
		}
		else{
		
			while($row=mysqli_fetch_array($result)) {
		
	//	$stmt->close();
	//	$conn->close();
			
		
?>
	
	
	

<!doctype html>
<html lang="en">
    <head>
        <title>Certificate Creation</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"> 
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
          <link  rel="stylesheet" type="text/css" href="style.css"   />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Alex Brush' rel='stylesheet'>
        

	    

        <style>
            form{
                width:50%;
                border-radius: 5px;
                box-shadow: 0 1px 6px rgba(0, 0, 0, 0.12), 0 1px 4px rgba(0, 0, 0, 0.24);
                background: rgba(0, 0, 0, 0)!important;
                padding: 20px;
                margin-top: 50px;
            }
            
            .btn{
                margin-top: 10px;
                background-color:#000000; 
                color: #fff500;
            }
            .btn:hover{
                background-color:#fff500;
                color:black;
                font-weight:bold;
            }
            .input-div input , .input-div select, .input-div textarea{
                padding-left:50px;
            }
            .input-div{
                position: relative;
                width:100%;
            }
            .input-div i{
                position: absolute;
                top:10px;
                left:10px;
            }
            /*
            .float-div{
                width:40%;
                float:left;
                               
            }
            .sex-div{
                float:left;
            }*/
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
            textarea{
                width:100%;
                padding-left:50px;
            }
            #heading{
                margin-top:20px;
            }
        </style>
		<center>
<header>
         <button class="button button5"><a href="home.html" >Home</a></button>
		 
                 <button class="button button2"><a href="certidisplay.php">certificate</a></button>
		 <button class="button button3"><a href="updateinfo.php" >Update</a></button>
		 <button class="button button4"><a href="lordisplay.php">Lor</a></button>
                 <button class="button button5"><a href="emp_registration.php">Register</a></button>
</header></center>
    </head>
    <body>
      
        <center>
        <h1 id="heading">Certificate Details</h1>
        
        <form id="form" method="POST" action="update1.php" > 

	    <!--Employee ID-->      
            <div class="row">
                <div class="col">
                    <div class="md-form mb-3 input-div">
                        <i class="fas fa-user"></i>
                        <input type="text" class="form-control" id="employeeid" placeholder="employee id" value="<?php echo $row['emp_id']; ?>" name="emp_id" required>
                    </div>
                </div>
            </div>
            
            
            <!--name-->      
            <div class="row">
                <div class="col">
                    <div class="md-form mb-3 input-div">
                        <i class="fas fa-user"></i>
                        <input type="text" class="form-control" id="name" placeholder="first name" value="<?php echo $row['firstname']; ?>" name="firstname" required>
                    </div>
                </div>
            </div>
            <!--lastname-->
            <div class="row">
                <div class="col">
                    <div class="md-form mb-3 input-div">
                        <i class="fas fa-user"></i>
                        <input type="text" class="form-control" id="name" placeholder="last name" value="<?php echo $row['lastname']; ?>" name="lastname" required>
                    </div>
                </div>
            </div>
            
            
            <!--father's name-->   
            <div class="row">
                <div class="col">
                    <div class="md-form mb-3 input-div">
                        <i class="fas fa-user-tie"></i>
                        <input type="text" class="form-control" id="father_name" placeholder="father's name" value="<?php echo $row['fname']; ?>" name="fname" required>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col">
                    <!--sex-->
                    <div class="md-form mb-5 input-div sex-div form-control" style="padding-left:30px;">
                        <i class="fas fa-transgender-alt"></i>
                        <label style="margin-right:10px;" >Gender</label>                                   
                        <input type="radio" id="sex" name="sex" value="Male" onclick="myfun(this.value)" <?php if($row['gender']=='Male'){echo ' checked ';} ?>>Male</input>
						<input type="radio" id="sex" name="sex" value="Female" onclick="myfun(this.value)" <?php if($row['gender']=='Female'){echo ' checked ';} ?>>Female</input>
						<input type="radio" id="sex" name="sex" value="Others" onclick="myfun(this.value)" <?php if($row['gender']=='Others'){echo ' checked ';} ?>>Others</input>
                    </div>
                </div>
                <div class="col">
                    <!--work duration-->
                    <div class="md-form mb-3 input-div float-div">
                        <i class="fas fa-business-time"></i>
                        <input type="text" class="form-control" id="work_duration" placeholder="work duration" value="<?php echo $row['workduration']; ?>" name="work_duration"   required>
                    </div>
                </div>
            </div> 

            <div class="row">
                <div class="col">
                    <!--college name -->   
                    <div class="md-form mb-3 input-div">
                        <i class="fas fa-university"></i>
                        <input type="text" class="form-control" id="college_name" placeholder="college name" value="<?php echo $row['collegename']; ?>" name="college_name"   required>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col">
                    <!--college address-->
                    <div class="md-form mb-3 input-div">
                        <i class="fas fa-map-marker-alt"></i>
                        <input type="text" class="form-control" id="college_address" placeholder="college address" value="<?php echo $row['collegeaddress']; ?>" name="college_address"   required>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col">
                    <!--degree-->    
                    <div class="md-form mb-3 input-div float-div">
                        <i class="fas fa-graduation-cap"></i>
                        <select id="degree" name="degree" class="form-control">
                            <option value="null">Select Degree</option>
                            <option value="Bachelor of Arts" <?php if($row['degree']=='Bachelor of Arts'){echo 'selected';} ?>>Bachelor of Arts: BA</option>
                            <option value="Bachelor of Commerce" <?php if($row['degree']=='Bachelor of Commerce'){echo 'selected';} ?>>Bachelor of Commerce: BCom</option>
                            <option value="Bachelor of Business Administration" <?php if($row['degree']=='Bachelor of Business Administration'){echo 'selected';} ?>>Bachelor of Business Administration: BBA</option>
                            <option value="Bachelor of Computer Application" <?php if($row['degree']=='Bachelor of Computer Application'){echo 'selected';} ?>>Bachelor of Computer Applications: BCA</option>
                            <option value="Bachelor of Engineering" <?php if($row['degree']=='Bachelor of Engineering'){echo 'selected';} ?>>Bachelor of Engineering: BE</option>
                            <option value="Bachelor of Science" <?php if($row['degree']=='Bachelor of Science'){echo 'selected';} ?>>Bachelor of Science: BSc</option>
                            <option value="Bachelor of Technology" <?php if($row['degree']=='Bachelor of Technology'){echo 'selected';} ?>>Bachelor of Technology: BTech</option>
                            <option value="Master of Arts" <?php if($row['degree']=='Master of Arts'){echo 'selected';} ?>>Master of Arts: MA</option>
                            <option value="Master of Commerce" <?php if($row['degree']=='Master of Commerce'){echo 'selected';} ?>>Master of Commerce: MCom</option>
                            <option value="Master of Computer Application" <?php if($row['degree']=='Master of Computer Application'){echo 'selected';} ?>>Master of Computer Application: MCA</option>
                            <option value="Master of Engineering" <?php if($row['degree']=='Master of Engineering'){echo 'selected';} ?>>Master of Engineering: ME</option>
                            <option value="Master of Science" <?php if($row['degree']=='Master of Science'){echo 'selected';} ?>>Master of Science: MSc</option>
                            <option value="Master of Technology" <?php if($row['degree']=='Master of Technology'){echo 'selected';} ?>>Master of Technology: MTech</option>
                        </select>
                    </div>
                </div>

                <div class="col">
                    <!--branch-->
                    <div class="md-form mb-3 input-div float-div" >
                        <i class="fas fa-book-reader"></i>
                        <input type="text" class="form-control" id="branch" value="<?php echo $row['branch']; ?>" name="branch"   required>
                    </div>
                </div>
            </div>
						
            
            <div class="row">
                <div class="col-sm-2">Join Date</div>
                <div class="col-sm-4">
                    <!--join date-->
                    <div class="md-form mb-3 input-div float-div">
                        <input type="date" class="form-control" id="JoinDate"  name="JoinDate"  value="<?php echo $row['joining_date']; ?>" required>
                    </div>
                </div>
                <div class="col-sm-2">End Date</div>
                <div class="col-sm-4">
                    <!--resign date-->
                    <div class="md-form mb-3 input-div float-div" >
                        <input type="date" class="form-control" id="ResignDate" value="<?php echo $row['separation_date']; ?>" name="ResignDate"   required>
                    </div>
                </div>
            </div>
            
            
            <!--designation-->
            <div class="md-form mb-3 input-div" style="clear:both;">
                <i class="fas fa-user-edit"></i>
                <input type="text" class="form-control" id="designation" placeholder="designation" value="<?php echo $row['designation']; ?>" name="designation"   required>
            </div>
            
            <!--project details-->
            <div class="md-form mb-3 input-div">
                <i class="fas fa-info-circle"></i>
                <textarea class="form-control" id="projectDetail" name="projectDetail" placeholder="project details"><?php echo $row['projectdetails']; ?></textarea>
            </div>
<?php
}
}
}else{
    echo 'you are not logged in';
}

?>
            <div class="text-center">
                
                <button type="submit" class="btn" name="updateRecord">Update</button>
                
                <button type="reset" class="btn" name="cancelButton">Cancel</button>
            </div>
        </form>
        </center>
<?php


		$conn->close();
?>
        
           </body>
</html>
