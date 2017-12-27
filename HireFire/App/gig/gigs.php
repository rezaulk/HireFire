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
	    <table border="0" width="100%" height="100%">
		    <tr height="10%">
			    <td colspan="3">
				    <table  border="0" width="100%" border="1">
				        <tr>
							<td><a href="main.html"><img src="../image/image.png" width="150"></a></td>
							<td>
							</td>
							<td align="right">
								<font size="4"><a href="../User/inbox.html">Messages&nbsp;</a>
								<a href="../User/Orders.php">Orders&nbsp</a>
								<a href="../User/dashboard.php">Dashboard&nbsp;</a>
								<a href="../PublicHome.html">LogOut</a></font>
							</td>
							<td><a href="../User/profile.html"><img src="../image/b.png" width="50"></a></td>
							
				        </tr>
                        <tr>
                        <td colspan="4"><hr>
                        </td>
                         </tr>						
				    </table>
							
				</td>
			</tr>
			<tr height="5%"> 	
			    <td width="25%"></td>
				<td width="30%">	
						  <a href="../User/dashboard.php">Dashboard&nbsp;</a>
						    <a>Gigs</a>
						  <a href="../User/earnings.php">Earning&nbsp;</a>
						  <a href="../User/inbox.html">Inbox&nbsp;<a>
						   <a href="../User/setting.html">Settings&nbsp;</a> 
				</td>
				<td width="45%"></td>
            </tr>					
			<tr height="50%">	
                <td width="10%" height="100%"></td>			
				
				<td width="40%" height="100">
				    <br/>
					<a>Active Gigs</a><br/>
					<table border="0" width="100%" height="100%">
					  <tr height="25%">
					            <td>
									<table width="100%" height="100" border="1" cellspacing="0">
											<tr height="5%">
											   <td>Gigs</td>
											   <td>Order</td>
											</tr>
											<form >
												<?php
                                                     $persons=gigaccess($username);

													//echo "<script>alert('Programming1')</script>";
													$i=0;
													//var_dump($persons);
													
													foreach ($persons as $value) 
													{
														echo "<tr>";
														echo "<td>$value[gigTitle]</td><td>$value[orderCount]</td>";
														echo "</tr>";
                                                        $i++; 


													}
												?>
											
									</table>
					            </td>
						</tr>
						<tr height="75%">
						  <td></td>
						  </tr>
						</table>
				</td>
				<td width="50%">
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
				
				
			<tr height="5%">
						<td><hr><p align="center">COPYRIGHT @ 2017</p></td>	  
			</tr>
		</table>
	</body>	
</html>