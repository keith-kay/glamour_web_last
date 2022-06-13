<?php
session_start();
$servername = "localhost";
$uname = "ninah";
$password = "sharonallanjaironinah";
$db_name = "glm_db";

$db = mysqli_connect($servername, $uname, $password, $db_name);
if (!$db)
{
    echo "Connection Failed!";
    exit();
}
?>