<html>
   
   <head>
      <title>Register an Account</title>
   </head>
   
   <body>
               <form method="post" action="add_member.php" enctype="multipart/form-data">
                  <table width="400" border="0" cellspacing="1" cellpadding="2">
				  
                     <tr>
                        <td width="100">Username</td>
                        <td><input name="username" type="text" id="password"></td>
                     </tr>
                  
                     <tr>
                        <td width="100">Password</td>
                        <td><input name="password" type="text" id="password"></td>
                     </tr>
					                   
                     <tr>
                        <td width="100"> </td>
                        <td>
                           <input name="update" type="submit" id="Register" value="Update">
                        </td>
                     </tr>
					 
					 <tr>
						  <select name="level">
						  <option value="1">Tenant</option>
						  <option value="2">Staff</option>
						  <option value="3">Owner</option>
						  <option value="4">Admin</option>
						</select>
					</tr>
                  
                  </table>
               </form>
   </body>
</html>