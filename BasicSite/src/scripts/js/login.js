
// function validate() Executes on click of login/submit button.
function validate()
{
    var vaildusername = "Ray";
    var validpassword = "1234"; 

    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if ( username == vaildusername && password == validpassword)
    {
        alert ("Login successfull");
       
        return false;
    }
    else
    {   
        
        alert("Login failed: You have entered invalid login credentials ");
        
    }
}
