<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','websyslab7');

// get the post records
$inputTitle = $_POST['inputTitle'];
$inputCRN = $_POST['inputCRN'];
$inputPrefix = $_POST['inputPrefix'];
$inputNumber = $_POST['inputNumber'];
$inputSection = $_POST['inputSection'];
$inputYear = $_POST['inputYear'];

// database insert SQL code
$sql = "INSERT INTO `courses` (`crn`, `prefix`, `number`, `title`, `section`, `year`) VALUES ('$inputCRN', '$inputPrefix', '$inputNumber', '$inputTitle', '$inputSection', '$inputYear')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>