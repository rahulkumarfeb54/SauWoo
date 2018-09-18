<?php include_once('header.php'); ?>
        <section role="main" class="main inner-page">

            <div class="container mb-5 mt-5">
                <div class=" offset-lg-3 col-lg-6">
                    <form class="form-signin needs-validation ">
                        <h1 class="h3">Please log in</h1>
                        <div class="col-md-12 mb-3 ">
                            <label for="inputEmail" class="sr-only">Email address</label>
                            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                            <div class="invalid-feedback">
                                Valid Email is required.
                            </div>
                        </div>
                        <div class="col-md-12 mb-3 ">
                            <label for="inputPassword" class="sr-only">Password</label>
                            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
                            <div class="invalid-feedback">
                                Valid Email is required.
                            </div>
                        </div>
                        <div class="col-md-12 mb-3 ">
                            <div class="checkbox mb-3">
                                <a href="">Forgot Password</a>
                            </div>
                        </div>
                        <button class="btn btn-md btn-primary" type="submit">Log in</button>
                        <p>Don't have an account? <a href="signup.html">Sign Up</a> Now</p>
                    </form>

                </div>
            </div> <!-- /container -->
        </section>
       <?php include_once('footer.php'); ?>