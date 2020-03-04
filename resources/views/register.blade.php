<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Sample FirebaseUI App</title>

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
    <!-- <script src="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.js"></script>
<link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.css" /> -->
<script src="https://cdn.firebase.com/libs/firebaseui/2.5.0/firebaseui.js"></script>
    <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/2.5.0/firebaseui.css">
    <script type="text/javascript">
      // Initialize the FirebaseUI Widget using Firebase.
      // var ui = new firebaseui.auth.AuthUI(firebase.auth());
      // console.log(ui);
      // FirebaseUI config.
      var uiConfig = {
        signInSuccessUrl: "/home",
        signInOptions: [
          // Leave the lines as is for the providers you want to offer your users.
          firebase.auth.GoogleAuthProvider.PROVIDER_ID,
          // firebase.auth.FacebookAuthProvider.PROVIDER_ID,
          // firebase.auth.TwitterAuthProvider.PROVIDER_ID,
          // firebase.auth.GithubAuthProvider.PROVIDER_ID,
          firebase.auth.EmailAuthProvider.PROVIDER_ID,
          // firebase.auth.PhoneAuthProvider.PROVIDER_ID,
          // firebaseui.auth.AnonymousAuthProvider.PROVIDER_ID
        ],
        // tosUrl and privacyPolicyUrl accept either url string or a callback
        // function.
        // Terms of service url/callback.
        tosUrl:"/home",
        // Privacy policy url/callback.
        // privacyPolicyUrl: function() {
        //   window.location.assign('<your-privacy-policy-url>');
        // }
      };
      // Initialize the FirebaseUI Widget using Firebase.
      var ui = new firebaseui.auth.AuthUI(firebase.auth());
      // The start method will wait until the DOM is loaded.
      ui.start('#firebaseui-auth-container', uiConfig);
    </script>
  </head>
  <body>
  <div id="login_div" class="main-div">
    <h3>Firebase Web Register Example</h3>
    Ready account ? <a href="{{ url('/login') }}">Login Here</a>
  </div>
    <div id="firebaseui-auth-container"></div>
  </body>
</html>