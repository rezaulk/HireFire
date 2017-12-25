<script>
	
	function validate()
	{
		var isValid=true;
		if(!workingHourValidate())
		{
			isValid=false;
		}
		
		if(!countryValidate())
		{
			isValid=false;
		}
		if(!addressValidate())
		{
			isValid=false;
		}
		
		if(!postalCodeValidate())
		{
			isValid=false;
		}
		
		if(!numberValidate())
		{
			isValid=false;
		}
		
		return isValid;
	}
	
	
	function workingHourValidate()
	{
		var isValid=true;
		var workingHour = document.getElementById("workingHour").value;
		var workingHourErrorMassage = document.getElementById("workingHourErrorMassage");
		workingHourErrorMassage.style.color="red";
		if(workingHour=="notSelected")
		{
			isValid=false;
			workingHourErrorMassage.innerHTML="*Must be select one";
		}
		else
		{
			workingHourErrorMassage.innerHTML="";
		}
		return isValid;
		
	}
	
	
	function countryValidate()
	{
		var isValid=true;
		var country = document.getElementById("country").value;
		var countryErrorMassage = document.getElementById("countryErrorMassage");
		countryErrorMassage.style.color="red";
		if(country=="notSelected")
		{
			isValid=false;
			countryErrorMassage.innerHTML="*Must be select one";
		}
		else
		{
			countryErrorMassage.innerHTML="";
		}
		return isValid;
		
	}
	
	function addressValidate()
	{
		var isValid=true;
		var addressErrorMassage= document.getElementById("addressErrorMassage");
		addressErrorMassage.style.color="red";
		if(document.getElementById("address").value == "")
		{
			isValid=false;
			addressErrorMassage.innerHTML="*Degree can not be empty";
		}
		else
		{
			addressErrorMassage.innerHTML="";
		}
		
		return isValid;
	}
	
	
	function postalCodeValidate()
	{	
		var isValid=true;
		var postalCode = document.getElementById("postalCode").value;
		
		var postalCodeErrorMassage=document.getElementById("postalCodeErrorMassage");
		postalCodeErrorMassage.style.color="red";
		if(postalCode=="")
		{
			postalCodeErrorMassage.innerHTML="*Postal code Cannot be empty";
			isValid=false;
		}
		else if(isNaN(postalCode))
		{
			postalCodeErrorMassage.innerHTML="*Postal code only contains digit";
			isValid=false;
		}
		else if(postalCode.length<4)
		{
			postalCodeErrorMassage.innerHTML="*Postal code contains minimum four digit";
			isValid=false;
		}
		else
		{
			postalCodeErrorMassage.innerHTML="";
		}
		return isValid;
		
	}
	
	function numberValidate()
	{	
		var isValid=true;
		var number = document.getElementById("number").value;
		
		var numberErrorMassage=document.getElementById("numberErrorMassage");
		numberErrorMassage.style.color="red";
		if(number=="")
		{
			numberErrorMassage.innerHTML="*Phone Number Cannot be empty";
			isValid=false;
		}
		else if(isNaN(number))
		{
			numberErrorMassage.innerHTML="*Phone Number only contains digit";
			isValid=false;
		}
		else if(number.length!=11)
		{
			numberErrorMassage.innerHTML="*Phone Number must contain 11 digits";
			isValid=false;
		}
		else
		{
			numberErrorMassage.innerHTML="";
		}
		return isValid;
		
	}
	
</script>





<?php require_once "../service/validation_service.php"; ?>

<?php
	
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$isValid=true;
		$workingHour=$_POST['workingHour'];
		$country=$_POST['country'];
		$address=$_POST['address'];
		$postalCode=$_POST['postalCode'];
		$number=$_POST['number'];
		//var_dump($_REQUEST['skill']);
		
		if($workingHour=="Please select")
		{
		echo "<script>alert('work');</script>"; 
			$isValid=false;
		}
		else if($country=="Please select")
		{
			echo "<script>alert('country');</script>"; 
			$isValid=false;
		}
        else if(empty($address))
		{
			echo "<script>alert('address');</script>"; 
            $isValid = false;
        }
		else if(empty($postalCode))
		{
			echo "<script>alert('postalCode');</script>"; 
            $isValid = false;
        }
        else if(isValidPostalCode($postalCode)==false){
			echo "<script>alert('acc1');</script>"; 
            $isValid = false;
        }
		else if(empty($number))
		{
			echo "<script>alert('postalCode');</script>"; 
            $isValid = false;
        }
		else if(isValidNumber($number)==false){
			echo "<script>alert('acc1');</script>"; 
            $isValid = false;
        }
		
		if($isValid==false)
		{
			echo "<script>alert('Maybe javascript file has been changed. Please reload you browser');</script>"; 
		}
		else
		{
			header('Location: User/profile.php');
		}
		
	}
		
?>


<table  width="100%" border="0">
	<tr>

		<td><a href="PublicHome.html"><img src="image/image.png" width="150"/></a></td>
		<td>
		</td>
		<td align="right">
			
		</td>
		<td></td>
	</tr>		
</table>

<form method="POST" onsubmit="return validate()">
<table width="100%" >
	<tr>
		<td width="30%"></td>
		<td width="40%">
			<form >
				<fieldset >
					
					<legend><h2>Add your availability and location</h2></legend>
					<b>How many  hours availabile do you have available for work?</b><br/><br/>
					<select name="workingHour" id="workingHour" onchange="workingHourValidate()">
						<option value="notSelected">Please select</option>
						<option value="hour8">8 hour</option>
						<option value="hour16">16 hour</option>
						<option value="hour24">24 hour</option>
						<option value="hour32">32 hour</option>
						<option value="hour40">40 hour</option>
					</select>&nbsp;&nbsp;<span id="workingHourErrorMassage"></span>
					</br></br>
					<b>Country</b></br></br>
					<select name="country" id="country" onchange="countryValidate()">
						<option value="notSelected">Please select</option>
						<option value="bangladesh">Bangladesh</option>
						<option value="french">Franch</option>
						<option value="india">India</option>
						<option value="pakistan">Pakistan</option>
						<option value="span">Span</option>
						<option value="usa">Usa</option>
						
					</select>&nbsp;&nbsp;<span id="countryErrorMassage"></span>
					</br></br>
					<b>Address</b><br/><br/>
					<input name="address" size="70" id="address" onchange="addressValidate()"/><br/>&nbsp;&nbsp;<span id="addressErrorMassage"></span>
					</br>
					<b>Postal Code</b><br/><br/>
					<input name="postalCode" size="70" id="postalCode" placeholder="Digit and minimum 4 digit" onchange="postalCodeValidate()"/><br/></select>&nbsp;&nbsp;<span id="postalCodeErrorMassage"></span>
					</br>
					<b>Phone Number</b><br/><br/>
					<input name="number" size="70" id="number" placeholder="Digit and must be 11 digit" onchange="numberValidate()"/>&nbsp;&nbsp;<span id="numberErrorMassage"></span>
					<br/>
					<hr>
		
					<input type="submit" value="Save and Continue"/>
					
				</fieldset>

			</form>
		</td>
		<td width="30%"></td>
	</tr>
</table>
</form>


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
	</table>\