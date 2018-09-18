<footer class="main-footer">
    <div class="container">

        <div class="row">
            <div class="col-md-12">

                <p class="text-center copyright">
                    © 2015 - 2018 Lorem            </p>
            </div>
        </div>
    </div>
</footer>
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
    $(".notification").click(function () {
        $(this).find('ul').fadeToggle(300);
    });
    $(".more a").click(function (e) {
        e.stopPropagation();
        $('.more').find('ul').fadeOut();
        $(this).next('ul').fadeIn(300);
    });
    $('body').click(function () {
        $('.more').find('ul').fadeOut();
    });
    $(document).on('keydown', function (e) {
        if (e.keyCode === 27) { // ESC
            $('.more').find('ul').fadeOut();
        }
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
    $('.toggle').click(function (e) {
        e.preventDefault();
        $('.accordion').find('li').removeClass('active');
        var $this = $(this);

        $this.parent('li').addClass('active');

        if ($this.next().hasClass('show')) {
            $this.next().removeClass('show');
            $this.next().slideUp(350);
        } else {
            $this.parent().parent().find('li .inner').removeClass('show');
            $this.parent().parent().find('li .inner').slideUp(350);
            $this.next().toggleClass('show');
            $this.next().slideToggle(350);
        }
    });
</script>
</body>
</html>