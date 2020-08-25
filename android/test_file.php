<?php
    require_once('functions.php');
    class ApiTest extends Rest{
        public $dbConn;
		public function __construct(){
			parent::__construct();
			$db = new DbConnect;
			$this->dbConn = $db->connect();
		    /*if($_FILES["photo"]){
		        $this->throwError(200, "Yippee!!");
		    }
		    else
		        $this->throwError(200, "Nopes!!");*/
		    $arr = json_decode($this->file_form_data, true);
		    $fileStatuses = json_decode($_REQUEST["descriptions"], true);
		    $fileStatus1 = $fileStatuses["fileStatus1"];
		    $fileStatus2 = $fileStatuses["fileStatus2"];
		    $fileStatus3 = $fileStatuses["fileStatus3"];

		    /*$upload_dir = "";
		    $photo_name = $_FILES["file1"]["name"];
		    $tmp_name = $_FILES["file1"]["tmp_name"];
		    $random_name = rand(1000,1000000)."-".$photo_name;
            $upload_name = $upload_dir.strtolower($random_name);
            $upload_name = preg_replace('/\s+/', '-', $upload_name);
            if(move_uploaded_file($tmp_name , $upload_name))
                $this->throwError(200, "Successful!!!!!!".$arr["code"]);
            else
		        $this->throwError(200, "Nopes!!");*/
		        
		    if($fileStatus1==true){
		        $upload_dir = "";
		        $photo_name = $_FILES["file1"]["name"];
		        $tmp_name = $_FILES["file1"]["tmp_name"];
		        $random_name = rand(1000,1000000)."-".$photo_name;
                $upload_name = $upload_dir.strtolower($random_name);
                $upload_name = preg_replace('/\s+/', '-', $upload_name);
                if(!move_uploaded_file($tmp_name, $upload_name)){
                    $this->throwError(200, "Nopes 1!!");    
                }
		    }
		    if($fileStatus2==true){
		        $upload_dir = "";
		        $photo_name = $_FILES["file2"]["name"];
		        $tmp_name = $_FILES["file2"]["tmp_name"];
		        $random_name = rand(1000,1000000)."-".$photo_name;
                $upload_name = $upload_dir.strtolower($random_name);
                $upload_name = preg_replace('/\s+/', '-', $upload_name);
                if(!move_uploaded_file($tmp_name, $upload_name)){
                    $this->throwError(200, "Nopes 2!!");    
                }
		    }
		    if($fileStatus3==true){
		        $upload_dir = "";
		        $photo_name = $_FILES["file3"]["name"];
		        $tmp_name = $_FILES["file3"]["tmp_name"];
		        $random_name = rand(1000,1000000)."-".$photo_name;
                $upload_name = $upload_dir.strtolower($random_name);
                $upload_name = preg_replace('/\s+/', '-', $upload_name);
                if(!move_uploaded_file($tmp_name, $upload_name)){
                    $this->throwError(200, "Nopes 3!!");    
                }
		    }
		    
		    //SQL
		    //$this->throwError(200, "".$fileStatus1."-".$fileStatus2."-".$fileStatus3);
		    //$this->throwError(200, $fileStatus1);
		    $this->throwError(200, "Saved all files.");
		        
		}
    }
    
    $apiTest = new ApiTest();
?>