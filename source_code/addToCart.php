<?php
include('db.php');
session_start();


$CarID = $_GET['CarID'];
$shoppingCart = $_SESSION['shoppingCart'];
if (!in_array($CarID, $shoppingCart)) {
    array_push($shoppingCart, $CarID);
}
$_SESSION['shoppingCart'] = $shoppingCart;
$s = sprintf('location:./homepage.php?CarID=%s', $CarID);
header($s);
?>
<html>

</html>