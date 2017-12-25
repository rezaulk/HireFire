<script>
	//isFormValid=true;
	function validate()
	{
		var isValid=true;
		if(!schoolValidate())
		{
			isValid=false;
		}
		
		if(!fromValidate())
		{
			isValid=false;
		}
		
		if(!toValidate())
		{
			isValid=false;
		}
		
		if(!degreeValidate())
		{
			isValid=false;
		}
		degreeValidate
		return isValid;
	}
	
	
	function schoolValidate()
	{	
		var isValid=true;
		var school = document.getElementById("school").value;
		
		var schoolErrorMassage=document.getElementById("schoolErrorMassage");
		schoolErrorMassage.style.color="red";
		if(school=="")
		{
			schoolErrorMassage.innerHTML="*School name can not be empty";
			isValid=false;
		}
		else
		{
			var i=0;
			for(i;i<school.length;i++)
			{	
				if(!isNaN(school[i]))
				{
					schoolErrorMassage.innerHTML="*School name only contain characters";
					isValid=false;
					break;
				}
			}
			if(i==school.length)
			{
				schoolErrorMassage.innerHTML="";
			}
		}
		return isValid;
		
	}
	
	
	function fromValidate()
	{	
		var isValid=true;
		var fromErrorMassage=document.getElementById("fromErrorMassage");
		fromErrorMassage.style.color="red";
		if(document.getElementById("from").value == "")
		{
			fromErrorMassage.innerHTML="*Must be select Date";
			isValid=false;
		}
		
		return isValid;
		
	}
	
	function toValidate()
	{	
		var isValid=true;
		var toErrorMassage=document.getElementById("toErrorMassage");
		toErrorMassage.style.color="red";
		if(document.getElementById("to").value == "")
		{
			toErrorMassage.innerHTML="*Must be select Date";
			isValid=false;
		}
		
		return isValid;
		
	}	
	
	function emptyFromErrorMassage()
	{
		var fromErrorMassage= document.getElementById("fromErrorMassage");
		if(document.getElementById("from").value != "")
		{
			fromErrorMassage.innerHTML="";
		}
		else
		{
			fromErrorMassage.innerHTML="*Must be select Date";
		}
	}
	
	function emptyToErrorMassage()
	{
		var toErrorMassage= document.getElementById("toErrorMassage");
		if(document.getElementById("to").value != "")
		{
			toErrorMassage.innerHTML="";
		}
		else
		{
			toErrorMassage.innerHTML="*Must be select Date";
		}
	}
	
	function degreeValidate()
	{
		var isValid=true;
		var degreeErrorMassage= document.getElementById("degreeErrorMassage");
		degreeErrorMassage.style.color="red";
		if(document.getElementById("degree").value == "")
		{
			isValid=false;
			degreeErrorMassage.innerHTML="*Degree can not be empty";
		}
		else
		{
			degreeErrorMassage.innerHTML="";
		}
		
		return isValid;
	}
</script>



<?php require_once "../service/validation_service.php"; ?>

<?php
	
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		
		$isValid=true;
		$school=$_POST['school'];
		$from=$_POST['from'];
		$to=$_POST['to'];
		$degree=$_POST['degree'];
		//var_dump($_REQUEST['skill']);
		
		
        if(empty($school))
		{
			echo "<script>alert('school');</script>"; 
            $isValid = false;
        }
        else if(isValidSchool($school)==false){
			echo "<script>alert('acc1');</script>"; 
            $isValid = false;
        }
		else if(empty($from))
		{
			echo "<script>alert('from');</script>"; 
            $isValid = false;
        }
        
		else if(empty($to))
		{
			echo "<script>alert('to');</script>"; 
            $isValid = false;
        }
		
		 if(empty($degree))
		{
			echo "<script>alert('degree');</script>"; 
            $isValid = false;
        }
		
		if($isValid==false)
		{
			echo "<script>alert('Maybe javascript file has been changed. Please reload you browser');</script>"; 
		}
		else
		{
			header('Location: CreateProfile3.php');
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
					
					<legend><h2>Add Education</h2></legend>
					<b>school</b><br/>
					<input title="School Name" name="school" size="50" id="school" onchange="schoolValidate()"/></br> &nbsp;&nbsp;<span id="schoolErrorMassage"></span>
					</br></br>
					<b>Date Attended</b></br></br>
					From
					<input type="date" placeholder="From" name="from" id="from" onchange="emptyFromErrorMassage()"/>&nbsp;&nbsp;<span id="fromErrorMassage"></span>
					<br/><br/>
					To&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="date" placeholder="To" name="to" id="to" onchange="emptyToErrorMassage()"/>&nbsp;&nbsp;<span id="toErrorMassage"></span>
					</br></br>
					<b>Degree</b><br/><br/>
					<input name="degree" size="50"/ onchange="degreeValidate()" id="degree"><br/>&nbsp;&nbsp;<span id="degreeErrorMassage"></span>
					</br>
					<b>Area of Study(optional)</b><br/><br/>
					<input name="AoS" size="50"/><br/>
					</br>
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
	</table>