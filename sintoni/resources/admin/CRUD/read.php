<?php
/**
 * Created by PhpStorm.
 * User: henrique
 * Date: 10/04/18
 * Time: 00:43
 */
error_reporting(E_ALL);
ini_set('display_errors', 'on');

    require 'inc/database.php';
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }

    if ( null==$id ) {
        header("Location: index.php");
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM employees where emp_no = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        Database::disconnect();
    }
    $TITLE = "Read";
include "inc/header.php";
?>


<body>
    <div class="container">

                <div class="span10 offset1">
                    <div class="row">
                        <h3>Read</h3>
                    </div>

                    <div class="form-horizontal" >
                      <div class="control-group">
                        <label class="control-label">Number</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['emp_no'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Name</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['emp_name'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Gender</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['gender'];?>
                            </label>
                        </div>
                      </div>
                        <div class="control-group">
                            <label class="control-label">Hire Date</label>
                            <div class="controls">
                                <label class="checkbox">
                                    <?php echo $data['hire_date'];?>
                                </label>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Email</label>
                            <div class="controls">
                                <label class="checkbox">
                                    <?php echo $data['emp_email'];?>
                                </label>
                            </div>
                        </div>
                        <div class="form-actions">
                          <a class="btn" href="index.php">Back</a>
                       </div>


                    </div>
                </div>

    </div> <!-- /container -->
  </body>
</html>