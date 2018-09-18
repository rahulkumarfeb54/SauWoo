<?php include_once('header.php'); ?>
        <section role="main" class="main inner-page">
            <div class="jumbotron ">
                <div class="container">
                    <h1 class="title">Contact</h1>
                </div>
            </div>

            <div class="container mb-5 mt-5">
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="mb-3">We'd love to hear from you</h4>
                        <form class="needs-validation  contact" novalidate="">
                            <div class="row">
                                <div class="col-md-6 mb-3 ">
                                    <label for="inputName" class="sr-only">Name</label>
                                    <input type="text" id="inputName" class="form-control ErrorField" placeholder="Name" required="" autofocus="">
                                    <div class="invalid-feedback">
                                        Valid name is required.
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="inputEmail" class="sr-only">Email address</label>
                                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                                    <div class="invalid-feedback">
                                        Please enter a valid email address .
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="Subject" class="sr-only">Subject</label>
                                    <input type="text" id="Subject" class="form-control" placeholder="Subject" required="" autofocus="">
                                    <div class="invalid-feedback">
                                        Please enter Subject.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="Message" class="sr-only">Message</label>
                                    <textarea class="form-control" id="Message" placeholder="Your message" required=""></textarea>
                                    <div class="invalid-feedback">
                                        Please enter Message.
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <h4 class="mb-3">Find Us</h4>
                            <div class="mb-4">
                                <h6>CUSTOMER SUPPORT</h6>
                                <p>Customer@innobeus.com</p>
                            </div>
                            <div class="mb-4">
                                <h6>PRESS INQUIRIES</h6>
                                <p>press@innobeus.com</p>
                            </div>
                            <div class="mb-4">
                                <h6>ENTERPRISE SOLUTIONS</h6>
                                <p>enterprise@innobeus.com</p>
                            </div>
                            <div class="mb-4">
                                <h6>PARTNER WITH US</h6>
                                <p>partner@innobeus.com</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- /container -->




        </section>
      <?php include_once('footer.php'); ?>