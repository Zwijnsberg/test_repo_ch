importScripts('https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.10.0/firebase-messaging.js');
firebase.initializeApp({apiKey: "AIzaSyAMLk1-dj8g0qCqU3DkxLKHbrT0VhK5EeQ",authDomain: "e-food-9e6e3.firebaseapp.com",projectId: "e-food-9e6e3",storageBucket: "e-food-9e6e3.appspot.com", messagingSenderId: "410522356318", appId: "1:410522356318:web:213bc636770a6c153dc2cf"});
const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function (payload) { return self.registration.showNotification(payload.data.title, { body: payload.data.body ? payload.data.body : '', icon: payload.data.icon ? payload.data.icon : '' }); });
