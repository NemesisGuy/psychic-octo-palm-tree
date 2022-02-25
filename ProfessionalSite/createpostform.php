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

        <script>
    $(document).ready(function(){
      var date_input=$('input[name="createPostDueDate"]'); //the date input has the name "createPostDueDate"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>


    </head>
    <body>
        <header>
            <?php include 'header.php';?>
        </header>    

        <div class="container">
            <div class = "jumbotron">
                <h3>Create Post  </h3>
                <form action="createpost.php" method="post" data-toggle="validator">
                    <div class="form-group">
                        <label for="createPostTitle">Title : </label>
                        <input type="text" class="form-control" name="createPostTitle" id="createPostTitle" placeholder="Post Title">
                    </div>
                    <div class="form-group">
                        <label for="createPostContent">Post Content : </label>
                        <textarea class="form-control" name="createPostContent" id="createPostContent" rows="3" placeholder="Content"></textarea>
                    </div>
                    
                        <!-- date picker code begins -->
                        <div class="bootstrap-iso">
                            <div class="row">
                                  
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                                        <label class="control-label" for="createPostDueOn">Due On : </label>
                                        
                                    </div>
                                    
                                <div class="col-lg-6  col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-group"> <!-- Date input -->
                                        <label class="control-label" for="createPostDueDate">Date : </label>
                                        <input class="form-control" id="createPostDueDate" name="createPostDueDate" placeholder="MM/DD/YYY" type="text"/>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-group"> <!-- time input -->
                                        <label class="control-label" for="createPostDueTime">Time (24h) : </label>
                                        <input class="form-control" type="time" name ="createPostDueTime" id="createPostDueTime"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- date picker code ends --> 

                    
                    <div>
                        <button type="submit" class="btn btn-outline-success">Post</button>
                    </div>
                </form>   <!-- form code ends --> 

            </div>
        </div>
        <footer>     
            <?php include 'footer.php';?>
        </footer>
    </body>

</html>


