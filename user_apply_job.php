<?php
    require_once('functions.php');
    class ApiApplyJob extends Rest{
        public $dbConn;
                public function __construct(){
                        parent::__construct();
                        $db = new DbConnect;
                        $this->dbConn = $db->connect();
                }
        
        public function applyJob(){
            $name = $this->validateParameters('name', $this->param['name'], STRING);
            $gender = $this->validateParameters('gender', $this->param['gender'], STRING);
            $city = $this->validateParameters('city', $this->param['city'], STRING);
            $education = $this->validateParameters('education', $this->param['education'], STRING);
            $email = $this->validateParameters('email', $this->param['email'], STRING);
            $phone = $this->validateParameters('phone', $this->param['phone'], INTEGER);
            $skill = $this->validateParameters('skill', $this->param['skill'], STRING);
            $interest = $this->validateParameters('interest', $this->param['interest'], STRING);
            $exp = $this->validateParameters('exp', $this->param['exp'], STRING);
            $jppid = $this->validateParameters('jppid', $this->param['jppid'], INTEGER);
            $userId = $this->validateParameters('userId', $this->param['userId'], INTEGER);
            $imageName = "";
            
            try{

                //Getting resume doc
                $stmt = $this->dbConn->prepare("SELECT * FROM app_users WHERE id = ?");
                $stmt->bindParam(1, $userId);
                $stmt->execute();
                $user = $stmt->fetch(PDO::FETCH_ASSOC);

                $imageName = $user["resume"];

                //Verification of jobpost activation
                $stmt = $this->dbConn->prepare("SELECT status from jobpost WHERE id = :id");
                $stmt->bindParam(":id", $jppid);
                $stmt->execute();
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                if(!is_array($user) || ($user['status']==0))
                    $this->returnResponse(3005, ["code"=>3005, "message"=>"This jobpost is either not verified yet, or does not exist. Please contact the company."]);

                $stmt = $this->dbConn->prepare('insert into jobseeker (name, gender, city, education, email, mobileNum, skill, interest, exp, file, jobpost_id, user_id) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)');
                $stmt->bindParam(1, $name);
                $stmt->bindParam(2, $gender);
                $stmt->bindParam(3, $city);
                $stmt->bindParam(4, $education);
                $stmt->bindParam(5, $email);
                $stmt->bindParam(6, $phone);
                $stmt->bindParam(7, $skill);
                $stmt->bindParam(8, $interest);
                $stmt->bindParam(9, $exp);
                $stmt->bindParam(10, $imageName);
                $stmt->bindParam(11, $jppid);
                $stmt->bindParam(12, $userId);
                $stmt->execute();
                $data = ["code" => SUCCESS_RESPONSE, 'message' => "Application successful!"];
                $this->returnResponse(SUCCESS_RESPONSE, $data);
            } catch(Exception $e){
                $this->throwError(JWT_PROCESSING_ERROR, $e->getMessage());
            }
        }
    }
    
    $api_apply = new ApiApplyJob;
    $api_apply->applyJob();
?>