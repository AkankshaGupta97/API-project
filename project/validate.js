function formValidation()  
{  
var passid = document.registration.psw;  
var uname = document.registration.name;  
var uemail = document.registration.username;  
 
if(!allLetter(uname))  
{  
	return false;
if(!ValidateEmail(uemail))  
{  
return false;  

if(!passid_validation(passid,7,12))  
{  
return false;
}   
 
  
}  
}   
return true;  
}  
function formValidation_l()  
{  
var passid = document.registrationn.psw;  
var uemail = document.registrationn.usrname;  
 
if(ValidateEmail(uemail))  
{  
if(passid_validation(passid,7,12))  
{  

}   
 
  
 
}   
return false;  
}  
function passid_validation(passid,mx,my)  
{  
var passid_len = passid.value.length;  
if (passid_len == 0 ||passid_len >= my || passid_len < mx)  
{  
alert("Password should not be empty / length be between "+mx+" to "+my);  
passid.focus();  
return false;  
}  
return true;  
}  
function allLetter(uname)  
{   
var letters = /^[A-Za-z]+$/;  
if(uname.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('Name must have alphabet characters only');  
uname.focus();  
return false;  
}  
}  
function ValidateEmail(uemail)  
{  
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
if(uemail.value.match(mailformat))  
{  
return true;  
}  
else  
{  
alert("You have entered an invalid email address!");  
uemail.focus();  
return false;  
}  
}  