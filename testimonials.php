<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <!-- Icons -->
        <?php include 'icons.php' ?>
        <title>Will Aust Architecture</title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <style>
            .testimonial .inner p {
                padding: 0 20px;   
            }
            .testimonial p {
                padding: 0 50px;   
            }
            .person {
                margin: 50px 0 40px 0;
                font-weight: bold;
                color: #727270;
            }
            .testimonial .inner {
                border: 3px solid #A7CD37;
                background: #C1D975;
                border-radius: 15px;
                margin: 20px 50px;
                padding: 20px;
                position: relative;
                font-weight: bold;
            }
            .testimonial .inner p:after,
            .testimonial .inner p:before {
                display: inline-block;
                content:"";
                position: absolute;
                width: 0;
                height: 0;
                border-style: solid;
                border-width: 40px 40px 0 5px;
                border-color: #A7CD37 transparent transparent transparent;
            }
            .testimonial .inner p:before {
                top: 100%;
                left: 40px;
            }
            .testimonial .inner p:after {
                top: 97%;
                left: 43px;
                z-index: 10;
                border-width: 35px 35px 0 5px;
                border-color: #C1D975 transparent transparent transparent;
            }
            @media screen and (max-width: 767px) {
                .testimonial .inner {
                    margin-left: 0;
                    margin-right: 0;
                }
                .testimonial .person {
                    padding-left: 20px;
                    padding-right: 20px;
                }
            }
        </style>
    </head>
    <body>
        <div class="page-wrapper">
            <header class="container header">
                <!-- Sidebar -->
                <?php include 'sidebar.php'; ?>
                <!-- /Sidebar -->
                <!-- Navigation Bar -->
                <?php include 'nav.php'; ?>
                <!-- /Navigation Bar -->
                <!-- Carousel -->
                <div id="carousel" class="carousel slide" data-interval="false" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active">
                            <p></p>
                        </li>
                        <li data-target="#carousel" data-slide-to="1">
                            <p></p>
                        </li>
                        <li data-target="#carousel" data-slide-to="2">
                            <p></p>
                        </li>
                        <li data-target="#carousel" data-slide-to="3">
                            <p></p>
                        </li>
                    </ol>
                    <!-- /Indicators -->
                    <!-- Slides Wrapper -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="img/vis_4.png">
                        </div>
                        <div class="item">
                            <img src="img/vis_4.png">
                        </div>
                        <div class="item">
                            <img src="img/vis_1.png">
                        </div>
                        <div class="item">
                            <img src="img/vis_4.png">
                        </div>
                    </div>
                    <!-- /Slides Wrapper -->
                    <!-- Controls -->
                    <div>
                        <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /Controls -->
                </div>
            </header>
            <!-- /Carousel -->
            <br />
            <br />
            <!-- Page Content -->
            <div class="container featurette-container">
                <!-- Project -->
                <div class="row featurette">
                    <div class="col-sm-12 clearfix">
                        <h1 class="featurette-heading">Testimonials</h1>
                        <div class="testimonial">
                            <div class="inner">
                                <!-- <img src="img/speech_marks_left.png" class="speech-mark" alt=""> -->
                                <p class="justified">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe mollitia veritatis consectetur sequi voluptate velit, quos, temporibus eveniet. Nobis, suscipit.</p>
                                <!-- <img src="img/speech_marks_left.png" class="speech-mark" alt=""> -->
                            </div>
                            <p class="person">- Jon Doe</p>
                        </div>
                        <div class="testimonial">
                            <div class="inner">
                                <!-- <img src="img/speech_marks_left.png" class="speech-mark" alt=""> -->
                                <p class="justified">Saepe mollitia veritatis consectetur sequi voluptate velit, quos, temporibus eveniet. Nobis, suscipit.</p>
                                <!-- <img src="img/speech_marks_left.png" class="speech-mark" alt=""> -->
                            </div>
                            <p class="person">- Joe Bloggs</p>
                        </div>
                    </div>
                </div>
                <!-- /Project -->
                <!-- Portfolio -->
                <div class="row">
                    <div class="col-sm-12 clearfix">
                        <a href="portfolio.php">
                            <h1 class="featurette-heading">See What They're Talking About</h1>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <div >
                            <a href="project.php">
                                <img src="img/vis_3.png" alt="" />
                            </a>
                            <h2>Title</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt nisi quia quibusdam nihil, molestias aspernatur minima explicabo numquam quos fuga, id, modi! Eligendi!</p>
                            <a href="project.php" class="more">Read more...</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div>
                            <a href="project.php">
                                <img src="img/vis_3.png" alt="" />
                            </a>
                            <h2>Title</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt nisi quia quibusdam nihil, molestias aspernatur minima explicabo numquam quos fuga, id, modi! Eligendi!</p>
                            <a href="project.php" class="more">Read more...</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div>
                            <a href="project.php">
                                <img src="img/vis_3.png" alt="" />
                            </a>
                            <h2>Title</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt nisi quia quibusdam nihil, molestias aspernatur minima explicabo numquam quos fuga, id, modi! Eligendi!</p>
                            <a href="project.php" class="more">Read more...</a>
                        </div>
                    </div>
                </div>
                <!-- /Blog -->
            </div>
            <!-- /Page Content -->
            <?php include 'footer.php'; ?>
        </div>
        <script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>