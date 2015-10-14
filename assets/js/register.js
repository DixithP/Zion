function submit() 
	{
   var emailcheck = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
   var email 	  = $("#email").val();
   var phonecheck = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
   var phone	  = $("#phone").val();
   var ccodecheck = /^\(?([0-9]{1})\)?[-. ]?([0-9]{1})[-. ]?([0-9]{1})$/;
   var countrycode= $("#ccode").val();
   
   if(email == "" || email == null )
   {
	$("#email").focus();
	$("#errorBox").html("Enter the Email id");
	return false;
   }
   else if(!emailcheck.test(email)){
    $("#email").focus();
    $("#errorBox").html("Enter the valid Email id");
    return false;
   }
  else if(phone == "" || phone == null)
  {
    $("#phone").focus();
    $("#errorBox").html("Enter the Phone number");
    return false;
  }
  else if(!phonecheck.test(phone)){
    $("#phone").focus();
    $("#errorBox").html("Enter the valid Phone number");
    return false;
   }
  else if(countrycode == "" || countrycode == null)
  {
    $("#ccode").focus();
    $("#errorBox").html("Enter the Country code");
    return false;
  }
  else if(!ccodecheck.test(countrycode)){
    $("#ccode").focus();
    $("#errorBox").html("Enter the valid Country code");
    return false;
   }
  else if($(email != '' && phone != '' && countrycode != ''))
  {
		$("#errorBox").html("Registered successfully")
		window.document.location.href ='thanks.html';
  }

  
}
