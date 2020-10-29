<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/resources/header.php');
?>


    <!-- Member registration form starts here -->
    <div class="main-container">
        <div class= "container news-page">
            <h2> Membership Registration </h2>

            <form action="" method="GET">
                First Name: <input type= "text" name= "fname" size="30" maxlength= "30" required />
                <br />
                <br />
                Last Name: <input type= "text" name= "lname" size="30" maxlength= "30" required />
                <br /><br />
                Gender: <select name= "Gender">
                    <option>Male</option>
                    <option>Female</option>
                </select>
                <br /><br />
                Date of birth: <input type= "date" name= "dob" value= "" />
                <br /><br />
                Address: <input type= "text" name= "addr" value= "" size="60" maxlength= "60" required /><br /><br />
                Mobile: <input type= "text" name= "mobile" value= "" />
                <br /><br />
                Email: <input type= "email" name= "email" size="60" value= "" />
                <br /><br />
                <input type="submit" name="submit" value= "Submit" />
            </form>

        </div>
    </div>
<?php
require_once(__ROOT__.'/resources/footer.php');
?>