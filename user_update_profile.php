<?php
    require_once('functions.php');
    class ApiTest extends Rest{
        public $dbConn;
		public function __construct(){
			parent::__construct();
			$db = new DbConnect;
			$this->dbConn = $db->connect();

			//Obtain data + fileStatuses

		    $fileStatuses = json_decode($_REQUEST["descriptions"], true);
		    
		    $userId = $this->validateParameters('userId', $fileStatuses["userId"], INTEGER);
		    $name = $this->validateParameters('name', $fileStatuses['name'], STRING);
		    $email = $this->validateParameters('email', $fileStatuses['email'], STRING);
		    $phone = $this->validateParameters('phone', $fileStatuses['phone'], INTEGER);
		    $location = $this->validateParameters('location', $fileStatuses['location'], STRING);
		    $isIntern = $this->validateParameters('isIntern', $fileStatuses['isIntern'], INTEGER);
		    $isJob = $this->validateParameters('isJob', $fileStatuses['isJob'], INTEGER);
		    
		    $fileStatusPhoto = $fileStatuses["fileStatusPhoto"];
		    $fileStatusResume = $fileStatuses["fileStatusResume"];
            
            $random_name_photo = "";
            $random_name_resume = "";
		        
		    if($fileStatusPhoto==true){
		        $upload_dir = "AppUsers/photos/";
		        $file_name = $_FILES["filePhoto"]["name"];
		        $tmp_name = $_FILES["filePhoto"]["tmp_name"];
		        $random_name_photo = "".$userId."-".$file_name;
		        $random_name_photo = preg_replace('/\s+/', '-', $random_name_photo);
		        $random_name_photo = strtolower($random_name_photo);

                $upload_name_photo = $upload_dir.$random_name_photo;
                if(!move_uploaded_file($tmp_name, $upload_name_photo)){
                    $this->throwError(200, "Failed to upload Photo!");    
                }
		    }

		    if($fileStatusResume==true){
		        $upload_dir_1 = "InternshipDocuments/";
		        $upload_dir_2 = "JobDocuments/";
		        $file_name = $_FILES["fileResume"]["name"];
		        $tmp_name = $_FILES["fileResume"]["tmp_name"];
		        $random_name_resume = rand(1000,1000000)."-".$file_name;
		        $random_name_resume = preg_replace('/\s+/', '-', $random_name_resume);
                $random_name_resume = strtolower($random_name_resume);

                $upload_name_resume = $upload_dir_1.$random_name_resume;

                //str_replace(" ","-",$upload_name_resume);
                if(!move_uploaded_file($tmp_name, $upload_name_resume)){
                    $this->throwError(200, "Failed to upload Resume!");    
                }

                $source = $upload_name_resume;
                $upload_name_resume = $upload_dir_2.strtolower($random_name_resume);
                if(!copy($source, $upload_name_resume)){
                    $this->throwError(200, "Failed to copy Resume!");    
                }
		    }
		    
		    $boolTrue = 1;

		    $stmt = $this->dbConn->prepare("UPDATE app_users
		    	SET name = ?, email = ?, phone = ?, location = ?, isIntern = ?, isJob = ? WHERE id = ?"
		   	);
		   	$stmt->bindParam(1, $name);
		   	$stmt->bindParam(2, $email);
		   	$stmt->bindParam(3, $phone);
		   	$stmt->bindParam(4, $location);
		   	$stmt->bindParam(5, $isIntern);
		   	$stmt->bindParam(6, $isJob);
		   	$stmt->bindParam(7, $userId);
		   	$stmt->execute();

		    if($fileStatusPhoto == true){
		    	$stmt = $this->dbConn->prepare("UPDATE app_users SET photo = ?, photo_present = ? WHERE id = ?");
		    	$stmt->bindParam(1, strtolower($random_name_photo));
		    	$stmt->bindParam(2, $boolTrue);
		    	$stmt->bindParam(3, $userId);
		    	$stmt->execute();
		    }

		    if($fileStatusResume == true){
		    	$stmt = $this->dbConn->prepare("UPDATE app_users SET resume = ?, resume_present = ? WHERE id = ?");
		    	$stmt->bindParam(1, strtolower($random_name_resume));
		    	$stmt->bindParam(2, $boolTrue);
		    	$stmt->bindParam(3, $userId);
		    	$stmt->execute();
		    }

		    $this->throwError(200, "Uploaded files successfully!");
		}
    }
    
    $apiTest = new ApiTest();
?>