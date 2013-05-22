<?php
if($_POST['formSubmit'] == "Submit")
{
	$errorMessage = "";
	
	if(empty($_POST['lastname']))
	{
		$errorMessage .= "<li>You forgot to enter the client's last name!</li>";
	}
	if(empty($_POST['firstname']))
	{
		$errorMessage .= "<li>You forgot to enter the client's first name!</li>";
	}
	if(empty($_POST['address1']))
	{
		$errorMessage .= "<li>You forgot to enter the client's address!</li>";
	}
	if(empty($_POST['city']))
	{
		$errorMessage .= "<li>You forgot to enter the client's city!</li>";
	}
	if(empty($_POST['state']))
	{
		$errorMessage .= "<li>You forgot to enter the client's state!</li>";
	}
	if(empty($_POST['zipcode']))
	{
		$errorMessage .= "<li>You forgot to enter the client's zip code!</li>";
	}
	
	$varLastname = $_POST['lastname'];
	$varFirstname = $_POST['firstname'];
	$varAddress1 = $_POST['address1'];
	$varAddress2 = $_POST['address2'];
	$varCity = $_POST['city'];
	$varState = $_POST['state'];
	$varZipcode = $_POST['zipcode'];

	if(empty($errorMessage)) 
	{
		$fs = fopen("clientdata.csv","a");
		fwrite($fs,$varLastname . ", " . $varFirstname . "," . $varAddress1 . "," . $varAddress2 . "," . $varCity . "," . $varState . "," . $varZipcode . "\n");
		fclose($fs);
		
		header("Location: clientupdated.html");
		exit;
	}
}
?>

<html>
	<head>
		<title>WebVet - Client Management</title>
	</head>
	<body>
<h2>WebVet - Client Management</h2>

<hr>
Client/Patient Search

<form action="lookup.php" method="post">
 <p>Client ID:<input type="text" name="clientid" /> Last Name:<input type="text" name="lastname" /> Patient:<input type="text" name="patientname" /></p>
 <p><input type="submit" /></p>
</form>

<hr>

<?php
		if(!empty($errorMessage)) 
		{
			echo("<p>There was an error with your form:</p>\n");
			echo("<ul>" . $errorMessage . "</ul>\n");
		} 
	?>

<form action="client.php" method="post">
 
Last Name: <input type="text" name="lastname" maxlength="50"><BR>
 
First Name: <input type="text" name="firstname" maxlength="50"><BR>

Address 1: <input type="text" name="address1" maxlength="50"><BR>

Address 2: <input type="text" name="address2" maxlength="50"><BR>

City: <input type="text" name="city" maxlength="50"> State: <input type="text" name="state" maxlength="2" size="2"> Zip Code: <input type="text" name="zipcode" maxlength="10" size="10">

<BR><BR><input type="submit" name="formSubmit" value="Submit">
 
</form>


<br><br>
<center><font size="2">WebVet Version 0.1a<BR>
Support | Documentation</font></center>

	</body>
</html>
	