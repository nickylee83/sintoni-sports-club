<?php
/**
 * Created by PhpStorm.
 * User: Casa
 * Date: 08/05/2018
 * Time: 20:17
 */

echo "<table border=\"1\">";
echo "<tr><td>Client Filename: </td>
<td>" . $_FILES["fileName"]["name"] . "</td></tr>";
echo "<tr><td>File Type: </td>
<td>" . $_FILES["fileName"]["type"] . "</td></tr>";
echo "<tr><td>File Size: </td>
<td>" . ($_FILES["fileName"]["size"] / 1024) . " Kb</td></tr>";
echo "<tr><td>Name of Temporary File: </td>
<td>" . $_FILES["fileName"]["tmp_name"] . "</td></tr>";
echo "</table>";

if ($_FILES["fileName"]["error"] > 0) {
    echo "Oh no! An error has occurred.";
    echo "Error Code: " . $_FILES["fileName"]["error"];
} else {
    move_uploaded_file($_FILES["fileName"]["tmp_name"],
        "../uploads/" . $_FILES["fileName"]["name"]);
}


?>