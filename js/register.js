function formValidation()
{
var fullname = document.registration.fullname;
var email = document.registration.emailaddress;
var tel = document.registration.telephone;
var usrname = document.registration.username;
var pass = document.registration.password;
var cpass = document.registration.confrimpass;


function checkpasswaord(pass,cpass){
    if (pass !== cpass);
    alert("Incorrect Password please re-entry the password agsin and confrim it");
    cpass.focus();
    return false;
}
return true;
}








