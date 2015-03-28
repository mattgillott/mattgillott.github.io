<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Professional landscaping and gardening services and design for London residential and commercial properties at competitive prices.">
        <title>Main</title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/index.css">
    </head>
    <body>
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
                        <img src="img/vis_2.png">
                    </div>
                    <div class="item">
                        <img src="img/vis_1.png">
                    </div>
                    <div class="item">
                        <img src="img/vis_3.png">
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
        <!-- Page Content -->
        <div class="container featurette-container">
            <hr class="featurette-divider">
            <!-- Portfolio -->
            <div>
                <div class="row featurette">
                    <br class="visible-xs" />
                    <div class="col-sm-12 clearfix">
                        <h1 class="featurette-heading">Portfolio</h1>
                    </div>
                </div>            
                <br />
                <div class="row">
                    <div class="col-sm-3">
                        <div >
                            <img src="img/vis_2.png" alt="" />
                            <h2>Title</h2>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div>
                            <img src="img/vis_2.png" alt="" />
                            <h2>Title</h2>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div>
                            <img src="img/vis_2.png" alt="" />
                            <h2>Title</h2>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div>
                            <img src="img/vis_2.png" alt="" />
                            <h2>Title</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div >
                            <img src="img/vis_2.png" alt="" />
                            <h2>Title</h2>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div>
                            <img src="img/vis_2.png" alt="" />
                            <h2>Title</h2>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div>
                            <img src="img/vis_2.png" alt="" />
                            <h2>Title</h2>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div>
                            <img src="img/vis_2.png" alt="" />
                            <h2>Title</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Portfolio -->
            <hr class="featurette-divider" />
        </div>
        <!-- /Page Content -->
        <br />
        <?php include 'footer.php'; ?>
        <script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>