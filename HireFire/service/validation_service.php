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
		
        if(strlen($userName)>1){
            if(preg_match("/^[a-zA-Z ]*$/",$userName)){
                $isValid = true;
            }
        }
        return $isValid;
    }
?>
