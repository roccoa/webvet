<html>
	<head>
		<title>WebVet - Home</title>
	</head>
	<body>
<h2>WebVet - Veterinary Practice Management</h2>
	<?php 
	
	echo "<p>Current date and time: " . date("l jS \of F Y h:i:s A") . "</p>";

	?>
<hr>
Client/Patient Search

<form action="lookup.php" method="post">
 <p>Client ID:<input type="text" name="clientid" /> Last Name:<input type="text" name="lastname" /> Patient:<input type="text" name="patientname" /></p>
 <p><input type="submit" /></p>
</form>
<hr>
<h3>Main Menu</h3>
<a href="client.php">Client Management</a><br>
Patient Management<br>
Financial Management<br>
Report Management<br><br>
<center><font size="2">WebVet Version 0.1a<BR>
Support | Documentation</font></center>

	</body>
</html>
	