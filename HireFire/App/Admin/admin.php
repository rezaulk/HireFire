<?php   session_start(); 
		require_once "../../service/person_service(reza).php";
?>
<?php 
     
     $username = $_SESSION['username'];
	 
	 $uName=getNameFromDb($username);
	 $name=$uName['name'];
	 //var_dump($username);
	 //$sellerid=selleridaccess($username);
 
	 //var_dump($languages[1]['language']);
?>

<html>
	<head>
		<title>HireFire</title>
	</head>
	<body>
	    <table border="0" width="100%" height="100%" cellspacing="0">
		    <tr height="10%">
			    <td colspan="3">
				    <table  border="0" width="100%" border="1">
				        <tr>
							<td><a href="../Categories/programing.php"><img src="../image/image.png" width="150"></a></td>
							<td>
							</td>
							<td align="right">
								<font size="4"><a href="inbox.php">Messages&nbsp;</a>
								<a href="admin.php">Dashboard&nbsp;</a>
								<a href="logout_handler.php">LogOut</a></font>
							</td>
							<td><a href="profile.php"><img src="../image/b.png" width="50"></a></td>
				        </tr>		
				    </table>		
				</td>
			</tr>
			<tr>
				<td colspan="3"><hr/></td>
			</tr>
			<tr height="5%">  
			    <td width="20%"></td>
				<td width="20%">	
					<a>Dashboard&nbsp;|</a>
					<a href="gigs_admin.php">Gigs|</a>
					
				</td>
				<td width="60%"></td>
            </tr>					
			<tr height="50%">	
                <td width="15%" height="100%"></td>			
				<td width="15%" height="100%">
					<table width="100%" height="100%" border="0">
						<tr width="40%">
							<td width="30%" align="center"><img src="../image/user-avatar.jpg" width="100"><br/><a><?php echo "$name"?> </a></td>
							<td width="70%"></td>
						</tr>
						<tr  width="60%">
							<td colspan="2">
								<table width="100%">
									<tr>
									    <td>
								
										</td>	
									</tr>	
								</table>
							</td>
						</tr>
					</table>
				</td>
				<td width="70%" height="100%">
					<table border="0"  width="100%" height="100%">
						<tr>
							<td width="50%" >
							    <a>Seller</a>
								<table border="1" cellspacing="0" width="100%" height="40%">
									<tr>
									     
										<th>Seller</th>
										 <th>Gigs</th>
										 <th>active Gig</th>
										 <th>LastActive Time</th>
									</tr>
									<?php
										 $persons=getsellerFromDb();

										//echo "<script>alert('Programming1')</script>";
										$i=0;
										//var_dump($persons);
										
										foreach ($persons as $value) 
										{
											
										  //var_dump($value);
										   $seller=$value['uName'];
										   $totalgig=getallgigFromDb($seller);
										   $activegig=getactivegigToDb($seller);
										   $lastactivetime=getlastactiveToDb($username);
										   $date=$lastactivetime['activeDate'];
											echo "<tr>";
											
											echo "<td >$seller</td><td>$totalgig</td><td>$activegig</td><td>$date</td>";
											echo "</tr>";
											$i++; 
										}
									?>
								</table>
							</td>
							<td >
							    <a>Buyer</a>
								<table border="1" cellspacing="0" width="100%" height="40%">
									<tr>
										<th>Seller</th>
										 <th>Buy GIg</th>
										 <th>Total spending</th>
										 <th>LastActive Time</th>
									</tr>
									<?php
										 $persons=getBuyerName();
										 
										//echo "<script>alert('Programming1')</script>";
										$i=0;
										foreach ($persons as $value) 
										{
											$buyer=$value['uName'];
											$gig=buyTotalGig($buyer);
											$spending=spendingTodb($buyer);
											$spend=(int)$spending['totalSpend'];
										  //var_dump($spend);
										   $lastactivetime=getlastactiveToDb($buyer);
										   $date=$lastactivetime['activeDate'];
										  
										   //var_dump($gig);
											echo "<tr>";
											
											echo "<td>$buyer</td><td>$gig</td><td>$spend</td><td>$date</td>";
											echo "</tr>";
											$i++; 


										}
									?>
								</table>
							</td>
						</tr>
						<tr>
						    <td>
								<table border="1" cellspacing="0" width="80%" >   
									<th colspan="3">Top five Buyer</th>
										<tr>
											<th>User</th>
											<th>Order Recieved</th>
											<th>Earned</th>
										</tr>
									<?php
										 $persons=getsellerFromDb();

										//echo "<script>alert('Programming1')</script>";
										$i=0;
										//var_dump($persons);
										
										foreach ($persons as $value) 
										{
											
										  //var_dump($value);
										   $seller=$value['uName'];
										   $totalorder=getallorderFromDb($seller);
										   //var_dump($totalorder);
										  $earn=earnTodb($seller);
										  $earning=(int)$earn['totalEarning'];
										
										   //var_dump($earning);
											echo "<tr>";
											
											echo "<td >$seller</td><td>$totalorder</td><td>$earning</td>";
											echo "</tr>";
											$i++; 
										}
									?>
									
								</table>
							</td>
										
								<td width="40%">
								    <br/>
									<table border="1" cellspacing="0" width="80%">
										<th colspan="3">Top five Buyer</th>
											<tr>
												<th>Buyer</th>
												<th>Order Post</th>
												<th>Spend</th>
											</tr>
											<?php
											 $persons=getBuyerName();
											 
											//echo "<script>alert('Programming1')</script>";
											$i=0;
											foreach ($persons as $value) 
											{
												$buyer=$value['uName'];
												$gig=buyTotalGig($buyer);
												$spending=spendingTodb($buyer);
											    $spend=(int)$spending['totalSpend'];
												echo "<tr>";
												
												echo "<td>$buyer</td><td>$gig</td><td>$spend</td>";
												echo "</tr>";
												$i++; 


											}
										?>
									</table>
								</td>
						</tr>
					</table>
				</td>
		    </tr>
		</table>
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
						<td><hr><p align="center">COPYRIGHT @  2017</p></td>	  
			</tr>
		</table>
	</body>	
</html>