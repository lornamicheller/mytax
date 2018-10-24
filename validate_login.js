function checkerror(){
		var allfields=document.getElementsByClassName("txt");
		for(var i=0;i<allfields.length;i++){
			allfields[i].className="txt";
		}
	}
	function validate_login(){
		var email=document.getElementById("email");
	    var password=document.getElementById("password");
		 
        
		var emailRule=/^([\w]+[\._]?[\w]{1,}@[\w]{2,}-?[\w]{2,}(\.[a-zA-Z]{2,})+)$/;
		var passwordRule=/^.{6,}$/;
        
		document.getElementById("e_email").innerHTML = "";
		document.getElementById("e_password").innerHTML = "";
		
        
        
		if(!emailRule.test(email.value)){
		
			email.focus();
			email.className+=" error";
			document.getElementById("e_email").innerHTML="Please Specify Your Valid Email";
			return false;
		}
		if(!passwordRule.test(password.value)){
			
			password.focus();
			password.className+=" error";
			document.getElementById("e_password").innerHTML = "Please Specify Password";
			return false;
		}
		
				
	}