<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "********";
$database = "car_sell"; //因為是本地測試，改這一段就好(輸入你指定的資料庫名稱，我指定test_2021，如下圖)

$con = mysqli_connect("$db_host", "$db_username", "$db_password", "$database");

if(!$con)
{
	die("連線失敗!!!!!");

	$ssql = "set names utf8";
	mysqli_query($con,$ssql);
}
?>