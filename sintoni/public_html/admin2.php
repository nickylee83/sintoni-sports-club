<?php
/**
 * Created by PhpStorm.
 * User: 2924796
 * Date: 19/04/2018
 * Time: 12:14
 */


define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/resources/admin/adminHeader.php');
require_once(__ROOT__.'/resources/admin/authenticate.php');

?>

<div class="container">
    <div class="row">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>

</div>
<div class="container">
    <div class="row">
        <h3>Admin</h3>
    </div>
    <div class="row">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email Address</th>
                <th>Mobile Number</th>
            </tr>
            </thead>
            <tbody>
            <?php
            require_once(__ROOT__.'/resources/Database.php');
            $pdo = Database::connect();
            $sql = 'SELECT * FROM customers ORDER BY id DESC';
            foreach ($pdo->query($sql) as $row) {
                echo '<tr>';
                echo '<td>'. $row['name'] . '</td>';
                echo '<td>'. $row['email'] . '</td>';
                echo '<td>'. $row['mobile'] . '</td>';
                echo '</tr>';
            }
            Database::disconnect();
            ?>
            </tbody>
        </table>
    </div>
</div>  /container -->
<?php
require_once(__ROOT__ . '/resources/admin/adminFooter.php');
?>