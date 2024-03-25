var firstNameInput = document.querySelector("[name='firstname']");
var firstNameError = document.querySelector("#fname_error");

var lastnameInput = document.querySelector("[name='lastname']");
var lastnameError = document.querySelector("#lname_error");

var usernameInput = document.querySelector("[name='username']");
var usernameError = document.querySelector("#uname_error");

var passwordInput = document.querySelector("[name='password']");
var passwordError = document.querySelector("#pass_error");

var emailInput = document.querySelector("[name='email']");
var emailError = document.querySelector("#email_error");

var mobileInput = document.querySelector("[name='mobile']");
var mobileError = document.querySelector("#mobile_error");

var address1Input = document.querySelector("[name='address1']");
var address1Error = document.querySelector("#address_error");

var postcodeInput = document.querySelector("[name='postcode']");
var postcodeError = document.querySelector("#post_error");



function validateForm() {
	if (firstNameInput.value == "") {
		firstNameInput.style.border = "1px solid red";
		firstNameError.style.display = "block";
		firstNameInput.focus();
		return false;
	}
	if (lastnameInput.value == "") {
		lastnameInput.style.border = "1px solid red";
		lastnameError.style.display = "block";
		lastnameInput.focus();
		return false;
	}
	if (usernameInput.value == "") {
		usernameInput.style.border = "1px solid red";
		usernameError.style.display = "block";
		usernameInput.focus();
		return false;
	}
	if (passwordInput.value == "") {
		passwordInput.style.border = "1px solid red";
		passwordError.style.display = "block";
		passwordInput.focus();
		return false;
	}
	if (emailInput.value == "") {
		emailInput.style.border = "1px solid red";
		emailError.style.display = "block";
		emailInput.focus();
		return false;
	}
	if (mobileInput.value == "") {
		mobileInput.style.border = "1px solid red";
		mobileError.style.display = "block";
		mobileInput.focus();
		return false;
	}
	if (address1Input.value == "") {
		address1Input.style.border = "1px solid red";
		address1Error.style.display = "block";
		address1Input.focus();
		return false;
	}
	if (postcodeInput.value == "") {
		postcodeInput.style.border = "1px solid red";
		postcodeError.style.display = "block";
		postcodeInput.focus();
		return false;
	}
	
}