let loginForm = document.getElementById('loginForm');
let wrapLogo = document.getElementById('wrapLogo');
let loginFormWrap = document.getElementById('loginFormWrap')

loginForm.style.display = " none"


function startSession(){
    wrapLogo.style.display="none"
    loginFormWrap.style.background = "white"
    loginForm.style.display = ""
}