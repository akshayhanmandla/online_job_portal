<?xml version="1.0"?>
                <h2><span><a href="#">Welcome To Control Panel</a></span></h2>
               

                <table width="100%" height="209" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="33" bgcolor="#A0B9F3"><span class="style10 style11">Edit Record</span></td>
                  </tr>
                  <tr>
                    <td><?php
$Id=$_GET['UserId'];
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job");
// Select Database
// Specify the query to execute
$sql = "select * from User_Master where UserId=".$Id."";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
$Id=$row['UserId'];
$Name=$row['UserName'];
$Password=$row['Password'];
}
?>
                        <form method="post" action="UpdateUser.php">
                          <table width="100%" border="0">
                            <tr>
                              <td height="32"><span class="style8">User Id</span></td>
                              <td><span id="sprytextfield1">
                                <label>
                                <input name="txtUserId" type="text" id="txtUserId" value="<?php echo $Id;?>" />
                                </label>
                                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                            </tr>
                            <tr>
                              <td height="36"><span class="style8">User Name:</span></td>
                              <td><span id="sprytextfield2">
                                <label>
                                <input name="txtUserName" type="text" id="txtUserName" value="<?php echo $Name;?>" />
                                </label>
                                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                            </tr>
                            <tr>
                              <td height="36"><span class="style8">Password:</span></td>
                              <td><span id="sprytextfield3">
                                <label>
                                <input name="txtPass" type="password" id="txtPass" value="<?php echo $Password;?>" />
                                </label>
                                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td><input type="submit" name="submit" value="Update Record" /></td>
                            </tr>
</table>
                        </form>
                        <?php
// Close the connection
mysqli_close($con);
?>
                        <form method="post" action="UpdateUser.php">
                          <table width="100%" border="0">
                          </table>
                        </form></td>
                  </tr>
                </table>
</body>
</html>
