<?php
$host="localhost",
$username="root",
$password="",
$database="realestate",

$connect=new mysqli($host,$username,$password,$database);
if ($connect)
{
    echo "database connected";
}
else{
    echo "not connected";
}














?>