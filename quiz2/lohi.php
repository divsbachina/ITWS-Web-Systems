<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

//$con = mysqli_connect('localhost', 'root', '','websyslab7');

$host="localhost";
$user="root";
$password="";
$db="websysquiz2";
$con=new mysqli($host,$user,$password,$db);
// Print Error if the connection is failed.
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
// Print Error if the DB is not selected.
if (!mysqli_select_db($con, $db)) {
    die("Uh oh, couldn't select database --> $db" . $con->connect_error . ' >');
}

$result = mysqli_query($con,"SELECT name from items order by price ASC ;");

echo "<table border='1'>
<tr>
<th>Name</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>