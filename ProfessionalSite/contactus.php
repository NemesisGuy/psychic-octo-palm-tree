<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (isset($_SESSION['loggedin'])) {
	include 'datatbaseconnection.php';
	include 'getcurrentusersrecord.php';
}
?>
<html>
    <head>
        <title>Professional Site</title>
        <?php include 'resources.php';?>
    </head>
    <body>
        <header>
            <?php include 'header.php';?>
        </header>    

        <div class="container">
            <div class = "jumbotron">
                <h1>Contact Us </h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ultrices tellus. Aliquam et pharetra mauris. 
                    Fusce congue erat lectus, eget feugiat risus viverra et. Etiam elementum molestie felis ut finibus. In ut fermentum tellus,  
                    ut dapibus tellus. Nulla facilisi. Etiam condimentum dui vitae ornare pretium. Maecenas vehicula congue eleifend. 
                    In eget porttitor neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                    Etiam sodales commodo aliquet. Curabitur a vestibulum nibh. Suspendisse vitae tortor malesuada, pulvinar purus faucibus, 
                    cursus odio. Etiam tincidunt dolor maximus imperdiet sagittis. Vivamus et posuere elit. Quisque mollis risus nisi.
                </p>
            </div>
            <div class="jumbotron">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ultrices tellus. Aliquam et pharetra mauris. 
                    Fusce congue erat lectus, eget feugiat risus viverra et. Etiam elementum molestie felis ut finibus. In ut fermentum tellus,  
                    ut dapibus tellus. 
                </p>
                
            </div>
            
            
        </div>

        <footer>     
            <?php include 'footer.php';?>
        </footer>
    </body>

</html>