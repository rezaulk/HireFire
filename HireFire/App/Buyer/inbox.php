<?php
	session_start();
	if(empty($_SESSION['username']))
		{
			//echo "<script>alert('Please Login first');document.location='../SignUp1.php'</script>";
			header("location:../SignIn.php");
		}
	ob_start();
	//var_dump($GLOBALS);
	$host="localhost";
    $user="root";
    $pass="";
    $dbname="hirefire_db";
    $port=3306;
	function getSenderFromDB($fromUser){
		global $host, $user, $pass, $dbname, $port;
		$conn=mysqli_connect($host, $user, $pass, $dbname, $port);
		//$name=$key;
		$sql = "select * from tomessage where (fromUser='$fromUser' or toUser='$fromUser') order by messageId DESC";
		$result = mysqli_query($conn, $sql);
		$persons = array();
		$conversionNum=-1;
		$j=0;
		for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
			if($conversionNum!=$row['conversionNumber']){
				//var_dump($row['conversionNumber']);
				$persons[$j++] = $row;
				$conversionNum=$row['conversionNumber'];
				
			}
		}
		return $persons;
		
		mysqli_close($conn);
	}
	
	$fromUserFromSession=$_SESSION['username'];
	$sender=getSenderFromDB($fromUserFromSession);
	//var_dump($sender);
	
	
	
	
	
	
?>
<form action="" method="POST">
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
							<td><a href="../Categories/programing.php"><img src="../image/image.png" width="150"></a></td>
							<td align="right">
								<font size="4"><a href="inbox.php">Messages&nbsp;</a>
								<a href="dashboard.php">Dashboard&nbsp;</a>
								<a href="logout_handler.php">LogOut</a></font>
							</td>
							<td width="5"><a href="../User/profile.php"><img src="../image/b.png" width="50"></a></td>
				        </tr>		
				    </table>
							
				</td>
			</tr>
			<tr >
				<td colspan="3"><hr/></td>
			</tr>
			<tr height="5%">  
			    <td width="25%"></td>
				
				</td>
				<td width="45%"></td>
            </tr>					
			<tr height="50%">	
                <td width="10%" height="100%">
				</td>			
				<td width="50%">
				        <br/><a>Inbox</a>
						<table border="0" width="100%" height="100%">
							<tr height="30%">
								<td >
									<table width="100%" height="100%" border="1" cellspacing="0">
										<tr height="5%">
										   
										   <th>Sender</th>
										   <th>Last Message</th>
										   <th>Updated</th>
										</tr>
										<?php
											if(count($sender)!=0)
											{
												for($i=0;$i<count($sender);$i++)
												{
													$fromUser=$sender[$i]['fromUser'];
													$toUser=$sender[$i]['toUser'];
													$allmessage=$sender[$i]['allmessage'];
													if($fromUserFromSession!=$fromUser)//check for only sender is added to the table
													{
														echo "
														 <tr height='5%' align='center'>
														   <td>$fromUser</td>
														   <td>$allmessage &nbsp;<a href='../User/inboxdetails.php?to=$fromUser'>view</a></td>
														   <td>dec 28,2017</td>
														</tr>";
													}
													else if($fromUserFromSession!=$toUser){//check for only sender is added to the table
														echo "
														 <tr height='5%' align='center'>
														   <td>$toUser</td>
														   <td>$allmessage &nbsp;<a href='../User/inboxdetails.php?to=$toUser'>view</a></td>
														   <td>dec 28,2017</td>
														</tr>";
													}
												}
												
												
											}
											
											
										?>
										<!--
										 <tr height="5%">
										
										   <td>Musfiq</td>
										   <td>Hello ,i want to do a design&nbsp;<a href="inboxdetails.php">view</a></td>
										   <td>nov 9,2017</td>
										</tr>
										 <tr height="5%">
										 
										   <td>Sakib</td>
										   <td>Did you complete if&nbsp;<a href="inboxdetails.php">view</a></td>
										   <td>nov 19,2017</td>
										</tr>
										<tr height="5%">
										 
										   <td>Mizbah</td>
										   <td>Did you complete if&nbsp;<a href="inboxdetails.php">view</a></td>
										   <td>nov 19,2017</td>
										</tr>-->
									
									 </table>
										
								</td>
							</tr>
							<tr height="70%">
								<td>
								</td>
							</tr>
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
						<td> <a href="Graphics.php">Graphics & Design</a></td>
						<td>Careers</td>
						<td>Blog</td>
						<td>Contact Support</td>
						<td> <a href="www.google.com">Google</a></td>
					</tr>
					<tr>
						<td><a href="digital.php">Digital Marketing</a></td>
						<td>Press & News</td>
						<td>Forum</td>
						<td>Help & Education</td>
						<td>  <a href="www.Twitter.com">Twitter</a></td>
					
					</tr>
					<tr>
						<td><a href="writing.php">Writing & Translation</a></td>
						<td>Partnerships</td>
						<td>Podcast</td>
						<td>Trust & Safety</td>
						<td> <a href="www.Youtube.com">Youtube</a></td>
					
					</tr>
					<tr>
						<td><a href="video.php"> Video & Animation</a></td>
						<td>Privacy Policy</td>
						<td>Affiliates</td>
						<td>Selling on Freelance</td>
						<td> <a href="www.facebook.com">Facebook</a></td>
					
					</tr>
					<tr>
						<td><a href="music.php"> Music & Audio</a></td>
						<td>Terms of Service</td>
						<td></td>
						<td>Buying on freelance</td>
						<td></td>
					</tr>
					<tr>
						<td> <a href="programing.php">Programming & Tech</a></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><a href="business.php">Business</a></td>
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
</form>