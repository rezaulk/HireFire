<?php
	session_start();
?>
<?php 
	include("../../service/gig_service(robi).php");		
?>
<?php
	$gigId=$_REQUEST['gigId'];
	//var_dump($GLOBALS);
	if(!isset($_SESSION['username']))
	{
		var_dump($_SESSION);
		//header("location: ../SignIn.php?gigId=$gigId");
		
		echo "<script>
                        //alert('Record Added');
						document.location='../SignIn.php?gigId=$gigId';
                    </script>";
		
	
	}
	
	//echo "<script> alert('out1');</script>";
	$result = retreiveProgrammingAndTechSingleGig($gigId);

	$programmingAndTechGig = array();
	//echo "<script> alert('out');</script>";
	//var_dump($result);
	for($i=0; $row = mysqli_fetch_assoc($result); ++$i)
	{
		
		$programmingAndTechGig[$i] = $row;
		$imgExt=$programmingAndTechGig[$i]['imgExt'];
		//echo "<br/><br/>";
		//echo "<script> alert('in');</script>";
		//var_dump($imgExt);
		$username=$programmingAndTechGig[$i]['uName'];	
		$gigTitle=$programmingAndTechGig[$i]['gigTitle'];
		$gigPrice=$programmingAndTechGig[$i]['price'];
		$gigOrderCount=$programmingAndTechGig[$i]['orderCount'];
		$gigDescription=$programmingAndTechGig[$i]['gDescription'];
		//$gigId=$programmingAndTechGig[$i]['gigId'];
		$names= retreiveName($username);	
		for($j=0; $row = mysqli_fetch_assoc($names); ++$j)
		{	
			$name=$row['name'];
		}
		$sellerDescriptions= retreiveSellerDescription($username);	
		for($j=0; $row = mysqli_fetch_assoc($sellerDescriptions); ++$j)
		{	
			$sellerDescription=$row['description'];
		}	
			
		$userImageResult= retreiveUserImage($username);	
		for($j=0; $row = mysqli_fetch_assoc($userImageResult); ++$j)
		{	
			$userImage=$row['imageExt'];
		}
	}
?>

<html>
    <head>
	    <title>HireFire</title>
	</head>
	<body>
		<table border="0"  height="100%" width="100%">
			<tr  height="15%">
			    <td  width="40%">		   
					<table  width="100%" border="0">
						<tr>
							<td><a href="../User/main.html"><img src="../image/image.png" width="150"></a></td>
							<td align="right">
							<font size="4"><a href="../User/inbox.html">Messages&nbsp;</a>
							<a href="../User/Orders.html">Orders&nbsp</a>
							<a href="../User/Postrequest.html">Postrequest&nbsp;</a>
							<a href="../User/dashboard.html">Dashboard&nbsp;</a>
							<a href="PublicHome.html">LogOut</a></font>
							</td>
							<td width="5"><a href="../User/profile.html"><img src="../image/b.png" width="50"></a></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td><hr/></td>
			</tr>
			<tr height="70%">
				<td>
					<table border="0">
					    <tr>
						    <td width="10%"></td>
						    <td width="40%">
								<table border="0" height="100%" width="100%">							

									<tr>
									
									    <td>
										  
										  <a><b><?php echo $gigTitle; ?></b></a><hr>
										  <br/>
										   <a ><img src="../gigImage/<?php echo $imgExt;?>" height="300" width="500" ></a>
										   
										  <br/>
										  <hr>
										  
										  <a><b>About this gig</b></a>
										  <br/>
										  <br/>
										  <a><?php echo $gigDescription ?>
										  <br/><br/><br/>
										  <a><b>Reviews</b></a>
										</td>							
									</tr>
									<tr>
									   <td><br/>
									    <a href="profile.html"><img src="../image/user-avatar.jpg" width="50">Jon kin</a></br>
									   <a>The whole experience was great. I liked the sellers work. He listened to my requests 
									   and gave me a logo that I love. It was easy and very quickly.</a>
									   <br/><br/><br/>
									   <a href="profile.html"><img src="../image/user-avatar.jpg" width="50">Leo king</a></br>
									   <a>The whole experience was great. I liked the sellers work. He listened to my requests 
									   and gave me a logo that I love. It was easy and very quickly.</a>
									   </td>
									   
									
									
									</tr>
									
									
								</table>
						    </td>
						    <td width="1%"><hr width="1" size="1000"></td>
						    <td width="39%">
							    <table border="0" height="100%" width="100%" cellspacing="20">							
									<tr height="70%">
										<td>
										   <a align="center"><button type="submit"><a href="../User/Order_confirm.php?gigId=<?php echo $gigId;?>">Proceed To Order ( TK. <?php echo $gigPrice;?>)</a></button></a>
										   
										</td>
									</tr>
								    <tr height="20%"><td height="20%"></td></tr>
								    <tr height="20%">
									  <td align="center">
										<a><img src="../uploads/<?php echo $userImage;?>" height="150" ></a>
										<br/>
										<a>&nbsp;&nbsp;<?php echo $name; ?></a>
										<hr>
										<button><font size="3"><a href="../User/contact_seller.html">Contact Me</a></font></button>
									   </td>
								    </tr>
								    <tr height="20%">
									   <td>								 
											<hr>
											<br/>
											<?php echo "<b>Seller Description</b> <br/><br/>".$gigDescription; ?>
											<hr>
									    </td>
								    </tr>
								</table>
						    </td>
					    </tr>
					</table>
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
			
			
			<tr height="30%">
					<td><hr><p align="center">COPYRIGHT @ 2017</p></td>	  
			</tr>
		</table>
	</body>
</html>