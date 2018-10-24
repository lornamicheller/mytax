function checkerror(){
		var allfields=document.getElementsByClassName("txt");
		for(var i=0;i<allfields.length;i++){
			allfields[i].className="txt";
		}
	}
	function validate_biling(){
		var suff=document.getElementById("suff");
		var name=document.getElementById("name");
		var lname=document.getElementById("lname");
		var country=document.getElementById("country");
		var state=document.getElementById("state");
		var city=document.getElementById("city");
		var zip=document.getElementById("zip");
		var phone=document.getElementById("phone");
		var address=document.getElementById("address");
		var email=document.getElementById("email");
		
		//var mobile=document.getElementById("mobile");
		//var password1=document.getElementById("password");
		//var password2=document.getElementById("re_password");
         
        
		var suffRule=/^([a-zA-Z]{2,}([\s][a-zA-Z]{2,})*)$/;
		var nameRule=/^([a-zA-Z]{2,}([\s][a-zA-Z]{2,})*)$/;
		var lnameRule=/^([a-zA-Z]{2,}([\s][a-zA-Z]{2,})*)$/;
		var countryRule=/^.{1,}$/;
		var stateRule=/^.{1,}$/;
		var cityRule=/^.{1,}$/;
		var zipRule=/^.{6,}$/;
		var phoneRule=/^([0-9]{10})$/;
		var addressRule=/^.{3,}$/;
		var emailRule=/^([\w]+[\._]?[\w]{1,}@[\w]{2,}-?[\w]{2,}(\.[a-zA-Z]{2,})+)$/;
		//var emailRule=/^([\w]+[\._]?[\w]{1,}@[\w]{2,}-?[\w]{2,}(\.[a-zA-Z]{2,})+)$/;
		//var nameRule=/^([a-zA-Z]{2,}([\s][a-zA-Z]{2,})*)$/;
		//var mobileRule=/^([0-9]{10})$/;
		//var mobileRule=/^([a-zA-Z]{2,}([\s][a-zA-Z]{2,})*)$/;
		//var passwordRule=/^.{6,}$/;
	    //var re_passwordRule=/^.{6,}$/;
        
		document.getElementById("e_suff").innerHTML = "";
		document.getElementById("e_name").innerHTML = "";
		document.getElementById("e_lname").innerHTML = "";
		document.getElementById("e_country").innerHTML = "";
		document.getElementById("e_state").innerHTML = "";
		document.getElementById("e_city").innerHTML = "";
		document.getElementById("e_zip").innerHTML = "";
		document.getElementById("e_phone").innerHTML = "";
		document.getElementById("e_address").innerHTML = "";
		document.getElementById("e_email").innerHTML = "";
		//document.getElementById("e_password").innerHTML = "";
		//document.getElementById("e_re_password").innerHTML = "";
		
        
        
		if(!suffRule.test(suff.value)){
			
			suff.focus();
			suff.className+=" error";
			document.getElementById("e_suff").innerHTML = "Please Specify suffix";
			return false;
		}
		
		if(!nameRule.test(name.value)){
			
			name.focus();
			name.className+=" error";
			document.getElementById("e_name").innerHTML = "Please Specify Your First Name";
			return false;
		}
		if(!lnameRule.test(lname.value)){
			
			lname.focus();
			lname.className+=" error";
			document.getElementById("e_lname").innerHTML = "Please Specify Your Last Name";
			return false;
		}
		if(!countryRule.test(country.value)){
			
			country.focus();
			country.className+=" error";
			document.getElementById("e_country").innerHTML = "Please Specify Your Country";
			return false;
		}
		if(!stateRule.test(state.value)){
			
			state.focus();
			state.className+=" error";
			document.getElementById("e_state").innerHTML = "Please Specify Your State";
			return false;
		}
		if(!cityRule.test(city.value)){
			
			city.focus();
			city.className+=" error";
			document.getElementById("e_city").innerHTML = "Please Specify Your City";
			return false;
		}
		if(!zipRule.test(zip.value)){
			
			zip.focus();
			zip.className+=" error";
			document.getElementById("e_zip").innerHTML = "Please Specify Your Zip";
			return false;
		}
		if(!phoneRule.test(phone.value)){
			
			phone.focus();
			phone.className+=" error";
			document.getElementById("e_phone").innerHTML = "Please Specify Your Phone";
			return false;
		}
		if(!addressRule.test(address.value)){
			
			address.focus();
			address.className+=" error";
			document.getElementById("e_address").innerHTML = "Please Specify Your Address";
			return false;
		}
		
		
		if(!emailRule.test(email.value)){
		
			email.focus();
			email.className+=" error";
			document.getElementById("e_email").innerHTML="Please Specify Your Valid Email";
			return false;
		}
		/*if(!passwordRule.test(password.value)){
			
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
		}*/
				
	}