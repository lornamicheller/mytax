function checkerror(){
		var allfields=document.getElementsByClassName("txt");
		for(var i=0;i<allfields.length;i++){
			allfields[i].className="txt";
		}
	}
	function validate(){
		var email=document.getElementById("email");
		var mobile=document.getElementById("mobile");
		var password1=document.getElementById("password");
		var password2=document.getElementById("re_password");
         
        
		var emailRule=/^([\w]+[\._]?[\w]{1,}@[\w]{2,}-?[\w]{2,}(\.[a-zA-Z]{2,})+)$/;
		//var nameRule=/^([a-zA-Z]{2,}([\s][a-zA-Z]{2,})*)$/;
		//var mobileRule=/^([0-9]{10})$/;
		var mobileRule=/^([a-zA-Z]{2,}([\s][a-zA-Z]{2,})*)$/;
		var passwordRule=/^.{6,}$/;
	    var re_passwordRule=/^.{6,}$/;
        
		document.getElementById("e_email").innerHTML = "";
		document.getElementById("e_mobile").innerHTML = "";
		document.getElementById("e_password").innerHTML = "";
		document.getElementById("e_re_password").innerHTML = "";
		
        
        
		
		if(!mobileRule.test(mobile.value)){
			
			mobile.focus();
			mobile.className+=" error";
			document.getElementById("e_mobile").innerHTML = "Please Specify Your Mobile";
			return false;
		}
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
		if(!re_passwordRule.test(re_password.value)){
			
			re_password.focus();
			re_password.className+=" error";
			document.getElementById("e_re_password").innerHTML = "Please Specify Confirm Password";
			return false;
		}
		var password2 = document.getElementById("password").value;
	    var re_password2 = document.getElementById("re_password").value;
		if(password2 != re_password2)
	    {
		document.getElementById("e_re_password").innerHTML = "Your passwor not match";
		return false;
 	    }
	   else
	    {
		return true;
	    }
		
		
				
	}