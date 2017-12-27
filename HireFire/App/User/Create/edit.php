<?php   session_start(); 
        //require_once "../../../data/person_data_access(reza).php";
        include("../../../service/person_service(reza).php");
		require_once __DIR__."/../../../service/Update_service(tanim).php";
		if(empty($_SESSION['username']))
		{
			//echo "<script>alert('Please Login first');document.location='../SignUp1.php'</script>";
			header("location: ../../SignIn.php");
		}
?>
<?php 
     
     $name = $_SESSION['username'];
	 $persons=accessGig($_SESSION['gigId']);
	 //var_dump($persons);
	 //var_dump($persons[0]['price']);
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$gigtitle=$_POST['gigtitle'];
		$gigprice=$_POST['gigprice'];
		$gigdescription=$_POST['gigdescription'];
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
			//if((($persons[0]['gigTitle'])!=$gigtitle)&& (($persons[0]['price'])!=$gigprice)&&(($persons[0]['gDescription'])!=$gigdescription)){
			$person['gigtitle']=$gigtitle;
			//$person['gigid']=$persons[0]['gigId'];
			$person['gigid']=$_SESSION['gigId'];
			$person['gigprice']=$gigprice;
			$person['gigdescription']=$gigdescription;
			if(editGig($person))
			{
				//var_dump(addGig($person));
				//echo "<script>alert('sdsfdf');document.location='../profile.php'";
				//echo "<script>alert('Data updated');document.location=' ../profile.php'";
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
			//alert(' validateGigTitle');
		   isValid=false;
		}
		if(!validateGigDescription())
		{
			//alert(' validateGigDescription');
		   isValid=false;
		}
		if(!validateGigPrice())
		{
			//alert(' validateGigPrice');
		   isValid=false;
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
		else
		{
			if(gigtitle.match(/^\s+$/) === null) 
			{
				  gigTitleErrorMassage.innerHTML="";
			
			}
			else 
			{
					gigTitleErrorMassage.innerHTML="*GigTitle cannot contains Only space";
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
		else
		{
			if(gigdescription.match(/^\s+$/) === null) 
			{
			   if(gigdescription.length<20)
				{
					gigdescriptionErrorMassage.innerHTML="*Gig Description Title Length atleast 20 character.";
					isValid=false;
				 
				}
				else if(gigdescription.length>150)
				{
					gigdescriptionErrorMassage.innerHTML="*Gig Description Title Length max 150 character.";
					isValid=false;
				}
				else
				{
				   gigdescriptionErrorMassage.innerHTML="";
				}
				
			}
			else 
			{
					gigdescriptionErrorMassage.innerHTML="*Gig Description cann't contains Only space";
					isValid=false;
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
			    <td  width="40%" colspan="2">		   
					<table  width="100%" border="0">
						<tr>
							<td><a href="../main.html"><img src="../../image/image.png" width="150"></a></td>
							<td><input type="text" name="search" placeholder="Search.." size="70" height="20">
							<button>Search</button></td>
							<td align="right">
								<font size="4"><a href="../inbox.html">Messages&nbsp;</a>
									<a href="../Orders.html">Orders&nbsp</a>
									<a href="../Postrequest.html">Postrequest&nbsp;</a>
									<a href="../dashboard.html">Dashboard&nbsp;</a>
									<a href="../../PublicHome.html">LogOut</a>
								</font>
							</td>
							<td><a href="../profile.html"><img src="../../image/b.png" width="50"></a></td>
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
				<form action="#" method="POST" onsubmit="return validate()">
					<table width="100%" cellspacing="15">
						<tr>
							<td width="10%">
								Gig Title: 
							</td>
							<td width="90%">
								<input size="50" name="gigtitle" value="<?php echo $persons[0]['gigTitle'] ?>" id="gigtitle"  onchange="validateGigTitle()"/>&nbsp;&nbsp;<span id="gigTitleErrorMassage"></span></td>
							</td>
						</tr>
						<tr>
							<td>Price:</td>	
							<td><input value="<?php echo $persons[0]['price'] ?>" name="gigprice" id="gigprice"  onchange="validateGigPrice()"/><span id="gigpriceErrorMassage"></span>
						</tr>
						<tr>
							<td>Description:</td>
							<td><textarea rows="10" cols="35" name="gigdescription"  id="gigdescription"  onchange="validateGigDescription()"> <?php echo $persons[0]['gDescription'] ?></textarea><br/><span id="gigdescriptionErrorMassage"></span></td></td>
						</tr>
						<!--
						<tr>
							<td>Image:</td> 
							<td><input type="file"/></td>
						</tr>
						-->
						<tr>
							<td></td>
							<td><input type="submit" value='Update' o/></td>
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
</form>					