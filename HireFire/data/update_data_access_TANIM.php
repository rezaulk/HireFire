<?php require_once "data_access.php";?>
<?php
	function editGigToDb($person){
        $sql = "UPDATE gigs SET gigTitle='$person[gigtitle]', price=$person[gigprice],gDescription='$person[gigdescription]' WHERE gigId=$person[gigid]";
        $result = executeSQL($sql);
        return $result;
    }
?>