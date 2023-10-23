let toggle_login = document.getElementById("login");
let toggle_register = document.getElementById("register");
let submit_btn = document.getElementById("btn");

function register() {
  toggle_login.style.left = "-400px";
  toggle_register.style.left = "50px";
  submit_btn.style.left = "110px";
}

function login() {
  toggle_login.style.left = "50px";
  toggle_register.style.left = "450px";
  submit_btn.style.left = "0px";
}
