let check = function() {
        if (document.getElementById("password").value == document.getElementById("confirm_password").value) {
          document.getElementById("message").style.color = "green";
          document.getElementById("message").innerHTML = "";
          document.getElementById("button-login").disabled = 0;
        } else {
          document.getElementById("message").style.color = "red";
          document.getElementById("message").innerHTML = "Пароли не совпадают";
          document.getElementById("button-login").disabled = 1;
        }
      }