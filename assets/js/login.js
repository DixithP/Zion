function display() 
			{
   var username = $("#uname").val();
   var password = $("#pwd").val();
   
   if(username == "" || username == null )
   {
	$("#uname").focus();
	$("#errorBox").html("Enter the Username");
	return false;
   }
  else if(password == "" || password == null)
  {
    $("#pwd").focus();
    $("#errorBox").html("Enter the Password");
    return false;
  }
  else if($(username != '' && password != ''))
  {
		$("#errorBox").html("Logged in successfully")
		window.document.location.href = 'Hideaway/Hideaway.html';
  }

  
}
