<?php
    require_once('functions.php');
    class ApiCreateInternship extends Rest{
        public $dbConn;
		public function __construct(){
			parent::__construct();
			$db = new DbConnect;
			$this->dbConn = $db->connect();
		}
        
        public function createInternship(){
		    $intTitle = $this->validateParameters('intTitle', $this->param['intTitle'], STRING);
		    $company = $this->validateParameters('company', $this->param['company'], STRING);
		    $email = $this->validateParameters('email', $this->param['email'], STRING);
		    $maxSalary = $this->validateParameters('maxSalary', $this->param['maxSalary'], STRING);
		    $cpname = $this->validateParameters('cpname', $this->param['cpname'], STRING);
		    $cpnum = $this->validateParameters('cpnum', $this->param['cpnum'], STRING);
		    $j_desc = $this->validateParameters('j_desc', $this->param['j_desc'], STRING);
		    $status = false;
		    $exp = $this->validateParameters('exp', $this->param['exp'], STRING);
		    $education = $this->validateParameters('education', $this->param['education'], STRING);
		    $about_comp = $this->validateParameters('about_comp', $this->param['about_comp'], STRING);
		    $type = "Internship";
		    $agency_id = $this->validateParameters('agency_id', $this->param['agency_id'], INTEGER);
		    
		    try{
		    	//Verification of agency activation.
		    	$stmt = $this->dbConn->prepare("SELECT status FROM agency WHERE userid = :userid");
		    	$stmt->bindParam(':userid', $agency_id);
		    	$stmt->execute();
		    	$user = $stmt->fetch(PDO::FETCH_ASSOC);
		    	if($user["status"] == 0)
		    		$this->returnResponse(404, ["code" => 404, "message"=>"Your agency has not been activated. Please contact the administrator."]);

		        $stmt = $this->dbConn->prepare('insert into jobpost (jobTitle, company, email,maxSalary, cpname, cpnum, j_desc, status, exp, education,about_comp,type,recruiterid) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)');
                $stmt->bindParam(1, $intTitle);
                $stmt->bindParam(2, $company);
                $stmt->bindParam(3, $email);
                $stmt->bindParam(4, $maxSalary);
                $stmt->bindParam(5, $cpname);
                $stmt->bindParam(6, $cpnum);
                $stmt->bindParam(7, $j_desc);
                $stmt->bindParam(8, $status);
                $stmt->bindParam(9, $exp);
                $stmt->bindParam(10, $education);
                $stmt->bindParam(11,$about_comp);
                $stmt->bindParam(12,$type);
                $stmt->bindParam(13, $agency_id);

				$stmt->execute();
		        $data = [
		        	"code" => SUCCESS_RESPONSE, 
		        	'message' => "Internship registered successfully!"
		        ];
		        
		        $this->returnResponse(SUCCESS_RESPONSE, $data);
		    } catch(Exception $e){
		        $this->throwError(JWT_PROCESSING_ERROR, $e->getMessage());
		    }
		}
    }
    
    $api_create = new ApiCreateInternship;
    $api_create->createInternship();
?>