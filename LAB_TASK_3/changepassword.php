<!DOCTYPE html>  
 <html>  
      <head>  
           
      </head>  
      <body>  
           <br />  
           <div>  
                <fieldset>
				<legend>CHANGE PASSWORD</legend>
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />
					 
					 
                     <label>Current Password :</label>  
                     <input type="password" name="pass" /><br />
			         
				     	
                     <label>New Password :</label>
                     <input type="password1" name = "pass1"/><br />
					 <label>Retype New Password :</label>
                     <input type="password1" name = "pass1"/><br />
					 
					<hr></hr>
					 <br>
					 <input type="submit" name="submit" value="Submit"/> <a href="load.php">Forget Password?</a> <br /> 
					  
					  
					  
					  
					  
					  </form>  
                
           </div>  
           <br />  
      </body>  
 </html>  