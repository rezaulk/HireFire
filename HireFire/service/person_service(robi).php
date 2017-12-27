<?php
$path=__DIR__."/../data/person_data_access(robi).php";
	include($path);?>
<?php
    
	function login($user){
        return logindb($user);
    }
	function getuserName($personId){
        return getuserNameFromDb($personId);
    }
	function getUserEmail($key){
        return getUserEmailFromDb($key);
    }
	function getJoiningDate($key){
        return getJoiningDateFromDb($key);
    }
	
	
	
	
    function addPerson($person){
        return addPersonToDb($person);
    }
    
    function editPerson($person){
        return editPersonToDb($person);
    }
    
    function removePerson($personId){
        return removePersonFromDb($personId);
    }
    
    function getAllUsers(){
        return getAllUsersFromDb();
    }
    
    function getPersonById($personId){
        return getPersonByIdFromDb($personId);
    }
    
    function getPersonsByName($personName){
        return getPersonsByNameFromDb($personName);
    }
    
    function getPersonsByEmail($personEmail){
        return getPersonsByEmailFromDb($personEmail);
    }
    
    function getPersonsByNameOrEmail($key){
        return getPersonsByNameOrEmailFromDb($key);
    }
    
    function isUniquePersonEmail($personEmail){
        $persons  = getAllPersons();
        $isUnique = true;
        foreach($persons as $person){
            if($person['email']==$personEmail){
                $isUnique = false;
                break;
            }
        }
        return $isUnique;
    }
    
    function isUniquePersonEmailForUpdate($personId, $personEmail){
        $persons  = getAllPersons();
        $isUnique = true;
        foreach($persons as $person){
            if($person['id']!=$personId && $person['email']==$personEmail){
                $isUnique = false;
                break;
            }
        }
        return $isUnique;
    }
    
    function isValidPerson($personId){
        $persons = getAllPersons();
        $isValid = false;
        foreach($persons as $person){
            if($person['id']==$personId){
                $isValid = true;
                break;
            }
        }
        return $isValid;
    }
	
	function addSeller()
	{
		echo "<script>alert('addSeller')</script>";
		return addSellerToDb();
		//var_dump($_SESSION);
	}
	function addSkills()
	{
		echo "<script>alert('addSkills')</script>";
		return addSkillsToDb();
	}
	function addEducation()
	{
		echo "<script>alert('addEducation')</script>";
		return addEducationToDb();
	}
	function modifyType()
	{
		echo "<script>alert('modifyType')</script>";
		return modifyTypeToUserDb();
	}
	//retreiveName
	function accessUser($gigId)
	{
		//echo "<script>alert('modifyType')</script>";
		return accessFromUserDb($gigId);
	}
	function accessSellerDetails($uName)
	{
		//echo "<script>alert('modifyType')</script>";
		return accessSellerDetailsFromDb($uName);
	}
	function accessAllGigs($sellerName)
	{
		//echo "<script>alert('modifyType')</script>";
		return accessAllGigsDetailsFromDb($sellerName);
	}
	
	
	
?>