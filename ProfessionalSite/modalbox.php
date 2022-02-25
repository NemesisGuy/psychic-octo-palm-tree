<!---------------------First Modal------------------------------>
                <!-- Modal  (Register)-->
 
                <!-- Modal  (Update)-->
<div id="registerUserModal" class="modal fade">
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
                                <label class="control-label col-sm-2" for="firstname">First Name:</label>
                                <div class="col-sm-10">
                                <input type="firstname" name="firstname" class="form-control" id="firstname" required placeholder="Enter first name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="username">Last Name:</label>
                                <div class="col-sm-10">
                                <input type="lastname" name="lastname" class="form-control" id="lastname" required placeholder="Enter last name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="emailAddress">Email Address:</label>
                                <div class="col-sm-10">
                                <input type="email" name="emailAddress" class="form-control" id="emailAddress" placeholder="Enter email address" onkeyup="validateEmail()">
                                <div class="help-block with-errors" id="emailMessage"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="password">Password:</label>
                                <div class="col-sm-10">
                                <input type="password" name="password" class="form-control" id="regpassword" placeholder="Enter password" onkeyup="confirmPasswordMatch()">
                                <div class="help-block with-errors" ></div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="confirmPassword">Confirm Password:</label>
                                <div class="col-sm-10">
                                <input type="password" name="confirmPassword" class="form-control" id="confirmPassword" placeholder="Confirm password" onkeyup="confirmPasswordMatch()">
                                <div class="help-block with-errors"  id="passwordMessage"> </div>
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
  
                
               
        
    
  <!-- Modal  (register) End-->
<!-- Modal  ()End-->


<!---------------------Seconed Modal------------------------------>
            
                <!-- Modle form -->
                <!-- Modal  (login) End---->
<div id="loginModal" class="modal fade">
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
                



<!---------------------Third Modal------------------------------>
                  <!-- Modal  (Update)----->
       <!-- Modle form -->
             <!-- Modal  (Update)-->
             <div id="updateUserModal" class="modal fade">
      <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header bg-danger" >
                        <h5 class="modal-title" id="updateUserModalLabel">Update Profile</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="jumbotron">
                        <form class="form-horizontal" action="updateUserProfile.php" method="post" data-toggle="validator">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="username">User Name:</label>
                                <div class="col-sm-10">
                                <input type="username" name="username" class="form-control" id="username" required placeholder="Enter user name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="firstname">First Name:</label>
                                <div class="col-sm-10">
                                <input type="firstname" name="firstname" class="form-control" id="firstname" required placeholder="Enter first name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="lastname">Last Name:</label>
                                <div class="col-sm-10">
                                <input type="lastname" name="lastname" class="form-control" id="lastname" required placeholder="Enter last name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="emailAddress">Email Address:</label>
                                <div class="col-sm-10">
                                <input type="email" name="emailAddress" class="form-control" id="emailAddress" placeholder="Enter email address" onkeyup="validateEmail()">
                                <div class="help-block with-errors" id="emailMessage"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="password">Password:</label>
                                <div class="col-sm-10">
                                <input type="password" name="password" class="form-control" id="regpassword" placeholder="Enter password" onkeyup="confirmPasswordMatch()">
                                <div class="help-block with-errors" ></div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="confirmPassword">Confirm Password:</label>
                                <div class="col-sm-10">
                                <input type="password" name="confirmPassword" class="form-control" id="confirmPassword" placeholder="Confirm password" onkeyup="confirmPasswordMatch()">
                                <div class="help-block with-errors"  id="passwordMessage"> </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-outline-primary" id="updateBtn" name="updateBtn" >Update</button>
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
  
            <!-- Modal  (Update) End----->

             
<!---------------------Forth Modal------------------------------>
             <!-- Modal  ()----->










<!---------------------Fith Modal------------------------------>
             <!-- Modal  ()----->




<div id="myModalB" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Sample Model Box - Header Area</h4>
            </div>
            <div class="modal-body">
                <form>
				  <div class="form-group">
					<label for="recipient-name" class="control-label">Recipient:</label>
					<input type="text" class="form-control" id="recipient-name">
				  </div>
				  <div class="form-group">
					<label for="message-text" class="control-label">Message:</label>
					<textarea class="form-control" id="message-text"></textarea>
				  </div>
				</form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>  
<!-- Modal  ()End-->


<!---------------------Sixth Modal------------------------------>
                    <!-- Modal  ()-->


