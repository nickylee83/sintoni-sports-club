<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/resources/admin/authenticate.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>News Posts Editor</title>
    <meta name="description" content="Sintoni Basic HTML file">
    <meta name="author" content="Fernanda Rodrigues, Henrique Rodrigues, Myo Thet Tun, Victor Mari Rodríguez">

    <!-- Font Awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- bootstrap Css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Sintoni CSS -->
    <link rel="stylesheet" href="../public_html/styles.css">
    <!-- Quills Text Editor js -->
    <script src="https://cdn.quilljs.com/1.1.3/quill.js"></script>
    <script src="https://cdn.quilljs.com/1.1.3/min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Include Quill stylesheet -->
    <link href="https://cdn.quilljs.com/1.1.3/quill.snow.css" rel="stylesheet">
    <link href="https://cdn.quilljs.com/1.1.3/quill.bubble.css" rel="stylesheet">

</head>
<body>
<header>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Sintoni Sports Club</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Membership</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
    </nav>
</header>

<!-- News Post Editor starts here -->
<form action="" method="GET">
    <h1>News Posts Editor</h1>
    <!-- Create the toolbar container -->
    <div id="toolbar">
    </div>

    <!-- Create the editor container -->
    <div id="editor">
    </div>
    <p>
    <div id="button">
        <input type= "submit" id= "saveNews" name="saveNews" value= "Save News Post">
    </div>
    </p>
    <!-- Initialize Quill editor -->
    <script>
        var toolbarOptions = [
            ['bold','italic','underline'],[{'header':[1,false]}],[{'script':'sub'}],[{'script':'super'}]
        ];

        var quill = new Quill('#editor',
            {
                modules:
                    {
                        toolbar: toolbarOptions
                    },
                theme: 'snow'
            });

        $('#saveNews').click(function(){
            var delta = quill.getContents();

        });

    </script>
</form>
<?php
require_once(__ROOT__.'/resources/Database.php');
$pdo = Database::connect();
// function get header 1
function getTextBetweenH1($string)
{
    $pattern = "/<h1>(.*?)<\/h1>/";
    preg_match($pattern, $string, $matches);
    return ($matches[0]);
}
// if save is pressed
if(isset($_GET['saveNews'])) {
    // testing h1 function
    $h1 = getTextBetweenH1('<h1>me</h1><p>blah</p>');
    echo $h1;
}

?>

</body>
</html>