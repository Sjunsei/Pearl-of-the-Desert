<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "login_pearls";

if(!$con = mysqli_connect($db_host, $db_host, $db_pass, $db_name))
{
    die("failed to connect!");
}
