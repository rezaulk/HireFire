<?php   session_start(); 
		$path=__DIR__."/../../data/person_data_access(reza).php";
	include($path); 
?>

<?php 
	     $username = $_SESSION['username'];
		 //echo "<script>document.location='Orders_pending.php'</script>";
		 activetimeToDb($username);
		 unset($_SESSION);
		 echo "<script>document.location='../PublicHome.php'</script>";
?>