<?php
$registrationdate = date("Y-m-d H:i:s");

echo $registrationdate;

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Professional Site</title>
        <?php include 'resources.php';?>
    </head>
    <header>
         <?php include 'header.php';?>
    </header>
    <body>
        <div class="container">
            
            <div class="jumbotron">
                <a class="btn btn-success pull-right" data-toggle="modal" href="#myModal" id="registerUserModalLink">
                    Show Modal register form</a>
            </div>
            
            <div class="jumbotron">
                <a class="btn btn-success pull-right" data-toggle="modal" href="#myModal" id="loginModalLink">
                    Show Modal login form </a>
            </div>
            <div class="jumbotron">
                <a class="btn btn-success pull-right" data-toggle="modal" href="#myModal" id="updateUserModalLink">
                    Show Modal Update form </a>
            </div>

           
            <form>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3">
                    </div>
                </div><!-----end row------>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3">
                    </div>
                </div><!-----end row------>
                
                
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </div><!-----end row------>
            </form>


        </div>
        

    <footer>
    <?php include  'footer.php' ?>
    </footer>
    </body>
</html>
