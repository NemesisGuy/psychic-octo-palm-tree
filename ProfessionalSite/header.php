<!-----------NavBar------------>

            <nav class="navbar navbar-expand-lg navbar-light bg-primary ">
              <!--------  <a class="navbar-brand" href="index.php">Nemesis Net</a>---NavBar-Branding------------>
				<a class="navbar-brand" href="index.php"><img src="./src/img/Nemesis_Net_Logo1_200x200.png" alt="Nemesis Net" height="42" width="42"></a>
				
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=contactus.php>Contact Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        
                       
                        
                   
<?php // If the user is logged show  view profile ,update Profile and logout...
    if (isset($_SESSION['loggedin'])) 
    {
        echo '          <a class="dropdown-item" href="profile.php">View Profile</a>
                        <a class="dropdown-item" id="updateUserModalLink" href="#myModal">Update Profile</a>
	                    
            ';
            if ($level <=2) 
            {
               

              echo '    
                          <div class="dropdown-divider"></div>
                         <a class="dropdown-item" name="createpostformbtn" href="createpostform.php">Create Post</a>
                    ';           
            }

        echo '           <div class="dropdown-divider"></div>
                         <a class="dropdown-item" href="logout.php">Logout</a>
            ';    
    }else
    {
        echo '          
                        <a class="dropdown-item" id="loginModalLink" href="#myModal">Log In</a>
                        <a class="dropdown-item" id="registerUserModalLink" href="#myModal">Register</a>
             ';
    
    }         
?>
           
                        </div>
                    </li>
                    
                    </ul>
 <?php    
        if (isset($_SESSION['loggedin'])) 
        {
            echo '
                    <div class="username navbar-brand"> '. $username .'   </div>
            ';

        }
              
?>    
                </div>
            </nav>
       
          
                

    
    