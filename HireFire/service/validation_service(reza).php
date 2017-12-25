<?php
    function isValidEmail($email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }
    
    function isValidUserName($userName){
        //$parts = explode(" ", $userName);
        $isValid = false;
		
        if(strlen($userName)>2){
            if(preg_match("/^[a-zA-Z ]*$/",$userName)){
                $isValid = true;
            }
        }
        return $isValid;
    }
	
	
	
	
	
	function isValidAccountNo($accountNo)
	{	
		$isValid=true;

		for($i=0;$i<strlen($accountNo);$i++)
		{
			if($accountNo[$i]>10||$accountNo[$i]<0)
			{
				$isValid=false;
				break;
			}
		}
		return $isValid;
	}
	
	function isValidSchool($school)
	{	
		$isValid=true;

		if(preg_match("/[a-zA-Z ]/",$school))
		{
			$isValid = true;
		}
			
		
		return $isValid;
	}
	
	function isValidPostalCode($postalCode)
	{	
		$isValid=true;
		
		for($i=0;$i<strlen($postalCode);$i++)
		{
			if($postalCode[$i]>10||$postalCode[$i]<0)
			{
				$isValid=false;
				break;
			}
		}
		if(strlen($postalCode)<4)
		{
			$isValid=false;
		}
			
		
		return $isValid;
	}
	
	
	function isValidNumber($number)
	{	
		$isValid=true;
		
		for($i=0;$i<strlen($number);$i++)
		{
			if($number[$i]>10||$number[$i]<0)
			{
				$isValid=false;
				break;
			}
		}
		if(strlen($number)!=11)
		{
			$isValid=false;
		}
			
		
		return $isValid;
	}
	
?>
