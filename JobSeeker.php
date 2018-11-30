
<body id="www-url-cz">
<SCRIPT language="JavaScript1.2" src="gen_validation.js"></SCRIPT>
<SCRIPT language="JavaScript1.2">
var arrFormValidation=
             [
			 		[//Name
						  ["minlen=1",
		"Please Enter Name "
						  ] 
					
                     ],
                   [//Address
						   ["minlen=1",
		"Please Enter Address "
						  ] 
						  
                   ],
                   [//Country
						 
						 
					  
						  				
                   ],
				   [//State
						  
						  
                   ],
				   [//City
						  
						  
                   ],
				   [//Mobile
						  
						  ["num",
		"Please Enter valid Mobile "
						  ],
						  ["minlen=10",
		"Please Enter valid Mobile "
						  ]
						 
						 
						  
                   ],
				   [//Email
						   ["minlen=1",
		"Please Enter Email "
						  ], 
						  ["email",
		"Please Enter valid email "
						  ]
						  
                   ],
				   [//ID
						  
						  
                   ],
				   [//TDType
						  
						  ["minlen=1",
		"Please Select File "
						  ]
						  
                   ],
				   [//UserName
						  
					 ["minlen=1",
		"Please Enter UserName "
						  ]	
                   ],
				   [//Password
						  
						 ["minlen=1",
		"Please Enter Password "
						  ] 
						  
                   ],
				   [//Confirm
						  
						   ["minlen=1",
		"Please Enter Confirm Password "
						  ]
						  
                   ]
            ];
</SCRIPT>

              <table width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699" >
<tr>
<th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Company Name</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Contact Person</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Email</strong></div></th>
</tr>
<?php
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job");
// Select Database
// Specify the query to execute
$sql = "select * from JobSeeker_Reg where Status='Confirm'";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
$Name=$row['JobSeekerName'];
$City=$row['City'];
$Email=$row['Email'];

?>
<tr>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Name;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $City;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Email;?></strong></div></td>
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
                </p>

                <div align="center"><a href="JobSeekerReg.php"><strong>New Job Seeker? Register Here</strong></a>                  </div>
