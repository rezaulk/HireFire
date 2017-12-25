<?php require_once "../service/validation_service(reza).php"; ?>
<?php require_once "../service/person_service(reza).php"; ?>

<?php
    $error= $error1="";
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $email=trim($_POST['email']);
        
        $isValid = true;
        if(empty($email)){
            $isValid = false;
            $error1 = "*Empty email box";
        }
        else if(isValidEmail($email)==false)
		{
            $isValid = false;
            $error1 = "*Invalid email";
        }
        if($isValid==true){
            $person['email'] = $email;
    
            if(getUserEmail($person)==true){
                echo "<script>
                        //alert('Record Added');
						document.location='User/main.html';
                     </script>";
					 
                die();
            }
            else{
               $error ="Wrong Email";
            }
        }
    }
?>
<table  height="10%" width="100%" border="0">
	<tr>

		<td><a href="PublicHome.html"><img src="image/image.png" width="150"/></a></td>
		<td></td>
		<td align="right">	</td>
		<td></td>
	</tr>		
</table>

<table height="70%" width="100%" >
	<tr>
		<td width="33%"></td>
		<td width="34%">
		   <h3 align="center"><font color="red"><?=$error?></font></h3>
			<form method="post">
				<fieldset >
					<legend>Forgot Password</legend>
					<b>Enter Email: </b><input name="email" id="email"/><?=$error1?><br/><br/>
					<b>Enter Password: </b><input name="password" /><?=$error1?><br/><br/>
					<b>Enter Retype-Password: </b><input name="password1" /><?=$error1?><br/><br/>
					<hr>
					<input type="submit"/>
				</fieldset>
			</form>
		</td>
		<td width="33%"></td>
	</tr>
</table>

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