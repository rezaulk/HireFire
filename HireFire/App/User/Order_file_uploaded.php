<?php
   session_start();
     
   //ob_start();
   $host="localhost";
    $user="root";
    $pass="";
    $dbname="hirefire_db";
    $port=3306;
   
   function addGigFile($person)
	{
		global $host, $user, $pass, $dbname, $port;
		$conn=mysqli_connect($host, $user, $pass, $dbname, $port);
		$sName=$person["sName"];
		$bName=$person["bName"];
		$gigid=$person["gId"];
		$fileExt=$person['fileExt'];
		$sql="UPDATE orders SET fileExt='$fileExt',status='complete' WHERE gId=$gigid AND bName='$bName' AND sName='$sName'";
		//var_dump($sql);
		$result = mysqli_query($conn, $sql);
		mysqli_close($conn);
		return($result);
	}
   
  
	$filename=$_FILES['sfile']['name'];//ByDefault Name of the uplpoaded file
	$tmp_name=$_FILES['sfile']['tmp_name'];//ByDefault where the image saved
	$size=$_FILES['sfile']['size'];
	 $Id=$_GET['gId'];
   $buyerName=$_GET['bName'];
   if(!empty($Id))
   {
		$_SESSION['gId']=$Id;
		
	}
	if(!empty($buyerName))
   {
		$_SESSION['bName']=$buyerName;
		
	}
	$gId=$_SESSION['gId'];
	$bName=trim($_SESSION['bName']);
	$sName=$_SESSION['username'];
	// var_dump($GLOBALS);
	if(isset($filename))
	{
		if($size<5000000){
			if($filename!=""){
				$fileExt=explode(".",$filename);
				if(count($fileExt>=2)){
					if(($fileExt[1]!='php')||($fileExt[1]!='PHP')){
						$location="../OrderFile/";
						if(move_uploaded_file($tmp_name,$location.$gId.".".$fileExt[1])){
							$imageLocationWithImageName=$gId.".".$fileExt[1];
							$person['gId']=$gId;
							$person['fileExt']=$imageLocationWithImageName;
							$person["sName"]=$sName;
							$person["bName"]=$bName;	
							//var_dump($persons);
							$x=addGigFile($person);
							//var_dump($x);
							//ob_end_flush();
							//echo "<script>alert('Uploaded')</script>";
							echo "<script>alert('Uploaded');document.location='Orders_active.php'</script>";
						}	
					}
					else{
						echo "<script>alert('PHP file not supported')</script>";
					}
				}
				//var_dump($fileExt);
			}
		}
		else{
			echo "<script>alert('Your File size is too large')</script>";
		}	
	}
	
	
?>