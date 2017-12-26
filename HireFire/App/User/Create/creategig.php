<?php
	session_start();
	 include("../../../service/person_service(reza).php");
	 //require_once "../../../service/TANIM_service.php"
?>

<?php
	$maxID=maxGigId();
	var_dump($maxID);
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$gigtitle=$_POST['gigtitle'];
		$gigprice=$_POST['gigprice'];
		$gigdescription=$_POST['gigdescription'];
		$category=$_POST['category'];
		
		$isValid=true;
		if($gigdescription=="")
		{
			///echo "<script>alert('gigdescription');</script>";
			$isValid=false;
		}
		if($gigprice=="")
		{
			//echo "<script>alert('price');</script>";
			$isValid=false;
		}
		if($category=="notSelected")
		{
			//echo "<script>alert('category');</script>";
			$isValid=false;
		}
		if($gigtitle=="")
		{
			//echo "<script>alert('gigTitle');</script>";
			$isValid=false;
		}
		
		
		if($isValid==false)
		{
			echo "<script>alert('Maybe javascript file has been changed. Please reload you browser');</script>"; 
		}
		else
		{
			$person['gigtitle']=$gigtitle;
			$person['gigprice']=$gigprice;
			$person['gigdescription']=$gigdescription;
			$person['category']=$category;
			if(addGig($person))
			{
				//var_dump(addGig($person));
				//echo "<script>alert('sdsfdf');document.location='../profile.php'";
				 header("location: ../profile.php");	
			}
           		
			
		}	
	}
		
?>


<script>

function validate()
	{
		var isValid=true;
		if(!validateGigTitle())
		{
		   isValid=false;
		}
		if(!validateGigDescription())
		{
		   isValid=false;
		}
		if(!validateGigPrice())
		{
		   isValid=false;
		}
		 if(!validateCategory())
		{ 
		   isValid=false;
		}
		else
		{
		   isValid=true;
		}
		
		return isValid;
	}
	
	function validateGigPrice()
	{	
		var isValid=true;
		var gigprice = document.getElementById("gigprice").value;
		
		var gigpriceErrorMassage=document.getElementById("gigpriceErrorMassage");
		gigpriceErrorMassage.style.color="red";
		if(gigprice=="")
		{
			gigpriceErrorMassage.innerHTML="*gigprice Cannot be empty";
			isValid=false;
		}
		else if(isNaN(gigprice))
		{
			gigpriceErrorMassage.innerHTML="*gigprice inValid";
			isValid=false;
		}
		else
		{
			gigpriceErrorMassage.innerHTML="";
		}
		return isValid;
		
	}
	
	
	function validateCategory()
	{
		var isValid=true;
		var category = document.getElementById("category").value;
		var categoryErrorMassage = document.getElementById("categoryErrorMassage");
		categoryErrorMassage.style.color="red";
		if(category=="Please select")
		{
			
			categoryErrorMassage.innerHTML="*Must be select one";
			isValid=false;
		}
		else
		{
			categoryErrorMassage.innerHTML="";
		}
		return isValid;
		
	}

