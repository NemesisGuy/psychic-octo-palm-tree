<?php session_start();

	// If the user is not logged in redirect to the login page...
    if (!isset($_SESSION['loggedin'])) {
        header('Location: index.html');
        exit();
    }
    include 'datatbaseconnection.php';
	include 'getcurrentusersrecord.php';

	

		$con2 = $con;
	
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
			  echo "Please use unique email ";
			  $stmtcheck->close();
			  header( "refresh:5; url=index.php" ); 
			  die ();
				   
		 }else  // user email is not a duplicated
		 { 
			 $newUserName  =	(empty($_POST['username']))     ? $username  : $_POST['username'];
			 $newFirstName =	(empty($_POST['firstname']))    ? $firstname : $_POST['firstname'];
			 $newLastName  =	(empty($_POST['lastname']))     ? $lastname  : $_POST['lastname'];
			 $newemail     =	(empty($_POST['emailAddress'])) ? $email     : $_POST['emailAddress'];
			 $newPassword  =	(empty($_POST['password']))     ? $password  : password_hash($_POST['password'], PASSWORD_DEFAULT); 
			 // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
			 $stmt = $con->prepare("UPDATE useraccounts SET username = ?, firstname = ?, lastname = ?, email = ?, password = ? WHERE id = ?");
			 // Bind parameters (s = string, i = int, b = blob, etc)
			 $stmt->bind_param("ssssss", $newUserName, $newFirstName, $newLastName, $newemail, $newPassword, $_SESSION['id']);
			 
			 //Excecute user profile update
			 if($stmt->execute())
			 { 
				 echo '<h1 style="color:green;"> Updated successfully</h1>';
				 header( "refresh:1; url=profile.php" ); 
				 $stmt->close();
				 die ();  
			 }
			 else //failed
			 {
				 echo '<h1 style="color:red;">OOPs Somthing wrong , Update failed!!!!! try again!</h1>';
				 header( "refresh:1; url=index.php" ); 
				 $stmt->close();
				 die ();  
			 }
		 }

	 
	

   
?>



