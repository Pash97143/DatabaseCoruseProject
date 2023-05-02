<?php
// $con=require_once("car_sell_db.php");
include('db.php');
?>

<!DOCTYPE html>
<html lang="zh-TW" class="loading-site no-js">

<head>
    <meta charset="UTF-8" />
    <script>
        (function(html) {
            html.className = html.className.replace(/\bno-js\b/, 'js')
        })(document.documentElement);
    </script>
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <title>二手車款 - 氣在來汽車商行</title>

    <link rel="stylesheet" type="text/css" href="stylesheet.css">

    <style id='wp-block-library-inline-css' type='text/css'>

    </style>
    <link data-minify="1" rel='stylesheet' id='font-awesome-official-css' href='http://sscars.com.tw/wp-content/cache/min/1/releases/v5.15.3/css/all.css?ver=1671857224' type='text/css' media='all' crossorigin="anonymous" />
    <link data-minify="1" rel='stylesheet' id='flatsome-main-css' href='http://sscars.com.tw/wp-content/cache/min/1/wp-content/themes/flatsome/assets/css/flatsome.css?ver=1671857224' type='text/css' media='all' />
    <link data-minify="1" rel='stylesheet' id='flatsome-shop-css' href='http://sscars.com.tw/wp-content/cache/min/1/wp-content/themes/flatsome/assets/css/flatsome-shop.css?ver=1671857224' type='text/css' media='all' />
    <link rel='stylesheet' id='flatsome-style-css' href='http://sscars.com.tw/wp-content/themes/flatsome-child/style.css?ver=3.0' type='text/css' media='all' />
    <link data-minify="1" rel='stylesheet' id='prdctfltr-css' href='http://sscars.com.tw/wp-content/cache/min/1/wp-content/plugins/prdctfltr/includes/css/styles.css?ver=1671857224' type='text/css' media='all' />
    <link data-minify="1" rel='stylesheet' id='font-awesome-official-v4shim-css' href='http://sscars.com.tw/wp-content/cache/min/1/releases/v5.15.3/css/v4-shims.css?ver=1671857224' type='text/css' media='all' crossorigin="anonymous" />

    <!--BG倒三角-->
    <script type='text/javascript' src='http://sscars.com.tw/wp-includes/js/jquery/jquery.min.js?ver=3.6.1' id='jquery-core-js'></script>
    <script type='text/javascript' src='http://sscars.com.tw/wp-content/plugins/yith-woocommerce-catalog-mode-premium/assets/js/button-label-frontend.min.js?ver=2.16.0' id='ywctm-button-label-js'></script>
    <link rel="https://api.w.org/" href="http://sscars.com.tw/wp-json/" />
    <link rel="alternate" type="application/json" href="http://sscars.com.tw/wp-json/wp/v2/pages/49" />
    <link rel="alternate" type="application/json+oembed" href="http://sscars.com.tw/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fsscars.com.tw%2Fcar%2F" />
    <link rel="alternate" type="text/xml+oembed" href="http://sscars.com.tw/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fsscars.com.tw%2Fcar%2F&#038;format=xml" />
    <meta name="generator" content="Site Kit by Google 1.84.0" />
    <!--BG倒三角-->

</head>

