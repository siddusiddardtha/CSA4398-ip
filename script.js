let menubar = document.querySelector('#menu-bars')
let mynav = document.querySelector('.navbar');

menubar.onclick = () =>{
    menubar.classList.toggle('fa-times');
    mynav.classList.toggle('active');
}
function validate_form()
{
const name_pattern=/^[a-z]{8}$/;
const pass_pattern=/^[a-zA-Z]+[@|-|$|#][0-9a-z]{6}$/;
var status=true;
var uname=document.getElementById("username").value;
var password=documnet.getElementById("password").value;
var retypepassword=document.getElementById("repassword").value;
if(!name_pattern.test(uname))
{
document.getElementById("user").innerHTML="username should contain  eight lowercase characters";
status=false;
}
if(!name_pattern.test(uname))
{
document.getElementById("pas").innerHTML="password wrong format";
status=false;
}
if(password!=retypepassword)
{
document.getElementById("matcherror").innerHTML="enter same password";
status=false;
}

return status;
}