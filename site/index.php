<html>
	<head>
		<title> OSUSEC Wifi Demo | Home</title>
	</head>
	<body>
		<p><h2>Welcome to the OSUSEC Wifi Demo.</h2></p>

		<p>
<?php
	if (isset($_POST['username'])) {
		echo "You provided the following data: ";
		echo json_encode($_POST);
		echo "\n";
	} else {
		echo "Click <a href='login.php'>here</a> to login.";
	}
?>
		</p>
	</body>
</html>
