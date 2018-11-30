

<body>
<?php

	$Id=$_GET['WalkinId'];
	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root","","job");
	// Select Database
	// Specify the query to Insert Record
	$sql = "delete from Walkin_Master where WalkinId='".$Id."'";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("Walkin Deleted Succesfully");window.location=\'ManageWalkin.php\';</script>';

?>
</body>
</html>
