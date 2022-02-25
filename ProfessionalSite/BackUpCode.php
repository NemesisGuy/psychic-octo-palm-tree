BackUp copies of code 
<!-- Button trigger modal -->
<p>
                     Login here:
                </p>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">  Login </button>
              
              
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registerModal"> Register </button>

                <!-- Modal  (login)-->
                <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header bg-danger" >
                        <h5 class="modal-title" id="loginModalLabel">Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="jumbotron">
                        <form class="form-horizontal" action="authenticate.php" method="post">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="username">User Name:</label>
                                <div class="col-sm-10">
                                <input type="username" name="username" class="form-control" id="username" placeholder="Enter user name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Password:</label>
                                <div class="col-sm-10">
                                <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-outline-primary">Submit</button>
                                </div>
                            </div>
                        </form>  
                </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="registerbtn">Register</button>
                    </div>
                    </div>
                </div>
                </div><!-- Modle form -->

                
                <!-- Modal  (register)-->
                <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header bg-danger" >
                        <h5 class="modal-title" id="registerModalLabel">Signup</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="jumbotron">
                        <form class="form-horizontal" action="register.php" method="post" data-toggle="validator">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="username">User Name:</label>
                                <div class="col-sm-10">
                                <input type="username" name="username" class="form-control" id="username" required placeholder="Enter user name">
                                </div>
                            </div>
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
                                <button type="submit" class="btn btn-outline-primary" id="registerBtn" name="registerBtn" >Register</button>
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
             