<?php
   //var_dump($GLOBALS);
    $gId=$_GET['gId'];
	//var_dump("$gId");
	
	 var_dump("$gId");
	$gigfile=$_POST['sfile'];
			
	$person['gId']=$gId;
	$person['fileExt']=$gId.".jpg";
	if(addGigFile($person))
	{
		//var_dump(addGig($person));
		//echo "<script>alert('sdsfdf');document.location='../profile.php'";
		 header("location: ../profile.php");	
	}
					
				
			}	

		//var_dump($maxID);
		//echo "<script>alert('gigdescription');</script>";
		
	
?>