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
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script src='assets/js/jspdf.min.js'></script>
<script type="text/javascript">
    $(function () {

        $('input[name="datefilter"]').daterangepicker({
            autoUpdateInput: true,
            locale: {
                cancelLabel: 'Clear'
            }
        });

        $('input[name="datefilter"]').on('apply.daterangepicker', function (ev, picker) {
            $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
        });

        $('input[name="datefilter"]').on('cancel.daterangepicker', function (ev, picker) {
            $(this).val('');
        });

    });
   

</script>
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


        <script>
            var base64Img = null;
            imgToBase64('octocat.jpg', function (base64) {
                base64Img = base64;
            });

            margins = {
                top: 70,
                bottom: 40,
                left: 30,
                width: 550
            };

            generate = function ()
            {
                var pdf = new jsPDF('p', 'pt', 'a4');
                pdf.setFontSize(18);
                pdf.fromHTML(document.getElementById('html-2-pdfwrapper'),
                        margins.left, // x coord
                        margins.top,
                        {
                            // y coord
                            width: margins.width// max width of content on PDF
                        }, function (dispose) {
                    headerFooterFormatting(pdf, pdf.internal.getNumberOfPages());
                },
                        margins);

                var iframe = document.createElement('iframe');
                iframe.setAttribute('style', 'position:absolute;right:0; top:0; bottom:0; height:100%; width:650px; padding:20px;');
                document.body.appendChild(iframe);

                iframe.src = pdf.output('datauristring');
            };
            function headerFooterFormatting(doc, totalPages)
            {
                for (var i = totalPages; i >= 1; i--)
                {
                    doc.setPage(i);
                    //header
                    header(doc);

                    footer(doc, i, totalPages);
                    doc.page++;
                }
            }
            ;

            function header(doc)
            {
                doc.setFontSize(30);
                doc.setTextColor(40);
                doc.setFontStyle('normal');

                if (base64Img) {
                    doc.addImage(base64Img, 'JPEG', margins.left, 10, 40, 40);
                }

                doc.text("Report Header Template", margins.left + 50, 40);
                doc.setLineCap(2);
                doc.line(3, 70, margins.width + 43, 70); // horizontal line
            }
            ;

            // You could either use a function similar to this or pre convert an image with for example http://dopiaza.org/tools/datauri
            // http://stackoverflow.com/questions/6150289/how-to-convert-image-into-base64-string-using-javascript
            function imgToBase64(url, callback, imgVariable) {

                if (!window.FileReader) {
                    callback(null);
                    return;
                }
                var xhr = new XMLHttpRequest();
                xhr.responseType = 'blob';
                xhr.onload = function () {
                    var reader = new FileReader();
                    reader.onloadend = function () {
                        imgVariable = reader.result.replace('text/xml', 'image/jpeg');
                        callback(imgVariable);
                    };
                    reader.readAsDataURL(xhr.response);
                };
                xhr.open('GET', url);
                xhr.send();
            }
            ;

            function footer(doc, pageNumber, totalPages) {

                var str = "Page " + pageNumber + " of " + totalPages

                doc.setFontSize(10);
                doc.text(str, margins.left, doc.internal.pageSize.height - 20);

            }
            ;

        </script>
</body>
</html>