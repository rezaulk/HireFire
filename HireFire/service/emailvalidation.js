<script>
	var valid=false;
	function validate(){
		var emailTextBox = document.getElementById("email");
		var emailErrorBox = document.getElementById("emailError");
		emailErrorBox.style.color = "RED";
		var email = emailTextBox.value;
		
		if(email==""){
			emailErrorBox.innerHTML="*Email Required";
			
			return valid;
		}
		else{
			valid="<?php 
			if($_SERVER['REQUEST_METHOD']=="POST"){
				$email=trim($_POST['email']);
				if(isValidEmail($email)==false){
					echo 'false';
				}
				else{
					echo 'true';
				}
			}
			?>";
			return valid;
		}
		
		
		
		
		
		
	}
</script>