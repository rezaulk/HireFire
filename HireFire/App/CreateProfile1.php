<?php session_start();
	if(empty($_SESSION['username']))
		{
			//echo "<script>alert('Please Login first');document.location='../SignUp1.php'</script>";
			header("location:SignIn.php");
		}
?>
<?php require_once "../service/validation_service(robi).php";  ?>
<?php
	
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		
		
		$bankName=$_POST['bankName'];
		$accountNo=$_POST['accountNo'];
		//var_dump($_REQUEST['skill']);
		
		$isValid = true;
		if(!(isset($_REQUEST['bankName'])))
		{

			$isValid=false;
		}
        else if(empty($accountNo)){

            $isValid = false;
        }
        else if(isValidAccountNo($accountNo)==false){

            $isValid = false;
        }
		else if(isset($_REQUEST['skill'])==false){
            $isValid = false;
        }
        
		if($isValid==false)
		{
			echo "<script>alert('Maybe javascript file has been changed. Please reload you browser');</script>"; 
		}
		else
		{
			$_SESSION['bankName']=$bankName;
			$_SESSION['accountNo']=$accountNo;
			$_SESSION['skill']=$_REQUEST['skill'];
			$_SESSION['description']=$_REQUEST['description'];
			//var_dump($_SESSION);
			header('Location: CreateProfile2.php');
		}
		
	}
		
	
?>

<script>
	//isFormValid=true;
	function validate()
	{
		var isValid=true;
		var bankName1 = document.getElementById("bank1");
		var bankName2 = document.getElementById("bank2");
		
		if((bankName1.checked||bankName2.checked)==false)
		{
			var bankErrorMassage=document.getElementById("bankErrorMassage");
			bankErrorMassage.innerHTML="*Select your Bank";
			bankErrorMassage.style.color="red";
			isValid=false;
		}
		
		if(!validateAccountNo())
		{
			isValid=false;
		}
		
		
		//var isChecked = $("input[type=checkbox]"):is(":checked");
		var skills=document.getElementsByTagName("input");
		var checked=false;
		for(var i=0; i < skills.length; i++)
		{
			if(skills[i].type=="checkbox")
			{
				if(skills[i].checked)
				checked = true;
			}	
			
		}
		if(!checked)
		{
			isValid=false;
			var skillsErrorMassage=document.getElementById("skillsErrorMassage");
			skillsErrorMassage.innerHTML="*Select minimum one";
			skillsErrorMassage.style.color="red";
		}
		return isValid;
	}
	
	
	function validateAccountNo()
	{	
		var isValid=true;
		var accountNo = document.getElementById("accountNo").value;
		
		var accountErrorMassage=document.getElementById("accountErrorMassage");
		accountErrorMassage.style.color="red";
		if(accountNo=="")
		{
			accountErrorMassage.innerHTML="*Account Number Cannot be empty";
			isValid=false;
		}
		else if(isNaN(accountNo))
		{
			accountErrorMassage.innerHTML="*Account Number only contains digit";
			isValid=false;
		}
		else
		{
			accountErrorMassage.innerHTML="";
		}
		return isValid;
		
	}
	
	function emptyBankErrorMassage()
	{
		var bankErrorMassage= document.getElementById("bankErrorMassage");
		bankErrorMassage.innerHTML="";
	}
	
	function emptySkillsErrorMassage()
	{
		var skillsErrorMassage= document.getElementById("skillsErrorMassage");
		skillsErrorMassage.innerHTML="";
	}
	
	
</script>

		


<table  width="100%" border="0">
	<tr>

		<td><a href="PublicHome.html"><img src="image/image.png" width="150"/></a></td>
		<td><
		</td>
		<td align="right">
			
		</td>
		<td></td>
	</tr>		
</table>

<form onsubmit="return validate()" method="POST"><center>
<table width="100%" >
	<tr>
		<td width="15%"></td>
		<td width="70%">
			<fieldset><legend><h2>Create Your Profile</h2></legend>
				<table width="100%">
					<tr height="40">
					<td>Select Your Bank</td>
						<td>
							<input type="radio" name="bankName" value="bkash" id="bank1" onclick="emptyBankErrorMassage()"/>Bkash
							<input type="radio" name="bankName" value="rocket" id="bank2" onclick="emptyBankErrorMassage()"/>Rocket&nbsp;&nbsp;<span id="bankErrorMassage"></span>
						</td>
						
					</tr>
					
					<tr height="40">
						<td>Account number</td>
						<td><input placeholder="Enter Account number" name="accountNo" id="accountNo" onchange="validateAccountNo()"/>&nbsp;&nbsp;<span id="accountErrorMassage"></span></td>
					</tr>
					
					<tr height="40">
						<td>Skills</td>
						<td>
							<input type="checkbox" name="skill[]" value="Desktop Softwere Development" onclick="emptySkillsErrorMassage()"/>Desktop Softwere Development
							<input type="checkbox" name="skill[]" value="Ecommerce Development" onclick="emptySkillsErrorMassage()"/>Ecommerce Development
							<input type="checkbox" name="skill[]" value="Game Development" onclick="emptySkillsErrorMassage()"/>Game Development
							</br>
							<input type="checkbox" name="skill[]" value="Mobile Development" onclick="emptySkillsErrorMassage()"/>Mobile Development	
							<input type="checkbox" name="skill[]" value="Product Management" onclick="emptySkillsErrorMassage()"/>Product Management
							<input type="checkbox" name="skill[]" value="QA & Testing" onclick="emptySkillsErrorMassage()"/>QA & Testing
							</br>
							<input type="checkbox" name="skill[]" value="Script and Utilities" onclick="emptySkillsErrorMassage()"/>Script and Utilities
							<input type="checkbox" name="skill[]" value="Web Development" onclick="emptySkillsErrorMassage()"/>Web Development
							<input type="checkbox" name="skill[]" value="Other-Softwere Development" onclick="emptySkillsErrorMassage()"/>Other-Softwere Development &nbsp;&nbsp;<span id="skillsErrorMassage"></span>			
						</td>
					</tr >
					
					
					<tr height="40">
						<td>Description(optional)</td>
						<td><input name="description"/></td>
					
					<tr height="40">
					<td></td>
						<td>
						</br></br>
							<input type="Submit" value="Save and Continue"/>
						</td>
					</tr>
				</table>	
			</fieldset>			
		</td>
		<td width="15%"></td>
	</tr>
</table>
</center></form>


<table border="0" width="100%">
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
	