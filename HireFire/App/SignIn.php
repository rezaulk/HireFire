<?php   session_start(); require_once "../service/validation_service.php"; ?>
<?php require_once "../service/person_service.php"; ?>

<?php
    $name = $password = $error="";
    $nameErr = $passwordErr = "";
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $name=trim($_POST['uname']);
        $password=trim($_POST['pass']);
        
        $isValid = true;
        if(empty($password)){
            $isValid = false;
            $passwordErr = "*";
        }
        if(empty($name)){
            $isValid = false;
            $nameErr = "*";
        }
        else if(isValidUserName($name)==false){
            $isValid = false;
            $nameErr = "At least two words required, Only letters and white space allowed";
        }
        if($isValid==true){
            $person['name'] = $name;
            $person['password'] = $password;
            
            if(($persons=(login($person)))==true){
				
                $_SESSION['username']=$name;
			   if($persons[0]['type']==1)
			   {
				    echo "<script>
                        //alert('Record Added');
						document.location='Admin/profile.php';
                     </script>";
					 
                    die();
			   }
			   else if($persons[0]['type']==3)
			   {
				    echo "<script>
                        //alert('Record Added');
						document.location='Buyer/buyer.php';
                    </script>"; 
                    die();
			   }  
			   else
			   {
				echo "<script>
					 //alert('Record Added');
					 document.location='Buyer/buyer_only.php';
				     </script>";
					 
                die();
                 }
			}
            else
			{
               $error ="Wrong User name Password";
			   /*echo "<script>
                        alert('Wrong User name Password');
						//document.location='User/main.html';
               </script>";*/
            }
        }
    }
?>

<table  height="10%" width="100%" border="1" >
	<tr>
		<td><a href="PublicHome.html"><img src="image/image.png" width="150"/></a></td>
		<td></td>
		<td align="right"></td>
		<td></td>
	</tr>		
</table>
<form  method="post">
<table height="70%" width="100%" border="0" >
	<tr>
		<td width="33%"></td>
		<td width="34%">
			<form >
			    <h3 align="center"><font color="red"><?=$error?></font></h3>
				<fieldset >
					<legend><h3>Login</h3></legend>
					<b>User Name</b>
					<input title="Name" name="uname" value="<?=$name?>"/><?=$nameErr?>
					</br></br>
					<b>Password</b>
					&nbsp;
					<input  title="password" name="pass" value="<?=$password?>"/> <?=$passwordErr?>
					<hr>
					<input type="checkbox" name="check">Remember Me</input>
					</br></br>
					<input type="submit"/> <a href="ForgotPassword.html">Forgot Password</a><br/><br/>
					You don't have any account? <a href="ForgotPassword.html">Create an account</a>	
				</fieldset>
			</form>
		</td>
		<td width="33%"></td>
	</tr>
</table>
</form>

<table height="20%" border="0" width="100%">
	<hr>
		<tr>
		   <th align="left">CATEGORIES</th>
		   <th align="left">ABOUT</th>
		   <th align="left">COMMUNITY</th>
		   <th align="left">SUPPORT</th>
		   <th align="left">FOLLOW US</th>
	    </tr>
	  
	   <tr>
		<td>Graphics & Design</td>
		<td>Careers</td>
		<td>Blog</td>
		<td>Contact Support</td>
		<td> <a href="www.google.com">Google</a></td>
		
	   </tr>
		<tr>
		<td>Digital Marketing</td>
		<td>Press & News</td>
		<td>Forum</td>
		<td>Help & Education</td>
		<td>  <a href="www.Twitter.com">Twitter</a></td>
		
	   </tr>
		<tr>
		<td>Writing & Translation</td>
		<td>Partnerships</td>
		<td>Podcast</td>
		<td>Trust & Safety</td>
		<td> <a href="www.Youtube.com">Youtube</a></td>
		
	   </tr>
		<tr>
		<td> Video & Animation</td>
		<td>Privacy Policy</td>
		<td>Affiliates</td>
		<td>Selling on Freelance</td>
		<td> <a href="www.facebook.com">Facebook</a></td>
		
	   </tr>
		<tr>
		<td> Music & Audio</td>
		<td>Terms of Service</td>
		<td></td>
		<td>Buying on freelance</td>
		<td></td>
		
	   </tr>
		<tr>
		<td> Programming & Tech</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	   </tr>
	   
		<tr>
		<td>Business</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	   </tr>
	   
	 </tr> 
	</table>