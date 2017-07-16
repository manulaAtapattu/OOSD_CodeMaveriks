<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 7/14/2017
 * Time: 10:57 AM
 */

class Database
{
    protected $db_host = 'localhost';
    protected $db_user = 'root';
    protected $db_pass = '';
    protected $db_name = 'messageboard';
    protected $conn;

    public function connect()
    {
        $this->conn=new mysqli($this->db_host,$this->db_user,$this->db_pass);

        //Check connection
        if ($this->conn->connect_error) {
            die("connection failed: " . $this->conn->connect_error);
            return false;
        }else{
            //this will select the database DB_systemUsers
            if(mysqli_select_db($this->conn,$this->db_name)) {
                //echo "\n DB_systemUsers is selected Successfully.<br>";
                return true;
            }else{
                //echo "\n DB_systemUsers can not be connected.<br>";
                return false;
            }
        }
    }
	public function insert($table,$values,$rows = null)
    {
        if($this->tableExists($table))
        {

            $insert = 'INSERT INTO '.$table;
            //echo $insert;
            if($rows != null)
            {
                $insert .= ' ('.$rows.')';
            }
            //echo $insert;
            for($i = 0; $i < count($values); $i++)
            {
                if(is_string($values[$i]))
                    $values[$i] = '"'.$values[$i].'"';
            }
            //echo $values;
            $values = implode(',',$values);
            //echo $insert;
            $insert .= ' VALUES ('.$values.')';
            echo $insert;
            $ins =mysqli_query($this->conn , $insert);
            if($ins)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }

    public function select($table, $rows = '*', $where = null, $order = null)
    {
        $q = 'SELECT '.$rows.' FROM '.$table;
        if($where != null)
            $q .= ' WHERE '.$where;
        if($order != null)
            $q .= ' ORDER BY '.$order;
        if($this->tableExists($table))
        {
            $query=mysqli_query($this->conn , $q);
            if($query)
            {
                $numResults = mysqli_num_rows($query);
                for($i = 0; $i < $numResults; $i++)
                {
                    $r = mysqli_fetch_array($query);
                    $key = array_keys($r);
                    for($x = 0; $x < count($key); $x++)
                    {
                        // Sanitizes keys so only alphavalues are allowed
                        if(!is_int($key[$x]))
                        {
                            if(mysqli_num_rows($query) > 1)
                                $this->result[$i][$key[$x]] = $r[$key[$x]];
                            else if(mysqli_num_rows($query) < 1)
                                $this->result = null;
                            else
                                $this->result[$key[$x]] = $r[$key[$x]];
                        }
                    }
                }
                return true;
            }
            else
            {
                return false;
            }
        }
        else
            return false;
    }

    private function tableExists($table)
    {
        if ($result = mysqli_query($this->conn , "SHOW TABLES LIKE '" . $table . "'")){
            if ($result->num_rows == 1) {
                echo "Table exists";
                return true;
            }else {
                echo "Table does not exist";
                return false;
            }
        }
    }


    
    public function disconnect()
    {
        if($this->conn)
        {
            if(mysqli_close($this->conn))
            {
                $this->conn = false;
                return true;
            }
            else
            {
                return false;
            }
        }
    }
	public  function getconn(){
		$this->connect();
		return $this->conn;
		}	
	
    public function executeQuery($sqli){
        if(mysqli_query($this->conn , $sqli)){
            //echo "Records added successfully.";
			
            //exit;
        } else{
            echo "ERROR: Could not able to execute $sqli. " . mysqli_error($this->conn );
        }


    }
}

//$Databse=new Database();
//$sqli="UPDATE tbl_complaint SET procedureOfCompletion='No defined process' WHERE complaint_id='1'";
//echo $Databse->connect();
//$Databse->executeQuery($sqli);
