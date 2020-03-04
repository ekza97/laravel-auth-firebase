<!doctype html>
<html>
<head>
  <title>Firebase Login</title>
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
  <!-- <link rel="stylesheet" href="style.css" /> -->
  <style>
    body {
      background: #fff;
      padding: 0px;
      margin: 0px;
      font-family: 'Nunito', sans-serif;
      font-size: 16px;
    }

    input, button {
      font-family: 'Nunito', sans-serif;
      font-weight: 700;
    }

    .main-div, .loggedin-div {
      width: 20%;
      margin: 0px auto;
      margin-top: 150px;
      padding: 20px;
      display: block;
    }

    .main-div input {
      display: block;
      border: 1px solid #ccc;
      border-radius: 5px;
      background: #fff;
      padding: 15px;
      outline: none;
      width: 100%;
      margin-bottom: 20px;
      transition: 0.3s;
      -webkit-transition: 0.3s;
      -moz-transition: 0.3s;
    }

    .main-div input:focus {
      border: 1px solid #777;
    }

    .main-div button, .loggedin-div button {
      background: #5d8ffc;
      color: #fff;
      border: 1px solid #5d8ffc;
      border-radius: 5px;
      padding: 15px;
      display: block;
      width: 100%;
      transition: 0.3s;
      -webkit-transition: 0.3s;
      -moz-transition: 0.3s;
    }

    .main-div button:hover, .loggedin-div button:hover {
      background: #fff;
      color: #5d8ffc;
      border: 1px solid #5d8ffc;
      cursor: pointer;
    }

  </style>
</head>
<body>

  <div id="login_div" class="main-div">
    <h3>Firebase Web Login Example</h3>
    <input type="email" placeholder="Email..." id="email_field" />
    <input type="password" placeholder="Password..." id="password_field" />

    <button onclick="login()">Login to Account</button>
    Not Ready account ? <a href="{{ url('/') }}">Register Here</a>
  </div>

  <!-- <div id="user_div" class="loggedin-div">
    <h3>Welcome User</h3>
    <p id="user_para">Welcome to Firebase web login Example. You're currently logged in.</p>
    <button onclick="logout()">Logout</button>
  </div> -->



  <script src="https://www.gstatic.com/firebasejs/4.8.1/firebase.js"></script>
  <script>
    // Initialize Firebase
    var firebaseConfig = {
      apiKey: "AIzaSyC6yzYK12ze_EvdbYxjWsteeNBrTbszS4k",
      authDomain: "aplikasi-pln-1e4af.firebaseapp.com",
      databaseURL: "https://aplikasi-pln-1e4af.firebaseio.com",
      projectId: "aplikasi-pln-1e4af",
      storageBucket: "aplikasi-pln-1e4af.appspot.com",
      messagingSenderId: "824094971659",
      appId: "1:824094971659:web:7e9fa8ad4a55f85f",
      measurementId: "G-D46B6LGPWT"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
  </script>
  <script>
    // firebase.auth().onAuthStateChanged(function(user) {
    //   if (user) {
    //     // User is signed in.

    //     // window.location.href = "/home";
    //     document.getElementById("user_div").style.display = "block";
    //     document.getElementById("login_div").style.display = "none";

    //     var user = firebase.auth().currentUser;

    //     if(user != null){

    //       var email_id = user.email;
    //       document.getElementById("user_para").innerHTML = "Welcome User : " + email_id;

    //     }

    //   } else {
    //     // No user is signed in.
    //     // window.location.href = "/";
    //     document.getElementById("user_div").style.display = "none";
    //     document.getElementById("login_div").style.display = "block";

    //   }
    // });

    function login(){

      var userEmail = document.getElementById("email_field").value;
      var userPass = document.getElementById("password_field").value;

      firebase.auth().signInWithEmailAndPassword(userEmail, userPass).then(function(){
        window.location.href = "/home";
      }).catch(function(error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        window.alert("Error : " + errorMessage);
        // window.location.href = "/home";
      });
        

    }

    // function logout(){
    //   // firebase.auth().signOut();
    //   firebase.auth().signOut().then(function() {
    //     window.location.href = "/";
    //   }).catch(function(error) {
    //     window.alert("Error : " + error);
    //   });
    // }
  </script>
  <!-- <script src="index.js"></script> -->

</body>
</html>
