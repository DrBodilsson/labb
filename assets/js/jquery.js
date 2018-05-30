$(function() {

  $.validator.addMethod('strongPassword', function(value, element) {
   return this.optional(element)
     || value.length >= 8
     && /\d/.test(value)
     && /[a-z]/i.test(value);
 }, 'Ditt lösenord måste vara minst 8 tecken långt och innehålla minst en siffra och en bokstav')

  $("#register-form").validate({
    rules: {
      username: {
        required: true,
      },
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        strongPassword: true
      },
      confirm_password: {
        required: true,
        equalTo: "#password"
      }
    },
    messages: {
      email: {
        required: 'Var god ange en email-adress',
        email: 'Var god ange en giltig email-adress'
      },
      username: {
        required: 'Var god ange ett användarnamn'
      },
      password: {
        required: 'Var god ange ett lösenord'
      },
      confirm_password: {
        required: 'Var god bekräfta lösenordet',
        equalTo: 'Lösenordet stämmer inte överens'
      }
    }

  });

  $("#login-form").validate({
    rules: {
      user: {
        required: true,
      },
      pass: {
        required: true,
      }
    },
    messages: {
      user: {
        required: 'Ange ett användarnamn'
      },
      pass: {
        required: 'Ange ett lösenord'
      }
    }
  });
  $("#comment-form").validate({
    rules: {
      comment: {
        required: true
      }
    },
    messages: {
      comment: {
        required: 'Skriv en kommentar'
      }
    }
  });
});
