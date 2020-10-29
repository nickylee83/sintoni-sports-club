<?php

define('__ROOT__', dirname(dirname(__FILE__)));

require_once(__ROOT__.'/resources/header.php');
?>
<!--
    This websie uses an API from google to use google maps.
    In order to use the API I have to add your IP to the white list while the website is not being hosted.
    Contac me in college to add you to the list.
-->

<main role="main">
    <div class="container-fluid clearfix">
        <div class="jumbotron text-center">
            <h1>Our Staff</h1>
            <p>Meet our amazing mega cool staff</p>
        </div>
        <div class="container-fluid beautify" id="Fernanda">
            <div class="decorator">
                <h2>Fernanda Menezes</h2>
                <h4><strong>MISSION:</strong> Our mission lorem ipsum..</h4>
                <p><strong>VISION:</strong> Our vision Lorem ipsum..
                <p>Curabitur aliquet volutpat mi varius tempus. Maecenas sapien lectus, pellentesque a tincidunt eu, accumsan sed nibh. Quisque sed dui ex. Nulla lobortis eleifend nibh, ac dapibus felis consectetur eu. Mauris aliquam sed lorem quis interdum. Vivamus eu vehicula odio. Sed luctus dapibus nibh vitae faucibus. Morbi ac viverra purus. Proin sit amet lacus elit. Curabitur varius eleifend venenatis. Integer vel tortor eros.<p/>
            </div>
        </div>
        <div class="container-fluid beautify" id="Henrique">
            <div class="decorator">
                <h2>Henrique Rodriguez</h2>
                <h4><strong>MISSION:</strong> Our mission lorem ipsum..</h4>
                <p><strong>VISION:</strong> Our vision Lorem ipsum..
                <p>Curabitur aliquet volutpat mi varius tempus. Maecenas sapien lectus, pellentesque a tincidunt eu, accumsan sed nibh. Quisque sed dui ex. Nulla lobortis eleifend nibh, ac dapibus felis consectetur eu. Mauris aliquam sed lorem quis interdum. Vivamus eu vehicula odio. Sed luctus dapibus nibh vitae faucibus. Morbi ac viverra purus. Proin sit amet lacus elit. Curabitur varius eleifend venenatis. Integer vel tortor eros.<p/>
            </div>
        </div>
        <div class="container-fluid beautify" id="Myo">
            <div class="decorator">
                <h2>Myo Thet Tun</h2>
                <h4><strong>MISSION:</strong> Our mission lorem ipsum..</h4>
                <p><strong>VISION:</strong> Our vision Lorem ipsum..
                <p>Curabitur aliquet volutpat mi varius tempus. Maecenas sapien lectus, pellentesque a tincidunt eu, accumsan sed nibh. Quisque sed dui ex. Nulla lobortis eleifend nibh, ac dapibus felis consectetur eu. Mauris aliquam sed lorem quis interdum. Vivamus eu vehicula odio. Sed luctus dapibus nibh vitae faucibus. Morbi ac viverra purus. Proin sit amet lacus elit. Curabitur varius eleifend venenatis. Integer vel tortor eros.<p/>
            </div>
        </div>
        <div class="container-fluid beautify" id="Victor">
            <div class="decorator">
                <h2>Victor Mari</h2>
                <h4><strong>MISSION:</strong> Our mission lorem ipsum..</h4>
                <p><strong>VISION:</strong> Our vision Lorem ipsum..
                <p>Curabitur aliquet volutpat mi varius tempus. Maecenas sapien lectus, pellentesque a tincidunt eu, accumsan sed nibh. Quisque sed dui ex. Nulla lobortis eleifend nibh, ac dapibus felis consectetur eu. Mauris aliquam sed lorem quis interdum. Vivamus eu vehicula odio. Sed luctus dapibus nibh vitae faucibus. Morbi ac viverra purus. Proin sit amet lacus elit. Curabitur varius eleifend venenatis. Integer vel tortor eros.<p/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <h1>Leave a comment</h1>
                <form class="form-horizontal has-verification">
                    <div class="form-group has-success has-feedback">
                        <label class="control-label col-md-2" for="name">Name: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" placeholder="Enter your name">
                            <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2" for="Surname">Surname: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Surname" placeholder="Enter surname">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2" for="Email">Email: </label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="Email" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2" for="comment">Comment: </label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="10" id="comment"></textarea>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Send</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <h1>Coment Section</h1>
                <div class="media">
                    <div class="media-left media-top">
                        <img src="../public_html/images/user-icon.svg" class="media-object" style="width:60px">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Myo</h4>
                        <p>Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum...</p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left media-top">
                        <img src="../public_html/images/user-icon.svg" class="media-object" style="width:60px">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Victor</h4>
                        <p>Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum...</p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left media-top">
                        <img src="../public_html/images/user-icon.svg" class="media-object" style="width:60px">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Henrique</h4>
                        <p>Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum...</p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left media-top">
                        <img src="../public_html/images/user-icon.svg" class="media-object" style="width:60px">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Fernanda</h4>
                        <p>Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
        <div id="googleMap" style="height:1000px;width:100%;">

        </div>
        <script>
            function myMap() {
                var myCenter = new google.maps.LatLng(41.878114, -87.629798);
                var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
                var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
                var marker = new google.maps.Marker({position:myCenter});
                marker.setMap(map);
            }
        </script>
        <div class="container-fluid bg-grey">
            <h2 class="text-center">CONTACT</h2>
            <div class="row">
                <div class="col-sm-5">
                    <p>Contact us and we'll get back to you within 24 hours.</p>
                    <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
                    <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
                    <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
                </div>
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                        </div>
                    </div>
                    <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <button class="btn btn-default pull-right" type="submit">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Google maps-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDz57VCCEzzZm-EKk2d6LBJHOw7gdDZsxw&callback=myMap"></script>

</main>
<?php
require_once(__ROOT__.'/resources/footer.php');
?>