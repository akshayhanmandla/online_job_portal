
<body>
<?php
$Id = $_POST['txtUserId'];
$Name=$_POST['txtUserName'];
$Password=$_POST['txtPass'];
// Establish Connection with mysqli
$con = mysqli_connect("localhost","root","","job");
// Select Database
// Specify the query to Update Record
$sql = "Update User_Master set UserName='".$Name."',Password='".$Password."' where UserId=".$Id."";
// Execute query
mysqli_query($sql,$con);
// Close The Connection
mysqli_close($con);
echo '<script type="text/javascript">alert("User Updated Succesfully");window.location=\'User.php\';</script>';
?>
</body>
</html>
