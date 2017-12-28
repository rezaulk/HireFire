<?php   session_start(); 
		require_once "../../service/person_service(reza).php";
		require_once "../../data/person_data_access(reza).php";
?>
<?php 
     
     $username = $_SESSION['username'];
	 //var_dump($username);
	 //$sellerid=selleridaccess($username);
      $person=getNameFromDb($username);
	 //var_dump($languages[1]['language']);
?>



<html>
    <head>
	    <title>HireFire</title>
	</head>
	<body>
		<table border="0"  height="100%" width="100%" cellspacing="0">
			<tr  height="10%">
				<td  width="40%">
					<table  width="100%" border="0" cellspacing="0">
						<tr>
							<td><a href="../Categories/programing.php"><img src="../image/image.png" width="150"></a></td>
							<td></td>
							<td align="right">
								<font size="4"><a href="inbox.php">Messages&nbsp;</a>
								<a href="Orders_pending.php">Orders&nbsp</a>
								<a href="dashboard.php">Dashboard&nbsp;</a>
								<a href="logout_handler.php">LogOut</a></font>
							</td>
							<td width="5"><a href="profile.php"><img src="../image/b.png" width="50"></a></td>
						 </tr>
					</table>
				</td>		
			</tr>
			<tr height="5%">
				<td><hr/></td>
			</tr>
			
			<tr height="70%">
				<td>
					<table border="0" width="100%" height="100%" cellspacing="0">
						
						<tr height="5%">
						   <td width="20%"></td>
						   <td width="50%">&nbsp;<a href="dashboard.php">DashBoard</a>&nbsp;&nbsp;&nbsp;<a href="../gig/gigs.php">Gigs</a>&nbsp;&nbsp;Earning</td>
						   <td width="30%"></td>
						</tr>
						<tr  height="10%">
						   <td width="20%"></td>
						   <td  colspan="1" width="50%">
							   <table border="1" height="100%" width="25%" cellspacing="0">
								  <tr align ="center">
									 <td align="center">Total Income<br/>
									 <a>
									   <?php        
									        $persons=sellercompleteorderaccess($username);
									        $i=0;
											$earning=0;
											foreach ($persons as $value) 
											{
											    $gId=$value['gId'];
											    $title=gigTitleaccess($gId);
												$earning=$earning+$title['price'];
												$i++; 
											}
									 echo $earning;
									 ?> 
									 <a/></td> 
								  </tr>
							   </table>
						   </td>
						   <td width="30%"></td>  
						</tr>
						<tr> 
						     <td width="20%"></td>
						     <td width="50%">Earnings:<br/></td>
							 <td width="30%"></td>
						</tr>
						<tr height="80%">
						    <td width="20%"></td>
							<td colspan="1" width="50%">
							   <table border="0" height="100%" width="100%">
									<tr height="30%">
									  <td>
										<table border="1" cellspacing="0" height="100%" width="100%">
											<tr height="10%">
												<th>Gig Title</th>
												<th>Delivary Date</th>
												<th>Amount</th>
											</tr>
											<?php
                                                     $persons=sellercompleteorderaccess($username);
													//echo "<script>alert('Programming1')</script>";
													$i=0;
													//var_dump($persons);
													$earning=0;
													foreach ($persons as $value) 
													{
                                                      //var_dump($value);
													   $bName=$value['bName'];
													   $gId=$value['gId'];
													   $date=$value['deadline'];
													   $title=gigTitleaccess($gId);
														echo "<tr height=10%>";
														
														echo "<td>$title[gigTitle]</td><td>$date</td><td>$title[price].tk</td>";
														$earning=$earning+$title['price'];
														echo "</tr>";
                                                        $i++; 
													}	
												?>
										</table>
									 </td>
									</tr>
									<tr height="70%">
									<td>
									</td>
									</tr>
								</table>
							 </td>
							 <td width="30%"></td>
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
			<tr height="30%">
					<td><hr><p align="center">COPYRIGHT @ 2017</p></td>	  
			</tr>
		</table>
	</body>
</html>