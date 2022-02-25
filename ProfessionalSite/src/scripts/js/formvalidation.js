//formvalidation.js
function confirmPasswordMatch()
    {
        var regpassword = document.getElementById("regpassword").value;
        var confirmPassword =  document.getElementById("confirmPassword").value;
        if (regpassword == confirmPassword ) {
            $('#passwordMessage').html('Thats a Match').css('color', 'green');
                
        }else
        {
                $('#passwordMessage').html('Bru these passwords dont match').css('color', 'red');
        }
    }

    function validateEmail() {
        var regexpression = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var emailaddress = document.getElementById("emailAddress").value;
        var isEmailValid = regexpression.test(emailaddress);


        if (isEmailValid) {
            $('#emailMessage').html(emailaddress +' : is valid ').css('color', 'green');
                
        }else
        {
            $('#emailMessage').html(emailaddress +' : Bru thats not your email address').css('color', 'red');
        }

    }
      
     
    
     