<?php
if (!isset($_SESSION)) 
{
  session_start();
  
}
?>


<body>
<?php

	$txtTitle=$_POST['txtTitle'];
	$txtTotal=$_POST['txtTotal'];
	$cmbQual=$_POST['cmbQual'];
	$txtDesc=$_POST['txtDesc'];
	$txtDate=$_POST['txtDate'];
	$txtTime=$_POST['txtTime'];
	$Name=$_SESSION['Name'];
	if($cmbQual=="Other")
	{
	$cmbQual=$_POST['txtOther'];
	}
	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root","","job");
	// Select Database
	// Specify the query to Insert Record
	$sql = "insert into walkin_master (CompanyName,JobTitle,Vacancy,MinQualification,Description,InterviewDate,InterviewTime) values('".$Name."','".$txtTitle."','".$txtTotal."','".$cmbQual."','".$txtDesc."','".$txtDate."','".$txtTime."')";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("Walkin Inserted Succesfully");window.location=\'ManageWalkin.php\';</script>';

?>
</body>
</html>
