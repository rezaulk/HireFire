<?php session_start();//require_once "../service/validation_service.php"; ?>
<?php require_once "../service/TANIM_service.php"; ?>
<?php
	$allUser=getAllUsers();
	//var_dump($allUser);
?>
<?php
	
	
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$email=$_REQUEST['email'];
		$_SESSION['email']=$email;
		$userName=$_REQUEST['userName'];
		$name=$_REQUEST['name'];
		$password=$_REQUEST['password'];
		$retypePassword=$_REQUEST['retypePassword'];
		$type=3;
		$isValid=true;
		 if($isValid==true){
			$person['userName'] = $userName;
			$person['name']=$name;
			$person['email'] = $email;
			$person['password']=$password;
			$person['type']=2;
			$person['imageExt']=$userName.".jpg";
			$person['joiningdate']=date("Y-m-d");
			
			
	var_dump($GLOBALS);		
			$validEntry=true;
			if(addPersonAsBuyer($person)==true){
				
				foreach($_REQUEST['languages'] as $language){
					$person['language']=$language;
					if(addLanguage($person)==false){
						echo "<script>
						alert('InternalError language');
					 </script>";
						$validEntry=false;
						break;
					}
				}
				if($validEntry=true && count(($_REQUEST['languages']))!=0){
						$_SESSION['username']=$userName;
					//session_unset();
					 echo "<script>
						alert('Record Added');
						document.location='Buyer/buyer_only.php';
					 </script>";
				die();
				}
				
			}
			else{
				 echo "<script>
						alert('InternalError buyerEntry');
					 </script>";
			}
		}
	}
	
	//var_dump($GLOBALS);
?>
<script>
	
	function userNameCheck(){
		var validUser=true;
		var startWithLetter=true;
		
		var userNameTextBox = document.getElementById("userName");
		var userNameErrorBox = document.getElementById("userNameError");
		userNameErrorBox.style.color = "RED";
		var userName = userNameTextBox.value;
		
		if(userName=="")
		{
			userNameErrorBox.innerHTML= "Name cannot be empty";
			validUser=false;
			//return false;
		}
		else{
			var a=userName.substr(0,1);
			if((a<="z" && a>="a") || (a<="Z" && a>="A"))
			{
				userNameErrorBox.innerHTML= "";
				
			}
			else{
				userNameErrorBox.innerHTML= "Must start with a letter";
				startWithLetter=false;
				//validUser=false;
			}
			if(startWithLetter)
			{
				var len=userName.length;
				for(var i=0;i<len;i++)
				{
					if((userName[i]<="z" && userName[i]>="a") || (userName[i]<="Z" && userName[i]>="A")||userName[i]=="."||userName[i]=="_"||userName[i]=="-")
					{
						userNameErrorBox.innerHTML= "";
					}
					else{
						userNameErrorBox.innerHTML= "<br/>user name Can contain a-z, A-Z, period, dash or or underscore only";
						validUser=false;
						break;
					}
					
				}
			}
			
		}
		if(validUser){
			var allUser = <?php echo json_encode($allUser); ?>;
			for(var i=0;i<allUser.length;i++){
				if((allUser[i]['uName']).toUpperCase() ==userName.toUpperCase() )
				{
					//alert("TANIM");
					userNameErrorBox.innerHTML= "UserName already exist";
					validUser= false;
					break;
				}
				
			}
		}
		return validUser;
		
	}
	function nameCheck(){
		var validName=true;
		var startWithLetter=true;
		
		var nameTextBox = document.getElementById("name");
		var nameErrorBox = document.getElementById("nameError");
		nameErrorBox.style.color = "RED";
		var name = nameTextBox.value;
		
		if(name=="")
		{
			nameErrorBox.innerHTML= "Name cannot be empty";
			validName=false;
			//return false;
		}
		else{
			var a=name.substr(0,1);
			if((a<="z" && a>="a") || (a<="Z" && a>="A"))
			{
				nameErrorBox.innerHTML= "";
				
			}
			else{
				nameErrorBox.innerHTML= "Must start with a letter";
				startWithLetter=false;
				//validUser=false;
			}
			if(startWithLetter)
			{
				//alert(name.split(" ").length);
				if(name.split(" ").length<2)
				{
					nameErrorBox.innerHTML= "*Name must contain at least two words";
					validName=false;
				}else{
					var len=name.length;
					for(var i=0;i<len;i++)
					{
						if((name[i]<="z" && name[i]>="a") || (name[i]<="Z" && name[i]>="A")|| name[i]==" ")
						{
							//alert("TANIM");
							nameErrorBox.innerHTML= "";
						}
						else{
							nameErrorBox.innerHTML= "*Name Can contain character only";
							validName=false;
							break;
						}
						
					}
				}
			}
			return validName;
			
		}
	}
	
	function passwordCheck(){
		var validPassword=true;
		
		var passwordTextBox = document.getElementById("password");
		var passwordErrorBox = document.getElementById("passwordError");
		passwordErrorBox.style.color = "RED";
		var password = passwordTextBox.value;
		if(password=="")
		{
			passwordErrorBox.innerHTML= "*Password field cannot be empty";
			validPassword=false;
			//return false;
		}
		if(password.length<4)
		{
			passwordErrorBox.innerHTML="password must not be less than 4 characters";
			validpassword=false;
		}
		else
		{
			for(var i=0;i<password.length;i++)
			{
				if(password[i]=="@"||password[i]=="#"||password[i]==""||password[i]=="%")
				{
					validpassword=true;
					passwordErrorBox.innerHTML="";
					break;
				}
				else{
					validpassword=false;
					
				}
				
			}
			if(validpassword==false)
			{
				passwordErrorBox.innerHTML= "<br/>Password must contain at least one of the special characters (@, #, , %)";
			}
			return validPassword;
		}
	}	
	function retypepasswordCheck(){
		var validRetypePassword=true;
		var passwordTextBox = document.getElementById("password");
		var password=passwordTextBox.value;
		var retypepasswordTextBox = document.getElementById("retypePassword");
		var retypepasswordErrorBox = document.getElementById("retypePasswordError");
		retypePasswordError.style.color = "RED";
		var retypePassword = retypepasswordTextBox.value;
		if(retypePassword=="")
		{
			retypePasswordError.innerHTML= "*Retype Password field cannot be empty";
			validRetypePassword=false;
			//return false;
		}
		else{
			if(retypePassword==password)
			{
				retypePasswordError.innerHTML= "";
			}
			else{
				retypePasswordError.innerHTML= "*Password does not matched";
				validRetypePassword=false;
			}
		}
		return validRetypePassword;
	}
	function validate(){
		var isValid=true;
		if(!userNameCheck())
		{
			isValid=false;
			//alert("userNameCheck");
		}
		if(!nameCheck())
		{
			isValid=false;
			//alert("nameCheck");
		}
		if(!retypepasswordCheck()){
			isValid=false;
			//alert("retypepasswordCheck");
		}
		if(!passwordCheck()){
			isValid=false;
			//alert("passwordCheck");
		}
		var language=document.getElementsByTagName("input");
		var languageErrorMassage=document.getElementById("languageErrorMassage");
		var checked=false;
		for(var i=0; i < language.length; i++)
		{
			if(language[i].type=="checkbox")
			{
				if(language[i].checked)
				checked = true;
				//break;
			}	
			
		}
		if(!checked)
		{
			//alert("Tanim");
			isValid=false;
			languageErrorMassage.innerHTML="*Select minimum one";
			languageErrorMassage.style.color="red";
		}
		if(isValid){
			//alert("TRUE");
			return true;
			
		}
		else{
			//alert("false");
			return false;
		}
	}
	function emptylanguageErrorShowSolved()
	{
		var languageErrorMassage= document.getElementById("languageErrorMassage");
		languageErrorMassage.innerHTML="";
	}
