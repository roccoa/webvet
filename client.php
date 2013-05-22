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
	
}
?>

<html>
	<head>
		<title>WebVet - Client Management</title>
	</head>
	<body>


<?php
		if(!empty($errorMessage)) 
		{
			echo("<p>There was an error with your form:</p>\n");
			echo("<ul>" . $errorMessage . "</ul>\n");
		} 
	?>

<form action="client_ac.php" method="post">
 
Last Name: <input type="text" name="lastname" maxlength="50"><BR>
 
First Name: <input type="text" name="firstname" maxlength="50"><BR>

Address 1: <input type="text" name="address1" maxlength="50"><BR>

Address 2: <input type="text" name="address2" maxlength="50"><BR>

City: <input type="text" name="city" maxlength="50"> State: <input type="text" name="state" maxlength="2" size="2"> Zip Code: <input type="text" name="zipcode" maxlength="10" size="10">

<BR><BR><input type="submit" name="formSubmit" value="Submit">
 
</form>

	</body>
</html>
	