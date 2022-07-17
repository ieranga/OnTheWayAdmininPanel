<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>registration</title>
</head>
<body>
    <div class="container">
        <div class="cover"></div>
        <form action="#" method="POST">
            <div class="form-content">
                <div class="signup-form">
                    <div class="title">Register</div>
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="fas fa-evelope"></i>
                            <input type="text" placeholder="enter your name" id="userName" >
                        </div>
                        <div class="input-box">
                            <i class="fas fa-evelope"></i>
                            <input type="text" placeholder="enter email" id="email" >
                        </div>
                        <div class="input-box">
                            <i class="fas fa-evelope"></i>
                            <input type="password" placeholder="enter your password" id="password">
                        </div>
                        <div class="input-box">
                            <i class="fas fa-evelope"></i>
                            <input type="password" placeholder="confirm password" id="comPassword" >
                        </div>
                        <div class="text"><a href="#">forgot password</a></div>
                        <div class="button input-box">
                            <i class="fas fa-evelope"></i>
                            <input type="submit" value="Register" id="register">
                        </div>
                        <div class="text">don't have an account? <a href="index.html"><label for="">signup now</label></a></div>
                    </div>
                </div>
                <div class="login-form">
                    <div class="title">Administration Register</div>
                </div>
                </div>
            </div>
        </form>
    </div>
</body>
<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.9.0/firebase-app.js";
  import { getDatabase, set, ref } from "https://www.gstatic.com/firebasejs/9.9.0/firebase-database.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.9.0/firebase-analytics.js";
  import { getAuth, createUserWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/9.9.0/firebase-auth.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyCiCQ7s2qioAEe55mteYcnAyokjFTFepAU",
    authDomain: "onthewayadmininpanel.firebaseapp.com",
    databaseURL: "https://onthewayadmininpanel-default-rtdb.firebaseio.com",
    projectId: "onthewayadmininpanel",
    storageBucket: "onthewayadmininpanel.appspot.com",
    messagingSenderId: "504548104521",
    appId: "1:504548104521:web:3453305db2c03fbd73a298",
    measurementId: "G-WN8QSES9ZM"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const database = getDatabase(app);
  const analytics = getAnalytics(app);
  const auth = getAuth();

register.addEventListener('click',(e) =>{

    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var password2 = document.getElementById('comPassword').value;
    var userName = document.getElementById('userName').value;

    if(password.length != password2.length){
		alert("passwords don't match");
		return false;
	}

    createUserWithEmailAndPassword(auth, email, password)
    .then((userCredential) => {
        // Signed in 
        const user = userCredential.user;

        set(ref(database, 'users/' + user.uid),{
            userName: userName,
            email: email
        })
        alert('user created!');
        // ...
    })
    .catch((error) => {
        const errorCode = error.code;
        const errorMessage = error.message;
        alert(errorMessage);
        // ..
    });
})

</script>
</html>