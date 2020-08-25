<?php
    require_once('functions.php');
    class ApiProfile extends Rest{
        public $dbConn;
		public function __construct(){
			parent::__construct();
			$db = new DbConnect;
			$this->dbConn = $db->connect();
		}
        
        public function getEmployerProfile(){
            $userId = $this->validateParameters('userId', $this->param['userId'], INTEGER);
		    
		    try{
		    	$stmt = $this->dbConn->prepare("SELECT * FROM agency WHERE userid = :userId");
		    	$stmt->bindParam(":userId", $userId);
		    	$stmt->execute();
		    	$user = $stmt->fetch(PDO::FETCH_ASSOC);
			    
		    	$data = [ 
		    		'userId' => $user['userid'], 
		    		'companyname' => $user['companyname'],
		    		'website' => $user['website'],
		    		'mobile' => $user['mobile'],
		    		'address' => $user['address'],
		    		'city' => $user['city'],
		    		'state' => $user['state'],
		    		'postcode' => $user['postcode'],
		    		'contactperson' => $user['contactperson'],
		    		'email' => $user['email'],
		    		'noofstaffs' => $user['noofstaffs'],
		    		'noofoffices' => $user['noofoffices'],
		    		'noofplacements' => $user['noofplacements'],
		    		'comment' => $user['comment'],
		    		'sector' => $user['sector'],
		    		'experience' => $user['experience'],
		    		'keyword' => $user['keyword'],
		    		'image' => $user['image'],
		    		'adhar' => $user['adhar'],
		    		'pan' => $user['pan'],
		    		'cv' => $user['cv'],
		    		'status' => $user['status']
		    	];

		    	$result = [
		    		"code"=>SUCCESS_RESPONSE,
		    		"message"=>"Success",
		    		"profile"=>$data
		    	];
		    	$this->returnResponse(SUCCESS_RESPONSE, $result);

		    } catch(Exception $e){
		        $this->throwError(JWT_PROCESSING_ERROR, $e->getMessage());
		    }
		    
		}
    }
    
    $api_profile = new ApiProfile;
    $api_profile->getEmployerProfile();
?>