

<body>
<?php

	$Id=$_GET['NewsId'];
	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root","","job");
	// Select Database
	// Specify the query to Insert Record
	$sql = "delete from News_Master where NewsId='".$Id."'";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("News Deleted Succesfully");window.location=\'News.php\';</script>';

?>
</body>
</html>
