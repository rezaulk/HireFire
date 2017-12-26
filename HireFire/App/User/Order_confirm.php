<?php 
	include("../../service/gig_service(robi).php");
?>



<script>
	
	function validateOrderRequirements()
	{
		var isValid=true;
		var requirements = document.getElementById("requirements").value;
		
		var orderRequirementsErrorMassage=document.getElementById("orderRequirementsErrorMassage");
		orderRequirementsErrorMassage.style.color="red";
		
		var j=0;
		for(var i=0;i<requirements.length;i++)
		{	
			if(requirements[i]==" ")
			{
				j++;
			}
		}
		if(requirements=="")
		{
			orderRequirementsErrorMassage.innerHTML="*Requirements can not be empty";
			isValid=false;
		}
		else if(requirements=="Enter text here...")
		{
			orderRequirementsErrorMassage.innerHTML="*Requirements can not be empty";
			isValid=false;
		}
		else if(i==j)
		{
			orderRequirementsErrorMassage.innerHTML="*Requirements can not contains only space";
			isValid=false;
		}
		else
		{
			orderRequirementsErrorMassage.innerHTML="";
		}
	}
	
	function validateDate()
	{
		
		var isValid=true;
		var deadline = document.getElementById("deadline").value;
		var deadlineErrorMassage=document.getElementById("deadlineErrorMassage");
		deadlineErrorMassage.style.color="red";
		if(deadline=="")
		{
			deadlineErrorMassage.innerHTML="*Please Set a Deadline";
			isValid=false;
		}
		else if(Date.parse(deadline) < Date.parse(Date()))
		{
			deadlineErrorMassage.innerHTML="*Please Set a appropiate Deadline";
			isValid=false;
		}
		else
		{
			deadlineErrorMassage.innerHTML="";
		}
	}
	
</script>


<html>
	<head>
		<title>HireFire</title>
	</head>
	
	<body>
		<table border="0" width="100%">
		<tr>
			<td>
				<table  width="100%" border="0">
					<tr>
						<td width="30" ><a href="PublicHome.html"><img src="../image/image.png" width="150"/></a></td>
						<td align="right">
							<font size="4"><a href="inbox.html">Messages&nbsp;</a>
							<a href="Orders.html">Orders&nbsp</a>
							<a href="Postrequest.html">Postrequest&nbsp;</a>
							<a href="dashboard.html">Dashboard&nbsp;</a>
							<a href="../PublicHome.html">LogOut</a></font>
						</td>
						<td width="5"><a href="profile.html"><img src="../image/b.png" width="50"></a></td>
					</tr>
				</table>		
			</td>	
		</tr>
		<tr>
			<td><hr/></td>
		</tr>		
	</table>	
	<table align="center">
	      <tr>
		    <td>
			 <fieldset>
                <legend>Order Details</legend>
					<h3>Order Requirements</h3>
					<textarea rows="8" cols="50" id="requirements" name="requirements" onchange="validateOrderRequirements()">Enter text here...</textarea><br/>
					<span id="orderRequirementsErrorMassage"></span>
					<h3>Deadline</h3>
					<label for="Deadline">Date : </label><input id="deadline" type="date" name="deadline" onchange="validateDate()"/>
					&nbsp;&nbsp;<span id="deadlineErrorMassage"></span>
					<hr/>
					<a href="Place_order.html"><input type="submit" value="Save And Continue"/></a>
                
           </fieldset>	
			</td>
		  </tr>

		 			
	</table>
		
		<table>
			<tr colspan="3" height="20%">
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
						<td> <a href="Graphics.html">Graphics & Design</a></td>
						<td>Careers</td>
						<td>Blog</td>
						<td>Contact Support</td>
						<td> <a href="www.google.com">Google</a></td>
					</tr>
					<tr>
						<td><a href="digital.html">Digital Marketing</a></td>
						<td>Press & News</td>
						<td>Forum</td>
						<td>Help & Education</td>
						<td>  <a href="www.Twitter.com">Twitter</a></td>
					
					</tr>
					<tr>
						<td><a href="writing.html">Writing & Translation</a></td>
						<td>Partnerships</td>
						<td>Podcast</td>
						<td>Trust & Safety</td>
						<td> <a href="www.Youtube.com">Youtube</a></td>
					
					</tr>
					<tr>
						<td><a href="video.html"> Video & Animation</a></td>
						<td>Privacy Policy</td>
						<td>Affiliates</td>
						<td>Selling on Freelance</td>
						<td> <a href="www.facebook.com">Facebook</a></td>
					
					</tr>
					<tr>
						<td><a href="music.html"> Music & Audio</a></td>
						<td>Terms of Service</td>
						<td></td>
						<td>Buying on freelance</td>
						<td></td>
					</tr>
					<tr>
						<td> <a href="programing.html">Programming & Tech</a></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><a href="business.html">Business</a></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
				   </tr>
				</table>   
			</tr> 
		</table>
				   
				
	</body>
	
</html>