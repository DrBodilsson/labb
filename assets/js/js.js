function validateComment() {
    var x = document.forms["commentForm"]["comment"].value.trim();
       if (x == "") {
        	alert("Var god skriv en kommentar");
        	return false;
        	}
    }

function validateRegister() {
    var a = document.forms["registerForm"]["username"].value.trim();
    var b = document.forms["registerForm"]["email"].value.trim();
    var c = document.forms["registerForm"]["password"].value.trim();
    var d = document.forms["registerForm"]["confirm_password"].value.trim();
    var mailvali = /\S+@\S+\.\S+/;
        if (a == "") {
            alert("Var god fyll i ett användarnamn");
            return false;
            }
        if (!mailvali.test(b)) {
          alert("Var god fyll i en giltig email-adress");
          return false;
        }
        if (c == "") {
            alert("Var god fyll i ett lösenord");
            return false;
            }
        if (d == "") {
            alert("Var god bekräfta lösenordet");
            return false;
            }
        if (c.length < 8) {
            alert("Lösenordet måste vara minst 8 tecken långt");
            return false;
            }
        if (!(c == d)) {
            alert("Lösenorden matchar inte");
            return false;
            }
    }

function validateLogin() {
  var y = document.forms["loginForm"]["user"].value.trim();
  var z = document.forms["loginForm"]["pass"].value.trim();
    if (y == "") {
      alert("Var god fyll i ett användarnamn");
      return false;
    }
    if (z == "") {
      alert("Var god fyll i ett lösenord");
      return false;
    }
}
