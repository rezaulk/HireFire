<?php
	session_start();
?>
<?php 
	require_once "../../service/person_service(robi).php";
		require_once "../../service/validation_service(tanim).php";
?>
<?php
?>

<?php 
     $gigId = $_REQUEST['gigId'];
	 
	$allGig=accessUser($gigId);
	//var_dump($allGig);
	for($i=0; $row = mysqli_fetch_assoc($allGig); ++$i)
	{
		
		//echo "<script>alert('Programming2')</script>";
		//$programmingAndTechGig[$i] = $row;
		$sellerName=$row['uName'];
	}
	$sellerName=trim($sellerName);
	
	$sellerDetails=accessSellerDetails($sellerName);
	for($i=0; $row = mysqli_fetch_assoc($sellerDetails); ++$i)
	{
		
		//echo "<script>alert('Programming2')</script>";
		$programmingAndTechGig[$i] = $row;
		$sellerName=$programmingAndTechGig[$i]['uName'];
		$joiningDate=$programmingAndTechGig[$i]['joiningDate'];
		$expLevel=$programmingAndTechGig[$i]['expertLevel'];
		$country=$programmingAndTechGig[$i]['country'];
		$workingHour=$programmingAndTechGig[$i]['workingHour'];
		
	}	
	
	//$allGig=accessGig($gigId);
	
		
		
	  /*$month=monthReturn($buyer[0]['joiningDate']);
	 $persons=accessProfileSeller($username);
	 var_dump($persons);
	 $day=getJoiningDateFromDb($username);
	 //var_dump($day);
	 $languages=(getLanguageByBuyerFromDb($username));
	 
	 $skills=(getSkillsBySellerFromDb($username));
	 
	 */
	 //var_dump($languages[1]['language']);
?>

<table>
	<tr>
		<td colspan="4">
			<table  width="100%" border="0">
				<tr>

					<td><a href="main.html"><img src="../image/image.png" width="150"/></a></td>
					
					</td>
					<td align="right">
						<font size="4"><a href="inbox.html">Messages&nbsp;</a>
						<a href="Orders.html">Orders&nbsp</a>
						<a href="Postrequest.html">Postrequest&nbsp;</a>
						<a href="dashboard.html">Dashboard&nbsp;</a>
						<a href="../PublicHome.html">LogOut</a></font>
					</td>
					<td width="5"><img src="../image/b.png" width="50"></td>
				</tr>		
			</table>
		</td>
	</tr>
	<tr >
				<td colspan="4"><hr/></td>
			</tr>
	<tr height="600">
		<td width="1%"></td>
		<td valign="top" align="center" width="20%">
			<img src="../uploads/<?php echo $sellerName; ?>.jpg" width="30%" alt="TANIM"/>
			<br/><?php echo $sellerName; ?><hr/>
			
			<table width="100%">
			
			<tr align="center">
				<td colspan="3">
					<button><font size="3"><a href="send_message.php?to=<?php echo $sellerName;?>">Contact Me</a></font></button>
				</td>
			</tr>
			
			<tr>
				<td width="5%"><img src="../image/location.png"/></td>
				<td width="60%">Form</td>
				<td align="right"><?php echo $country; ?></td>
			</tr>
			<tr>
				<td width="5%"><img src="../image/member1.png"/></td>
				<td>Member since</td>
				<td align="right"><?php echo $joiningDate; ?></td>
			</tr>
			
			<tr>
				<td width="5%"><img src="../image/time.png"/></td>
				<td><hr/>Working Hour Per Week</td>
				<td align="right"><?php echo $workingHour; ?></td>
			</tr>
			
			<tr height="10">
				<td colspan="3"><hr/></td>
			</tr>
			<tr>
				<td colspan="2"><font size="4"><b>Experience Level : </b></font>
				<td align="right"><b><?php echo $expLevel; ?></b></td>
				
			</tr>
			<tr height="10">
				<td colspan="3"><hr/></td>
			</tr>
			
			<tr>
				<td colspan="2"><font size="4"><b>Linked accounts</font></b>
				<ul>
					<li>Google</li>
					<li>Facebook</li>
					<li>Linkedin</li>
				</ul>				
				</td>
			</tr>
			</table>
			
		</td>
			<td width="5%"></td>
		<td width="60%" valign="top">
		<h1>Active Gigs	</h1><br/><br/>
		<table cellspacing="40">
		<tr>
		<?php
			$count=0;
			$allGig=accessAllGigs($sellerName);
			//var_dump($allGig);
			$gigShow=array();
			for($i=0; $row = mysqli_fetch_assoc($allGig); ++$i)
			{
			
				$gigShow[$i]=$row;
				//var_dump($gigShow[$i]);
				if($i%4==0){
					echo "<tr>";
				}
				$imgName=$gigShow[$i]['imgExt'];
				//$gigId=$imgName;
				$gigTitle=$gigShow[$i]['gigTitle'];		
				
				echo "<td width='20%'>
					<img src='../GigImage/$imgName' width='200' hight='200'/><br/><br/>
					<a href='../gig/proceedToBuy.php?gigId=".$gigId."'>$gigTitle</a>
				</td>";
				$count++;
				if($count==4)
				{
					echo "</tr>";
					$count=0;
					//$count=3;
				}
				
				
			}
		?>
		</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td colspan="4"><iframe src="footer.html" width="100%" height="200%" frameborder="0"  scrolling="yes"></iframe></td>
	</tr>
</table>