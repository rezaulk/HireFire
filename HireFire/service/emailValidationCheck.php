<?php
    function isValidEmail($email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }
    
    function isValidPersonName($personName){
        $parts = explode(" ", $personName);
        $isValid = false;
        if(count($parts)>1){
            if(preg_match("/^[a-zA-Z ]*$/",$personName)){
                $isValid = true;
            }
        }
        return $isValid;
    }
?>
