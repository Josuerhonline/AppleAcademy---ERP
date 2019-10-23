

<!DOCTYPE html>
 <html>
  <head>
   <meta charset="UTF-8">
   <title>Primer Ejemplo Firebase</title>
  </head>

  <body>

  <h1 id ="holaMundo"> </h1>
  <script src="https://www.gstatic.com/firebasejs/3.6.1/firebase.js"></script>
  <script>
    // Initialize Firebase
  var firebaseConfig = {
    apiKey: "AIzaSyBnqPhjPMeIZ3bDb2cIIZcJTVt6oSyt0_Y",
    authDomain: "ssg-music-app.firebaseapp.com",
    databaseURL: "https://ssg-music-app.firebaseio.com",
    projectId: "ssg-music-app",
    storageBucket: "ssg-music-app.appspot.com",
    messagingSenderId: "971755773718",
    appId: "1:971755773718:web:78fc507fef6bbf43d4ba37",
    measurementId: "G-5GLM09ZNG6"
  };
    firebase.initializeApp(firebaseConfig);
    var holaMundo = document.getElementById('holaMundo');
    var dbRef = firebase.database().ref().child('text');
    dbRef.on('value', snap => holaMundo.innerText = snap.val() );
  </script>
  </body>

 </html>
