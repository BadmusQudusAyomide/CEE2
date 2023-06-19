<?php 
 include("../../../conn.php");

 extract($_POST);

$school_name = strtoupper($school_name);
 $selSchool = $conn->query("SELECT * FROM school_tbl WHERE cou_name='$school_name' ");

 if($selSchool->rowCount() > 0)
 {
	$res = array("res" => "exist", "school_name" => $school_name);
 }
 else
 {
    
	$insSchool = $conn->query("INSERT INTO school_tbl(cou_name) VALUES('$school_name') ");
	if($insSchool)
	{
		$res = array("res" => "success", "school_name" => $school_name);
	}
	else
	{
		$res = array("res" => "failed", "school_name" => $school_name);
	}


 }




 echo json_encode($res);
 ?>