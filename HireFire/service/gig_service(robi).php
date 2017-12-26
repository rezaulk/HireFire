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
		return addSellerToDb();
		//var_dump($_SESSION);
	}
	function addSkills()
	{
		return addSkillsToDb();
	}
	function addEducation()
	{
		return addEducationToDb();
	}
	

	function retreiveProgrammingAndTechGig()
	{
		return retreiveProgrammingAndTechGigFromDb();
		
	}
	function retreiveUserImage($username)
	{
		return retreiveUserImageFromDb($username);
		
	}
	function retreiveUserLevel($username)
	{
		return retreiveUserLevelFromDb($username);
		
	}
	function retreiveProgrammingAndTechSingleGig($gigId)
	{
		//echo "<script> alert('retreiveProgrammingAndTechSingleGig');</script>";
		return retreiveProgrammingAndTechSingleGigFromDb($gigId);
		
	}        
	function retreiveName($username)
	{
		//echo "<script> alert('retreiveProgrammingAndTechSingleGig');</script>";
		return retreiveNameFromDb($username);		
	}
	function retreiveSellerDescription($username)
	{
		//echo "<script> alert('retreiveProgrammingAndTechSingleGig');</script>";
		return retreiveSellerDescriptionFromDb($username);		
	}
	function addToOrder()
	{
		//echo "<script> alert('retreiveProgrammingAndTechSingleGig');</script>";
		return addToOrderToDb();		
	}
	function retreiveSellerName($gigId)
	{
		//echo "<script> alert('retreiveProgrammingAndTechSingleGig');</script>";
		return retreiveSellerNameFromDb($gigId);		
	}
	
?>