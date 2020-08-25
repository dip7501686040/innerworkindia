<?php
    require_once('functions.php');
    class ApiEmployerGetInterns extends Rest{
        public $dbConn;
		public function __construct(){
			parent::__construct();
			$db = new DbConnect;
			$this->dbConn = $db->connect();
		}
        
        public function getFreeInterns(){
		    try{
		        $stmt = $this->dbConn->prepare("SELECT DISTINCT skill FROM internship WHERE jobpost_id = 0 OR jobpost_id IS NULL");
		        $stmt->execute();
		        $uniqueSkill = array();
		        while($user = $stmt->fetch(PDO::FETCH_ASSOC)){
		            if(!is_array($user))
		        		$this->throwError(3000, "No skill");
		        	array_push($uniqueSkill, $user["skill"]);
		        }
		    	
		    	$stmt = $this->dbConn->prepare("SELECT * FROM internship WHERE jobpost_id = 0 OR jobpost_id IS NULL");
		        $stmt->execute();
		        $candidates = array();
		        while ($user = $stmt->fetch(PDO::FETCH_ASSOC)) {
		            if(!is_array($user))
		        		$this->throwError(3000, "No user");
	    			$application = [
	    				"id" => $user["id"],
	    				"name" => $user["name"],
	    				"email"=> $user["email"],
	    				"gender"=> $user["gender"],
	    				"city"=> $user["city"],
	    				"education"=> $user["education"],
	    				"phone"=>$user["mobno"],
	    				"exp"=> $user["exp"],
	    				"skill"=> $user["skill"],
	    				"interest"=> $user["interest"],
	    				"jobpost_id"=> $user["jobpost_id"],
	    				"user_id"=> $user["user_id"]
	    			];
	    			array_push($candidates, $application);
	    		}
		    	
		        $data = [
		        	"code" => SUCCESS_RESPONSE,
		        	'message' => "Success",
		        	"uniqueSkill" => $uniqueSkill,
		        	"candidates" => $candidates
		        ];
		        $this->returnResponse(SUCCESS_RESPONSE, $data);
		    } catch(Exception $e){
		        $this->throwError(JWT_PROCESSING_ERROR, $e->getMessage());
		    }
		}
    }
    
    $api_intern = new ApiEmployerGetInterns;
    $api_intern->getFreeInterns();
?>