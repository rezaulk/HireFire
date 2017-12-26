<?php
    function imgUpdatedLocation($username,$imageLocationWithImageName){
		$filename=$_FILES['file']['name'];//ByDefault Name of the uplpoaded file
		$tmp_name=$_FILES['file']['tmp_name'];//ByDefault where the image saved
		$size=$_FILES['file']['size'];
		if(isset($filename))
		{
			if($size<5000000){
				if($filename!=""){
					$fileExt=explode(".",$filename);
					if(count($fileExt>=2)){
						if(($fileExt[1]=='jpg')||($fileExt[1]=='png')||($fileExt[1]=='jpeg')||($fileExt[1]=='JPG')||($fileExt[1]=='PNG')||($fileExt[1]=='JPEG')){
							$location="../uploads/";
							if(move_uploaded_file($tmp_name,$location.$username.".jpg")){
								echo "<script>alert('Uploaded')</script>";
								$imageLocationWithImageName="../uploads/".$username.".jpg";
								return $imageLocationWithImageName;
								
							}
							
						}
						else{
							echo "<script>alert('Check your image format jpg or png')</script>";
							return $imageLocationWithImageName;
						}
					}
					//var_dump($fileExt);
				}
			}
			else{
				echo "<script>alert('Your File size is too large')</script>";
				return $imageLocationWithImageName;
			}
			
		}
	}
	
	
	function checkIfImageUpload(){
		if(count($_FILES)==0){
			return false;
		}
		else{
			return true;
		}
	}
	
	function monthReturn($date){
		$dateDivide=explode("-",$date);
		//var_dump($dateDivide);
		if($dateDivide[1]==1)
		{
			return "January";
		}
		if($dateDivide[1]==2)
		{
			return "February";
		}
		if($dateDivide[1]==3)
		{
			return "March";
		}
		if($dateDivide[1]==4)
		{
			return "April";
		}
		if($dateDivide[1]==5)
		{
			return "May";
		}
		if($dateDivide[1]==6)
		{
			return "June";
		}
		if($dateDivide[1]==7)
		{
			return "July";
		}
		if($dateDivide[1]==8)
		{
			return "August";
		}
		if($dateDivide[1]==9)
		{
			return "September";
		}
		if($dateDivide[1]==10)
		{
			return "October ";
		}
		if($dateDivide[1]==11)
		{
			return "November";
		}
		else{
			return "December";
		}
		
	}
	function imgGigAdd($gigId)
	{
		$filename=$_FILES['gigImage']['name'];//ByDefault Name of the uplpoaded file
		$tmp_name=$_FILES['gigImage']['tmp_name'];//ByDefault where the image saved
		//var_dump($GLOBALS);
		$size=$_FILES['gigImage']['size'];
		if(isset($filename))
		{
			if($size<5000000){
				if($filename!=""){
					$fileExt=explode(".",$filename);
					if(count($fileExt>=2)){
						if(($fileExt[1]=='jpg')||($fileExt[1]=='JPG')){
							$add="../../GigImage/";
							var_dump($gigId);
							echo "<script>alert('TANIM')</script>";
							
							//var_dump(move_uploaded_file($tmp_name,$location."100.jpg"));
							if(move_uploaded_file($tmp_name,$add.$gigId.".jpg")){
								//echo "<script>alert('Uploaded')</script>";
								return true;
								
								
							}
							
						}
						else{
							echo "<script>alert('Supported image format jpg')</script>";
							return false;
							//return $gigImageLocation;
						}
					}
					//var_dump($fileExt);
				}
			}
			else{
				echo "<script>alert('Your File size is too large')</script>";
				return false;
				//return $imageLocationWithImageName;
			}
		}
	}
	
?>
