<?php

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "test";

    $connection = new mysqli($servername, $username, $password, $database);
    $sql = "DELETE FROM main_table WHERE ins_comp_name = '$id'";
    echo $id;
    echo  "<div class = 'alert alert-warning alert-dissmissible fade show' role='alert'>
    <strong>$id</strong>
    </div>";
    
    $connection->query($sql);
}
exit;
?>

