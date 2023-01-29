//firebase config key setup

import firebase from 'firebase/compat/app';
import 'firebase/compat/auth';
import 'firebase/compat/firestore';

const firebaseConfig = {
    apiKey: "firebase-api-key ",
    authDomain: "auth-88b62.firebaseapp.com",
    projectId: "auth-88b62",
    storageBucket: "auth-88b62.appspot.com",
    messagingSenderId: "463736413980",
    appId: "1:463736413980:web:ae396b25a68661bd49e4d9",
    measurementId: "G-QQGFYGQZJ6"
};

if (!firebase.apps.length){
    firebase.initializeApp(firebaseConfig);
}

export { firebase };