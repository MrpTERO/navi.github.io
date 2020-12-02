<?php
$host = "localhost";
$user = "root";
$pass = "";

$link = mysqli_connect($host,$user,$pass);
$db = mysqli_select_db($link,"jemeljanov");
$query1 = mysqli_query($link,"settings utf8");
$query2 = mysqli_query($link,"languages utf8");
$query3 = mysqli_query($link,"services utf8");
$query4 = mysqli_query($link,"menu utf8");
$query5 = mysqli_query($link,"terms utf8");
?>