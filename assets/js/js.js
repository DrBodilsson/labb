function validateForm() {
    var y = document.forms["commentForm"]["comment"].value;
       if (y == "") {
        	alert("Plz write a comment");
        	return false;
        	}
    }

function validate() {
    var a = document.forms["registerForm"]["username"].value;
    var b = document.forms["registerForm"]["mail"].value;
    var c = document.forms["registerForm"]["password"].value;
    var d = document.forms["registerForm"]["confirm_password"].value;
        if (a == "") {
            alert("Plz write a username");
            return false;
            }
        if (b == "") {
            alert("Plz write an email adress")
            return false;
            }
        if (b.indexOf('@')<=0) {
            alert("Wrong email");
            return false;
            }
        if (b.indexOf('.')<=0) {
            alert("Wrong email");
            return false;
            }
        if (c == "") {
            alert("Plz write a password");
            return false;
            }
        if (d == "") {
            alert("Plz confirm the password");
            return false;
            }
        if (c.length < 5) {
            alert("Password must be atleast 5 characters long");
            return false;
            }
        if (!(c == d)) {
            alert("Passwords doesnt match");
            return false;
            }
    }
