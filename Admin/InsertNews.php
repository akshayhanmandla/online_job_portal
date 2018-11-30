

<body>
<?php

	$News=$_POST['txtNews'];
	$Date=$_POST['txtDate'];
	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root","","job");
	// Select Database
	// Specify the query to Insert Record
	$sql = "insert into News_Master	(News,NewsDate) 	values('".$News."','".$Date."')";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("New News Inserted Succesfully");window.location=\'News.php\';</script>';

?>
</body>
</html>
