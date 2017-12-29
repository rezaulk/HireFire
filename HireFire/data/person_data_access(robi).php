<?php require_once "data_access.php";?>
<?php
    
	//print all user
	/*<?php foreach($Users as $user) {?>
               <li><?php echo $user; ?></li>
            <?php } ?>
	
	*/
	
	function searchReturnFromDb($value,$category)
	{
		//echo "fsdfdsf";
		//select * from t1 where 'ABCDEFG' LIKE CONCAT('%',column1,'%');
		$sql = "select * from gigs where gigTitle LIKE '%$value%' AND category LIKE '$category'";
		//var_dump($sql);
		$result = executeSQL($sql);
		
        //var_dump($persons);
        return $result;
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
		$password=(int)$password;
			
		$sql = "SELECT * FROM users WHERE uName LIKE '$name' and password LIKE $password";
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
	
	
//<<<<<<< HEAD
	function addPersonBuyerToDb($person)
	{
		$sql = "INSERT INTO users(uName, password, email,type,joiningDate,imageExt) VALUES('$person[userName]', 
		'$person[password]','$person[email]',$person[type],'$person[joiningdate]','$person[imageExt]')";
		$result = executeSQL($sql);
		return $result;
	}
	function addLanguageToBuyersDB($person){
		$sql = "INSERT INTO buyers(uName, language) VALUES('$person[userName]','$person[language]')";
		
		$result = executeSQL($sql);
		"<script>
						alert('$result')
					 </script>";
		
		return $result;
	}
//=======
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
        var_dump($persons);
        return $persons;
    } 
	
	
	
	
