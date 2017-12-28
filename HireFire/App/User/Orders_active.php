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
							<td><a href="../Categories/programing.php"><img src="../image/image.png" width="150"></a></td>
							<td></td>
							<td align="right">
								<font size="4"><a href="../buyer/inbox.php">Messages&nbsp;</a>
									<a href="Orders_pending.php">Orders&nbsp</a>
									<a href="dashboard.php">Dashboard&nbsp;</a>
									<a href="logout_handler.php">LogOut</a>
								</font>
							</td>
							<td width="5"><a href="profile.php"><img src="../image/b.png" width="50"></a></td>
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
						   <td width="30%">&nbsp;<a href="Orders_pending.php">Pending</a>&nbsp;|&nbsp;Active&nbsp;|&nbsp;<a href="Orders_completed.php">Completed</a>&nbsp;<hr></td>
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
								<table height="100%" width="50%" border="0" >
									<tr>
										<td>
											<table border=1 cellspacing=0 width="100%" height="100%">
											    <tr>
												   <td width="10%">Buyer</td>
												   <td width="10%">Gig</td>
												   <td width="10%">Process</td>
												   <td width="10%">Deadline</td>
												   <td width="10%">Amount</td>
												 </tr>
												<?php
                                                     $persons=selleractiveorderaccess($username);

													//echo "<script>alert('Programming1')</script>";
													$i=0;
													//var_dump($persons);
													
													foreach ($persons as $value) 
													{
														
                                                      //var_dump($value);
													   $bName=$value['bName'];
													   $gId=$value['gId'];
													   $date=$value['deadline'];
													   $title=gigTitleaccess($gId);
														echo "<tr>";
														
														echo "<td >$bName</td><td>$title[gigTitle]</td><td><a href='Orders_progress.php?gId=".$gId."&bName=".$bName."'>View</a></td><td>$date</td><td>$title[price]</td>";
														echo "</tr>";
                                                        $i++; 
														//<a href='Orders_pending_handler.php?buttonName=accept & gId=".$gId."'


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
						 <th align="left">CATEGORIES</th>
					   <th align="left">ABOUT</th>
					   <th align="left">COMMUNITY</th>
					   <th align="left">SUPPORT</th>
					   <th align="left">FOLLOW US</th>
				   </tr>
				  
				   <<tr>
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
				   
				  
			   </table
			   
			</tr>
			
			
			<tr height="30%">
					<td><hr><p align="center">COPYRIGHT @ 2017</p></td>	  
			</tr>
		</table>
		</table>
	</body>
</html>