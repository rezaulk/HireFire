<?php   session_start(); 
        require_once "../../data/person_data_access.php";
        //require_once "../../service/person_service.php";
?>
<?php 
     
     $name = $_SESSION['username'];
	 $persons=accessProfileBuyer($name);
	 $day=getJoiningDateFromDb($name);
	 //var_dump($day);
	 $languages=(getLanguageByBuyerFromDb($name));
	 //var_dump($languages[1]['language']);
?>



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
			<img src="../image/b.png" width="30%" alt="TANIM"/>
			<br/><?php echo $name?>
			<br/>Buyer<hr/>
			
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
				<br/><?php for($i=0;$i<count($languages);$i++)
				    echo $languages[$i]['language']."<br/>";
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