<html>
   
   <head>
      <title>Update a Record in MySQL Database</title>
   </head>
   
   <body>
               <form method="post" action="addphoto.php" enctype="multipart/form-data">
                  <table width="400" border="0" cellspacing="1" cellpadding="2">
                  
				           <tr>
                        <td width="100">ID</td>
                        <td><input name="id" type="number" id="id"></td>
                     </tr>
				  
                     <tr>
                        <td width="100">Address</td>
                        <td><input name="address" type="text" id="address"></td>
                     </tr>
                  
                     <tr>
                        <td width="100">Suburb</td>
                        <td><input name="suburb" type="text" id="suburb"></td>
                     </tr>
					 
					                      <tr>
                        <td width="100">Type</td>
                        <td><input name="type" type="text" id="type"></td>
                     </tr>
					 
					                      <tr>
                        <td width="100">Description</td>
                        <td><input name="desc" type="text" id="desc"></td>
                     </tr>
					 
					                      <tr>
                        <td width="100">Furnishings</td>
                        <td><input name="furnish" type="text" id="furnish"></td>
                     </tr>
					 
					  <td width="100">Rent</td>
                        <td><input name="rent" type="number" id="rent"></td>
                     </tr>
                  
                     <tr>
                        <td width="100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width="100"> </td>
                        <td>
                           <input name="update" type="submit" id="update" value="Update">
                        </td>
                     </tr>
                  
                  </table>
				        <input type="hidden" name="size" value="3500000">
						<input type="file" name="photo"> 
               </form>
   </body>
</html>