<?php
$host="localhost";
$user="root";
$pass="";
$db_name="E-Commerce";

$connection=mysqli_connect($host,$user,$pass,$db_name);

if(!isset($connection)){
    die("Database connection Failed");
}