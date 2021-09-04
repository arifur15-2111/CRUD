<?php
    $id = $_GET['id'];
    $con = mysqli_connect('localhost', 'root', '', 'crud');
    $sql = "DELETE FROM employee WHERE id = $id";
    $result = mysqli_query($con, $sql);
    header('Location: index.php');
?>