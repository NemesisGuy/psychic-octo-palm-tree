
<?php
// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
// We don't have the password or email info stored in sessions so instead we can get the results from the database.

//$sql = 'SELECT * FROM `posts`';

$sql = "SELECT * FROM posts INNER JOIN useraccounts ON posts.users_id = useraccounts.id  ORDER BY post_id DESC ";


$result = mysqli_query( $con,$sql);


//$stmtposts = $con->query('SELECT * FROM `posts`');

// In this case we can use the account ID to get the account info.

//$stmtposts->execute();
//$stmtposts->bind_result($post_id, $user_id, $post_title, $post_content, $post_due_date,$post_due_time, $post_time);
//if($stmtposts && $stmtposts->num_rows>0){
//    $stmtposts->fetch_all(MYSQLI_ASSOC);
//}

// Fetch all

//$stmtposts->fetch_assoc();


//echo count((array)$stmtposts).' array length';





//$stmtposts->store_result();
//echo   (string) $stmtposts->num_rows;
//$stmtposts->close();

///////////////////////////////////////////////\
//$services = $mysqli->query("SELECT * FROM table1");
//if($services && $services->num_rows>0){
 //   $services->fetch_all(MYSQLI_ASSOC);
//}


//That's mean in this case $services is a valid array (or empty array)


?>