<?php
 include("../../../conn.php");
 extract($_POST);


$newSchoolName = strtoupper($newSchoolName);
$updSchool = $conn->query("UPDATE school_tbl SET cou_name='$newSchoolName' WHERE cou_id='$school_id' ");
if($updSchool)
{
	   $res = array("res" => "success", "newSchoolName" => $newSchoolName);
}
else
{
	   $res = array("res" => "failed");
}



 echo json_encode($res);	
?>