//>>>>>>> f5f6e3ec0cb9356dee0b00d30b5cd85c53436ce9
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
	
	 function getAllUserEmailFromDb(){
        $sql = "SELECT email FROM users";        
        $result = executeSQL($sql);
		var_dump($result);
        
        $persons = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
			
            $persons[$i] = $row;
			echo $person[$i];
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
    
	function addSellerToDb()
	{
		$uName=$_SESSION['username'];
		$bankName=$_SESSION['bankName'];
		$accountNo=$_SESSION['accountNo'];
		$description=$_SESSION['description'];
		$school=$_SESSION['school'];
		$from=$_SESSION['from'];
		$to=$_SESSION['to'];
		$degree=$_SESSION['degree'];
		$areaOfStudy=$_SESSION['areaOfStudy'];
		$workingHour=$_SESSION['workingHour'];
		$country=$_SESSION['country'];
		$address=$_SESSION['address'];
		$postalCode=$_SESSION['postalCode'];
		$number=$_SESSION['number'];
		$joiningDate=Date("Y-m-d");
		$expertLevel=0;
		
		
		$sql = "INSERT INTO sellers VALUES('$uName', '$accountNo', '$joiningDate', '$description' , '$expertLevel', '$address' ,'null', '$country' , '$bankName', '$postalCode', '$number', '$workingHour')";
        var_dump($sql);
	    $result = executeSQL($sql);
        return $result;
	}
	
	function addSkillsToDb()
	{
		$uName=$_SESSION['username'];
		$skills=$_SESSION['skill'];
		$i=0;
		foreach($skills as $skill)
		{
			$sql = "INSERT INTO skills VALUES('$uName', '$skill', 'null')";
			$result = executeSQL($sql);
			$i++;
			//var_dump($sql);
		}
		if($i==count($skills))
		{
			return true;
		}
		else
			return false;
	}
	
	function addEducationToDb()
	{
		$uName=$_SESSION['username'];
		$school=$_SESSION['school'];
		$from=$_SESSION['from'];
		$to=$_SESSION['to'];
		$degree=$_SESSION['degree'];
		$areaOfStudy=$_SESSION['areaOfStudy'];

		$sql = "INSERT INTO education VALUES('$uName', '$from', '$to' , '$degree', '$areaOfStudy', 'null')";
        var_dump($sql);
	    $result = executeSQL($sql);
        return $result;
	}
	
	function modifyTypeToUserDb()
	{
		$uName=$_SESSION['username'];
		echo "<script>alert('modifyTypeToUserDb')</script>";
		$sql = "UPDATE users SET type='3' WHERE uName='$uName'"; 
        var_dump($sql);
	    $result = executeSQL($sql);
        return $result;
	}
	
	
	
	function retreiveProgrammingAndTechGigFromDb($category)
	{
		$category=trim($category);
		//var_dump($category);
		$sql = "SELECT * FROM gigs where '$category' like category";  
		$result =executeSQL($sql);
		//echo "<script>alert('retreiveProgrammingAndTechGigFromDb')</script>";
		return $result;
		
	}
	function retreiveUserImageFromDb($username)
	{
		$sql = "SELECT imageExt FROM users where '$username' like uName";
		//var_dump($sql);
		$result =executeSQL($sql);
		//var_dump($result);
		//echo "<script>alert('retreiveUserImageFromDb')</script>";
		return $result;
		
	}
	function retreiveUserLevelFromDb($username)
	{
		$sql = "SELECT expertLevel FROM sellers where '$username' like uName";
		//var_dump($sql);
		$result =executeSQL($sql);
		//var_dump($result);
		//echo "<script>alert('retreiveUserLevelFromDb')</script>";
		return $result;
		
	}
	function retreiveProgrammingAndTechSingleGigFromDb($gigId)
	{
		$sql = "SELECT * FROM gigs where '$gigId' like gigId";
		//var_dump($sql);
		$result =executeSQL($sql);
		//var_dump($result);
		//echo "<script>alert('retreiveProgrammingAndTechSingleGigFromDb')</script>";
		return $result;
		
	}
	
	function retreiveNameFromDb($username)
	{
		$sql = "SELECT * FROM users where '$username' like uName";
		//var_dump($sql);
		$result =executeSQL($sql);
		//var_dump($result);
		//echo "<script>alert('retreiveNameFromDb')</script>";
		return $result;
		
	}
	function retreiveSellerDescriptionFromDb($username)
	{
		$sql = "SELECT * FROM sellers where '$username' like uName";
		//var_dump($sql);
		$result =executeSQL($sql);
		//var_dump($result);
		//echo "<script>alert('retreiveSellerDescriptionFromDb')</script>";
		return $result;
	}
	function retreiveSellerNameFromDb($gigId)
	{
		$sql = "SELECT * FROM gigs where '$gigId' like gigId";
		//var_dump($sql);
		$result =executeSQL($sql);
		//var_dump($result);
		//echo "<script>alert('retreiveSellerNameFromDb')</script>";
		return $result;
	}
	
	function addOrderToDb($seller)
	{
		$buyerUserName=$_SESSION['username'];
		$sellerUserName=$seller;
		$date=Date("Y-m-d");
		//var_dump($date);
		$accountNo=$_SESSION['accountNo'];
		$status="pending";
		$deadline=$_SESSION['deadline'];
		$gigId=$_SESSION['gigId'];
		//var_dump($deadline);
		
		//var_dump ($_SESSION);
		$sql = "INSERT INTO orders VALUES('null', '$buyerUserName', '$sellerUserName' , '$gigId', '$date', '$accountNo' , '$deadline' , '$status','null')";
		//var_dump($sql);
		$result =executeSQL($sql);
		//var_dump($result);
		//echo "<script>alert('addOrderToDb')</script>";
		return $result;
	}
	function accessFromUserDb($gigId)
	{
		$sql = "SELECT * FROM gigs where '$gigId' like gigId";
		//var_dump($sql);
		$result =executeSQL($sql);
		//var_dump($result);
		//echo "<script>alert('retreiveSellerDescriptionFromDb')</script>";
		return $result;
	}
	function accessSellerDetailsFromDb($uName)
	{
		$sql = "SELECT * FROM sellers where '$uName' like uName";
		//var_dump($sql);
		$result =executeSQL($sql);
		//var_dump($result);
		//echo "<script>alert('retreiveSellerDescriptionFromDb')</script>";
		return $result;
	}
	function accessAllGigsDetailsFromDb($sellerName)
	{
		$sql = "SELECT * FROM gigs where '$sellerName' like uName";
		//var_dump($sql);
		$result =executeSQL($sql);
		//var_dump($result);
		//echo "<script>alert('retreiveSellerDescriptionFromDb')</script>";
		return $result;
	}
	
?>