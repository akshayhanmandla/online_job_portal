


<body>
<?php
$Id = $_POST['txtId'];
$News=$_POST['txtNews'];
$Date=$_POST['txtDate'];
// Establish Connection with MYSQL
$con = mysqli_connect("localhost","root","","job");
// Select Database
// Specify the query to Update Record
$sql = "Update News_Master set News='".$News."',NewsDate='".$Date."' where NewsId=".$Id."";
// Execute query
mysqli_query($con,$sql);
// Close The Connection
mysqli_close($con);
echo '<script type="text/javascript">alert("News Updated Succesfully");window.location=\'News.php\';</script>';
?>
</body>
</html>
