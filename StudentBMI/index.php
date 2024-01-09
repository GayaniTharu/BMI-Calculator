<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentdb";


$conn = mysqli_connect("localhost", "root", "", "studentdb");

if ($conn) {
    echo "Successfully Connected";
} else {
    echo "Connection Faild";
}