</script>
<form action="#" onsubmit="return validate()" method="POST"><center>
<table  height="10%"  width="100%" border="0">
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
			<form>
				<fieldset>
					<legend><h3>Join HireFire</h3></legend>
					<br/>
					User Name<br/>
					<input type="text" placeholder="Choose a username" name="userName" id="userName" onchange="userNameCheck()"/><span id="userNameError"></span>
					<br/><br/>
					Name<br/>
					<input type="text" placeholder="Give your full Name" name="name" id="name" onchange="nameCheck()"/><span id="nameError"></span>
					<br/><br/>
					Password<br/>
					<input type="text" placeholder="Choose a Password" name="password" id="password" onchange="passwordCheck()" /><span id="passwordError"></span>
					<br/><br/>
					Re-Type Password<br/>
					<input type="text" placeholder="Re-enter Password" name="retypePassword" id="retypePassword" onchange="retypepasswordCheck()" /><span id="retypePasswordError"></span>
					<br/><br/>
					<fieldset>
						<legend>Language</legend>
							<input type="checkbox" name="languages[]" value="bangla" onclick="emptylanguageErrorShowSolved()"/>Bangla
							<input type="checkbox" name="languages[]" value="english" onclick="emptylanguageErrorShowSolved()"/>English
							<input type="checkbox" name="languages[]" value="french" onclick="emptylanguageErrorShowSolved()"/>French
							<input type="checkbox" name="languages[]" value="hindi" onclick="emptylanguageErrorShowSolved()"/>Hindi
							<input type="checkbox" name="languages[]" value="spanish" onclick="emptylanguageErrorShowSolved()"/>Spanish
							<input type="checkbox" name="languages[]" value="urdo" onclick="emptylanguageErrorShowSolved()"/>Urdo
					</fieldset><span id="languageErrorMassage"></span>	<br/><br/>
					<input type="submit" value="Join"/>
					<br/><br/>
					Already a member? <a href="SignIn.html">Sign in</a>
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
</form>