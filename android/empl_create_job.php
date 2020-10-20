<?php
    require_once('functions.php');
    class ApiCreateJob extends Rest{
        public $dbConn;
		public function __construct(){
			parent::__construct();
			$db = new DbConnect;
			$this->dbConn = $db->connect();
		}
        
        public function createJob(){
		    $jobTitle = $this->validateParameters('jobTitle', $this->param['jobTitle'], STRING);
		    $company = $this->validateParameters('company', $this->param['company'], STRING);
		    $email = $this->validateParameters('email', $this->param['email'], STRING);
		    $jobType = $this->validateParameters('jobType', $this->param['jobType'], STRING);
		    $location = $this->validateParameters('location', $this->param['location'], STRING);
		    $minSalary = $this->validateParameters('minSalary', $this->param['minSalary'], STRING);
		    $maxSalary = $this->validateParameters('maxSalary', $this->param['maxSalary'], STRING);
		    $cpname = $this->validateParameters('cpname', $this->param['cpname'], STRING);
		    $cpnum = $this->validateParameters('cpnum', $this->param['cpnum'], STRING);
		    $exp = $this->validateParameters('exp', $this->param['exp'], STRING);
		    $education = $this->validateParameters('education', $this->param['education'], STRING);
		    $j_desc = $this->validateParameters('j_desc', $this->param['j_desc'], STRING);
		    $status = false;
		    $about_comp = $this->validateParameters('about_comp', $this->param['about_comp'], STRING);
		    $type = "Job";
		    $skills = $this->validateParameters('skills', $this->param['skills'], STRING);
		    $agency_id = $this->validateParameters('agency_id', $this->param['agency_id'], INTEGER);
		    
		    try{

		    	//Verification of agency activation.
		    	$stmt = $this->dbConn->prepare("SELECT status FROM agency WHERE userid = :userid");
		    	$stmt->bindParam(':userid', $agency_id);
		    	$stmt->execute();
		    	$user = $stmt->fetch(PDO::FETCH_ASSOC);
		    	if($user["status"] == 0)
		    		$this->returnResponse(404, ["code" => 404, "message"=>"Your agency has not been activated. Please contact the administrator."]);

		        $stmt = $this->dbConn->prepare("INSERT INTO jobpost
		        	(jobTitle, company, email, jobType, location, minSalary, maxSalary, cpname, cpnum, exp, education, j_desc, status, about_comp, type, skills, agency_id)
		        VALUES (:jobTitle, :company, :email, :jobType, :location, :minSalary, :maxSalary, :cpname, :cpnum, :exp, :education, :j_desc, :status, :about_comp, :type, :skills, :agency_id)");
		        $stmt->bindParam(':jobTitle', $jobTitle);
		        $stmt->bindParam(':company', $company);
		        $stmt->bindParam(':email', $email);
		        $stmt->bindParam(':jobType', $jobType);
		        $stmt->bindParam(':location', $location);
		        $stmt->bindParam(':minSalary', $minSalary);
		        $stmt->bindParam(':maxSalary', $maxSalary);
		        $stmt->bindParam(':cpname', $cpname);
		        $stmt->bindParam(':cpnum', $cpnum);
		        $stmt->bindParam(':exp', $exp);
		        $stmt->bindParam(':education', $education);
		        $stmt->bindParam(':j_desc', $j_desc);
		        $stmt->bindParam(':status', $status);
		        $stmt->bindParam(':about_comp', $about_comp);
		        $stmt->bindParam(':type', $type);
		        $stmt->bindParam(':skills', $skills);
		        $stmt->bindParam(':agency_id', $agency_id);
		        
		        $stmt->execute();
		        
		        $data = [
		        	"code" => SUCCESS_RESPONSE, 
		        	'message' => "Job registered successfully!"
		        ];
		        $this->returnResponse(SUCCESS_RESPONSE, $data);
		        
		    } catch(Exception $e){
		        $this->throwError(JWT_PROCESSING_ERROR, $e->getMessage());
		    }
		}
    }
    
    $api_create = new ApiCreateJob;
    $api_create->createJob();
?>