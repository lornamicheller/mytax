function checkerror(){
		var allfields=document.getElementsByClassName("txt");
		for(var i=0;i<allfields.length;i++){
			allfields[i].className="txt";
		}
	}
	function validate_memlogin(){
		var mem_email=document.getElementById("mem_email");
	    var mem_password=document.getElementById("mem_password");
		 
        
		var emailRule=/^([\w]+[\._]?[\w]{1,}@[\w]{2,}-?[\w]{2,}(\.[a-zA-Z]{2,})+)$/;
		var passwordRule=/^.{6,}$/;
        
		document.getElementById("e_mem_email").innerHTML = "";
		document.getElementById("e_mem_password").innerHTML = "";
		
        
        
		if(!emailRule.test(mem_email.value)){
		
			mem_email.focus();
			mem_email.className+=" error";
			document.getElementById("e_mem_email").innerHTML="Please Specify Your Valid Email";
			return false;
		}
		if(!passwordRule.test(mem_password.value)){
			
			mem_password.focus();
			mem_password.className+=" error";
			document.getElementById("e_mem_password").innerHTML = "Please Specify Password Min 6 Char.";
			return false;
		}
		
				
	}