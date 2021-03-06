<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="help2.css?v=1">
    <title>administration</title>
</head>
<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>On The Way</h1>
        </div>
        <ul>

            <li>
                <div class="onlogo">
                    <img src="On The Go logo.png" alt="">
                </div>
            </li>
            <li><a href="dashbord.php"><img src="icons8-dashboard-32.png" alt="">&nbsp; <span>Dashboard</span></a></li>
            <li><a href="sendMessage.php"><img src="icons8-email-send-30.png" alt="">&nbsp; <span>Send message</span></a></li>
            <li><a href="help2.php"><img src="icons8-help-30.png" alt="">&nbsp; <span>help</span></a></li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="title">
                    <h2><img src="On The Go logo.png">&nbsp;<span>Administration</span></h2>
                </div>
                <div class="notifi">
                    <a href="notifi.php"><img src="icons8-notification-30.png"></a>
                </div>
                <div class="account">
                    <a href="#"><img src="icons8-admin-settings-male-64.png"></a>
                    <div class="sub-menu-1">
                        <ul>
                            <li><a href="myAcc.php">My account</a></li>
                            <li><a href="index.html" id="logout">Log out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="icon-case">
                        <div class="allset">
                            <h2>Dashbord</h2>
                        </div>
                    </div>
                    <div class="box">
                        <div class="allset">
                            <div class="allset1">
                                <h3>main dashbord is used for moniter the system activities. 
                                        in hera you can see how mani users are register with the 
                                        application and product deatils. in here there is an 
                                        option to manage users individualy.</h3>
                            </div>
                            
                        </div>
                        
                    </div>

                    <div class="icon-case">
                        <div class="allset">
                            <h2>Send message</h2>
                        </div>
                    </div>
                    <div class="box">
                        <div class="allset">
                            <div class="allset1">
                                <h3>If you want to inform som spesific notice to the users,
                                        you can use this section.</h3>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
</body>
<script type="module">
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/9.9.0/firebase-app.js";
    import { getDatabase } from "https://www.gstatic.com/firebasejs/9.9.0/firebase-database.js";
    import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.9.0/firebase-analytics.js";
    import { getAuth, onAuthStateChanged, signOut } from "https://www.gstatic.com/firebasejs/9.9.0/firebase-auth.js";
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

    const user = auth.currentUser;

    onAuthStateChanged(auth, (user) => {
        if (user) {
            // User is signed in, see docs for a list of available properties
            // https://firebase.google.com/docs/reference/js/firebase.User
            const uid = user.uid;
            // ...
        } else {
            // User is signed out
            // ...
        }
    });
  
    logout.addEventListener('click',(e) =>{

        signOut(auth).then(() => {
            alert('you are loged out');
        // Sign-out successful.
        }).catch((error) => {
        // An error happened.
        const errorCode = error.code;
            const errorMessage = error.message;
            alert(errorMessage);
        });
      
    })
  </script>
</html>