<?php include_once('header.php'); ?>
<section role="main" class="main inner-page">
    <div class="container mb-5 mt-5">
        <div class=" offset-lg-3 col-lg-6">
            <form class="form-signin form-signup needs-validation ">
                <h1 class="h3 ">Get Started</h1>
                <div class="col-md-12 mb-3 ">
                    <label for="inputName" class="sr-only">Name</label>
                    <input type="text" id="inputName" class="form-control" placeholder="Name" required="" autofocus="">
                    <div class="invalid-feedback">
                        Valid name is required.
                    </div>
                </div>
                <div class="col-md-12 mb-3 ">
                    <label for="inputBusiness" class="sr-only">Email address</label>
                    <input type="text" id="inputBusiness" class="form-control" placeholder="Individual/Business Name" required="" autofocus="">
                    <div class="invalid-feedback">
                        Valid Individual/Business Name is required.
                    </div>
                </div>
                <div class="col-md-12 mb-3 ">
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                    <div class="invalid-feedback">
                        Valid Email is required.
                    </div>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
                <p>Already have an account? <a href="login.html">Log in</a></p>
            </form>
        </div>
    </div> <!-- /container -->
</section>
<?php include_once('footer.php'); ?>