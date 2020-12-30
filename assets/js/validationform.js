// Form register
var modal = document.getElementById("myModalRegister");
var btn = document.getElementById("myBtnRegister");
var span = document.getElementsByClassName("close")[0];
var body = document.getElementById("body");

btn.onclick = function () {
    modal.style.display = "block";
    body.style.overflow = "hidden";
}
span.onclick = function () {
    modal.style.display = "none";
    body.style.overflow = "visible";
}

// Form login
var modalLogin = document.getElementById("myModalLogin");
var btnLogin = document.getElementById("myBtnLogin");
var spanLogin = document.getElementsByClassName("close")[1];

btnLogin.onclick = function () {
    modalLogin.style.display = "block";
    body.style.overflow = "hidden";
}
spanLogin.onclick = function () {
    modalLogin.style.display = "none";
    body.style.overflow = "visible";
}
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
// When the user clicks anywhere outside of the modal, close it

// Change register to login and login to register
var btnChangeRegister = document.getElementById("btnChangeRegister");
var btnChangeLogin = document.getElementById("btnChangeLogin");

btnChangeLogin.onclick = function (){
    modal.style.display = "none";
    modalLogin.style.display = "block";
}
btnChangeRegister.onclick = function (){
    modalLogin.style.display = "none";
    modal.style.display = "block";
}
// Check validate
function validateFormRegister(){
    var user = document.forms["formRegister"]["user-register"].value;
    var password = document.forms["formRegister"]["password-register"].value;
    var confirmPassword = document.forms["formRegister"]["pass-register-confirm"].value;
    var phone = document.forms["formRegister"]["phone"].value;
    var email = document.forms["formRegister"]["email"].value;

    if (user == "" || password == "" || confirmPassword == "" || phone == "" || email == "")
    {
        alert("Vui lòng điền đầy đủ thông tin");
        return false;
    }
    if (user.length < 8)
    {
        alert("Vui lòng nhập tên tài khoản có độ dài lớn hơn 8");
        return false;
    }
    if (password != confirmPassword)
    {
        alert("Vui lòng nhập lại phần xác nhận mật khẩu");
        return false;
    }
}

function validateFormLogin(){
    var user = document.forms["formLogin"]["user"].value;
    var password = document.forms["formLogin"]["password"].value;
    

    if (user == "" || password == "")
    {
        alert("Vui lòng điền đầy đủ thông tin");
        return false;
    }
    if (user.length < 8)
    {
        alert("Vui lòng nhập tên tài khoản có độ dài lớn hơn 8");
        return false;
    }
}

// Function form Contact
function validateFormContact(){
    var fullName = document.forms["contactForm"]["fullName"].value;
    var email = document.forms["contactForm"]["email"].value;
    var phone = document.forms["contactForm"]["phone"].value;
    var title = document.forms["contactForm"]["title"].value;
    var content = document.forms["contactForm"]["content"].value;

    if (fullName == "" || email == "" || phone == "" || title == "" || content == "")
    {
        alert("Vui lòng điền thông tin đầy đủ");
        return false;
    }
}