<?php
    require_once('functions.php');
    class ApiEmployerGetJobs extends Rest{
        public $dbConn;
		public function __construct(){
			parent::__construct();
			$db = new DbConnect;
			$this->dbConn = $db->connect();
		}
        
        public function getEmployerJobs(){

            $emplId = $this->validateParameters('emplId', $this->param['emplId'], INTEGER);
		    
		    try{
		    	$stmt = $this->dbConn->prepare("SELECT * FROM agency WHERE userid = :userId");
		    	$stmt->bindParam(":userId", $emplId);
		    	$stmt->execute();
		    	$user = $stmt->fetch(PDO::FETCH_ASSOC);
		    	$email = $user['email'];
		    	$data = array();

		    	$stmt = $this->dbConn->prepare("SELECT * FROM jobpost WHERE email = :email OR agency_id = :id");
		    	$stmt->bindParam(":email", $email);
		    	$stmt->bindParam(":id", $emplId);
		    	$stmt->execute();

		    	while ($user = $stmt->fetch(PDO::FETCH_ASSOC)){

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
    
    $api_empl_jobs = new ApiEmployerGetJobs;
    $api_empl_jobs->getEmployerJobs();
?>