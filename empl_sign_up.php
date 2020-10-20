<?php
    require_once('functions.php');
    class ApiSignUp extends Rest{
        public $dbConn;
		public function __construct(){
			parent::__construct();
			$db = new DbConnect;
			$this->dbConn = $db->connect();
		}
        
        public function signUpEmployer(){
            $companyname = $this->validateParameters('companyname', $this->param['companyname'], STRING);
            $website = $this->validateParameters('website', $this->param['website'], STRING);
            $mobile = $this->validateParameters('mobile', $this->param['mobile'], INTEGER);
            $address = $this->validateParameters('address', $this->param['address'], STRING);
            $state = $this->validateParameters('state', $this->param['state'], STRING);
            $city = $this->validateParameters('city', $this->param['city'], STRING);
            $postcode = $this->validateParameters('postcode', $this->param['postcode'], INTEGER);
		    $contactperson = $this->validateParameters('contactperson', $this->param['contactperson'], STRING);
		    $email = $this->validateParameters('email', $this->param['email'], STRING);
		    $password = $this->validateParameters('password', $this->param['password'], STRING);
		    $noofstaffs = $this->validateParameters('noofstaffs', $this->param['noofstaffs'], INTEGER);
		    $noofoffices = $this->validateParameters('noofoffices', $this->param['noofoffices'], INTEGER);
		    $noofplacements = $this->validateParameters('noofplacements', $this->param['noofplacements'], INTEGER);
		    $privacy = "on";
		    $terms = "on";
		    $comment = $this->validateParameters('comment', $this->param['comment'], STRING);
		    $sector = $this->validateParameters('sector', $this->param['sector'], STRING);
		    $experience = $this->validateParameters('experience', $this->param['experience'], INTEGER);
		    $keyword = $this->validateParameters('keyword', $this->param['keyword'], STRING);
		    $image = "";
		    
		    try{
		        $stmt = $this->dbConn->prepare("SELECT * FROM agency WHERE email = :email");
		        $stmt->bindParam(":email", $email);
		        $stmt->execute();
		        $user = $stmt->fetch(PDO::FETCH_ASSOC);
		        if(is_array($user)){
		            //if($user['isIntern']==$isIntern || $user['isJob']==$isJob)
		                $this->returnResponse(USER_COLLISION, ["code" => USER_COLLISION, "message" => "A user with the same credentials already exists."]);
		        }
		        
		        $stmt = $this->dbConn->prepare('INSERT INTO agency (companyname,website,mobile,address,state,city,postcode,contactperson,email,password,noofstaffs,noofoffices,noofplacements,privacy,terms,comment,sector,experience,keyword,image) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');

                $stmt->bindParam(1, $companyname);
                $stmt->bindParam(2, $website);
                $stmt->bindParam(3, $mobile);
                $stmt->bindParam(4, $address);
                $stmt->bindParam(5, $state);
                $stmt->bindParam(6, $city);
                $stmt->bindParam(7, $postcode);
                $stmt->bindParam(8, $contactperson);
                $stmt->bindParam(9, $email);
                $stmt->bindParam(10, $password);
                $stmt->bindParam(11, $noofstaffs);
                $stmt->bindParam(12, $noofoffices);
                $stmt->bindParam(13, $noofplacements);
                $stmt->bindParam(14, $privacy);
                $stmt->bindParam(15, $terms);
                $stmt->bindParam(16, $comment);
                $stmt->bindParam(17, $sector);
                $stmt->bindParam(18, $experience);
                $stmt->bindParam(19, $keyword);
                $stmt->bindParam(20, $image);
		        $stmt->execute();
		        
		        $data = [
		        	"code" => SUCCESS_RESPONSE, 
		        	'message' => "Account registered successfully!"
		    	];

		        $this->returnResponse(SUCCESS_RESPONSE, $data);
		    } catch(Exception $e){
		        $this->throwError(JWT_PROCESSING_ERROR, $e->getMessage());
		    }
		}
    }
    
    $api_signup = new ApiSignUp;
    $api_signup->signUpEmployer();
?>