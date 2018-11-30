<!doctype html>
<html>
<?php
$id=$_GET['NewsId'];
$con=new mysqli("localhost","root","","job");
$query ="select * from News_Master where NewsId=$id";
$result=mysqli_query($con,$query);
$result=mysqli_fetch_array($result);


?>
<h1>Update News</h1>
<form method="post" action="UpdateNews.php">
<table width="100%" height="109" border="0" cellpadding="0" cellspacing="0">

                          <tr>
                            <td height="36"><span class="style9">Id:</span></td>
                            <td><span id="sprytextfield1">
                              <label>
                              <input type="text" value="<?php echo $result['NewsId'] ?>" name="txtId" id="txtId" />
                              </label>
                          </tr>
                       

                          <tr>
                            <td height="36"><span class="style9">News:</span></td>
                            <td><span id="sprytextfield1">
                              <label>
                              <input type="text" value="<?php echo $result['News'] ?>" name="txtNews" id="txtNews" />
                              </label>
                          </tr>
                          
                        
                          <tr>
                            <td height="35"><span class="style9">News Date:</span></td>
                            <td><span id="sprytextfield2">
                              <label>
                              <input type="date"  value="<?php echo $result['NewsDate'] ?>" name="txtDate" id="txtDate" />
                              </label>
                          </tr>
                     
                     
                          <tr>
                            <td>&nbsp;</td>
                            <td><label>
                              <input type="submit" name="button" id="button" value="Update" />
                            </label></td>
                          </tr>
</table>
</form>
</html>