function stringCheck()
{
    if (!/^[a-zA-Z ]*$/g.test(document.getElementById("gigtitle").value)) 
	{
        return false;
    }
}
function validateGigTitle()
	{	
		var isValid=true;
		var gigtitle = document.getElementById("gigtitle").value;
		
		var gigTitleErrorMassage=document.getElementById("gigTitleErrorMassage");
		gigTitleErrorMassage.style.color="red";
		if(gigtitle=="")
		{
			gigTitleErrorMassage.innerHTML="*GigTitle Cannot be empty";
			isValid=false;
		}
		else if(stringCheck()==false)
		{
			gigTitleErrorMassage.innerHTML="*Gig title only contains character";
			isValid=false;
		}
		
		else
		{
			if(gigtitle.match(/^\s+$/) === null) 
			{
				  gigTitleErrorMassage.innerHTML="";
			
			}
			else 
			{
					gigTitleErrorMassage.innerHTML="*GigTitle can,t contains Only space";
			}
		}
		return isValid;
		
	}
	
	function validateGigDescription()
	{	
		var isValid=true;
		var gigdescription = document.getElementById("gigdescription").value;
		
		var gigdescriptionErrorMassage=document.getElementById("gigdescriptionErrorMassage");
		gigdescriptionErrorMassage.style.color="red";
		if(gigdescription=="")
		{
			gigdescriptionErrorMassage.innerHTML="*Gig Description Cannot be empty";
			isValid=false;
		}
		else if(stringCheck()==false)
		{
			gigdescriptionErrorMassage.innerHTML="*Gig Description  only contains character";
			isValid=false;
		}
		
		else
		{
			if(gigdescription.match(/^\s+$/) === null) 
			{
			   if(gigdescription.length<20)
				{
					gigdescriptionErrorMassage.innerHTML="*Gig Description Title Length atleast 20 character.";
				 
				}
				else if(gigdescription.length>150)
				{
					gigdescriptionErrorMassage.innerHTML="*Gig Description Title Length max 150 character.";
				}
				else
				{
				   gigdescriptionErrorMassage.innerHTML="";
				}
				
			}
			else 
			{
					gigdescriptionErrorMassage.innerHTML="*Gig Description can,t contains Only space";
			}
		}
		return isValid;
		
	}

</script>


<html>
    <head>
	    <title>HireFire</title>
	</head>
	<body>
		<table border="0"  height="100%" width="100%">
			<tr  height="10%">
			    <td  width="50%" colspan="2">		   
					<table  width="100%" border="0">
						<tr width="100%">
							<td><a href="../main.html"><img src="../../image/image.png" width="150"></a></td>
							<td></td>
							<td align="right">
							<font size="4"><a href="../inbox.html">Messages&nbsp;</a>
								<a href="../Orders.html">Orders&nbsp</a>
								<a href="../Postrequest.html">Postrequest&nbsp;</a>
								<a href="../dashboard.html">Dashboard&nbsp;</a>
								<a href="../../PublicHome.html">LogOut</a>
							</font>
							</td>
							<td align="center" width="5%"><a href="../profile.html"><img src="../../image/b.png" width="50"></a></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr height="5%">
				<td colspan="2"><hr/></td>
			</tr>
			<tr height="65%">
				<td width="25%"></td>
				<td>
				<form method="POST" onsubmit="return validate()">
					<table width="100%" cellspacing="15" border="0">
						<tr>
							<td width="10%">Gig Title: </td>
							<td width="90%"><input name="gigtitle" placeholder="Enter Gig Title  " id="gigtitle"  onchange="validateGigTitle()" size="50"/>&nbsp;&nbsp;<span id="gigTitleErrorMassage"></span></td>
						</tr>
						<tr>
							<td>
								Category:
							</td>
							<td>
								<select name="category" id="category" onclick="validateCategory()" >
									<option value="Please select">Please select</option>
									<option value="Graphics & Design">Graphics & Design</option>
									<option value="Digital Marketing">Digital Marketing</option>
									<option value="Writing & Translation">Writing & Translation</option>
									<option value="Music & Audio">Music & Audio</option>
									<option value="Programming & Tech">Programming & Tech</option>
									<option value="Business">Business</option>
									<option value="Video & Animation">Video & Animation</option>
								</select>&nbsp;&nbsp;<span id="categoryErrorMassage"></span>
							</td>
						</tr>
						<tr>
							<td>Price:</td>	
							<td><table ><tr><td><input placeholder="Enter Gig Price " name="gigprice" id="gigprice"  onchange="validateGigPrice()"/></td><td><img src="../../image/bdtk.jpg" width="50"><br/><span id="gigpriceErrorMassage"></span></td></tr></table></td>
						</tr>	
						<tr>
							<td>Description:</td>
							<td><textarea rows="10" cols="35" name="gigdescription" placeholder="Enter Gig Description max 120 character " id="gigdescription"  onchange="validateGigDescription()"></textarea><br/><span id="gigdescriptionErrorMassage"></span></td>
						</tr>
						<tr>
							<td>Image:</td> 
							<td><input type="file"/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit"/></td>
						</tr>
					</table>
				</form>
					
					
				</td>
			</tr >
			
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
					</table>
					
			</tr>
		</table>
    </body>
</html>		
					