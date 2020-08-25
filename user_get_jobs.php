<?php
    require_once('functions.php');
    class ApiGetJobs extends Rest{
        public $dbConn;
		public function __construct(){
			parent::__construct();
			$db = new DbConnect;
			$this->dbConn = $db->connect();
		}
        
        public function getJobs(){

        	$type = $this->validateParameters('type', $this->param['type'], STRING);
		    
		    if($type != "Internship" && $type != "Job")
		    	$this->throwError(3002, "Invalid Parameters");

		    try{
		        $stmt = $this->dbConn->prepare("SELECT * FROM jobpost WHERE type = :type AND status = 1");
		        $stmt->bindParam(":type", $type);
		        $stmt->execute();
		        $user = $stmt->fetch(PDO::FETCH_ASSOC);
		        if(!is_array($user))
		           	$this->returnResponse(404, ["code" => 404, "message" => "No jobs found."]);
		        
		    	$data = array();
		    	
		        do {
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
		        } while ($user = $stmt->fetch(PDO::FETCH_ASSOC));
		        
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
    
    $api_getjobs = new ApiGetJobs;
    $api_getjobs->getJobs();
?>