<?php

$host="localhost"; // Host name
$username="exrealit_webvet"; // Mysql username
$password="5literford"; // Mysql password
$db_name="exrealit_clientsql"; // Database name
$tbl_name="client_list"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form
	$lastname = $_POST['lastname'];
	$firstname = $_POST['firstname'];
	$address1 = $_POST['address1'];
	$address2 = $_POST['address2'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zipcode = $_POST['zipcode'];

// Insert data into mysql
$sql="INSERT INTO $tbl_name(lastname, firstname, address1, address2, city, state, zipcode)VALUES('$lastname', '$firstname', '$address1', '$address2', '$city', '$state', '$zipcode')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful".
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='client.php'>Back to main page</a>";
}

else {
echo "ERROR";
}
?>

<?php
// close connection
mysql_close();
?>