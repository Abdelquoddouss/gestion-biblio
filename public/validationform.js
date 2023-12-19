let email_input = document.getElementById("email");
let input_phone = document.getElementById("phone");
let input_password = document.getElementById("password");
let emailRegex =/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

input_phone.addEventListener("keyup", function () {

    if (input_phone.value === "" || input_phone.value.length !== 10) {
      input_phone.nextElementSibling.style.display = "block";
    } else {
      input_phone.nextElementSibling.style.display = "none";
    }
  });
  
  email_input.addEventListener("keyup", function () {
  
    if (email_input.value === "" || !email_input.value.match(emailRegex)) {
      email_input.nextElementSibling.style.display = "block";
    } else {
      email_input.nextElementSibling.style.display = "none";
    }
  });
  
  input_password.addEventListener("keyup", function () {
    
    if (input_password.value === "" || input_password.value.length <= 8 ) {
      input_password.nextElementSibling.style.display = "block";
    } else {
      input_password.nextElementSibling.style.display = "none";
    }
  });