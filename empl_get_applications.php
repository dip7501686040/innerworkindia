<?php
    require_once('functions.php');
    class ApiGetEmployerApplications extends Rest{
        public $dbConn;
		public function __construct(){
			parent::__construct();
			$db = new DbConnect;
			$this->dbConn = $db->connect();
		}
        
        public function getEmployerApplications(){
            $jobPostId = $this->validateParameters('jobPostId', $this->param['jobPostId'], INTEGER);
            $type = $this->validateParameters('type', $this->param['type'], STRING);
		    
		    try{
		    	if($type == "Job"){
		    		$stmt = $this->dbConn->prepare("SELECT * FROM jobseeker WHERE jobpost_id = :jobPostId");
		    	}

		    	else{
		    		$stmt = $this->dbConn->prepare("SELECT * FROM internship WHERE jobpost_id = :jobPostId");
		    	}

		    	$stmt->bindParam(":jobPostId", $jobPostId);
		    	$stmt->execute();
	    		$data = array();
	    		
	    		while ($user = $stmt->fetch(PDO::FETCH_ASSOC)) {
	    			if($type=="Job")
	    				$phone = $user["mobileNum"];
	    			else
	    				$phone = $user["mobno"];

	    			$application = [
	    				"id" => $user["id"],
	    				"name" => $user["name"],
	    				"email"=> $user["email"],
	    				"gender"=> $user["gender"],
	    				"city"=> $user["city"],
	    				"education"=> $user["education"],
	    				"phone"=>$phone,
	    				"exp"=> $user["exp"],
	    				"skill"=> $user["skill"],
	    				"interest"=> $user["interest"],
	    				"jobpost_id"=> $user["jobpost_id"],
	    				"user_id"=> $user["user_id"]
	    			];
	    			array_push($data, $application);

	    		}

	    		$result = [
	    			'code' => SUCCESS_RESPONSE,
	    			'message' => "Success",
	    			'applications'=> $data
	    		];

		  		$this->returnResponse(SUCCESS_RESPONSE, $result);

			} catch(Exception $e){
				$this->throwError(JWT_PROCESSING_ERROR, $e->getMessage());
			}
		}
	}
    
	$api_empl_applications = new ApiGetEmployerApplications;
	$api_empl_applications->getEmployerApplications();
?>