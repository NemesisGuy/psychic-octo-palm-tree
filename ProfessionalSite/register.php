<?php
if (isset( $_POST['registerBtn']))
{
    include 'datatbaseconnection.php';

   

    // Now we check if the data from the register form was submitted, isset() will check if the data exists.
    if ( !isset($_POST['username'], $_POST['emailAddress'], $_POST['password']) ) 
    {
        // Could not get the data that should have been sent.
        die ('Please fill in the username , email address and password field!');
    }
    $con2 = $con;

    ////inset new user !!!!!!!!!!!!!!!!!!////////////////////////////////////////////////////
     // set parameters and execute
     
     $username =  $_POST['username'];
     $firstname = $_POST['firstname'];
     $lastname = $_POST['lastname'];
     $email =  $_POST['emailAddress']; 
     $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 

    $registrationdate = date("Y-m-d H:i:s"); /////set time zone

    
    
    
    // prepare and bind
    // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
    $stmt = $con->prepare("INSERT INTO useraccounts (username, firstname, lastname, email, password, registrationdate) VALUES (?, ?, ?, ?, ?, ?)");
    // Bind parameters (s = string, i = int, b = blob, etc)
    $stmt->bind_param("ssssss", $username, $firstname, $lastname, $email, $password, $registrationdate);


    //compare db to email in reg form
    $stmtcheck = $con2->prepare('SELECT id, email FROM useraccounts WHERE email = ?');
    // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
    $stmtcheck->bind_param('s', $_POST['emailAddress']);
    $stmtcheck->execute();
    // Store the result so we can check if the account exists in the database.
    $stmtcheck->store_result();

     //if duplicate email entry found tell user to recover password , redirect to index,
     if ($stmtcheck->num_rows > 0) 
     {
         echo "please use unique email or try password recovery!";
         $stmtcheck->close();
         header( "refresh:5; url=index.php" ); 
         die ();
              
    }else  // user email is not a duplicate
    {
        //excecute registration
        if($stmt->execute())
        {
        
            echo '<h1>Seems to have worked</h1>';
            header( "refresh:0; url=index.php" ); /// /// // /// /// /// /// /// /// ///  TODO : send  to profile  
        }
        else
        {
            echo '<h1>seems to be somthing wrong , regitration failed!!!!! try again!</h1>';
        }
    }

    // Note: remember to use password_hash in your registration file to store the hashed passwords.

}else //user opened register.php and did not use registerbutton....
{   
    
    echo "<h1>Illegal opperation detected </h1>
            <p>loggin IP address, intsalling  keylogger and worm, pwnage!!!</p>" ; 
            header( "refresh:5; url=index.php" ); 
    die ();
}

?>