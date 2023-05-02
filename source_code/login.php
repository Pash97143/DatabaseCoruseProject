<?php
include('db.php');


$Username = $_POST["Username"];
$UPassword = $_POST["UPassword"];
//增加hash可以提高安全性
$Upassword_hash = password_hash($UPassword, PASSWORD_DEFAULT);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = sprintf("SELECT * FROM Member WHERE Username = '%s'", $Username);
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        if ($data["UPassword"] == $UPassword) {
            session_start();

            $_SESSION["loggedin"] = true;

            $_SESSION["MemberID"] = $data["MemberID"];
            $_SESSION["Username"] = $data["Username"];
            $_SESSION['shoppingCart'] = array();

            header("location:homepage.php");
            mysqli_free_result($result);
        } else {
            mysqli_free_result($result);
            function_alert("帳號或密碼錯誤");
        }
    }
} else {
    function_alert("Something wrong");
}

// Close connection
mysqli_close($con);

function function_alert($message)
{

    echo "<script>alert('$message');
     window.location.href='index.php';
    </script>";
    return false;
}
