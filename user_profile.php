<?php
    require_once('functions.php');
    class ApiProfile extends Rest{
        public $dbConn;
		public function __construct(){
			parent::__construct();
			$db = new DbConnect;
			$this->dbConn = $db->connect();
		}
        
        public function getUserProfile(){
            $userId = $this->validateParameters('userId', $this->param['userId'], INTEGER);
		    
		    try{
		    	$stmt = $this->dbConn->prepare("SELECT * FROM app_users WHERE id = :userId");
		    	$stmt->bindParam(":userId", $userId);
		    	$stmt->execute();
		    	$user = $stmt->fetch(PDO::FETCH_ASSOC);
			    
		    	$isIntern = ($user['isIntern']==1?true:false);
		    	$isJob = ($user['isJob']==1?true:false);
		    	$photo_present = ($user['photo_present']==1?true:false);
		    	$resume_present = ($user['resume_present']==1?true:false);
		    
		    	$data = [ 
		    		'userId' => $user['id'], 
		    		'name' => $user['name'],
		    		'email' => $user['email'],
		    		'phone' => $user['phone'],
		    		'location' => $user['location'],
		    		'isIntern' => $isIntern,
		    		'isJob' => $isJob,
		    		'photo_present' => $photo_present,
		    		'photo' => $user['photo'],
		    		'resume_present' => $resume_present,
		    		'resume' => $user['resume']
		    	];
		    	$this->returnResponse(SUCCESS_RESPONSE, $data);
		    } catch(Exception $e){
		        $this->throwError(JWT_PROCESSING_ERROR, $e->getMessage());
		    }
		    
		}
    }
    
    $api_profile = new ApiProfile;
    $api_profile->getUserProfile();
?>