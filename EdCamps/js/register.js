function registerHandlers(){
	// Register the handlers here
	document.getElementById("SantaClara_reg").onclick = santaClara;
	document.getElementById("SantaCruz_reg").onclick = santaCruz;
	document.getElementById("SanFran_reg").onclick = sanFran;
	document.getElementById("LosAngeles_reg").onclick = losAngeles;
   document.getElementById("Omaha_reg").onclick = omaha;
	document.getElementById("Maui_reg").onclick = maui;
	document.getElementById("Orlando_reg").onclick = orlando;
	document.getElementById("Providence_reg").onclick = providence;
   document.getElementById("Buffalo_reg").onclick = buffalo;
	document.getElementById("Portland_reg").onclick = portland;

   document.getElementById("submit").onclick = submitRegistration;
}

function santaClara(){
   document.getElementById("classnum").value = "1";
   document.getElementById("fee").value = "$425";
}

function santaCruz(){
   document.getElementById("classnum").value = "2";
   document.getElementById("fee").value = "$200";
}

function sanFran(){
   document.getElementById("classnum").value = "3";
   document.getElementById("fee").value = "$250";
}

function losAngeles(){
   document.getElementById("classnum").value = "4";
   document.getElementById("fee").value = "$175";
}

function omaha(){
   document.getElementById("classnum").value = "5";
   document.getElementById("fee").value = "$375";
}

function maui(){
   document.getElementById("classnum").value = "6";
   document.getElementById("fee").value = "$250";
}

function orlando(){
   document.getElementById("classnum").value = "7";
   document.getElementById("fee").value = "$200";
}

function providence(){
   document.getElementById("classnum").value = "8";
   document.getElementById("fee").value = "$200";
}

function buffalo(){
   document.getElementById("classnum").value = "9";
   document.getElementById("fee").value = "$375";
}

function portland(){
   document.getElementById("classnum").value = "10";
   document.getElementById("fee").value = "$225";
}

function changePrice(){
	var value = document.getElementById("classnum").value;

	if(value == "1"){
		document.getElementById("fee").value = "$425";
	}
	else if(value == "2"){
		document.getElementById("fee").value = "$200";
	}
	else if(value == "3"){
		document.getElementById("fee").value = "$250";
	}
	else if(value == "4"){
		document.getElementById("fee").value = "$175";
	}
	else if(value == "5"){
		document.getElementById("fee").value = "$375";
	}
	else if(value == "6"){
		document.getElementById("fee").value = "$250";
	}
	else if(value == "7"){
		document.getElementById("fee").value = "$200";
	}
	else if(value == "8"){
		document.getElementById("fee").value = "$200";
	}
	else if(value == "9"){
		document.getElementById("fee").value = "$375";
	}
	else if(value == "10"){
		document.getElementById("fee").value = "$225";
	}
}

function submitRegistration(){
	var cFirstname = document.getElementById("firstname").value;
	var cLastName = document.getElementById("lastname").value;
	var school = document.getElementById("school").value;
	var grade = document.getElementById("grade").value;
	var birthday = document.getElementById("birthday").value;
	var pFirstname = document.getElementById("pfirstname").value;
	var pLastname = document.getElementById("plastname").value;
	var email = document.getElementById("email").value;
	var phoneNumber = document.getElementById("phone").value;
	var specialRequests = document.getElementById("childinstruct").value;
	var classNumber = document.getElementById("classnum").value;
	var pricePerClass = document.getElementById("fee").value;
	var cardHolderName = document.getElementById("cardname").value;
	var creditCard = document.getElementById("cardnumber").value;
	var securityNum = document.getElementById("security").value;
	var expirationDate = document.getElementById("expiration").value;

	var email_regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	var date_regex = /^\d{2}\/\d{2}\/\d{4}$/;
	//var word_regex = /^[a-zA-Z\s-']*$/;
	//var security_regex = /^[0-9]{3}$/;


	//checks to make sure that the email entered is in correct format
	if(email != "" && !email_regex.test(email)){
		alert("Incorrect format for Email");
	}
	//checks to make sure that the birthday entered is in the correct format
	if(birthday != "" && !date_regex.test(birthday)){
		alert("Incorrect format for Birthday");
	}
	//checks to make sure that the expiration date entered is in the correct format
	if(expirationDate != "" && !date_regex.test(expirationDate)){
		alert("Incorrect format for Expiration Date");
	}

	//conditional block enforces that all required information is enterd into textboxes
	//verifies that required student information has been entered
	if (cFirstname == "" || cLastName == "" || school == "" || grade == "" || birthday == "")
   {
      alert("Required Fields not entered!");

      if (cFirstname == "")
      {
         document.getElementById("firstname").focus();
      }
      else if (cLastName == "")
      {
         document.getElementById("lastname").focus();
      }
		else if (school == "")
      {
         document.getElementById("school").focus();
      }
		else if (grade == "")
      {
         document.getElementById("grade").focus();
      }
		else if (birthday == "")
      {
         document.getElementById("birthday").focus();
      }
   }
	//verifies that required parent information has been entered
	else if (pFirstname == "" || pLastname == "" || email == "" || phoneNumber == "" || classNumber == ""){
		alert("Required Fields not entered!");

      if (pFirstname == "")
      {
         document.getElementById("pfirstname").focus();
      }
      else if (pLastname == "")
      {
         document.getElementById("plastname").focus();
      }
		else if (email == "")
      {
         document.getElementById("email").focus();
      }
		else if (phoneNumber == "")
      {
         document.getElementById("phone").focus();
      }
		else if (classNumber == "")
      {
         document.getElementById("classnum").focus();
      }
	}
	//verifies that required payment information has been entered
	else if (cardHolderName == "" || creditCard == ""  || securityNum == "" || expirationDate == ""){
		alert("Required Fields not entered!");

      if (cardHolderName == "")
      {
         document.getElementById("cardname").focus();
      }
      else if (creditCard == "")
      {
         document.getElementById("cardnumber").focus();
      }
		else if (securityNum == "")
      {
         document.getElementById("security").focus();
      }
		else if (expirationDate == "")
      {
         document.getElementById("expiration").focus();
      }
	}

}