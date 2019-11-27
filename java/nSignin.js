function validateForm() {
  var fname = document.getElementById('fname');
  var lname = document.getElementById('lname');
  var username = document.getElementById('username');
  var phone = document.getElementById('phone');
  var mail = document.getElementById('mail');
  var mail2 = document.getElementById('mail2');
  var password = document.getElementById('password');
  var password2 = document.getElementById('password2');
  removeMassage();
  var valid = true;
  if (fname.value.length == 0) {
    fname.className = "wrong-input";
    fname.nextElementSibling().innerHTML  = "First name can not be blank";
    valid = false;
  }

  if (lname.value.length == 0) {
    lname.className = "wrong-input";
    lname.nextElementSibling.innerHTML = "Last name can not be blank";
    valid = false;
  }

  if (username.value.length == 0 || username.value == /^A-Z$/) {
    username.className = "wrong-input";
    username.nextElementSibling.innerHTML = "User name can not be blank";
    valid = false;
  }

  if (phone.value.length <= 0) {
    phone.className = "wrong-input";
    phone.nextElementSibling.innerHTML = "Phone number should be 10 characters at least";
    valid = false;
  }

  if (mail.value.length == 0) {
    mail.className = "wrong-input";
    mail.nextElementSibling.innerHTML = "Email does not have multiple @ characters";
    valid = false;
  }

  if (mail.value != mail2.value) {
    mail2.className = "wrong-input";
    mail2.nextElementSibling.innerHTML = "Email does not match as in the above";
    valid = false;
  }

  if (password.value.length < 8) {
    password.className = "wrong-input";
    password.nextElementSibling.innerHTML = "8 characters at least required";
    valid = false;
  }

  if (password.value != password2.value) {
    password2.className = "wrong-input";
    password2.nextElementSibling.innerHTML = "Password dees not match as in the above";
    valid = false;
  }
  return valid;
}

/*Remove Error masseges*/
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



// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
