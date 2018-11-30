<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

            <!-- Article -->
            <div class="article">
                <h2><span><a href="#">Welcome To Control Panel</a></span></h2>
               
<?php
$JobId=$_GET['JobId'];
$JobSeekId=$_GET['JobSeekId'];
$AppId=$_GET['AppId'];
$Status="Call Latter Send";
$Description=$_POST['txtDesc'];
// Establish Connection with mysqli
$con = mysqli_connect("localhost","root","","job");
// Select Database
// Specify the query to Update Record
$sql = "Update Application_Master set Status='".$Status."' ,Description='".$Description."' where ApplicationId=".$AppId." and JobId='".$JobId."' and JobSeekId='".$JobSeekId."'";
// Execute query
mysqli_query($con,$sql);
// Close The Connection
mysqli_close($con);
echo '<script type="text/javascript">alert("Call Latter Send Succesfully");window.location=\'Application.php\';</script>';
?>
                
               
</body>
</html>
