<?php require_once "data_access.php";?>
<?php

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
			}
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
	
	
	function addPersonBuyerToDb($person)
	{
		$sql = "INSERT INTO users(uName, password, email,type,joiningDate,imageExt) VALUES('$person[userName]', 
		'$person[password]','$person[email]',$person[type],'$person[joiningDate]','$person[imageExt]')";
		$result = executeSQL($sql);
		return $result;
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