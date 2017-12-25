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
							echo "<script>alert('Please check your image format')</script>";
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
	
?>
