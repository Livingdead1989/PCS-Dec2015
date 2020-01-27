<!doctype html>
<html class="no-js" lang="en" >
    <head>

        <title>Park Community School | News</title>
        <?php include("includes/head.html") ?>
    </head>
<body class="page-school">
<!-- NAVIGATION -->
<?php include("includes/topnav.html") ?>

<!-- HEADER SECTION -->
<header class="header-school">
    <div class="row">
        <div class="medium-8 large-8 columns">
            <h1>Park News</h1>
            <p class="text-capitalize">What's happening at Park Community</p>
        </div>
    </div>
</header>
<!-- Breadcrumb -->
<div class="row">
    <ul class="breadcrumbs" role="menubar" aria-label="breadcrumbs">
        <li role="menuitem"><a href="#laca">LACA Award</a></li>
        <li role="menuitem"><a href="#communityimpact">Community Impact Award</a></li>
    </ul>
</div>

<!-- CONTENT -->
<!-- PARK POST -->
<section>
    <div class="row">
        <br>
        <div id="park-post" class="medium-12 columns">
            <h3>Park Post</h3>
            <p>Park Post is our magazine, celebrating all that is great about Park Community School!</p>
            <p>Park Post is available in downloadable PDF format.</p>

            <ul class="text-center small-block-grid-1 medium-block-grid-3">
                
                 <li class="">
                    <a href="assets/news/parkpost/issue23-jan2020.pdf" target="_blank">
                        <img class="small-6 medium-10 border-grey-radius" src="assets/news/parkpost/covers/issue23-jan2020.jpg" alt="Park Post Issue 23 Frontcover">
                        <p>Issue 23 - January 2020</p>
                    </a>
                </li>
                 <li class="">
                    <a href="assets/news/parkpost/issue22-jul2019.pdf" target="_blank">
                        <img class="small-6 medium-10 border-grey-radius" src="assets/news/parkpost/covers/issue22-jul2019.jpg" alt="Park Post Issue 22 Frontcover">
                        <p>Issue 22 - July 2019</p>
                    </a>
                </li>
                <li class="">
                    <a href="assets/news/parkpost/issue21-apr2019.pdf" target="_blank">
                        <img class="small-6 medium-10 border-grey-radius" src="assets/news/parkpost/covers/issue21-apr2019.jpg" alt="Park Post Issue 21 Frontcover">
                        <p>Issue 21 - April 2019</p>
                    </a>
                </li>
                         
               

            </ul>
            <p>For older issues of Park Post visit our <a href="/park-archive.php">Archive</a>.</p>

        </div>
    </div><br>
</section>
<!-- /PARK POST -->

<section class="grey-bg">
    <div class="row">
        <div class="small-centered large-1 column text-center hr-logo white-bg"></div>
    </div>
    <!-- persimmon building futures award - 8/10/2019 -->
    <?php include("includes/news/persimmon-building-futures-award.html") ?>
    <!-- /persimmon building futures award - 8/10/2019 -->
    <br><br>
    <?php include("includes/backtotop.html") ?>
</section>

<section>
    <div class="row">
        <div class="small-centered large-1 column text-center hr-logo grey-bg"></div>
    </div>
    <!-- social good award - 8/10/2019 -->
    <?php include("includes/news/social-good-award.html") ?>
    <!-- /social good award - 8/10/2019 -->
    <br><br>
    <?php include("includes/backtotop.html") ?>
</section>

<section class="grey-bg">
    <div class="row">
        <div class="small-centered large-1 column text-center hr-logo white-bg"></div>
    </div>
    <!-- children and young people award - 21/11/2018 -->
    <?php include("includes/news/children-and-young-people-award.html") ?>
    <!-- /children and young people award - 21/11/2018 -->
    <br><br>
    <?php include("includes/backtotop.html") ?>
</section>

<section>
    <div class="row">
        <div class="small-centered large-1 column text-center hr-logo grey-bg"></div>
    </div>
    <!-- hcc community impact award -->
    <?php include("includes/news/hcc-community-impact-award.html") ?>
    <!-- /hcc community impact award -->
    <br><br>
    <?php include("includes/backtotop.html") ?>
</section>


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
