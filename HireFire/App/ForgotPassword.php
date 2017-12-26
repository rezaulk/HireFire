<?php require_once "../service/validation_service(reza).php"; ?>
<?php require_once "../service/person_service(reza).php"; ?>

<?php
    $error= $error1="";
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $name=trim($_POST['uName']);
        
        $isValid = true;
        if(empty($name)){
            $isValid = false;
            $error1 = "*Empty Username box";
        }
        else if(isValidUserName($name)==false)
		{
            $isValid = false;
            $error1 = "*Invalid name";
        }
        if($isValid==true){
            $person['name'] = $name;
    
            if(getuserName($person)==true){
                echo "<script>
                        //alert('Record Added');
						document.location='NewPassword.php';
                     </script>";
					 
                die();
            }
            else{
               $error ="Wrong UserName";
            }
        }
    }
?>
<table  height="10%" width="100%" border="0">
	<tr>

		<td><a href="PublicHome.html"><img src="image/image.png" width="150"/></a></td>
		<td></td>
		<td align="right">	</td>
		<td></td>
	</tr>		
</table>

<table height="70%" width="100%" >
	<tr>
		<td width="33%"></td>
		<td width="34%">
		   <h3 align="center"><font color="red"><?=$error?></font></h3>
			<form method="post">
				<fieldset >
					<legend>Forgot Password</legend>
					<b>Enter UserName: </b><input name="uName" /><?=$error1?>
					<hr>
					<input type="submit"/>
				</fieldset>
			</form>
		</td>
		<td width="33%"></td>
	</tr>
</table>

<table height="20%" border="0" width="100%">
	<hr>
		<tr>
		   <th align="left">CATEGORIES</th>
		   <th align="left">ABOUT</th>
		   <th align="left">COMMUNITY</th>
		   <th align="left">SUPPORT</th>
		   <th align="left">FOLLOW US</th>
	    </tr>
	  
	   <tr>
		<td>Graphics & Design</td>
		<td>Careers</td>
		<td>Blog</td>
		<td>Contact Support</td>
		<td> <a href="www.google.com">Google</a></td>
		
	   </tr>
		<tr>
		<td>Digital Marketing</td>
		<td>Press & News</td>
		<td>Forum</td>
		<td>Help & Education</td>
		<td>  <a href="www.Twitter.com">Twitter</a></td>
		
	   </tr>
		<tr>
		<td>Writing & Translation</td>
		<td>Partnerships</td>
		<td>Podcast</td>
		<td>Trust & Safety</td>
		<td> <a href="www.Youtube.com">Youtube</a></td>
		
	   </tr>
		<tr>
		<td> Video & Animation</td>
		<td>Privacy Policy</td>
		<td>Affiliates</td>
		<td>Selling on Freelance</td>
		<td> <a href="www.facebook.com">Facebook</a></td>
		
	   </tr>
		<tr>
		<td> Music & Audio</td>
		<td>Terms of Service</td>
		<td></td>
		<td>Buying on freelance</td>
		<td></td>
		
	   </tr>
		<tr>
		<td> Programming & Tech</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	   </tr>
	   
		<tr>
		<td>Business</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	   </tr>
	   
	 </tr> 
	</table>