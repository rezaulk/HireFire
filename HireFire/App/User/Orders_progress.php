<?php   session_start(); 
		require_once "../../service/person_service(reza).php";
?>
<?php 
     
     $username = $_SESSION['username'];
	 //var_dump($username);
	 //$sellerid=selleridaccess($username);
 
	 //var_dump($languages[1]['language']);
?>


<script>
   function validate()
	{
		var isValid=true;
		if(!FileUploadCheck())
		{
			isValid=false;
		}
		return isValid;
	}
	function FileUploadCheck(){
		//alert("as");
		var fileCheck = document.getElementById("sfile").value;
		var fileCheckErrorMassage=document.getElementById("fileCheckErrorMassage");
		fileCheckErrorMassage.style.color="red";
		if(fileCheck==""){
			//alert("as");
			fileCheckErrorMassage.innerHTML="*Please upload a your file";
			return false;
		}
		else{
			fileCheckErrorMassage.innerHTML="";
			return true;
		}
	}
</script>




<html>
	<head>
		<title>HireFire</title>
	</head>
	<body>
	    <table border="1" width="100%" height="100%">
		    <tr height="10%">
			    <td colspan="3">
				    <table  border="0" width="100%" border="1">
				        <tr>
							<td><a href="main.html"><img src="../image/image.png" width="150"></a></td>
							<td></td>
							<td align="right">
								<font size="4"><a href="inbox.html">Messages&nbsp;</a>
								<a href="Orders.html">Orders&nbsp</a>
								<a href="dashboard.html">Dashboard&nbsp;</a>
								<a href="../PublicHome.html">LogOut</a></font>
							</td>
							<td width="5%"><a href="profile.html"><img src="../image/b.png" width="50"></a></td>
				        </tr>		
				    </table>
							
				</td>
			</tr>
			<tr >
				<td colspan="3"><hr/></td>
			</tr>
			<tr height="5%">  
			    <td width="25%"></td>
				<td width="30%">	
				</td>
				<td width="45%"></td>
            </tr>
			<form action="Orders_pending_handler.php" method="POST" enctype="multipart/form-data" onsubmit="return validate()">
             <!--<form  action="Orders_pending_handler.php" method=""onsubmit="return validate()">	-->		
			<tr height="50%">	
                <td width="10%" height="100%">
				</td>			
				<td width="50%">
				        <br/><a>Order Task</a>
						<table border="0" width="100%" height="100%">
							<tr height="30%">
								<td >
									<table width="100%" height="100%" border="1" cellspacing="0">
										<tr height="5%">
										   <th>Task</th>
										   <th>progress</th>
										
										</tr>
										 <tr height="5%">
										
										   <td>Task1</td>
										    <td>completed</td>
										
										</tr>
										 <tr height="5%">
										
										   <td>Task2</td>
										   <td>completed</td>
										
										</tr>
										 <tr height="5%">
										 
										   <td>Task3</td>
										   <td>completed</td>
										
										</tr>
										<tr>
										 
										   <td>Task4</td>
										   <td>completed</td>
					
										</tr>
										<tr>
										   <td colspan="2"><input type="file" id="sfile" name="sfile" value=""/><br/><span id="fileCheckErrorMassage"></span><br/><input type="submit"/></td>
										</tr>
									 </table>
										
								</td>
							</tr>
							<tr height="70%">
								<td>
								<h3>Comment Here</h3>
									
									
									<textarea rows="8" cols="50">
											Enter text here...</textarea>
									<button><font size="3"><a href="contact_seller.html">Send</a></font></button>
								</td>
							</tr>
						</table>
									
				</td>
				<td width="40%">
				</td>
			</tr>
			</form>
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