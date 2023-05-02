<?php
include('db.php');
session_start();

$CarID = $_GET['CarID'];
$shoppingCart = $_SESSION['shoppingCart'];
$index = array_search($CarID, $shoppingCart);
array_splice($shoppingCart, $index, 1);

$_SESSION['shoppingCart'] = $shoppingCart;
header('location:./shoppingCart.php?CarID=%s');
