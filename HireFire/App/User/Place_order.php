<?php
	session_start();
?>
<?php 
	include("../../service/gig_service(robi).php");
	$gigId=$_SESSION['gigId'];
?>

<?php
	
	
	
?>

<script>

	function validate()
	{
		var isValid=true;
		if(!validateAccountNo())
		{
			isValid=false;
		}
		if(!validatePin())
		{
			isValid=false;
		}
		return isValid;
	}

	function validateAccountNo()
	{	
		var isValid=true;
		var accountNo = document.getElementById("accountNo").value;
		//alert(accountNo[0]);
		var accountErrorMassage=document.getElementById("accountErrorMassage");
		accountErrorMassage.style.color="red";
		for(var i=0;i<accountNo.length;i++)
		{
			if(accountNo[i]==' ')
			{
				//alert(typeof(accountNo));
				accountErrorMassage.innerHTML="*Account Number Cannot contains space";
				isValid=false;
				break;
			}
		}
		
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
		if(isValid==true)
		{
			accountErrorMassage.innerHTML="";
		}
		return isValid;
		
	}
	
	
	function validatePin()
	{	
		var isValid=true;
		var pin = document.getElementById("pin").value;
		//alert(pin[0]);
		var pinErrorMassage=document.getElementById("pinErrorMassage");
		pinErrorMassage.style.color="red";
		for(var i=0;i<pin.length;i++)
		{
			if(pin[i]==' ')
			{
				//alert(typeof(pin));
				pinErrorMassage.innerHTML="*Pin format invalid";
				isValid=false;
				break;
			}
		}
		
		if(pin=="")
		{
			pinErrorMassage.innerHTML="*Insert your Pin";
			isValid=false;
		}
		
		if(isValid==true)
		{
			pinErrorMassage.innerHTML="";
		}
		return isValid;
		
	}
	
</script>

<form action="Place_order.php?" method="POST" onsubmit="return validate()">
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
		  </tr>
		  <tr height="450">
			  <td>
			  <fieldset>
			 
				<table border="0">
				<tr>
					 <td colspan="2"><p align="center"><b>Bkash</b></p></td>
				</tr>
					<tr><td colspan="2">Your Order Summary</td>
				</tr>
				<tr>
					<td>DesCription</td>
					<td>Amount</td>
				
				</tr>
				<tr>
					<td>Logo Design</td>
					<td>$20.00</td>
				</tr>
				<tr>
					<td>Deliver this order in just</td>
					<td>$22.00</td>
				</tr>
				<tr>
					<td>Processing Fee</td>
					<td>$1.50</td>
				</tr>
				<tr>
					<td>Total(+including Tax)</td>
					<td>$43.50</td>
				</tr>
                
          </table>
		  </fieldset>
		  </td>
		    <td>
			 <fieldset>
                <legend>Bkash</legend>
				<img src="../image/b.jpg" width="150"/></a>
				<br/>
				<b>Account Number</b>
					<input onchange="validateAccountNo()" id="accountNo" name="accountNo"/>
					</br><span id="accountErrorMassage"></span></br>
					<b>Pin</b>
					&nbsp;
					<input type="password" title="password" name="pin" onchange="validatePin()" id="pin"/>
					<br/></br><span id="pinErrorMassage"></span></br>
					<hr>
					</br>
					<input type="submit"/>
                
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
	
</html></form>