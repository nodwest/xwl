<!doctype html>
<html lang="en">

<head>

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>XWL</title>

    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/top_menu_formusic.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="js/jquery.backgroundvideo.min.js"></script>
</head>


<body>
    <? include_once "pages/top_menu.php"; ?>
        <div class="content_start">
            <div class="homepage-hero-module">
                <div class="video-container">
                    <div class="logo_container">
                        <div class="logo_xwl">
                            <h1>X W L</h1>
                        </div>
                    </div>

                    <div class="tex_video_wrap">
                        <div class="text_video">
                            <h1>AMBIENT </h1>
                             
                        </div>
                        <div class="text_video">
                                <h1>LOAD IT TO MY WORLD</h1>
                        </div>

                        <div class="text_video">
                                <button class="btn_more"><h1>WATCH MORE</h1></button>
                        </div>
                    </div>
                    <div class="filter"></div>
                    <video autoplay loop class="fillWidth">
                        <source src="video/xwl.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
                        <source src="PATH_TO_WEBM" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
                    </video>
                    <div class="poster hidden">
                        <img src="PATH_TO_JPEG" alt="">
                    </div>
                </div>
            </div>
        </div>


        <script>
            $(document).ready(function () {

                scaleVideoContainer();

                initBannerVideoSize('.video-container .poster img');
                initBannerVideoSize('.video-container .filter');
                initBannerVideoSize('.video-container video');

                $(window).on('resize', function () {
                    scaleVideoContainer();
                    scaleBannerVideoSize('.video-container .poster img');
                    scaleBannerVideoSize('.video-container .filter');
                    scaleBannerVideoSize('.video-container video');
                });

            });

            function scaleVideoContainer() {

                var height = $(window).height() + 5;
                var unitHeight = parseInt(height) + 'px';
                $('.homepage-hero-module').css('height', unitHeight);

            }

            function initBannerVideoSize(element) {

                $(element).each(function () {
                    $(this).data('height', $(this).height());
                    $(this).data('width', $(this).width());
                });

                scaleBannerVideoSize(element);

            }

            function scaleBannerVideoSize(element) {

                var windowWidth = $(window).width(),
                    windowHeight = $(window).height() + 5,
                    videoWidth,
                    videoHeight;

                // console.log(windowHeight);

                $(element).each(function () {
                    var videoAspectRatio = $(this).data('height') / $(this).data('width');

                    $(this).width(windowWidth);

                    if (windowWidth < 1000) {
                        videoHeight = windowHeight;
                        videoWidth = videoHeight / videoAspectRatio;
                        $(this).css({
                            'margin-top': 0,
                            'margin-left': -(videoWidth - windowWidth) / 2 + 'px'
                        });

                        $(this).width(videoWidth).height(videoHeight);
                    }

                    $('.homepage-hero-module .video-container video').addClass('fadeIn animated');

                });
            }
        </script>

        <div class="content_about">
            <div class="logo_about">
                <h1>ABOUT XWL</h1>
            </div> 

            <div class="about_text_wrap">
                <div class="about_text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad fuga molestiae omnis voluptatibus corrupti. Corporis aperiam rerum necessitatibus, omnis quidem a, corrupti aspernatur facere temporibus cum mollitia quasi obcaecati soluta?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi voluptatum expedita nobis aperiam, necessitatibus laudantium. Similique nulla, hic dolore quia neque enim asperiores iste dolor ipsa tenetur. Veritatis, eos ut?
                </div>
            </div>
            <div class="about_video_wrap">
                <div class="about_video">
                    <iframe width="800px" height="400px" src="https://www.youtube.com/embed/xApldi2rbk8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="content_form">

                <div class="thank_u" id="thu">
                        <h3>THANK YOU</h3>
                    </div>
            <form id="form1" action="" method="post">
                <div class="sign">
                    <h3>STAY UP TO DATE WITH </h3>
                    <h3> L Y T H. SIGN UP BELOW</h3>
                    <input class="input_s" type="text" placeholder=" INTER EMAIL" id="em">
                    <input class="submit_button" type="button" value="JOIN" onclick="yea()">
                    <div id="falls_email">
                        <p id="vivod"> </p>
                    </div>

                </div>



            </form>

            <div class="bottom_wrap" id="b_wrap">
                <div class="block1">
                    <img src="img/spase_al.jpg" width="100%" height="100%" alt="">
                </div>

                <div class="block2">
                    <div class="name_album">
                        <h3> LAST ALBUM </h3>
                    </div>
                    <ul class="main-menu">
                        <li>
                            <button> GET IT NOW</button>

                            <ul class="sub-menu">
                                <li>
                                    <a href="">APPLE MUSIC</a>
                                </li>
                                <li>
                                    <a href="">ITUNES</a>
                                </li>
                                <li>
                                    <a href="">SPOTIFY</a>
                                </li>
                                <li>
                                    <a href="">TIDAL</a>
                                </li>
                                <li>
                                    <a href="">GOOGLE PLAY</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>


            </div>
        </div>

        <? include_once "pages/form.php"; ?>

</html>