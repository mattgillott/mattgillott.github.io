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
                        <h1 class="featurette-heading">Project Name</h1>
                        <p class="justified">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ipsum deleniti aliquam, animi delectus fuga eligendi voluptates reprehenderit quisquam corrupti minima, ducimus recusandae. Placeat iure vero exercitationem unde autem voluptatibus voluptate quisquam nesciunt sint quas consectetur ut minima, libero iusto accusantium hic reprehenderit odit nemo, dignissimos rem perspiciatis expedita magnam fugiat. Sunt deleniti quod, pariatur nostrum expedita, neque ea quasi vero nihil dicta ipsum accusamus asperiores fugiat unde dignissimos alias distinctio possimus praesentium voluptates hic ducimus nam, libero deserunt. Et, mollitia aliquid placeat maiores, velit similique quasi ratione in officiis enim, numquam fugit. Consequuntur sit repellendus deleniti quasi, omnis corrupti.</p>
                        <p class="justified">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, accusantium ratione magnam ex quam eius debitis vero sed, nihil aliquid ullam, unde aperiam culpa nesciunt ipsam deleniti totam recusandae soluta iste animi mollitia perferendis non. Facere ipsam architecto, voluptates, perferendis ducimus recusandae id impedit similique cumque fugiat. Rem reprehenderit quia amet voluptate, harum commodi cumque fugiat cum nesciunt optio libero, a sapiente tenetur, numquam voluptatem vero! Cupiditate minus nulla delectus neque, culpa repellendus animi, maxime exercitationem rem aliquid suscipit, consectetur illo rerum. Quidem cum tenetur ducimus officiis eaque. Numquam fugiat velit iure tempore id excepturi alias quas quae dolorem assumenda!</p>
                    </div>
                </div>
                <!-- /Project -->
                <!-- Portfolio -->
                <div class="row">
                    <div class="col-sm-12 clearfix">
                        <a href="portfolio.php">
                            <h1 class="featurette-heading">More from our Portfolio</h1>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <div >
                            <a href="#">
                                <img src="img/vis_3.png" alt="" />
                            </a>
                            <h2>Title</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt nisi quia quibusdam nihil, molestias aspernatur minima explicabo numquam quos fuga, id, modi! Eligendi!</p>
                            <a href="#" class="more">Read more...</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div>
                            <a href="#">
                                <img src="img/vis_3.png" alt="" />
                            </a>
                            <h2>Title</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt nisi quia quibusdam nihil, molestias aspernatur minima explicabo numquam quos fuga, id, modi! Eligendi!</p>
                            <a href="#" class="more">Read more...</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div>
                            <a href="#">
                                <img src="img/vis_3.png" alt="" />
                            </a>
                            <h2>Title</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt nisi quia quibusdam nihil, molestias aspernatur minima explicabo numquam quos fuga, id, modi! Eligendi!</p>
                            <a href="#" class="more">Read more...</a>
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