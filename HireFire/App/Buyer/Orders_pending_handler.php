<?php   session_start(); 
		require_once __DIR__."/../../service/person_service(reza).php";
?>

<?php 
	   $gId=$_GET['gId'];
	   $buttonName=trim($_GET['buttonName']);
	   $gId=(int)$gId;
	  // echo "$gId";
	   $string="accept";
	    //echo $gId;
		if($buttonName==$string)
		{
			//echo "<script>alert('sssa');</script>";
		   orderAccept($gId);
		   //var_dump(header("Location: Orders_pending.php"));
		   echo "<script>document.location='Orders_pending.php'</script>";
		}
		if($buttonName=="reject")
		{
			orderReject($gId);
			echo "<script>document.location='Orders_pending.php'</script>";
			// header('Location: Orders_pending.php');
		}
 
  
   /*
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		
		echo "dsdjsjkdd";
		$gId=$_REQUEST["gId"];
		var_dump($gId);
	}*/

?>