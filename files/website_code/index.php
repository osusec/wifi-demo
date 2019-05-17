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
		echo "<br><br>";
		echo "<script>
		setTimeout(() => {
			window.location.href = 'http://wifidemo.lan';
		}, 6000);
		</script>";
	}
?>
		Click <a href='login.php'>here</a> to login.
		<br>
		Click <a href='http://wifidemo-mitm.lan'>here</a> to login [mitm].
		</p>
	</body>
</html>
