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
            <div id ="WelcomeMessage"><h2>Latest Sports News</h2></div>
        </div>
    </div>
</div>
<div class="main-container">
    <div class= "container news-page">
        <div class="news-page-title">
            <h1>Latest News</h1>
        </div>

        <?php
        /**
         * Created by PhpStorm.
         * User: henrique
         * Date: 01/05/18
         * Time: 16:56
         */
        //define('__ROOT__', dirname(dirname(__FILE__)));
        require_once(__ROOT__.'/resources/Database.php');

        $pdo = Database::connect();
        $sql = "SELECT * FROM news";
        foreach ($pdo->query($sql) as $row) {
            $title = $row['news_title'];
            $content = $row['news_content'];
            $date = $row['news_date'];
            $img = $row['news_image'];
            $tag = $row['tags_value'];

            //check tags_value
            switch ($tag) {
                case 1:
                    $tag = "Football";
                    break;
                case 2:
                    $tag = "Basketball";
                    break;
                case 3:
                    $tag = "Tennis";
                    break;
                case 4:
                    $tag = "Squash";
                    break;
                default:
                    $tag = "General";
            }

            // change date/time format
            $date = date_create($date);
            $dt = date_format($date,'d-m-Y');
            $time = date_format($date, 'H:i');

            // read from image table
            $imgSql = "SELECT * FROM images WHERE images_ID = $img";
            foreach ($pdo->query($imgSql) as $row) {
                $name = $row['name'];
                $path = $row['path'];
                $type = $row['type'];

                // display
                echo "<div class='news-article'>
            <h2 class='article-title'>$title</h2>
            <b>Date : ".$dt." Time : ".$time."</b>
            <div class='tags'>
                <p><a href= ''>".$tag."</a></p>
            </div>
            
            <!-- call image path -->
            <div class='article-content'>
                <img class='article-image' src= '".$path.$name.".".$type."' width= '700' height= '300' alt= 'news image 2'>
                <p>".$content."</p>
            </div>
         </div>";
            }
        }
        ?>
    </div>
</div>
<?php
require_once(__ROOT__.'/resources/footer.php');
?>
