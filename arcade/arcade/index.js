// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyC2QqlubZ1rzOGlhtcrwMDNouy8lMoYCOg",
  authDomain: "thearcade-7889e.firebaseapp.com",
  databaseURL: "https://thearcade-7889e-default-rtdb.firebaseio.com",
  projectId: "thearcade-7889e",
  storageBucket: "thearcade-7889e.appspot.com",
  messagingSenderId: "709225233675",
  appId: "1:709225233675:web:1ab4b9946bcba8f799f60e",
  measurementId: "G-KWVJCFQYYE"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);