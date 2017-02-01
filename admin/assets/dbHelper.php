<?php
include("config.php");
class dbHelper
{
	private $db=null;
		function __construct()
		{
			$this->db = new mysqli("localhost","root","admin@123","dmft_dmg");
			if($this->db->connect_errno){
				die('Unable to connect to database [' . $this->db->connect_error . ']');
			}
		}

		function execute($q)
		{
			if(!$result = $this->db->query($q)){
				die('There was an error running the query [' . $this->db->error . ']');
			}
			return $result;
		}

		function Select_Dynamic_Query($TableName,$SelectFieldArray = "",$WhereFieldArray = "", $WhereConditionOpration, $WherevalueArray = "",$OperatorBwWhere="")
		{
		 	if($SelectFieldArray == "")
						$sql = "Select * from `$TableName`" ;
			else
			{
			    $sql = "Select" ;
			    for($si=0;$si<$SelectFieldArray.length;$si++)
				    if($si < $SelectFieldArray.length - 1)
								$sql .= " `" . $SelectFieldArray[$si] . "` ," ;
						else
								$sql .= " `" . $SelectFieldArray[$si] ."`" ;
			}
			    $sql .= " from `" . $TableName ."`" ;

			if($WhereFieldArray!="")
				   for($si=0;$si<$WhereFieldArray.length;$si++)
						 if($si < $WhereFieldArray.length - 1)
								 $sql .= " ". $WhereFieldArray[$si]. $WhereConditionOpration .$WherevalueArray[$si]." ".$OperatorBwWhere;
						 else
								  $sql .= " ". $WhereFieldArray[$si]. $WhereConditionOpration .$WherevalueArray[$si];
	}

		function conClose()
		{
			mysqli_close($this->db);
		}

}
?>
