<?php
// 載入db.php來連結資料庫
require_once 'db.php';
session_start();

if (!isset($_SESSION['MemberID']) || $_SESSION['loggedin'] == false) {
    header('Location:./homepage.php');
} else {
    $sq = sprintf("SELECT * FROM Member WHERE MemberID = %s", $_SESSION['MemberID']);
    $mem = mysqli_fetch_assoc(mysqli_query($con, $sq));
    if ((int)$mem['Authority'] == 3) {
        header('Location:./homepage.php');
    }
}

$sql1 = sprintf("SELECT * FROM MEMBER WHERE MemberID = %d", (int)$_SESSION['MemberID']);
$result1 = mysqli_query($con, $sql1);
$data1 = mysqli_fetch_assoc($result1);
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


            <div id="content" role="main" class="content-area">

                <div class="product-main">
                    <div class="row content-row mb-0">

                        <div class="product-gallery large-6 col">

                            <div class="product-images relative mb-half has-hover woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4">

                                <div class="badge-container is-larger absolute left top z-1">

                                </div>

                                <div class="image-tools absolute top show-on-hover right z-3">
                                </div>

                                <figure class="woocommerce-product-gallery__wrapper product-gallery-slider slider slider-nav-small mb-half" data-flickity-options='{
                                                                                                                                                                    "cellAlign": "center",
                                                                                                                                                                    "wrapAround": true,
                                                                                                                                                                    "autoPlay": false,
                                                                                                                                                                    "prevNextButtons":true,
                                                                                                                                                                    "adaptiveHeight": true,
                                                                                                                                                                    "imagesLoaded": true,
                                                                                                                                                                    "lazyLoad": 1,
                                                                                                                                                                    "dragThreshold" : 15,
                                                                                                                                                                    "pageDots": false,
                                                                                                                                                                    "rightToLeft": false
                                                                                                                                                                    }'>
                                    <div data-thumb="https://i.imgur.com/seTW58o.jpg" data-thumb-alt="" class="woocommerce-product-gallery__image slide first"><img style="height: 70%; width:70%;" src="https://i.imgur.com/seTW58o.jpg" class="wp-post-image skip-lazy" alt="" decoding="async" loading="lazy" title="8EC949A6-79F0-4179-A15D-E29861CE71B8" /></div>
                                </figure>


                            </div>

                        </div>

                        <div class="product-info summary col-fit col entry-summary product-summary text-left" style="margin-left: -100px;">

                            <h3 class="product-title product_title entry-title">使用者名稱: <?php echo $data1['Username']; ?></h3>
                            <h4 class="product-title product_title entry-title">使用者編號: <?php echo $data1['MemberID']; ?></h4>
                            <h4 class="product-title product_title entry-title">手機號碼: <?php echo $data1['Phone']; ?></h4>
                            <!-- <h4 class="product-title product_title entry-title">電子郵件: <?php echo $data1['Email']; ?></h4> -->
                            <div class="is-divider small"></div>
                            <div class="price-wrapper">
                                <p class="price product-page-price ">
                                    員工
                                </p>
                            </div>


                        </div>


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