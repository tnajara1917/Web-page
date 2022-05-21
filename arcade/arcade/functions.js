var database = firebase.database();
function writeUserData(email,username,password,gender,favorite_console) {
  firebase.database().ref('users/' + username).set({
    username: username,
    email: email,
    password: password,
    gender: gender,
    favorite_console: favorite_console
  });
}

window.onscroll() = function(){stickyNavbar};

var navbar = document.getElementById("navbar");
function stickyNavbar(){
  if(window.pageYOffset > 0){
      navbar.className.add("sticky");
  }
  else{
    navbar.className.remove("sticky");
  }
}