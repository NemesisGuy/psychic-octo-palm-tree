
    
// Get the modal
if (document.getElementById('LoginForm')!== null ) 
{
    var modal = document.getElementById('LoginForm');
}
else 
{
    var modal = document.getElementById('ContactUsForm');

}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
