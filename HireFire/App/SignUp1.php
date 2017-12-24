<?php require_once "service/validation_service.php"; ?>

<script>
	var valid=false;
	function validate(){
		var emailTextBox = document.getElementById("email");
		var emailErrorBox = document.getElementById("emailError");
		emailErrorBox.style.color = "RED";
		var email = emailTextBox.value;
		
		if(email==""){
			emailErrorBox.innerHTML="*Email Required";
			
			return valid;
		}
		else{
			valid="<?php 
			if($_SERVER['REQUEST_METHOD']=="POST"){
				$email=trim($_POST['email']);
				if(isValidEmail($email)==false){
					echo 'false';
				}
				else{
					echo 'true';
				}
			}
			?>";
			return valid;
		}
		
		
		
		
		
		
	}
</script>
<form action="SignUp2.php" onsubmit="return validate()" method="POST">
<table  height="10%" width="100%" border="0">
	<tr>

		<td><a href="PublicHome.html"><img src="image/image.png" width="150"/></a></td>
		<td>
		</td>
		<td align="right">
			
		</td>
		<td></td>
	</tr>		
</table>


<table height="70%" width="100%" >
	<tr>
		<td width="33%"></td>
		<td width="34%">
			<form action="SignUp2.html">

				<fieldset>
					<legend>Join HireFire</legend>
					<br/>
					<input type="text" placeholder="Enter your email" name="email" id="email"/><span id="emailError"></span>
					<br/><br/>
					<input type="submit" value="Continue"/>
					<br/><br/>
					Already a member? <a href="SignIn.html">Sign in</a>
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
</form>