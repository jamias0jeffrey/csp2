<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
           <div class="container" id="loginform">
                <div class="card-block">
                    
                    <form action="./lib/create_user.php" method="POST" id=signupform>
                        <p class="h4 text-center mb-4">Sign up</p>

                        <div class="md-form">
                            <i class="fas fa-user-ninja prefix grey-text"></i>
                            <input type="text" id="userfullname" class="form-control" name="userfullname" required>
                            <label for="userfullname">Enter your full name</label>
                        </div>

                        <div class="md-form">
                            <i class="far fa-address-card prefix grey-text"></i>
                            <input type="text" id="useraddress" class="form-control" name="useraddress" required>
                            <label for="useraddress">Enter your address</label>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" id="username" class="form-control" name="username" required>
                            <label for="username">Enter desire username</label><span id="user_avail"></span>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-envelope prefix grey-text"></i>
                            <input type="email" id="useremail" class="form-control" name="useremail" required>
                            <label for="useremail">Enter your email</label><span id="mail_avail"></span>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-lock prefix grey-text"></i>
                            <input type="password" id="userpassword" class="form-control" name="userpassword" required>
                            <label for="userpassword">Your password</label><span id="pwlength"></span>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-exclamation-triangle prefix grey-text"></i>
                            <input type="password" id="confirmpassword" class="form-control" name="confirmpassword" required>
                            <label for="confirmpassword">Confirm password</label><span id="match"></span>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="terms">
                            <label class="form-check-label" for="terms">
                                I want to receive exclusive offers and promotions from Pure Tech.
                            </label>
                        </div>

                        <div class="text-center mt-4">
                            <button class="btn btn-primary" type="submit" id="signup">Sign Up</button>
                        </div>
                        <div class="md=form" id="policy">
                            <p>By clicking "Sign Up" I agree to <span><a href="#">Pure Tech policy.</a></span></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


