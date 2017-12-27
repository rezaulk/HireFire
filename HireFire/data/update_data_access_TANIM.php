<?php require_once "data_access.php";?>
<?php
	function editGigToDb($person){
        $sql = "UPDATE gigs SET gigTitle='$person[gigtitle]', price=$person[gigprice],gDescription='$person[gigdescription]' WHERE gigId=$person[gigid]";
        $result = executeSQL($sql);
        return $result;
    }
	function allGigFromDb($username){
		$sql="SELECT * FROM gigs WHERE uName='$username'";
		$result = executeSQL($sql);
		$allGig = array();
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
				$allGig[$i] = $row;
				//var_dump($persons[$i]['type']);
			}
			//var_dump($persons);
		return $allGig;  
    }
?>