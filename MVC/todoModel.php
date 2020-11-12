<?php
require("dbconnect.php");

function addJob($jobProfile){
	//check the $jobProfile first
	//insert into DB with $jobProfile
	
	//return T/F
}

function cancelJob($jobID) {
	//check the $jobID first
	//1. delete the job with $jobID from DB
	//2. update the job's status to canceled
	
	//return T/F
}

function updateJob($jobID,$jobProfile) {
	
}

function getJobList($bossMode) {
	global $conn;
	if ($bossMode) {
		$sql = "select *, TIME_TO_SEC(TIMEDIFF(NOW(), addTime)) diff from todo order by status, urgent desc;";
	} else {
		$sql = "select *, TIME_TO_SEC(TIMEDIFF(NOW(), addTime)) diff from todo where status = 0;";
	}
	$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
	return $result;
}

function setFinished($jobID) {
	global $conn;
	$sql = "update todo set status = 1, finishTime=NOW() where id=$jobID and status = 0;";
	mysqli_query($conn,$sql) or die("MySQL query error"); //執行SQL
	
}

function rejectJob(){
	
}

function setClosed() {
	
}

?>