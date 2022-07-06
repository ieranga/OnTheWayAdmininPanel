function validate(){
	var email = document.getElementById("email").value;
	var password =document.getElementById("password").value;

    if(email.indexOf("@")== -1 || email.length <3){
		alert("enter valide email");
		return false;
	}
	if(password.length ==""){
		alert("enter password");
		return false;
	}
}
function loginfire(){
	var email = document.getElementById("email").value;
	var password =document.getElementById("password").value;

signInWithEmailAndPassword(auth, email, password)
  .then((userCredential) => {
    // Signed in 
    const user = userCredential.user;
    // ...
  })
  .catch((error) => {
    const errorCode = error.code;
    const errorMessage = error.message;
	alert(errorMessage);
  });
  alert ("login success");
}
