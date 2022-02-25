<!---createpost.php---->
<?php
    session_start();
//if (isset( $_POST['createpostformbtn']))
//{
    include 'datatbaseconnection.php';
    

   

    

    ////inset new user !!!!!!!!!!!!!!!!!!////////////////////////////////////////////////////
    //// set parameters and execute
     
     $userId       =  $_SESSION['id'];
     $postTitle    =  $_POST['createPostTitle'];
     $postContent  =  $_POST['createPostContent'];
     $postDueDate  =  $_POST['createPostDueDate'];
     $postDueTime  =  $_POST['createPostDueTime'];
     $postDateTime = date("Y-m-d H:i:s"); /////set time zone

    

    // INSERT INTO `posts`(`post_id`, `user_id`, `post_title`, `post_content`, `post_due_date`, `post_due_time`, `post_time`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])
    
   
    // prepare and bind
    // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
 // $stmt = $con->prepare("INSERT INTO useraccounts (username, firstname, lastname, email, password, registrationdate) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt = $con->prepare("INSERT INTO posts (users_id, post_title, post_content, post_due_date, post_due_time, post_time) VALUES (?, ?, ?, ?, ?, ?)");
    // Bind parameters (s = string, i = int, b = blob, etc)
//  $stmt->bind_param("ssssss", $username, $firstname, $lastname, $email, $password, $registrationdate);
    $stmt->bind_param("isssss", $userId, $postTitle, $postContent, $postDueDate, $postDueTime, $postDateTime);
    
   

    header( "refresh:5; url=index.php" ); 
   

     
        //excecute registration
        if($stmt->execute())
        {
        
            echo '<h1>Seems to have worked</h1>';
            header( "refresh:0; url=index.php" ); 
            $stmt->close();
        }
        else
        {
            echo '<h1>seems to be somthing wrong , Post failed!!!!! try again!</h1>';
            $stmt->close();
        }
    

    // Note: remember to use password_hash in your registration file to store the hashed passwords.

//}else //user opened register.php and did not use registerbutton....
//{   
    
//    echo "<h1>Illegal opperation detected </h1>
//            <p>loggin IP address, intsalling keylogger and worm, pwnage!!!</p>" ; 
//            header( "refresh:5; url=index.php" );
            
//    die ();
//}

?>