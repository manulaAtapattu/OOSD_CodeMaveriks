<?php
include ('Database.php');
class Message{
	private $message;
	private	$username;
	private $time1;
	private $project;
	
	public function __construct($message,$username,$time1,$project)
    {
        $this ->message=$message;
        $this ->username=$username;
        $this ->time1=$time1;
        $this ->project=$project;        

    }
	public function __setmessage($value){
        $this ->message=$value;
    }
    public function __getmessage(){
        return $this->message;
    }
	public function __username($value){
        $this ->username=$value;
    }
    public function __getusername(){
        return $this->username;
    }
	public function __settime1($value){
        $this ->time1=$value;
    }
    public function __gettime1(){
        return $this->time1;
    }
	public function __setproject($value){
        $this ->project=$value;
    }
    public function __getproject(){
        return $this->project;
    }
	
	public function __addtoDB($Database){
		$Database->connect();
		$sqli="INSERT INTO messages(DateTime,Username,Message,Project) VALUES ('$this->time1','$this->username','$this->message','$this->project')";
		$Database->executeQuery($sqli);
		
	}
}
?>