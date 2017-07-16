<?php
include ('Message.php');

class User
{
	
	private $UserID;
	private $PSWord;
	private $Unreadm;
	private $id;

    public function __construct($UserID,$PSWord,$Unreadm,$id)
    {
     $this->UserID=$UserID;
	 $this->PSWord=$PDWord;
	 $this->Unreadm=$Unreadm;
	 $this->id=$id;
    }
	public function __getUnreadm()
	{
		return $this->Unreadm;
	}
	public function __getID()
	{
		return $this->UserID;
	}
	public function __readUnreadm()
	{
		$sqli=null;
		$Database=new Database;
		$Database->connect();
		$sqli=null;
		if($this->id=="CE"){
			
		$sqli="UPDATE ce SET  Unreadm='0' WHERE UserID='$this->UserID'";
		$Database->executeQuery($sqli);
		}
		if($this->id=='OE')
		{
		$sqli="UPDATE oe SET  Unreadm='0' WHERE UserID='$this->UserID'";
		$Database->executeQuery($sqli);
		}
		$this->Unreadm=0;
	}
	public  function _sendmessage($message,$project){
		$timezone = date_default_timezone_get();
		date_default_timezone_set('Asia/Colombo');
		$time1 = date('m/d/Y h:i:s a', time());
		$Message=new Message($message,$this->UserID,$time1,$project);
		//$Message->__construct($message,$username,$time1,$project);
		$Message->__addtoDB(new Database);
		//header("Location:Messageboard%20-%20Copy.php");
	}
	
	

    /* 
	
        session_start();
		$Database=new Database;
		$Database->connect();
		$id=$_SESSION["id"];
		$userid=$_SESSION["userid"];
		$sqli=null;

		if($id=="CE"){
			
		$sqli="UPDATE ce SET  Unreadm='0' WHERE UserID='$userid'";
		$Database->executeQuery($sqli);
		}
		if($id=='OE')
		{
		$sqli="UPDATE oe SET  Unreadm='0' WHERE UserID='$userid'";
		$Database->executeQuery($sqli);
		}
     */
    
}


