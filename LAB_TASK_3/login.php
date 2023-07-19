<!DOCTYPE html>  
 <html>  
      <head>  
           
      </head>  
      <body>  
           <br />  
           <div>  
                <fieldset>
				<legend>LOGIN</legend>
                <form method="post">  
                     <?php
$password = 'pass';

// Validate password strength
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
    echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
}else{
    echo 'Strong password.';
}					 
                     
                     ?>  
                     <br />
					 
					 
                     <label>User Name :</label>  
                     <input type="text" name="name" /><br />
			         
				     	
                     <label>Password :</label>
                     <input type="password" name = "pass"/><br />
					 <hr></hr>
					 
					
					 <input type="checkbox" name="Remember Me" name="Remember Me" value="Remember Me">Remember Me<br>
					 <br>
					 <input type="submit" name="submit" value="Submit"/> <a href="changepassword.php">Forget Password?</a> <br /> 
					  
					  
					  
					  
					  
					  </form>  
                
           </div>  
           <br />  
      </body>  
 </html>  