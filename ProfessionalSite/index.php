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
            <div class = "jumbotron customheading">
               
                <?php   if (!isset($_SESSION['loggedin'])) 
                        {
                            echo '   <h1>Home</h1>
                                    <p>Welcome Guest</p>
                                    <p>Please login or register to view the most recent posts </p>';
                        }
                        else 
                        {
                           
                            include 'feed.php';
                        }
                        
                ?>
                
            </div>
            
            
        </div>

        <footer>     
            <?php include 'footer.php';?>
        </footer>
    </body>

</html>
