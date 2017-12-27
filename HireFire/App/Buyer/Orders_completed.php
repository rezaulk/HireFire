<?php   session_start(); 
		require_once "../../service/person_service(reza).php";
?>
<?php 
     
     $username = $_SESSION['username'];
	 //var_dump($username);
	 //$sellerid=selleridaccess($username);
 
	 //var_dump($languages[1]['language']);
?>

<html>
    <head>
	    <title>HireFire</title>
	</head>
	<body>
		<table border="0"  height="100%" width="100%">
			<tr  height="15%" >
				<td>
					<table  width="100%" border="0">
						 <tr>
							<td><a href="main.html"><img src="../image/image.png" width="150"></a></td>
							<td></td>
							<td align="right">
								<font size="4"><a href="inbox.html">Messages&nbsp;</a>
									<a href="dashboard.html">Dashboard&nbsp;</a>
									<a href="../PublicHome.html">LogOut</a>
								</font>
							</td>
							<td><img src="../image/b.png" width="30"></td>
						</tr>
					</table>
				</td>	
			</tr>
			<tr>
				<td><hr/></td>
			</tr>
			
			<tr height="70%">
				<td>
					<table border="0" width="100%" height="100%">
						<tr height="9%">
						   <td width="30%">Orders<hr align="left" width="50"/><!--&nbsp;<a href="dashboard.html">DashBoard</a>&nbsp;|&nbsp;Orders&nbsp;|&nbsp;<a href="gigs.html">Gigs</a>&nbsp;|&nbsp;<a href="earnings.html">Earning</a>&nbsp;|&nbsp;<a href="inbox.html">Inbox</a>&nbsp;|&nbsp;<a href="setting.html">setting</a><hr></td>-->
						   <td width="70%"></td>
						</tr>
						<tr height="9%">
						   <td width="30%">&nbsp;<a href="Orders_active.php">Active</a>&nbsp;|&nbsp;<a href="Orders_pending.php">Pending</a>&nbsp;|&nbsp;Completed&nbsp;<hr></td>
						   <td width="70%"></td>
						</tr>
						<tr  height="10%">
						   <td  colspan="2" width="10">	
							 <a>Manager Sales</a>
						   </td>
						</tr>
						<tr> 
						    <td colspan="2"><br/></td>
						</tr>
						<tr height="80%">
							<td colspan="2">
								<table height="100%" width="50%" >
									<tr height="35%" >
										<td>
											<table border="1" height="100%" width="100%" cellspacing="0">
												<tr height="10%">
													<th>Buyer</th>
													<th>Gig</th>
													<th>Deadline</th>
													<th>Amount</th>
												</tr>
												<?php
                                                     $persons=buyercompleteorderaccess($username);

													//echo "<script>alert('Programming1')</script>";
													$i=0;
													//var_dump($persons);
													
													foreach ($persons as $value) 
													{
														
                                                      //var_dump($value);
													   $bName=$value['sName'];
													   $gId=$value['gId'];
													   $date=$value['deadline'];
													   $title=gigTitleaccess($gId);
														echo "<tr>";
														
														echo "<td >$bName</td><td>$title[gigTitle]</td><td>$date</td><td>$title[price]</td>";
														echo "</tr>";
                                                        $i++; 


													}
												?>
											</table>
										</td>
									</tr>
									<tr height="65%"><td></td>
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
				  
				   <<tr>
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
				   
				  
			   </table
			   
			</tr>
			
			
			<tr height="30%">
					<td><hr><p align="center">COPYRIGHT @ 2017</p></td>	  
			</tr>
		</table>
		</table>
	</body>
</html>