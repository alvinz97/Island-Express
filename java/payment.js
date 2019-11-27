function payment() {
  var card = document.getElementById('card');
  var name = document.getElementById('name');
  var cvv = document.getElementById('cvv');
  var expiry = document.getElementById('expiry');

  var valid = true;

  if (card.value.length < 16) {
    card.className = "wrong-input";
    card.nextElementSibling.innerHTML = "16 characters required";
    valid = false;
  }

  if (cvv.value.length < 3) {
    cvv.className = "wrong-input";
    cvv.nextElementSibling.innerHTML = "No more than 3 characters";
    valid = false;
  }

  if (name.value.length == 0) {
    name.className = "wrong-input";
    name.nextElementSibling.innerHTML = "Name can not be empty";
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

function confirmBox() {
  var decision;

  if (confirm("Please Confirm your Payment !")) {
    decision = "Your payment has successfully placed";
  }
  else {
    decision = "Payment has canceled";
  }
  document.getElementById('paid').innerHTML = decision;
}
