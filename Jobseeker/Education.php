<?php
if(!isset($_SESSION))
{
session_start();
}
?>
<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">

            <!-- Article -->
            <div class="article">
                <h2><span><a href="#">Education Qualification </a></span></h2>
               

              <table width="100%" border="1" cellspacing="2" cellpadding="2">
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Create Educational Profile</strong></td>
                  </tr>
                  <tr>
                    <td><form id="form1" method="post" action="InsertEdu.php">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td><strong>Select Degree:</strong></td>
                          <td>
                          <select name="cmbQual" id="cmbQual">
                          <option value="B.C.A">B.C.A</option>
                          <option value="M.C.A">M.C.A</option>
                          <option value="B.Sc.I.T">B.Sc.I.T</option>
                          <option value="B.Sc.C.S">B.Sc.C.S</option>
                          <option value="M.Sc.I.T">M.Sc.I.T</option>
                          <option value="M.Sc.C.S">M.Sc.C.S</option>
                          <option value="M.B.A">M.B.A</option>
                          <option value="B.B.A">B.B.A</option>
                          <option value="Other">Other</option>
                          </select>                          </td>
                        </tr>
                        <tr>
                          <td><strong>Other Degree:</strong></td>
                          <td><label>
                            <input type="text" name="txtOther" id="txtOther" />
                          </label></td>
                        </tr>
                        <tr>
                          <td><strong>University/Board Name:</strong></td>
                          <td><span id="sprytextfield1">
                            <label>
                            <input type="text" name="txtBoard" id="txtBoard" />
                            </label>
                          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                        </tr>
                        <tr>
                          <td><strong>Passing Year:</strong></td>
                          <td><label>
                            <select name="cmbYear" id="cmbYear">
                              <option>1998</option>
                              <option>1999</option>
                              <option>2000</option>
                              <option>2001</option>
                              <option>2002</option>
                              <option>2003</option>
                              <option>2004</option>
                              <option>2005</option>
                              <option>2006</option>
                              <option>2007</option>
                              <option>2008</option>
                              <option>2009</option>
                              <option>2010</option>
                              <option>2011</option>
                              <option>2012</option>
                              <option>2013</option>
                            </select>
                          </label></td>
                        </tr>
                        <tr>
                          <td><strong>Percentage(%)</strong></td>
                          <td><span id="sprytextfield2">
                            <label>
                            <input type="text" name="txtPer" id="txtPer" />
                            </label>
                          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td><label>
                            <input type="submit" name="button" id="button" value="Submit" />
                          </label></td>
                        </tr>
                      </table>
                                        </form>
                    </td>
                  </tr>
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Educational Profile</strong></td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699" >
                      <tr>
                        <th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Degree</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>University</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Passing Year</strong></div></th>
                         <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Percentage</strong></div></th>
                      </tr>
                      <?php
					  $ID=$_SESSION['ID'];
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job");
// Select Database
// Specify the query to execute
$sql = "select * from JobSeeker_Education where JobSeekId='".$ID."'";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
$Degree=$row['Degree'];
$Univ=$row['University'];
$Passing=$row['PassingYear'];
$Per=$row['Percentage'];
?>
                      <tr>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Degree;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Univ;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Passing;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Per;?></strong></div></td>
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
</body>
</html>
