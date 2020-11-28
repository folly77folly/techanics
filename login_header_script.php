<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-analytics.js"></script>

<!-- Insert these scripts at the bottom of the HTML, but before you use any Firebase services -->

  <!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
  <script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-app.js"></script>

  <!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
  <script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-analytics.js"></script>

  <!-- Add Firebase products that you want to use -->
  <script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-firestore.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyCry9hwLzF5ORWzSa50_eUUlfUozKN8FKw",
    authDomain: "techanics-india.firebaseapp.com",
    databaseURL: "https://techanics-india.firebaseio.com",
    projectId: "techanics-india",
    storageBucket: "techanics-india.appspot.com",
    messagingSenderId: "6596281449444",
    appId: "1:659628144944:web:bd5d3ab1562d47528730f5",
    measurementId: "G-0Y8VKVBDB2"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>

  <script src="./assets/js/login.js"></script>