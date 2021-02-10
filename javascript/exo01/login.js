function Login() {
	var pseudo=document.login.pseudo.value;
	var password=document.login.password.value;
	password=password.toLowerCase();
    if (pseudo == "hyman" && password == "toeasy") {
	    alert("Password correct, valide le challenge avec le même mot de passe");
    } else { 
	    alert("Mauvais mot de passe / wrong password"); 
	}
}