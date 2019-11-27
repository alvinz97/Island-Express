/*
function changeForm() {
  var name = document.getElementById('name');
  var mail = document.getElementById('mail');
  var phone = document.getElementById('phone');

  var password = document.getElementById('password');
  var password1 = document.getElementById('password1');
  removeMassage();
  var valid = true;
  //User name
  if (name.value.length == 0) {
    name.className = "wrong-input";
    name.nextElementSibling.innerHTML = "User name has only lowercase letters";
    valid = false;
  }
  //E-mail
  if (mail.value.length == 0) {
    mail.className = "wrong-input";
    mail.nextElementSibling.innerHTML = "User name has only lowercase letters";
    valid = false;
  }
  //Phone number
  if (phone.value.length == 0) {
    phone.className = "wrong-input";
    phone.nextElementSibling.innerHTML = "User name has only lowercase letters";
    valid = false;
  }
  //Password
  if (password.value.length < 8) {
    password.className = "wrong-input";
    password.nextElementSibling.innerHTML = "8 characters at least required";
    valid = false;
  }
  //Confirm Password
  if (password.value != password1.value) {
    password1.className = "wrong-input";
    password1.nextElementSibling.innerHTML = "Password does not match with the above";
    valid = false;
  }
  return valid;
}

//Remove Error masseges
function removeMassage() {
  var errorinput = document.querySelectorAll(".wrong-input");
  [].forEach.call(errorinput, function(el) {
    el.classList.remove("wrong-input");
  });

  var errorparagraph = document.querySelectorAll(".error");
  [].forEach.call(errorparagraph, function(el) {
    el.innerHTML = " ";
  });
}
*/