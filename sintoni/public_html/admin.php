<?php
/**
 * Created by PhpStorm.
 * User: 2924796
 * Date: 19/04/2018
 * Time: 12:14
 */
error_reporting(E_ALL);
ini_set('display_errors', 'on');

define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/resources/admin/adminHeader.php');
require_once(__ROOT__.'/resources/admin/authenticate.php');
require_once (__ROOT__.'/resources/admin/CRUD/CRUD.php');
global $tableName;
function validatedTableName(){
    if (isset($_GET['tableName'])) {
        $tableName = $_GET["tableName"];
        $validTableNames = array("activities",
            "administrative",
            "internalusers",
            "externalusers",
            "events",
            "images",
            "members",
            "monthly_fees",
            "news",
            "payments_2018",
        );
        if (in_array($tableName, $validTableNames)) {
            return $tableName;
        } else {
            die("Table name not valid");
        }
    }
}
$tableName = validatedTableName();
?>

    <div class="container">
        <div class="row">
            <div class="card" style="width: 18rem;">
                <!--<img class="card-img-top" src="..." alt="Card image cap">-->
                <div class="card-body">
                    <h5 class="card-title">Events</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="./admin.php?tableName=events" class="btn btn-primary">Change</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <!--<img class="card-img-top" src="..." alt="Card image cap">-->
                <div class="card-body">
                    <h5 class="card-title">Users</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="./admin.php?tableName=internalusers" class="btn btn-primary">Internal</a>
                    <a href="./admin.php?tableName=externalusers" class="btn btn-primary">External</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <!--<img class="card-img-top" src="..." alt="Card image cap">-->
                <div class="card-body">
                    <h5 class="card-title">Members</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="./admin.php?tableName=members" class="btn btn-primary">Change</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <!--<img class="card-img-top" src="..." alt="Card image cap">-->
                <div class="card-body">
                    <h5 class="card-title">Plans and Pricing</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="./admin.php?tableName=monthly_fees" class="btn btn-primary">Change</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <!--<img class="card-img-top" src="..." alt="Card image cap">-->
                <div class="card-body">
                    <h5 class="card-title">News</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="./admin.php?tableName=news" class="btn btn-primary">Change</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <!--<img class="card-img-top" src="..." alt="Card image cap">-->
                <div class="card-body">
                    <h5 class="card-title">Payments</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="./admin.php?tableName=payments_2018" class="btn btn-primary">See</a>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
    <?php
    if ($tableName != null){
    echo '
         <div class="row">
            <h3>'.$tableName.'</h3>
        </div>
        <button type="button" class="btn btn-success">Create</button>
        <div class="row">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                    
                

        ';
        $idName = "";
        $idSelected = false;
        $columns = CRUD::getColumns($tableName);
        foreach ($columns as $column){
            if (!$idSelected){
                $idName=$column;
                $idSelected = true;
            }
            echo "
            <th>$column</th>             
            
            
            ";
        }
        echo "<th>Update</th><th>Delete</th>

                
                    </tr>
                </thead>
                
                <tbody>
                    ";
                        $rows = CRUD::getRows($tableName);
                        foreach ($rows as $row){
                            echo "<tr>";
                            foreach ($columns as $column){
                                echo "<td>$row[$column]</td>";
                            }
                            echo "<td><button type=\"button\" class=\"btn btn-info\">U</button></td>";
                            echo "<td><button type=\"button\" class=\"btn btn-danger\">D</button></td>";
                            echo "</tr>";
                        }


                    

                echo "</tbody>
                                
        
        ";
    }


    ?>

        <tbody>

        </tbody>
        </table>
    </div>


<?php
require_once(__ROOT__ . '/resources/admin/adminFooter.php');
?>