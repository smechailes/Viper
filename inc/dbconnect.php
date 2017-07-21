<?php
const DB_HOST = "localhost";
const DB_USER = "root";
const DB_PASSWORD = "";
const DB_NAME = "test";

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD) OR die("Error in establishing database connection due to ".mysqli_error($conn));

$db = mysqli_select_db($conn, DB_NAME) OR die("mysqli_error($conn)");
?>