<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 7/15/2017
 * Time: 8:06 PM
 */
$Database=new Database;
$Database->connect();
//here given the format that inputs should be passed to each database operation------------------------------>
//tbl name->complaints_tbl

$Database->update('complaints_tbl',array('location'=>'godagama','cost'=>'400 000'),array('complaint_id',1));
//2nd argument to give each field and value to set and second array is to pass the where (the field and value) to recognize the record that should be updated


//how to delete a record from a table
$Database->delete('complaints_tbl',"complaint_id=1");

//inseting a record to a tbl
$values=array($this ->priority,$this ->description,$this ->location,$this ->details,$this ->problemsCaused,$this ->procedureOfCompletion,$this ->duration,$this ->cost,$this ->empRequirement);//values that should be inserted
$rows="priority,description,location,details,problemsCaused,procedureOfCompletion,duration,cost,empRequirement";//fiels of the databse
$Database->insert('complaints_tbl',$values ,$rows);
//or
$Database->insert('complaints_tbl',array(3,1,"fgg","tjjj","vvb","bbb","ggg","2013","4000","7"));

//select the whole table
$Database->select('complaints_tbl');
//to select required fields of a record
$Database->select('complaints_tbl',"location,cost","complaint_id=1");