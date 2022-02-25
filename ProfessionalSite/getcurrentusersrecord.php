
<?php
// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT  `username`, `firstname`, `lastname`, `password`, `email`, `subject`, `level`, `registrationdate` FROM `useraccounts` WHERE id = ?');


// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($username, $firstname, $lastname, $password, $email, $subject, $level, $registrationdate);
$stmt->fetch();
$stmt->close();
?>