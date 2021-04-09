<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title><?= $title; ?></title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="/template/assets/images/logo/fav.jpg" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="/template/assets/css/bootstrap.min.css">

    <!--====== Fontawesome Pro css ======-->
    <link rel="stylesheet" href="/template/assets/css/all.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="/template/assets/css/magnific-popup.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="/template/assets/css/nice-select.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="/template/assets/css/animate.min.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="/template/assets/css/slick.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="/template/assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="/template/assets/css/style.css">


</head>

<body>
    <?= $this->include('template/v_nav'); ?>
    <?= $this->renderSection('content'); ?>
    <?= $this->include('template/v_footer'); ?>

    <!--====== jquery js ======-->
    <script src="/template/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="/template/assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="/template/assets/js/bootstrap.min.js"></script>
    <script src="/template/assets/js/popper.min.js"></script>

    <!--====== Slick js ======-->
    <script src="/template/assets/js/slick.min.js"></script>

    <!--====== Isotope js ======-->
    <script src="/template/assets/js/isotope.pkgd.min.js"></script>

    <!--====== Images Loaded js ======-->
    <script src="/template/assets/js/imagesloaded.pkgd.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="/template/assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="/template/assets/js/jquery.counterup.min.js"></script>

    <!--====== Circle Progress js ======-->
    <script src="/template/assets/js/circle-progress.min.js"></script>

    <!--====== Syotimer js ======-->
    <script src="/template/assets/js/jquery.syotimer.min.js"></script>

    <!--====== Nice Select js ======-->
    <script src="/template/assets/js/jquery.nice-select.min.js"></script>

    <!--====== wow js ======-->
    <script src="/template/assets/js/wow.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="/template/assets/js/waypoints.min.js"></script>

    <!--====== Main js ======-->
    <script src="/template/assets/js/main.js"></script>

</body>

</html>
<!-- smooth scroll -->
<script>
    $(document).ready(function() {

        // Add smooth scrolling to all links

        $(".smooth").on('click', function(event) {



            // Make sure this.hash has a value before overriding default behavior

            if (this.hash !== "") {

                // Prevent default anchor click behavior

                event.preventDefault();



                // Store hash

                var hash = this.hash;



                // Using jQuery's animate() method to add smooth page scroll

                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area

                $('html, body').animate({

                    scrollTop: $(hash).offset().top

                }, 800, function() {



                    // Add hash (#) to URL when done scrolling (default click behavior)

                    window.location.hash = hash;

                });
            } // End if

        });

    });
</script>