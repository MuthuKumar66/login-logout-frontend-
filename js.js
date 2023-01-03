function vfun()
{
	var uname=document.forms["myform"]["uname"].value;
	var upswd=document.forms["myform"]["upswd"].value;
	if(uname==null || uname=="" )
	{
		document.getElementById("errorBox").innerHTML="enter the user name ";
		return false;
	}
	 if(upswd==null || upswd=="" )
	 {
		document.getElementById("errorBox").innerHTML="enter the password";
		return false;
	 }
	

	
	if(uname!='' && upswd!='')
	{
		alert("Login Successfull");
	}

}
function vfun1()
{
	var uname1=document.forms["myform1"]["uname1"].value;
	var upswd1=document.forms["myform1"]["upswd1"].value;
	var email1=document.forms["myform1"]["email1"].value;
	var upswd2=document.forms["myform1"]["upswd2"].value;
	if(uname1==null || uname1=="")
	{
       document.getElementById("errorBox").innerHTML="enter the user name";
       return false;
	}
	if(upswd1==null || upswd1=="")
	{
		document.getElementById("errorBox").innerHTML="enter the password";
	}
	if(upswd2==null || upswd2=="")
	{
		document.getElementById("errorBox").innerHTML="enter the password";
	}
	if(email1==null || email1=="")
	{
		document.getElementById("errorBox").innerHTML="enter the email";
	}
	if(upswd1!=upswd2)
	{
		alert("unmatched password!!");
	}
	if(uname1!="" && upswd1!="" && upswd2!="" && email1!="")
	{
          alert("Registration successfull!!!!!");
	}
	

}





