<?php include_once('header.php'); ?>
<section role="main" class="main">
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner-text">
                        <h2>Lorem Ipsum is simply dummy text of the</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    </div>
                </div>
                <form class="col-lg-4 col-md-5 ml-auto get-started needs-validation  ">
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
                    <div class="col-md-12">
                        <input type="submit" value="Get Started" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="parallax"><div class="invoice-slider">
            <div class="container ">
                <div class="row">
                    <div class="slide-header col-md-12 px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                        <h2>How it works</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="steps">
                            <i class="fas fa-users"></i>
                            <h3>Create Customer</h3>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="steps">
                            <i class="fas fa-bullhorn"></i>
                            <h3>Add Services</h3>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="steps">
                            <i class="fas fa-receipt"></i>
                            <h3>Create Invoice</h3>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="steps">
                            <i class="fas fa-truck-loading"></i>
                            <h3>Keep Track</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="pricing-header px-3 py-3 pt-md-4 pb-md-5 mx-auto text-center">
            <h2>Pricing</h2>
            <p>Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p>
        </div>
        <div class="card-deck mb-3 text-center pricing">
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 ">Free</h4>
                </div>
                <div class="card-body">
                    <h3 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h3>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><i class="fas fa-hand-point-right"></i> 10 users included</li>
                        <li><i class="fas fa-hand-point-right"></i> 2 GB of storage</li>
                        <li><i class="fas fa-hand-point-right"></i> Email support</li>
                        <li><i class="fas fa-hand-point-right"></i> Help center access</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
                </div>
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 ">Pro</h4>
                </div>
                <div class="card-body">
                    <h3 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h3>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><i class="fas fa-hand-point-right"></i> 20 users included</li>
                        <li><i class="fas fa-hand-point-right"></i> 10 GB of storage</li>
                        <li><i class="fas fa-hand-point-right"></i> Priority email support</li>
                        <li><i class="fas fa-hand-point-right"></i> Help center access</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
                </div>
            </div>
            <!--                    <div class="card mb-4 shadow-sm">
                                    <div class="card-header">
                                        <h4 class="my-0 ">Enterprise</h4>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h3>
                                        <ul class="list-unstyled mt-3 mb-4">
                                            <li><i class="fas fa-hand-point-right"></i> 30 users included</li>
                                            <li><i class="fas fa-hand-point-right"></i> 15 GB of storage</li>
                                            <li><i class="fas fa-hand-point-right"></i> Phone and email support</li>
                                            <li><i class="fas fa-hand-point-right"></i> Help center access</li>
                                        </ul>
                                        <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
                                    </div>
                                </div>-->
        </div>
    </div> <!-- /container -->


    <div class="trial-wrap" style="display:none">
        <div class="container">
            <h6>Start your free 14 day trial today</h6>
            <p>It only takes a minute to setup your account and in two minutes you’ll be sending your first invoice.</p>
            <form>
                <input type="email" placeholder="Enter your email address" />
                <input type="password" placeholder="Create password" />
                <input type="submit" value="Create Account" />
            </form>
            <p>By clicking “Create account” I agree to the <a href="">terms of service</a> and <a href="">privacy policy</a>.</p>
        </div>
    </div>
</section>
<section class="testimonial" style="display:none">
    <div class="container">
        <div class="row inner">
            <div class="col-md-3">
                <figure>
                    <img src="assets/img/testi-image.jpg" >
                </figure>
            </div>
            <div class="content col-md-9">
                <p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."</p>
                <div class="lower">
                    <span class="name">Kim George</span>
                    <span class="context">Founder of Small Business Sense</span>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include_once('footer.php'); ?>