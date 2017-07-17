<?php
//include ('Message.php');
include ('User.php');

class Messageboardclass{
	private $Database;
	private  static $instance;
	
	private function __construct($val)
	{
		$this->Database=$val;
	}
	
	public static function __getmessageboard(){	
		if(Messageboardclass::$instance==null){
		Messageboardclass::$instance=new Messageboardclass(new Database);	
		}
		
		
		return Messageboardclass::$instance;
	}
	public  function __connecttoDB(){
		$this->Database->connect();
	}
	public  function __getcontentDB(){
		$this->__connecttoDB();
		$conn=$this->Database;
		$conn=$conn->getconn();
		$sql="SELECT DateTime,Username,Message,Project FROM messages";
		$result=$conn->query($sql);
		return $result;
	}
	public  function _sendmessage($user,$message,$project){
		/* $timezone = date_default_timezone_get();
		date_default_timezone_set('Asia/Colombo');
		$time1 = date('m/d/Y h:i:s a', time());
		$Message=new Message($message,$username,$time1,$project);
		//$Message->__construct($message,$username,$time1,$project);
		$Message->__addtoDB($this->Database);
		//header("Location:Messageboard%20-%20Copy.php"); */
		$user->_sendmessage($message,$project);
		$this->__connecttoDB();
		$conn=$this->Database;
		$conn=$conn->getconn();
		$sql="SELECT UserID,PSWord,Unreadm FROM ce";
		$result=$conn->query($sql);
		if ($result->num_rows > 0) {
								// output data of each row
								while($row = $result->fetch_assoc()) {
									//echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
									$val1=$row["Unreadm"]+1;
									$ID=$row["UserID"];
									$sqli="UPDATE ce SET  Unreadm='$val1' WHERE UserID='$ID'";
									$this->Database->executeQuery($sqli);
									}
							} else {
								
							}
		
		
	}
	
}



 ?>