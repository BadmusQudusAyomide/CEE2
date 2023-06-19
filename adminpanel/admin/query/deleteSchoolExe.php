<?php 
 include("../../../conn.php");


extract($_POST);

$delSchool = $conn->query("DELETE  FROM school_tbl WHERE cou_id='$id'  ");
if($delSchool)
{
	$res = array("res" => "success");
}
else
{
	$res = array("res" => "failed");
}



	echo json_encode($res);
 ?>