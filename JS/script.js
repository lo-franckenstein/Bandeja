function togglePasswordVisibility() {
  var passwordInput = document.getElementById("Password");
  var passwordToggle = document.getElementById("passwordToggle");

  if (passwordInput.type === "password") {
      passwordInput.type = "text";
      passwordToggle.innerHTML = '<i class="fa fa-eye-slash"></i>';
  } else {
      passwordInput.type = "password";
      passwordToggle.innerHTML = '<i class="fa fa-eye"></i>';
  }
}

