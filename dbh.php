<?php
header('Content-Type: application/json');
$servername ="66238.m.tld.pl";
$username = "admin66238_test1";
$password ="6Jw7q7hm29";
$dbname ="baza66238_test1";

$conn = mysqli_connect($servername, $username, $password, $dbname);
	$sql = "SELECT first_name FROM employees LIMIT 2";
$result = mysqli_query($conn, "SELECT * FROM employees");

$json = array();
while ($row= mysqli_fetch_assoc($result))
{
	array_push($json, array('name' => $row['first_name'],
						   'lastname'=> $row['last_name'],
						   'company'=>$row['company_name']));
}

echo json_encode(array('users'=>$json));

?>
