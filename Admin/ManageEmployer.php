<?xml version="1.0"?>

            <div class="article">
                <h2><span><a href="#">Welcome To Control Panel</a></span></h2>
               

                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="1" bordercolor="#1CB5F1" >
                        <tr>
                          <th height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Id</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Company Name</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>City</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style12">Contact Person</div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Detail</strong></div></th>
                        </tr>
                        <?php
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job");
// Select Database
// Specify the query to execute
$sql = "select * from Employer_Reg where Status='Pending'";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
$Id=$row['EmployerId'];
$Name=$row['CompanyName'];
$City=$row['City'];
$CP=$row['ContactPerson'];

?>
                        <tr>
                          <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Id;?></strong></div></td>
                          <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Name;?></strong></div></td>
                          <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $City;?></strong></div></td>
                          <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $CP;?></strong></div></td>
                          <td class="style3"><div align="left" class="style9 style5"><strong><a href="DetailEmp.php?EmpId=<?php echo $Id;?>">Detail</a></strong></div></td>
                        </tr>
                        <?php
}
// Retrieve Number of records returned
$records = mysqli_num_rows($result);
?>
                        <tr>
                          <td colspan="4" class="style3"><div align="left" class="style12"><?php echo "Total ".$records." Records"; ?> </div></td>
                        </tr>
                        <?php
// Close the connection
mysqli_close($con);
?>
                    </table></td>
                  </tr>
                </table>
  
</div> <!-- /main -->

</body>
</html>
