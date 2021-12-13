<?php 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "tks_new";

$con = mysqli_connect();

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("Failed to connect!");
}