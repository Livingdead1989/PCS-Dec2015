<!doctype html>
<html class="no-js" lang="en" >
    <head>

        <title>Park Community School | Weekly challenge</title>
        <?php include("includes/head.html") ?>
    </head>
<body class="page-parent">
<!-- NAVIGATION -->
<?php include("includes/topnav.html") ?>

<!-- HEADER SECTION -->
<header class="header-parent">
    <div class="row">
        <div class="medium-8 large-8 columns">
            <h1>Weekly Challenge</h1>
            <p class="text-capitalize"></p>
        </div>
    </div>
</header>
<!-- CONTENT -->
<section>
    <div class="row">
        <br>
        <div id="park-post" class="medium-12 columns">
            <h3>Weekly Challenge</h3>

            <ul class="text-center small-block-grid-1 medium-block-grid-3">
                
                <li class="">
                    <a href="assets/challenge/art-31-03.pdf" target="_blank">
                        <img class="small-6 medium-10 border-grey-radius" src="images/challenge/art-31-03.jpg" alt="">
                        <p>Art Challenge w/c 31st March</p>
                    </a>
                </li>

                <li class="">
                     <a href="assets/challenge/stem-31-03.pdf" target="_blank">
                        <img class="small-6 medium-10 border-grey-radius" src="images/challenge/stem-31-03.jpg" alt="">
                        <p>STEM Challenge w/c 31st March</p>
                    </a>
                </li>

            </ul>

        </div>
    </div>

    <br><br>
    <?php include("includes/backtotop.html") ?>
<!-- FOOTER -->
<?php include("includes/footer.html") ?>


        <!-- End Site Footer -->
        <script src="js/vendor/libraries.min.js"></script>
        <script src="js/vendor/foundation.min.js"></script>
        <script src="js/app.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="slick/slick.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){
              $('.homepage-slider').slick({
                autoplay: true,
                dots: true,
                fade: true
              });
            });
        </script>
    </body>
</html>
