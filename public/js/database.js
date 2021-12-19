// Import the functions you need from the SDKs you need
import { initializeApp } from "node_modules/firebase/app";
import { getAnalytics } from "node_modules/firebase/analytics";

//Imports originais
//import { initializeApp } from "firebase/app";
//import { getAnalytics } from "firebase/analytics";

// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyCyNv6pwcg8bXjHyB3cq1K_ExGQ2DbycJ4",
  authDomain: "horta-do-vizinho.firebaseapp.com",
  projectId: "horta-do-vizinho",
  storageBucket: "horta-do-vizinho.appspot.com",
  messagingSenderId: "807716729698",
  appId: "1:807716729698:web:afeed0bb9879456ceeb23b",
  measurementId: "G-3C8ZS5QXQ0"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);