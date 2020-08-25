<?php
    require_once('functions.php');
    class ApiGetUserApplications extends Rest{
        public $dbConn;
		public function __construct(){
			parent::__construct();
			$db = new DbConnect;
			$this->dbConn = $db->connect();
		}
        
        public function getUserApplications(){
            
            $userId = $this->validateParameters('userId', $this->param['userId'], INTEGER);
            $type = $this->validateParameters('type', $this->param['type'], STRING);
		    
		    try{

		    	$stmt = $this->dbConn->prepare("SELECT * FROM app_users WHERE id = :userId");
		    	$stmt->bindParam(":userId", $userId);
		    	$stmt->execute();
		    	$user = $stmt->fetch(PDO::FETCH_ASSOC);
		    	$email = $user['email'];
		    	$data = array();

		    	if($type == "Job"){
		    		$stmt = $this->dbConn->prepare("SELECT DISTINCT jobpost_id FROM jobseeker WHERE email = :email OR user_id = :user_id");
		    	}

		    	else if($type == "Internship"){
		    		$stmt = $this->dbConn->prepare("SELECT DISTINCT jobpost_id FROM internship WHERE email = :email OR user_id = :user_id");
		    	}

		    	$stmt->bindParam(":email", $email);
		    	$stmt->bindParam(":user_id", $userId);
		    	$stmt->execute();
		    	
	    		while ($jp_id = $stmt->fetch(PDO::FETCH_ASSOC)) {
	    			
	    			if($jp_id['jobpost_id'] !== 0){

	    				$statement = $this->dbConn->prepare("SELECT * FROM jobpost WHERE id = :id");
	    				$statement->bindParam(":id", $jp_id['jobpost_id']);
	    				$statement->execute();
	    				$user = $statement->fetch(PDO::FETCH_ASSOC);
	    				
	    				$jobpost = [
	        				"id" => $user["id"],
	        				"jobTitle" => $user["jobTitle"],
	        				"company" => $user["company"],
	        				"email"=> $user["email"],
	        				"jobType"=> $user["jobType"],
	        				"location"=> $user["location"],
	        				"minSalary"=> $user["minSalary"],
	        				"maxSalary"=> $user["maxSalary"],
	        				"cpname"=> $user["cpname"],
	        				"cpnum"=> $user["cpnum"],
	        				"status"=> $user["status"],
	        				"exp"=> $user["exp"],
	        				"education"=> $user["education"],
	        				"j_desc"=> $user["j_desc"],
	        				"dateTime"=> $user["dateTime"],
	        				"job_referalamt"=> $user["job_referalamt"],
	        				"about_comp"=> $user["about_comp"],
	        				"type"=> $user["type"],
	        				"skills"=> $user["skills"],
	        				"idesc"=> $user["idesc"],
	        				"agency_id"=> $user["agency_id"]
	        			];
	        			array_push($data, $jobpost);
			    	}

	    		}

	    		$result = [
	    			"code"=>SUCCESS_RESPONSE,
	    			"message"=>"Success",
	    			
	    			"jobposts"=>$data
	    		];
	    		
		  		$this->returnResponse(SUCCESS_RESPONSE, $result);

			} catch(Exception $e){
				$this->throwError(JWT_PROCESSING_ERROR, $e->getMessage());
			}
		}
	}
    
	$api_user_applications = new ApiGetUserApplications;
	$api_user_applications->getUserApplications();
?>