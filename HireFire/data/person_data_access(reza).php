<?php require_once "data_access.php";?>
<?php
    
	//print all user
	/*<?php foreach($Users as $user) {?>
               <li><?php echo $user; ?></li>
            <?php } ?>
	
	*/
	
	
	function searchReturnFromDb()
	{
		echo "fsdfdsf";
		$sql = "SELECT * FROM gigs";
		$result = executeSQL($sql);
		$persons = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
		{
            $persons[$i] = $row;
        }
        
        return $persons;
	}
	
	function getallorderFromDb($key)
	{
		$uname=$key;
		//echo "$name";
		$sql = "SELECT * FROM gigs WHERE uName LIKE '$uname' ";
		$result = executeSQL($sql);
		//var_dump($result);
		$persons = array();
		$count=0;
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
				$persons[$i] = $row;
				$count=$count+$persons[$i]['orderCount'];
				//var_dump($row);	
			}
		
		return $count;
	}
	
	function addGigFile($person)
	{
		$gigid=$person["gId"];
		$imgExt=$person['fileExt'];
		 $username = $_SESSION['username'];
		 $sql = "UPDATE gigs SET fileExt='$imgExt' WHERE gigId LIKE '$gigid'";
       
	    $result = executeSQL($sql);
		var_dump($result);
        return $result;
		
	}
	
	
	function allgigaccessToDb()
	{
		
		//echo "$name";
		$sql = "SELECT * FROM gigs";
		$result = executeSQL($sql);
		$persons = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $persons[$i] = $row;
        }
        
        return $persons;
	}
	
	
	
	function buyTotalGig($sName)
	{
		$sql = "SELECT * FROM spending WHERE uName LIKE '$sName'";
		 $result = executeSQL($sql);
		 $count=0;
		for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
				$persons[$i] = $row;
				//var_dump($row);
                $count++;				
			}
			//var_dump($count);
		return $count;
		
	}
	
	function spendingTodb($sName)
	{
		$sql = "SELECT * FROM spending WHERE uName LIKE '$sName'";
		 $result = executeSQL($sql);
		 $person = mysqli_fetch_assoc($result);
         //var_dump($person);
		return $person;
		
	}
	
	function earnTodb($sName)
	{
		$sql = "SELECT * FROM earning WHERE uName LIKE '$sName'";
		 $result = executeSQL($sql);
		 $person = mysqli_fetch_assoc($result);
         //var_dump($person);
		return $person;
		
	}
	
	function getlastactiveToDb($sName)
	{
		 $sql = "SELECT * FROM lastActiveTime WHERE uName LIKE '$sName'";
		 $result = executeSQL($sql);
		 $person = mysqli_fetch_assoc($result);
         //var_dump($person);
		return $person;
		
	}
	
	
	function activetimeToDb($username)
	{
       	$y=date("Y-m-d");
        //echo "$y";
        //var_dump($y);
        $sql = "SELECT * FROM lastActiveTime WHERE uName LIKE '$username'";
		 $result = executeSQL($sql);
		 $count=0;
	     for($i=0; $row = mysqli_fetch_assoc($result); ++$i)
		{
				$persons[$i] = $row;
				$count++;	
		}
		if($count==0)
		{
			$sql = "INSERT INTO lastActiveTime VALUES (NULL,'$username','$y')";
            $result = executeSQL($sql);
			
		}
		else
		{
			$sql = "UPDATE lastActiveTime SET activeDate='$y' WHERE uName LIKE '$username'";
		     $result = executeSQL($sql);
		}
		
		/*$sql = "INSERT INTO lastActiveTime VALUES (NULL,'$username','$y')";
        $result = executeSQL($sql);
		var_dump($sql);*/
        return $result;
		
		
	}
	
	
	function getactivegigToDb($key)
	{
		$uname=$key;
		//echo "$uname";
		$sql = "SELECT * FROM orders WHERE sName LIKE '$uname' and status LIKE 'active' ";
		$result = executeSQL($sql);
		//var_dump($result);
		$persons = array();
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
				$persons[$i] = $row;
				//var_dump($row);	
			}
		return ++$i;	
	}
	
	
	function getsellerFromDb()
	{
		 $sql = "SELECT * FROM sellers";        
        $result = executeSQL($sql);
        
        $persons = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $persons[$i] = $row;
        }
        
        return $persons;
		
	}
	
	
	function getBuyerName()
	{
		$sql = "SELECT * FROM buyers";        
        $result = executeSQL($sql);
        
        $persons = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $persons[$i] = $row;
        }
        //var_dump($persons);
        return $persons;
		
	}
	
	
	
	function getallgigFromDb($key)
	{
		$uname=$key;
		//echo "$name";
		$sql = "SELECT * FROM gigs WHERE uName LIKE '$uname' ";
		$result = executeSQL($sql);
		//var_dump($result);
		$persons = array();
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
				$persons[$i] = $row;
				//var_dump($row);	
			}
		
		return ++$i;
	}
	
	
	
	
	function gigTitleaccessToDb($key)
	{
		$gId=$key;
		//echo "$name";
		$sql = "SELECT * FROM gigs WHERE gigId LIKE '$gId' ";
		$result = executeSQL($sql);
		//var_dump($result);
		$person = mysqli_fetch_assoc($result);
         //var_dump($person);
		return $person;
	}
	
	///show gigs a user
	
	function gigaccessToDb($key)
	{
		$bid=$key;
		//echo "$name";
		$sql = "SELECT * FROM gigs WHERE uName LIKE '$bid' ";
		$result = executeSQL($sql);
		//var_dump($result);
		$persons = array();
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
				$persons[$i] = $row;
				//var_dump($persons[$i]['type']);
			}
		
		return $persons;
		
		
	}
	
	
	
	
	
	
	
	
	function orderRejectToDb($key)
	{
		$gid=$key;
		//echo "$gid";
		 $sql = "DELETE FROM orders WHERE gId=$gid";      
        $result = executeSQL($sql);
		return $result;
	}
	
	function orderAcceptToDb($key)
	{
		$gid=$key;
		//echo "$gid";
		$sql = "UPDATE orders SET status='active' WHERE gId=$gid";
		$result = executeSQL($sql);
		//var_dump($result);
		return $result;
	}
	
	
	
	function buyernameaccessToDb($key)
	{
		$bid=$key;
		//echo "$name";
		$sql = "SELECT * FROM users WHERE uName LIKE '$bid' ";
		$result = executeSQL($sql);
		//var_dump($result);
		$persons = array();
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
				$persons[$i] = $row;
				//var_dump($persons[$i]['type']);
			}
		
		return $persons;
		
		
	}
	
	
	//seller view :::::::::::
	//for complete order 
	function sellercompleteorderaccessToDb($key)
	{
		$username=$key;
		//echo "$name";
		$sql = "SELECT * FROM orders WHERE sName LIKE '$username' and status like 'completed' ";
		$result = executeSQL($sql);
		//var_dump($result);
		$persons = array();
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
				$persons[$i] = $row;
				//var_dump($persons[$i]['type']);
			}
		
		return $persons;
		
	}
	
	//for pending order 
	function sellerpendingorderaccessToDb($key)
	{
		$username=$key;
		//echo "$name";
		$sql = "SELECT * FROM orders WHERE sName LIKE '$username' and status like 'pending' ";
		$result = executeSQL($sql);
		//var_dump($result);
		$persons = array();
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
				$persons[$i] = $row;
				//var_dump($persons[$i]['type']);
			}
		
		return $persons;
		
	}
	
	//for active order 
	function selleractiveorderaccessToDb($key)
	{
		$username=$key;
		//echo "$name";
		$sql = "SELECT * FROM orders WHERE sName LIKE '$username' and status like 'active' ";
		$result = executeSQL($sql);
		//var_dump($result);
		$persons = array();
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
				$persons[$i] = $row;
				//var_dump($persons[$i]['type']);
			}
		
		return $persons;
		
	}
	
	
	
	//buyer view :::::::::::
	//for complete order 
	function buyercompleteorderaccessToDb($key)
	{
		$username=$key;
		//echo "$name";
		$sql = "SELECT * FROM orders WHERE bName LIKE '$username' and status like 'completed' ";
		$result = executeSQL($sql);
		//var_dump($result);
		$persons = array();
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
				$persons[$i] = $row;
				//var_dump($persons[$i]['type']);
			}
		
		return $persons;
		
	}
	
	//for pending order 
	function buyerpendingorderaccessToDb($key)
	{
		$username=trim($key);
		//echo "$username";
		$sql = "SELECT * FROM orders WHERE bName LIKE '$username' and status like 'pending' ";
		$result = executeSQL($sql);
		$persons = array();
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
				$persons[$i] = $row;
				//var_dump($persons[$i]['type']);
			}
		
		return $persons;
		
	}
	
	//for active order 
	function buyeractiveorderaccessToDb($key)
	{
		$username=$key;
		//echo "$name";
		$sql = "SELECT * FROM orders WHERE bName LIKE '$username' and status like 'active' ";
		$result = executeSQL($sql);
		//var_dump($result);
		$persons = array();
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
				$persons[$i] = $row;
				//var_dump($persons[$i]['type']);
			}
		
		return $persons;
		
	}
	
	
	
	
	
	
	
	function selleridaccessToDb($key)
	{
		$name=$key;
		//echo "$name";
		$sql = "SELECT * FROM sellers WHERE uName LIKE '$name' ";
		$result = executeSQL($sql);
		//var_dump($result);
		$persons = array();
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
				$persons[$i] = $row;
				//var_dump($persons[$i]['type']);
			}
		$id=$persons['0']['sellerId'];
		return $id; 
	}
	
	
	
	function getMaxGigId(){

		$sql = "SELECT MAX(gigId) FROM gigs";        
        $result = executeSQL($sql);
        //var_dump($result);
        $maxGigId = mysqli_fetch_assoc($result);
        //var_dump($person);
       return $maxGigId;
	}
	function addGigToDb($person)
	{
		$gigtitle=$person["gigtitle"];
		$gigprice=$person["gigprice"];
		$gigdescription=$person["gigdescription"];
		$category=$person["category"];
		$imgExt=$person['imgExt'];
		$date= date("Y-m-d");
		 $username = $_SESSION['username'];
		$sql = "INSERT INTO gigs VALUES('$username','$gigtitle','null','$category','$gigprice','$gigdescription' ,'$imgExt','$date','0')";
       
	    $result = executeSQL($sql);
		// var_dump($result);
        return $result;
	}
	
	
	function accessGigToDb($key)
	{
		$name=$key;
		$sql = "SELECT * FROM gigs WHERE gigId='$name' ";
		$result = executeSQL($sql);
		//var_dump($result);
		$persons = array();
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
				$persons[$i] = $row;
				//var_dump($persons[$i]['type']);
			}
			//var_dump($persons);
		return $persons;  
    }
	
	
	function accessProfileBuyer($key)
	{
		$name=$key;
		$sql = "SELECT * FROM users WHERE uName LIKE '$name' ";
		$result = executeSQL($sql);
		$persons = array();
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
				$persons[$i] = $row;
				//var_dump($persons[$i]['type']);
			}
			//var_dump($persons);
		return $persons;  
    }
	function accessProfileSeller($key)
	{
		$name=$key;
		$sql = "SELECT * FROM sellers WHERE uName LIKE '$name' ";
		$result = executeSQL($sql);
		//var_dump($result);
		$persons = array();
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
				$persons[$i] = $row;
				//var_dump($persons[$i]['type']);
			}
			//var_dump($persons);
		return $persons;  
    }
    function logindb($key)
	{
		$name=$key['name'];
		$password=$key['password'];
		//$name=$key->name;
		//$pass=$key->password;
		//$password=(int)$password;
		//var_dump($password);	
		$sql = "SELECT * FROM users WHERE uName LIKE '$name' and password LIKE '$password'";
		$result = executeSQL($sql);
		$persons = array();
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
				$persons[$i] = $row;
				//var_dump($persons[$i]['type']);
			}
			//var_dump($persons);
		return $persons;  
    }
	
	
	
	function getUserEmailFromDb($key)
	{
		$email=$key['email'];
        $sql = "SELECT * FROM users WHERE email LIKE '$email'";
        $result = executeSQL($sql);
		//var_dump("$result");
        $persons = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $persons[$i] = $row;
			 echo "<script>
                        alert('$row');
						//document.location='User/main.html';
                     </script>";
        }
        return $persons;
    }
	
	
	 function getuserNameFromDb($key)
	 {
		$name=$key['name'];
        $sql = "SELECT * FROM users WHERE uName LIKE '$name'";        
        $result = executeSQL($sql);
        
        $person = mysqli_fetch_assoc($result);
        
        return $person;
    } 
	
	function getNameFromDb($key)
	 {
		$name=$key;
        $sql = "SELECT * FROM users WHERE uName LIKE '$name'";        
        $result = executeSQL($sql);
        
        $person = mysqli_fetch_assoc($result);
        
        return $person;
    } 
	
	
	
	function getJoiningDateFromDb($key)
	 {
		$name=$key;
        $sql = "SELECT * FROM users WHERE uName LIKE '$name'";        
        $result = executeSQL($sql);
        
        $person = mysqli_fetch_assoc($result);
        
		
		$day=explode("-",$person['joiningDate']);
		$day=$day[0];
        return $day;
    } 
	
	
	function getLanguageByBuyerFromDb($uName){
        $sql = "SELECT * FROM buyers WHERE uName LIKE '$uName'";        
        $result = executeSQL($sql);
        
        $persons = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $persons[$i] = $row;
        }
        
        return $persons;
    } 
	function getSkillsBySellerFromDb($uName){
        $sql = "SELECT * FROM skills WHERE uName LIKE '$uName'";        
        $result = executeSQL($sql);
        $persons = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $persons[$i] = $row;
        }
        //var_dump($persons);
        return $persons;
    }

  
  
    
	
	
	
	
    function addPersonToDb($person){
        $sql = "INSERT INTO person(id, name, email) VALUES(NULL, '$person[name]', '$person[email]')";
        $result = executeSQL($sql);
        return $result;
    }
    
    function editPersonToDb($person){
        $sql = "UPDATE person SET name='$person[name]', email='$person[email]' WHERE id=$person[id]";
        $result = executeSQL($sql);
        return $result;
    }
    
    function removePersonFromDb($personId){
        $sql = "DELETE FROM person WHERE id=$personId";        
        $result = executeSQL($sql);
        return $result;
    }
    
    function getAllUsersFromDb(){
        $sql = "SELECT * FROM users";        
        $result = executeSQL($sql);
        
        $persons = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $persons[$i] = $row;
        }
        
        return $persons;
    }
    
    function getPersonByIdFromDb($personId){
        $sql = "SELECT * FROM person WHERE id=$personId";        
        $result = executeSQL($sql);
        
        $person = mysqli_fetch_assoc($result);
        
        return $person;
    }    

    function getPersonsByNameFromDb($personName){
        $sql = "SELECT * FROM person WHERE name LIKE '%$personName%'";
        $result = executeSQL($sql);
        
        $persons = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $persons[$i] = $row;
        }
        
        return $persons;
    }
    
    function getPersonsByEmailFromDb($personEmail){
        $sql = "SELECT * FROM person WHERE email LIKE '%$personEmail%'";
        $result = executeSQL($sql);
        
        $persons = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $persons[$i] = $row;
        }
        
        return $persons;
    }
    
    function getPersonsByNameOrEmailFromDb($key){
        $sql = "SELECT * FROM users WHERE uName LIKE '%$key%' OR password LIKE '%$key%'";
        $result = executeSQL($sql);
        
        $persons = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $persons[$i] = $row;
        }
        
        return $persons;
    }
    
?>