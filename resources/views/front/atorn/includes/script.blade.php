<!-- jQuery first, then Bootstrap JS -->
<script src="{{ asset('assets/front/atorn/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/front/atorn/assets/js/bootstrap.bundle.min.js') }}"></script>
<!-- Meanmenu JS -->
<script src="{{ asset('assets/front/atorn/assets/js/meanmenu.min.js') }}"></script>
<!-- Magnific JS -->
<script src="{{ asset('assets/front/atorn/assets/js/jquery.magnific-popup.min.js') }}"></script>
<!-- Owl Carousel JS -->
<script src="{{ asset('assets/front/atorn/assets/js/owl.carousel.min.js') }}"></script>
<!-- Odometer JS -->
<script src="{{ asset('assets/front/atorn/assets/js/odometer.min.js') }}"></script>
<!-- Appear JS -->
<script src="{{ asset('assets/front/atorn/assets/js/jquery.appear.js') }}"></script>
<!-- Form Validator JS -->
<script src="{{ asset('assets/front/atorn/assets/js/form-validator.min.js') }}"></script>
<!-- Contact JS -->
<script src="{{ asset('assets/front/atorn/assets/js/contact-form-script.js') }}"></script>
<!-- Ajaxchimp JS -->
<script src="{{ asset('assets/front/atorn/assets/js/jquery.ajaxchimp.min.js') }}"></script>
<!-- Custom JS -->
<script src="{{ asset('assets/front/atorn/assets/js/custom.js') }}"></script>

<!-- DataTables   -->
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<!-- voice -->
<script src='https://code.responsivevoice.org/responsivevoice.js'></script>
<script>
    $(document).ready(function () {
        $web = document.getElementById('websitename').innerText;
        suara('Selamat datang di website ' + $web);

        // Tag a dan h3 saat di hover
        $("a, h3").mouseover(function (e) {
            $text = e.target.innerText;
            suara($text);
        });

        // saat blok text pada tag p
        $('body').mouseup(function () {
            $text = getSelectedText();
            suara($text);
        });

        function getSelectedText() {
            if (window.getSelection) {
                return window.getSelection().toString();
            } else if (document.selection) {
                return document.selection.createRange().text;
            }
            return '';
        }

        function suara($text) {
            responsiveVoice.speak(
                $text,
                "Indonesian Female",
                {
                    pitch: 1,
                    rate: 1,
                    volume: 1
                }
            );
        }
    });
</script>