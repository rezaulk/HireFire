<?php   session_start(); 
        require_once "../../data/person_data_access(reza).php";
        //require_once "../../service/person_service.php";
?>
<?php 
     
     $name = $_SESSION['username'];
	 $persons=accessProfileSeller($name);
	 //var_dump($persons);
	 $day=getJoiningDateFromDb($name);
	 //var_dump($day);
	 $languages=(getLanguageByBuyerFromDb($name));
	 
	 $skills=(getSkillsBySellerFromDb($name));
	 
	 
	 //var_dump($languages[1]['language']);
?>


<table border="0">
	<tr>
		<td colspan="4">
			<table  align="center" width="100%" border="0">
				<tr>
					<td><a href="main.html"><img src="../image/image.png" width="150"/></a></td>
					<td></td>
					<td align="right">
						<font size="4"><a href="inbox.html">Messages&nbsp;</a>
						<a href="Orders.html">Orders&nbsp</a>
						<a href="Postrequest.html">Postrequest&nbsp;</a>
						<a href="dashboard.html">Dashboard&nbsp;</a>
						<a href="../PublicHome.html">LogOut</a></font>
					</td>
					<td><img src="../image/b.png" width="50"></td>
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
			<br/>Seller<hr/>
			
			<table width="100%">
			
			<tr align="center">
				<td colspan="3">
					<button><font size="3"><a href="../Buyer/buyer.php">View as Buyer</a></font></button>
				</td>
			</tr>
			
			<tr>
				<td width="5%"><img src="../image/location.png"/></td>
				<td width="60%">From</td>
				<td align="right"> <?php echo $persons[0]['country']?></td>
			</tr>
			<tr>
				<td width="5%"><img src="../image/member1.png"/></td>
				<td>Member since</td>
				<td align="right"><?php echo "$day"?></td>
			</tr>
			
			<tr>
				<td width="5%"></td>
				<td></td>
				<td align="right"></td>
			</tr>
			
			<tr>
				<td width="5%"></td>
				<td></td>
				<td align="right"></td>
			</tr>
			
			<tr height="40">
				<td></td>
			</tr>
			
			<tr>
				<td colspan="2"><font size="4"><b></b></font></td>
				<td align="right"></td>
			</tr>
			<tr height="10">
				<td colspan="3"><hr/></td>
			</tr>
			<tr>
				<td colspan="2"><font size="4"><b>Languages</font></b><br/>
				 <?php for($i=0;$i<count($languages);$i++)
				    echo $languages[$i]['language']."<br/>";
				 ?>
				
				</td>
				<td valign="top" align="right">Add new</td>
			</tr>
			<tr height="10">
				<td colspan="3"></td>
			</tr>
			<tr>
				<td colspan="2"><font size="4"><b></b></font></td>
				<td align="right"></td>
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
			<td width="20%">	
				<img src="../image/project1.jpg" width="100%"/><br/><br/>
				<a href="../gig/details.html">I will do c or c++ project for you.</a>
			</td>
			<td>	
				<img src="../image/addgig.png"/><br/><br/>
				<button><a href="Create/create1.html">Create a new gig</a></button>
			</td>
			
		</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td colspan="4"><iframe src="footer.html" width="100%" height="200%" frameborder="0"  scrolling="yes"></iframe></td>
	</tr>
</table>