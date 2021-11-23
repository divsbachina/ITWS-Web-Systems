<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','websyslab7');

// get the post records
$inputId = $_POST['inputId'];
$inputName = $_POST['inputName'];
$inputPrice = $_POST['inputPrice'];


// database insert SQL code
$sql = "INSERT INTO `items` (`id`, `name`, `price`) VALUES ('$inputId', '$inputName', '$inputPrice')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>