

<body>
<?php
$Id = $_GET['JobId'];
// Establish Connection with MYSQL
$con = mysqli_connect("localhost","root","","job");
// Select Database
// Specify the query to Update Record
$sql = "Update JobSeeker_Reg set Status='Confirm' where JobSeekId=".$Id."";
// Execute query
mysqli_query($con,$sql);
// Close The Connection
mysqli_close($con);
echo '<script type="text/javascript">alert("Job Seeker Request Confirmed");window.location=\'ManageJob.php\';</script>';
?>
</body>
</html>
