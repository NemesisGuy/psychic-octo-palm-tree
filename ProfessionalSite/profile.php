<?php

// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit();
	
}

include 'datatbaseconnection.php';
include 'getcurrentusersrecord.php';

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profile Page</title>
		
	
		 <?php include 'resources.php';?>
		
		
	</head>
	<header>
		<?php include 'header.php';?>
	</header>
	<body>
		<div class="container">
            <div class="jumbotron"> 
			<h2>Profile Page  </h2>
			</div>
			<div class="jumbotron text-wrap"> 
				<p><b>Account details : </b></p>
				 	<div>
						<p>User Name : </p>
						<p><?=$username?></p>
					</div> 
						<p>First Name : </p>
						<p><?=$firstname?></p>
					<div>
						<p>Last Name : </p>
						<p><?=$lastname?></p>
					</div>
						<p>Email : </p>
						<p><?=$email?></p>
					<div>
						<p>Subject : </p>
						<p><?=$subject?></p>
					</div>
					<div>
						<p>Password:</p>
						<p class="text-turncate"><?=$password?></p>
					</div>
					<div>
						<p>Regtered Since:</p>
						<p><?=$registrationdate?></p>
					</div>
					
				
			</div>
			
		</div>
		<?php include 'footer.php';?>
	</body>
</html>