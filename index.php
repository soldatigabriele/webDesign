<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width"/>
    <title>SoldatiDesign</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="include/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="include/css/stylesheet.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="include/autoscroll/animatescroll.js"></script>
    <script src="include/jQuery/jquery-1.12.4.js"></script>
    <script src="include/stellar/jquery.stellar.js"></script>
    <!--    grid image css -->
    <link rel="stylesheet" type="text/css" href="include/css/demo.css"/>
    <link rel="stylesheet" type="text/css" href="include/css/style.css"/>
    <script type="text/javascript" src="include/gridImagesJs/modernizr.custom.26633.js"></script>
    <noscript>
        <link rel="stylesheet" type="text/css" href="css/fallback.css"/>
    </noscript>
    <script src="include/jquery.appear/jquery.appear.js"></script>
    <!--    end image Grid css  -->
    <!--        inizialize parallax effect-->
    <script>
        $(document).ready(function () {
            $(window).stellar();
        });
    </script>

</head>
<body>
<?php include('include/init.php'); ?>
<div class="header">
    <nav>
        <a id="about" href="#">About Me</a> |
        <a id="web" href="#">Skills</a> |
        <a id="works" href="#">Websites</a> |
        <a id="flickr" href="#">Web Services</a> |
        <a id="contacts" href="#">Contacts</a>
    </nav>
</div>


<div class="page" style="">
    <div class="firstImage" id="wall_about" data-stellar-background-ratio="0.5"></div>
    <div class="content" id="content_about">
        <div class="title">WHO AM I</div>
        <div class="description">
            <p>I am a graduate back-end developer</p>
            <p>I like to challenge myself and I love to learn!</p>
        </div>

    </div>
    <span id="index_about"></span>

    <div class="image" id="wall_web" data-stellar-background-ratio="0.5"></div>
    <div class="content" id="content_web">
        <div class="title">WEB DEVELOPMENT</div>
        <div class="description">
            <p>Strong PHP and OOP coding skills</p>
            <p>I also like to code in Javascript and jQuery</p>
            <p>I use GITHUB and I love Laravel!</p>
        </div>
        <div class="images">
            <div class="col-md-10 col-md-offset-1 logos">
                <div class="col-md-2 transparent" id="slide1"><img class="img-circle" id="img1" src="img/php.png"
                                                                   alt="Circle image"></div>
                <div class="col-md-2 transparent" id="slide2"><img class="img" id="img2" src="img/mysql.png"
                                                                   alt="Circle image"></div>
                <div class="col-md-2 transparent" id="slide3"><img class="img" id="img3" src="img/githubB.png"
                                                                   alt="Circle image"></div>
                <div class="col-md-2 transparent" id="slide4"><img class="img" id="img5" src="img/js.png"
                                                                   alt="Circle image"></div>
                <div class="col-md-2 transparent" id="slide5"><img class="img" id="img4" src="img/laravel.png"
                                                                   alt="Circle image"></div>
                <div class="col-md-2 transparent" id="slide6"><img class="img" id="img6" src="img/jquery.png"
                                                                   alt="Circle image"></div>
            </div>
        </div>
    </div>
    <span id="index_web"></span>


    <div class="image" id="wall_works" data-stellar-background-ratio="0.2"></div>
    <span id="index_works"></span>
    <div class="content" id="content_works">
        <div class="titleWorks">Some of my works...</div>

    <ul class="photo-grid">
        <li>
            <a href="Works/EasyRetrieve/overview.php">
                <figure>
                    <img src="img/ER.jpg" height="180" width="320" alt="Arc de Triomphe">
                    <figcaption><p>EasyRetrieve</p></figcaption>
                </figure>
            </a>
        </li>
        <li>
            <a href="Works/Laboa/overview.php">
                <figure>
                    <img src="img/laboa.png" height="180" width="320" alt="Eiffel Tower">
                    <figcaption><p>LaBoa</p></figcaption>
                </figure>
            </a>
        </li>
        <li><a href="Works/Technology4u/overview.php">
                <figure>
                    <img src="img/tech4u.jpg" height="180" width="320" alt="Notre Dame">
                    <figcaption><p>Technology4U</p></figcaption>
                </figure>
            </a>
        </li>
    </ul>
    </div>

    <div class="clearfix"></div>
    <br><br>

    <div class="image" id="wall_flickr" data-stellar-background-ratio="0.2"></div>
    <div class="content" id="content_flickr">
        <div class="title">Web Services</div>
        <p>I like to work with REST Services: I have experience with Flickr, Google and Instagram APIs</p>
        <div class="col-md-12 imageThumbnail">
            <?php
            $image = new Flickr();
            ?>

            <section class="main">
                <div id="ri-grid" class="ri-grid ri-grid-size-2 ri-shadow">
                    <ul>
                        <?php $image->getImage(); ?>
                    </ul>
                </div>
            </section>
        </div>

        <br>
        <iframe style="display:none;"></iframe>
        <iframe src="https://www.facebook.com/plugins/like.php?href=http://www.uniud.it/&show_faces=false"
                scrolling="no" frameborder="0" style="border:none; width:400px; height:80px"
                allowtransparency="true"></iframe>
    </div>
    <span id="index_flickr"></span>

    <div class="content col-md-12" id="content_contacts">
        <div class="col-md-4">soldati.gabriele@gmail.com</div>
        <div class="col-md-4">
            <a href="https://www.facebook.com/gbrlit">
                <div class="col-md-1 col-md-offset-4">
                    <img id="imgFace" src="img/cont_facebook.png" width="20px" alt="">
                </div>
            </a>
            <a href="https://www.instagram.com/gabrielesoldati/">
                <div class="col-md-1">
                    <img id="imgInsta" src="img/cont_instagram.png" width="20px" height="20px" alt="">
                </div>
            </a>
            <a href="https://github.com/soldatigabriele">
                <div class="col-md-1">
                    <img id="imgGit" src="img/github.png" width="20px" alt="">
                </div>
            </a>
            <a href="https://www.linkedin.com/in/gabriele-soldati-4a3992aa?trk=nav_responsive_tab_profile_pic">
                <div class="col-md-1">
                    <img id="imgLink" src="img/cont_linkedin.png" width="20px" alt="">
                </div>
            </a>
        </div>
        <div class="col-md-4">Manchester - UK</div>
        <div class="col-md-12 copyright">© 2016 Gabriele Soldati. All rights reserved.</div>
    </div>
</div>
<span id="index_contacts"></span>
<script src="include/scripts/scripts.js"></script>
<script type="text/javascript" src="include/gridImagesJs/jquery.gridrotator.js"></script>
<script src="include/scripts/grid.js"></script>

</body>
</html>

