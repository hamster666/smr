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

<body>
	<?php
		//Connecting to sql db.
		$connect = mysqli_connect("localhost","smr_test","smrsmr","smr_test");

		// Check connection
		if ($connect->connect_error) {
		 die("Connection failed: " . $conn->connect_error);
		} 

		if (isset($_POST['submit'])) {

			$selfie_name 		= $_FILES['selfie']['name'];
			$selfie_type 		= $_FILES['selfie']['type'];
			$selfie_size 		= $_FILES['selfie']['size'];
			$selfie_tmp_name 	= $_FILES['selfie']['tmp_name'];

			if($selfie_name==''){
				echo "No selfie taken :( <br>";
			} else {
				$uploads_dir =  $_SERVER['DOCUMENT_ROOT']."/hack-day/images/uploads";
				move_uploaded_file($selfie_tmp_name, "$uploads_dir/$selfie_name");
				echo "<img src='/hack-day/images/uploads/$selfie_name' width='300px'>";
			}
		}
		
		$sql = "INSERT INTO test_table (name, contact, role, level, url1, dd)
		VALUES ('$_POST[name]','$_POST[email]','$_POST[role]','$_POST[level]','$_POST[url]','$_POST[dd]')";



		if (mysqli_query($connect, $sql)) {
		    echo "<br><br>New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
		}
?>
	<h1>Hello <?php echo $_POST["name"]; ?></h1>
	<p>Thanks for submitting your details.</p>
	<p>We will be in contact soon.</p>

</body>
</html>