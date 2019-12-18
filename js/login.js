 // Variable to count number of attempts.
let attempt = 3;
debugger;
// Below function Executes on click of login button.
function validate(){

let username = $("#usrname").val();
let password =$("#password").val();


if ( username == "george" && password == "12345"){
alert ("Login successfully");
window.location = "register.html"; 
return false;
}
else{
attempt --;// Decrementing by one.
alert("You have left "+attempt+" attempt;");
// Disabling fields after 3 attempts.
if( attempt == 0){
document.getElementById("username").disabled = true;
document.getElementById("password").disabled = true;
document.getElementById("submit").disabled = true;
return false;
}
}
}