<!--Login pop up -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" style="width:300px">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Login</h4>
                                      </div>
                                      <div class="modal-body">
                                        <form action="login.php" method="post">
                                        <input type="text" class="form-control" name="loginusername" class="loginuser" placeholder="Username" required></input></br>
                                        <input type="password" class="form-control" name="loginpassword" class="loginuser" placeholder="Password" style="margin-bottom:20px" required></input>
                                      
                                        <button type="Submit" class="btn btn-primary" id="login">Login</button>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#myModal1">Sign Up</button>
                                    </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                
                                <!--Register pop up-->
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" style="width:300px">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Sign Up</h4>
                                      </div>
                                      <div class="modal-body">
                                        <form action="register.php" method="post">
                                        <input type="text" class="form-control" name="name" class="loginuser" placeholder="Enter Name" required></input></br>
                                        <input type="text" class="form-control"  name="username" class="loginuser" placeholder="Enter Username" required></input></br>
                                        <input type="email" class="form-control"  name="emailid" class="loginuser" placeholder="Enter Email ID" required></input></br>
                                        <input type="password" class="form-control" name="password" class="loginuser" placeholder="Enter Password" required></input></br>
                                        <input type="password" class="form-control" name="cpassword" class="Confirm Password" placeholder="Confirm Password" required></input></br>
                                      
                                        <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#myModal">Login</button>
                                        <button type="submit" class="btn btn-primary" id="signup">Sign Up</button>
                                    </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>