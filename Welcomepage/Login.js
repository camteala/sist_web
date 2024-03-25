var login = document.getElementById('login');
var register = document.getElementById('register');
var button = document.getElementById('button');

function registered(){
    login.style.left="-400px";
    register.style.left ="50px";
    button.style.left ="110px";
}

function loggedin(){
    login.style.left= "50px";
    register.style.left = "450px";
    button.style.left = "0px";

}