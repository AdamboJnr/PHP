<?php
$host="localhost";
$user="root";
$pswd="";
$db_name="PracticeDb";
//connection to db
$connect=mysqli_connect($host,$user,$pswd,$db_name);
//check if connection failed
if(!isset($connect)){
    die("Connection to Database Failed");
}