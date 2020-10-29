<?php
/**
 * Created by PhpStorm.
 * User: henrique
 * Date: 10/04/18
 * Time: 00:57
 */

error_reporting(E_ALL);
ini_set('display_errors', 'on');
$TITLE = "UPDATE";
include "inc/header.php";


require 'inc/database.php';

function validateDate($date, $format = 'Y-m-d')
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}

$id = null;
if ( !empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}

if ( null==$id ) {
    header("Location: index.php");
}

if ( !empty($_POST)) {
    // keep track validation errors
    $nameError = null;
    $genderError = null;
    $hireError = null;
    $emailError = null;



    // keep track post values
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $hire_date = $_POST['hire_date'];
    $email = $_POST['email'];



    // validate input
    $valid = true;
    if (empty($name)) {
        $nameError = 'Please enter Name';
        $valid = false;
    }

    if (empty($email)) {
        $emailError = 'Please enter Email Address';
        $valid = false;
    } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
        $emailError = 'Please enter a valid Email Address';
        $valid = false;
    }

    if (empty($hire_date) or !validateDate($hire_date)) {
        $hireError = 'Please enter valid Date';
        $valid = false;
    }

    // update data
    if ($valid) {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE employees  set emp_name = ?, gender = ?, hire_date = ?, emp_email = ? WHERE emp_no = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($name,$gender,$hire_date,$email,$id));
        Database::disconnect();
        header("Location: index.php");
    }
} else {
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM employees where emp_no = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    $name = $data['emp_name'];
    $gender = $data['gender'];
    $hire_date = $data['hire_date'];
    $email = $data['emp_email'];
    Database::disconnect();
}

?>


<body>
<div class="container">

    <div class="span10 offset1">
        <div class="row">
            <h3>Update</h3>
        </div>

        <form class="form-horizontal" action="update.php?id=<?php echo $id?>" method="post">
            <div class="control-group <?php echo !empty($nameError)?'error':'';?>">
                <label class="control-label">Name</label>
                <div class="controls">
                    <input name="name" type="text"  placeholder="Name" value="<?php echo !empty($name)?$name:'';?>">
                    <?php if (!empty($nameError)): ?>
                        <span class="help-inline"><?php echo $nameError;?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Gender</label>
                <div class="controls">
                    <input type="radio" name="gender" value="M" checked> Male<br>
                    <input type="radio" name="gender" value="F"> Female<br>
                </div>
            </div>
            <div class="control-group <?php echo !empty($hireError)?'error':'';?>">
                <label class="control-label">Hire Date</label>
                <div class="controls">
                    <input name="hire_date" type="text"  placeholder="Hire Date" value="<?php echo !empty($hire_date)?$hire_date:'';?>">
                    <?php if (!empty($mobileError)): ?>
                        <span class="help-inline"><?php echo $mobileError;?></span>
                    <?php endif;?>
                </div>
            </div>

            <div class="control-group <?php echo !empty($emailError)?'error':'';?>">
                <label class="control-label">Email Address</label>
                <div class="controls">
                    <input name="email" type="text" placeholder="Email Address" value="<?php echo !empty($email)?$email:'';?>">
                    <?php if (!empty($emailError)): ?>
                        <span class="help-inline"><?php echo $emailError;?></span>
                    <?php endif;?>
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-success">Update</button>
                <a class="btn" href="index.php">Back</a>
            </div>
        </form>
    </div>

</div> <!-- /container -->
</body>
</html>