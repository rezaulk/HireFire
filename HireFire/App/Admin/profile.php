<?php   session_start(); 
        require_once "../../data/person_data_access(reza).php";
?>
<?php 
     
     $username = $_SESSION['username']; 
	 $person=getNameFromDb($username);
?>


<table width="100%">
	<tr>
		<td colspan="4">
			<table  width="100%" border="1">
				<tr>

					<td><a href="../Categories/Programing.php"><img src="../image/image.png" width="150"/></a></td>
					
					<td align="right">
						<font size="4"><a href="inbox.php">Messages&nbsp;</a>
						<a href="admin.php">Dashboard&nbsp;</a>
						<a href="../PublicHome.php">LogOut</a></font>
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
			<br/><?php echo $person['name']?><hr/>
			
			<table width="100%">
			
			<tr align="center">
				<td colspan="3">
				</td>
			</tr>
			
			
			
			
			
			
			
			
			</table>
			
		</td>
		<td width="5%"></td>
		<td width="60%" valign="top">
		<h1></h1><br/><br/>
		<table cellspacing="40">
		<tr>
			<td>
				<h3></h3>
			</td>
		</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td colspan="4"><iframe src="footer.html" width="100%" height="200%" frameborder="0"  scrolling="yes"></iframe></td>
	</tr>
</table>