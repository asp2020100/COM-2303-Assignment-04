// Initialize Firebase
const firebaseConfig = {
    apiKey: "YOUR_API_KEY",
    authDomain: "YOUR_AUTH_DOMAIN",
    projectId: "com2305-a3",
    storageBucket: "YOUR_STORAGE_BUCKET",
    messagingSenderId: "707302778013",
    appId: "YOUR_APP_ID"
  };
  
  firebase.initializeApp(firebaseConfig);
  
  // Sign Up
  const signupForm = document.querySelector('#signup-form');
  signupForm.addEventListener('submit', (e) => {
    e.preventDefault();
    const email = document.querySelector('#signup-email').value;
    const password = document.querySelector('#signup-password').value;
    firebase.auth().createUserWithEmailAndPassword(email, password)
      .then((userCredential) => {
        console.log('User signed up successfully');
        // You can redirect to a different page or show a success message here
      })
      .catch((error) => {
        console.error(error.message);
      });
  });
  
  // Login
  const loginForm = document.querySelector('#login-form');
  loginForm.addEventListener('submit', (e) => {
    e.preventDefault();
    const email = document.querySelector('#login-email').value;
    const password = document.querySelector('#login-password').value;
    firebase.auth().signInWithEmailAndPassword(email, password)
      .then((userCredential) => {
        console.log('User logged in successfully');
        // You can redirect to a different page or show a success message here
      })
      .catch((error) => {
        console.error(error.message);
      });
  });
  