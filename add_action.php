<?php
include 'connect.php';

$name = $_POST['name'];
$nim = $_POST['nim'];
$address = $_POST['address'];

mysqli_query($connect, "insert into student values('','$name','$nim','$address')");

header("location:index.php");
