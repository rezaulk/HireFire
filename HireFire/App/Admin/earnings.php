<?php   session_start(); 
		require_once "../../service/person_service(reza).php";
		if(empty($_SESSION['username']))
		{
			//echo "<script>alert('Please Login first');document.location='../SignUp1.php'</script>";
			header("location:../SignIn.php");
		}
?>
<?php 
     
     $username = $_SESSION['username'];
	 //var_dump($username);
	 //$sellerid=selleridaccess($username);
 
	 //var_dump($languages[1]['language']);
?>






<php>
	<head>
		<title>HireFire</title>
	</head>
	<body>
	    <table border="0" width="100%" height="100%" cellspacing="0">
		    <tr height="8%">
			    <td colspan="3">
				    <table  border="0" width="100%" border="1">
				        <tr>
							<td><a href="../Categories/programing.php"><img src="../image/image.png" width="150"></a></td>
							
								
							</td>
							<td align="right">
								<font size="4"><a href="inbox.php">Messages&nbsp;</a>
								<a href="admin.php">Dashboard&nbsp;</a>
								<a href="logout_handler.php">LogOut</a></font>
							</td>
							<td><a href="admin.php"><img src="../image/b.png" width="50"></a></td>
				        </tr>		
				    </table>		
				</td>
			</tr>
			<tr height="5%">
				<td colspan="3"><hr/></td>
			</tr>
			<tr height="5%">  
			    <td width="25%"></td>
				<td width="30%">	
						<a href="admin.php"> <b>Dashboard|</a>&nbsp;
						  <a href="gigs_admin.php"><b>Gigs|</b></a>&nbsp;
						  <a > <b>Earnings</a>
						  
				</td>
				<td width="45%"></td>
            </tr>					
			<tr height="50%">	
                <td width="10%"></td>			
				<td width="50%" height="50%">
					<a>Active Gigs</a><br/>
					<table width="100%" height="50%" border="1" cellspacing="0">
						    <tr >
							   <td>User</td>
							   <td>Gigs</td>
							   <td>Order</td>
							</tr>
						<?php
							 $persons=allgigaccessToDb();

							$i=0;
							
							foreach ($persons as $value) 
							{
							   $name=$value['uName'];
							   $title=$value['gigTitle'];
							   $Order=$value['orderCount'];
							  
								echo "<tr>";
								
								echo "<td >$name</td><td>$title</td><td>$Order</td>";
								echo "</tr>";
								$i++; 
							}
						?>
					</table>
				</td>
				<td width="40%">
				</td>
			</tr>
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
						<td> <a href="../categories/Graphics.php">Graphics & Design</a></td>
						<td>Careers</td>
						<td>Blog</td>
						<td>Contact Support</td>
						<td> <a href="www.google.com">Google</a></td>
					</tr>
					<tr>
						<td><a href="../categories/digital.php">Digital Marketing</a></td>
						<td>Press & News</td>
						<td>Forum</td>
						<td>Help & Education</td>
						<td>  <a href="www.Twitter.com">Twitter</a></td>
					
					</tr>
					<tr>
						<td><a href="../categories/writing.php">Writing & Translation</a></td>
						<td>Partnerships</td>
						<td>Podcast</td>
						<td>Trust & Safety</td>
						<td> <a href="www.Youtube.com">Youtube</a></td>
					
					</tr>
					<tr>
						<td><a href="../categories/video.php"> Video & Animation</a></td>
						<td>Privacy Policy</td>
						<td>Affiliates</td>
						<td>Selling on Freelance</td>
						<td> <a href="www.facebook.com">Facebook</a></td>
					
					</tr>
					<tr>
						<td><a href="../categories/music.php"> Music & Audio</a></td>
						<td>Terms of Service</td>
						<td></td>
						<td>Buying on freelance</td>
						<td></td>
					</tr>
					<tr>
						<td> <a href="../categories/programing.php">Programming & Tech</a></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><a href="../categories/business.php">Business</a></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
				   </tr>
				</table>
				   
			</tr>
				
				
			<tr height="5%">
						<td><hr><p align="center">COPYRIGHT @ 2017</p></td>	  
			</tr>
		</table>
	</body>	
</html>