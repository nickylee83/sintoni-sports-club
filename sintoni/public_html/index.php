<?php
/**
 * sintoni
 * Group: 10
 * Team: Fernanda Rodrigues, Henrique Rodrigues, Myo Thet Tun, Victor Mari Rodríguez
 * Student Numbers: 2930029, 2924796, 2918551, 2908722
 * Date: 17/04/18
 * Time: 19:30
 */
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/resources/header.php');
?>


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
                <div id ="WelcomeMessage"><h2>WELCOME TO SINTONI SPORTS CLUB</h2></div>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class= "container news-page">
    <div class="col-lg-9">
        <div class="row">
            <a href="membership.php"><img id="festival-colour" src="../public_html/images/events_images/join-us.jpg" alt="Join Us"></a>
            <a href="services.php"><img id="festival-colour" src="../public_html/images/events_images/services.jpg" alt="Join Us"></a>


        </div>
        <div class="row">
            <a href="news.php"><img id="festival-colour" src="../public_html/images/events_images/news.jpg" alt="Join Us"></a>

            <a href="events.php"><img id="festival-colour" src="../public_html/images/events_images/pool-tournment-1.jpeg" alt="Join Us"></a>

        </div>


    </div>

    <aside class="col-lg-3">
        <div class="col-lg-12 open-hours-table">
            <h3>Opening times</h3>
            <table>
                <tr>
                    <td class="text-right">Mon-Fri: </td>
                    <td>08:00h - 22:00h</td>
                </tr>
                <tr>
                    <td class="text-center">Sat: </td>
                    <td>08:30h - 23:00h</td>
                </tr>
                <tr>
                    <td class="text-center">Sun: </td>
                    <td>08:30h - 22:00h</td>
                </tr>
            </table>
        </div>
        <div class="enroll"><a type="button" class="button enroll-button btn btn-success" href="membership.php"><strong>Enroll Now</strong></a><h5> From €40,00</h5></div>

        <div class="aside-news col-lg-12">
            <h3>Latest News</h3>

            <div class="news-article">
                <h2 class="article-title">Nick Matthew relishing his final moment in the spotlight</h2>
                <b>Date : 01.05.2018 Time : 12:29  </b>
                <div class="tags">
                    <p><a href= "">Squash</a></p>
                </div>

                <div class="article-content">
                    <img class="article-image" src= "../public_html/images/news_images/squash01.jpg" width= "170" height= "130" alt= "news image 1">
                    <p>Nick Matthew was sitting in a cafe with his friend and fellow Sheffield local Jessica Ennis-Hill a few months ago when something almost unheard of happened.</p>
                    <p>Accustomed to slipping into his role as photographer for fans eager to have their picture taken with the nation's queen of track and field, Britain's greatest squash player for a generation was taken aback to find that he was in fact the focus of attention.</p>
                </div>
            </div>
    </aside>

        </div>
    </div>
    </div>




<?php
require_once(__ROOT__.'/resources/footer.php');
?>