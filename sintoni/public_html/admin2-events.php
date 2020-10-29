<?php
/**
 * Created by PhpStorm.
 * User: 2924796
 * Date: 19/04/2018
 * Time: 12:14
 */


define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/resources/admin/adminHeader.php');
require_once(__ROOT__.'/resources/Database.php');
require_once(__ROOT__.'/resources/admin/authenticate.php');

?>

    <div class="container" id="events-card">
        <div class="row">
            <div class="card" style="width: 54rem;">
                <div class="card-body">
                    <h3 class="events-h3">New Event</h3>
                    <form enctype="multipart/form-data" method="post" action="upload.php">
                        <input type="file" name="fileName" /><br />
                        <input type="submit" value="Upload File" />
                    </form>
                    <form method="POST">
                        <h5 class="card-title">Title</h5>
                        <input type="text" id="new-event-title" size=80 maxlength=78 />
                        <h5 class="card-title">Description</h5>
                        <textarea name="new-event-description" id="new-event-description"  rows=3 cols=80></textarea>
                        <h5 class="card-title">Date and time</h5>
                        <input type="datetime-local" id="new-event-date_time"/>

                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select image</button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <?php
                                    Database::connect();
                                    $pdo = Database::connect();
                                    $sql = "SELECT * FROM images";

                                    foreach ($pdo->query($sql) as $row) {
                                        echo "<a class='dropdown-item' href='#'>".$row['name']."</a>";
                                    }
                                ?>
                            </div>
                        </div>
                        <a href="#" class="btn btn-primary" id="create-event-btn">Create</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container events-crud-container">
        <h3 class="events-h3">Edit an Existing Event</h3>
        <div class="row">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Event</th>
                    <th>Description</th>
                    <th>Date & Time</th>
                    <th>Image</th>
                </tr>
                </thead>
                <tbody>
                <?php
                require_once(__ROOT__.'/resources/Database.php');
                $pdo = Database::connect();
                $sql = 'SELECT * FROM events ORDER BY id DESC';
                foreach ($pdo->query($sql) as $row) {
                    echo '<tr>';
                    echo '<td>'. $row['event_title'] . '</td>';
                    echo '<td>'. $row['description'] . '</td>';
                    echo '<td>'. $row['date_time'] . '</td>';
                    echo '</tr>';
                }
                Database::disconnect();
                ?>
                </tbody>
            </table>
        </div>
    </div> <!-container Ends ->
<?php
require_once(__ROOT__ . '/resources/admin/adminFooter.php');
?>