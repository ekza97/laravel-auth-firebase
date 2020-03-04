
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
  	firebase.auth().onAuthStateChanged(function(user) {
      if (user) {
        // User is signed in.

        // window.alert('Anda berhasil login');
        // window.location.href = "/home";
      } else {
        // No user is signed in.
        // window.alert('No User');
        window.location.href = "/";
      }
    });
    function logout(){
      // firebase.auth().signOut();
      firebase.auth().signOut().then(function() {
        window.location.href = "/";
      }).catch(function(error) {
        window.alert("Error : " + error);
      });
    }
  </script>
<footer id="footer" class="text text-center">
	<p>Copyright &copy 2018 Eka Saputra</p>
</footer>
</body>
</html>