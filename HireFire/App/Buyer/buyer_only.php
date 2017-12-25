<?php   session_start(); 
//var_dump($GLOBALS);
        require_once "../../data/person_data_access(reza).php";
        //require_once "../../service/person_service.php";
?>
<?php 
     
     $username = $_SESSION['username'];
	 $persons=accessProfileBuyer($username);
	 $day=getJoiningDateFromDb($username);
	 //var_dump($day);
	 $languages=(getLanguageByBuyerFromDb($username));
	 //var_dump($languages[1]['language']);
?>
<?php
	$imageLocationWithImageName="../uploads/".$username.".jpg";
	$filename = $imageLocationWithImageName;

	if (file_exists($filename)) {
		//echo "<script>alert('The file exists')</script>";
	} else {
		$imageLocationWithImageName="../uploads/default.jpg";
	}
?>
<?php
	//var_dump($GLOBALS);
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$name=$_FILES['file']['name'];//ByDefault Name of the uplpoaded file
		$tmp_name=$_FILES['file']['tmp_name'];//ByDefault where the image saved
		//$size=$_FILES['file']['size'];
		//===
		if(isset($name))
		{
			$name="TANIM.jpg";
			if(!empty($name))
			{
				//echo $userName;
				$location="../uploads/";
				if(move_uploaded_file($tmp_name,$location.$username.".jpg")){
					$imageLocationWithImageName="../uploads/".$username.".jpg";
					echo "Uploaded";
				}
			}
		}else{
			echo "Please choose a file";
		}
		
	}
?>
<form action="buyer_only.php" method="POST" enctype="multipart/form-data">
<table>
	<tr>
		<td colspan="4">
			<table  width="100%" border="0">
				<tr>
					<td><a href="main.html"><img src="../image/image.png" width="150"/></a></td>
					<td>
					</td>
					<td align="right">
						<font size="4"><a href="inbox.html">Messages&nbsp;</a>
						<a href="dashboard.html">Dashboard&nbsp;</a>
						<a href="../PublicHome.html">LogOut</a></font>
					</td>
					<td width="5%"><img src="../image/b.png" width="50"></td>
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
			<img src="<?=$imageLocationWithImageName?>" width="30%" alt="TANIM"/>
			<br/><?php echo $username;?>
			<br/>Buyer<br/>
			
			<input type="file" name="file" value="imageUpload"/>
			<input type="submit" value="Upload"/>
			
			<hr/>
			
			<table width="100%">
			
			<tr align="center">
				<td colspan="3">
					<button><font size="3"><a href="../CreateProfile1.html">Create Profile As Seller</a></font></button>
				</td>
			</tr>
			
			<tr>
				<td width="5%"></td>
				<td width="60%"></td>
				<td align="right"></td>
			</tr>
			<tr>
				<td width="5%"><img src="../image/member1.png"/></td>
				<td>Member since</td>
				<td align="right">April <?php echo "$day"?></td>
			</tr>
			
			<tr>
				<td width="5%"></td>
				<td></td>
				<td align="right"></td>
			</tr>
			
			<tr height="10">
				<td colspan="3"><hr/></td>
			</tr>
			<tr>
				<td colspan="2"><font size="4"><b>Languages</font></b>
				<br/><?php 
					echo "<ul>";
					for($i=0;$i<count($languages);$i++)
				    echo"<li>". $languages[$i]['language']."</li>";
					echo "</ul>";
				?></td>
				<td valign="top" align="right">Add new</td>
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
			<td>
				<h3>You doesn't have any gig's to display</h3>
			</td>
		</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td colspan="4"><iframe src="footer.html" width="100%" height="200%" frameborder="0"  scrolling="yes"></iframe></td>
	</tr>
</table>
</form>