<body>


    <div id="wrapper">


        <header id="header" class="header has-sticky sticky-jump">
            <div class="header-wrapper">
                <div id="masthead" class="header-main ">
                    <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">

                        <!-- Logo -->
                        <div id="logo">

                            <!-- Header logo -->
                            <a href="homepage.php" title="氣在來汽車商行 - 堅持車況透明化、實車實圖實價、絕不調整里程數。" rel="home">
                                <img width="92" height="37" src="logo.png" class="header_logo header-logo" alt="氣在來汽車商行" /><img width="92" height="37" src="logo.png" class="header-logo-dark" alt="氣在來汽車商行" /></a>
                        </div>




                        <!-- Right Elements -->
                        <div class="flex-col hide-for-medium flex-right">
                            <ul class="header-nav header-nav-main nav nav-right  nav-size-large nav-spacing-large nav-uppercase">
                                <li id="menu-item-1250" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1250 menu-item-design-default">
                                    <a href="./user.php" class="nav-top-link">會員及訂單資訊</a>
                                </li>
                                <li id="menu-item-501" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-49 current_page_item menu-item-501 active menu-item-design-default">
                                    <a href="homepage.php" aria-current="page" class="nav-top-link">二手車款</a>
                                </li>
                                <li id="menu-item-58" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-58 menu-item-design-default">
                                    <?php
                                    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === false) {
                                    ?><a href="./index.php" class="nav-top-link">登入</a><?php
                                                                                    } else {
                                                                                        ?><a href="./logout.php" class="nav-top-link">登出</a><?php
                                                                                                                                        }
                                                                                                                                            ?>
                                </li>
                                <li id="menu-item-1238" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1238 menu-item-design-default">
                                    <a href="./shoppingCart.php" class="nav-top-link">購物車</a>
                                </li>
                                <li class="html header-button-1">
                                    <div class="header-button">
                                        <a href="./contact.php" class="button primary is-medium" style="border-radius:99px;">
                                            <span>聯絡我們賣車</span>
                                        </a>
                                    </div>
                                </li>


                                <li class="header-search header-search-dropdown has-icon has-dropdown menu-item-has-children">
                                    <div class="header-button"> <a href="#" aria-label="搜尋" class="icon button circle is-outline is-small">
                                            <!-- <i class="icon-search"></i> -->
                                            Search
                                        </a>
                                    </div>
                                    <ul class="nav-dropdown nav-dropdown-default">
                                        <li class="header-search-form search-form html relative has-icon">
                                            <div class="header-search-form-wrapper">
                                                <div class="searchform-wrapper ux-search-box relative form-flat is-normal">
                                                    <form role="search" method="get" class="searchform" action="./homepage.php">
                                                        <div class="flex-row relative">
                                                            <!-- <div class="flex-col search-form-categories">
                                                                <select class="search_categories resize-select mb-0"
                                                                    name="product_cat">
                                                                    <option value="" selected='selected'>All</option>
                                                                    <option value="color">顏色</option>
                                                                    <option value="color">廠牌</option>
                                                                </select>
                                                            </div> -->
                                                            <div class="flex-col flex-grow">
                                                                <label class="screen-reader-text" for="woocommerce-product-search-field-0">搜尋關鍵字:</label>
                                                                <input type="search" id="woocommerce-product-search-field-0" class="search-field mb-0" placeholder="搜尋&hellip;" value="" name="s" />
                                                                <!-- <input type="hidden" name="post_type" value="product" /> -->
                                                            </div>
                                                            <div class="flex-col">
                                                                <button type="submit" value="搜尋" class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Submit">
                                                                    <!-- <i class="icon-search"></i>  -->
                                                                    搜尋
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="live-search-results text-left z-top"></div>
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </div>

                        <!-- Mobile Right Elements -->
                        <div class="flex-col show-for-medium flex-right">
                            <ul class="mobile-nav nav nav-right ">
                                <li class="header-search header-search-dropdown has-icon has-dropdown menu-item-has-children">
                                    <div class="header-button"> <a href="#" aria-label="搜尋" class="icon button circle is-outline is-small">
                                            <!-- <i class="icon-search"></i> -->
                                            Search
                                        </a>
                                    </div>
                                    <ul class="nav-dropdown nav-dropdown-default">
                                        <li class="header-search-form search-form html relative has-icon">
                                            <div class="header-search-form-wrapper">
                                                <div class="searchform-wrapper ux-search-box relative form-flat is-normal">
                                                    <form role="search" method="get" class="searchform" action="http://sscars.com.tw/">
                                                        <div class="flex-row relative">
                                                            <div class="flex-col search-form-categories">
                                                                <select class="search_categories resize-select mb-0" name="product_cat">
                                                                    <option value="" selected='selected'>All</option>
                                                                    <option value="color">顏色</option>
                                                                    <option value="color">廠牌</option>
                                                                </select>
                                                            </div>
                                                            <div class="flex-col flex-grow">
                                                                <label class="screen-reader-text" for="woocommerce-product-search-field-1">搜尋關鍵字:</label>
                                                                <input type="search" id="woocommerce-product-search-field-1" class="search-field mb-0" placeholder="搜尋&hellip;" value="" name="s" />
                                                                <input type="hidden" name="post_type" value="product" />
                                                            </div>
                                                            <div class="flex-col">
                                                                <button type="submit" value="搜尋" class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Submit">
                                                                    <i class="icon-search"></i> </button>
                                                            </div>
                                                        </div>
                                                        <div class="live-search-results text-left z-top"></div>
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </header>


        <main id="main" class="">
            <div style="width:50%;margin:auto">
                <h1>註冊頁面</h1>
                <form name="registerForm" method="post" action="register.php">
                    帳　　號： <input type="text" name="Username" id="Username"><br /><br />
                    密　　碼： <input type="password" name="UPassword" id="UPassword"><br /><br />
                    確認密碼： <input type="password" name="UPassword_check" id="UPassword_check"><br /><br />
                    手機號碼： <input type="text" name="Phone" id="Phene"><br /><br />
                    電子郵件： <input type="text" name="Email" id="Email"><br /><br />

                    <input type="submit" value="註冊" name="submit">
                    <input type="reset" value="重設" name="submit">
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    if (
                        !isset($_POST["Username"]) || !isset($_POST["UPassword"]) || !isset($_POST["Phone"]) || !isset($_POST["Email"]) ||
                        $_POST["Username"] == '' || $_POST["UPassword"] == '' || $_POST["Phone"] == '' || $_POST["Email"] == ''
                    ) {
                        function_alert("註冊資料請填寫完整!");
                        exit;
                    }

                    if ($_POST["UPassword_check"] != $_POST["UPassword"]) {
                        function_alert("確認密碼與密碼不符!");
                        exit;
                    }

                    $Username  = $_POST["Username"];
                    $UPassword = $_POST["UPassword"];
                    $UPassword_check = $_POST["UPassword_check"];
                    $Phone  = $_POST["Phone"];
                    $Email  = $_POST["Email"];



                    $check1 = "SELECT * FROM member WHERE Username='" . $Username . "'";
                    $check2 = "SELECT * FROM member WHERE Phone='" . $Phone . "'";
                    $check3 = "SELECT * FROM member WHERE Email='" . $Email . "'";

                    if (mysqli_num_rows(mysqli_query($con, $check1)) > 0) {
                        function_alert("該使用者名稱已有人使用!");
                        exit;
                    } elseif (mysqli_num_rows(mysqli_query($con, $check2)) > 0) {
                        function_alert("該手機號碼已有人使用!");
                        exit;
                    } elseif (mysqli_num_rows(mysqli_query($con, $check3)) > 0) {
                        function_alert("該電子郵件已有人使用!");
                        exit;
                    } else {
                        $sql = sprintf("INSERT INTO member (Username, Upassword, Phone, Email)
                                            VALUES('%s', '%s', '%s', '%s')", $Username, $UPassword, $Phone, $Email);

                        if (mysqli_query($con, $sql)) {
                            echo "註冊成功!<br>";
                            echo "<a href='index.php'>點此返回登入頁面</a>";
                        } else {
                            echo "Error creating table: " . mysqli_error($con);
                            echo "<a href='register.php'>點此返回註冊頁面</a>";
                        }
                    }
                }


                mysqli_close($con);

                function function_alert($message)
                {

                    // Display the alert box  
                    echo "<script>alert('$message');
                        window.location.href='register.php';
                        </script>";

                    return false;
                }
                ?>
            </div>

        </main>


        <footer id="footer" class="footer-wrapper">

            <div class="absolute-footer dark medium-text-center text-center">
                氣在來二手車
            </div>

        </footer>

    </div>

    <div class="fb-customerchat" attribution="wordpress" attribution_version="2.3" page_id="312127815593772"></div>

</body>

</html>