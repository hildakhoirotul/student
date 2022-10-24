<?php
$connect = mysqli_connect("localhost", "root", "", "myRDS");

// Check connection
if (mysqli_connect_errno()) {
    echo "Connection Failed : " . mysqli_connect_error();
}
