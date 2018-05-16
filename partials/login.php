

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
           <div class="container" id="loginform">
                <div class="card-block">
                    <form action="./lib/login_user.php" method="POST">
                        <!--Header-->
                        <div class="text-center">
                            <h3><i class="fa fa-lock"></i> Login:</h3>
                            <hr class="mt-2 mb-2">
                        </div>

                        <!--Body-->
                        <div class="md-form">
                            <i class="fa fa-envelope prefix"></i>
                            <input type="text" id="login_username" class="form-control" name="login_username" required>
                            <label for="login_username">Enter Username/Email</label>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-lock prefix"></i>
                            <input type="password" id="login_password" class="form-control" name="login_password" required>
                            <label for="login_password">Enter Passowrd</label>
                        </div>

                        <div class="text-center">
                            <span id="errormsg"></span>
                        </div>
                        <div>
                            <span id="msgerror"></span>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" id="loginbtn">Login</button>
                        </div>

                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options">
                                <p>Forgot <a href="#">Password?</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>