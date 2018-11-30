<body>
<?php
session_start();
$UserName=$_POST['Username'];
$Password=$_POST['UserPass'];
$UserType=$_POST['SelectAcc'];
if($UserType=="Administrator")
{
    $con = mysqli_connect("localhost","root","","job");
    $sql = "select * from user_master where UserName='".$UserName."' and Password='".$Password."'";
    $result = mysqli_query($con,$sql);
    $records = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);
    if ($records==0)
    {
        echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
    }
    else
    {
        header("location:Admin/index.php");
    } 
    mysqli_close($con);
}
else if($UserType=="JobSeeker")
{
    $con = mysqli_connect("localhost","root","","job");
    $sql = "select * from jobseeker_reg where UserName='".$UserName."' and Password='".$Password."' and Status='Confirm'";
    $result = mysqli_query($con,$sql);
    $records = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);
    if ($records==0)
    {
        echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
    }
    else
    {
        $_SESSION['ID']=$row['JobSeekId'];
        $_SESSION['Name']=$row['JobSeekerName'];
        header("location:JobSeeker/index.php");
    } 
    mysqli_close($con);
}
else
{
    $con = mysqli_connect("localhost","root","","job");
    $sql = "select * from employer_reg where UserName='".$UserName."' and Password='".$Password."' and Status='Confirm'";
    $result = mysqli_query($con,$sql);
    $records = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);
    if ($records==0)
    {
        echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
    }
    else
    {
        $_SESSION['ID']=$row['EmployerId'];
        $_SESSION['Name']=$row['CompanyName'];
        header("location:Employer/index.php");
    } 
    mysqli_close($con);
}
?>

</body>