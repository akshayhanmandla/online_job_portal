           <table width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699" >
<tr>
  <th bgcolor="#006699" class="style3">&nbsp;</th>
<th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>News</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>News Date</strong></div></th>
</tr>
<?php
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job");
// Select Database
// Specify the query to execute
$sql = "select * from News_Master";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
$News=$row['News'];
$NewsDate=$row['NewsDate'];

?>
<tr>
  <td class="style3"><img src="design/ico_archive2.gif" alt="" width="9" height="11" /></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $News;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $NewsDate;?></strong></div></td>
</tr>
<?php
}
// Retrieve Number of records returned
$records = mysqli_num_rows($result);
?>

<?php
// Close the connection
mysqli_close($con);
?>
</table>
    </td>
  </tr>
</table>
     