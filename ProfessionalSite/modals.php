


<!-- Modal  (updateuser)-->
<div class="modal fade" id="updateUserModal" tabindex="1" role="dialog" aria-labelledby="updateUserModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header bg-danger" >
                        <h5 class="modal-title" id="updateUserModalLabel">Signup</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="jumbotron">
                        <form class="form-horizontal" action="updateuserprofile.php" method="post" data-toggle="validator">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="username">User Name : </label>
                                <div class="col-sm-10">
                                    <input type="username" name="username" class="form-control" id="username" required placeholder="Enter user name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="firstname">First Name : </label>
                                <div class="col-sm-10">
                                    <input type="firstname" name="firstname" class="form-control" id="firstname" required placeholder="Enter first name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="lastname">Last Name : </label>
                                <div class="col-sm-10">
                                    <input type="lastname" name="lastname" class="form-control" id="lastname" required placeholder="Enter last name">
                                </div>
                            </div>
                        <?php 
                            if ($level <=2)
                            {
                                echo '
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="subject">User Level : </label>
                                    <div class="col-sm-10">
                                        <input type="userlevel" name="userlevel" class="form-control" id="userlevel" required placeholder="Select user level">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="subject">Subject lectured : </label>
                                    <div class="col-sm-10">
                                        <input type="subject" name="subject" class="form-control" id="subject" required placeholder="Enter subject you lecture">
                                    </div>
                                </div>
                                ';
                            }
                        ?>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="emailAddress">Email Address:</label>
                                <div class="col-sm-10">
                                    <input type="email" name="emailAddress" class="form-control" id="emailAddress" placeholder="Enter email address">
                                 <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="password">Password:</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password" class="form-control" id="regpassword" placeholder="Enter password" onkeyup="confirmPasswordMatch()">
                                <div class="help-block with-errors"></div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="confirmPassword">Confirm Password:</label>
                                <div class="col-sm-10">
                                    <input type="password" name="confirmPassword" class="form-control" id="confirmPassword" placeholder="Confirm password" onkeyup="confirmPasswordMatch()">
                                <div class="help-block with-errors"  id="message"> </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-outline-primary" id="updateUserBtn" name="updateUserBtn" >Register</button>
                                </div>
                            </div>
                        </form>  
                </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                       
                    </div>
                    </div>
                </div>
                </div><!-- Modle form -->

            </div>
             