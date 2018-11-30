<!doctype html>
<html>
<head>
    <title>JOB PORTAL</title>

</head>
<body>

                <li><a href="index.php">Home<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="AboutUs.php">About Us<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="Employer.php">Employer<span class="tab-l"></span><span class="tab-r"></span></a></li>
                 <li><a href="JobSeeker.php">Job Seeker<span class="tab-l"></span><span class="tab-r"></span></a></li>
                  <li><a href="News.php">Latest News<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="ContactUs.php">Contact Us<span class="tab-l"></span><span class="tab-r"></span></a></li>




<h3 align="center">Login</h3>
    <div class="login">
      
      <form name="form1" method="post" align="center" action="login.php">
                  
           <table width="100%" border="0">
              <tr>
               <td><strong>User Name</strong></td>
              </tr>
                    
              <tr>
                <td><span id="sprytextfield1">
                        <label>
                        <input type="text" name="Username" id="txtUser">
                        </label>
               <span class="textfieldRequiredMsg">*</span></span>
          <label></label>
                </td>
                </tr>
                  
                  <tr>
                      <td><strong>Password</strong></td>
                   </tr>
                   
                   <tr>
                   <td><span id="sprytextfield2">
                        <label>
                        <input type="password" name="UserPass" id="txtPass">
                        </label>
                      <span class="textfieldRequiredMsg">*</span></span></td>
                    </tr>
                   
                   <tr>
                      <td><strong>User Type</strong></td>
                    </tr>

                    <tr>
                      <td><label>
                        <select name="SelectAcc" id="cmbUser">
                          <option value="JobSeeker">JobSeeker</option>
                          <option value="Employer" selected="selected">Employer</option>
                          <option value="Administrator">Administrator</option>
                          </select>
                      </label>
                      </td>
                    </tr>
                    
                    <tr>
                      <td><label>
                        <div >
                          <input type="submit" name="button" id="button" value="Login">
                          </div>
                      </label></td>
                    </tr>
                    
                    <tr>
                      <td><div><a href="Forget.php"><strong>Forgot Password? </strong></a></div></td>
                    </tr>
                  </table>
      </form>
      </div>

</body>

</html>