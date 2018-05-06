

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
           <div class="container" id="loginform">
                <div class="card-block">
                    <form action="./partials/login_validation.php" method="POST">
                        <!--Header-->
                        <div class="text-center">
                            <h3><i class="fa fa-lock"></i> Login:</h3>
                            <hr class="mt-2 mb-2">
                        </div>

                        <!--Body-->
                        <div class="md-form">
                            <i class="fa fa-envelope prefix"></i>
                            <input type="text" id="usr-name" class="form-control" name="username">
                            <label for="usr-name">Enter Username/Email</label>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-lock prefix"></i>
                            <input type="password" id="pass" class="form-control" name="password">
                            <label for="pass">Enter Passowrd</label>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-primary">Login</button>
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