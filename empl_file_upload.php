<?php
    require_once('functions.php');
    class ApiTest extends Rest{
        public $dbConn;
		public function __construct(){
			parent::__construct();
			$db = new DbConnect;
			$this->dbConn = $db->connect();
		    
		    //$arr = json_decode($this->file_form_data, true);

		    $fileStatuses = json_decode($_REQUEST["descriptions"], true);
		    
		    $recruiter_id = $this->validateParameters('recruiter_id', $fileStatuses["recruiter_id"], INTEGER);
		    
		    $fileStatusRegCer = $fileStatuses["fileStatusRegCer"];
		    $fileStatusGst = $fileStatuses["fileStatusGst"];
		    $fileStatusPan = $fileStatuses["fileStatusPan"];
            
            $random_name_reg_cer = "";
            $random_name_gst = "";
            $random_name_pan = "";
		        
		    if($fileStatusRegCer==true){
		        $upload_dir = "recruiterdocuments/aadhar/";
		        $file_name = $_FILES["fileRegCer"]["name"];
		        $tmp_name = $_FILES["fileRegCer"]["tmp_name"];
		        $random_name_reg_cer = rand(1000,1000000)."-".$file_name;
                $upload_name_reg_cer = $upload_dir.strtolower($random_name_reg_cer);
                $upload_name_reg_cer = preg_replace('/\s+/', '-', $upload_name_reg_cer);
                if(!move_uploaded_file($tmp_name, $upload_name_reg_cer)){
                    $this->throwError(200, "Failed to upload Registration Certificate!");    
                }
		    }
		    if($fileStatusGst==true){
		        $upload_dir = "recruiterdocuments/CV/";
		        $file_name = $_FILES["fileGst"]["name"];
		        $tmp_name = $_FILES["fileGst"]["tmp_name"];
		        $random_name_gst = rand(1000,1000000)."-".$file_name;
                $upload_name_gst = $upload_dir.strtolower($random_name_gst);
                $upload_name_gst = preg_replace('/\s+/', '-', $upload_name_gst);
                if(!move_uploaded_file($tmp_name, $upload_name_gst)){
                    $this->throwError(200, "Failed to upload GST!");    
                }
		    }
		    if($fileStatusPan==true){
		        $upload_dir = "recruiterdocuments/PAN/";
		        $file_name = $_FILES["filePan"]["name"];
		        $tmp_name = $_FILES["filePan"]["tmp_name"];
		        $random_name_pan = rand(1000,1000000)."-".$file_name;
                $upload_name_pan = $upload_dir.strtolower($random_name_pan);
                $upload_name_pan = preg_replace('/\s+/', '-', $upload_name_pan);
                if(!move_uploaded_file($tmp_name, $upload_name_pan)){
                    $this->throwError(200, "Failed to upload PAN!");    
                }
		    }
		    
		    //SQL
		    $stmt = $this->dbConn->prepare("UPDATE agency SET regis_certi = ?, pan = ?, gst = ? WHERE userid = ?");
		    $stmt->bindParam(1, strtolower($random_name_reg_cer));
		    $stmt->bindParam(2, strtolower($random_name_pan));
		    $stmt->bindParam(3, strtolower($random_name_gst));
		    $stmt->bindParam(4, $recruiter_id);
		    $stmt->execute();
		    $this->throwError(200, "Saved all files.");
		        
		}
    }
    
    $apiTest = new ApiTest();
?>