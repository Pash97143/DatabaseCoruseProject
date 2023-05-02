<?php
include('db.php');
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === false) {
    echo '<script>alert("您尚未登入！")</script>';
    header("Location: ./index.php");
    exit;
}
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
                                    ?><a href="./index.php" class="nav-top-link">登入</a>
                                    <?php
                                    } else {
                                    ?><a href="./logout.php" class="nav-top-link">登出</a>
                                    <?php
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
                                                    <form role="search" method="POST" class="searchform" action="./homepage.php">
                                                        <div class="flex-row relative">
                                                            <div class="flex-col flex-grow">
                                                                <label class="screen-reader-text" for="woocommerce-product-search-field-0">搜尋關鍵字:</label>
                                                                <input type="search" id="woocommerce-product-search-field-0" class="search-field mb-0" placeholder="請輸入廠牌名稱&hellip;" value="" name="s" />
                                                            </div>
                                                            <div class="flex-col">
                                                                <button type="submit" value="搜尋" class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Submit">
                                                                    搜尋廠牌
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

                    </div>

                </div>
            </div>
        </header>

        <main id="main" class="">
            <?php
            $shoppingCart = $_SESSION['shoppingCart'];
            $count = 1;
            foreach ((array)$shoppingCart as $pro) {
                if (isset($_POST[sprintf('CouponNo%d', $count)]) && $_POST[sprintf('CouponNo%d', $count)] != '') {
            ?>
                    <input type="hidden" value="<?php echo $_POST[sprintf('CouponNo%d', $count)]; ?>" name="<?php echo sprintf('CouponNo%d', $count); ?>" form="orderEstablish">
            <?php
                }
                $count += 1;
            }

            $totalPrice = $_POST['totalPrice'];
            $shippingFee = $_POST['shippingFee'];
            $finalPrice = 0;
            ?>
            <div>
                <div class="container section-title-container" style="margin-top:30px;margin-bottom:40px;">
                    <div>
                        <h1 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:140%;margin-bottom: 10px; margin-top: 0px">結帳</span><b></b></h1>
                        <div>
                            <div style="margin: 0 50% 0% 10%;">

                                <div>
                                    <span style="font-size: larger;">訂單折扣後總金額為:</span>
                                    <span style="font-size: larger; color:black">
                                        <?php
                                        if (isset($_POST['orderDiscount']) && $_POST['orderDiscount'] != '') {
                                            $sqlc = sprintf("SELECT * FROM Coupon WHERE CouponID = %s", $_POST['orderDiscount']);
                                            $datac = mysqli_fetch_assoc(mysqli_query($con, $sqlc));
                                            echo '&nbsp;&#78;&#84;&nbsp;' . strval(intval($totalPrice) - intval($datac['Discount'])) . '&nbsp;&#36;';
                                            $finalPrice += (intval($totalPrice) - intval($datac['Discount']));
                                        } else {
                                            echo '&nbsp;&#78;&#84;&nbsp;' . $totalPrice . '&nbsp;&#36;';
                                            $finalPrice += $totalPrice;
                                        }

                                        ?>
                                    </span>
                                </div>

                                <div>
                                    <span style="font-size: larger;">運費折扣後金額為:　</span>
                                    <span style="font-size: larger; color:black">
                                        <?php
                                        if ($_POST['shippingDiscount'] == '' || !isset($_POST['shippingDiscount'])) {
                                            echo '&nbsp;&#78;&#84;&nbsp;' . $shippingFee . '&nbsp;&#36;';
                                            $finalPrice += $shippingFee;
                                        } else {
                                            $shippingFee = '0';
                                            echo '&nbsp;&#78;&#84;&nbsp;' . $shippingFee . '&#36;';
                                        }
                                        ?>
                                    </span>
                                </div>

                                <div>
                                    <span style="font-size: larger;">結帳總金額金額為　:</span>
                                    <span style="font-size: larger; color:black">
                                        <?php echo '&nbsp;&#78;&#84;&nbsp;' . strval($finalPrice) . '&nbsp;&#36;'; ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h1 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:140%;margin-bottom: 10px; margin-top: 20px">付款選項</span><b></b></h1>

                        <div style="margin:0px 0px 10px 100px">
                            <span style="margin-bottom: 10px;">請輸入運送地址:<br> </span>
                            <input type=" text" form="orderEstablish" name="address" style="width: 50%; margin-top:10px">
                        </div>

                        <div style="margin-left: 100px;">
                            <span>請選擇付款方式:&nbsp; </span>
                            <select name="paymentMethod" form="orderEstablish" style="width: 50%; margin-top:10px">
                                <option value="1">現金付款</option>
                                <option value="2">信用卡付款</option>
                                <option value="3">分期付款</option>
                            </select>
                        </div>
                        <form action="orderEstablish.php" id="orderEstablish" method="post">
                            <?php if (isset($_POST['orderDiscount']) && $_POST['orderDiscount'] != '') {
                            ?>
                                <input type="hidden" value="<?php echo $_POST['orderDiscount']; ?>" name="orderDiscount">
                            <?php
                            }
                            ?>

                            <input type="hidden" value="<?php echo $shippingFee; ?>" name="shipFee">
                            <input type="hidden" value="<?php echo $finalPrice; ?>" name="totalPrice">
                            <input type="submit" value="結帳付款" id="orderEstablishButton">
                        </form>
                        <style>
                            #orderEstablishButton {
                                padding: 3px 3px 3px 3px;
                                color: aliceblue;
                                font-size: 100%;
                                /* margin-left: auto; */
                                margin: 20px 50% 0% 10%;
                                border-radius: 10px;
                                width: 120px;
                                height: 45px;
                                background-color: darkslateblue;
                            }
                        </style>
                    </div>
                </div>
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