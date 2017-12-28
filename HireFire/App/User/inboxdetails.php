<?php
	//require_once __DIR__."/../../service/TANIM_service.php";
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
	function conversationIdReturnIfpreviouslyConversionOccurred($fromUser,$toUser){
		global $host, $user, $pass, $dbname, $port;
		$conn=mysqli_connect($host, $user, $pass, $dbname, $port);
		//$name=$key;
		$sql = "select * from tomessage where (fromUser='$fromUser' AND toUser='$toUser') or (fromUser='$toUser' AND toUser='$fromUser') ORDER BY messageId ASC";
		$result = mysqli_query($conn, $sql);
		//var_dump($result);
		//$result = executeSQL($sql);
		$persons = array();
		for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
			$persons[$i] = $row;
			//var_dump($persons[$i]['type']);
		}
		//var_dump($persons);
		return $persons;
		
		mysqli_close($conn);
	}
	function nextConversionNumber(){
		global $host, $user, $pass, $dbname, $port;
		$conn=mysqli_connect($host, $user, $pass, $dbname, $port);
		//$name=$key;
		$sql = "SELECT MAX(conversionNumber) FROM tomessage";
		$result = mysqli_query($conn, $sql);
		//var_dump($result);
		//$result = executeSQL($sql);
		$persons = array();
		for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
			$persons[$i] = $row;
			//var_dump($persons[$i]['type']);
		}
		//var_dump($persons);
		$nextConversionNo=$persons[0]['MAX(conversionNumber)'];
		return $nextConversionNo+1;
		
		mysqli_close($conn);
	}
	function insertReplyToDB($nextConversionNo,$Reply,$fromUser,$toUser){
		global $host, $user, $pass, $dbname, $port;
		$conn=mysqli_connect($host, $user, $pass, $dbname, $port);
		$sql="INSERT INTO tomessage (messageId, conversionNumber, fromUser, toUser, allmessage)
		VALUES (NULL,$nextConversionNo, '$fromUser', '$toUser', '$Reply')";
		//var_dump($sql);
		$result = mysqli_query($conn, $sql);
		mysqli_close($conn);
		return($result);
		
	}
	$fromUserFromSession=$_SESSION['username'];
	//var_dump($fromUserFromSession);
	$toUserFromSession="";
	if(empty($_REQUEST['to']))
	{
		$toUserFromSession=$_SESSION['to'];
	}
	else{
		$_SESSION['to']=$_REQUEST['to'];
		$toUserFromSession=$_SESSION['to'];
	}
	//$toUserFromSession=$_SESSION['to'];
	
	
	//var_dump($toUserFromSession);
	$tomessage=conversationIdReturnIfpreviouslyConversionOccurred($fromUserFromSession,$toUserFromSession);
	//var_dump($tomessage);
	
	
	
	$ConversionNumber=0;
	if(count($tomessage)==0){//previous conversation not happened
		$ConversionNumber= nextConversionNumber();
		
	}
	else{
		//$ConversionNumber
		$ConversionNumber=trim($tomessage[0]['conversionNumber']);
	}
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$reply=$_REQUEST['reply'];
		if($reply==""){
			
		}
		else{
			//var_dump($reply);
			//var_dump($ConversionNumber);
			if(insertReplyToDB($ConversionNumber,$reply,$fromUserFromSession,$toUserFromSession)){
				//echo "<script>alert('data inserted');document.location='indoxdetails.php';</script>";
				header("location: inboxdetails.php");
				ob_end_flush();
			}
			else{
				echo "<script>alert('Error');</script>";
			}
			
		}
	}
	
	//var_dump($ConversionNumber);
	
	
	
?>
<form method='POST'/>
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
			<tr >  
			    <td width="25%"></td>
				<td width="30%">	
				</td>
				<td width="45%"></td>
            </tr>					
			<tr height="50%">	
                <td width="10%" height="100%">
				</td>			
				<td width="50%">
				        <br/><a>Inbox</a>
						<table border="0" width="100%" height="100%">
						<?php
						//$totalmessage= count($tomessage);
						if(count($tomessage)!=0){
							$totalmessage= count($tomessage);
							for($i=0;$i<$totalmessage;$i++)
							{
								$fromUser=trim($tomessage[$i]['fromUser']);
								$toUser=trim($tomessage[$i]['toUser']);
								$message=trim($tomessage[$i]['allmessage']);
								if($fromUser==$fromUserFromSession){
									echo "<tr>
									<td >
									<img src='../uploads/$fromUserFromSession.jpg' title=$fromUserFromSession width='30'>$message<br/><br/>
									</td>
									</tr>";
								}
								else{
									echo "<tr>
									<td >
									<img src='../uploads/$toUserFromSession.jpg' title=$toUserFromSession width='30'>$message<br/><br/>
									</td>
									</tr>";
								}
								
							}
							
						}
						?>
							<!--
							<tr>
								<td >
								<img src="../image/b.png" width="30" title="Hensen" >Fine. What's about you?<br/><br/>
										
								</td>
							</tr>
							<tr>
								<td >
								<img src="../image/b.png" width="30"  title="Bob" >Fine. Hello , i want to?<br/><br/>
										
								</td>
							</tr>
							-->
							<tr>
								<td>
									<textarea rows="2" cols="30" name="reply"></textarea>
									<br/><input type='submit' value='Reply'/>
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