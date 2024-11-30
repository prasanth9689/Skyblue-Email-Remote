window.onload = function(){
    render();
}

        const firebaseConfig = {
          apiKey: "AIzaSyCzvt28IEDpKgI31LkcZjNJN3DBSjNLGW0",
          authDomain: "skyblue-jobs-web.firebaseapp.com",
          projectId: "skyblue-jobs-web",
          storageBucket: "skyblue-jobs-web.appspot.com",
          messagingSenderId: "840514246144",
          appId: "1:840514246144:web:2d313fbbb0588175ec2ae5",
          measurementId: "G-C4QZSK8KCY"
        };
      
        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const auth = firebase().auth;

        function render(){
            window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
            recaptchaVerifier.render();
        }