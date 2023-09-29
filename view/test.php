<?php
require_once("../lib/configdb.php");

$targetDir = "../assets/img/users/";
$sql_img = "SELECT MAX(id) as id FROM usuarios;";
$result_img = $conn->query($sql_img);
if ($result_img->num_rows > 0) {
    echo "foi";
    echo "<br><br>";
    $row = $result_img->fetch_assoc();
    if ($row['id'] == NULL) {
        $id_img = 1;
    } else {
    $id_img = $row['id'];
    }
}
$targetFile = $targetDir . $id_img . ".jpeg";
echo $targetFile;