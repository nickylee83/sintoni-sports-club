<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/resources/header.php');
?>

    <!-- News page starts here -->
    <div class="full" style="background-image:url('http://gallagherperformance.com/wp-content/uploads/sports.jpg');">
        <!--<div class="full" style="background-image:url('../public_html/images/');">-->
        <div class="container">
            <div class="row clearfix">
                <div style="padding: 0 0 200px 0;">
                    <div class="col-xs-4 line">
                        <hr>
                    </div>
                    <div class="col-xs-4 logo text-center"><img src="../public_html/images/logo-fontWhite.png"> </div>
                    <div class="col-xs-4 line">

                        <hr>
                    </div>

                </div>
                <div id ="WelcomeMessage"><h2>EVENTS</h2></div>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class= "container news-page">
            <div class="events-page-title">
                <h1>Register now and enjoy!</h1>
            </div>
            <div class="events-intro text-justify">
                <div class="col-md-6">
                    <p>We have an intense social agenda with various events such as: Sintoni's Anniversary Ball (always with the presence of a famous singer/band), Midsummer Masquerade Ball, Mardi Gras, St. Patrick's Day, New Year's Eve (one of the most sought after events).</p>
                    <p>The most important cultural events are: meeting of collectors, exhibition of arts, book fair and meeting of classic carss. Other smaller ones such as Happy Hours, August's Film Festival, Halloween, Festival of Colors, National Food Festival.</p>
                    <p>There are also sports events of various types: European Championship Contender Reggae, Table Tennis, Tennis, Pool, Chess, Soccer, Volleyball and Beach Soccer Tournaments.</p>
                </div>
                <div id="myCarousel" class="col-md-6 carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img id="festival-colour" src="../public_html/images/events_images/festival_color.jpg" alt="Festival of Colours">
                        </div>

                        <div class="item">
                            <img src="../public_html/images/events_images/beach-volley.jpg" alt="Beach Volley Tourney">
                        </div>

                        <div class="item">
                            <img src="../public_html/images/events_images/reveillon.jpg" alt="New Years' Eve">
                        </div>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <div class="events-article">
                <h2 class="events-title">Sintoni's Table Tennis Open 2018</h2>
                <p><a href="#">Register Now!</a></p>
                <p class="events-dateTime">Date: 18.04.2018 Time : 13:13</p>
                <div class="events-content">
                    <p>Categories:</p>
                    <ul>
                        <li>Kids - under 12</li>
                        <li>Junior - between 13-18</li>
                        <li>Adult - between 19-40</li>
                        <li>Senior - 41 or older</li>
                    </ul>
                    <p>Minimium of 4 registrations per category</p>
                    <p>Registrations until: 11.05.2018</p>
                </div>

                <div class="events-content">
                    <img class="events-image" src= "../public_html/images/events_images/tabletennis.jpg" width= "" height= "" alt= "news image 1">
                    <p>We’re excited to bring a new, dedicated table tennis training centre to the city. Our facility will be open 7 days a week, and will serve both elite and recreational players, in a professional setting with over 30 competition tables, specialized sport flooring, high intensity lighting, robots, cardio and strength fitness equipment, break room, wi-fi, fully stocked pro shop, locker rooms with showers, and spectator seating.</p>
                    <p>Our offerings will include private and group lessons, camps, leagues, tournaments, special and corporate events, court reservations, and open play, all of which will be managed and led by our professional staff and expert coaches.</p><p><b>Come check us out!</b></p>
                </div>
            </div>
        </div>
    </div>
<?php
require_once(__ROOT__.'/resources/footer.php');
?>