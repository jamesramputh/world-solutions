<?php
include_once 'includes/db_connect.php';
?>

<!DOCTYPE html>

<html>
	<head>
		<title>James Ramputh</title>		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/lightbox.min.js"></script>
        <link href="css/lightbox.css" rel="stylesheet" />
        <link href="css/bootstrap.min.css"  type= "text/css" rel= "stylesheet">
        <link href="css/styles/main.css" type= "text/css" rel= "stylesheet">
        <link href="css/animate.css" type= "text/css" rel= "stylesheet">

        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

        <!--jQuery and bootstrap library -->
        <script src="js/custom.js"></script>
        <script src="js/bootstrap.js"></script>

        <!--JQuery UI -->
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

        <!-- wow.js library -->
        <script src="js/wow.js"></script>



	</head>
	
	<body class="home">

        <header>
            <nav id="navbar" class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="collapse navbar-collapse navHeaderCollapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a id="top_anchor" title="Home Jump" href="#home_section">Home</a></li>
                            <li><a id="history_anchor" title="History Jump" href="#history_section">History</a></li>
                            <li><a id="gallery_anchor" title="Gallery Jump" href="#gallery_section">Gallery</a></li>
                            <li><a id="contact_anchor" title="Contact Jump" href="#booking_section">Bookings</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="clear"></div>
        </header>

        <div class="row-fluid">
            <section id="home_section" class="top-band">
                <div class="home-overlay-container">
                    <div class="home-overlay"><h1>Locust Grove Canada</h1><p>The oldest estate in Ontario: EST. 1782</p><p><i>Bed & Breakfast</i></p></div>

                    <a class="bookings-link" href="#">Make a Booking</a>
                </div>
            </section>
        </div>

        <div class="row-fluid">
            <section class="main-section" id="history_section">
                <div class="container">
                    <div class="col-lg-8 left-content">
                        <h1>History of Locust Grove</h1>
                        <p>The Historic Estate of George Ball, known as Locust Grove in Niagara on the Lake, Ontario, Canada.
                            Originally Built in 1784 on a 1200 acre estate granted by the British Crown to George Ball, one of the original settlers of Upper Canada.
                            The House was burned down by the American forces on December 16, 1813 during the War of 1812, and rebuilt on the same site in 1820.
                            The present structure was rebuilt with five courses of brick 18 inches thick and using 88,000 clay bricks which were fired on the
                            property in 1820.
                        </p>

                        <p>The house had 2 additional fires, one in 1904 and one in 1934.
                            The second fire subsequently destroyed the georgian style roof and doric columns.
                            The old roof and columns were removed and altered structure was put in its place.
                            The House was used until 1985 by the Virgil Bible School and Eden Christian College.
                            First as a Schoolhouse and later as a student Dormitory for 40 students.
                            The House was abandoned for 15 years at which time it was purchased by Jens Ramputh.
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <div class="image-history">
                            <a data-lightbox='gallery-lightbox' href='img/history_main.jpg' class="history-image"></a>
                        </div>
                    </div>

                </div>
            </section>
        </div>

        <div class="row-fluid">
            <section class="main-section" id="gallery_section">
                <div class="container">
                    <div class="col-lg-12 gallery-images-container">
                        <h1>Gallery</h1>
                        <div class="gallery-images">
                            <a class='gallery-image' data-lightbox='gallery-lightbox' href='img/front_outside1.jpg' style="background-image:url('img/front_outside1.jpg');">
                                <div class='photoview-overlay'>
                                    <div class="view">VIEW</div>
                                </div>
                            </a>
                            <a class='gallery-image' data-lightbox='gallery-lightbox' href='img/old_outside1.jpg' style="background-image:url('img/old_outside1.jpg');">
                                <div class='photoview-overlay'>
                                    <div class="view">VIEW</div>
                                </div>
                            </a>
                            <a class='gallery-image' data-lightbox='gallery-lightbox' href='img/old_outside2.jpg' style="background-image:url('img/old_outside2.jpg');">
                                <div class='photoview-overlay'>
                                    <div class="view">VIEW</div>
                                </div>
                            </a>
                            <a class='gallery-image' data-lightbox='gallery-lightbox' href='img/hallway_1.jpg' style="background-image:url('img/hallway_1.jpg');">
                                <div class='photoview-overlay'>
                                    <div class="view">VIEW</div>
                                </div>
                            </a>
                            <a class='gallery-image' data-lightbox='gallery-lightbox' href='img/hallway_2.jpg' style="background-image:url('img/hallway_2.jpg');">
                                <div class='photoview-overlay'>
                                    <div class="view">VIEW</div>
                                </div>
                            </a>
                            <a class='gallery-image' data-lightbox='gallery-lightbox' href='img/master_bed1.jpg' style="background-image:url('img/master_bed1.jpg');">
                                <div class='photoview-overlay'>
                                    <div class="view">VIEW</div>
                                </div>
                            </a>
                            <a class='gallery-image' data-lightbox='gallery-lightbox' href='img/master_bed2.jpg' style="background-image:url('img/master_bed2.jpg');">
                                <div class='photoview-overlay'>
                                    <div class="view">VIEW</div>
                                </div>
                            </a>
                            <a class='gallery-image' data-lightbox='gallery-lightbox' href='img/piano_room1.jpg' style="background-image:url('img/piano_room1.jpg');">
                                <div class='photoview-overlay'>
                                    <div class="view">VIEW</div>
                                </div>
                            </a>
                            <a class='gallery-image' data-lightbox='gallery-lightbox' href='img/dining_room1.jpg' style="background-image:url('img/dining_room1.jpg');">
                                <div class='photoview-overlay'>
                                    <div class="view">VIEW</div>
                                </div>
                            </a>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="row-fluid">
            <section class="main-section" id="booking_section">
                <div class="container">
                    <h1>Bookings at Locust Grove: Bed & Breakfast</h1>
                    <p>We have 3 rooms with ensuite's available to choose from</p>

                    <label class="date-picker" for="datepicker">Select a Date: <input type="text" id="datepicker"></label>

                    <div class="rooms-container">
                        <div class="suite master-suite">
                            <div class="inner-suite">
                                <div class="suite-header">Master Suite</div>
                                <div class="price-block">$350</div>
                                <div class="availability">Available</div>
                                <div class="reserve-btn">Reserve</div>
                            </div>
                        </div>
                        <div class="suite east-suite">
                            <div class="inner-suite">
                                <div class="suite-header">East Suite</div>
                                <div class="price-block">$250</div>
                                <div class="availability">Available</div>
                                <div class="reserve-btn">Reserve</div>
                            </div>
                        </div>
                        <div class="suite west-suite">
                            <div class="inner-suite">
                                <div class="suite-header">West Suite</div>
                                <div class="price-block">$250</div>
                                <div class="availability">Available</div>
                                <div class="reserve-btn">Reserve</div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </section>
        </div>

		<div id="footer">	
		  <div class="container">
                <div class="footer-content">&copy 2015 Designed and Coded by James Ramputh</div>
		  </div>
		</div>

	</body>
	
</html>