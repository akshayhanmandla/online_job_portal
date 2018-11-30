<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">

            <!-- Article -->
            <div class="article">
                <h2><span><a href="#">Walkin Interview Detail</a></span></h2>
               
                <?php
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job");
// Select Database
// Specify the query to execute
$sql = "select * from Walkin_Master";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
$Id=$row['WalkInId'];
$CompanyName=$row['CompanyName'];
$JobTitle=$row['JobTitle'];
$Vacancy=$row['Vacancy'];
$MinQualification=$row['MinQualification'];
$Description=$row['Description'];
$InterviewDate=$row['InterviewDate'];
$InterviewTime=$row['InterviewTime'];

?>
                <table width="100%" border="1" bordercolor="#1CB5F1" >
                  
                  <tr>
                    <th width="5%" bgcolor="#1CB5F1" class="style3"><img src="../design/ico_cat.gif" alt="" width="8" height="9" /></th>
                  <th width="26%" height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Company Name</strong>:</div></th>
                    <th width="69%" height="32" bgcolor="#1CB5F1" class="style3"><div align="left"><strong><?php echo $CompanyName;?></strong></div></th>
                  </tr>
                 
                  <tr>
                    <td class="style3"><img src="../design/ico_cat.gif" alt="" width="8" height="9" /></td>
                   <td class="style3"><div align="left"><strong>Job Title:</strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $JobTitle;?></strong></div></td>
                  </tr>
                  <tr>
                    <td class="style3"><img src="../design/ico_cat.gif" alt="" width="8" height="9" /></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong>Vacancy</strong>:</div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Vacancy;?></strong></div></td>
                  </tr>
                  <tr>
                    <td class="style3"><img src="../design/ico_cat.gif" alt="" width="8" height="9" /></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong>Qualification:</strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $MinQualification;?></strong></div></td>
                  </tr>
                  <tr>
                    <td class="style3"><img src="../design/ico_cat.gif" alt="" width="8" height="9" /></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong>Description:</strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Description;?></strong></div></td>
                  </tr>
                  <tr>
                    <td class="style3"><img src="../design/ico_cat.gif" alt="" width="8" height="9" /></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong>Date:</strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $InterviewDate;?></strong></div></td>
                  </tr>
                  <tr>
                    <td class="style3"><img src="../design/ico_cat.gif" alt="" width="8" height="9" /></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong>Time:</strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $InterviewTime;?></strong></div></td>
                  </tr>
                  <?php
}

?>
  </table>
                 
                  <?php
// Close the connection
mysqli_close($con);
?>
              

</body>
</html>
