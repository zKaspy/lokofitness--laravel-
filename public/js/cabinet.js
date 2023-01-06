let status = true;
let statusA = true;

function hidePassword() {
	if (status == true) {
		console.log(12);
		document.getElementsByClassName('form__reg-input-password')[0].type = 'text';
		document.getElementsByClassName('eye_toggle-off')[0].style.display = 'none';
		document.getElementsByClassName('eye_toggle')[0].style.display = 'block';
		status = false;
	} else if (status == false) {
		document.getElementsByClassName('form__reg-input-password')[0].type = 'password';
		document.getElementsByClassName('eye_toggle-off')[0].style.display = 'block';
		document.getElementsByClassName('eye_toggle')[0].style.display = 'none';
		status = true;
	}
}
function hidePasswordA() {
	if (statusA == true) {
		console.log(12);
		document.getElementsByClassName('form__auth-input-password')[0].type = 'text';
		document.getElementsByClassName('eye_toggle-off')[1].style.display = 'none';
		document.getElementsByClassName('eye_toggle')[1].style.display = 'block';
		statusA = false;
	} else if (statusA == false) {
		document.getElementsByClassName('form__auth-input-password')[0].type = 'password';
		document.getElementsByClassName('eye_toggle-off')[1].style.display = 'block';
		document.getElementsByClassName('eye_toggle')[1].style.display = 'none';
		statusA = true;
	}
}
function FormReg () {
	const labelReg = document.getElementsByClassName('login-form-title-item')[0];
	const labelAuth = document.getElementsByClassName('login-form-title-item')[1];
	document.getElementsByClassName('form')[0].style.display ='block';
	document.getElementsByClassName('form-auth')[0].style.display ='none';
	labelReg.classList.add("login-form-title-item--active");
	labelAuth.classList.remove("login-form-title-item--active");
}
function FormAuth () {
	const labelAuth = document.getElementsByClassName('login-form-title-item')[1];
	const labelReg = document.getElementsByClassName('login-form-title-item')[0];
	document.getElementsByClassName('form')[0].style.display ='none';
	document.getElementsByClassName('form-auth')[0].style.display ='block';
	labelAuth.classList.add("login-form-title-item--active");
	labelReg.classList.remove("login-form-title-item--active");
}