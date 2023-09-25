<?php
$db_name = "furniture_db";
$host = "localhost";
$username = "odichimma";
$password = "1234";
//create connection
$connect=mysqli_connect($db_name,$host, $username, $password);

//check connection
if(!$connect){
    echo'could not connect'.mysqli_connect_error();//displays the reason for the error
}


?>