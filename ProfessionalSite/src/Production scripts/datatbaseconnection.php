<?php 

    // Change this to the servers connection info.
    $DATABASE_HOST = 'sql110.epizy.com';
    $DATABASE_USER = 'epiz_25157660';
    $DATABASE_PASS = 'E7nQHmrwVIKnOZc';
    $DATABASE_NAME = 'epiz_25157660_prologin';
    $DATABASE_PORT = '';
    // Try and connect using the info above.
    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME, $DATABASE_PORT);
    if ( mysqli_connect_errno() ) 
    {
        // If there is an error with the connection, stop the script and display the error.
        die ('Failed to connect to MySQL: ' . mysqli_connect_error());
    }
?>
