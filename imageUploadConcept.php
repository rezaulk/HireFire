<?php 
	//$name=$_FILES['file']['name'];//ByDefault Name of the uplpoaded file
	$tmp_name=$_FILES['file']['tmp_name'];//ByDefault where the image saved
	$userName=$_REQUEST['userName'];
	//$size=$_FILES['file']['size'];
	if(isset($name))
	{
		$name="TANIM.jpg";
		if(!empty($name))
		{
			echo $userName;
			$location="uploads/";
			if(move_uploaded_file($tmp_name,$location.$userName.".jpg")){
				echo "Uploaded";
			}
		}
	}else{
		echo "Please choose a file";
	}
	var_dump($GLOBALS);
?>
<form action="imageUploadConcept.php" method="POST" enctype="multipart/form-data">
	User Name<input type="" name="userName"/><br/>
	<input type="file" name="file"><br><br>
	<input type="submit" value="Submit">
</form>