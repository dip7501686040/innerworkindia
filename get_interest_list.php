<?php
    require_once('functions.php');
    class ApiGetInterests extends Rest{
        public $dbConn;
		public function __construct(){
			parent::__construct();
			$db = new DbConnect;
			$this->dbConn = $db->connect();
		}
        
        public function getInterests(){

		    
		    try{
		    	$stmt = $this->dbConn->prepare("SELECT * FROM tbl_interest");
		    	$stmt->execute();
		    	$data = array();

		    	while ($user = $stmt->fetch(PDO::FETCH_ASSOC)){
		        	array_push($data, $user);
		    	}

		    	$result = [
		    		"code"=>SUCCESS_RESPONSE,
		    		"message"=>"Success",
		    		"interests"=>$data
		    	];
		    	
		    	$this->returnResponse(SUCCESS_RESPONSE, $result);
		    } catch(Exception $e){
		        $this->throwError(JWT_PROCESSING_ERROR, $e->getMessage());
		    }
		}
    }
    
    $api_interests = new ApiGetInterests;
    $api_interests->getInterests();
?>