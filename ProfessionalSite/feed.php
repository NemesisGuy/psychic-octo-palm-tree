
 <?php

if (isset($_SESSION['loggedin'])) {	
    include 'getallposts.php';
}
?>
    <div class="customheading">
          <h1> Feed </h1>
    </div>
                
         
  <?php 
   echo ' <p>Welcome ' .$username .'  </p>';

    while ($row = mysqli_fetch_assoc($result)) 
    {   
        echo  '
                <div class="card feedpost">
                            <div class="card-header ">
                                <div class="card-header-Postedby">Posted By : '.$row["username"] .' </div>
                                <div class="card-header-subject">Subject :  '.$row["subject"] .' </div>
                            
                            </div>
                            <div class="card-body">
                                <div class="card-body-title"> <h5>'.$row["post_title"] .'</h5> </div>
                                <p>
                                    '.$row["post_content"].'
                                </p>
                            </div>
                            <div class="card-footer ">
                                <div class="card-footer-time-due"> Due Date : '.$row["post_due_date"].' - '.$row["post_due_time"].' </div>
                                <div class="card-footer-time-posted">Posted : '.$row["post_time"].'</div>
                                
                            </div>
                        </div>
                   
            ';        
    }































    //   while ($row = mysqli_fetch_assoc($result)) 
   //    {
   //        echo " post id : ".$row['post_id'] .
   //             " post title : ".$row['post_title'] .
   ////             " post content : ".$row['post_content'].
  //              " post due date : ".$row['post_due_date'].
  //              " post due time : ".$row['post_due_time'].
  //              " post made at : ".$row['post_time'] 
  //              ."<br> <hr>"; 
  //     }
    
     //      echo '<br/>';
     //      print_r($key);
     //       echo '<br/>';
     //       print_r($value);
            //echo implode(" ",$value); //work properly, cause it implements Iterator 
     //       echo '<br/>';
     //   }

        //  data structure below.....
        //  0 Array (
        //      [post_id] , [users_id],[post_title] ,[post_content]  [post_due_date],  [post_due_time], [post_time] );
        //  1 Array (
        //      [post_id] , [users_id],[post_title] ,[post_content]  [post_due_date],  [post_due_time], [post_time] );

        ////object structure bellow
        //  object(mysqli_result)[3]
        //      public 'current_field' => int 0
        //      public 'field_count' => int 7
        //      public 'lengths' => null
        //      public 'num_rows' => int 2
        //      public 'type' => int 0
  

       // var_dump($stmtposts);
  ?>
            
       








