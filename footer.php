<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row links-section">
                    <div class="col-md-3">
                        <ul class="list-unstyled m-lg-bottom">
                            <li><a href="" >About Us</a></li>
                            <li><a href="" >Blog</a></li>
                            <li><a href="">Feedback</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="list-unstyled m-lg-bottom">
                            <li><a href="" >About Us</a></li>
                            <li><a href="" >Blog</a></li>
                            <li><a href="">Feedback</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="list-unstyled m-lg-bottom">
                            <li><a href="" >About Us</a></li>
                            <li><a href="" >Blog</a></li>
                            <li><a href="">Feedback</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="list-unstyled m-lg-bottom">
                            <li><a href="" >About Us</a></li>
                            <li><a href="" >Blog</a></li>
                            <li><a href="">Feedback</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="social-icons-wrapper text-center">
                    <a href="" target="_self"><i class="fab fa-google-plus-g"></i></a>
                    <a href="" target="_self"><i class="fab fa-twitter"></i></a>
                    <a href="" target="_self"><i class="fab fa-facebook-f"></i></a>
                    <a href="" target="_self"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <p class="text-center copyright">© 2015 - 2018 Innobeus</p>
            </div>
        </div>
    </div>
</footer>
<div id="co-notice" class="cookie" >
    <div class="cookie-wrap">
        <span id="notice">Cookies Policy | This website uses cookies to ensure you get the best experience on our website.</span>
        <a class="btn btn-sm btn-primary" href="javascript:void(0);" id="accept-cookie">GOT IT</a>
    </div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script>
    $('#accept-cookie').click(function () {
        $('#co-notice').toggle(300);
    });
    $("li.dropdown").hover(function () {
        $(".dropdown-menu").animate({
            display: 'block',
            width: ["toggle", "swing"],
            height: ["toggle", "swing"],
            top: '90%'
        }, 200, 0);
    }, function () {
        $(".dropdown-menu").stop(true).fadeOut(100).animate({top: '120%'});
    });
    $('.navbar-toggler').click(function () {
        $('.navbar-collapse').slideToggle();
    });
// Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
</body>
</html>