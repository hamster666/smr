<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Hack day</title>
    <link rel="stylesheet" href="styles/style.css">
    <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<link rel="stylesheet" type="text/css" href="styles/view.css" media="all">
	<script type="text/javascript" src="view.js"></script>
</head>

<body id="home">

    <h1>Hack day test</h1>
    <h2>Laura H</h2>


	<?php include 'components/form.php' ?>
    
	<br>
	<br>
	<br>

	<?php
		$servername = "localhost";
		$username = "smr_test";
		$password = "smrsmr";

		// Create connection
		$conn = new mysqli($servername, $username, $password);

		// Check connection
		if ($conn->connect_error) {
		 die("Connection failed: " . $conn->connect_error);
		} 
		echo "Connected successfully BOOM BOOM";
	?>

</body>
</html>