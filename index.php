<html>
	<head>
		<title>WebVet - Home</title>
	</head>
	<body>
<h2>WebVet - Veterinary Practice Management</h2>
<a href="index.php">Main Menu</a>
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
<?php  
    if (! isset($_GET['page']))
    {
        include('./home.php');

    } else {    
        $page = $_GET['page'];  
        switch($page)
        {
            case 'client':
                include('client.php');
                break;  
            case 'services':
                include('./services.php');
                break;  
            case 'gallery':
                include('./gallery.php');
                break;      
            case 'photos':
                include('./photos.php');
                break;  
            case 'events':
                include('./events.php');
                break;  
            case 'contact':
                include('./contact.php');
                break;
        }
    }
    ?>
<center><font size="2">WebVet Version 0.1a<BR>
Support | Documentation</font></center>

	</body>
</html>
	