<?php
	session_start();
?>
<?php 
	include("../../service/gig_service(robi).php");
?>
<?php
?>
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
						<tr>
							<form method="POST"><center>
							<td width="30" ><a href="../Categories/programing.php"><img src="../image/image.png" width="150"/></a></td>
							<td><input type="text" name="search" placeholder="Search.." size="70" height="20"><button>Search</button></td>
							<?php
								if(isset($_SESSION['username']))
								{
									echo "<td align='right'>
									<a href='logout_handler.php'>LogOut</a>
									</font>
									</td>
									<td width='5'><a href='../User/profile.php'><img src='../image/b.png' width='50'></a></td>";
								}
								else
								{
									echo "<td align='right>
									 <font size='4'><a href='../SignIn.php'>Sign In</a>&nbsp;<a href='../SignUp1.php'>Sign Up</a>
									 </font>
									 </td>";
								}
								?>
							</form>
					</tr>
					</tr>
				</table>		
			</td>	
		</tr>
		<tr>
			<td><hr/></td>
		</tr>		
	</table>
		
		<div class="topnav" id="myTopnav" align="center">
		  <a href="Graphics.php">Graphics & Design&nbsp;</a>
		  <a href="Digital.php">Digital Marketing&nbsp;</a>
		  <a href="Writing.php">Writing & Translation&nbsp;</a>
		  <a >Video & Animation&nbsp;</a>
		  <a href="Business.php">Business</a>
		  <a href="Programing.php">Programming & Tech</a>
		  <a href="Music.php">Music</a>
		  <br/> <br/>
		</div>
		
		<table align="center">
				
		<?php
			
			$result = retreiveProgrammingAndTechGig('Video & Animation');
			if($_SERVER['REQUEST_METHOD']=="POST")
			{
				$value=$_POST['search'];
				$result=searchReturnFromDb($value,'Video & Animation');
				//echo "</br></br>";
				 //var_dump($result);
			}
			
			//var_dump($result);
			//echo "<script>alert('Programming')</script>";
			$programmingAndTechGig = array();
			//echo "<script>alert('Programming1')</script>";
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i)
			{
				$countGigs=0;
				
				//echo "<script>alert('Programming2')</script>";
				$programmingAndTechGig[$i] = $row;
				$imgExt=$programmingAndTechGig[$i]['imgExt'];
				$username=$programmingAndTechGig[$i]['uName'];	
				$gigTitle=$programmingAndTechGig[$i]['gigTitle'];
				$gigPrice=$programmingAndTechGig[$i]['price'];
				$gigOrderCount=$programmingAndTechGig[$i]['orderCount'];
				$gigId=$programmingAndTechGig[$i]['gigId'];
				
				//userImage
				
				$userImageResult= retreiveUserImage($username);	
				for($j=0; $row = mysqli_fetch_assoc($userImageResult); ++$j)
				{	
					$userImage=$row['imageExt'];
				}
				
				//Level
				
				$userLevelResult= retreiveUserLevel($username);
				for($j=0; $row = mysqli_fetch_assoc($userLevelResult); ++$j)
				{	
					$userLevel=$row['expertLevel'];
				}
				
				
				if($i%4==0)
				{   
					$elementCountInSingleRow=1;
					echo "<tr>";
				}
				
				echo    "<td width='300'><a href='../gig/proceedToBuy.php?gigId=".$gigId."'><img src='../GigImage/".$imgExt."' height='150'  width='300'></a></br>
						<img src='../uploads/".$userImage."' width='50' height='50'><br/>".
						$username."<br/>Level ".$userLevel." Seller<br/>".$gigTitle."<br/><b>Total Ordered: ".$gigOrderCount."</b><br/>Price: ".$gigPrice."<br/><br/></td>";
						
				if($elementCountInSingleRow==4)
				{
					echo "</tr>";
				}	
				$elementCountInSingleRow++;
				$countGigs++;
			}
		?>
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
						<td> <a href="Graphics.php">Graphics & Design</a></td>
						<td>Careers</td>
						<td>Blog</td>
						<td>Contact Support</td>
						<td> <a href="www.google.com">Google</a></td>
					</tr>
					<tr>
						<td><a href="Digital.php">Digital Marketing</a></td>
						<td>Press & News</td>
						<td>Forum</td>
						<td>Help & Education</td>
						<td>  <a href="www.Twitter.com">Twitter</a></td>
					
					</tr>
					<tr>
						<td><a href="Writing.php">Writing & Translation</a></td>
						<td>Partnerships</td>
						<td>Podcast</td>
						<td>Trust & Safety</td>
						<td> <a href="www.Youtube.com">Youtube</a></td>
					
					</tr>
					<tr>
						<td><a href="Video.php"> Video & Animation</a></td>
						<td>Privacy Policy</td>
						<td>Affiliates</td>
						<td>Selling on Freelance</td>
						<td> <a href="www.facebook.com">Facebook</a></td>
					
					</tr>
					<tr>
						<td><a href="Music.php"> Music & Audio</a></td>
						<td>Terms of Service</td>
						<td></td>
						<td>Buying on freelance</td>
						<td></td>
					</tr>
					<tr>
						<td> <a href="Programing.php">Programming & Tech</a></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><a href="Business.php">Business</a></td>
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