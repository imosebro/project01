    <?php 
        $currentPage = "index";
        include "inc/top-part.inc"; 
    ?>
	<!--navbar-->
    <?php include 'inc/nav.inc';?>

   <?php
        $currentPage = "search";
        include "inc/search-engine.inc";
    ?>

      <!-- Half Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/research.jpg');"></div>
					<div class="carousel-caption">
						<h2>Conduct cutting-edge research</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/facultiez.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Learn  from world-class faculty</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/knowledge.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Apply your knowledge to a range of fields</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/campus.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Collaborate across campus and discliplines</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

<!-- Portfolio Grid Section -->
    <aside>
        <section id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 portfolio-item">
                        <h2 class="text-center">Majors</h2>
                       <!-- <a href="html/majors.php" class="portfolio-link" data-toggle="modal">
                           <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div> -->
                            <a href="majors.php">
                            <img src="images/major.png" class="img-responsive" alt="">
                            </a>
                    </div>
                    <div class="col-sm-4 portfolio-item">
                        <h2 class="text-center">Minors</h2>
                       <!-- <a href="https://www.cs.rochester.edu/graduate/index.html" class="portfolio-link" data-toggle="modal">
                           <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div> -->
                            <a href="minors.php">
                            <img src="images/minor.png" class="img-responsive" alt="students at computer">
                            </a>
                    </div>
                    <div class="col-sm-4 portfolio-item">
                        <h2 class="text-center">Graduates</h2>
                        <!--<a href="html/graduate.php" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>-->
                            <a href="graduate.php">
                            <img src="images/graduate.png" class="img-responsive" alt="Graduates picture">
                            </a>
                    </div>
                    <div class="col-sm-4 portfolio-item">
                        <h2 class="text-center">Faculty</h2>
                        <!--<a href="https://www.cs.rochester.edu/people/faculty/index.html" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>-->
                            <a href="https://www.cs.rochester.edu/people/faculty/index.html">
                            <img src="images/faculty.png" class="img-responsive" alt="Faculty picture">
                            </a>
                    </div>
                    <div class="col-sm-4 portfolio-item">
                        <h2 class="text-center">News</h2>
                       <!-- <a href="https://www.cs.rochester.edu/news-events/index.html" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div> -->
                            <a href="https://www.cs.rochester.edu/news-events/news/index.html">
                            <img src="images/news.png" class="img-responsive" alt="Campus picture">
                            </a>
                    </div>
                    <div class="col-sm-4 portfolio-item">
                        <h2 class="text-center">Events</h2>
                        <!--<a href="https://www.rochester.edu/registrar/calendar.php" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>-->
                            <a href="https://www.cs.rochester.edu/news-events/events/index.php">
                            <img src="images/calendar.png" class="img-responsive" alt="Calendar picture">
                            </a>
                    </div>
                </div>
            </div>
        </section>
    </aside>

    <!--Footer & Javascript-->
    <?php include "inc/footer.inc"; ?>