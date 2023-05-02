<?php
include('db.php');
session_start();
// if $_SESSION['MemberID'];

if (!isset($_SESSION['MemberID']) || $_SESSION['loggedin'] == false) {
    header('Location:./homepage.php');
} else {
    $sq = sprintf("SELECT * FROM Member WHERE MemberID = %s", $_SESSION['MemberID']);
    $mem = mysqli_fetch_assoc(mysqli_query($con, $sq));
    if ((int)$mem['Authority'] == 3) {
        header('Location:./homepage.php');
    }
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
</head>

<body onload="makeBar()">


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

                                <li id="menu-item-501" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-49 current_page_item menu-item-501 active menu-item-design-default">
                                    <a href="./homepage.php" aria-current="page" class="nav-top-link">二手車款</a>
                                </li>

                                <li id="menu-item-1250" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1250 menu-item-design-default">
                                    <a href="./staff.php" aria-current="page" class="nav-top-link">使用者資訊</a>
                                </li>

                                <li id="menu-item-1250" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1250 menu-item-design-default">
                                    <a href="./statistic.php" aria-current="page" class="nav-top-link">報表統計</a>
                                </li>

                                <li id="menu-item-1250" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1250 menu-item-design-default">
                                    <a href="./orders.php" class="nav-top-link">訂單資訊處理</a>
                                </li>

                                <li id="menu-item-1250" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1250 menu-item-design-default">
                                    <a href="./cars.php" class="nav-top-link">車輛相關</a>
                                </li>

                                <!-- <li id="menu-item-1250"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1250 menu-item-design-default">
                                    <a href="./carInsert.php" class="nav-top-link">車輛上架</a>
                                </li>

                                <li id="menu-item-1250"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1250 menu-item-design-default">
                                    <a href="./carDelete.php" class="nav-top-link">車輛下架</a>
                                </li> -->

                                <li id="menu-item-1250" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1250 menu-item-design-default">
                                    <a href="./coupons.php" class="nav-top-link">優惠券相關</a>
                                </li>

                                <!-- <li id="menu-item-1250"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1250 menu-item-design-default">
                                    <a href="./couponInsert.php" class="nav-top-link">優惠券上架</a>
                                </li>

                                <li id="menu-item-1250"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1250 menu-item-design-default">
                                    <a href="./couponDelete.php" class="nav-top-link">優惠券下架</a>
                                </li> -->

                                <li id="menu-item-58" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-58 menu-item-design-default">
                                    <a href="./logout.php" class="nav-top-link">登出</a>
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

                        <!-- Mobile Right Elements -->


                    </div>

                </div>
            </div>
        </header>


        <main id="main" class="">
            <div>
                <form action="statistic.php" method="GET">
                    <select name="month" style="margin: auto;width:200px;margin-bottom:10px">
                        <option value="" selected></option>
                        <option value="1">一月</option>
                        <option value="2">二月</option>
                        <option value="3">三月</option>
                        <option value="4">四月</option>
                        <option value="5">五月</option>
                        <option value="6">六月</option>
                        <option value="7">七月</option>
                        <option value="8">八月</option>
                        <option value="9">九月</option>
                        <option value="10">十月</option>
                        <option value="11">十一月</option>
                        <option value="12">十二月</option>
                    </select>
                    <input type="submit" value="查詢該月銷售" style="border-radius: 10px; width:150px; margin-left:690px;margin-top:10px">
                </form>

                <?php
                if (isset($_GET['month']) && $_GET['month'] != '') {
                    $datas = array();
                    array_push($datas, array());
                    array_push($datas, array());
                    $sql = sprintf("SELECT * FROM ORDERS WHERE MONTH(OrderDate) = %s", $_GET['month']);
                    $result = mysqli_query($con, $sql);
                    foreach ($result as $order) {
                        $sql2 = sprintf("SELECT * FROM CAR WHERE OrderID = %s", $order['OrderID']);
                        $result2 = mysqli_query($con, $sql2);
                        foreach ($result2 as $car) {
                            if (!in_array(strtoupper($car['Brand']), $datas[0])) {
                                array_push($datas[0], strtoupper($car['Brand']));
                                array_push($datas[1], 1);
                            } else {
                                $index = array_search(strtoupper($car['Brand']), $datas[0]);
                                $datas[1][$index] += 1;
                            }
                        }
                    }
                ?>

                    <script type="">
                        // import { Line } from "react-chartjs-2";
                        function makeBar() {
                            // console.log('exe');
                            var d1 = [],
                                d2 = [];
                            <?php
                            foreach ($datas[0] as $brand) {
                            ?>
                                d1.push('<?php echo $brand ?>')
                            <?php
                            }
                            foreach ($datas[1] as $num) {
                            ?>
                                d2.push(<?php echo $num ?>)
                            <?php
                            } ?>

                            for (let i = 0; i < d1.length; i++) {
                                console.log(d1[i]);
                            }
                            for (let index = 0; index < d2.length; index++) {
                                d2[index] = parseInt(d2[index]);
                            }
                            var ctx = document.getElementById('chart').getContext('2d');
                            var chart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: d1,
                                    datasets: [{
                                        label: '# of sales',
                                        data: d2
                                    }]
                                }
                            })
                        }
                    </script>
                <?php
                }
                ?>


            </div>
            <div class="chartContainer">
                <canvas id="chart"></canvas>
            </div>
            <style>
                .chartContainer {
                    width: 1000px;
                    height: 750px;
                }
            </style>
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